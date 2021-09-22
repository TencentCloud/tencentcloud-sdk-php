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
 * QuerySinglePaymentResult接口返回响应
 *
 * @method string getTradeSerialNo() 获取平台交易流水号，唯一
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTradeSerialNo(string $TradeSerialNo) 设置平台交易流水号，唯一
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrderId() 获取订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrderId(string $OrderId) 设置订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTradeStatus() 获取交易状态。
0 处理中  
1 预占成功 
2 交易成功 
3 交易失败 
4 未知渠道异常 
5 预占额度失败
6 提交成功
7 提交失败
8 订单重复提交
99 未知系统异常
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTradeStatus(integer $TradeStatus) 设置交易状态。
0 处理中  
1 预占成功 
2 交易成功 
3 交易失败 
4 未知渠道异常 
5 预占额度失败
6 提交成功
7 提交失败
8 订单重复提交
99 未知系统异常
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取业务备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置业务备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentId() 获取代理商ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentId(string $AgentId) 设置代理商ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentName() 获取代理商名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentName(string $AgentName) 设置代理商名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTradeStatusDesc() 获取交易状态描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTradeStatusDesc(string $TradeStatusDesc) 设置交易状态描述。
注意：此字段可能返回 null，表示取不到有效值。
 */
class QuerySinglePaymentResultData extends AbstractModel
{
    /**
     * @var string 平台交易流水号，唯一
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TradeSerialNo;

    /**
     * @var string 订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrderId;

    /**
     * @var integer 交易状态。
0 处理中  
1 预占成功 
2 交易成功 
3 交易失败 
4 未知渠道异常 
5 预占额度失败
6 提交成功
7 提交失败
8 订单重复提交
99 未知系统异常
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TradeStatus;

    /**
     * @var string 业务备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

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
     * @var string 交易状态描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TradeStatusDesc;

    /**
     * @param string $TradeSerialNo 平台交易流水号，唯一
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrderId 订单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TradeStatus 交易状态。
0 处理中  
1 预占成功 
2 交易成功 
3 交易失败 
4 未知渠道异常 
5 预占额度失败
6 提交成功
7 提交失败
8 订单重复提交
99 未知系统异常
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 业务备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentId 代理商ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentName 代理商名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TradeStatusDesc 交易状态描述。
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

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("TradeStatus",$param) and $param["TradeStatus"] !== null) {
            $this->TradeStatus = $param["TradeStatus"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("AgentName",$param) and $param["AgentName"] !== null) {
            $this->AgentName = $param["AgentName"];
        }

        if (array_key_exists("TradeStatusDesc",$param) and $param["TradeStatusDesc"] !== null) {
            $this->TradeStatusDesc = $param["TradeStatusDesc"];
        }
    }
}
