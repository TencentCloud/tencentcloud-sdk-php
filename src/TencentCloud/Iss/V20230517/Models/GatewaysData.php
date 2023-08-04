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
 * 查询网关列表返回结果
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
 * @method string getClusterId() 获取网关所属服务节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置网关所属服务节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取网关所属服务节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置网关所属服务节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取网关所属地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置网关所属地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取网关状态，0：离线，1:在线
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置网关状态，0：离线，1:在线
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取网关激活时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置网关激活时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDeviceNum() 获取所属网关设备数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceNum(integer $DeviceNum) 设置所属网关设备数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class GatewaysData extends AbstractModel
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
     * @var string 网关所属服务节点ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string 网关所属服务节点名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterName;

    /**
     * @var string 网关所属地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var integer 网关状态，0：离线，1:在线
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 网关激活时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var integer 所属网关设备数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceNum;

    /**
     * @param string $GatewayId 网关索引ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GwId 网关编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 网关名称，仅支持中文、英文、数字、_、-，长度不超过32个字符
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 网关描述，仅支持中文、英文、数字、_、-，长度不超过128个字符
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 网关所属服务节点ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName 网关所属服务节点名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 网关所属地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 网关状态，0：离线，1:在线
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt 网关激活时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DeviceNum 所属网关设备数量
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("DeviceNum",$param) and $param["DeviceNum"] !== null) {
            $this->DeviceNum = $param["DeviceNum"];
        }
    }
}
