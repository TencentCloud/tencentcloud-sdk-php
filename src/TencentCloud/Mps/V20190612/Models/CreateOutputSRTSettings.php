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
 * 创建媒体传输流的输出的SRT配置。
 *
 * @method array getDestinations() 获取转推的目标地址，当Mode为CALLER时必填，且只能填1组。
 * @method void setDestinations(array $Destinations) 设置转推的目标地址，当Mode为CALLER时必填，且只能填1组。
 * @method string getStreamId() 获取转推SRT的流Id，可选大小写字母、数字和特殊字符（.#!:&,=_-），长度为0~512。
 * @method void setStreamId(string $StreamId) 设置转推SRT的流Id，可选大小写字母、数字和特殊字符（.#!:&,=_-），长度为0~512。
 * @method integer getLatency() 获取转推SRT的总延迟，默认0，单位ms，范围为[0, 3000]。
 * @method void setLatency(integer $Latency) 设置转推SRT的总延迟，默认0，单位ms，范围为[0, 3000]。
 * @method integer getRecvLatency() 获取转推SRT的接收延迟，默认120，单位ms，范围为[0, 3000]。
 * @method void setRecvLatency(integer $RecvLatency) 设置转推SRT的接收延迟，默认120，单位ms，范围为[0, 3000]。
 * @method integer getPeerLatency() 获取转推SRT的对端延迟，默认0，单位ms，范围为[0, 3000]。
 * @method void setPeerLatency(integer $PeerLatency) 设置转推SRT的对端延迟，默认0，单位ms，范围为[0, 3000]。
 * @method integer getPeerIdleTimeout() 获取转推SRT的对端空闲超时时间，默认5000，单位ms，范围为[1000, 10000]。
 * @method void setPeerIdleTimeout(integer $PeerIdleTimeout) 设置转推SRT的对端空闲超时时间，默认5000，单位ms，范围为[1000, 10000]。
 * @method string getPassphrase() 获取转推SRT的加密密钥，默认为空，表示不加密。只可填ascii码值，长度为[10, 79]。
 * @method void setPassphrase(string $Passphrase) 设置转推SRT的加密密钥，默认为空，表示不加密。只可填ascii码值，长度为[10, 79]。
 * @method integer getPbKeyLen() 获取转推SRT的密钥长度，默认为0，可选[0|16|24|32]。
 * @method void setPbKeyLen(integer $PbKeyLen) 设置转推SRT的密钥长度，默认为0，可选[0|16|24|32]。
 * @method string getMode() 获取SRT模式，可选[LISTENER|CALLER]，默认为CALLER。
 * @method void setMode(string $Mode) 设置SRT模式，可选[LISTENER|CALLER]，默认为CALLER。
 */
class CreateOutputSRTSettings extends AbstractModel
{
    /**
     * @var array 转推的目标地址，当Mode为CALLER时必填，且只能填1组。
     */
    public $Destinations;

    /**
     * @var string 转推SRT的流Id，可选大小写字母、数字和特殊字符（.#!:&,=_-），长度为0~512。
     */
    public $StreamId;

    /**
     * @var integer 转推SRT的总延迟，默认0，单位ms，范围为[0, 3000]。
     */
    public $Latency;

    /**
     * @var integer 转推SRT的接收延迟，默认120，单位ms，范围为[0, 3000]。
     */
    public $RecvLatency;

    /**
     * @var integer 转推SRT的对端延迟，默认0，单位ms，范围为[0, 3000]。
     */
    public $PeerLatency;

    /**
     * @var integer 转推SRT的对端空闲超时时间，默认5000，单位ms，范围为[1000, 10000]。
     */
    public $PeerIdleTimeout;

    /**
     * @var string 转推SRT的加密密钥，默认为空，表示不加密。只可填ascii码值，长度为[10, 79]。
     */
    public $Passphrase;

    /**
     * @var integer 转推SRT的密钥长度，默认为0，可选[0|16|24|32]。
     */
    public $PbKeyLen;

    /**
     * @var string SRT模式，可选[LISTENER|CALLER]，默认为CALLER。
     */
    public $Mode;

    /**
     * @param array $Destinations 转推的目标地址，当Mode为CALLER时必填，且只能填1组。
     * @param string $StreamId 转推SRT的流Id，可选大小写字母、数字和特殊字符（.#!:&,=_-），长度为0~512。
     * @param integer $Latency 转推SRT的总延迟，默认0，单位ms，范围为[0, 3000]。
     * @param integer $RecvLatency 转推SRT的接收延迟，默认120，单位ms，范围为[0, 3000]。
     * @param integer $PeerLatency 转推SRT的对端延迟，默认0，单位ms，范围为[0, 3000]。
     * @param integer $PeerIdleTimeout 转推SRT的对端空闲超时时间，默认5000，单位ms，范围为[1000, 10000]。
     * @param string $Passphrase 转推SRT的加密密钥，默认为空，表示不加密。只可填ascii码值，长度为[10, 79]。
     * @param integer $PbKeyLen 转推SRT的密钥长度，默认为0，可选[0|16|24|32]。
     * @param string $Mode SRT模式，可选[LISTENER|CALLER]，默认为CALLER。
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
        if (array_key_exists("Destinations",$param) and $param["Destinations"] !== null) {
            $this->Destinations = [];
            foreach ($param["Destinations"] as $key => $value){
                $obj = new CreateOutputSRTSettingsDestinations();
                $obj->deserialize($value);
                array_push($this->Destinations, $obj);
            }
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

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }
    }
}
