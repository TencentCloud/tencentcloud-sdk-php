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
 * ModifyKafkaRecharge请求参数结构体
 *
 * @method string getId() 获取<p>导入配置Id。</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/614/94448">创建Kafka数据订阅任务</a>获取Kafka导入配置Id。</li><li>通过 <a href="https://cloud.tencent.com/document/product/614/94446">获取Kafka数据订阅任务列表</a>获取Kafka导入配置Id。</li></ul>
 * @method void setId(string $Id) 设置<p>导入配置Id。</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/614/94448">创建Kafka数据订阅任务</a>获取Kafka导入配置Id。</li><li>通过 <a href="https://cloud.tencent.com/document/product/614/94446">获取Kafka数据订阅任务列表</a>获取Kafka导入配置Id。</li></ul>
 * @method string getTopicId() 获取<p>导入CLS目标TopicId。</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</li><li>通过 <a href="https://cloud.tencent.com/document/product/614/56456">创建日志主题</a>获取日志主题Id。</li></ul>
 * @method void setTopicId(string $TopicId) 设置<p>导入CLS目标TopicId。</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</li><li>通过 <a href="https://cloud.tencent.com/document/product/614/56456">创建日志主题</a>获取日志主题Id。</li></ul>
 * @method string getName() 获取<p>Kafka导入配置名称</p>
 * @method void setName(string $Name) 设置<p>Kafka导入配置名称</p>
 * @method integer getKafkaType() 获取<p>导入Kafka类型，0：腾讯云CKafka：1：用户自建Kafka。</p>
 * @method void setKafkaType(integer $KafkaType) 设置<p>导入Kafka类型，0：腾讯云CKafka：1：用户自建Kafka。</p>
 * @method string getKafkaInstance() 获取<p>腾讯云CKafka实例ID，KafkaType为0时必填。</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/597/40835">获取实例列表信息</a> 获取实例id。</li></ul>
 * @method void setKafkaInstance(string $KafkaInstance) 设置<p>腾讯云CKafka实例ID，KafkaType为0时必填。</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/597/40835">获取实例列表信息</a> 获取实例id。</li></ul>
 * @method string getServerAddr() 获取<p>服务地址，KafkaType为1时必填。</p>
 * @method void setServerAddr(string $ServerAddr) 设置<p>服务地址，KafkaType为1时必填。</p>
 * @method boolean getIsEncryptionAddr() 获取<p>ServerAddr是否为加密连接，KafkaType为1时必填。</p>
 * @method void setIsEncryptionAddr(boolean $IsEncryptionAddr) 设置<p>ServerAddr是否为加密连接，KafkaType为1时必填。</p>
 * @method KafkaProtocolInfo getProtocol() 获取<p>加密访问协议，KafkaType参数为1并且IsEncryptionAddr参数为true时必填。</p>
 * @method void setProtocol(KafkaProtocolInfo $Protocol) 设置<p>加密访问协议，KafkaType参数为1并且IsEncryptionAddr参数为true时必填。</p>
 * @method string getUserKafkaTopics() 获取<p>用户需要导入的Kafka相关topic列表，多个topic之间使用半角逗号隔开。</p><ul><li>Kafka类型为腾讯云CKafka时：通过 <a href="https://cloud.tencent.com/document/product/597/40847">获取主题列表</a> 获取TopicName。</li></ul>
 * @method void setUserKafkaTopics(string $UserKafkaTopics) 设置<p>用户需要导入的Kafka相关topic列表，多个topic之间使用半角逗号隔开。</p><ul><li>Kafka类型为腾讯云CKafka时：通过 <a href="https://cloud.tencent.com/document/product/597/40847">获取主题列表</a> 获取TopicName。</li></ul>
 * @method string getConsumerGroupName() 获取<p>用户Kafka消费组名称</p>
 * @method void setConsumerGroupName(string $ConsumerGroupName) 设置<p>用户Kafka消费组名称</p>
 * @method LogRechargeRuleInfo getLogRechargeRule() 获取<p>日志导入规则</p>
 * @method void setLogRechargeRule(LogRechargeRuleInfo $LogRechargeRule) 设置<p>日志导入规则</p>
 * @method integer getStatusControl() 获取<p>导入控制，1：暂停；2：启动。</p>
 * @method void setStatusControl(integer $StatusControl) 设置<p>导入控制，1：暂停；2：启动。</p>
 * @method NetworkInfo getNetworkInfo() 获取<p>私有网络信息参数</p>
 * @method void setNetworkInfo(NetworkInfo $NetworkInfo) 设置<p>私有网络信息参数</p>
 * @method UserKafkaMeta getUserKafkaMeta() 获取<p>用户kafka拓展信息</p>
 * @method void setUserKafkaMeta(UserKafkaMeta $UserKafkaMeta) 设置<p>用户kafka拓展信息</p>
 */
class ModifyKafkaRechargeRequest extends AbstractModel
{
    /**
     * @var string <p>导入配置Id。</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/614/94448">创建Kafka数据订阅任务</a>获取Kafka导入配置Id。</li><li>通过 <a href="https://cloud.tencent.com/document/product/614/94446">获取Kafka数据订阅任务列表</a>获取Kafka导入配置Id。</li></ul>
     */
    public $Id;

