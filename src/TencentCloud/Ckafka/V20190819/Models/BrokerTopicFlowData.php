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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * broker维度topic 流量排行指标
 *
 * @method string getTopicName() 获取Topic 名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicName(string $TopicName) 设置Topic 名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopicId() 获取Topic Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicId(string $TopicId) 设置Topic Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopicTraffic() 获取Topic 流量(MB)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicTraffic(string $TopicTraffic) 设置Topic 流量(MB)
注意：此字段可能返回 null，表示取不到有效值。
 */
class BrokerTopicFlowData extends AbstractModel
{
    /**
     * @var string Topic 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicName;

    /**
     * @var string Topic Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicId;

    /**
     * @var string Topic 流量(MB)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicTraffic;

    /**
     * @param string $TopicName Topic 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopicId Topic Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopicTraffic Topic 流量(MB)
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicTraffic",$param) and $param["TopicTraffic"] !== null) {
            $this->TopicTraffic = $param["TopicTraffic"];
        }
    }
}
