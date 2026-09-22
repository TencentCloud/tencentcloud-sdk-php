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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 消息内容
 *
 * @method string getContent() 获取<p>文本内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置<p>文本内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TokenUsage getTokenUsage() 获取<p>Token用量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTokenUsage(TokenUsage $TokenUsage) 设置<p>Token用量</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class MessageEventMessage extends AbstractModel
{
    /**
     * @var string <p>文本内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var TokenUsage <p>Token用量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TokenUsage;

    /**
     * @param string $Content <p>文本内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TokenUsage $TokenUsage <p>Token用量</p>
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("TokenUsage",$param) and $param["TokenUsage"] !== null) {
            $this->TokenUsage = new TokenUsage();
            $this->TokenUsage->deserialize($param["TokenUsage"]);
        }
    }
}
