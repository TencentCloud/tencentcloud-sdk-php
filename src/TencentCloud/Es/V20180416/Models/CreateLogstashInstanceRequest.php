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
 * CreateLogstashInstance请求参数结构体
 *
 * @method string getInstanceName() 获取实例名称（1-50 个英文、汉字、数字、连接线-或下划线_）
 * @method void setInstanceName(string $InstanceName) 设置实例名称（1-50 个英文、汉字、数字、连接线-或下划线_）
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getLogstashVersion() 获取实例版本（支持"6.8.13"、"7.10.1"）
 * @method void setLogstashVersion(string $LogstashVersion) 设置实例版本（支持"6.8.13"、"7.10.1"）
 * @method string getVpcId() 获取私有网络ID
 * @method void setVpcId(string $VpcId) 设置私有网络ID
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method integer getNodeNum() 获取节点数量（2-50个）
 * @method void setNodeNum(integer $NodeNum) 设置节点数量（2-50个）
 * @method string getChargeType() 获取计费类型<li>PREPAID：预付费，即包年包月</li><li>POSTPAID_BY_HOUR：按小时后付费</li>默认值POSTPAID_BY_HOUR
 * @method void setChargeType(string $ChargeType) 设置计费类型<li>PREPAID：预付费，即包年包月</li><li>POSTPAID_BY_HOUR：按小时后付费</li>默认值POSTPAID_BY_HOUR
 * @method integer getChargePeriod() 获取包年包月购买时长（单位由参数TimeUnit决定）
 * @method void setChargePeriod(integer $ChargePeriod) 设置包年包月购买时长（单位由参数TimeUnit决定）
 * @method string getTimeUnit() 获取计费时长单位（ChargeType为PREPAID时需要设置，默认值为“m”，表示月，当前只支持“m”）
 * @method void setTimeUnit(string $TimeUnit) 设置计费时长单位（ChargeType为PREPAID时需要设置，默认值为“m”，表示月，当前只支持“m”）
 * @method integer getAutoVoucher() 获取是否自动使用代金券<li>0：不自动使用</li><li>1：自动使用</li>默认值0
 * @method void setAutoVoucher(integer $AutoVoucher) 设置是否自动使用代金券<li>0：不自动使用</li><li>1：自动使用</li>默认值0
 * @method array getVoucherIds() 获取代金券ID列表（目前仅支持指定一张代金券）
 * @method void setVoucherIds(array $VoucherIds) 设置代金券ID列表（目前仅支持指定一张代金券）
 * @method string getRenewFlag() 获取自动续费标识<li>RENEW_FLAG_AUTO：自动续费</li><li>RENEW_FLAG_MANUAL：不自动续费，用户手动续费</li>ChargeType为PREPAID时需要设置，如不传递该参数，普通用户默认不自动续费，SVIP用户自动续费
 * @method void setRenewFlag(string $RenewFlag) 设置自动续费标识<li>RENEW_FLAG_AUTO：自动续费</li><li>RENEW_FLAG_MANUAL：不自动续费，用户手动续费</li>ChargeType为PREPAID时需要设置，如不传递该参数，普通用户默认不自动续费，SVIP用户自动续费
 * @method string getNodeType() 获取节点规格<li>LOGSTASH.S1.SMALL2：1核2G</li><li>LOGSTASH.S1.MEDIUM4：2核4G</li><li>LOGSTASH.S1.MEDIUM8：2核8G</li><li>LOGSTASH.S1.LARGE16：4核16G</li><li>LOGSTASH.S1.2XLARGE32：8核32G</li><li>LOGSTASH.S1.4XLARGE32：16核32G</li><li>LOGSTASH.S1.4XLARGE64：16核64G</li>
 * @method void setNodeType(string $NodeType) 设置节点规格<li>LOGSTASH.S1.SMALL2：1核2G</li><li>LOGSTASH.S1.MEDIUM4：2核4G</li><li>LOGSTASH.S1.MEDIUM8：2核8G</li><li>LOGSTASH.S1.LARGE16：4核16G</li><li>LOGSTASH.S1.2XLARGE32：8核32G</li><li>LOGSTASH.S1.4XLARGE32：16核32G</li><li>LOGSTASH.S1.4XLARGE64：16核64G</li>
 * @method string getDiskType() 获取节点磁盘类型<li>CLOUD_SSD：SSD云硬盘</li><li>CLOUD_PREMIUM：高硬能云硬盘</li>默认值CLOUD_SSD
 * @method void setDiskType(string $DiskType) 设置节点磁盘类型<li>CLOUD_SSD：SSD云硬盘</li><li>CLOUD_PREMIUM：高硬能云硬盘</li>默认值CLOUD_SSD
 * @method integer getDiskSize() 获取节点磁盘容量（单位GB）
 * @method void setDiskSize(integer $DiskSize) 设置节点磁盘容量（单位GB）
 * @method string getLicenseType() 获取License类型<li>oss：开源版</li><li>xpack：xpack版</li>默认值xpack
 * @method void setLicenseType(string $LicenseType) 设置License类型<li>oss：开源版</li><li>xpack：xpack版</li>默认值xpack
 * @method array getTagList() 获取标签信息列表
 * @method void setTagList(array $TagList) 设置标签信息列表
 * @method OperationDuration getOperationDuration() 获取可维护时间段
 * @method void setOperationDuration(OperationDuration $OperationDuration) 设置可维护时间段
 */
class CreateLogstashInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例名称（1-50 个英文、汉字、数字、连接线-或下划线_）
     */
    public $InstanceName;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 实例版本（支持"6.8.13"、"7.10.1"）
     */
    public $LogstashVersion;

    /**
     * @var string 私有网络ID
     */
    public $VpcId;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var integer 节点数量（2-50个）
     */
    public $NodeNum;

    /**
     * @var string 计费类型<li>PREPAID：预付费，即包年包月</li><li>POSTPAID_BY_HOUR：按小时后付费</li>默认值POSTPAID_BY_HOUR
     */
    public $ChargeType;

    /**
     * @var integer 包年包月购买时长（单位由参数TimeUnit决定）
     */
    public $ChargePeriod;

    /**
     * @var string 计费时长单位（ChargeType为PREPAID时需要设置，默认值为“m”，表示月，当前只支持“m”）
     */
    public $TimeUnit;

    /**
     * @var integer 是否自动使用代金券<li>0：不自动使用</li><li>1：自动使用</li>默认值0
     */
    public $AutoVoucher;

    /**
     * @var array 代金券ID列表（目前仅支持指定一张代金券）
     */
    public $VoucherIds;

    /**
     * @var string 自动续费标识<li>RENEW_FLAG_AUTO：自动续费</li><li>RENEW_FLAG_MANUAL：不自动续费，用户手动续费</li>ChargeType为PREPAID时需要设置，如不传递该参数，普通用户默认不自动续费，SVIP用户自动续费
     */
    public $RenewFlag;

    /**
     * @var string 节点规格<li>LOGSTASH.S1.SMALL2：1核2G</li><li>LOGSTASH.S1.MEDIUM4：2核4G</li><li>LOGSTASH.S1.MEDIUM8：2核8G</li><li>LOGSTASH.S1.LARGE16：4核16G</li><li>LOGSTASH.S1.2XLARGE32：8核32G</li><li>LOGSTASH.S1.4XLARGE32：16核32G</li><li>LOGSTASH.S1.4XLARGE64：16核64G</li>
     */
    public $NodeType;

    /**
     * @var string 节点磁盘类型<li>CLOUD_SSD：SSD云硬盘</li><li>CLOUD_PREMIUM：高硬能云硬盘</li>默认值CLOUD_SSD
     */
    public $DiskType;

    /**
     * @var integer 节点磁盘容量（单位GB）
     */
    public $DiskSize;

    /**
     * @var string License类型<li>oss：开源版</li><li>xpack：xpack版</li>默认值xpack
     */
    public $LicenseType;

    /**
     * @var array 标签信息列表
     */
    public $TagList;

    /**
     * @var OperationDuration 可维护时间段
     */
    public $OperationDuration;

    /**
     * @param string $InstanceName 实例名称（1-50 个英文、汉字、数字、连接线-或下划线_）
     * @param string $Zone 可用区
     * @param string $LogstashVersion 实例版本（支持"6.8.13"、"7.10.1"）
     * @param string $VpcId 私有网络ID
     * @param string $SubnetId 子网ID
     * @param integer $NodeNum 节点数量（2-50个）
     * @param string $ChargeType 计费类型<li>PREPAID：预付费，即包年包月</li><li>POSTPAID_BY_HOUR：按小时后付费</li>默认值POSTPAID_BY_HOUR
     * @param integer $ChargePeriod 包年包月购买时长（单位由参数TimeUnit决定）
     * @param string $TimeUnit 计费时长单位（ChargeType为PREPAID时需要设置，默认值为“m”，表示月，当前只支持“m”）
     * @param integer $AutoVoucher 是否自动使用代金券<li>0：不自动使用</li><li>1：自动使用</li>默认值0
     * @param array $VoucherIds 代金券ID列表（目前仅支持指定一张代金券）
     * @param string $RenewFlag 自动续费标识<li>RENEW_FLAG_AUTO：自动续费</li><li>RENEW_FLAG_MANUAL：不自动续费，用户手动续费</li>ChargeType为PREPAID时需要设置，如不传递该参数，普通用户默认不自动续费，SVIP用户自动续费
     * @param string $NodeType 节点规格<li>LOGSTASH.S1.SMALL2：1核2G</li><li>LOGSTASH.S1.MEDIUM4：2核4G</li><li>LOGSTASH.S1.MEDIUM8：2核8G</li><li>LOGSTASH.S1.LARGE16：4核16G</li><li>LOGSTASH.S1.2XLARGE32：8核32G</li><li>LOGSTASH.S1.4XLARGE32：16核32G</li><li>LOGSTASH.S1.4XLARGE64：16核64G</li>
     * @param string $DiskType 节点磁盘类型<li>CLOUD_SSD：SSD云硬盘</li><li>CLOUD_PREMIUM：高硬能云硬盘</li>默认值CLOUD_SSD
     * @param integer $DiskSize 节点磁盘容量（单位GB）
     * @param string $LicenseType License类型<li>oss：开源版</li><li>xpack：xpack版</li>默认值xpack
     * @param array $TagList 标签信息列表
     * @param OperationDuration $OperationDuration 可维护时间段
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("LogstashVersion",$param) and $param["LogstashVersion"] !== null) {
            $this->LogstashVersion = $param["LogstashVersion"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("ChargePeriod",$param) and $param["ChargePeriod"] !== null) {
            $this->ChargePeriod = $param["ChargePeriod"];
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

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("OperationDuration",$param) and $param["OperationDuration"] !== null) {
            $this->OperationDuration = new OperationDuration();
            $this->OperationDuration->deserialize($param["OperationDuration"]);
        }
    }
}
