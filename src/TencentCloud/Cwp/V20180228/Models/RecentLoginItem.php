<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 异常登陆历史记录
 *
 * @method string getLoginTime() 获取<p>登录时间</p><p>参数格式：YYYY-MM-DD HH:MM:SS</p>
 * @method void setLoginTime(string $LoginTime) 设置<p>登录时间</p><p>参数格式：YYYY-MM-DD HH:MM:SS</p>
 * @method integer getLoginType() 获取<p>登录方式</p><p>枚举值：</p><ul><li>0： 无效用户</li><li>1： 密码错误</li><li>2： 密码登录</li><li>3： 密钥登录</li><li>4： PAM 认证失败（sshd）</li><li>5： PAM 认证失败（tty）</li><li>6： 键盘交互登录</li><li>7： 键盘交互认证失败</li><li>8： PAM 认证失败</li></ul>
 * @method void setLoginType(integer $LoginType) 设置<p>登录方式</p><p>枚举值：</p><ul><li>0： 无效用户</li><li>1： 密码错误</li><li>2： 密码登录</li><li>3： 密钥登录</li><li>4： PAM 认证失败（sshd）</li><li>5： PAM 认证失败（tty）</li><li>6： 键盘交互登录</li><li>7： 键盘交互认证失败</li><li>8： PAM 认证失败</li></ul>
 * @method string getLoginTypeDesc() 获取<p>登录方式描述</p>
 * @method void setLoginTypeDesc(string $LoginTypeDesc) 设置<p>登录方式描述</p>
 */
class RecentLoginItem extends AbstractModel
{
    /**
     * @var string <p>登录时间</p><p>参数格式：YYYY-MM-DD HH:MM:SS</p>
     */
    public $LoginTime;

    /**
     * @var integer <p>登录方式</p><p>枚举值：</p><ul><li>0： 无效用户</li><li>1： 密码错误</li><li>2： 密码登录</li><li>3： 密钥登录</li><li>4： PAM 认证失败（sshd）</li><li>5： PAM 认证失败（tty）</li><li>6： 键盘交互登录</li><li>7： 键盘交互认证失败</li><li>8： PAM 认证失败</li></ul>
     */
    public $LoginType;

    /**
     * @var string <p>登录方式描述</p>
     */
    public $LoginTypeDesc;

    /**
     * @param string $LoginTime <p>登录时间</p><p>参数格式：YYYY-MM-DD HH:MM:SS</p>
     * @param integer $LoginType <p>登录方式</p><p>枚举值：</p><ul><li>0： 无效用户</li><li>1： 密码错误</li><li>2： 密码登录</li><li>3： 密钥登录</li><li>4： PAM 认证失败（sshd）</li><li>5： PAM 认证失败（tty）</li><li>6： 键盘交互登录</li><li>7： 键盘交互认证失败</li><li>8： PAM 认证失败</li></ul>
     * @param string $LoginTypeDesc <p>登录方式描述</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("LoginTime",$param) and $param["LoginTime"] !== null) {
            $this->LoginTime = $param["LoginTime"];
        }

        if (array_key_exists("LoginType",$param) and $param["LoginType"] !== null) {
            $this->LoginType = $param["LoginType"];
        }

        if (array_key_exists("LoginTypeDesc",$param) and $param["LoginTypeDesc"] !== null) {
            $this->LoginTypeDesc = $param["LoginTypeDesc"];
        }
    }
}
