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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSinglePayment接口返回响应
 *
 * @method string getTradeSerialNo() 获取平台交易流水号，唯一
 * @method void setTradeSerialNo(string $TradeSerialNo) 设置平台交易流水号，唯一
 * @method string getAgentId() 获取代理商ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentId(string $AgentId) 设置代理商ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentName() 获取代理商名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentName(string $AgentName) 设置代理商名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class CreateSinglePaymentData extends AbstractModel
{
    /**
     * @var string 平台交易流水号，唯一
     */
    public $TradeSerialNo;

    /**
     * @var string 代理商ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentId;

    /**
     * @var string 代理商名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentName;

    /**
     * @param string $TradeSerialNo 平台交易流水号，唯一
     * @param string $AgentId 代理商ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentName 代理商名称
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
        if (array_key_exists("TradeSerialNo",$param) and $param["TradeSerialNo"] !== null) {
            $this->TradeSerialNo = $param["TradeSerialNo"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("AgentName",$param) and $param["AgentName"] !== null) {
            $this->AgentName = $param["AgentName"];
        }
    }
}
