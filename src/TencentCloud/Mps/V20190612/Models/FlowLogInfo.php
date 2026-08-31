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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 传输流日志信息。
 *
 * @method integer getTimestamp() 获取<p>时间戳，单位为秒。</p>
 * @method void setTimestamp(integer $Timestamp) 设置<p>时间戳，单位为秒。</p>
 * @method string getType() 获取<p>输入输出类型（input/output）。</p>
 * @method void setType(string $Type) 设置<p>输入输出类型（input/output）。</p>
 * @method string getInputOutputId() 获取<p>输入或输出Id。</p>
 * @method void setInputOutputId(string $InputOutputId) 设置<p>输入或输出Id。</p>
 * @method string getProtocol() 获取<p>协议。</p>
 * @method void setProtocol(string $Protocol) 设置<p>协议。</p>
 * @method string getEventCode() 获取<p>事件代码。</p>
 * @method void setEventCode(string $EventCode) 设置<p>事件代码。</p>
 * @method string getEventMessage() 获取<p>事件信息。</p>
 * @method void setEventMessage(string $EventMessage) 设置<p>事件信息。</p>
 * @method string getRemoteIp() 获取<p>对端IP。</p>
 * @method void setRemoteIp(string $RemoteIp) 设置<p>对端IP。</p>
 * @method string getRemotePort() 获取<p>对端端口。</p>
 * @method void setRemotePort(string $RemotePort) 设置<p>对端端口。</p>
 * @method string getPipeline() 获取<p>主备通道，0为主通道，1为备通道。</p>
 * @method void setPipeline(string $Pipeline) 设置<p>主备通道，0为主通道，1为备通道。</p>
 * @method string getInputOutputName() 获取<p>输入或输出的名称。</p>
 * @method void setInputOutputName(string $InputOutputName) 设置<p>输入或输出的名称。</p>
 */
class FlowLogInfo extends AbstractModel
{
    /**
     * @var integer <p>时间戳，单位为秒。</p>
     */
    public $Timestamp;

    /**
     * @var string <p>输入输出类型（input/output）。</p>
     */
    public $Type;

    /**
     * @var string <p>输入或输出Id。</p>
     */
    public $InputOutputId;

    /**
     * @var string <p>协议。</p>
     */
    public $Protocol;

    /**
     * @var string <p>事件代码。</p>
     */
    public $EventCode;

    /**
     * @var string <p>事件信息。</p>
     */
    public $EventMessage;

    /**
     * @var string <p>对端IP。</p>
     */
    public $RemoteIp;

    /**
     * @var string <p>对端端口。</p>
     */
    public $RemotePort;

    /**
     * @var string <p>主备通道，0为主通道，1为备通道。</p>
     */
    public $Pipeline;

    /**
     * @var string <p>输入或输出的名称。</p>
     */
    public $InputOutputName;

    /**
     * @param integer $Timestamp <p>时间戳，单位为秒。</p>
     * @param string $Type <p>输入输出类型（input/output）。</p>
     * @param string $InputOutputId <p>输入或输出Id。</p>
     * @param string $Protocol <p>协议。</p>
     * @param string $EventCode <p>事件代码。</p>
     * @param string $EventMessage <p>事件信息。</p>
     * @param string $RemoteIp <p>对端IP。</p>
     * @param string $RemotePort <p>对端端口。</p>
     * @param string $Pipeline <p>主备通道，0为主通道，1为备通道。</p>
     * @param string $InputOutputName <p>输入或输出的名称。</p>
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("InputOutputId",$param) and $param["InputOutputId"] !== null) {
            $this->InputOutputId = $param["InputOutputId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("EventCode",$param) and $param["EventCode"] !== null) {
            $this->EventCode = $param["EventCode"];
        }

        if (array_key_exists("EventMessage",$param) and $param["EventMessage"] !== null) {
            $this->EventMessage = $param["EventMessage"];
        }

        if (array_key_exists("RemoteIp",$param) and $param["RemoteIp"] !== null) {
            $this->RemoteIp = $param["RemoteIp"];
        }

        if (array_key_exists("RemotePort",$param) and $param["RemotePort"] !== null) {
            $this->RemotePort = $param["RemotePort"];
        }

        if (array_key_exists("Pipeline",$param) and $param["Pipeline"] !== null) {
            $this->Pipeline = $param["Pipeline"];
        }

        if (array_key_exists("InputOutputName",$param) and $param["InputOutputName"] !== null) {
            $this->InputOutputName = $param["InputOutputName"];
        }
    }
}
