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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImportDataKey请求参数结构体
 *
 * @method string getDataKeyName() 获取数据密钥的名称
 * @method void setDataKeyName(string $DataKeyName) 设置数据密钥的名称
 * @method string getImportKeyMaterial() 获取如果导入的是明文数据密钥，则是base64 转换后的明文数据密钥，  如果导入的是密文数据密钥，则是由KMS GenerateDataKey接口生成的密文数据密钥。
 * @method void setImportKeyMaterial(string $ImportKeyMaterial) 设置如果导入的是明文数据密钥，则是base64 转换后的明文数据密钥，  如果导入的是密文数据密钥，则是由KMS GenerateDataKey接口生成的密文数据密钥。
 * @method integer getImportType() 获取1:密文导入(由KMS接口生成的密文数据密钥)，2:明文导入。
 * @method void setImportType(integer $ImportType) 设置1:密文导入(由KMS接口生成的密文数据密钥)，2:明文导入。
 * @method string getDescription() 获取数据密钥 的描述，最大100字节
 * @method void setDescription(string $Description) 设置数据密钥 的描述，最大100字节
 * @method string getKeyId() 获取当导入密文数据密钥时，无需传入根密钥,如果传入也会忽略。
当KeyId 为空，如果指定了独享集群HsmClusterId，则会在独享集群下创建一个根密钥，根据生成的根密钥加密数据密钥。
如果没有指定独享集群HsmClusterId,则会在公有云共享集群下创建一个根密钥，根据生成的根密钥加密数据密钥。
如果KeyId 不为空，根据指定的根密钥加密数据密钥。
 * @method void setKeyId(string $KeyId) 设置当导入密文数据密钥时，无需传入根密钥,如果传入也会忽略。
当KeyId 为空，如果指定了独享集群HsmClusterId，则会在独享集群下创建一个根密钥，根据生成的根密钥加密数据密钥。
如果没有指定独享集群HsmClusterId,则会在公有云共享集群下创建一个根密钥，根据生成的根密钥加密数据密钥。
如果KeyId 不为空，根据指定的根密钥加密数据密钥。
 * @method string getHsmClusterId() 获取KMS 独享版对应的 HSM 集群 ID。
当KeyId 没有传入时有效，如果指定了独享集群HsmClusterId，则会在独享集群下创建一个根密钥，根据产生的根密钥加密数据密钥。
如果没有指定独享集群HsmClusterId,则会在公有云共享集群下创建一个根密钥，根据产生的根密钥加密数据密钥。
 * @method void setHsmClusterId(string $HsmClusterId) 设置KMS 独享版对应的 HSM 集群 ID。
当KeyId 没有传入时有效，如果指定了独享集群HsmClusterId，则会在独享集群下创建一个根密钥，根据产生的根密钥加密数据密钥。
如果没有指定独享集群HsmClusterId,则会在公有云共享集群下创建一个根密钥，根据产生的根密钥加密数据密钥。
 */
class ImportDataKeyRequest extends AbstractModel
{
    /**
     * @var string 数据密钥的名称
     */
    public $DataKeyName;

    /**
     * @var string 如果导入的是明文数据密钥，则是base64 转换后的明文数据密钥，  如果导入的是密文数据密钥，则是由KMS GenerateDataKey接口生成的密文数据密钥。
     */
    public $ImportKeyMaterial;

    /**
     * @var integer 1:密文导入(由KMS接口生成的密文数据密钥)，2:明文导入。
     */
    public $ImportType;

    /**
     * @var string 数据密钥 的描述，最大100字节
     */
    public $Description;

    /**
     * @var string 当导入密文数据密钥时，无需传入根密钥,如果传入也会忽略。
当KeyId 为空，如果指定了独享集群HsmClusterId，则会在独享集群下创建一个根密钥，根据生成的根密钥加密数据密钥。
如果没有指定独享集群HsmClusterId,则会在公有云共享集群下创建一个根密钥，根据生成的根密钥加密数据密钥。
如果KeyId 不为空，根据指定的根密钥加密数据密钥。
     */
    public $KeyId;

    /**
     * @var string KMS 独享版对应的 HSM 集群 ID。
当KeyId 没有传入时有效，如果指定了独享集群HsmClusterId，则会在独享集群下创建一个根密钥，根据产生的根密钥加密数据密钥。
如果没有指定独享集群HsmClusterId,则会在公有云共享集群下创建一个根密钥，根据产生的根密钥加密数据密钥。
     */
    public $HsmClusterId;

    /**
     * @param string $DataKeyName 数据密钥的名称
     * @param string $ImportKeyMaterial 如果导入的是明文数据密钥，则是base64 转换后的明文数据密钥，  如果导入的是密文数据密钥，则是由KMS GenerateDataKey接口生成的密文数据密钥。
     * @param integer $ImportType 1:密文导入(由KMS接口生成的密文数据密钥)，2:明文导入。
     * @param string $Description 数据密钥 的描述，最大100字节
     * @param string $KeyId 当导入密文数据密钥时，无需传入根密钥,如果传入也会忽略。
当KeyId 为空，如果指定了独享集群HsmClusterId，则会在独享集群下创建一个根密钥，根据生成的根密钥加密数据密钥。
如果没有指定独享集群HsmClusterId,则会在公有云共享集群下创建一个根密钥，根据生成的根密钥加密数据密钥。
如果KeyId 不为空，根据指定的根密钥加密数据密钥。
     * @param string $HsmClusterId KMS 独享版对应的 HSM 集群 ID。
当KeyId 没有传入时有效，如果指定了独享集群HsmClusterId，则会在独享集群下创建一个根密钥，根据产生的根密钥加密数据密钥。
如果没有指定独享集群HsmClusterId,则会在公有云共享集群下创建一个根密钥，根据产生的根密钥加密数据密钥。
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
        if (array_key_exists("DataKeyName",$param) and $param["DataKeyName"] !== null) {
            $this->DataKeyName = $param["DataKeyName"];
        }

        if (array_key_exists("ImportKeyMaterial",$param) and $param["ImportKeyMaterial"] !== null) {
            $this->ImportKeyMaterial = $param["ImportKeyMaterial"];
        }

        if (array_key_exists("ImportType",$param) and $param["ImportType"] !== null) {
            $this->ImportType = $param["ImportType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("HsmClusterId",$param) and $param["HsmClusterId"] !== null) {
            $this->HsmClusterId = $param["HsmClusterId"];
        }
    }
}
