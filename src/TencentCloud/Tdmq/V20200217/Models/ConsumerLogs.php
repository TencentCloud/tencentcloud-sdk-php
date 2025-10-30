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
 * 消费信息
 *
 * @method integer getTotalCount() 获取记录数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置记录数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConsumerLogSets() 获取消费日志。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumerLogSets(array $ConsumerLogSets) 设置消费日志。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ConsumerLogs extends AbstractModel
{
    /**
     * @var integer 记录数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var array 消费日志。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumerLogSets;

    /**
     * @param integer $TotalCount 记录数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ConsumerLogSets 消费日志。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ConsumerLogSets",$param) and $param["ConsumerLogSets"] !== null) {
            $this->ConsumerLogSets = [];
            foreach ($param["ConsumerLogSets"] as $key => $value){
                $obj = new ConsumerLog();
                $obj->deserialize($value);
                array_push($this->ConsumerLogSets, $obj);
            }
        }
    }
}
