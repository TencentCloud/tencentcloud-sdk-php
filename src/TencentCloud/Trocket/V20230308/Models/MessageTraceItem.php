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
 * 消息轨迹
 *
 * @method string getStage() 获取消息处理阶段，枚举值如下：

- produce：消息生产

- persist：消息存储

- consume：消息消费
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStage(string $Stage) 设置消息处理阶段，枚举值如下：

- produce：消息生产

- persist：消息存储

- consume：消息消费
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getData() 获取轨迹详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(string $Data) 设置轨迹详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class MessageTraceItem extends AbstractModel
{
    /**
     * @var string 消息处理阶段，枚举值如下：

- produce：消息生产

- persist：消息存储

- consume：消息消费
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Stage;

    /**
     * @var string 轨迹详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @param string $Stage 消息处理阶段，枚举值如下：

- produce：消息生产

- persist：消息存储

- consume：消息消费
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Data 轨迹详情
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
        if (array_key_exists("Stage",$param) and $param["Stage"] !== null) {
            $this->Stage = $param["Stage"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }
    }
}
