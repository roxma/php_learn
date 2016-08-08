# PHP 学习笔记

## PHP 7 安装

使用 remirepo。remi 是 PECL 的成员，值得信赖。

如果是 CentOS 6.x，把 `http://rpms.remirepo.net/enterprise/remi-release-7.rpm`  里面的 7 改成 6：

```bash
yum install scl-utils
yum install http://rpms.remirepo.net/enterprise/remi-release-7.rpm
yum install -y php70
yum install -y php70-php-cli
yum install -y php70-php-mysqlnd
yum install -y php70-php-curl
yum install -y php70-php-pdo
yum install -y php70-php-simplexml
yum install -y php70-php-fpm php70-php-process
yum install -y php70-php-devel php70-php-gd php70-php-json php70-php-mcrypt php70-php-mbstring php70-php-opcache php70-php-pear 
yum install -y php70-php-pecl-apcu php70-php-pecl-geoip php70-php-pecl-imagick php70-php-pecl-json-post php70-php-pecl-memcache 
yum install -y php70-php-pecl-xmldiff php70-php-pspell php70-php-soap php70-php-tidy php70-php-xml php70-php-xmlrpc
```

也可以用 epel 的仓库：

CentOS/RHEL 7.x：

```bash
rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
rpm -Uvh https://mirror.webtatic.com/yum/el7/webtatic-release.rpm
```

CentOS/REHL 6.x:

```bash
rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-6.noarch.rpm
rpm -Uvh https://mirror.webtatic.com/yum/el6/latest.rpm
```

然后

```bash
yum install php70w php70w-opcache
# ...... blah blah bhal ...
```


## 当前 pear 安装包


```txt
[roxma@VM_67_229_centos reveal.js]$ pear list -a
Installed packages, channel __uri:
==================================
(no packages installed)

Installed packages, channel doc.php.net:
========================================
Package Version    State
pman    2015.06.19 stable

Installed packages, channel pear.php.net:
=========================================
Package          Version State
Archive_Tar      1.4.2   stable
Console_Getopt   1.4.1   stable
PEAR             1.10.1  stable
PEAR_Manpages    1.10.0  stable
Structures_Graph 1.1.1   stable
XML_Util         1.3.0   stable

Installed packages, channel pecl.php.net:
=========================================
Package  Version  State
memcache 3.0.9dev devel
zip      1.13.3   stable
```

其中

- `pman` 命令用于查看 php 函数文档。

安装命令

```bash
pear install doc.php.net/pman
pear install Archive_Tar Console_Getopt PEAR PEAR_Manpages Structures_Graph XML_Util
# pecl install zip memcache
yum install php70-php-pecl-zip  php70-php-pecl-memcache
```

