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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSignaturePolicy请求参数结构体
 *
 * @method string getRegistryId() 获取实例 Id
 * @method void setRegistryId(string $RegistryId) 设置实例 Id
 * @method string getName() 获取策略名称
 * @method void setName(string $Name) 设置策略名称
 * @method string getNamespaceName() 获取命名空间名称
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间名称
 * @method string getKmsId() 获取KMS 密钥
 * @method void setKmsId(string $KmsId) 设置KMS 密钥
 * @method string getKmsRegion() 获取KMS 密钥所属地域
 * @method void setKmsRegion(string $KmsRegion) 设置KMS 密钥所属地域
 * @method string getDomain() 获取用户自定义域名，为空时使用 TCR 实例默认域名生成签名
 * @method void setDomain(string $Domain) 设置用户自定义域名，为空时使用 TCR 实例默认域名生成签名
 * @method boolean getDisabled() 获取禁用加签策略，默认为 false
 * @method void setDisabled(boolean $Disabled) 设置禁用加签策略，默认为 false
 */
class CreateSignaturePolicyRequest extends AbstractModel
{
    /**
     * @var string 实例 Id
     */
    public $RegistryId;

    /**
     * @var string 策略名称
     */
    public $Name;

    /**
     * @var string 命名空间名称
     */
    public $NamespaceName;

    /**
     * @var string KMS 密钥
     */
    public $KmsId;

    /**
     * @var string KMS 密钥所属地域
     */
    public $KmsRegion;

    /**
     * @var string 用户自定义域名，为空时使用 TCR 实例默认域名生成签名
     */
    public $Domain;

    /**
     * @var boolean 禁用加签策略，默认为 false
     */
    public $Disabled;

    /**
     * @param string $RegistryId 实例 Id
     * @param string $Name 策略名称
     * @param string $NamespaceName 命名空间名称
     * @param string $KmsId KMS 密钥
     * @param string $KmsRegion KMS 密钥所属地域
     * @param string $Domain 用户自定义域名，为空时使用 TCR 实例默认域名生成签名
     * @param boolean $Disabled 禁用加签策略，默认为 false
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("KmsId",$param) and $param["KmsId"] !== null) {
            $this->KmsId = $param["KmsId"];
        }

        if (array_key_exists("KmsRegion",$param) and $param["KmsRegion"] !== null) {
            $this->KmsRegion = $param["KmsRegion"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Disabled",$param) and $param["Disabled"] !== null) {
            $this->Disabled = $param["Disabled"];
        }
    }
}
