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
 * 流状态实时查询接口的流状态信息
 *
 * @method string getType() 获取类型，Input|Output。
 * @method void setType(string $Type) 设置类型，Input|Output。
 * @method string getInputId() 获取输入Id，如果Type为Input，此字段不为空。
 * @method void setInputId(string $InputId) 设置输入Id，如果Type为Input，此字段不为空。
 * @method string getOutputId() 获取输出Id，如果Type为Output，此字段不为空。
 * @method void setOutputId(string $OutputId) 设置输出Id，如果Type为Output，此字段不为空。
 * @method string getFlowId() 获取流Id。
 * @method void setFlowId(string $FlowId) 设置流Id。
 * @method string getProtocol() 获取协议， SRT | RTMP。
 * @method void setProtocol(string $Protocol) 设置协议， SRT | RTMP。
 * @method FlowRealtimeStatusCommon getCommonStatus() 获取共同状态信息。
 * @method void setCommonStatus(FlowRealtimeStatusCommon $CommonStatus) 设置共同状态信息。
 * @method FlowRealtimeStatusSRT getSRTStatus() 获取如果是SRT协议则有此字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSRTStatus(FlowRealtimeStatusSRT $SRTStatus) 设置如果是SRT协议则有此字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method FlowRealtimeStatusRTMP getRTMPStatus() 获取如果是RTMP协议则有此字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRTMPStatus(FlowRealtimeStatusRTMP $RTMPStatus) 设置如果是RTMP协议则有此字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConnectServerIP() 获取服务器IP。
 * @method void setConnectServerIP(string $ConnectServerIP) 设置服务器IP。
 * @method FlowRealtimeStatusRTP getRTPStatus() 获取如果是RTP协议则有此字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRTPStatus(FlowRealtimeStatusRTP $RTPStatus) 设置如果是RTP协议则有此字段。
注意：此字段可能返回 null，表示取不到有效值。
 */
class FlowRealtimeStatusItem extends AbstractModel
{
    /**
     * @var string 类型，Input|Output。
     */
    public $Type;

    /**
     * @var string 输入Id，如果Type为Input，此字段不为空。
     */
    public $InputId;

    /**
     * @var string 输出Id，如果Type为Output，此字段不为空。
     */
    public $OutputId;

    /**
     * @var string 流Id。
     */
    public $FlowId;

    /**
     * @var string 协议， SRT | RTMP。
     */
    public $Protocol;

    /**
     * @var FlowRealtimeStatusCommon 共同状态信息。
     */
    public $CommonStatus;

    /**
     * @var FlowRealtimeStatusSRT 如果是SRT协议则有此字段。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SRTStatus;

    /**
     * @var FlowRealtimeStatusRTMP 如果是RTMP协议则有此字段。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RTMPStatus;

    /**
     * @var string 服务器IP。
     */
    public $ConnectServerIP;

    /**
     * @var FlowRealtimeStatusRTP 如果是RTP协议则有此字段。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RTPStatus;

    /**
     * @param string $Type 类型，Input|Output。
     * @param string $InputId 输入Id，如果Type为Input，此字段不为空。
     * @param string $OutputId 输出Id，如果Type为Output，此字段不为空。
     * @param string $FlowId 流Id。
     * @param string $Protocol 协议， SRT | RTMP。
     * @param FlowRealtimeStatusCommon $CommonStatus 共同状态信息。
     * @param FlowRealtimeStatusSRT $SRTStatus 如果是SRT协议则有此字段。
注意：此字段可能返回 null，表示取不到有效值。
     * @param FlowRealtimeStatusRTMP $RTMPStatus 如果是RTMP协议则有此字段。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConnectServerIP 服务器IP。
     * @param FlowRealtimeStatusRTP $RTPStatus 如果是RTP协议则有此字段。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("InputId",$param) and $param["InputId"] !== null) {
            $this->InputId = $param["InputId"];
        }

        if (array_key_exists("OutputId",$param) and $param["OutputId"] !== null) {
            $this->OutputId = $param["OutputId"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("CommonStatus",$param) and $param["CommonStatus"] !== null) {
            $this->CommonStatus = new FlowRealtimeStatusCommon();
            $this->CommonStatus->deserialize($param["CommonStatus"]);
        }

        if (array_key_exists("SRTStatus",$param) and $param["SRTStatus"] !== null) {
            $this->SRTStatus = new FlowRealtimeStatusSRT();
            $this->SRTStatus->deserialize($param["SRTStatus"]);
        }

        if (array_key_exists("RTMPStatus",$param) and $param["RTMPStatus"] !== null) {
            $this->RTMPStatus = new FlowRealtimeStatusRTMP();
            $this->RTMPStatus->deserialize($param["RTMPStatus"]);
        }

        if (array_key_exists("ConnectServerIP",$param) and $param["ConnectServerIP"] !== null) {
            $this->ConnectServerIP = $param["ConnectServerIP"];
        }

        if (array_key_exists("RTPStatus",$param) and $param["RTPStatus"] !== null) {
            $this->RTPStatus = new FlowRealtimeStatusRTP();
            $this->RTPStatus->deserialize($param["RTPStatus"]);
        }
    }
}
