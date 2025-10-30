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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LakeFileSystem使用的临时token
 *
 * @method string getSecretId() 获取Token使用的临时密钥的ID
 * @method void setSecretId(string $SecretId) 设置Token使用的临时密钥的ID
 * @method string getSecretKey() 获取Token使用的临时密钥
 * @method void setSecretKey(string $SecretKey) 设置Token使用的临时密钥
 * @method string getToken() 获取Token信息
 * @method void setToken(string $Token) 设置Token信息
 * @method integer getExpiredTime() 获取过期时间
 * @method void setExpiredTime(integer $ExpiredTime) 设置过期时间
 * @method integer getIssueTime() 获取颁布时间
 * @method void setIssueTime(integer $IssueTime) 设置颁布时间
 */
class LakeFileSystemToken extends AbstractModel
{
    /**
     * @var string Token使用的临时密钥的ID
     */
    public $SecretId;

    /**
     * @var string Token使用的临时密钥
     */
    public $SecretKey;

    /**
     * @var string Token信息
     */
    public $Token;

    /**
     * @var integer 过期时间
     */
    public $ExpiredTime;

    /**
     * @var integer 颁布时间
     */
    public $IssueTime;

    /**
     * @param string $SecretId Token使用的临时密钥的ID
     * @param string $SecretKey Token使用的临时密钥
     * @param string $Token Token信息
     * @param integer $ExpiredTime 过期时间
     * @param integer $IssueTime 颁布时间
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
        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("IssueTime",$param) and $param["IssueTime"] !== null) {
            $this->IssueTime = $param["IssueTime"];
        }
    }
}
