## fis3-plus

Under Developing

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
npm install -g fis-parser-ejs
npm install -g fis-parser-less
```
### 命令

进入**项目根目录**执行命令，进行构建。
> 项目根目录：FIS3 配置文件（默认`fis-conf.js`）所在的目录为项目根目录。

```bash
fis3 release -d <path>
```
- `<path>` 任意目录
- `fis3 release -h` 获取更多参数

#### 构建发布到项目目录的 `output` 目录下

```bash
fis3 release -d ./output
```


