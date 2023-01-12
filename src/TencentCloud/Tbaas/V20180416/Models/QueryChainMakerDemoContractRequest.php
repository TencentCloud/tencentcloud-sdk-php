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
 * QueryChainMakerDemoContract请求参数结构体
 *
 * @method string getClusterId() 获取网络ID，可在区块链网络详情或列表中获取
 * @method void setClusterId(string $ClusterId) 设置网络ID，可在区块链网络详情或列表中获取
 * @method string getChainId() 获取业务链ID，可在网络概览页获取
 * @method void setChainId(string $ChainId) 设置业务链ID，可在网络概览页获取
 * @method string getContractName() 获取合约名称，可在合约管理中获取
 * @method void setContractName(string $ContractName) 设置合约名称，可在合约管理中获取
 * @method string getFuncName() 获取合约方法名
 * @method void setFuncName(string $FuncName) 设置合约方法名
 * @method string getFuncParam() 获取合约方法入参，json格式字符串，key/value都是string类型的map
 * @method void setFuncParam(string $FuncParam) 设置合约方法入参，json格式字符串，key/value都是string类型的map
 */
class QueryChainMakerDemoContractRequest extends AbstractModel
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
     * @var string 合约名称，可在合约管理中获取
     */
    public $ContractName;

    /**
     * @var string 合约方法名
     */
    public $FuncName;

    /**
     * @var string 合约方法入参，json格式字符串，key/value都是string类型的map
     */
    public $FuncParam;

    /**
     * @param string $ClusterId 网络ID，可在区块链网络详情或列表中获取
     * @param string $ChainId 业务链ID，可在网络概览页获取
     * @param string $ContractName 合约名称，可在合约管理中获取
     * @param string $FuncName 合约方法名
     * @param string $FuncParam 合约方法入参，json格式字符串，key/value都是string类型的map
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

        if (array_key_exists("ContractName",$param) and $param["ContractName"] !== null) {
            $this->ContractName = $param["ContractName"];
        }

        if (array_key_exists("FuncName",$param) and $param["FuncName"] !== null) {
            $this->FuncName = $param["FuncName"];
        }

        if (array_key_exists("FuncParam",$param) and $param["FuncParam"] !== null) {
            $this->FuncParam = $param["FuncParam"];
        }
    }
}
