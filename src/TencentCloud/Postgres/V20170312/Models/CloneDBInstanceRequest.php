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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CloneDBInstance请求参数结构体
 *
 * @method string getDBInstanceId() 获取克隆的源实例ID。
 * @method void setDBInstanceId(string $DBInstanceId) 设置克隆的源实例ID。
 * @method string getSpecCode() 获取售卖规格ID。该参数可以通过调用DescribeProductConfig的返回值中的SpecCode字段来获取。
 * @method void setSpecCode(string $SpecCode) 设置售卖规格ID。该参数可以通过调用DescribeProductConfig的返回值中的SpecCode字段来获取。
 * @method integer getStorage() 获取实例容量大小，单位：GB。
 * @method void setStorage(integer $Storage) 设置实例容量大小，单位：GB。
 * @method integer getPeriod() 获取购买时长，单位：月。目前只支持1,2,3,4,5,6,7,8,9,10,11,12,24,36这些值，按量计费模式下该参数传1。
 * @method void setPeriod(integer $Period) 设置购买时长，单位：月。目前只支持1,2,3,4,5,6,7,8,9,10,11,12,24,36这些值，按量计费模式下该参数传1。
 * @method integer getAutoRenewFlag() 获取续费标记：0-正常续费（默认）；1-自动续费。
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置续费标记：0-正常续费（默认）；1-自动续费。
 * @method string getVpcId() 获取私有网络ID。
 * @method void setVpcId(string $VpcId) 设置私有网络ID。
 * @method string getSubnetId() 获取已配置的私有网络中的子网ID。
 * @method void setSubnetId(string $SubnetId) 设置已配置的私有网络中的子网ID。
 * @method string getName() 获取新购实例的实例名称。
 * @method void setName(string $Name) 设置新购实例的实例名称。
 * @method string getInstanceChargeType() 获取实例计费类型。目前支持：PREPAID（预付费，即包年包月），POSTPAID_BY_HOUR（后付费，即按量计费）。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置实例计费类型。目前支持：PREPAID（预付费，即包年包月），POSTPAID_BY_HOUR（后付费，即按量计费）。
 * @method array getSecurityGroupIds() 获取安全组ID。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组ID。
 * @method integer getProjectId() 获取项目ID。
 * @method void setProjectId(integer $ProjectId) 设置项目ID。
 * @method array getTagList() 获取实例需要绑定的Tag信息，默认为空。
 * @method void setTagList(array $TagList) 设置实例需要绑定的Tag信息，默认为空。
 * @method array getDBNodeSet() 获取购买多可用区实例时填写。
 * @method void setDBNodeSet(array $DBNodeSet) 设置购买多可用区实例时填写。
 * @method integer getAutoVoucher() 获取是否自动使用代金券。1（是），0（否），默认不使用。
 * @method void setAutoVoucher(integer $AutoVoucher) 设置是否自动使用代金券。1（是），0（否），默认不使用。
 * @method string getVoucherIds() 获取代金券ID列表。
 * @method void setVoucherIds(string $VoucherIds) 设置代金券ID列表。
 * @method integer getActivityId() 获取活动ID。
 * @method void setActivityId(integer $ActivityId) 设置活动ID。
 * @method string getBackupSetId() 获取基础备份集ID。
 * @method void setBackupSetId(string $BackupSetId) 设置基础备份集ID。
 * @method string getRecoveryTargetTime() 获取恢复时间点。
 * @method void setRecoveryTargetTime(string $RecoveryTargetTime) 设置恢复时间点。
 */
class CloneDBInstanceRequest extends AbstractModel
{
    /**
     * @var string 克隆的源实例ID。
     */
    public $DBInstanceId;

    /**
     * @var string 售卖规格ID。该参数可以通过调用DescribeProductConfig的返回值中的SpecCode字段来获取。
     */
    public $SpecCode;

    /**
     * @var integer 实例容量大小，单位：GB。
     */
    public $Storage;

