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
 * @method string getChannelName() 获取通道名称
 * @method void setChannelName(string $ChannelName) 设置通道名称
 * @method string getPeerName() 获取节点名称
 * @method void setPeerName(string $PeerName) 设置节点名称
 * @method string getPeerGroup() 获取节点所属组织名称
 * @method void setPeerGroup(string $PeerGroup) 设置节点所属组织名称
 * @method string getTxId() 获取事务ID
 * @method void setTxId(string $TxId) 设置事务ID
 */

/**
 *GetInvokeTx请求参数结构体
 */
class GetInvokeTxRequest extends AbstractModel
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
     * @var string 通道名称
     */
    public $ChannelName;

    /**
     * @var string 节点名称
     */
    public $PeerName;

    /**
     * @var string 节点所属组织名称
     */
    public $PeerGroup;

    /**
     * @var string 事务ID
     */
    public $TxId;
    /**
     * @param string $Module 模块名
     * @param string $Operation 操作名
     * @param string $ClusterId cluster标识
     * @param string $ChannelName 通道名称
     * @param string $PeerName 节点名称
     * @param string $PeerGroup 节点所属组织名称
     * @param string $TxId 事务ID
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

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("PeerName",$param) and $param["PeerName"] !== null) {
            $this->PeerName = $param["PeerName"];
        }

        if (array_key_exists("PeerGroup",$param) and $param["PeerGroup"] !== null) {
            $this->PeerGroup = $param["PeerGroup"];
        }

        if (array_key_exists("TxId",$param) and $param["TxId"] !== null) {
            $this->TxId = $param["TxId"];
        }
    }
}
