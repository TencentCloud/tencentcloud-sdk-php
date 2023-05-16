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
 * 集群巡检统计结果
 *
 * @method string getHealthyLevel() 获取诊断结果的健康水平
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthyLevel(string $HealthyLevel) 设置诊断结果的健康水平
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCount() 获取诊断结果的统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置诊断结果的统计
注意：此字段可能返回 null，表示取不到有效值。
 */
class KubeJarvisStateStatistic extends AbstractModel
{
    /**
     * @var string 诊断结果的健康水平
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthyLevel;

    /**
     * @var integer 诊断结果的统计
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @param string $HealthyLevel 诊断结果的健康水平
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Count 诊断结果的统计
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
        if (array_key_exists("HealthyLevel",$param) and $param["HealthyLevel"] !== null) {
            $this->HealthyLevel = $param["HealthyLevel"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
