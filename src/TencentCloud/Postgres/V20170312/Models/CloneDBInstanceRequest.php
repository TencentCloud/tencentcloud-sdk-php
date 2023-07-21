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
 * @method string getSpecCode() 获取售卖规格码。该参数可以通过调用[DescribeClasses](https://cloud.tencent.com/document/api/409/89019)的返回值中的SpecCode字段来获取。
 * @method void setSpecCode(string $SpecCode) 设置售卖规格码。该参数可以通过调用[DescribeClasses](https://cloud.tencent.com/document/api/409/89019)的返回值中的SpecCode字段来获取。
 * @method integer getStorage() 获取实例容量大小，单位：GB。
 * @method void setStorage(integer $Storage) 设置实例容量大小，单位：GB。
 * @method integer getPeriod() 获取购买时长，单位：月。
<li>预付费：支持1,2,3,4,5,6,7,8,9,10,11,12,24,36
<li>后付费：只支持1
 * @method void setPeriod(integer $Period) 设置购买时长，单位：月。
<li>预付费：支持1,2,3,4,5,6,7,8,9,10,11,12,24,36
<li>后付费：只支持1
 * @method integer getAutoRenewFlag() 获取续费标记：
<li>0：手动续费
<li>1：自动续费
默认值：0
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置续费标记：
<li>0：手动续费
<li>1：自动续费
默认值：0
 * @method string getVpcId() 获取私有网络ID，形如vpc-xxxxxxxx。有效的VpcId可通过登录控制台查询；也可以调用接口 [DescribeVpcEx](https://cloud.tencent.com/document/api/215/1372) ，从接口返回中的unVpcId字段获取。
 * @method void setVpcId(string $VpcId) 设置私有网络ID，形如vpc-xxxxxxxx。有效的VpcId可通过登录控制台查询；也可以调用接口 [DescribeVpcEx](https://cloud.tencent.com/document/api/215/1372) ，从接口返回中的unVpcId字段获取。
 * @method string getSubnetId() 获取私有网络子网ID，形如subnet-xxxxxxxx。有效的私有网络子网ID可通过登录控制台查询；也可以调用接口 [DescribeSubnets ](https://cloud.tencent.com/document/api/215/15784)，从接口返回中的unSubnetId字段获取。
 * @method void setSubnetId(string $SubnetId) 设置私有网络子网ID，形如subnet-xxxxxxxx。有效的私有网络子网ID可通过登录控制台查询；也可以调用接口 [DescribeSubnets ](https://cloud.tencent.com/document/api/215/15784)，从接口返回中的unSubnetId字段获取。
 * @method string getName() 获取新购的实例名称，仅支持长度小于60的中文/英文/数字/"_"/"-"，不指定实例名称则默认显示"未命名"。
 * @method void setName(string $Name) 设置新购的实例名称，仅支持长度小于60的中文/英文/数字/"_"/"-"，不指定实例名称则默认显示"未命名"。
 * @method string getInstanceChargeType() 获取实例计费类型，目前支持：
<li>PREPAID：预付费，即包年包月
<li>POSTPAID_BY_HOUR：后付费，即按量计费
默认值：PREPAID
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置实例计费类型，目前支持：
<li>PREPAID：预付费，即包年包月
<li>POSTPAID_BY_HOUR：后付费，即按量计费
默认值：PREPAID
 * @method array getSecurityGroupIds() 获取实例所属安全组，该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。

 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置实例所属安全组，该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。

 * @method integer getProjectId() 获取项目ID。
 * @method void setProjectId(integer $ProjectId) 设置项目ID。
 * @method array getTagList() 获取实例需要绑定的Tag信息，默认为空；可以通过调用 [DescribeTags](https://cloud.tencent.com/document/api/651/35316) 返回值中的 Tags 字段来获取。
 * @method void setTagList(array $TagList) 设置实例需要绑定的Tag信息，默认为空；可以通过调用 [DescribeTags](https://cloud.tencent.com/document/api/651/35316) 返回值中的 Tags 字段来获取。
 * @method array getDBNodeSet() 获取实例节点部署信息，支持多可用区部署时需要指定每个节点的部署可用区信息。
可用区信息可以通过调用 [DescribeZones](https://cloud.tencent.com/document/api/409/16769) 接口的返回值中的Zone字段来获取。
 * @method void setDBNodeSet(array $DBNodeSet) 设置实例节点部署信息，支持多可用区部署时需要指定每个节点的部署可用区信息。
可用区信息可以通过调用 [DescribeZones](https://cloud.tencent.com/document/api/409/16769) 接口的返回值中的Zone字段来获取。
 * @method integer getAutoVoucher() 获取是否自动使用代金券：
<li>0：否
<li>1：是
默认值：0
 * @method void setAutoVoucher(integer $AutoVoucher) 设置是否自动使用代金券：
<li>0：否
<li>1：是
默认值：0
 * @method string getVoucherIds() 获取代金券ID列表。
 * @method void setVoucherIds(string $VoucherIds) 设置代金券ID列表。
 * @method integer getActivityId() 获取活动ID。
 * @method void setActivityId(integer $ActivityId) 设置活动ID。
 * @method string getBackupSetId() 获取基础备份集ID。
 * @method void setBackupSetId(string $BackupSetId) 设置基础备份集ID。
 * @method string getRecoveryTargetTime() 获取恢复时间点。
 * @method void setRecoveryTargetTime(string $RecoveryTargetTime) 设置恢复时间点。
 * @method string getSyncMode() 获取主从同步方式，支持： 
<li>Semi-sync：半同步
<li>Async：异步
主实例默认值：Semi-sync
只读实例默认值：Async
 * @method void setSyncMode(string $SyncMode) 设置主从同步方式，支持： 
<li>Semi-sync：半同步
<li>Async：异步
主实例默认值：Semi-sync
只读实例默认值：Async
 */
class CloneDBInstanceRequest extends AbstractModel
{
    /**
     * @var string 克隆的源实例ID。
     */
    public $DBInstanceId;

    /**
     * @var string 售卖规格码。该参数可以通过调用[DescribeClasses](https://cloud.tencent.com/document/api/409/89019)的返回值中的SpecCode字段来获取。
     */
    public $SpecCode;

    /**
     * @var integer 实例容量大小，单位：GB。
     */
    public $Storage;

    /**
     * @var integer 购买时长，单位：月。
<li>预付费：支持1,2,3,4,5,6,7,8,9,10,11,12,24,36
<li>后付费：只支持1
     */
    public $Period;

    /**
     * @var integer 续费标记：
<li>0：手动续费
<li>1：自动续费
默认值：0
     */
    public $AutoRenewFlag;

    /**
     * @var string 私有网络ID，形如vpc-xxxxxxxx。有效的VpcId可通过登录控制台查询；也可以调用接口 [DescribeVpcEx](https://cloud.tencent.com/document/api/215/1372) ，从接口返回中的unVpcId字段获取。
     */
    public $VpcId;

    /**
     * @var string 私有网络子网ID，形如subnet-xxxxxxxx。有效的私有网络子网ID可通过登录控制台查询；也可以调用接口 [DescribeSubnets ](https://cloud.tencent.com/document/api/215/15784)，从接口返回中的unSubnetId字段获取。
     */
    public $SubnetId;

    /**
     * @var string 新购的实例名称，仅支持长度小于60的中文/英文/数字/"_"/"-"，不指定实例名称则默认显示"未命名"。
     */
    public $Name;

    /**
     * @var string 实例计费类型，目前支持：
<li>PREPAID：预付费，即包年包月
<li>POSTPAID_BY_HOUR：后付费，即按量计费
默认值：PREPAID
     */
    public $InstanceChargeType;

    /**
     * @var array 实例所属安全组，该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。

     */
    public $SecurityGroupIds;

    /**
     * @var integer 项目ID。
     */
    public $ProjectId;

    /**
     * @var array 实例需要绑定的Tag信息，默认为空；可以通过调用 [DescribeTags](https://cloud.tencent.com/document/api/651/35316) 返回值中的 Tags 字段来获取。
     */
    public $TagList;

    /**
     * @var array 实例节点部署信息，支持多可用区部署时需要指定每个节点的部署可用区信息。
可用区信息可以通过调用 [DescribeZones](https://cloud.tencent.com/document/api/409/16769) 接口的返回值中的Zone字段来获取。
     */
    public $DBNodeSet;

    /**
     * @var integer 是否自动使用代金券：
<li>0：否
<li>1：是
默认值：0
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
     * @var string 主从同步方式，支持： 
<li>Semi-sync：半同步
<li>Async：异步
主实例默认值：Semi-sync
只读实例默认值：Async
     */
    public $SyncMode;

    /**
     * @param string $DBInstanceId 克隆的源实例ID。
     * @param string $SpecCode 售卖规格码。该参数可以通过调用[DescribeClasses](https://cloud.tencent.com/document/api/409/89019)的返回值中的SpecCode字段来获取。
     * @param integer $Storage 实例容量大小，单位：GB。
     * @param integer $Period 购买时长，单位：月。
<li>预付费：支持1,2,3,4,5,6,7,8,9,10,11,12,24,36
<li>后付费：只支持1
     * @param integer $AutoRenewFlag 续费标记：
<li>0：手动续费
<li>1：自动续费
默认值：0
     * @param string $VpcId 私有网络ID，形如vpc-xxxxxxxx。有效的VpcId可通过登录控制台查询；也可以调用接口 [DescribeVpcEx](https://cloud.tencent.com/document/api/215/1372) ，从接口返回中的unVpcId字段获取。
     * @param string $SubnetId 私有网络子网ID，形如subnet-xxxxxxxx。有效的私有网络子网ID可通过登录控制台查询；也可以调用接口 [DescribeSubnets ](https://cloud.tencent.com/document/api/215/15784)，从接口返回中的unSubnetId字段获取。
     * @param string $Name 新购的实例名称，仅支持长度小于60的中文/英文/数字/"_"/"-"，不指定实例名称则默认显示"未命名"。
     * @param string $InstanceChargeType 实例计费类型，目前支持：
<li>PREPAID：预付费，即包年包月
<li>POSTPAID_BY_HOUR：后付费，即按量计费
默认值：PREPAID
     * @param array $SecurityGroupIds 实例所属安全组，该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。

     * @param integer $ProjectId 项目ID。
     * @param array $TagList 实例需要绑定的Tag信息，默认为空；可以通过调用 [DescribeTags](https://cloud.tencent.com/document/api/651/35316) 返回值中的 Tags 字段来获取。
     * @param array $DBNodeSet 实例节点部署信息，支持多可用区部署时需要指定每个节点的部署可用区信息。
可用区信息可以通过调用 [DescribeZones](https://cloud.tencent.com/document/api/409/16769) 接口的返回值中的Zone字段来获取。
     * @param integer $AutoVoucher 是否自动使用代金券：
<li>0：否
<li>1：是
默认值：0
     * @param string $VoucherIds 代金券ID列表。
     * @param integer $ActivityId 活动ID。
     * @param string $BackupSetId 基础备份集ID。
     * @param string $RecoveryTargetTime 恢复时间点。
     * @param string $SyncMode 主从同步方式，支持： 
<li>Semi-sync：半同步
<li>Async：异步
主实例默认值：Semi-sync
只读实例默认值：Async
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

        if (array_key_exists("SyncMode",$param) and $param["SyncMode"] !== null) {
            $this->SyncMode = $param["SyncMode"];
        }
    }
}
