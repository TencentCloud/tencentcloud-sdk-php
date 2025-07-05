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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 监控数据点
 *
 * @method array getTimestamps() 获取监控值数组，该数组和Timestamps一一对应
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestamps(array $Timestamps) 设置监控值数组，该数组和Timestamps一一对应
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getValues() 获取监控数据点位置，比如一天按分钟划分有1440个点，每个点的序号是0 - 1439之间的一个数，当某个序号不在该数组中，说明掉点了
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValues(array $Values) 设置监控数据点位置，比如一天按分钟划分有1440个点，每个点的序号是0 - 1439之间的一个数，当某个序号不在该数组中，说明掉点了
注意：此字段可能返回 null，表示取不到有效值。
 */
class RocketMQDataPoint extends AbstractModel
{
    /**
     * @var array 监控值数组，该数组和Timestamps一一对应
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timestamps;

    /**
     * @var array 监控数据点位置，比如一天按分钟划分有1440个点，每个点的序号是0 - 1439之间的一个数，当某个序号不在该数组中，说明掉点了
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Values;

    /**
     * @param array $Timestamps 监控值数组，该数组和Timestamps一一对应
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Values 监控数据点位置，比如一天按分钟划分有1440个点，每个点的序号是0 - 1439之间的一个数，当某个序号不在该数组中，说明掉点了
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
        if (array_key_exists("Timestamps",$param) and $param["Timestamps"] !== null) {
            $this->Timestamps = $param["Timestamps"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
