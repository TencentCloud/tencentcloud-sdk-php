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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI 网关中消费者组简要信息
 *
 * @method string getName() 获取<p>消费者组名称</p>
 * @method void setName(string $Name) 设置<p>消费者组名称</p>
 * @method string getConsumerGroupId() 获取<p>消费者组Id</p>
 * @method void setConsumerGroupId(string $ConsumerGroupId) 设置<p>消费者组Id</p>
 * @method string getConsumerGroupPath() 获取<p>消费者组（组织节点）的当前展示路径，可选。TokenUsageList 在网关版本不低于 3.9.8 时，从 Kong CP 当前目录补齐，用于展示当前直接所属组的位置；多父节点使用确定性路径。更早版本、无可用路径或未补齐此元数据的接口可省略；前端缺省时回退 Name。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumerGroupPath(string $ConsumerGroupPath) 设置<p>消费者组（组织节点）的当前展示路径，可选。TokenUsageList 在网关版本不低于 3.9.8 时，从 Kong CP 当前目录补齐，用于展示当前直接所属组的位置；多父节点使用确定性路径。更早版本、无可用路径或未补齐此元数据的接口可省略；前端缺省时回退 Name。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AIGWConsumerGroupBrief extends AbstractModel
{
    /**
     * @var string <p>消费者组名称</p>
     */
    public $Name;

    /**
     * @var string <p>消费者组Id</p>
     */
    public $ConsumerGroupId;

    /**
     * @var string <p>消费者组（组织节点）的当前展示路径，可选。TokenUsageList 在网关版本不低于 3.9.8 时，从 Kong CP 当前目录补齐，用于展示当前直接所属组的位置；多父节点使用确定性路径。更早版本、无可用路径或未补齐此元数据的接口可省略；前端缺省时回退 Name。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumerGroupPath;

    /**
     * @param string $Name <p>消费者组名称</p>
     * @param string $ConsumerGroupId <p>消费者组Id</p>
     * @param string $ConsumerGroupPath <p>消费者组（组织节点）的当前展示路径，可选。TokenUsageList 在网关版本不低于 3.9.8 时，从 Kong CP 当前目录补齐，用于展示当前直接所属组的位置；多父节点使用确定性路径。更早版本、无可用路径或未补齐此元数据的接口可省略；前端缺省时回退 Name。</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ConsumerGroupId",$param) and $param["ConsumerGroupId"] !== null) {
            $this->ConsumerGroupId = $param["ConsumerGroupId"];
        }

        if (array_key_exists("ConsumerGroupPath",$param) and $param["ConsumerGroupPath"] !== null) {
            $this->ConsumerGroupPath = $param["ConsumerGroupPath"];
        }
    }
}
