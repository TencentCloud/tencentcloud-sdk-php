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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 边缘节点信息
 *
 * @method integer getId() 获取IECP边缘节点ID
 * @method void setId(integer $Id) 设置IECP边缘节点ID
 * @method string getName() 获取节点名称
 * @method void setName(string $Name) 设置节点名称
 * @method integer getStatus() 获取节点状态 （1健康｜2异常｜3离线｜4未激活）
 * @method void setStatus(integer $Status) 设置节点状态 （1健康｜2异常｜3离线｜4未激活）
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method EdgeNodeResourceInfo getResource() 获取节点资源信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResource(EdgeNodeResourceInfo $Resource) 设置节点资源信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCpuArchitecture() 获取CPU体系结构
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuArchitecture(string $CpuArchitecture) 设置CPU体系结构
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIp() 获取IP地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIp(string $Ip) 设置IP地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperatingSystem() 获取操作系统
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatingSystem(string $OperatingSystem) 设置操作系统
注意：此字段可能返回 null，表示取不到有效值。
 * @method KeyValueObj getNodeUnits() 获取节点所属的NodeUnit
key：NodeUnit模版ID，Value：NodeUnit模版名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeUnits(KeyValueObj $NodeUnits) 设置节点所属的NodeUnit
key：NodeUnit模版ID，Value：NodeUnit模版名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class EdgeNodeInfo extends AbstractModel
{
    /**
     * @var integer IECP边缘节点ID
     */
    public $Id;

    /**
     * @var string 节点名称
     */
    public $Name;

    /**
     * @var integer 节点状态 （1健康｜2异常｜3离线｜4未激活）
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var EdgeNodeResourceInfo 节点资源信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resource;

    /**
     * @var string CPU体系结构
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuArchitecture;

    /**
     * @var string IP地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ip;

    /**
     * @var string 操作系统
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatingSystem;

    /**
     * @var KeyValueObj 节点所属的NodeUnit
key：NodeUnit模版ID，Value：NodeUnit模版名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeUnits;

    /**
     * @param integer $Id IECP边缘节点ID
     * @param string $Name 节点名称
     * @param integer $Status 节点状态 （1健康｜2异常｜3离线｜4未激活）
     * @param string $CreateTime 创建时间
     * @param EdgeNodeResourceInfo $Resource 节点资源信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CpuArchitecture CPU体系结构
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ip IP地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OperatingSystem 操作系统
注意：此字段可能返回 null，表示取不到有效值。
     * @param KeyValueObj $NodeUnits 节点所属的NodeUnit
key：NodeUnit模版ID，Value：NodeUnit模版名称
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new EdgeNodeResourceInfo();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("CpuArchitecture",$param) and $param["CpuArchitecture"] !== null) {
            $this->CpuArchitecture = $param["CpuArchitecture"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("OperatingSystem",$param) and $param["OperatingSystem"] !== null) {
            $this->OperatingSystem = $param["OperatingSystem"];
        }

        if (array_key_exists("NodeUnits",$param) and $param["NodeUnits"] !== null) {
            $this->NodeUnits = new KeyValueObj();
            $this->NodeUnits->deserialize($param["NodeUnits"]);
        }
    }
}
