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
 * AddUser返回参数结构体
 *
 * @method integer getUin() 获取<p>子用户 UIN</p>
 * @method void setUin(integer $Uin) 设置<p>子用户 UIN</p>
 * @method string getName() 获取<p>子用户用户名</p>
 * @method void setName(string $Name) 设置<p>子用户用户名</p>
 * @method string getPassword() 获取<p>如果输入参数组合为自动生成随机密码，则返回生成的密码</p>
 * @method void setPassword(string $Password) 设置<p>如果输入参数组合为自动生成随机密码，则返回生成的密码</p>
 * @method string getSecretId() 获取<p>子用户密钥 ID</p>
 * @method void setSecretId(string $SecretId) 设置<p>子用户密钥 ID</p>
 * @method string getSecretKey() 获取<p>子用户密钥 Key</p>
 * @method void setSecretKey(string $SecretKey) 设置<p>子用户密钥 Key</p>
 * @method integer getUid() 获取<p>子用户 UID</p>
 * @method void setUid(integer $Uid) 设置<p>子用户 UID</p>
 * @method string getPhoneNumVerifyLink() 获取<p>手机号验证地址。</p>
 * @method void setPhoneNumVerifyLink(string $PhoneNumVerifyLink) 设置<p>手机号验证地址。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class AddUserResponse extends AbstractModel
{
    /**
     * @var integer <p>子用户 UIN</p>
     */
    public $Uin;

    /**
     * @var string <p>子用户用户名</p>
     */
    public $Name;

    /**
     * @var string <p>如果输入参数组合为自动生成随机密码，则返回生成的密码</p>
     */
    public $Password;

    /**
     * @var string <p>子用户密钥 ID</p>
     */
    public $SecretId;

    /**
     * @var string <p>子用户密钥 Key</p>
     */
    public $SecretKey;

    /**
     * @var integer <p>子用户 UID</p>
     */
    public $Uid;

    /**
     * @var string <p>手机号验证地址。</p>
     */
    public $PhoneNumVerifyLink;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Uin <p>子用户 UIN</p>
     * @param string $Name <p>子用户用户名</p>
     * @param string $Password <p>如果输入参数组合为自动生成随机密码，则返回生成的密码</p>
     * @param string $SecretId <p>子用户密钥 ID</p>
     * @param string $SecretKey <p>子用户密钥 Key</p>
     * @param integer $Uid <p>子用户 UID</p>
     * @param string $PhoneNumVerifyLink <p>手机号验证地址。</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("PhoneNumVerifyLink",$param) and $param["PhoneNumVerifyLink"] !== null) {
            $this->PhoneNumVerifyLink = $param["PhoneNumVerifyLink"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
