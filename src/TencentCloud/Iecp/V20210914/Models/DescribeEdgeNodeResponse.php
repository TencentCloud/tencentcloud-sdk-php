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
 * DescribeEdgeNode返回参数结构体
 *
 * @method integer getId() 获取节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKind() 获取节点类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKind(string $Kind) 设置节点类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取节点状态 （1健康｜2异常｜3离线｜4未激活）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置节点状态 （1健康｜2异常｜3离线｜4未激活）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCpuArchitecture() 获取CPU体系结构
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuArchitecture(string $CpuArchitecture) 设置CPU体系结构
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAiChipArchitecture() 获取AI处理器体系结构
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAiChipArchitecture(string $AiChipArchitecture) 设置AI处理器体系结构
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIp() 获取IP地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIp(string $Ip) 设置IP地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabels() 获取节点标签列表
 * @method void setLabels(array $Labels) 设置节点标签列表
 * @method EdgeNodeResourceInfo getResource() 获取节点资源信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResource(EdgeNodeResourceInfo $Resource) 设置节点资源信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeEdgeNodeResponse extends AbstractModel
{
    /**
     * @var integer 节点ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 节点类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Kind;

    /**
     * @var string 节点名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 节点状态 （1健康｜2异常｜3离线｜4未激活）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string CPU体系结构
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuArchitecture;

    /**
     * @var string AI处理器体系结构
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AiChipArchitecture;

    /**
     * @var string IP地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ip;

    /**
     * @var array 节点标签列表
     */
    public $Labels;

    /**
     * @var EdgeNodeResourceInfo 节点资源信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resource;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Id 节点ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Kind 节点类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 节点名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 节点状态 （1健康｜2异常｜3离线｜4未激活）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CpuArchitecture CPU体系结构
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AiChipArchitecture AI处理器体系结构
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ip IP地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Labels 节点标签列表
     * @param EdgeNodeResourceInfo $Resource 节点资源信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CpuArchitecture",$param) and $param["CpuArchitecture"] !== null) {
            $this->CpuArchitecture = $param["CpuArchitecture"];
        }

        if (array_key_exists("AiChipArchitecture",$param) and $param["AiChipArchitecture"] !== null) {
            $this->AiChipArchitecture = $param["AiChipArchitecture"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new EdgeNodeLabel();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new EdgeNodeResourceInfo();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
