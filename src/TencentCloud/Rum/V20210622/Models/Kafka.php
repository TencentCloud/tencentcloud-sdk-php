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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 旁路kafka配置
 *
 * @method integer getEnableKafka() 获取1：开启
0：关闭
 * @method void setEnableKafka(integer $EnableKafka) 设置1：开启
0：关闭
 * @method string getKafkaHost() 获取host地址
 * @method void setKafkaHost(string $KafkaHost) 设置host地址
 * @method string getKafkaTopic() 获取topic
 * @method void setKafkaTopic(string $KafkaTopic) 设置topic
 * @method string getKafkaVersion() 获取版本
 * @method void setKafkaVersion(string $KafkaVersion) 设置版本
 * @method string getSaslUserName() 获取username
 * @method void setSaslUserName(string $SaslUserName) 设置username
 * @method string getSaslPassword() 获取password
 * @method void setSaslPassword(string $SaslPassword) 设置password
 * @method string getSaslMechanism() 获取ssl
 * @method void setSaslMechanism(string $SaslMechanism) 设置ssl
 * @method integer getSinkId() 获取默认算子id为0新增算子
一旦算子新增成功会返回正确的算子id值
 * @method void setSinkId(integer $SinkId) 设置默认算子id为0新增算子
一旦算子新增成功会返回正确的算子id值
 */
class Kafka extends AbstractModel
{
    /**
     * @var integer 1：开启
0：关闭
     */
    public $EnableKafka;

    /**
     * @var string host地址
     */
    public $KafkaHost;

    /**
     * @var string topic
     */
    public $KafkaTopic;

    /**
     * @var string 版本
     */
    public $KafkaVersion;

    /**
     * @var string username
     */
    public $SaslUserName;

    /**
     * @var string password
     */
    public $SaslPassword;

    /**
     * @var string ssl
     */
    public $SaslMechanism;

    /**
     * @var integer 默认算子id为0新增算子
一旦算子新增成功会返回正确的算子id值
     */
    public $SinkId;

    /**
     * @param integer $EnableKafka 1：开启
0：关闭
     * @param string $KafkaHost host地址
     * @param string $KafkaTopic topic
     * @param string $KafkaVersion 版本
     * @param string $SaslUserName username
     * @param string $SaslPassword password
     * @param string $SaslMechanism ssl
     * @param integer $SinkId 默认算子id为0新增算子
一旦算子新增成功会返回正确的算子id值
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
        if (array_key_exists("EnableKafka",$param) and $param["EnableKafka"] !== null) {
            $this->EnableKafka = $param["EnableKafka"];
        }

        if (array_key_exists("KafkaHost",$param) and $param["KafkaHost"] !== null) {
            $this->KafkaHost = $param["KafkaHost"];
        }

        if (array_key_exists("KafkaTopic",$param) and $param["KafkaTopic"] !== null) {
            $this->KafkaTopic = $param["KafkaTopic"];
        }

        if (array_key_exists("KafkaVersion",$param) and $param["KafkaVersion"] !== null) {
            $this->KafkaVersion = $param["KafkaVersion"];
        }

        if (array_key_exists("SaslUserName",$param) and $param["SaslUserName"] !== null) {
            $this->SaslUserName = $param["SaslUserName"];
        }

        if (array_key_exists("SaslPassword",$param) and $param["SaslPassword"] !== null) {
            $this->SaslPassword = $param["SaslPassword"];
        }

        if (array_key_exists("SaslMechanism",$param) and $param["SaslMechanism"] !== null) {
            $this->SaslMechanism = $param["SaslMechanism"];
        }

        if (array_key_exists("SinkId",$param) and $param["SinkId"] !== null) {
            $this->SinkId = $param["SinkId"];
        }
    }
}
