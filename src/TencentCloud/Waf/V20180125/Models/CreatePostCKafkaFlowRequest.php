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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePostCKafkaFlow请求参数结构体
 *
 * @method string getCKafkaRegion() 获取投递的CKafka所在区域
 * @method void setCKafkaRegion(string $CKafkaRegion) 设置投递的CKafka所在区域
 * @method string getCKafkaID() 获取客户的CKafka 实例ID
 * @method void setCKafkaID(string $CKafkaID) 设置客户的CKafka 实例ID
 * @method string getBrokers() 获取支撑环境是IP:PORT，外网环境是domain:PORT
 * @method void setBrokers(string $Brokers) 设置支撑环境是IP:PORT，外网环境是domain:PORT
 * @method string getCompression() 获取默认为none，支持snappy、gzip和lz4压缩，推荐snappy
 * @method void setCompression(string $Compression) 设置默认为none，支持snappy、gzip和lz4压缩，推荐snappy
 * @method integer getVipType() 获取1-外网TGW，2-支撑环境，默认为支撑环境
 * @method void setVipType(integer $VipType) 设置1-外网TGW，2-支撑环境，默认为支撑环境
 * @method integer getLogType() 获取1-访问日志，2-攻击日志，默认为访问日志
 * @method void setLogType(integer $LogType) 设置1-访问日志，2-攻击日志，默认为访问日志
 * @method string getTopic() 获取主题名称，默认不传或者传空字符串，默认值为waf_post_access_log
 * @method void setTopic(string $Topic) 设置主题名称，默认不传或者传空字符串，默认值为waf_post_access_log
 * @method string getKafkaVersion() 获取kafka集群的版本号
 * @method void setKafkaVersion(string $KafkaVersion) 设置kafka集群的版本号
 */
class CreatePostCKafkaFlowRequest extends AbstractModel
{
    /**
     * @var string 投递的CKafka所在区域
     */
    public $CKafkaRegion;

    /**
     * @var string 客户的CKafka 实例ID
     */
    public $CKafkaID;

    /**
     * @var string 支撑环境是IP:PORT，外网环境是domain:PORT
     */
    public $Brokers;

    /**
     * @var string 默认为none，支持snappy、gzip和lz4压缩，推荐snappy
     */
    public $Compression;

    /**
     * @var integer 1-外网TGW，2-支撑环境，默认为支撑环境
     */
    public $VipType;

    /**
     * @var integer 1-访问日志，2-攻击日志，默认为访问日志
     */
    public $LogType;

    /**
     * @var string 主题名称，默认不传或者传空字符串，默认值为waf_post_access_log
     */
    public $Topic;

    /**
     * @var string kafka集群的版本号
     */
    public $KafkaVersion;

    /**
     * @param string $CKafkaRegion 投递的CKafka所在区域
     * @param string $CKafkaID 客户的CKafka 实例ID
     * @param string $Brokers 支撑环境是IP:PORT，外网环境是domain:PORT
     * @param string $Compression 默认为none，支持snappy、gzip和lz4压缩，推荐snappy
     * @param integer $VipType 1-外网TGW，2-支撑环境，默认为支撑环境
     * @param integer $LogType 1-访问日志，2-攻击日志，默认为访问日志
     * @param string $Topic 主题名称，默认不传或者传空字符串，默认值为waf_post_access_log
     * @param string $KafkaVersion kafka集群的版本号
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
        if (array_key_exists("CKafkaRegion",$param) and $param["CKafkaRegion"] !== null) {
            $this->CKafkaRegion = $param["CKafkaRegion"];
        }

        if (array_key_exists("CKafkaID",$param) and $param["CKafkaID"] !== null) {
            $this->CKafkaID = $param["CKafkaID"];
        }

        if (array_key_exists("Brokers",$param) and $param["Brokers"] !== null) {
            $this->Brokers = $param["Brokers"];
        }

        if (array_key_exists("Compression",$param) and $param["Compression"] !== null) {
            $this->Compression = $param["Compression"];
        }

        if (array_key_exists("VipType",$param) and $param["VipType"] !== null) {
            $this->VipType = $param["VipType"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("KafkaVersion",$param) and $param["KafkaVersion"] !== null) {
            $this->KafkaVersion = $param["KafkaVersion"];
        }
    }
}
