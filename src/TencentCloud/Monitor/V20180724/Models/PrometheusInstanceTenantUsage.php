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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Prometheus用量信息
 *
 * @method string getInstanceId() 获取实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCalcDate() 获取计费周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalcDate(string $CalcDate) 设置计费周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTotal() 获取总用量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(float $Total) 设置总用量
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getBasic() 获取基础指标用量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBasic(float $Basic) 设置基础指标用量
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getFee() 获取付费指标用量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFee(float $Fee) 设置付费指标用量
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrometheusInstanceTenantUsage extends AbstractModel
{
    /**
     * @var string 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 计费周期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalcDate;

    /**
     * @var float 总用量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var float 基础指标用量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Basic;

    /**
     * @var float 付费指标用量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Fee;

    /**
     * @param string $InstanceId 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CalcDate 计费周期
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Total 总用量
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Basic 基础指标用量
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Fee 付费指标用量
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CalcDate",$param) and $param["CalcDate"] !== null) {
            $this->CalcDate = $param["CalcDate"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Basic",$param) and $param["Basic"] !== null) {
            $this->Basic = $param["Basic"];
        }

        if (array_key_exists("Fee",$param) and $param["Fee"] !== null) {
            $this->Fee = $param["Fee"];
        }
    }
}
