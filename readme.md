![](http://static.laravelacademy.org/wp-statics/images/carousel/LaravelAcademy.jpg)
# Install 项目安装步骤
1. 拷贝修改自己的项目.env （homestead环境下需要将.env的数据库端口指定为33060）

2. 使用composer安装项目依赖到的包,类似Maven的包管理机制
  `$ composer install`

3. 生成项目唯一的key
  $ php artisan key:generate

4. 数据库迁移
  $php artisan migrate

5. 数据填充
  $php artisan db:seed

***
### 前端插件安装说明  
>参考[博客](https://baijunyao.com/article/102)

1. 安装npm(npm是nodejs提供的包管理器，如果安装过nodejs,请忽略)
  $npm -v #查看npm版本

2. 安装npm的淘宝映像cnmp,因为国内npm安装包时非常慢
  $ npm install -g cnpm --registry=https://registry.npm.taobao.org

3. 安装项目插件
  $cnpm install
  $cnpm install -g gulp #全局安装gulp

4. 配置好gulp.js中的任务

5. 启动gulp
  $gulp
***
##项目使用到的插件
1. uuid [文档地址](https://packagist.org/packages/emadadly/laravel-uuid)

***
## composer常用命令
* composer install - 如有 composer.lock 文件，直接安装
* composer.json 安装最新扩展包和依赖；
* composer update - 从 composer.json 安装最新扩展包和依赖；
* composer update vendor/package - 从 composer.json或者对应包的配置并更新到最新
* composer require new/package - 添加安装 new/package, 可以指定版本，如：
* composer require new/package ~2.5.
* composer remove ramsey/uuid   卸载包

***
## Markdown
>[**MarkDown10分钟入门**](http://www.jianshu.com/p/1e402922ee32/)

***
##laravel常用命令
* 创建模型的同时顺便创建数据库迁移则可以使用 --migration 或 -m 选项
`$ php artisan make:model Models/Article -m `

***
##larvel中约定优于配置
Eloquent 数据表命名约定机制即属于『约定优于配置』，数据模型类 Article 按照系统约定对应于 articles 数据表，
如果我们因为特殊原因需要使用其他表名称，只需要通过配置 $table 即可达到预期
