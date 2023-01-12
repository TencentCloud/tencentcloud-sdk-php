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
 * QueryChainMakerDemoTransaction请求参数结构体
 *
 * @method string getClusterId() 获取网络ID，可在区块链网络详情或列表中获取
 * @method void setClusterId(string $ClusterId) 设置网络ID，可在区块链网络详情或列表中获取
 * @method string getChainId() 获取业务链ID，可在网络概览页获取
 * @method void setChainId(string $ChainId) 设置业务链ID，可在网络概览页获取
 * @method string getTxID() 获取交易ID，通过调用合约的返回值获取
 * @method void setTxID(string $TxID) 设置交易ID，通过调用合约的返回值获取
 */
class QueryChainMakerDemoTransactionRequest extends AbstractModel
{
    /**
     * @var string 网络ID，可在区块链网络详情或列表中获取
     */
    public $ClusterId;

    /**
     * @var string 业务链ID，可在网络概览页获取
     */
    public $ChainId;

    /**
     * @var string 交易ID，通过调用合约的返回值获取
     */
    public $TxID;

    /**
     * @param string $ClusterId 网络ID，可在区块链网络详情或列表中获取
     * @param string $ChainId 业务链ID，可在网络概览页获取
     * @param string $TxID 交易ID，通过调用合约的返回值获取
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ChainId",$param) and $param["ChainId"] !== null) {
            $this->ChainId = $param["ChainId"];
        }

        if (array_key_exists("TxID",$param) and $param["TxID"] !== null) {
            $this->TxID = $param["TxID"];
        }
    }
}
