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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ConfigureSubscribeJob请求参数结构体
 *
 * @method string getSubscribeId() 获取数据订阅实例的 ID
 * @method void setSubscribeId(string $SubscribeId) 设置数据订阅实例的 ID
 * @method string getSubscribeMode() 获取数据订阅的类型，当 DatabaseType 不为 mongodb 时，枚举值为：all-全实例更新；dml-数据更新；ddl-结构更新；dmlAndDdl-数据更新+结构更新。当 DatabaseType 为 mongodb 时，枚举值为 all-全实例更新；database-订阅单库；collection-订阅单集合
 * @method void setSubscribeMode(string $SubscribeMode) 设置数据订阅的类型，当 DatabaseType 不为 mongodb 时，枚举值为：all-全实例更新；dml-数据更新；ddl-结构更新；dmlAndDdl-数据更新+结构更新。当 DatabaseType 为 mongodb 时，枚举值为 all-全实例更新；database-订阅单库；collection-订阅单集合
 * @method string getAccessType() 获取源数据库接入类型，如：extranet(公网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、cdb(云数据库)、cvm(云服务器自建)、intranet(自研上云)、vpc(私有网络vpc)。注意具体可选值依赖当前链路支持能力
 * @method void setAccessType(string $AccessType) 设置源数据库接入类型，如：extranet(公网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、cdb(云数据库)、cvm(云服务器自建)、intranet(自研上云)、vpc(私有网络vpc)。注意具体可选值依赖当前链路支持能力
 * @method array getEndpoints() 获取数据库节点信息
 * @method void setEndpoints(array $Endpoints) 设置数据库节点信息
 * @method SubscribeKafkaConfig getKafkaConfig() 获取Kafka配置
 * @method void setKafkaConfig(SubscribeKafkaConfig $KafkaConfig) 设置Kafka配置
 * @method array getSubscribeObjects() 获取订阅的数据库表信息，当 SubscribeMode 不为 all和ddl 时，SubscribeObjects 为必选参数
 * @method void setSubscribeObjects(array $SubscribeObjects) 设置订阅的数据库表信息，当 SubscribeMode 不为 all和ddl 时，SubscribeObjects 为必选参数
 * @method string getProtocol() 获取订阅数据格式，如：protobuf、json、avro。注意具体可选值依赖当前链路支持能力，数据格式详情参考官网的消费demo文档
 * @method void setProtocol(string $Protocol) 设置订阅数据格式，如：protobuf、json、avro。注意具体可选值依赖当前链路支持能力，数据格式详情参考官网的消费demo文档
 * @method array getPipelineInfo() 获取mongo选填参数：输出聚合设置。
 * @method void setPipelineInfo(array $PipelineInfo) 设置mongo选填参数：输出聚合设置。
 * @method array getExtraAttr() 获取为业务添加的额外信息。参数名作key，参数值作value。
mysql选填参数：ProcessXA-是否处理XA事务，填true处理，不填或填其他值不处理。
mongo选填参数：SubscribeType-订阅类型，目前只支持changeStream，不填也是默认changeStream。
其他业务暂没有可选参数。
 * @method void setExtraAttr(array $ExtraAttr) 设置为业务添加的额外信息。参数名作key，参数值作value。
mysql选填参数：ProcessXA-是否处理XA事务，填true处理，不填或填其他值不处理。
mongo选填参数：SubscribeType-订阅类型，目前只支持changeStream，不填也是默认changeStream。
其他业务暂没有可选参数。
 * @method string getConsumerVpcId() 获取vpc id
 * @method void setConsumerVpcId(string $ConsumerVpcId) 设置vpc id
 * @method string getConsumerSubnetId() 获取subnet id
 * @method void setConsumerSubnetId(string $ConsumerSubnetId) 设置subnet id
 */
class ConfigureSubscribeJobRequest extends AbstractModel
{
    /**
     * @var string 数据订阅实例的 ID
     */
    public $SubscribeId;

    /**
     * @var string 数据订阅的类型，当 DatabaseType 不为 mongodb 时，枚举值为：all-全实例更新；dml-数据更新；ddl-结构更新；dmlAndDdl-数据更新+结构更新。当 DatabaseType 为 mongodb 时，枚举值为 all-全实例更新；database-订阅单库；collection-订阅单集合
     */
    public $SubscribeMode;

    /**
     * @var string 源数据库接入类型，如：extranet(公网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、cdb(云数据库)、cvm(云服务器自建)、intranet(自研上云)、vpc(私有网络vpc)。注意具体可选值依赖当前链路支持能力
     */
    public $AccessType;

    /**
     * @var array 数据库节点信息
     */
    public $Endpoints;

    /**
     * @var SubscribeKafkaConfig Kafka配置
     */
    public $KafkaConfig;

    /**
     * @var array 订阅的数据库表信息，当 SubscribeMode 不为 all和ddl 时，SubscribeObjects 为必选参数
     */
    public $SubscribeObjects;

    /**
     * @var string 订阅数据格式，如：protobuf、json、avro。注意具体可选值依赖当前链路支持能力，数据格式详情参考官网的消费demo文档
     */
    public $Protocol;

    /**
     * @var array mongo选填参数：输出聚合设置。
     */
    public $PipelineInfo;

    /**
     * @var array 为业务添加的额外信息。参数名作key，参数值作value。
mysql选填参数：ProcessXA-是否处理XA事务，填true处理，不填或填其他值不处理。
mongo选填参数：SubscribeType-订阅类型，目前只支持changeStream，不填也是默认changeStream。
其他业务暂没有可选参数。
     */
    public $ExtraAttr;

    /**
     * @var string vpc id
     */
    public $ConsumerVpcId;

    /**
     * @var string subnet id
     */
    public $ConsumerSubnetId;

    /**
     * @param string $SubscribeId 数据订阅实例的 ID
     * @param string $SubscribeMode 数据订阅的类型，当 DatabaseType 不为 mongodb 时，枚举值为：all-全实例更新；dml-数据更新；ddl-结构更新；dmlAndDdl-数据更新+结构更新。当 DatabaseType 为 mongodb 时，枚举值为 all-全实例更新；database-订阅单库；collection-订阅单集合
     * @param string $AccessType 源数据库接入类型，如：extranet(公网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、cdb(云数据库)、cvm(云服务器自建)、intranet(自研上云)、vpc(私有网络vpc)。注意具体可选值依赖当前链路支持能力
     * @param array $Endpoints 数据库节点信息
     * @param SubscribeKafkaConfig $KafkaConfig Kafka配置
     * @param array $SubscribeObjects 订阅的数据库表信息，当 SubscribeMode 不为 all和ddl 时，SubscribeObjects 为必选参数
     * @param string $Protocol 订阅数据格式，如：protobuf、json、avro。注意具体可选值依赖当前链路支持能力，数据格式详情参考官网的消费demo文档
     * @param array $PipelineInfo mongo选填参数：输出聚合设置。
     * @param array $ExtraAttr 为业务添加的额外信息。参数名作key，参数值作value。
mysql选填参数：ProcessXA-是否处理XA事务，填true处理，不填或填其他值不处理。
mongo选填参数：SubscribeType-订阅类型，目前只支持changeStream，不填也是默认changeStream。
其他业务暂没有可选参数。
     * @param string $ConsumerVpcId vpc id
     * @param string $ConsumerSubnetId subnet id
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
        if (array_key_exists("SubscribeId",$param) and $param["SubscribeId"] !== null) {
            $this->SubscribeId = $param["SubscribeId"];
        }

        if (array_key_exists("SubscribeMode",$param) and $param["SubscribeMode"] !== null) {
            $this->SubscribeMode = $param["SubscribeMode"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("Endpoints",$param) and $param["Endpoints"] !== null) {
            $this->Endpoints = [];
            foreach ($param["Endpoints"] as $key => $value){
                $obj = new EndpointItem();
                $obj->deserialize($value);
                array_push($this->Endpoints, $obj);
            }
        }

        if (array_key_exists("KafkaConfig",$param) and $param["KafkaConfig"] !== null) {
            $this->KafkaConfig = new SubscribeKafkaConfig();
            $this->KafkaConfig->deserialize($param["KafkaConfig"]);
        }

        if (array_key_exists("SubscribeObjects",$param) and $param["SubscribeObjects"] !== null) {
            $this->SubscribeObjects = [];
            foreach ($param["SubscribeObjects"] as $key => $value){
                $obj = new SubscribeObject();
                $obj->deserialize($value);
                array_push($this->SubscribeObjects, $obj);
            }
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("PipelineInfo",$param) and $param["PipelineInfo"] !== null) {
            $this->PipelineInfo = [];
            foreach ($param["PipelineInfo"] as $key => $value){
                $obj = new PipelineInfo();
                $obj->deserialize($value);
                array_push($this->PipelineInfo, $obj);
            }
        }

        if (array_key_exists("ExtraAttr",$param) and $param["ExtraAttr"] !== null) {
            $this->ExtraAttr = [];
            foreach ($param["ExtraAttr"] as $key => $value){
                $obj = new KeyValuePairOption();
                $obj->deserialize($value);
                array_push($this->ExtraAttr, $obj);
            }
        }

        if (array_key_exists("ConsumerVpcId",$param) and $param["ConsumerVpcId"] !== null) {
            $this->ConsumerVpcId = $param["ConsumerVpcId"];
        }

        if (array_key_exists("ConsumerSubnetId",$param) and $param["ConsumerSubnetId"] !== null) {
            $this->ConsumerSubnetId = $param["ConsumerSubnetId"];
        }
    }
}
