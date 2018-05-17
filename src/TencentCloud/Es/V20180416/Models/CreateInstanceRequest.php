<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method integer getNodeNum() 获取节点数量
 * @method void setNodeNum(integer $NodeNum) 设置节点数量
 * @method string getEsVersion() 获取实例版本,当前只支持5.6.4
 * @method void setEsVersion(string $EsVersion) 设置实例版本,当前只支持5.6.4
 * @method string getChargeType() 获取计费类型: 
* PREPAID：预付费，即包年包月 
* POSTPAID_BY_HOUR：按小时后付费，默认值
 * @method void setChargeType(string $ChargeType) 设置计费类型: 
* PREPAID：预付费，即包年包月 
* POSTPAID_BY_HOUR：按小时后付费，默认值
 * @method integer getChargePeriod() 获取包年包月购买时长，单位：月
 * @method void setChargePeriod(integer $ChargePeriod) 设置包年包月购买时长，单位：月
 * @method string getRenewFlag() 获取自动续费标识，取值范围： 
* NOTIFY_AND_AUTO_RENEW：通知过期且自动续费，默认值 
* NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费 
* DISABLE_NOTIFY_AND_MANUAL_RENEW： 不通知过期不自动续费
 * @method void setRenewFlag(string $RenewFlag) 设置自动续费标识，取值范围： 
* NOTIFY_AND_AUTO_RENEW：通知过期且自动续费，默认值 
* NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费 
* DISABLE_NOTIFY_AND_MANUAL_RENEW： 不通知过期不自动续费
 * @method string getNodeType() 获取节点规格 
* ES.S1.SMALL2: 1核2G
* ES.S1.MEDIUM4: 2核4G
* ES.S1.MEDIUM8: 2核8G
* ES.S1.LARGE16: 4核16G
* ES.S1.2XLARGE32: 8核32G
* ES.S1.3XLARGE32: 12核32G
* ES.S1.6XLARGE32: 24核32G
 * @method void setNodeType(string $NodeType) 设置节点规格 
* ES.S1.SMALL2: 1核2G
* ES.S1.MEDIUM4: 2核4G
* ES.S1.MEDIUM8: 2核8G
* ES.S1.LARGE16: 4核16G
* ES.S1.2XLARGE32: 8核32G
* ES.S1.3XLARGE32: 12核32G
* ES.S1.6XLARGE32: 24核32G
 * @method string getDiskType() 获取节点存储类型,取值范围:  
* LOCAL_BASIC: 本地硬盘  
* LOCAL_SSD: 本地SSD硬盘，默认值  
* CLOUD_BASIC: 普通云硬盘  
* CLOUD_PREMIUM: 高硬能云硬盘  
* CLOUD_SSD: SSD云硬盘
 * @method void setDiskType(string $DiskType) 设置节点存储类型,取值范围:  
