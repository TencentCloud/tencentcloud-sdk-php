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
namespace TencentCloud\Eis\V20210601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetMonitorMetricResponse
 *
 * @method integer getTime() 获取时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTime(integer $Time) 设置时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVal() 获取对应的value值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVal(string $Val) 设置对应的value值
注意：此字段可能返回 null，表示取不到有效值。
 */
class MetricValueMC extends AbstractModel
{
    /**
     * @var integer 时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Time;

    /**
     * @var string 对应的value值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Val;

    /**
     * @param integer $Time 时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Val 对应的value值
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Val",$param) and $param["Val"] !== null) {
            $this->Val = $param["Val"];
        }
    }
}
