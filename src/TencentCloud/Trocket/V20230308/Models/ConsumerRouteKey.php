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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 消费组灰度路由配置键
 *
 * @method string getTopic() 获取<p>Topic 名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopic(string $Topic) 设置<p>Topic 名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroup() 获取<p>消费组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroup(string $Group) 设置<p>消费组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ConsumerRouteKey extends AbstractModel
{
    /**
     * @var string <p>Topic 名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Topic;

    /**
     * @var string <p>消费组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Group;

    /**
     * @param string $Topic <p>Topic 名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Group <p>消费组名称</p>
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
        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }
    }
}
