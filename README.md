# typecho极简博客主题Write

这是一个用于Typecho博客系统的极简写作主题，也是我的博客在换成Wordpress之前用了接近三年的主题。

### 1 主题来源

该主题于2018年9月移植于Farbox官方模板，该模板使用MIT协议发布。主题评论区修改自Typecho默认模板，使用GPL v2协议发布。

### 2 主题使用

请将主题文件夹write上传到/usr/themes目录，然后在博客后台启用。

主题自带归档页面，请创建新页面，或修改现有页面，在右侧"自定义模板"中，选择"归档"。页面标题和slug自行设计，没有限制。

如需使用目录树功能，请将MenuTree文件夹上传到/usr/plugins目录，文件夹名字和大小写一定不要修改，必需保证文件夹名字叫MenuTree，否则可能会出现插件无法启用的问题。

**注意：**如需使用目录树，请在文章中想放置目录树的位置输入`[TOC]`，注意方括号是英文的，TOC三个字母是大写。这是严格遵守markdown写作规则的写法。

使用主题的时候，请务必保留页脚的作者链接，谢谢！

### 3 主题样式

可以查看演示站：[点此查看](https://write.lhcy.tk "点此查看")，由于多种因素影响，不保证该演示站的存活时间。

截图可在这里查看：[点此查看](https://lhcy.org/archives/164.html "点此查看")

### 4 主题存在的小问题

这里存在一个问题：由于html中对a标签嵌套规则的约束，自动截取的摘要中如果含有超链接，那么，在首页的摘要中，该链接后面的文字就无法被点击了。

**那该如何避开这个问题呢？**

①前面的文字不加超链接。我想多数博主的博文中都很少有超链接，在前面这一段文字中含有超链接的可能性更小。

②如果真的要插入超链接，您可在Markdown编辑器或Typecho后台编辑器里按如下的格式写：


```
<object>[必应搜索](https://cn.bing.com)</object>
```

然后，在首页自动截取的摘要中，不仅可以点击该超链接进入相应的网页，整个摘要部分也都可以点击阅读该篇文章。这也是遵循html设计原则的写法。测试站的文章就是这样写的。

当然，这里欢迎内行人改进该主题的代码以从根本上解决这个问题，并在Github进行Merge，在此表示感谢！

### 5 相关问题问答

问：你为何不修复上面提到的主题的问题？

答：我是外行，这个问题已经超出了自己的能力范围，无法解决。我移植这个主题用了3天，修复小bug用了数不清的零散时间，这些都是我尽自己所能而进行的操作了。对于内行人来说，移植这个主题恐怕30分钟都用不上吧。我是外行人，对php一窍不通，如果不是typecho的代码简单，便于我凭感觉摸索，这个主题都不会诞生。

问：你难道不能把目录树功能集成在主题中吗？

答：前面我说了，我不懂php，所以不能。

问：既然你不懂php，那你可以学啊！什么叫活到老学到老你不明白啊？

答：下了班，拖着疲惫身体的我，只想休息。休息过后，我会看看别人的博客，还有精力的话就写写文章，根本无法系统性地学习php的知识。自己专业相关的东西都学不过来，哪有能力学php？虽然有句话叫活到老学到老，但是不能舍本逐末。不信的话，你下了班以后系统性地学习一下《生物化学》、《分子生物学》和《细胞生物学》，你看看你能学明白不？

问：你2018年就移植了这个主题，为何现在才发布？

答：当时移植完主题后，在浏览器里有一些报错，为避免被内行人嘲讽和笑话，我不敢把主题发布出来。后面断断续续修改了一下，基本上没什么问题，但还是为了避免被内行人嘲讽和笑话，我还是没有发布。此时发布出来，是因为我已经将博客转移到Wordpress了，我自己用不到了，即便别人说什么我也不管了，但还是希望某些人嘴下留情。

问：一个将博客转移到Wordpress系统的人，有什么资格发布Typecho主题？

答：我把博客转移到Wordpress，是因为一个数据库自动备份插件不支持新版php，该插件没有新版，我又没有能力解决这个问题，该插件所实现的功能是我所必需，为了博客的长久运行，我必须转移到Wordpress。具体存在什么样的问题，为何该问题无法解决，我将另行发文讨论。Typecho是非常优秀的博客系统，它很轻但功能比较齐全，虽然稳定版还是4年前发布的，但是开发版一直在更新，且开发版已经支持在php 8.x环境下运行。Typecho可以和Wordpress进行自由的数据互通（注意是"互通"），经由Wordpress还可以转换成其他程序，如Movabletype、静态博客等，这是国内其他博客系统做不到的（或者说不伤筋动骨就做不到的）。

问：就你这破主题这么丑，还好意思拿出来发布？

答：甲之蜜糖乙之砒霜。不同的人对主题样式的喜好不同，这也是为何有各式各样的主题存在于这个世界上的根本原因。无论你用Typecho还是Wordpress，不是所有的主题都适合你，但一定有适合你的。

### 6 下载链接

[点击此处下载](https://github.com/linhaii/typecho-theme-write)

感谢您的支持！

[点击查看作者博客](
