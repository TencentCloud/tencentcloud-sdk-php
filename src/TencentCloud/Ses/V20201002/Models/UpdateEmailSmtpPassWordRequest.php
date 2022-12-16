<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateEmailSmtpPassWord请求参数结构体
 *
 * @method string getPassword() 获取smtp密码，长度限制64
 * @method void setPassword(string $Password) 设置smtp密码，长度限制64
 * @method string getEmailAddress() 获取发信邮箱,长度限制128
 * @method void setEmailAddress(string $EmailAddress) 设置发信邮箱,长度限制128
 */
class UpdateEmailSmtpPassWordRequest extends AbstractModel
{
    /**
     * @var string smtp密码，长度限制64
     */
    public $Password;

    /**
     * @var string 发信邮箱,长度限制128
     */
    public $EmailAddress;

    /**
     * @param string $Password smtp密码，长度限制64
     * @param string $EmailAddress 发信邮箱,长度限制128
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
        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("EmailAddress",$param) and $param["EmailAddress"] !== null) {
            $this->EmailAddress = $param["EmailAddress"];
        }
    }
}
