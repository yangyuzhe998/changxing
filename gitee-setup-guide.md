# Gitee迁移指南

## 第1步：注册Gitee账号
1. 访问 https://gitee.com/
2. 完成注册流程

## 第2步：创建Gitee仓库
1. 登录Gitee
2. 点击右上角的"+"按钮，选择"新建仓库"
3. 填写仓库信息：
   - 仓库名称：changxing（建议与GitHub仓库同名）
   - 仓库描述：长兴挖掘机培训机构官网
   - 仓库类型：选择"公开"
   - 勾选"使用Readme文件初始化这个仓库"
4. 点击"创建仓库"

## 第3步：添加Gitee作为远程仓库
在命令行中执行：
```
git remote add gitee https://gitee.com/你的Gitee用户名/changxing.git
```

## 第4步：推送代码到Gitee
```
git push -u gitee main
```

## 第5步：启用Gitee Pages
1. 进入你的Gitee仓库页面
2. 点击"服务"菜单，选择"Gitee Pages"
3. 选择部署分支为"main"
4. 点击"启动"按钮

## 第6步：访问你的网站
启用成功后，你可以通过以下URL访问你的网站：
```
https://你的Gitee用户名.gitee.io/changxing
```

## 注意事项
- Gitee Pages需要实名认证后才能使用
- Gitee Pages每次更新需要手动点击"更新"按钮 