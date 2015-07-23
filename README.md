## fis3-plus

> FIS 3 利用 Smarty 模板引擎实现前后端分离模块化的解决方案

### 安装 Node 和 NPM

详细过程参考官网 https://nodejs.org

### 安装 FIS3

```bash
npm install -g fis3
```

### 升级 FIS3

```bash
npm update -g fis3
```
或重装

```bash
npm install -g fis3
```

### 依赖的插件
```bash
npm install -g fis3-hook-module
npm install -g fis3-postpackager-loader
npm install -g fis-parser-less
npm install -g fis-parser-ejs
```
### 命令

> 项目根目录：FIS3 配置文件（默认`fis-conf.js`）所在的目录为项目根目录。
> 以下命令需要对应修改 `fis-conf.js` 文件中 `CONFIG` 常量的绝对路径。

#### 发布到本地目录下

```bash
fis3 release local
```

#### 发布到QA环境下

```bash
fis3 release qa
```

#### 线上编译发布

```bash
fis3 release production
```



