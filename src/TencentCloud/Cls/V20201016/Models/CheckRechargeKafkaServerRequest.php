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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckRechargeKafkaServer请求参数结构体
 *
 * @method integer getKafkaType() 获取导入Kafka类型，0: 腾讯云CKafka，1: 用户自建Kafka
 * @method void setKafkaType(integer $KafkaType) 设置导入Kafka类型，0: 腾讯云CKafka，1: 用户自建Kafka
 * @method string getKafkaInstance() 获取腾讯云CKafka实例ID，KafkaType为0时必填
 * @method void setKafkaInstance(string $KafkaInstance) 设置腾讯云CKafka实例ID，KafkaType为0时必填
 * @method string getServerAddr() 获取服务地址
 * @method void setServerAddr(string $ServerAddr) 设置服务地址
 * @method boolean getIsEncryptionAddr() 获取ServerAddr是否为加密连接
 * @method void setIsEncryptionAddr(boolean $IsEncryptionAddr) 设置ServerAddr是否为加密连接
 * @method KafkaProtocolInfo getProtocol() 获取加密访问协议，IsEncryptionAddr参数为true时必填
 * @method void setProtocol(KafkaProtocolInfo $Protocol) 设置加密访问协议，IsEncryptionAddr参数为true时必填
 */
class CheckRechargeKafkaServerRequest extends AbstractModel
{
    /**
     * @var integer 导入Kafka类型，0: 腾讯云CKafka，1: 用户自建Kafka
     */
    public $KafkaType;

    /**
     * @var string 腾讯云CKafka实例ID，KafkaType为0时必填
     */
    public $KafkaInstance;

    /**
     * @var string 服务地址
     */
    public $ServerAddr;

    /**
     * @var boolean ServerAddr是否为加密连接
     */
    public $IsEncryptionAddr;

    /**
     * @var KafkaProtocolInfo 加密访问协议，IsEncryptionAddr参数为true时必填
     */
    public $Protocol;

    /**
     * @param integer $KafkaType 导入Kafka类型，0: 腾讯云CKafka，1: 用户自建Kafka
     * @param string $KafkaInstance 腾讯云CKafka实例ID，KafkaType为0时必填
     * @param string $ServerAddr 服务地址
     * @param boolean $IsEncryptionAddr ServerAddr是否为加密连接
     * @param KafkaProtocolInfo $Protocol 加密访问协议，IsEncryptionAddr参数为true时必填
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
    }
}
