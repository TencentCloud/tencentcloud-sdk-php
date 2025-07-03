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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSCIMCredential返回参数结构体
 *
 * @method string getZoneId() 获取空间ID。z-前缀开头，后面是12位随机数字/小写字母。
 * @method void setZoneId(string $ZoneId) 设置空间ID。z-前缀开头，后面是12位随机数字/小写字母。
 * @method string getCredentialId() 获取SCIM密钥ID。scimcred-前缀开头，后面是12位随机数字/小写字母。
 * @method void setCredentialId(string $CredentialId) 设置SCIM密钥ID。scimcred-前缀开头，后面是12位随机数字/小写字母。
 * @method string getCredentialType() 获取SCIM密钥类型。
 * @method void setCredentialType(string $CredentialType) 设置SCIM密钥类型。
 * @method string getCreateTime() 获取SCIM 密钥的创建时间。
 * @method void setCreateTime(string $CreateTime) 设置SCIM 密钥的创建时间。
 * @method string getExpireTime() 获取SCIM 密钥的过期时间。
 * @method void setExpireTime(string $ExpireTime) 设置SCIM 密钥的过期时间。
 * @method string getCredentialStatus() 获取SCIM密钥状态，Enabled已开启，Disabled已关闭。
 * @method void setCredentialStatus(string $CredentialStatus) 设置SCIM密钥状态，Enabled已开启，Disabled已关闭。
 * @method string getCredentialSecret() 获取SCIM密钥。
 * @method void setCredentialSecret(string $CredentialSecret) 设置SCIM密钥。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateSCIMCredentialResponse extends AbstractModel
{
    /**
     * @var string 空间ID。z-前缀开头，后面是12位随机数字/小写字母。
     */
    public $ZoneId;

    /**
     * @var string SCIM密钥ID。scimcred-前缀开头，后面是12位随机数字/小写字母。
     */
    public $CredentialId;

    /**
     * @var string SCIM密钥类型。
     */
    public $CredentialType;

    /**
     * @var string SCIM 密钥的创建时间。
     */
    public $CreateTime;

    /**
     * @var string SCIM 密钥的过期时间。
     */
    public $ExpireTime;

    /**
     * @var string SCIM密钥状态，Enabled已开启，Disabled已关闭。
     */
    public $CredentialStatus;

    /**
     * @var string SCIM密钥。
     */
    public $CredentialSecret;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ZoneId 空间ID。z-前缀开头，后面是12位随机数字/小写字母。
     * @param string $CredentialId SCIM密钥ID。scimcred-前缀开头，后面是12位随机数字/小写字母。
     * @param string $CredentialType SCIM密钥类型。
     * @param string $CreateTime SCIM 密钥的创建时间。
     * @param string $ExpireTime SCIM 密钥的过期时间。
     * @param string $CredentialStatus SCIM密钥状态，Enabled已开启，Disabled已关闭。
     * @param string $CredentialSecret SCIM密钥。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("CredentialId",$param) and $param["CredentialId"] !== null) {
            $this->CredentialId = $param["CredentialId"];
        }

        if (array_key_exists("CredentialType",$param) and $param["CredentialType"] !== null) {
            $this->CredentialType = $param["CredentialType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("CredentialStatus",$param) and $param["CredentialStatus"] !== null) {
            $this->CredentialStatus = $param["CredentialStatus"];
        }

        if (array_key_exists("CredentialSecret",$param) and $param["CredentialSecret"] !== null) {
            $this->CredentialSecret = $param["CredentialSecret"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
