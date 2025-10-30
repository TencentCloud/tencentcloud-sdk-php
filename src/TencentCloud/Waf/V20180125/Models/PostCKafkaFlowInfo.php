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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CKafka投递流
 *
 * @method integer getFlowId() 获取投递流唯一ID
 * @method void setFlowId(integer $FlowId) 设置投递流唯一ID
 * @method integer getLogType() 获取1-访问日志 2-攻击日志
 * @method void setLogType(integer $LogType) 设置1-访问日志 2-攻击日志
 * @method integer getStatus() 获取状态 0-为关闭 1-为启用
 * @method void setStatus(integer $Status) 设置状态 0-为关闭 1-为启用
 * @method string getCKafkaRegion() 获取CKafka所在区域
 * @method void setCKafkaRegion(string $CKafkaRegion) 设置CKafka所在区域
 * @method string getCKafkaID() 获取CKafka实例ID
 * @method void setCKafkaID(string $CKafkaID) 设置CKafka实例ID
 * @method string getBrokers() 获取ckafka地址信息
 * @method void setBrokers(string $Brokers) 设置ckafka地址信息
 * @method string getVersion() 获取ckafka版本号
 * @method void setVersion(string $Version) 设置ckafka版本号
 * @method string getTopic() 获取主题名称
 * @method void setTopic(string $Topic) 设置主题名称
 * @method string getCompression() 获取压缩算法，支持gzip 和 lz4
 * @method void setCompression(string $Compression) 设置压缩算法，支持gzip 和 lz4
 * @method integer getSASLEnable() 获取是否支持SASL,0-关闭，1-开启
 * @method void setSASLEnable(integer $SASLEnable) 设置是否支持SASL,0-关闭，1-开启
 * @method string getSASLUser() 获取SASL用户名
 * @method void setSASLUser(string $SASLUser) 设置SASL用户名
 * @method string getSASLPassword() 获取SALS密码
 * @method void setSASLPassword(string $SASLPassword) 设置SALS密码
 * @method string getContent() 获取描述信息
 * @method void setContent(string $Content) 设置描述信息
 * @method integer getVipType() 获取1-外网TGW，2-支撑环境，默认为支撑环境
 * @method void setVipType(integer $VipType) 设置1-外网TGW，2-支撑环境，默认为支撑环境
 * @method FieldWriteConfig getWriteConfig() 获取配置状态
 * @method void setWriteConfig(FieldWriteConfig $WriteConfig) 设置配置状态
 */
class PostCKafkaFlowInfo extends AbstractModel
{
    /**
     * @var integer 投递流唯一ID
     */
    public $FlowId;

    /**
     * @var integer 1-访问日志 2-攻击日志
     */
    public $LogType;

    /**
     * @var integer 状态 0-为关闭 1-为启用
     */
    public $Status;

    /**
     * @var string CKafka所在区域
     */
    public $CKafkaRegion;

    /**
     * @var string CKafka实例ID
     */
    public $CKafkaID;

    /**
     * @var string ckafka地址信息
     */
    public $Brokers;

    /**
     * @var string ckafka版本号
     */
    public $Version;

    /**
     * @var string 主题名称
     */
    public $Topic;

    /**
     * @var string 压缩算法，支持gzip 和 lz4
     */
    public $Compression;

    /**
     * @var integer 是否支持SASL,0-关闭，1-开启
     */
    public $SASLEnable;

    /**
     * @var string SASL用户名
     */
    public $SASLUser;

    /**
     * @var string SALS密码
     */
    public $SASLPassword;

    /**
     * @var string 描述信息
     */
    public $Content;

    /**
     * @var integer 1-外网TGW，2-支撑环境，默认为支撑环境
     */
    public $VipType;

    /**
     * @var FieldWriteConfig 配置状态
     */
    public $WriteConfig;

    /**
     * @param integer $FlowId 投递流唯一ID
     * @param integer $LogType 1-访问日志 2-攻击日志
     * @param integer $Status 状态 0-为关闭 1-为启用
     * @param string $CKafkaRegion CKafka所在区域
     * @param string $CKafkaID CKafka实例ID
     * @param string $Brokers ckafka地址信息
     * @param string $Version ckafka版本号
     * @param string $Topic 主题名称
     * @param string $Compression 压缩算法，支持gzip 和 lz4
     * @param integer $SASLEnable 是否支持SASL,0-关闭，1-开启
     * @param string $SASLUser SASL用户名
     * @param string $SASLPassword SALS密码
     * @param string $Content 描述信息
     * @param integer $VipType 1-外网TGW，2-支撑环境，默认为支撑环境
     * @param FieldWriteConfig $WriteConfig 配置状态
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Compression",$param) and $param["Compression"] !== null) {
            $this->Compression = $param["Compression"];
        }

        if (array_key_exists("SASLEnable",$param) and $param["SASLEnable"] !== null) {
            $this->SASLEnable = $param["SASLEnable"];
        }

        if (array_key_exists("SASLUser",$param) and $param["SASLUser"] !== null) {
            $this->SASLUser = $param["SASLUser"];
        }

        if (array_key_exists("SASLPassword",$param) and $param["SASLPassword"] !== null) {
            $this->SASLPassword = $param["SASLPassword"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("VipType",$param) and $param["VipType"] !== null) {
            $this->VipType = $param["VipType"];
        }

        if (array_key_exists("WriteConfig",$param) and $param["WriteConfig"] !== null) {
            $this->WriteConfig = new FieldWriteConfig();
            $this->WriteConfig->deserialize($param["WriteConfig"]);
        }
    }
}
