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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLogKafkaState请求参数结构体
 *
 * @method string getKafkaEnvName() 获取实例名称 如 主机安全测试环境
 * @method void setKafkaEnvName(string $KafkaEnvName) 设置实例名称 如 主机安全测试环境
 * @method string getKafkaId() 获取实例ID
 * @method void setKafkaId(string $KafkaId) 设置实例ID
 * @method integer getAccessType() 获取接入方式，1公网域名接入，2支撑环境接入
 * @method void setAccessType(integer $AccessType) 设置接入方式，1公网域名接入，2支撑环境接入
 * @method string getAccessAddr() 获取接入地址
 * @method void setAccessAddr(string $AccessAddr) 设置接入地址
 * @method string getUsername() 获取用户名
 * @method void setUsername(string $Username) 设置用户名
 * @method string getZone() 获取区域
 * @method void setZone(string $Zone) 设置区域
 * @method string getAz() 获取可用区
 * @method void setAz(string $Az) 设置可用区
 * @method string getVpcId() 获取所属网络
 * @method void setVpcId(string $VpcId) 设置所属网络
 * @method string getSubnetId() 获取所在子网
 * @method void setSubnetId(string $SubnetId) 设置所在子网
 * @method integer getDeliverStatus() 获取投递状态，1：健康，2：告警，3：异常
 * @method void setDeliverStatus(integer $DeliverStatus) 设置投递状态，1：健康，2：告警，3：异常
 * @method string getInsVersion() 获取kafka版本
 * @method void setInsVersion(string $InsVersion) 设置kafka版本
 * @method integer getBandWidth() 获取峰值带宽
 * @method void setBandWidth(integer $BandWidth) 设置峰值带宽
 * @method integer getDiskSize() 获取磁盘容量
 * @method void setDiskSize(integer $DiskSize) 设置磁盘容量
 */
class ModifyLogKafkaStateRequest extends AbstractModel
{
    /**
     * @var string 实例名称 如 主机安全测试环境
     */
    public $KafkaEnvName;

    /**
     * @var string 实例ID
     */
    public $KafkaId;

    /**
     * @var integer 接入方式，1公网域名接入，2支撑环境接入
     */
    public $AccessType;

    /**
     * @var string 接入地址
     */
    public $AccessAddr;

    /**
     * @var string 用户名
     */
    public $Username;

    /**
     * @var string 区域
     */
    public $Zone;

    /**
     * @var string 可用区
     */
    public $Az;

    /**
     * @var string 所属网络
     */
    public $VpcId;

    /**
     * @var string 所在子网
     */
    public $SubnetId;

    /**
     * @var integer 投递状态，1：健康，2：告警，3：异常
     */
    public $DeliverStatus;

    /**
     * @var string kafka版本
     */
    public $InsVersion;

    /**
     * @var integer 峰值带宽
     */
    public $BandWidth;

    /**
     * @var integer 磁盘容量
     */
    public $DiskSize;

    /**
     * @param string $KafkaEnvName 实例名称 如 主机安全测试环境
     * @param string $KafkaId 实例ID
     * @param integer $AccessType 接入方式，1公网域名接入，2支撑环境接入
     * @param string $AccessAddr 接入地址
     * @param string $Username 用户名
     * @param string $Zone 区域
     * @param string $Az 可用区
     * @param string $VpcId 所属网络
     * @param string $SubnetId 所在子网
     * @param integer $DeliverStatus 投递状态，1：健康，2：告警，3：异常
     * @param string $InsVersion kafka版本
     * @param integer $BandWidth 峰值带宽
     * @param integer $DiskSize 磁盘容量
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
        if (array_key_exists("KafkaEnvName",$param) and $param["KafkaEnvName"] !== null) {
            $this->KafkaEnvName = $param["KafkaEnvName"];
        }

        if (array_key_exists("KafkaId",$param) and $param["KafkaId"] !== null) {
            $this->KafkaId = $param["KafkaId"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("AccessAddr",$param) and $param["AccessAddr"] !== null) {
            $this->AccessAddr = $param["AccessAddr"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Az",$param) and $param["Az"] !== null) {
            $this->Az = $param["Az"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("DeliverStatus",$param) and $param["DeliverStatus"] !== null) {
            $this->DeliverStatus = $param["DeliverStatus"];
        }

        if (array_key_exists("InsVersion",$param) and $param["InsVersion"] !== null) {
            $this->InsVersion = $param["InsVersion"];
        }

        if (array_key_exists("BandWidth",$param) and $param["BandWidth"] !== null) {
            $this->BandWidth = $param["BandWidth"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }
    }
}
