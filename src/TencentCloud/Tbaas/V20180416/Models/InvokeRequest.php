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
 * @method string getModule() 获取模块名
 * @method void setModule(string $Module) 设置模块名
 * @method string getOperation() 获取操作名
 * @method void setOperation(string $Operation) 设置操作名
 * @method string getClusterId() 获取cluster标识
 * @method void setClusterId(string $ClusterId) 设置cluster标识
 * @method string getChaincodeName() 获取合约名称
 * @method void setChaincodeName(string $ChaincodeName) 设置合约名称
 * @method string getChannelName() 获取通道名称
 * @method void setChannelName(string $ChannelName) 设置通道名称
 * @method array getPeers() 获取使用的节点名称及对应组织名称
 * @method void setPeers(array $Peers) 设置使用的节点名称及对应组织名称
 * @method string getFuncName() 获取函数名
 * @method void setFuncName(string $FuncName) 设置函数名
 * @method array getArgs() 获取函数参数列表
 * @method void setArgs(array $Args) 设置函数参数列表
 * @method integer getAsyncFlag() 获取同步调用标识
 * @method void setAsyncFlag(integer $AsyncFlag) 设置同步调用标识
 */

/**
 *Invoke请求参数结构体
 */
class InvokeRequest extends AbstractModel
{
    /**
     * @var string 模块名
     */
    public $Module;

    /**
     * @var string 操作名
     */
    public $Operation;

    /**
     * @var string cluster标识
     */
    public $ClusterId;

    /**
     * @var string 合约名称
     */
    public $ChaincodeName;

    /**
     * @var string 通道名称
     */
    public $ChannelName;

    /**
     * @var array 使用的节点名称及对应组织名称
     */
    public $Peers;

    /**
     * @var string 函数名
     */
    public $FuncName;

    /**
     * @var array 函数参数列表
     */
    public $Args;

    /**
     * @var integer 同步调用标识
     */
    public $AsyncFlag;
    /**
     * @param string $Module 模块名
     * @param string $Operation 操作名
     * @param string $ClusterId cluster标识
     * @param string $ChaincodeName 合约名称
     * @param string $ChannelName 通道名称
     * @param array $Peers 使用的节点名称及对应组织名称
     * @param string $FuncName 函数名
     * @param array $Args 函数参数列表
     * @param integer $AsyncFlag 同步调用标识
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ChaincodeName",$param) and $param["ChaincodeName"] !== null) {
            $this->ChaincodeName = $param["ChaincodeName"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("Peers",$param) and $param["Peers"] !== null) {
            $this->Peers = [];
            foreach ($param["Peers"] as $key => $value){
                $obj = new PeerSet();
                $obj->deserialize($value);
                array_push($this->Peers, $obj);
            }
        }

        if (array_key_exists("FuncName",$param) and $param["FuncName"] !== null) {
            $this->FuncName = $param["FuncName"];
        }

        if (array_key_exists("Args",$param) and $param["Args"] !== null) {
            $this->Args = $param["Args"];
        }

        if (array_key_exists("AsyncFlag",$param) and $param["AsyncFlag"] !== null) {
            $this->AsyncFlag = $param["AsyncFlag"];
        }
    }
}
