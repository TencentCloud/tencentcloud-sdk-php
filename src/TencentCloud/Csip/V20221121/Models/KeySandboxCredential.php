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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 凭证数据结构，用于列表查询和详情查询的响应
 *
 * @method string getCredentialId() 获取凭证ID
 * @method void setCredentialId(string $CredentialId) 设置凭证ID
 * @method string getCredentialName() 获取凭证名称
 * @method void setCredentialName(string $CredentialName) 设置凭证名称
 * @method string getCredentialType() 获取凭证类型
枚举值：
access：常规密钥（Key/Value键值对）
sts：STS临时密钥凭据
 * @method void setCredentialType(string $CredentialType) 设置凭证类型
枚举值：
access：常规密钥（Key/Value键值对）
sts：STS临时密钥凭据
 * @method CredentialEffectScope getCredentialEffectScope() 获取生效机器范围
 * @method void setCredentialEffectScope(CredentialEffectScope $CredentialEffectScope) 设置生效机器范围
 * @method string getCreateTime() 获取创建时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method void setCreateTime(string $CreateTime) 设置创建时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method string getUpdateTime() 获取更新时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 */
class KeySandboxCredential extends AbstractModel
{
    /**
     * @var string 凭证ID
     */
    public $CredentialId;

    /**
     * @var string 凭证名称
     */
    public $CredentialName;

    /**
     * @var string 凭证类型
枚举值：
access：常规密钥（Key/Value键值对）
sts：STS临时密钥凭据
     */
    public $CredentialType;

    /**
     * @var CredentialEffectScope 生效机器范围
     */
    public $CredentialEffectScope;

    /**
     * @var string 创建时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     */
    public $CreateTime;

    /**
     * @var string 更新时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     */
    public $UpdateTime;

    /**
     * @param string $CredentialId 凭证ID
     * @param string $CredentialName 凭证名称
     * @param string $CredentialType 凭证类型
枚举值：
access：常规密钥（Key/Value键值对）
sts：STS临时密钥凭据
     * @param CredentialEffectScope $CredentialEffectScope 生效机器范围
     * @param string $CreateTime 创建时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     * @param string $UpdateTime 更新时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
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
        if (array_key_exists("CredentialId",$param) and $param["CredentialId"] !== null) {
            $this->CredentialId = $param["CredentialId"];
        }

        if (array_key_exists("CredentialName",$param) and $param["CredentialName"] !== null) {
            $this->CredentialName = $param["CredentialName"];
        }

        if (array_key_exists("CredentialType",$param) and $param["CredentialType"] !== null) {
            $this->CredentialType = $param["CredentialType"];
        }

        if (array_key_exists("CredentialEffectScope",$param) and $param["CredentialEffectScope"] !== null) {
            $this->CredentialEffectScope = new CredentialEffectScope();
            $this->CredentialEffectScope->deserialize($param["CredentialEffectScope"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
