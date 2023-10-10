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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警接收人的关联策略使用信息
 *
 * @method integer getReceiverId() 获取接收人id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiverId(integer $ReceiverId) 设置接收人id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReceiverName() 获取接收人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiverName(string $ReceiverName) 设置接收人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPolicyName() 获取策略名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyName(string $PolicyName) 设置策略名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class WebHookReceiverUsage extends AbstractModel
{
    /**
     * @var integer 接收人id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiverId;

    /**
     * @var string 接收人名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiverName;

    /**
     * @var string 策略名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyName;

    /**
     * @param integer $ReceiverId 接收人id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReceiverName 接收人名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PolicyName 策略名称
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
        if (array_key_exists("ReceiverId",$param) and $param["ReceiverId"] !== null) {
            $this->ReceiverId = $param["ReceiverId"];
        }

        if (array_key_exists("ReceiverName",$param) and $param["ReceiverName"] !== null) {
            $this->ReceiverName = $param["ReceiverName"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }
    }
}
