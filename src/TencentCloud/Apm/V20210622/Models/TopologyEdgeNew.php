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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 拓扑图边定义
 *
 * @method string getSource() 获取源节点
 * @method void setSource(string $Source) 设置源节点
 * @method string getId() 获取边ID
 * @method void setId(string $Id) 设置边ID
 * @method float getWeight() 获取边权重
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeight(float $Weight) 设置边权重
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTarget() 获取目标节点
 * @method void setTarget(string $Target) 设置目标节点
 * @method float getDuration() 获取响应时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(float $Duration) 设置响应时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getErrRate() 获取错误率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrRate(float $ErrRate) 设置错误率
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getQps() 获取吞吐量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQps(float $Qps) 设置吞吐量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取边类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置边类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColor() 获取边颜色
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColor(string $Color) 设置边颜色
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getSqlRequestCount() 获取Sql调用数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlRequestCount(float $SqlRequestCount) 设置Sql调用数
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getSqlErrorRequestCount() 获取Sql调用错误数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlErrorRequestCount(float $SqlErrorRequestCount) 设置Sql调用错误数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceComp() 获取边上源节点类型 应用/MQ/DB
 * @method void setSourceComp(string $SourceComp) 设置边上源节点类型 应用/MQ/DB
 * @method string getTargetComp() 获取边上目标节点类型 应用/MQ/DB
 * @method void setTargetComp(string $TargetComp) 设置边上目标节点类型 应用/MQ/DB
 */
class TopologyEdgeNew extends AbstractModel
{
    /**
     * @var string 源节点
     */
    public $Source;

    /**
     * @var string 边ID
     */
    public $Id;

    /**
     * @var float 边权重
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Weight;

    /**
     * @var string 目标节点
     */
    public $Target;

    /**
     * @var float 响应时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var float 错误率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrRate;

    /**
     * @var float 吞吐量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Qps;

    /**
     * @var string 边类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 边颜色
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Color;

    /**
     * @var float Sql调用数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlRequestCount;

    /**
     * @var float Sql调用错误数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlErrorRequestCount;

    /**
     * @var string 边上源节点类型 应用/MQ/DB
     */
    public $SourceComp;

    /**
     * @var string 边上目标节点类型 应用/MQ/DB
     */
    public $TargetComp;

    /**
     * @param string $Source 源节点
     * @param string $Id 边ID
     * @param float $Weight 边权重
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Target 目标节点
     * @param float $Duration 响应时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $ErrRate 错误率
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Qps 吞吐量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 边类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Color 边颜色
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $SqlRequestCount Sql调用数
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $SqlErrorRequestCount Sql调用错误数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceComp 边上源节点类型 应用/MQ/DB
     * @param string $TargetComp 边上目标节点类型 应用/MQ/DB
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("ErrRate",$param) and $param["ErrRate"] !== null) {
            $this->ErrRate = $param["ErrRate"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }

        if (array_key_exists("SqlRequestCount",$param) and $param["SqlRequestCount"] !== null) {
            $this->SqlRequestCount = $param["SqlRequestCount"];
        }

        if (array_key_exists("SqlErrorRequestCount",$param) and $param["SqlErrorRequestCount"] !== null) {
            $this->SqlErrorRequestCount = $param["SqlErrorRequestCount"];
        }

        if (array_key_exists("SourceComp",$param) and $param["SourceComp"] !== null) {
            $this->SourceComp = $param["SourceComp"];
        }

        if (array_key_exists("TargetComp",$param) and $param["TargetComp"] !== null) {
            $this->TargetComp = $param["TargetComp"];
        }
    }
}