    /**
     * @var integer 购买时长，单位：月。目前只支持1,2,3,4,5,6,7,8,9,10,11,12,24,36这些值，按量计费模式下该参数传1。
     */
    public $Period;

    /**
     * @var integer 续费标记：0-正常续费（默认）；1-自动续费。
     */
    public $AutoRenewFlag;

    /**
     * @var string 私有网络ID。
     */
    public $VpcId;

    /**
     * @var string 已配置的私有网络中的子网ID。
     */
    public $SubnetId;

    /**
     * @var string 新购实例的实例名称。
     */
    public $Name;

    /**
     * @var string 实例计费类型。目前支持：PREPAID（预付费，即包年包月），POSTPAID_BY_HOUR（后付费，即按量计费）。
     */
    public $InstanceChargeType;

    /**
     * @var array 安全组ID。
     */
    public $SecurityGroupIds;

    /**
     * @var integer 项目ID。
     */
    public $ProjectId;

    /**
     * @var array 实例需要绑定的Tag信息，默认为空。
     */
    public $TagList;

    /**
     * @var array 购买多可用区实例时填写。
     */
    public $DBNodeSet;

    /**
     * @var integer 是否自动使用代金券。1（是），0（否），默认不使用。
     */
    public $AutoVoucher;

    /**
     * @var string 代金券ID列表。
     */
    public $VoucherIds;

    /**
     * @var integer 活动ID。
     */
    public $ActivityId;

    /**
     * @var string 基础备份集ID。
     */
    public $BackupSetId;

    /**
     * @var string 恢复时间点。
     */
    public $RecoveryTargetTime;

    /**
     * @param string $DBInstanceId 克隆的源实例ID。
     * @param string $SpecCode 售卖规格ID。该参数可以通过调用DescribeProductConfig的返回值中的SpecCode字段来获取。
     * @param integer $Storage 实例容量大小，单位：GB。
     * @param integer $Period 购买时长，单位：月。目前只支持1,2,3,4,5,6,7,8,9,10,11,12,24,36这些值，按量计费模式下该参数传1。
     * @param integer $AutoRenewFlag 续费标记：0-正常续费（默认）；1-自动续费。
     * @param string $VpcId 私有网络ID。
     * @param string $SubnetId 已配置的私有网络中的子网ID。
     * @param string $Name 新购实例的实例名称。
     * @param string $InstanceChargeType 实例计费类型。目前支持：PREPAID（预付费，即包年包月），POSTPAID_BY_HOUR（后付费，即按量计费）。
     * @param array $SecurityGroupIds 安全组ID。
     * @param integer $ProjectId 项目ID。
     * @param array $TagList 实例需要绑定的Tag信息，默认为空。
     * @param array $DBNodeSet 购买多可用区实例时填写。
     * @param integer $AutoVoucher 是否自动使用代金券。1（是），0（否），默认不使用。
     * @param string $VoucherIds 代金券ID列表。
     * @param integer $ActivityId 活动ID。
     * @param string $BackupSetId 基础备份集ID。
     * @param string $RecoveryTargetTime 恢复时间点。
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("SpecCode",$param) and $param["SpecCode"] !== null) {
            $this->SpecCode = $param["SpecCode"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("DBNodeSet",$param) and $param["DBNodeSet"] !== null) {
            $this->DBNodeSet = [];
            foreach ($param["DBNodeSet"] as $key => $value){
                $obj = new DBNode();
                $obj->deserialize($value);
                array_push($this->DBNodeSet, $obj);
            }
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }

        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }

        if (array_key_exists("BackupSetId",$param) and $param["BackupSetId"] !== null) {
            $this->BackupSetId = $param["BackupSetId"];
        }

        if (array_key_exists("RecoveryTargetTime",$param) and $param["RecoveryTargetTime"] !== null) {
            $this->RecoveryTargetTime = $param["RecoveryTargetTime"];
        }
    }
}
