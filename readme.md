# LeShare -- 以分享为中心

> 为分享动作提供的内容平台。

![](http://oh6t02bhk.bkt.clouddn.com/1.png)

## 实现

项目以 `Laravel 5.2` 为基础，以`Restful API`为设计规范，搭配`OAuth2`实现API服务。

## 主要功能

* 主题的查看与创建
* 评论模块的实现
* 分类实现
* 手机号注册与登陆（无密码设计，统一采用短信验证码）

## API
* `POST  /oauth/access_token`  获取Token
* `POST /sms`  发送验证码
* `GET /me  `   获取个人信息
* `PUT /me ` 修改个人信息
* `GET /topics ` 获取主题列表
* `GET /topics/{id} ` 获取主题内容
* `GET /me/topics ` 获取我的主题列表
* `POST /topics ` 创建一个主题
* `GET /topics/{topic_id}/comments ` 获取某个主题下的评论
* `GET /comments/{id} ` 获取某个评论下的回复
* `POST /topics/{topic_id}/comments ` 评论某个主题
* `GET /me/comments ` 获取的我的评论列表
