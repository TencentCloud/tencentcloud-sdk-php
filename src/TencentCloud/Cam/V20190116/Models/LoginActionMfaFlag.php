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
 * @method integer getPhone() 获取是否设置手机号为登录和敏感操作安全校验方式， 1: 设置，0: 不设置
 * @method void setPhone(integer $Phone) 设置是否设置手机号为登录和敏感操作安全校验方式， 1: 设置，0: 不设置
 * @method integer getStoken() 获取是否设置软token为登录和敏感操作安全校验方式， 1: 设置，0: 不设置
 * @method void setStoken(integer $Stoken) 设置是否设置软token为登录和敏感操作安全校验方式， 1: 设置，0: 不设置
 * @method integer getWechat() 获取是否设置微信为登录和敏感操作安全校验方式， 1: 设置，0: 不设置
 * @method void setWechat(integer $Wechat) 设置是否设置微信为登录和敏感操作安全校验方式， 1: 设置，0: 不设置
 */
class LoginActionMfaFlag extends AbstractModel
{
    /**
     * @var integer 是否设置手机号为登录和敏感操作安全校验方式， 1: 设置，0: 不设置
     */
    public $Phone;

    /**
     * @var integer 是否设置软token为登录和敏感操作安全校验方式， 1: 设置，0: 不设置
     */
    public $Stoken;

    /**
     * @var integer 是否设置微信为登录和敏感操作安全校验方式， 1: 设置，0: 不设置
     */
    public $Wechat;

    /**
     * @param integer $Phone 是否设置手机号为登录和敏感操作安全校验方式， 1: 设置，0: 不设置
     * @param integer $Stoken 是否设置软token为登录和敏感操作安全校验方式， 1: 设置，0: 不设置
     * @param integer $Wechat 是否设置微信为登录和敏感操作安全校验方式， 1: 设置，0: 不设置
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

        if (array_key_exists("Stoken",$param) and $param["Stoken"] !== null) {
            $this->Stoken = $param["Stoken"];
        }

        if (array_key_exists("Wechat",$param) and $param["Wechat"] !== null) {
            $this->Wechat = $param["Wechat"];
        }
    }
}
