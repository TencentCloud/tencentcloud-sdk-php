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
 * 登录和敏感操作flag
 *
 * @method integer getPhone() 获取<p>手机</p>
 * @method void setPhone(integer $Phone) 设置<p>手机</p>
 * @method integer getToken() 获取<p>硬token</p>
 * @method void setToken(integer $Token) 设置<p>硬token</p>
 * @method integer getStoken() 获取<p>软token</p>
 * @method void setStoken(integer $Stoken) 设置<p>软token</p>
 * @method integer getWechat() 获取<p>微信</p>
 * @method void setWechat(integer $Wechat) 设置<p>微信</p>
 * @method integer getCustom() 获取<p>自定义</p>
 * @method void setCustom(integer $Custom) 设置<p>自定义</p>
 * @method integer getMail() 获取<p>邮件</p>
 * @method void setMail(integer $Mail) 设置<p>邮件</p>
 * @method integer getU2FToken() 获取<p>u2f硬件token</p>
 * @method void setU2FToken(integer $U2FToken) 设置<p>u2f硬件token</p>
 * @method integer getPasskey() 获取<p>passkey通行密钥</p>
 * @method void setPasskey(integer $Passkey) 设置<p>passkey通行密钥</p>
 */
class LoginActionFlagIntl extends AbstractModel
{
    /**
     * @var integer <p>手机</p>
     */
    public $Phone;

    /**
     * @var integer <p>硬token</p>
     */
    public $Token;

    /**
     * @var integer <p>软token</p>
     */
    public $Stoken;

    /**
     * @var integer <p>微信</p>
     */
    public $Wechat;

    /**
     * @var integer <p>自定义</p>
     */
    public $Custom;

    /**
     * @var integer <p>邮件</p>
     */
    public $Mail;

    /**
     * @var integer <p>u2f硬件token</p>
     */
    public $U2FToken;

    /**
     * @var integer <p>passkey通行密钥</p>
     */
    public $Passkey;

    /**
     * @param integer $Phone <p>手机</p>
     * @param integer $Token <p>硬token</p>
     * @param integer $Stoken <p>软token</p>
     * @param integer $Wechat <p>微信</p>
     * @param integer $Custom <p>自定义</p>
     * @param integer $Mail <p>邮件</p>
     * @param integer $U2FToken <p>u2f硬件token</p>
     * @param integer $Passkey <p>passkey通行密钥</p>
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
