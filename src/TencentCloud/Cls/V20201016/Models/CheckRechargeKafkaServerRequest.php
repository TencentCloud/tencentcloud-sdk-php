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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckRechargeKafkaServer请求参数结构体
 *
 * @method integer getKafkaType() 获取<p>导入Kafka类型，0: 腾讯云CKafka；1: 用户自建Kafka。</p>
 * @method void setKafkaType(integer $KafkaType) 设置<p>导入Kafka类型，0: 腾讯云CKafka；1: 用户自建Kafka。</p>
 * @method string getKafkaInstance() 获取<p>腾讯云CKafka实例ID。<br>KafkaType为0时，KafkaInstance必填</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/597/40835">获取实例列表信息</a> 获取实例id。</li></ul>
 * @method void setKafkaInstance(string $KafkaInstance) 设置<p>腾讯云CKafka实例ID。<br>KafkaType为0时，KafkaInstance必填</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/597/40835">获取实例列表信息</a> 获取实例id。</li></ul>
 * @method string getServerAddr() 获取<p>服务地址。<br>KafkaType为1时，ServerAddr必填</p>
 * @method void setServerAddr(string $ServerAddr) 设置<p>服务地址。<br>KafkaType为1时，ServerAddr必填</p>
 * @method boolean getIsEncryptionAddr() 获取<p>ServerAddr是否为加密连接，默认值false。当KafkaType为1用户自建kafka时生效。</p>
 * @method void setIsEncryptionAddr(boolean $IsEncryptionAddr) 设置<p>ServerAddr是否为加密连接，默认值false。当KafkaType为1用户自建kafka时生效。</p>
 * @method KafkaProtocolInfo getProtocol() 获取<p>加密访问协议。KafkaType参数为1并且IsEncryptionAddr参数为true时必填。</p>
 * @method void setProtocol(KafkaProtocolInfo $Protocol) 设置<p>加密访问协议。KafkaType参数为1并且IsEncryptionAddr参数为true时必填。</p>
 * @method NetworkInfo getNetworkInfo() 获取<p>网络信息参数</p>
 * @method void setNetworkInfo(NetworkInfo $NetworkInfo) 设置<p>网络信息参数</p>
 * @method UserKafkaMeta getUserKafkaMeta() 获取<p>用户kafka拓展信息</p>
 * @method void setUserKafkaMeta(UserKafkaMeta $UserKafkaMeta) 设置<p>用户kafka拓展信息</p>
 */
class CheckRechargeKafkaServerRequest extends AbstractModel
{
    /**
     * @var integer <p>导入Kafka类型，0: 腾讯云CKafka；1: 用户自建Kafka。</p>
     */
    public $KafkaType;

    /**
     * @var string <p>腾讯云CKafka实例ID。<br>KafkaType为0时，KafkaInstance必填</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/597/40835">获取实例列表信息</a> 获取实例id。</li></ul>
     */
    public $KafkaInstance;

    /**
     * @var string <p>服务地址。<br>KafkaType为1时，ServerAddr必填</p>
     */
    public $ServerAddr;

    /**
     * @var boolean <p>ServerAddr是否为加密连接，默认值false。当KafkaType为1用户自建kafka时生效。</p>
     */
    public $IsEncryptionAddr;

    /**
     * @var KafkaProtocolInfo <p>加密访问协议。KafkaType参数为1并且IsEncryptionAddr参数为true时必填。</p>
     */
    public $Protocol;

    /**
     * @var NetworkInfo <p>网络信息参数</p>
     */
    public $NetworkInfo;

    /**
     * @var UserKafkaMeta <p>用户kafka拓展信息</p>
     */
    public $UserKafkaMeta;

    /**
     * @param integer $KafkaType <p>导入Kafka类型，0: 腾讯云CKafka；1: 用户自建Kafka。</p>
     * @param string $KafkaInstance <p>腾讯云CKafka实例ID。<br>KafkaType为0时，KafkaInstance必填</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/597/40835">获取实例列表信息</a> 获取实例id。</li></ul>
     * @param string $ServerAddr <p>服务地址。<br>KafkaType为1时，ServerAddr必填</p>
     * @param boolean $IsEncryptionAddr <p>ServerAddr是否为加密连接，默认值false。当KafkaType为1用户自建kafka时生效。</p>
     * @param KafkaProtocolInfo $Protocol <p>加密访问协议。KafkaType参数为1并且IsEncryptionAddr参数为true时必填。</p>
     * @param NetworkInfo $NetworkInfo <p>网络信息参数</p>
     * @param UserKafkaMeta $UserKafkaMeta <p>用户kafka拓展信息</p>
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
        if (array_key_exists("KafkaType",$param) and $param["KafkaType"] !== null) {
            $this->KafkaType = $param["KafkaType"];
        }

        if (array_key_exists("KafkaInstance",$param) and $param["KafkaInstance"] !== null) {
            $this->KafkaInstance = $param["KafkaInstance"];
        }

        if (array_key_exists("ServerAddr",$param) and $param["ServerAddr"] !== null) {
            $this->ServerAddr = $param["ServerAddr"];
        }

        if (array_key_exists("IsEncryptionAddr",$param) and $param["IsEncryptionAddr"] !== null) {
            $this->IsEncryptionAddr = $param["IsEncryptionAddr"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = new KafkaProtocolInfo();
            $this->Protocol->deserialize($param["Protocol"]);
        }

        if (array_key_exists("NetworkInfo",$param) and $param["NetworkInfo"] !== null) {
            $this->NetworkInfo = new NetworkInfo();
            $this->NetworkInfo->deserialize($param["NetworkInfo"]);
        }

        if (array_key_exists("UserKafkaMeta",$param) and $param["UserKafkaMeta"] !== null) {
            $this->UserKafkaMeta = new UserKafkaMeta();
            $this->UserKafkaMeta->deserialize($param["UserKafkaMeta"]);
        }
    }
}
