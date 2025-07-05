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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 登录和敏感操作flag（校验方式是单选）
 *
 * @method integer getPhone() 获取0: 非安全手机校验 1: 安全手机校验。
 * @method void setPhone(integer $Phone) 设置0: 非安全手机校验 1: 安全手机校验。
 * @method integer getToken() 获取0: 非硬token校验 1: 硬token校验。
 * @method void setToken(integer $Token) 设置0: 非硬token校验 1: 硬token校验。
 * @method integer getStoken() 获取0: 非软token校验 1: 软token校验
 * @method void setStoken(integer $Stoken) 设置0: 非软token校验 1: 软token校验
 * @method integer getWechat() 获取0: 非微信校验 1: 微信校验
 * @method void setWechat(integer $Wechat) 设置0: 非微信校验 1: 微信校验
 * @method integer getCustom() 获取0: 非自定义校验 1: 自定义校验
 * @method void setCustom(integer $Custom) 设置0: 非自定义校验 1: 自定义校验
 * @method integer getMail() 获取0: 非邮箱校验 1: 邮箱校验
 * @method void setMail(integer $Mail) 设置0: 非邮箱校验 1: 邮箱校验
 * @method integer getU2FToken() 获取0: 非u2f硬件token 1: u2f硬件token
 * @method void setU2FToken(integer $U2FToken) 设置0: 非u2f硬件token 1: u2f硬件token
 */
class LoginActionFlag extends AbstractModel
{
    /**
     * @var integer 0: 非安全手机校验 1: 安全手机校验。
     */
    public $Phone;

    /**
     * @var integer 0: 非硬token校验 1: 硬token校验。
     */
    public $Token;

    /**
     * @var integer 0: 非软token校验 1: 软token校验
     */
    public $Stoken;

    /**
     * @var integer 0: 非微信校验 1: 微信校验
     */
    public $Wechat;

    /**
     * @var integer 0: 非自定义校验 1: 自定义校验
     */
    public $Custom;

    /**
     * @var integer 0: 非邮箱校验 1: 邮箱校验
     */
    public $Mail;

    /**
     * @var integer 0: 非u2f硬件token 1: u2f硬件token
     */
    public $U2FToken;

    /**
     * @param integer $Phone 0: 非安全手机校验 1: 安全手机校验。
     * @param integer $Token 0: 非硬token校验 1: 硬token校验。
     * @param integer $Stoken 0: 非软token校验 1: 软token校验
     * @param integer $Wechat 0: 非微信校验 1: 微信校验
     * @param integer $Custom 0: 非自定义校验 1: 自定义校验
     * @param integer $Mail 0: 非邮箱校验 1: 邮箱校验
     * @param integer $U2FToken 0: 非u2f硬件token 1: u2f硬件token
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
        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("Stoken",$param) and $param["Stoken"] !== null) {
            $this->Stoken = $param["Stoken"];
        }

        if (array_key_exists("Wechat",$param) and $param["Wechat"] !== null) {
            $this->Wechat = $param["Wechat"];
        }

        if (array_key_exists("Custom",$param) and $param["Custom"] !== null) {
            $this->Custom = $param["Custom"];
        }

        if (array_key_exists("Mail",$param) and $param["Mail"] !== null) {
            $this->Mail = $param["Mail"];
        }

        if (array_key_exists("U2FToken",$param) and $param["U2FToken"] !== null) {
            $this->U2FToken = $param["U2FToken"];
        }
    }
}
