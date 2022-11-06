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
 * 查询输入的SRT配置信息。
 *
 * @method string getMode() 获取SRT模式。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMode(string $Mode) 设置SRT模式。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStreamId() 获取流Id。
 * @method void setStreamId(string $StreamId) 设置流Id。
 * @method integer getLatency() 获取延迟。
 * @method void setLatency(integer $Latency) 设置延迟。
 * @method integer getRecvLatency() 获取接收延迟。
 * @method void setRecvLatency(integer $RecvLatency) 设置接收延迟。
 * @method integer getPeerLatency() 获取对端延迟。
 * @method void setPeerLatency(integer $PeerLatency) 设置对端延迟。
 * @method integer getPeerIdleTimeout() 获取对端空闲超时时间。
 * @method void setPeerIdleTimeout(integer $PeerIdleTimeout) 设置对端空闲超时时间。
 * @method string getPassphrase() 获取解密密钥。
 * @method void setPassphrase(string $Passphrase) 设置解密密钥。
 * @method integer getPbKeyLen() 获取密钥长度。
 * @method void setPbKeyLen(integer $PbKeyLen) 设置密钥长度。
 * @method array getSourceAddresses() 获取SRT对端地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceAddresses(array $SourceAddresses) 设置SRT对端地址。
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeInputSRTSettings extends AbstractModel
{
    /**
     * @var string SRT模式。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mode;

    /**
     * @var string 流Id。
     */
    public $StreamId;

    /**
     * @var integer 延迟。
     */
    public $Latency;

    /**
     * @var integer 接收延迟。
     */
    public $RecvLatency;

    /**
     * @var integer 对端延迟。
     */
    public $PeerLatency;

    /**
     * @var integer 对端空闲超时时间。
     */
    public $PeerIdleTimeout;

    /**
     * @var string 解密密钥。
     */
    public $Passphrase;

    /**
     * @var integer 密钥长度。
     */
    public $PbKeyLen;

    /**
     * @var array SRT对端地址。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceAddresses;

    /**
     * @param string $Mode SRT模式。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StreamId 流Id。
     * @param integer $Latency 延迟。
     * @param integer $RecvLatency 接收延迟。
     * @param integer $PeerLatency 对端延迟。
     * @param integer $PeerIdleTimeout 对端空闲超时时间。
     * @param string $Passphrase 解密密钥。
     * @param integer $PbKeyLen 密钥长度。
     * @param array $SourceAddresses SRT对端地址。
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("StreamId",$param) and $param["StreamId"] !== null) {
            $this->StreamId = $param["StreamId"];
        }

        if (array_key_exists("Latency",$param) and $param["Latency"] !== null) {
            $this->Latency = $param["Latency"];
        }

        if (array_key_exists("RecvLatency",$param) and $param["RecvLatency"] !== null) {
            $this->RecvLatency = $param["RecvLatency"];
        }

        if (array_key_exists("PeerLatency",$param) and $param["PeerLatency"] !== null) {
            $this->PeerLatency = $param["PeerLatency"];
        }

        if (array_key_exists("PeerIdleTimeout",$param) and $param["PeerIdleTimeout"] !== null) {
            $this->PeerIdleTimeout = $param["PeerIdleTimeout"];
        }

        if (array_key_exists("Passphrase",$param) and $param["Passphrase"] !== null) {
            $this->Passphrase = $param["Passphrase"];
        }

        if (array_key_exists("PbKeyLen",$param) and $param["PbKeyLen"] !== null) {
            $this->PbKeyLen = $param["PbKeyLen"];
        }

        if (array_key_exists("SourceAddresses",$param) and $param["SourceAddresses"] !== null) {
            $this->SourceAddresses = [];
            foreach ($param["SourceAddresses"] as $key => $value){
                $obj = new SRTSourceAddressResp();
                $obj->deserialize($value);
                array_push($this->SourceAddresses, $obj);
            }
        }
    }
}