* LOCAL_BASIC: 本地硬盘  
* LOCAL_SSD: 本地SSD硬盘，默认值  
* CLOUD_BASIC: 普通云硬盘  
* CLOUD_PREMIUM: 高硬能云硬盘  
* CLOUD_SSD: SSD云硬盘
 * @method integer getDiskSize() 获取节点存储容量，单位GB
 * @method void setDiskSize(integer $DiskSize) 设置节点存储容量，单位GB
 * @method string getVpcId() 获取私有网络ID
 * @method void setVpcId(string $VpcId) 设置私有网络ID
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method string getPassword() 获取访问密码，密码需8到16位，至少包括两项（[a-z,A-Z],[0-9]和[()`~!@#$%^&*-+=_|{}:;' <>,.?/]的特殊符号
 * @method void setPassword(string $Password) 设置访问密码，密码需8到16位，至少包括两项（[a-z,A-Z],[0-9]和[()`~!@#$%^&*-+=_|{}:;' <>,.?/]的特殊符号
 */

/**
 *CreateInstance请求参数结构体
 */
class CreateInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var integer 节点数量
     */
    public $NodeNum;

    /**
     * @var string 实例版本,当前只支持5.6.4
     */
    public $EsVersion;

    /**
     * @var string 计费类型: 
* PREPAID：预付费，即包年包月 
* POSTPAID_BY_HOUR：按小时后付费，默认值
     */
    public $ChargeType;

    /**
     * @var integer 包年包月购买时长，单位：月
     */
    public $ChargePeriod;

    /**
     * @var string 自动续费标识，取值范围： 
* NOTIFY_AND_AUTO_RENEW：通知过期且自动续费，默认值 
* NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费 
* DISABLE_NOTIFY_AND_MANUAL_RENEW： 不通知过期不自动续费
     */
    public $RenewFlag;

    /**
     * @var string 节点规格 
* ES.S1.SMALL2: 1核2G
* ES.S1.MEDIUM4: 2核4G
* ES.S1.MEDIUM8: 2核8G
* ES.S1.LARGE16: 4核16G
* ES.S1.2XLARGE32: 8核32G
* ES.S1.3XLARGE32: 12核32G
* ES.S1.6XLARGE32: 24核32G
     */
    public $NodeType;

    /**
     * @var string 节点存储类型,取值范围:  
* LOCAL_BASIC: 本地硬盘  
* LOCAL_SSD: 本地SSD硬盘，默认值  
* CLOUD_BASIC: 普通云硬盘  
* CLOUD_PREMIUM: 高硬能云硬盘  
* CLOUD_SSD: SSD云硬盘
     */
    public $DiskType;

    /**
     * @var integer 节点存储容量，单位GB
     */
    public $DiskSize;

    /**
     * @var string 私有网络ID
     */
    public $VpcId;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var string 访问密码，密码需8到16位，至少包括两项（[a-z,A-Z],[0-9]和[()`~!@#$%^&*-+=_|{}:;' <>,.?/]的特殊符号
     */
    public $Password;
    /**
     * @param string $InstanceName 实例名称
     * @param string $Zone 可用区
     * @param integer $NodeNum 节点数量
     * @param string $EsVersion 实例版本,当前只支持5.6.4
     * @param string $ChargeType 计费类型: 
* PREPAID：预付费，即包年包月 
* POSTPAID_BY_HOUR：按小时后付费，默认值
     * @param integer $ChargePeriod 包年包月购买时长，单位：月
     * @param string $RenewFlag 自动续费标识，取值范围： 
* NOTIFY_AND_AUTO_RENEW：通知过期且自动续费，默认值 
* NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费 
* DISABLE_NOTIFY_AND_MANUAL_RENEW： 不通知过期不自动续费
     * @param string $NodeType 节点规格 
* ES.S1.SMALL2: 1核2G
* ES.S1.MEDIUM4: 2核4G
* ES.S1.MEDIUM8: 2核8G
* ES.S1.LARGE16: 4核16G
* ES.S1.2XLARGE32: 8核32G
* ES.S1.3XLARGE32: 12核32G
* ES.S1.6XLARGE32: 24核32G
     * @param string $DiskType 节点存储类型,取值范围:  
* LOCAL_BASIC: 本地硬盘  
* LOCAL_SSD: 本地SSD硬盘，默认值  
* CLOUD_BASIC: 普通云硬盘  
* CLOUD_PREMIUM: 高硬能云硬盘  
* CLOUD_SSD: SSD云硬盘
     * @param integer $DiskSize 节点存储容量，单位GB
     * @param string $VpcId 私有网络ID
     * @param string $SubnetId 子网ID
     * @param string $Password 访问密码，密码需8到16位，至少包括两项（[a-z,A-Z],[0-9]和[()`~!@#$%^&*-+=_|{}:;' <>,.?/]的特殊符号
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("EsVersion",$param) and $param["EsVersion"] !== null) {
            $this->EsVersion = $param["EsVersion"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("ChargePeriod",$param) and $param["ChargePeriod"] !== null) {
            $this->ChargePeriod = $param["ChargePeriod"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
