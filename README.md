## phpFrameStudy

### xampp 配置虚拟主机

- 打开 C:\Windows\System32\drivers\etc\hosts

   在该文件底部添加以下代码并保存：
   ```
   127.0.0.1  project.l.com
   ```
- 编辑 E:\xampp\apache\conf\httpd.conf

   在该文件最底部添加:
   ```
   <VirtualHost *:80>
     ServerName project.l.com
     DocumentRoot "E:/XAMPP/htdocs/phpFrameStudy"
   <\/VirtualHost>
   ```
- 重启 apache 服务

### win安装composer

- 配置好php系统环境变量

  打开我的电脑->属性->高级系统设置  
  环境变量设置界面 系统变量 选中Path编辑
  在变量值一栏的最后输入英文的分号加上php.exe的路径

- 打开PHP配置文件E:\xampp\php\php.ini确认以下模块已开启（移除前面的分号）
  ```
   extension=php_openssl.dll,
   extension=php_curl.dll, 
   extension=php_sockets.dll
  ```
- 检查扩展路径
  ```
  extension_dir = "E:\xampp\php\ext"
  browscap = "E:\xampp\php\extras\browscap.ini"
  ```
- 下载Windows平台下Composer的安装文件并安装：
  
  https://getcomposer.org/Composer-Setup.exe
  
  安装过程中需要选择你的php安装目录下的php.exe文件选择路径。
  
  命令行运行：`composer -v`