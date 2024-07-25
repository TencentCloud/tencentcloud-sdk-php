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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预留券的使用率信息
 *
 * @method float getRate() 获取使用率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRate(float $Rate) 设置使用率
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNum() 获取预留券数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNum(integer $Num) 设置预留券数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getCPU() 获取核数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCPU(float $CPU) 设置核数
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMemory() 获取内存
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemory(float $Memory) 设置内存
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取 预留券类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置 预留券类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGpuNum() 获取GPU 卡数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGpuNum(string $GpuNum) 设置GPU 卡数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取集群 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置集群 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeName() 获取节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeName(string $NodeName) 设置节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPodNum() 获取Pod 数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodNum(integer $PodNum) 设置Pod 数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class ReservedInstanceUtilizationRate extends AbstractModel
{
    /**
     * @var float 使用率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rate;

    /**
     * @var integer 预留券数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Num;

    /**
     * @var float 核数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CPU;

    /**
     * @var float 内存
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Memory;

    /**
     * @var string  预留券类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string GPU 卡数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GpuNum;

    /**
     * @var string 可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var string 集群 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string 节点名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeName;

    /**
     * @var integer Pod 数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodNum;

    /**
     * @param float $Rate 使用率
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Num 预留券数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $CPU 核数
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Memory 内存
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type  预留券类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GpuNum GPU 卡数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone 可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 集群 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeName 节点名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PodNum Pod 数量
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
        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("GpuNum",$param) and $param["GpuNum"] !== null) {
            $this->GpuNum = $param["GpuNum"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("PodNum",$param) and $param["PodNum"] !== null) {
            $this->PodNum = $param["PodNum"];
        }
    }
}
