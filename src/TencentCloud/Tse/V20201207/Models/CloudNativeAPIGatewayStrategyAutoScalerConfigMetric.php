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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 弹性伸缩配置指标
 *
 * @method string getType() 获取指标类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置指标类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceName() 获取指标资源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceName(string $ResourceName) 设置指标资源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetType() 获取指标目标类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetType(string $TargetType) 设置指标目标类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTargetValue() 获取指标目标值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetValue(integer $TargetValue) 设置指标目标值
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloudNativeAPIGatewayStrategyAutoScalerConfigMetric extends AbstractModel
{
    /**
     * @var string 指标类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 指标资源名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceName;

    /**
     * @var string 指标目标类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetType;

    /**
     * @var integer 指标目标值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetValue;

    /**
     * @param string $Type 指标类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceName 指标资源名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetType 指标目标类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TargetValue 指标目标值
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("TargetValue",$param) and $param["TargetValue"] !== null) {
            $this->TargetValue = $param["TargetValue"];
        }
    }
}
