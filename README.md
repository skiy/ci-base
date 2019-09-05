CI-Base
------
Codeiginter 3.x multiple entrances use the same asset data.

**Version:** 3.1.10   

English | [简体中文](./README_CN.md)    

## Usage
1. git clone https://github.com/skiy/ci-base.git   
2. Set **nginx**，modify and move to the ```nginx/conf/vhost``` configuration directory according to the configuration file of the ```nginx``` directory (modified according to the environment).
>> modify server_name(domain), $enter_file(entry file}), root(root path), filter page(filter page)

3. Restart **nginx**
4. Two separate projects(Demo):   
**admin**(admin.php): http://ci1.us2.mmapp.cc   
**website**(index.php): http://ci2.us2.mmapp.cc      

## Author
Author: Skiychan   
Email : dev@skiy.net   
Link  : https://www.skiy.net 

## License
This project is licensed under the [MIT license](https://github.com/totoval/totoval/blob/master/LICENSE).