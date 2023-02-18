# Phone-Project

这是一个基于[Termux](https://github.com/termux/termux-app)、[Termux Api](https://github.com/termux/termux-api)和[php](https://www.php.net/)的项目。

**目前处于开发阶段，存在大量BUG！**
**！！验证尚不安全！！**

## 介绍

### 功能

- [x] 发送短信
- [x] 接受短信
- [x] 简单验证
- [ ] 状态显示

### 如何部署

1. 在Android设备上安装[Termux](https://f-droid.org/en/packages/com.termux/)和[Termux:API](https://f-droid.org/en/packages/com.termux.api/)。

2. 安装termux:api/php/git（可先使用`termux-change-repo`换源）
   ```sh
   apt update -y && \
     apt upgrade -y && \
     apt install termux_api php git -y
   ```

3. 克隆到本地
   ```sh
   git clone https://github.com/ENIAC-ming/Phone-Project.git
   cd Phone-Project
   ```

4. 运行服务
   ```sh
   php -S [::]:8080
   ```

### 自定义

- 设置密码：在`sign.php`中设置