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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SCIM密钥
 *
 * @method string getZoneId() 获取空间ID。z-前缀开头，后面是12位随机数字/小写字母
 * @method void setZoneId(string $ZoneId) 设置空间ID。z-前缀开头，后面是12位随机数字/小写字母
 * @method string getStatus() 获取SCIM密钥状态，Enabled已开启，Disabled已关闭。
 * @method void setStatus(string $Status) 设置SCIM密钥状态，Enabled已开启，Disabled已关闭。
 * @method string getCredentialId() 获取SCIM密钥ID。scimcred-前缀开头，后面是12位随机数字/小写字母。
 * @method void setCredentialId(string $CredentialId) 设置SCIM密钥ID。scimcred-前缀开头，后面是12位随机数字/小写字母。
 * @method string getCredentialType() 获取SCIM密钥类型。
 * @method void setCredentialType(string $CredentialType) 设置SCIM密钥类型。
 * @method string getCreateTime() 获取SCIM 密钥的创建时间。
 * @method void setCreateTime(string $CreateTime) 设置SCIM 密钥的创建时间。
 * @method string getExpireTime() 获取SCIM 密钥的过期时间。
 * @method void setExpireTime(string $ExpireTime) 设置SCIM 密钥的过期时间。
 */
class SCIMCredential extends AbstractModel
{
    /**
     * @var string 空间ID。z-前缀开头，后面是12位随机数字/小写字母
     */
    public $ZoneId;

    /**
     * @var string SCIM密钥状态，Enabled已开启，Disabled已关闭。
     */
    public $Status;

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
     * @param string $ZoneId 空间ID。z-前缀开头，后面是12位随机数字/小写字母
     * @param string $Status SCIM密钥状态，Enabled已开启，Disabled已关闭。
     * @param string $CredentialId SCIM密钥ID。scimcred-前缀开头，后面是12位随机数字/小写字母。
     * @param string $CredentialType SCIM密钥类型。
     * @param string $CreateTime SCIM 密钥的创建时间。
     * @param string $ExpireTime SCIM 密钥的过期时间。
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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
    }
}
