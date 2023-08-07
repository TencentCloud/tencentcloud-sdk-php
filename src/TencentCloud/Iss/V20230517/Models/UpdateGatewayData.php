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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修改网关信息返回结果
 *
 * @method string getGatewayId() 获取网关索引ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayId(string $GatewayId) 设置网关索引ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGwId() 获取网关编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGwId(string $GwId) 设置网关编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取网关名称，仅支持中文、英文、数字、_、-，长度不超过32个字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置网关名称，仅支持中文、英文、数字、_、-，长度不超过32个字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取网关描述，仅支持中文、英文、数字、_、-，长度不超过128个字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置网关描述，仅支持中文、英文、数字、_、-，长度不超过128个字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取服务节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置服务节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取服务节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置服务节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取网关状态，0：离线，1:在线
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置网关状态，0：离线，1:在线
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreatedAt() 获取激活时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(integer $CreatedAt) 设置激活时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecret() 获取网关密钥
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecret(string $Secret) 设置网关密钥
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取网关版本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置网关版本信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class UpdateGatewayData extends AbstractModel
{
    /**
     * @var string 网关索引ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayId;

    /**
     * @var string 网关编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GwId;

    /**
     * @var string 网关名称，仅支持中文、英文、数字、_、-，长度不超过32个字符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 网关描述，仅支持中文、英文、数字、_、-，长度不超过128个字符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 服务节点ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string 服务节点名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterName;

    /**
     * @var integer 网关状态，0：离线，1:在线
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 激活时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var string 网关密钥
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Secret;

    /**
     * @var string 网关版本信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @param string $GatewayId 网关索引ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GwId 网关编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 网关名称，仅支持中文、英文、数字、_、-，长度不超过32个字符
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 网关描述，仅支持中文、英文、数字、_、-，长度不超过128个字符
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 服务节点ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName 服务节点名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 网关状态，0：离线，1:在线
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreatedAt 激活时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Secret 网关密钥
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version 网关版本信息
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("GwId",$param) and $param["GwId"] !== null) {
            $this->GwId = $param["GwId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("Secret",$param) and $param["Secret"] !== null) {
            $this->Secret = $param["Secret"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }
    }
}
