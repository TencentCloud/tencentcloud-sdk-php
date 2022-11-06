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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 传输流日志信息。
 *
 * @method integer getTimestamp() 获取时间戳，单位为秒。
 * @method void setTimestamp(integer $Timestamp) 设置时间戳，单位为秒。
 * @method string getType() 获取输入输出类型（input/output）。
 * @method void setType(string $Type) 设置输入输出类型（input/output）。
 * @method string getInputOutputId() 获取输入或输出Id。
 * @method void setInputOutputId(string $InputOutputId) 设置输入或输出Id。
 * @method string getProtocol() 获取协议。
 * @method void setProtocol(string $Protocol) 设置协议。
 * @method string getEventCode() 获取事件代码。
 * @method void setEventCode(string $EventCode) 设置事件代码。
 * @method string getEventMessage() 获取事件信息。
 * @method void setEventMessage(string $EventMessage) 设置事件信息。
 * @method string getRemoteIp() 获取对端IP。
 * @method void setRemoteIp(string $RemoteIp) 设置对端IP。
 * @method string getRemotePort() 获取对端端口。
 * @method void setRemotePort(string $RemotePort) 设置对端端口。
 * @method string getPipeline() 获取主备通道，0为主通道，1为备通道。
 * @method void setPipeline(string $Pipeline) 设置主备通道，0为主通道，1为备通道。
 * @method string getInputOutputName() 获取输入或输出的名称。
 * @method void setInputOutputName(string $InputOutputName) 设置输入或输出的名称。
 */
class FlowLogInfo extends AbstractModel
{
    /**
     * @var integer 时间戳，单位为秒。
     */
    public $Timestamp;

    /**
     * @var string 输入输出类型（input/output）。
     */
    public $Type;

    /**
     * @var string 输入或输出Id。
     */
    public $InputOutputId;

    /**
     * @var string 协议。
     */
    public $Protocol;

    /**
     * @var string 事件代码。
     */
    public $EventCode;

    /**
     * @var string 事件信息。
     */
    public $EventMessage;

    /**
     * @var string 对端IP。
     */
    public $RemoteIp;

    /**
     * @var string 对端端口。
     */
    public $RemotePort;

    /**
     * @var string 主备通道，0为主通道，1为备通道。
     */
    public $Pipeline;

    /**
     * @var string 输入或输出的名称。
     */
    public $InputOutputName;

    /**
     * @param integer $Timestamp 时间戳，单位为秒。
     * @param string $Type 输入输出类型（input/output）。
     * @param string $InputOutputId 输入或输出Id。
     * @param string $Protocol 协议。
     * @param string $EventCode 事件代码。
     * @param string $EventMessage 事件信息。
     * @param string $RemoteIp 对端IP。
     * @param string $RemotePort 对端端口。
     * @param string $Pipeline 主备通道，0为主通道，1为备通道。
     * @param string $InputOutputName 输入或输出的名称。
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
