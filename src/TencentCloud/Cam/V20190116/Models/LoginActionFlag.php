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
 * @method integer getPhone() 获取<p>0: 非安全手机校验 1: 安全手机校验。</p>
 * @method void setPhone(integer $Phone) 设置<p>0: 非安全手机校验 1: 安全手机校验。</p>
 * @method integer getToken() 获取<p>0: 非硬token校验 1: 硬token校验。</p>
 * @method void setToken(integer $Token) 设置<p>0: 非硬token校验 1: 硬token校验。</p>
 * @method integer getStoken() 获取<p>0: 非软token校验 1: 软token校验</p>
 * @method void setStoken(integer $Stoken) 设置<p>0: 非软token校验 1: 软token校验</p>
 * @method integer getWechat() 获取<p>0: 非微信校验 1: 微信校验</p>
 * @method void setWechat(integer $Wechat) 设置<p>0: 非微信校验 1: 微信校验</p>
 * @method integer getCustom() 获取<p>0: 非自定义校验 1: 自定义校验</p>
 * @method void setCustom(integer $Custom) 设置<p>0: 非自定义校验 1: 自定义校验</p>
 * @method integer getMail() 获取<p>0: 非邮箱校验 1: 邮箱校验</p>
 * @method void setMail(integer $Mail) 设置<p>0: 非邮箱校验 1: 邮箱校验</p>
 * @method integer getU2FToken() 获取<p>0: 非u2f硬件token 1: u2f硬件token</p>
 * @method void setU2FToken(integer $U2FToken) 设置<p>0: 非u2f硬件token 1: u2f硬件token</p>
 * @method integer getPasskey() 获取<p>0: 非passkey 校验 1: passkey校验</p>
 * @method void setPasskey(integer $Passkey) 设置<p>0: 非passkey 校验 1: passkey校验</p>
 */
class LoginActionFlag extends AbstractModel
{
    /**
     * @var integer <p>0: 非安全手机校验 1: 安全手机校验。</p>
     */
    public $Phone;

    /**
     * @var integer <p>0: 非硬token校验 1: 硬token校验。</p>
     */
    public $Token;

    /**
     * @var integer <p>0: 非软token校验 1: 软token校验</p>
     */
    public $Stoken;

    /**
     * @var integer <p>0: 非微信校验 1: 微信校验</p>
     */
    public $Wechat;

    /**
     * @var integer <p>0: 非自定义校验 1: 自定义校验</p>
     */
    public $Custom;

    /**
     * @var integer <p>0: 非邮箱校验 1: 邮箱校验</p>
     */
    public $Mail;

    /**
     * @var integer <p>0: 非u2f硬件token 1: u2f硬件token</p>
     */
    public $U2FToken;

    /**
     * @var integer <p>0: 非passkey 校验 1: passkey校验</p>
     */
    public $Passkey;

    /**
     * @param integer $Phone <p>0: 非安全手机校验 1: 安全手机校验。</p>
     * @param integer $Token <p>0: 非硬token校验 1: 硬token校验。</p>
     * @param integer $Stoken <p>0: 非软token校验 1: 软token校验</p>
     * @param integer $Wechat <p>0: 非微信校验 1: 微信校验</p>
     * @param integer $Custom <p>0: 非自定义校验 1: 自定义校验</p>
     * @param integer $Mail <p>0: 非邮箱校验 1: 邮箱校验</p>
     * @param integer $U2FToken <p>0: 非u2f硬件token 1: u2f硬件token</p>
     * @param integer $Passkey <p>0: 非passkey 校验 1: passkey校验</p>
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

        if (array_key_exists("Passkey",$param) and $param["Passkey"] !== null) {
            $this->Passkey = $param["Passkey"];
        }
    }
}
