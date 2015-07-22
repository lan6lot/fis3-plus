/*
 * fis3 smarty demo
 */

fis.set('project.ignore', ['node_modules/**','bower_components/**','output/**','*.md','bower.json','fis-conf.js']);

// static目录
fis.set('static','/static');
// view目录
fis.set('view','/apps/modules/www/views');
// map目录
fis.set('map','/libs/smarty/config');

var CONFIG = {

    // QA 测试部署路径
    deploy_qa: {
        receiver : 'http://www.fis-smarty.com/receiver.php',
        root : '/Users/kenny/fis3/fis3-plus/www/'
    },
    // 本地测试部署路径
    deploy_local: {
        root : '/Users/kenny/fis3/fis3-plus/www/'
    },
    // 线上环境部署路径
    production: {
        root : '/Users/kenny/fis3/fis3-plus/www/'
    },
    // 发布domain
    domain : {
        online : 'http://www.your-domain.com',
        cdn : 'http://www.your-cdn.com'
    },
    // 模块拆分
    modules : ['common','index']
}

// md5都关掉
fis.match('*', {
    release: '${static}/$0'
});

// tpl文件
fis.match('*.tpl', {
        release: '${view}/$0'
    })
    .match('/(**/widget/**/*.tpl)', {
        useMap: true,
        url: '$1'
    })

// 资源映射表加入Smarty config
fis.match('map.json', {
    release: '${map}/$0'
});

// less文件编译成css
fis.match('*.less', {
    parser: fis.plugin('less'),
    rExt: '.css'
})

// ejs模板引擎解析
fis.match('*.ejs', {
    parser: fis.plugin('ejs'),
    rExt: '.js'
});


// 开启同名依赖, 模板会依赖同名css、js；js 会依赖同名 css，不需要显式引用。
fis.match('/**/widget/**', {
    useSameNameRequire: true
});

/* 
 * 前端模块化
 * 使用FIS3的mod.js
 */
fis.hook('module', {
        mode: 'commonJS'
    }).match('/common/widget/**/*.js', {
        isMod: true
    })

fis.match('::package', {
    // npm install [-g] fis3-postpackager-loader
    // 分析 __RESOURCE_MAP__ 结构，来解决资源加载问题
    postpackager: fis.plugin('loader', {
        resourceType: 'commonJs',
        useInlineMap: true // 资源映射表内嵌
    })
});

// match('*.{js,less,png,jpg}')

// fis3 release local
fis.media('local').match('*', {
    deploy: fis.plugin('local-deliver', {
        to: CONFIG.deploy_local.root
    })
})

// fis3 release qa
fis.media('qa').match('*', {
    deploy: fis.plugin('http-push', {
        receiver: CONFIG.deploy_qa.receiver,
        to: CONFIG.deploy_qa.root
    })
})

// fis3 release production
fis.media('production').match('*',{
        useHash: true,
        deploy: fis.plugin('local-deliver', {
            to: CONFIG.production.root
        })
    }).match('*.tpl', {
        useHash: false
    }).match('map.json', {
        useHash: false
    })
    // 静态资源压缩
    .match('*.less', {
        optimizer: fis.plugin('clean-css', {
            // option of clean-css
        })
    })
    .match('*.js', {
        optimizer: fis.plugin('uglify-js', {
            // https://github.com/mishoo/UglifyJS2#compressor-options
        })
    })
    // 压缩png文件
    .match('*.png', {
        optimizer: fis.plugin('png-compressor', {
            // pngcrush or pngquant
            // pngcrush - http://pmt.sourceforge.net/pngcrush
            // pngquant - https://pngquant.org
            type : 'pngquant'
        })
    })
    // CSS Sprites
    .match('::package', {
        spriter: fis.plugin('csssprites')
    }).match('*.less', {
        // 给匹配到的文件分配属性 `useSprite`
        useSprite: true
    })

    // 静态资源打包
    // .match('::packager', {
    //     postpackager: fis.plugin('loader', {
    //         allInOne: true,
    //         processor: {
    //           'tpl': 'html'
    //         }
    //     })
    // })


    .match('/index/widget/**/*.js', {
        packTo: '/pkg/index_pkg.js'

    }).match('/common/widget/**/*.js', {
        packTo: '/pkg/common_pkg.js'

    }).match('/index/static/script/*.js', {
        packTo: '/pkg/lib_pkg.js'

    }).match('/index/widget/**/*.less', {
        packTo: '/pkg/index.css'
    })


