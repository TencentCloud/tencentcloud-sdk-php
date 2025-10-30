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
 * 客户端订阅详情，可用于辅助判断哪些客户端订阅关系不一致
 *
 * @method string getClientId() 获取客户端ID
 * @method void setClientId(string $ClientId) 设置客户端ID
 * @method string getClientAddr() 获取客户端IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientAddr(string $ClientAddr) 设置客户端IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopic() 获取订阅主题
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopic(string $Topic) 设置订阅主题
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubString() 获取订阅表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubString(string $SubString) 设置订阅表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpressionType() 获取订阅方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpressionType(string $ExpressionType) 设置订阅方式
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClientSubscriptionInfo extends AbstractModel
{
    /**
     * @var string 客户端ID
     */
    public $ClientId;

    /**
     * @var string 客户端IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientAddr;

    /**
     * @var string 订阅主题
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Topic;

    /**
     * @var string 订阅表达式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubString;

    /**
     * @var string 订阅方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpressionType;

    /**
     * @param string $ClientId 客户端ID
     * @param string $ClientAddr 客户端IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Topic 订阅主题
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubString 订阅表达式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpressionType 订阅方式
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
        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("ClientAddr",$param) and $param["ClientAddr"] !== null) {
            $this->ClientAddr = $param["ClientAddr"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("SubString",$param) and $param["SubString"] !== null) {
            $this->SubString = $param["SubString"];
        }

        if (array_key_exists("ExpressionType",$param) and $param["ExpressionType"] !== null) {
            $this->ExpressionType = $param["ExpressionType"];
        }
    }
}
