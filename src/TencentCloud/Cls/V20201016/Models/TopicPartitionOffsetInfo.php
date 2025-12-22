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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TopicPartitionOffsetInfo
 *
 * @method string getTopicID() 获取日志主题id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicID(string $TopicID) 设置日志主题id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPartitionOffsets() 获取分区点位信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartitionOffsets(array $PartitionOffsets) 设置分区点位信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class TopicPartitionOffsetInfo extends AbstractModel
{
    /**
     * @var string 日志主题id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicID;

    /**
     * @var array 分区点位信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PartitionOffsets;

    /**
     * @param string $TopicID 日志主题id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PartitionOffsets 分区点位信息
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
        if (array_key_exists("TopicID",$param) and $param["TopicID"] !== null) {
            $this->TopicID = $param["TopicID"];
        }

        if (array_key_exists("PartitionOffsets",$param) and $param["PartitionOffsets"] !== null) {
            $this->PartitionOffsets = [];
            foreach ($param["PartitionOffsets"] as $key => $value){
                $obj = new PartitionOffsetInfo();
                $obj->deserialize($value);
                array_push($this->PartitionOffsets, $obj);
            }
        }
    }
}
