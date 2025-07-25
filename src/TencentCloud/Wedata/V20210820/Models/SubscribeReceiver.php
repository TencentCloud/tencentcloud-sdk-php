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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 订阅接收人
 *
 * @method integer getReceiverUserId() 获取接收人Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiverUserId(integer $ReceiverUserId) 设置接收人Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReceiverName() 获取接收人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiverName(string $ReceiverName) 设置接收人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReceiverUserIdStr() 获取接收人Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiverUserIdStr(string $ReceiverUserIdStr) 设置接收人Uin
注意：此字段可能返回 null，表示取不到有效值。
 */
class SubscribeReceiver extends AbstractModel
{
    /**
     * @var integer 接收人Uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiverUserId;

    /**
     * @var string 接收人名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiverName;

    /**
     * @var string 接收人Uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiverUserIdStr;

    /**
     * @param integer $ReceiverUserId 接收人Uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReceiverName 接收人名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReceiverUserIdStr 接收人Uin
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
        if (array_key_exists("ReceiverUserId",$param) and $param["ReceiverUserId"] !== null) {
            $this->ReceiverUserId = $param["ReceiverUserId"];
        }

        if (array_key_exists("ReceiverName",$param) and $param["ReceiverName"] !== null) {
            $this->ReceiverName = $param["ReceiverName"];
        }

        if (array_key_exists("ReceiverUserIdStr",$param) and $param["ReceiverUserIdStr"] !== null) {
            $this->ReceiverUserIdStr = $param["ReceiverUserIdStr"];
        }
    }
}
