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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method integer getNodeNum() 获取节点数量
 * @method void setNodeNum(integer $NodeNum) 设置节点数量
 * @method string getEsVersion() 获取实例版本,支持"5.6.4"、"6.4.3"
 * @method void setEsVersion(string $EsVersion) 设置实例版本,支持"5.6.4"、"6.4.3"
 * @method string getNodeType() 获取节点规格： 
ES.S1.SMALL2: 1核2G
ES.S1.MEDIUM4: 2核4G
ES.S1.MEDIUM8: 2核8G
ES.S1.LARGE16: 4核16G
ES.S1.2XLARGE32: 8核32G
ES.S1.4XLARGE64: 16核64G
 * @method void setNodeType(string $NodeType) 设置节点规格： 
ES.S1.SMALL2: 1核2G
ES.S1.MEDIUM4: 2核4G
ES.S1.MEDIUM8: 2核8G
ES.S1.LARGE16: 4核16G
ES.S1.2XLARGE32: 8核32G
ES.S1.4XLARGE64: 16核64G
 * @method integer getDiskSize() 获取节点存储容量，单位GB
 * @method void setDiskSize(integer $DiskSize) 设置节点存储容量，单位GB
 * @method string getVpcId() 获取私有网络ID
 * @method void setVpcId(string $VpcId) 设置私有网络ID
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method string getPassword() 获取访问密码，密码需8到16位，至少包括两项（[a-z,A-Z],[0-9]和[()`~!@#$%^&*-+=_|{}:;' <>,.?/]的特殊符号
 * @method void setPassword(string $Password) 设置访问密码，密码需8到16位，至少包括两项（[a-z,A-Z],[0-9]和[()`~!@#$%^&*-+=_|{}:;' <>,.?/]的特殊符号
 * @method string getInstanceName() 获取实例名称，1-50 个英文、汉字、数字、连接线-或下划线_
 * @method void setInstanceName(string $InstanceName) 设置实例名称，1-50 个英文、汉字、数字、连接线-或下划线_
 * @method string getChargeType() 获取计费类型: 
PREPAID：预付费，即包年包月 
POSTPAID_BY_HOUR：按小时后付费，默认值
 * @method void setChargeType(string $ChargeType) 设置计费类型: 
PREPAID：预付费，即包年包月 
POSTPAID_BY_HOUR：按小时后付费，默认值
 * @method integer getChargePeriod() 获取包年包月购买时长，单位由TimeUint决定，默认为月
 * @method void setChargePeriod(integer $ChargePeriod) 设置包年包月购买时长，单位由TimeUint决定，默认为月
 * @method string getRenewFlag() 获取自动续费标识，取值范围： 
RENEW_FLAG_AUTO：自动续费
RENEW_FLAG_MANUAL：不自动续费，用户手动续费
如不传递该参数，普通用于默认不自动续费，SVIP用户自动续费
 * @method void setRenewFlag(string $RenewFlag) 设置自动续费标识，取值范围： 
RENEW_FLAG_AUTO：自动续费
RENEW_FLAG_MANUAL：不自动续费，用户手动续费
如不传递该参数，普通用于默认不自动续费，SVIP用户自动续费
 * @method string getDiskType() 获取节点存储类型,取值范围:    
CLOUD_PREMIUM: 高硬能云硬盘  
CLOUD_SSD: SSD云硬盘
 * @method void setDiskType(string $DiskType) 设置节点存储类型,取值范围:    
CLOUD_PREMIUM: 高硬能云硬盘  
CLOUD_SSD: SSD云硬盘
 * @method string getTimeUnit() 获取计费时长单位，当前只支持“m”，表示月
 * @method void setTimeUnit(string $TimeUnit) 设置计费时长单位，当前只支持“m”，表示月
 * @method integer getAutoVoucher() 获取是否自动使用代金券，1是，0否，默认不使用
 * @method void setAutoVoucher(integer $AutoVoucher) 设置是否自动使用代金券，1是，0否，默认不使用
 * @method array getVoucherIds() 获取代金券ID列表，目前仅支持指定一张代金券
 * @method void setVoucherIds(array $VoucherIds) 设置代金券ID列表，目前仅支持指定一张代金券
 * @method boolean getEnableDedicatedMaster() 获取是否创建专用主节点
 * @method void setEnableDedicatedMaster(boolean $EnableDedicatedMaster) 设置是否创建专用主节点
 * @method integer getMasterNodeNum() 获取专用主节点个数
 * @method void setMasterNodeNum(integer $MasterNodeNum) 设置专用主节点个数
 * @method string getMasterNodeType() 获取专用主节点类型，与NodeType支持的规格相同
 * @method void setMasterNodeType(string $MasterNodeType) 设置专用主节点类型，与NodeType支持的规格相同
 * @method integer getMasterNodeDiskSize() 获取专用主节点磁盘大小，单位GB（系统默认配置50GB，暂不支持自定义）
 * @method void setMasterNodeDiskSize(integer $MasterNodeDiskSize) 设置专用主节点磁盘大小，单位GB（系统默认配置50GB，暂不支持自定义）
 * @method string getClusterNameInConf() 获取配置文件中的ClusterName（系统默认配置为实例ID，暂不支持自定义）
 * @method void setClusterNameInConf(string $ClusterNameInConf) 设置配置文件中的ClusterName（系统默认配置为实例ID，暂不支持自定义）
 */

/**
 *CreateInstance请求参数结构体
 */
class CreateInstanceRequest extends AbstractModel
{
    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var integer 节点数量
     */
    public $NodeNum;

    /**
     * @var string 实例版本,支持"5.6.4"、"6.4.3"
     */
    public $EsVersion;

    /**
     * @var string 节点规格： 
ES.S1.SMALL2: 1核2G
ES.S1.MEDIUM4: 2核4G
ES.S1.MEDIUM8: 2核8G
ES.S1.LARGE16: 4核16G
ES.S1.2XLARGE32: 8核32G
ES.S1.4XLARGE64: 16核64G
     */
    public $NodeType;

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
     * @var string 实例名称，1-50 个英文、汉字、数字、连接线-或下划线_
     */
    public $InstanceName;

    /**
     * @var string 计费类型: 
PREPAID：预付费，即包年包月 
POSTPAID_BY_HOUR：按小时后付费，默认值
     */
    public $ChargeType;

    /**
     * @var integer 包年包月购买时长，单位由TimeUint决定，默认为月
     */
    public $ChargePeriod;

    /**
     * @var string 自动续费标识，取值范围： 
RENEW_FLAG_AUTO：自动续费
RENEW_FLAG_MANUAL：不自动续费，用户手动续费
如不传递该参数，普通用于默认不自动续费，SVIP用户自动续费
     */
    public $RenewFlag;

    /**
     * @var string 节点存储类型,取值范围:    
CLOUD_PREMIUM: 高硬能云硬盘  
CLOUD_SSD: SSD云硬盘
     */
    public $DiskType;

    /**
     * @var string 计费时长单位，当前只支持“m”，表示月
     */
    public $TimeUnit;

    /**
     * @var integer 是否自动使用代金券，1是，0否，默认不使用
     */
    public $AutoVoucher;

    /**
     * @var array 代金券ID列表，目前仅支持指定一张代金券
     */
    public $VoucherIds;

    /**
     * @var boolean 是否创建专用主节点
     */
    public $EnableDedicatedMaster;

    /**
     * @var integer 专用主节点个数
     */
    public $MasterNodeNum;

    /**
     * @var string 专用主节点类型，与NodeType支持的规格相同
     */
    public $MasterNodeType;

    /**
     * @var integer 专用主节点磁盘大小，单位GB（系统默认配置50GB，暂不支持自定义）
     */
    public $MasterNodeDiskSize;

    /**
     * @var string 配置文件中的ClusterName（系统默认配置为实例ID，暂不支持自定义）
     */
    public $ClusterNameInConf;
    /**
     * @param string $Zone 可用区
     * @param integer $NodeNum 节点数量
     * @param string $EsVersion 实例版本,支持"5.6.4"、"6.4.3"
     * @param string $NodeType 节点规格： 
ES.S1.SMALL2: 1核2G
ES.S1.MEDIUM4: 2核4G
ES.S1.MEDIUM8: 2核8G
ES.S1.LARGE16: 4核16G
ES.S1.2XLARGE32: 8核32G
ES.S1.4XLARGE64: 16核64G
     * @param integer $DiskSize 节点存储容量，单位GB
     * @param string $VpcId 私有网络ID
     * @param string $SubnetId 子网ID
     * @param string $Password 访问密码，密码需8到16位，至少包括两项（[a-z,A-Z],[0-9]和[()`~!@#$%^&*-+=_|{}:;' <>,.?/]的特殊符号
     * @param string $InstanceName 实例名称，1-50 个英文、汉字、数字、连接线-或下划线_
     * @param string $ChargeType 计费类型: 
PREPAID：预付费，即包年包月 
POSTPAID_BY_HOUR：按小时后付费，默认值
     * @param integer $ChargePeriod 包年包月购买时长，单位由TimeUint决定，默认为月
     * @param string $RenewFlag 自动续费标识，取值范围： 
RENEW_FLAG_AUTO：自动续费
RENEW_FLAG_MANUAL：不自动续费，用户手动续费
如不传递该参数，普通用于默认不自动续费，SVIP用户自动续费
     * @param string $DiskType 节点存储类型,取值范围:    
CLOUD_PREMIUM: 高硬能云硬盘  
CLOUD_SSD: SSD云硬盘
     * @param string $TimeUnit 计费时长单位，当前只支持“m”，表示月
     * @param integer $AutoVoucher 是否自动使用代金券，1是，0否，默认不使用
     * @param array $VoucherIds 代金券ID列表，目前仅支持指定一张代金券
     * @param boolean $EnableDedicatedMaster 是否创建专用主节点
     * @param integer $MasterNodeNum 专用主节点个数
     * @param string $MasterNodeType 专用主节点类型，与NodeType支持的规格相同
     * @param integer $MasterNodeDiskSize 专用主节点磁盘大小，单位GB（系统默认配置50GB，暂不支持自定义）
     * @param string $ClusterNameInConf 配置文件中的ClusterName（系统默认配置为实例ID，暂不支持自定义）
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("EsVersion",$param) and $param["EsVersion"] !== null) {
            $this->EsVersion = $param["EsVersion"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
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

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }

        if (array_key_exists("EnableDedicatedMaster",$param) and $param["EnableDedicatedMaster"] !== null) {
            $this->EnableDedicatedMaster = $param["EnableDedicatedMaster"];
        }

        if (array_key_exists("MasterNodeNum",$param) and $param["MasterNodeNum"] !== null) {
            $this->MasterNodeNum = $param["MasterNodeNum"];
        }

        if (array_key_exists("MasterNodeType",$param) and $param["MasterNodeType"] !== null) {
            $this->MasterNodeType = $param["MasterNodeType"];
        }

        if (array_key_exists("MasterNodeDiskSize",$param) and $param["MasterNodeDiskSize"] !== null) {
            $this->MasterNodeDiskSize = $param["MasterNodeDiskSize"];
        }

        if (array_key_exists("ClusterNameInConf",$param) and $param["ClusterNameInConf"] !== null) {
            $this->ClusterNameInConf = $param["ClusterNameInConf"];
        }
    }
}
