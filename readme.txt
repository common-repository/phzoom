=== Plugin Name ===
Contributors: BenJemin,Phoetry
Donate link: http://phoetry.me/archives/phzoom.html
Tags: image, jquery, photo, picture, lightbox, phzoom, images, 灯箱
Requires at least: 2.6
Tested up to: 3.5.1
Stable tag: 1.2.92

phZoom is a kind of plugin board, based on jQuery to show photos light box effects.

== Description ==

phZoom is a kind of plugin board, based on jQuery to show photos light box effects. Although phZoom's volume is very small, it still can show special picture animations. It supports most browers as well, included IE+. If picture links were webs, it could not show this effect. 

phZoom是一个轻量级看图插件, 基于jQuery 1.4+. phZoom目前支持大多数主流浏览器, 包括IE家族. phZoom拥有苗条的身材(仅3kb+), 以及与众不同的动画特效. 
并且如果图片链接为网址, 则不会应用这个效果.

= 1.2.92 =

* 增加图片地址判断
* 继续强化pos数组, 提高其效率
* 使用YUICompressor压缩代码
* 调整了一些重要变量的命名了

= 1.2.91 =

* 修复IE(6|7|8)下无法创建小图hover的BUG
* 设置项returnOrigin现在可以完全正常工作了

= 1.2.9 =

* 精简pos数组, 减少两个item
* 略微提升大图loading阶段的性能
* 希望1.30将是phZoom的第一个稳定版


**Demo:**

http://phoetry.me/archives/phzoom.html

**Supported Languages:**

* US English/en_US (translate by [Ben](http://www.douban.com/people/benisme/))
* 简体中文/zh_CN (default)


== Installation ==

**The following things are required:**


1. Your WordPress is 2.6 or higher version.

2. Your Theme must include this code: `<?php wp_head()?>` and `<?php wp_footer()?>`


**Just follow there simple steps to install this plugin:**


1. Unzip archive to the '/wp-content/plugins/' directory.

2. Activate the plugin through the 'Plugins' tab in WordPress.

3. Goto 'Settings -> phZoom Options', input and save changes.



**若您要使用该才插件, 请确保满足以下条件:**

1. 您正在使用 WordPress 2.6 或以上版本.
2. 您正在使用的主题内包含`<?php wp_head()?>` 和 `<?php wp_footer()?>`两个代码

**安装步骤:**


1. 将压缩包解压到 "/wp-content/plugins/" 目录中.

2. 到 WordPress 后台的 "Plugins" 页面激活该插件.

3. 到 WordPress 后台的 "Settings -> phZoom 设置" 页面, 输入相关信息和保存设置.

== Frequently Asked Questions ==
= I active plugin, but why not become effect?(我开启了插件为什么没有效果) =

Check the plugin setting in the first set, because the default value is #content, but many theme do not have this ID.

请检查插件设置中的第一个设置，因为默认为#content，而许多主题并没有此ID

if you have any questions, please come to [Author's blog](http://phoetry.me/ "phZoom Plugin") get help and support.

== Screenshots ==
1. Effect
2. Options(if you wordpress is English, English description of this set will be displayed)

== Changelog ==

= 1.2.92 =

* 增加图片地址判断
* 继续强化pos数组, 提高其效率
* 使用YUICompressor压缩代码
* 调整了一些重要变量的命名了

= 1.2.91 =
* 修复IE(6|7|8)下无法创建小图hover的BUG
* 设置项returnOrigin现在可以完全正常工作了

= 1.2.9 =
* 精简pos数组, 减少两个item
* 略微提升大图loading阶段的性能
* 希望1.30将是phZoom的第一个稳定版
 
= 1.2.8 =
* 现在完全无需使用:has(img)选择器来调用phZoom了
* 新增设置项: prevText和nextText
* 新增设置项: returnOrigin
* 其它一些无关性能的细节改进

= 1.2.7 =
* 修复当原图极大时会溢出容器100%宽度的BUG

= 1.2.6 =
* 修复IE(6|7|8)下导致新窗口打开的BUG

= 1.2.5 =

* 使用jQuery.data缓存对象
* 一些命名调整与细节优

= 1.2.4(非插件1.23 RC) =
* 修正某些页面大图无法居中的问题
* 中止载入后, 大图不会再自动弹出了
* 其它一些细节完善

= 1.2.3 =
* 修复jQuery库调用造成的主题出错

= 1.2.2 =
* 精简掉几个变量与方法, 改用接力棒法传递参数
* 修复新版Chrome下无法正确读取缓存图片尺寸的BUG

= 1.2.1 =
* 修复IE6下Body高度过小时的遮罩层问

= 1.2.0 =
* 插件基本重写, 并追加了代码注释
* 加快图片载入速度, 提高插件执行效率
* 点击图片不再是单一的退出大图(自己体验)
* 上/下一张的操作变得相当自由了
* 遮罩层改用固定定位
* Firefox下不会卡了
* 对老版Opera作了兼容
* 去除了防迷路模式