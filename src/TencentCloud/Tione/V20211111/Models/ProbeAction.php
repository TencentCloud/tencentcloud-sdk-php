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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 探针行为
 *
 * @method HTTPGetAction getHTTPGet() 获取http get 行为
 * @method void setHTTPGet(HTTPGetAction $HTTPGet) 设置http get 行为
 * @method ExecAction getExec() 获取执行命令检查 行为
 * @method void setExec(ExecAction $Exec) 设置执行命令检查 行为
 * @method TCPSocketAction getTCPSocket() 获取tcp socket 检查行为
 * @method void setTCPSocket(TCPSocketAction $TCPSocket) 设置tcp socket 检查行为
 * @method string getActionType() 获取探针类型，默认 HTTPGet，可选值：HTTPGet、Exec、TCPSocket
 * @method void setActionType(string $ActionType) 设置探针类型，默认 HTTPGet，可选值：HTTPGet、Exec、TCPSocket
 */
class ProbeAction extends AbstractModel
{
    /**
     * @var HTTPGetAction http get 行为
     */
    public $HTTPGet;

    /**
     * @var ExecAction 执行命令检查 行为
     */
    public $Exec;

    /**
     * @var TCPSocketAction tcp socket 检查行为
     */
    public $TCPSocket;

    /**
     * @var string 探针类型，默认 HTTPGet，可选值：HTTPGet、Exec、TCPSocket
     */
    public $ActionType;

    /**
     * @param HTTPGetAction $HTTPGet http get 行为
     * @param ExecAction $Exec 执行命令检查 行为
     * @param TCPSocketAction $TCPSocket tcp socket 检查行为
     * @param string $ActionType 探针类型，默认 HTTPGet，可选值：HTTPGet、Exec、TCPSocket
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
        if (array_key_exists("HTTPGet",$param) and $param["HTTPGet"] !== null) {
            $this->HTTPGet = new HTTPGetAction();
            $this->HTTPGet->deserialize($param["HTTPGet"]);
        }

        if (array_key_exists("Exec",$param) and $param["Exec"] !== null) {
            $this->Exec = new ExecAction();
            $this->Exec->deserialize($param["Exec"]);
        }

        if (array_key_exists("TCPSocket",$param) and $param["TCPSocket"] !== null) {
            $this->TCPSocket = new TCPSocketAction();
            $this->TCPSocket->deserialize($param["TCPSocket"]);
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }
    }
}
