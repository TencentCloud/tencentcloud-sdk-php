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
 * 交易显示概述信息
 *
 * @method string getTxId() 获取交易ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTxId(string $TxId) 设置交易ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChaincodeName() 获取合约名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChaincodeName(string $ChaincodeName) 设置合约名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSender() 获取交易发送者
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSender(string $Sender) 设置交易发送者
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取交易创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置交易创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBlockHeight() 获取交易所在区块高度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockHeight(integer $BlockHeight) 设置交易所在区块高度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTxIndex() 获取交易在区块中的序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTxIndex(integer $TxIndex) 设置交易在区块中的序号
注意：此字段可能返回 null，表示取不到有效值。
 */
class Transaction extends AbstractModel
{
    /**
     * @var string 交易ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TxId;

    /**
     * @var string 合约名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChaincodeName;

    /**
     * @var string 交易发送者
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sender;

    /**
     * @var string 交易创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 交易所在区块高度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockHeight;

    /**
     * @var integer 交易在区块中的序号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TxIndex;

    /**
     * @param string $TxId 交易ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChaincodeName 合约名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Sender 交易发送者
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 交易创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BlockHeight 交易所在区块高度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TxIndex 交易在区块中的序号
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
        if (array_key_exists("TxId",$param) and $param["TxId"] !== null) {
            $this->TxId = $param["TxId"];
        }

        if (array_key_exists("ChaincodeName",$param) and $param["ChaincodeName"] !== null) {
            $this->ChaincodeName = $param["ChaincodeName"];
        }

        if (array_key_exists("Sender",$param) and $param["Sender"] !== null) {
            $this->Sender = $param["Sender"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("BlockHeight",$param) and $param["BlockHeight"] !== null) {
            $this->BlockHeight = $param["BlockHeight"];
        }

        if (array_key_exists("TxIndex",$param) and $param["TxIndex"] !== null) {
            $this->TxIndex = $param["TxIndex"];
        }
    }
}