    /**
     * @var string <p>导入CLS目标TopicId。</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</li><li>通过 <a href="https://cloud.tencent.com/document/product/614/56456">创建日志主题</a>获取日志主题Id。</li></ul>
     */
    public $TopicId;

    /**
     * @var string <p>Kafka导入配置名称</p>
     */
    public $Name;

    /**
     * @var integer <p>导入Kafka类型，0：腾讯云CKafka：1：用户自建Kafka。</p>
     */
    public $KafkaType;

    /**
     * @var string <p>腾讯云CKafka实例ID，KafkaType为0时必填。</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/597/40835">获取实例列表信息</a> 获取实例id。</li></ul>
     */
    public $KafkaInstance;

    /**
     * @var string <p>服务地址，KafkaType为1时必填。</p>
     */
    public $ServerAddr;

    /**
     * @var boolean <p>ServerAddr是否为加密连接，KafkaType为1时必填。</p>
     */
    public $IsEncryptionAddr;

    /**
     * @var KafkaProtocolInfo <p>加密访问协议，KafkaType参数为1并且IsEncryptionAddr参数为true时必填。</p>
     */
    public $Protocol;

    /**
     * @var string <p>用户需要导入的Kafka相关topic列表，多个topic之间使用半角逗号隔开。</p><ul><li>Kafka类型为腾讯云CKafka时：通过 <a href="https://cloud.tencent.com/document/product/597/40847">获取主题列表</a> 获取TopicName。</li></ul>
     */
    public $UserKafkaTopics;

    /**
     * @var string <p>用户Kafka消费组名称</p>
     */
    public $ConsumerGroupName;

    /**
     * @var LogRechargeRuleInfo <p>日志导入规则</p>
     */
    public $LogRechargeRule;

    /**
     * @var integer <p>导入控制，1：暂停；2：启动。</p>
     */
    public $StatusControl;

    /**
     * @var NetworkInfo <p>私有网络信息参数</p>
     */
    public $NetworkInfo;

    /**
     * @var UserKafkaMeta <p>用户kafka拓展信息</p>
     */
    public $UserKafkaMeta;

    /**
     * @param string $Id <p>导入配置Id。</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/614/94448">创建Kafka数据订阅任务</a>获取Kafka导入配置Id。</li><li>通过 <a href="https://cloud.tencent.com/document/product/614/94446">获取Kafka数据订阅任务列表</a>获取Kafka导入配置Id。</li></ul>
     * @param string $TopicId <p>导入CLS目标TopicId。</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</li><li>通过 <a href="https://cloud.tencent.com/document/product/614/56456">创建日志主题</a>获取日志主题Id。</li></ul>
     * @param string $Name <p>Kafka导入配置名称</p>
     * @param integer $KafkaType <p>导入Kafka类型，0：腾讯云CKafka：1：用户自建Kafka。</p>
     * @param string $KafkaInstance <p>腾讯云CKafka实例ID，KafkaType为0时必填。</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/597/40835">获取实例列表信息</a> 获取实例id。</li></ul>
     * @param string $ServerAddr <p>服务地址，KafkaType为1时必填。</p>
     * @param boolean $IsEncryptionAddr <p>ServerAddr是否为加密连接，KafkaType为1时必填。</p>
     * @param KafkaProtocolInfo $Protocol <p>加密访问协议，KafkaType参数为1并且IsEncryptionAddr参数为true时必填。</p>
     * @param string $UserKafkaTopics <p>用户需要导入的Kafka相关topic列表，多个topic之间使用半角逗号隔开。</p><ul><li>Kafka类型为腾讯云CKafka时：通过 <a href="https://cloud.tencent.com/document/product/597/40847">获取主题列表</a> 获取TopicName。</li></ul>
     * @param string $ConsumerGroupName <p>用户Kafka消费组名称</p>
     * @param LogRechargeRuleInfo $LogRechargeRule <p>日志导入规则</p>
     * @param integer $StatusControl <p>导入控制，1：暂停；2：启动。</p>
     * @param NetworkInfo $NetworkInfo <p>私有网络信息参数</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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

        if (array_key_exists("UserKafkaTopics",$param) and $param["UserKafkaTopics"] !== null) {
            $this->UserKafkaTopics = $param["UserKafkaTopics"];
        }

        if (array_key_exists("ConsumerGroupName",$param) and $param["ConsumerGroupName"] !== null) {
            $this->ConsumerGroupName = $param["ConsumerGroupName"];
        }

        if (array_key_exists("LogRechargeRule",$param) and $param["LogRechargeRule"] !== null) {
            $this->LogRechargeRule = new LogRechargeRuleInfo();
            $this->LogRechargeRule->deserialize($param["LogRechargeRule"]);
        }

        if (array_key_exists("StatusControl",$param) and $param["StatusControl"] !== null) {
            $this->StatusControl = $param["StatusControl"];
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
