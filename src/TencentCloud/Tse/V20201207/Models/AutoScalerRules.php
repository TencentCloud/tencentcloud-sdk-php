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
 * 指标伸缩的规则
 *
 * @method integer getStabilizationWindowSeconds() 获取稳定窗口时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStabilizationWindowSeconds(integer $StabilizationWindowSeconds) 设置稳定窗口时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSelectPolicy() 获取选择策略依据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelectPolicy(string $SelectPolicy) 设置选择策略依据
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPolicies() 获取扩容策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicies(array $Policies) 设置扩容策略
注意：此字段可能返回 null，表示取不到有效值。
 */
class AutoScalerRules extends AbstractModel
{
    /**
     * @var integer 稳定窗口时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StabilizationWindowSeconds;

    /**
     * @var string 选择策略依据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SelectPolicy;

    /**
     * @var array 扩容策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Policies;

    /**
     * @param integer $StabilizationWindowSeconds 稳定窗口时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SelectPolicy 选择策略依据
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Policies 扩容策略
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
        if (array_key_exists("StabilizationWindowSeconds",$param) and $param["StabilizationWindowSeconds"] !== null) {
            $this->StabilizationWindowSeconds = $param["StabilizationWindowSeconds"];
        }

        if (array_key_exists("SelectPolicy",$param) and $param["SelectPolicy"] !== null) {
            $this->SelectPolicy = $param["SelectPolicy"];
        }

        if (array_key_exists("Policies",$param) and $param["Policies"] !== null) {
            $this->Policies = [];
            foreach ($param["Policies"] as $key => $value){
                $obj = new AutoScalerPolicy();
                $obj->deserialize($value);
                array_push($this->Policies, $obj);
            }
        }
    }
}
