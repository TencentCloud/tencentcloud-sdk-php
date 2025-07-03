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
 * 查询网关信息返回结果
 *
 * @method string getGatewayId() 获取网关索引ID，用于网关查询，更新，删除操作
 * @method void setGatewayId(string $GatewayId) 设置网关索引ID，用于网关查询，更新，删除操作
 * @method string getGwId() 获取网关编码，由网关设备生成的唯一编码
 * @method void setGwId(string $GwId) 设置网关编码，由网关设备生成的唯一编码
 * @method string getName() 获取网关名称，仅支持中文、英文、数字、_、-，长度不超过32个字符
 * @method void setName(string $Name) 设置网关名称，仅支持中文、英文、数字、_、-，长度不超过32个字符
 * @method string getDescription() 获取网关描述，仅支持中文、英文、数字、_、-，长度不超过128个字符
 * @method void setDescription(string $Description) 设置网关描述，仅支持中文、英文、数字、_、-，长度不超过128个字符
 * @method string getClusterId() 获取服务节点id
 * @method void setClusterId(string $ClusterId) 设置服务节点id
 * @method string getClusterName() 获取服务节点名称
 * @method void setClusterName(string $ClusterName) 设置服务节点名称
 * @method integer getStatus() 获取网关状态，0：离线，1:在线
 * @method void setStatus(integer $Status) 设置网关状态，0：离线，1:在线
 * @method array getVersion() 获取网关版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(array $Version) 设置网关版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDeviceNum() 获取网关下挂设备数量
 * @method void setDeviceNum(integer $DeviceNum) 设置网关下挂设备数量
 * @method string getCreatedAt() 获取激活时间
 * @method void setCreatedAt(string $CreatedAt) 设置激活时间
 * @method string getRegion() 获取所属地域
 * @method void setRegion(string $Region) 设置所属地域
 */
class DescribeGatewayData extends AbstractModel
{
    /**
     * @var string 网关索引ID，用于网关查询，更新，删除操作
     */
    public $GatewayId;

    /**
     * @var string 网关编码，由网关设备生成的唯一编码
     */
    public $GwId;

    /**
     * @var string 网关名称，仅支持中文、英文、数字、_、-，长度不超过32个字符
     */
    public $Name;

    /**
     * @var string 网关描述，仅支持中文、英文、数字、_、-，长度不超过128个字符
     */
    public $Description;

    /**
     * @var string 服务节点id
     */
    public $ClusterId;

    /**
     * @var string 服务节点名称
     */
    public $ClusterName;

    /**
     * @var integer 网关状态，0：离线，1:在线
     */
    public $Status;

    /**
     * @var array 网关版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var integer 网关下挂设备数量
     */
    public $DeviceNum;

    /**
     * @var string 激活时间
     */
    public $CreatedAt;

    /**
     * @var string 所属地域
     */
    public $Region;

    /**
     * @param string $GatewayId 网关索引ID，用于网关查询，更新，删除操作
     * @param string $GwId 网关编码，由网关设备生成的唯一编码
     * @param string $Name 网关名称，仅支持中文、英文、数字、_、-，长度不超过32个字符
     * @param string $Description 网关描述，仅支持中文、英文、数字、_、-，长度不超过128个字符
     * @param string $ClusterId 服务节点id
     * @param string $ClusterName 服务节点名称
     * @param integer $Status 网关状态，0：离线，1:在线
     * @param array $Version 网关版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DeviceNum 网关下挂设备数量
     * @param string $CreatedAt 激活时间
     * @param string $Region 所属地域
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

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = [];
            foreach ($param["Version"] as $key => $value){
                $obj = new GatewayVersion();
                $obj->deserialize($value);
                array_push($this->Version, $obj);
            }
        }

        if (array_key_exists("DeviceNum",$param) and $param["DeviceNum"] !== null) {
            $this->DeviceNum = $param["DeviceNum"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
