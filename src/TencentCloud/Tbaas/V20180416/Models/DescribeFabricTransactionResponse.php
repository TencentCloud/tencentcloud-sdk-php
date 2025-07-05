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
namespace TencentCloud\Tbaas\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFabricTransaction返回参数结构体
 *
 * @method string getTxId() 获取交易ID
 * @method void setTxId(string $TxId) 设置交易ID
 * @method string getTxHash() 获取交易Hash
 * @method void setTxHash(string $TxHash) 设置交易Hash
 * @method string getTxStatus() 获取交易状态
 * @method void setTxStatus(string $TxStatus) 设置交易状态
 * @method array getJoinOrgList() 获取参与的组织列表
 * @method void setJoinOrgList(array $JoinOrgList) 设置参与的组织列表
 * @method string getSender() 获取交易发送者
 * @method void setSender(string $Sender) 设置交易发送者
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getBlockHeight() 获取区块高度
 * @method void setBlockHeight(integer $BlockHeight) 设置区块高度
 * @method string getChaincodeName() 获取交易所属合约
 * @method void setChaincodeName(string $ChaincodeName) 设置交易所属合约
 * @method string getTransactionData() 获取交易数据，base64编码，解码后为json化的字符串
 * @method void setTransactionData(string $TransactionData) 设置交易数据，base64编码，解码后为json化的字符串
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeFabricTransactionResponse extends AbstractModel
{
    /**
     * @var string 交易ID
     */
    public $TxId;

    /**
     * @var string 交易Hash
     */
    public $TxHash;

    /**
     * @var string 交易状态
     */
    public $TxStatus;

    /**
     * @var array 参与的组织列表
     */
    public $JoinOrgList;

    /**
     * @var string 交易发送者
     */
    public $Sender;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 区块高度
     */
    public $BlockHeight;

    /**
     * @var string 交易所属合约
     */
    public $ChaincodeName;

    /**
     * @var string 交易数据，base64编码，解码后为json化的字符串
     */
    public $TransactionData;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TxId 交易ID
     * @param string $TxHash 交易Hash
     * @param string $TxStatus 交易状态
     * @param array $JoinOrgList 参与的组织列表
     * @param string $Sender 交易发送者
     * @param string $CreateTime 创建时间
     * @param integer $BlockHeight 区块高度
     * @param string $ChaincodeName 交易所属合约
     * @param string $TransactionData 交易数据，base64编码，解码后为json化的字符串
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("TxHash",$param) and $param["TxHash"] !== null) {
            $this->TxHash = $param["TxHash"];
        }

        if (array_key_exists("TxStatus",$param) and $param["TxStatus"] !== null) {
            $this->TxStatus = $param["TxStatus"];
        }

        if (array_key_exists("JoinOrgList",$param) and $param["JoinOrgList"] !== null) {
            $this->JoinOrgList = $param["JoinOrgList"];
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

        if (array_key_exists("ChaincodeName",$param) and $param["ChaincodeName"] !== null) {
            $this->ChaincodeName = $param["ChaincodeName"];
        }

        if (array_key_exists("TransactionData",$param) and $param["TransactionData"] !== null) {
            $this->TransactionData = $param["TransactionData"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
