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
 * PreviewKafkaRecharge请求参数结构体
 *
 * @method integer getPreviewType() 获取预览类型，1:源数据预览，2:导出结果预览
 * @method void setPreviewType(integer $PreviewType) 设置预览类型，1:源数据预览，2:导出结果预览
 * @method integer getKafkaType() 获取导入Kafka类型，0: 腾讯云CKafka，1: 用户自建Kafka
 * @method void setKafkaType(integer $KafkaType) 设置导入Kafka类型，0: 腾讯云CKafka，1: 用户自建Kafka
 * @method string getUserKafkaTopics() 获取用户需要导入的Kafka相关topic列表，多个topic之间使用半角逗号隔开
 * @method void setUserKafkaTopics(string $UserKafkaTopics) 设置用户需要导入的Kafka相关topic列表，多个topic之间使用半角逗号隔开
 * @method integer getOffset() 获取导入数据位置，-2:最早（默认），-1：最晚
 * @method void setOffset(integer $Offset) 设置导入数据位置，-2:最早（默认），-1：最晚
 * @method string getKafkaInstance() 获取腾讯云CKafka实例ID，KafkaType为0时必填
 * @method void setKafkaInstance(string $KafkaInstance) 设置腾讯云CKafka实例ID，KafkaType为0时必填
 * @method string getServerAddr() 获取服务地址
 * @method void setServerAddr(string $ServerAddr) 设置服务地址
 * @method boolean getIsEncryptionAddr() 获取ServerAddr是否为加密连接
 * @method void setIsEncryptionAddr(boolean $IsEncryptionAddr) 设置ServerAddr是否为加密连接
 * @method KafkaProtocolInfo getProtocol() 获取加密访问协议，IsEncryptionAddr参数为true时必填
 * @method void setProtocol(KafkaProtocolInfo $Protocol) 设置加密访问协议，IsEncryptionAddr参数为true时必填
 * @method string getConsumerGroupName() 获取用户Kafka消费组
 * @method void setConsumerGroupName(string $ConsumerGroupName) 设置用户Kafka消费组
 * @method LogRechargeRuleInfo getLogRechargeRule() 获取日志导入规则
 * @method void setLogRechargeRule(LogRechargeRuleInfo $LogRechargeRule) 设置日志导入规则
 */
class PreviewKafkaRechargeRequest extends AbstractModel
{
    /**
     * @var integer 预览类型，1:源数据预览，2:导出结果预览
     */
    public $PreviewType;

    /**
     * @var integer 导入Kafka类型，0: 腾讯云CKafka，1: 用户自建Kafka
     */
    public $KafkaType;

    /**
     * @var string 用户需要导入的Kafka相关topic列表，多个topic之间使用半角逗号隔开
     */
    public $UserKafkaTopics;

    /**
     * @var integer 导入数据位置，-2:最早（默认），-1：最晚
     */
    public $Offset;

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
     * @var string 用户Kafka消费组
     */
    public $ConsumerGroupName;

    /**
     * @var LogRechargeRuleInfo 日志导入规则
     */
    public $LogRechargeRule;

    /**
     * @param integer $PreviewType 预览类型，1:源数据预览，2:导出结果预览
     * @param integer $KafkaType 导入Kafka类型，0: 腾讯云CKafka，1: 用户自建Kafka
     * @param string $UserKafkaTopics 用户需要导入的Kafka相关topic列表，多个topic之间使用半角逗号隔开
     * @param integer $Offset 导入数据位置，-2:最早（默认），-1：最晚
     * @param string $KafkaInstance 腾讯云CKafka实例ID，KafkaType为0时必填
     * @param string $ServerAddr 服务地址
     * @param boolean $IsEncryptionAddr ServerAddr是否为加密连接
     * @param KafkaProtocolInfo $Protocol 加密访问协议，IsEncryptionAddr参数为true时必填
     * @param string $ConsumerGroupName 用户Kafka消费组
     * @param LogRechargeRuleInfo $LogRechargeRule 日志导入规则
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
        if (array_key_exists("PreviewType",$param) and $param["PreviewType"] !== null) {
            $this->PreviewType = $param["PreviewType"];
        }

        if (array_key_exists("KafkaType",$param) and $param["KafkaType"] !== null) {
            $this->KafkaType = $param["KafkaType"];
        }

        if (array_key_exists("UserKafkaTopics",$param) and $param["UserKafkaTopics"] !== null) {
            $this->UserKafkaTopics = $param["UserKafkaTopics"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
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

        if (array_key_exists("ConsumerGroupName",$param) and $param["ConsumerGroupName"] !== null) {
            $this->ConsumerGroupName = $param["ConsumerGroupName"];
        }

        if (array_key_exists("LogRechargeRule",$param) and $param["LogRechargeRule"] !== null) {
            $this->LogRechargeRule = new LogRechargeRuleInfo();
            $this->LogRechargeRule->deserialize($param["LogRechargeRule"]);
        }
    }
}
