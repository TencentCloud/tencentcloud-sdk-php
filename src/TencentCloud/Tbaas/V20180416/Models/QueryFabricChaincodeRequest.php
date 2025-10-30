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
 * QueryFabricChaincode请求参数结构体
 *
 * @method string getClusterId() 获取网络ID，可在区块链网络详情获取
 * @method void setClusterId(string $ClusterId) 设置网络ID，可在区块链网络详情获取
 * @method string getChannelId() 获取通道ID，可在通道列表或通道详情获取
 * @method void setChannelId(string $ChannelId) 设置通道ID，可在通道列表或通道详情获取
 * @method string getChaincodeName() 获取合约名称，可在合约列表或合约详情获取
 * @method void setChaincodeName(string $ChaincodeName) 设置合约名称，可在合约列表或合约详情获取
 * @method string getFuncName() 获取合约方法
 * @method void setFuncName(string $FuncName) 设置合约方法
 * @method array getFuncParam() 获取合约方法入参
 * @method void setFuncParam(array $FuncParam) 设置合约方法入参
 */
class QueryFabricChaincodeRequest extends AbstractModel
{
    /**
     * @var string 网络ID，可在区块链网络详情获取
     */
    public $ClusterId;

    /**
     * @var string 通道ID，可在通道列表或通道详情获取
     */
    public $ChannelId;

    /**
     * @var string 合约名称，可在合约列表或合约详情获取
     */
    public $ChaincodeName;

    /**
     * @var string 合约方法
     */
    public $FuncName;

    /**
     * @var array 合约方法入参
     */
    public $FuncParam;

    /**
     * @param string $ClusterId 网络ID，可在区块链网络详情获取
     * @param string $ChannelId 通道ID，可在通道列表或通道详情获取
     * @param string $ChaincodeName 合约名称，可在合约列表或合约详情获取
     * @param string $FuncName 合约方法
     * @param array $FuncParam 合约方法入参
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

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("ChaincodeName",$param) and $param["ChaincodeName"] !== null) {
            $this->ChaincodeName = $param["ChaincodeName"];
        }

        if (array_key_exists("FuncName",$param) and $param["FuncName"] !== null) {
            $this->FuncName = $param["FuncName"];
        }

        if (array_key_exists("FuncParam",$param) and $param["FuncParam"] !== null) {
            $this->FuncParam = $param["FuncParam"];
        }
    }
}
