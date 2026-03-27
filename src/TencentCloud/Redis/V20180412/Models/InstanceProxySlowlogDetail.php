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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 代理慢查询详情
 *
 * @method integer getDuration() 获取<p>慢查询耗时时长。单位：毫秒。</p>
 * @method void setDuration(integer $Duration) 设置<p>慢查询耗时时长。单位：毫秒。</p>
 * @method string getClient() 获取<p>客户端地址。</p>
 * @method void setClient(string $Client) 设置<p>客户端地址。</p>
 * @method string getCommand() 获取<p>慢查询的命令。</p>
 * @method void setCommand(string $Command) 设置<p>慢查询的命令。</p>
 * @method string getCommandLine() 获取<p>慢查询详细命令行信息。</p>
 * @method void setCommandLine(string $CommandLine) 设置<p>慢查询详细命令行信息。</p>
 * @method string getExecuteTime() 获取<p>执行时间。</p>
 * @method void setExecuteTime(string $ExecuteTime) 设置<p>执行时间。</p>
 * @method integer getRecvClientEnd() 获取<p>收客户端请求时长(ms)</p>
 * @method void setRecvClientEnd(integer $RecvClientEnd) 设置<p>收客户端请求时长(ms)</p>
 * @method integer getSendClientEnd() 获取<p>发送客户端请求时长(ms)</p>
 * @method void setSendClientEnd(integer $SendClientEnd) 设置<p>发送客户端请求时长(ms)</p>
 * @method string getNode() 获取<p>Proxy节点ID。</p>
 * @method void setNode(string $Node) 设置<p>Proxy节点ID。</p>
 */
class InstanceProxySlowlogDetail extends AbstractModel
{
    /**
     * @var integer <p>慢查询耗时时长。单位：毫秒。</p>
     */
    public $Duration;

    /**
     * @var string <p>客户端地址。</p>
     */
    public $Client;

    /**
     * @var string <p>慢查询的命令。</p>
     */
    public $Command;

    /**
     * @var string <p>慢查询详细命令行信息。</p>
     */
    public $CommandLine;

    /**
     * @var string <p>执行时间。</p>
     */
    public $ExecuteTime;

    /**
     * @var integer <p>收客户端请求时长(ms)</p>
     */
    public $RecvClientEnd;

    /**
     * @var integer <p>发送客户端请求时长(ms)</p>
     */
    public $SendClientEnd;

    /**
     * @var string <p>Proxy节点ID。</p>
     */
    public $Node;

    /**
     * @param integer $Duration <p>慢查询耗时时长。单位：毫秒。</p>
     * @param string $Client <p>客户端地址。</p>
     * @param string $Command <p>慢查询的命令。</p>
     * @param string $CommandLine <p>慢查询详细命令行信息。</p>
     * @param string $ExecuteTime <p>执行时间。</p>
     * @param integer $RecvClientEnd <p>收客户端请求时长(ms)</p>
     * @param integer $SendClientEnd <p>发送客户端请求时长(ms)</p>
     * @param string $Node <p>Proxy节点ID。</p>
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
        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Client",$param) and $param["Client"] !== null) {
            $this->Client = $param["Client"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("CommandLine",$param) and $param["CommandLine"] !== null) {
            $this->CommandLine = $param["CommandLine"];
        }

        if (array_key_exists("ExecuteTime",$param) and $param["ExecuteTime"] !== null) {
            $this->ExecuteTime = $param["ExecuteTime"];
        }

        if (array_key_exists("RecvClientEnd",$param) and $param["RecvClientEnd"] !== null) {
            $this->RecvClientEnd = $param["RecvClientEnd"];
        }

        if (array_key_exists("SendClientEnd",$param) and $param["SendClientEnd"] !== null) {
            $this->SendClientEnd = $param["SendClientEnd"];
        }

        if (array_key_exists("Node",$param) and $param["Node"] !== null) {
            $this->Node = $param["Node"];
        }
    }
}
