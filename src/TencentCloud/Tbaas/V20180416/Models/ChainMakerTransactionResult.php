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
namespace TencentCloud\Tbaas\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 长安链交易查询结果
 *
 * @method integer getCode() 获取交易结果码
 * @method void setCode(integer $Code) 设置交易结果码
 * @method string getCodeMessage() 获取交易结果码含义
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeMessage(string $CodeMessage) 设置交易结果码含义
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTxId() 获取交易ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTxId(string $TxId) 设置交易ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGasUsed() 获取Gas使用量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGasUsed(integer $GasUsed) 设置Gas使用量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBlockHeight() 获取区块高度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockHeight(integer $BlockHeight) 设置区块高度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContractEvent() 获取合约执行结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContractEvent(string $ContractEvent) 设置合约执行结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取合约返回信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置合约返回信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimestamp() 获取交易时间，单位是秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestamp(integer $Timestamp) 设置交易时间，单位是秒
注意：此字段可能返回 null，表示取不到有效值。
 */
class ChainMakerTransactionResult extends AbstractModel
{
    /**
     * @var integer 交易结果码
     */
    public $Code;

    /**
     * @var string 交易结果码含义
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeMessage;

    /**
     * @var string 交易ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TxId;

    /**
     * @var integer Gas使用量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GasUsed;

    /**
     * @var integer 区块高度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockHeight;

    /**
     * @var string 合约执行结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContractEvent;

    /**
     * @var string 合约返回信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var integer 交易时间，单位是秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timestamp;

    /**
     * @param integer $Code 交易结果码
     * @param string $CodeMessage 交易结果码含义
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TxId 交易ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GasUsed Gas使用量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BlockHeight 区块高度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContractEvent 合约执行结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 合约返回信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Timestamp 交易时间，单位是秒
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("CodeMessage",$param) and $param["CodeMessage"] !== null) {
            $this->CodeMessage = $param["CodeMessage"];
        }

        if (array_key_exists("TxId",$param) and $param["TxId"] !== null) {
            $this->TxId = $param["TxId"];
        }

        if (array_key_exists("GasUsed",$param) and $param["GasUsed"] !== null) {
            $this->GasUsed = $param["GasUsed"];
        }

        if (array_key_exists("BlockHeight",$param) and $param["BlockHeight"] !== null) {
            $this->BlockHeight = $param["BlockHeight"];
        }

        if (array_key_exists("ContractEvent",$param) and $param["ContractEvent"] !== null) {
            $this->ContractEvent = $param["ContractEvent"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }
    }
}
