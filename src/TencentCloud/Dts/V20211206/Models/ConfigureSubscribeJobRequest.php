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
 * @method string getSubscribeId() 获取<p>数据订阅实例的 ID，可通过<a href="https://cloud.tencent.com/document/product/571/82103">DescribeSyncJobs</a>接口获取。</p>
 * @method void setSubscribeId(string $SubscribeId) 设置<p>数据订阅实例的 ID，可通过<a href="https://cloud.tencent.com/document/product/571/82103">DescribeSyncJobs</a>接口获取。</p>
 * @method string getSubscribeMode() 获取<p>数据订阅的类型，当 DatabaseType 不为 mongodb 时，枚举值为：all-全实例更新；dml-数据更新；ddl-结构更新；dmlAndDdl-数据更新+结构更新。当 DatabaseType 为 mongodb 时，枚举值为 all-全实例更新；database-订阅单库；collection-订阅单集合</p>
 * @method void setSubscribeMode(string $SubscribeMode) 设置<p>数据订阅的类型，当 DatabaseType 不为 mongodb 时，枚举值为：all-全实例更新；dml-数据更新；ddl-结构更新；dmlAndDdl-数据更新+结构更新。当 DatabaseType 为 mongodb 时，枚举值为 all-全实例更新；database-订阅单库；collection-订阅单集合</p>
 * @method string getAccessType() 获取<p>源数据库接入类型，如：extranet(公网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、cdb(云数据库)、cvm(云服务器自建)、intranet(自研上云)、vpc(私有网络vpc)。注意具体可选值依赖当前链路支持能力</p>
 * @method void setAccessType(string $AccessType) 设置<p>源数据库接入类型，如：extranet(公网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、cdb(云数据库)、cvm(云服务器自建)、intranet(自研上云)、vpc(私有网络vpc)。注意具体可选值依赖当前链路支持能力</p>
 * @method array getEndpoints() 获取<p>数据库节点信息</p>
 * @method void setEndpoints(array $Endpoints) 设置<p>数据库节点信息</p>
 * @method SubscribeKafkaConfig getKafkaConfig() 获取<p>Kafka配置</p>
 * @method void setKafkaConfig(SubscribeKafkaConfig $KafkaConfig) 设置<p>Kafka配置</p>
 * @method array getSubscribeObjects() 获取<p>订阅的数据库表信息，当 SubscribeMode 不为 all和ddl 时，SubscribeObjects 为必选参数</p>
 * @method void setSubscribeObjects(array $SubscribeObjects) 设置<p>订阅的数据库表信息，当 SubscribeMode 不为 all和ddl 时，SubscribeObjects 为必选参数</p>
 * @method string getProtocol() 获取<p>订阅数据格式，如：protobuf、json、avro。注意具体可选值依赖当前链路支持能力，数据格式详情参考官网的消费demo文档</p>
 * @method void setProtocol(string $Protocol) 设置<p>订阅数据格式，如：protobuf、json、avro。注意具体可选值依赖当前链路支持能力，数据格式详情参考官网的消费demo文档</p>
 * @method array getPipelineInfo() 获取<p>mongo选填参数：输出聚合设置。</p>
 * @method void setPipelineInfo(array $PipelineInfo) 设置<p>mongo选填参数：输出聚合设置。</p>
 * @method array getExtraAttr() 获取<p>为业务添加的额外信息。参数名作key，参数值作value。<br>mysql选填参数：ProcessXA-是否处理XA事务，填true处理，不填或填其他值不处理。<br>mongo选填参数：SubscribeType-订阅类型，目前只支持changeStream，不填也是默认changeStream。<br>其他业务暂没有可选参数。</p>
 * @method void setExtraAttr(array $ExtraAttr) 设置<p>为业务添加的额外信息。参数名作key，参数值作value。<br>mysql选填参数：ProcessXA-是否处理XA事务，填true处理，不填或填其他值不处理。<br>mongo选填参数：SubscribeType-订阅类型，目前只支持changeStream，不填也是默认changeStream。<br>其他业务暂没有可选参数。</p>
 * @method string getConsumerVpcId() 获取<p>vpc id</p>
 * @method void setConsumerVpcId(string $ConsumerVpcId) 设置<p>vpc id</p>
 * @method string getConsumerSubnetId() 获取<p>subnet id</p>
 * @method void setConsumerSubnetId(string $ConsumerSubnetId) 设置<p>subnet id</p>
 */
class ConfigureSubscribeJobRequest extends AbstractModel
{
    /**
     * @var string <p>数据订阅实例的 ID，可通过<a href="https://cloud.tencent.com/document/product/571/82103">DescribeSyncJobs</a>接口获取。</p>
     */
    public $SubscribeId;

    /**
     * @var string <p>数据订阅的类型，当 DatabaseType 不为 mongodb 时，枚举值为：all-全实例更新；dml-数据更新；ddl-结构更新；dmlAndDdl-数据更新+结构更新。当 DatabaseType 为 mongodb 时，枚举值为 all-全实例更新；database-订阅单库；collection-订阅单集合</p>
     */
    public $SubscribeMode;

    /**
     * @var string <p>源数据库接入类型，如：extranet(公网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、cdb(云数据库)、cvm(云服务器自建)、intranet(自研上云)、vpc(私有网络vpc)。注意具体可选值依赖当前链路支持能力</p>
     */
    public $AccessType;

    /**
     * @var array <p>数据库节点信息</p>
     */
    public $Endpoints;

    /**
     * @var SubscribeKafkaConfig <p>Kafka配置</p>
     */
    public $KafkaConfig;

    /**
     * @var array <p>订阅的数据库表信息，当 SubscribeMode 不为 all和ddl 时，SubscribeObjects 为必选参数</p>
     */
    public $SubscribeObjects;

    /**
     * @var string <p>订阅数据格式，如：protobuf、json、avro。注意具体可选值依赖当前链路支持能力，数据格式详情参考官网的消费demo文档</p>
     */
    public $Protocol;

    /**
     * @var array <p>mongo选填参数：输出聚合设置。</p>
     */
    public $PipelineInfo;

    /**
     * @var array <p>为业务添加的额外信息。参数名作key，参数值作value。<br>mysql选填参数：ProcessXA-是否处理XA事务，填true处理，不填或填其他值不处理。<br>mongo选填参数：SubscribeType-订阅类型，目前只支持changeStream，不填也是默认changeStream。<br>其他业务暂没有可选参数。</p>
     */
    public $ExtraAttr;

    /**
     * @var string <p>vpc id</p>
     */
    public $ConsumerVpcId;

    /**
     * @var string <p>subnet id</p>
     */
    public $ConsumerSubnetId;

    /**
     * @param string $SubscribeId <p>数据订阅实例的 ID，可通过<a href="https://cloud.tencent.com/document/product/571/82103">DescribeSyncJobs</a>接口获取。</p>
     * @param string $SubscribeMode <p>数据订阅的类型，当 DatabaseType 不为 mongodb 时，枚举值为：all-全实例更新；dml-数据更新；ddl-结构更新；dmlAndDdl-数据更新+结构更新。当 DatabaseType 为 mongodb 时，枚举值为 all-全实例更新；database-订阅单库；collection-订阅单集合</p>
     * @param string $AccessType <p>源数据库接入类型，如：extranet(公网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、cdb(云数据库)、cvm(云服务器自建)、intranet(自研上云)、vpc(私有网络vpc)。注意具体可选值依赖当前链路支持能力</p>
     * @param array $Endpoints <p>数据库节点信息</p>
     * @param SubscribeKafkaConfig $KafkaConfig <p>Kafka配置</p>
     * @param array $SubscribeObjects <p>订阅的数据库表信息，当 SubscribeMode 不为 all和ddl 时，SubscribeObjects 为必选参数</p>
     * @param string $Protocol <p>订阅数据格式，如：protobuf、json、avro。注意具体可选值依赖当前链路支持能力，数据格式详情参考官网的消费demo文档</p>
     * @param array $PipelineInfo <p>mongo选填参数：输出聚合设置。</p>
     * @param array $ExtraAttr <p>为业务添加的额外信息。参数名作key，参数值作value。<br>mysql选填参数：ProcessXA-是否处理XA事务，填true处理，不填或填其他值不处理。<br>mongo选填参数：SubscribeType-订阅类型，目前只支持changeStream，不填也是默认changeStream。<br>其他业务暂没有可选参数。</p>
     * @param string $ConsumerVpcId <p>vpc id</p>
     * @param string $ConsumerSubnetId <p>subnet id</p>
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
