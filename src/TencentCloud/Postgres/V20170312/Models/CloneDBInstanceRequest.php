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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CloneDBInstance请求参数结构体
 *
 * @method string getDBInstanceId() 获取<p>克隆的源实例ID。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
 * @method void setDBInstanceId(string $DBInstanceId) 设置<p>克隆的源实例ID。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
 * @method string getSpecCode() 获取<p>售卖规格码。该参数可以通过调用<a href="https://cloud.tencent.com/document/api/409/89019">DescribeClasses</a>的返回值中的SpecCode字段来获取。</p>
 * @method void setSpecCode(string $SpecCode) 设置<p>售卖规格码。该参数可以通过调用<a href="https://cloud.tencent.com/document/api/409/89019">DescribeClasses</a>的返回值中的SpecCode字段来获取。</p>
 * @method integer getStorage() 获取<p>实例磁盘容量大小，设置步长限制为10。单位：GB。</p>
 * @method void setStorage(integer $Storage) 设置<p>实例磁盘容量大小，设置步长限制为10。单位：GB。</p>
 * @method integer getPeriod() 获取<p>购买时长，单位：月。</p><ul><li>预付费：支持1,2,3,4,5,6,7,8,9,10,11,12,24,36</li><li>后付费：只支持1</li></ul>
 * @method void setPeriod(integer $Period) 设置<p>购买时长，单位：月。</p><ul><li>预付费：支持1,2,3,4,5,6,7,8,9,10,11,12,24,36</li><li>后付费：只支持1</li></ul>
 * @method integer getAutoRenewFlag() 获取<p>续费标记。仅当计费模式为预付费时生效。<br>枚举值：</p><ul><li>0：手动续费</li><li>1：自动续费</li></ul><p>默认值：0</p>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>续费标记。仅当计费模式为预付费时生效。<br>枚举值：</p><ul><li>0：手动续费</li><li>1：自动续费</li></ul><p>默认值：0</p>
 * @method string getVpcId() 获取<p>私有网络ID，形如vpc-xxxxxxxx。有效的VpcId可通过登录控制台查询；也可以调用接口 <a href="https://cloud.tencent.com/document/api/215/1372">DescribeVpcEx</a> ，从接口返回中的unVpcId字段获取。</p>
 * @method void setVpcId(string $VpcId) 设置<p>私有网络ID，形如vpc-xxxxxxxx。有效的VpcId可通过登录控制台查询；也可以调用接口 <a href="https://cloud.tencent.com/document/api/215/1372">DescribeVpcEx</a> ，从接口返回中的unVpcId字段获取。</p>
 * @method string getSubnetId() 获取<p>私有网络子网ID，形如subnet-xxxxxxxx。有效的私有网络子网ID可通过登录控制台查询；也可以调用接口 <a href="https://cloud.tencent.com/document/api/215/15784">DescribeSubnets </a>，从接口返回中的unSubnetId字段获取。</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>私有网络子网ID，形如subnet-xxxxxxxx。有效的私有网络子网ID可通过登录控制台查询；也可以调用接口 <a href="https://cloud.tencent.com/document/api/215/15784">DescribeSubnets </a>，从接口返回中的unSubnetId字段获取。</p>
 * @method string getName() 获取<p>新购的实例名称，仅支持长度小于60的中文/英文/数字/&quot;_&quot;/&quot;-&quot;，不指定实例名称则默认显示&quot;源实例名-Copy&quot;。</p>
 * @method void setName(string $Name) 设置<p>新购的实例名称，仅支持长度小于60的中文/英文/数字/&quot;_&quot;/&quot;-&quot;，不指定实例名称则默认显示&quot;源实例名-Copy&quot;。</p>
 * @method string getInstanceChargeType() 获取<p>实例计费类型，目前支持：</p><ul><li>PREPAID：预付费，即包年包月</li><li>POSTPAID_BY_HOUR：后付费，即按量计费</li></ul><p>默认值：PREPAID</p>
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置<p>实例计费类型，目前支持：</p><ul><li>PREPAID：预付费，即包年包月</li><li>POSTPAID_BY_HOUR：后付费，即按量计费</li></ul><p>默认值：PREPAID</p>
 * @method array getSecurityGroupIds() 获取<p>实例所属安全组。该参数可以通过调用<a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a>的返回值中的SecurityGroupId字段来获取。若不指定该参数，则绑定默认安全组。</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>实例所属安全组。该参数可以通过调用<a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a>的返回值中的SecurityGroupId字段来获取。若不指定该参数，则绑定默认安全组。</p>
 * @method integer getProjectId() 获取<p>项目ID。默认值为0，表示所属默认项目。</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目ID。默认值为0，表示所属默认项目。</p>
 * @method array getTagList() 获取<p>实例需要绑定的Tag信息，默认为空；可以通过调用 <a href="https://cloud.tencent.com/document/api/651/35316">DescribeTags</a> 返回值中的 Tags 字段来获取。</p>
 * @method void setTagList(array $TagList) 设置<p>实例需要绑定的Tag信息，默认为空；可以通过调用 <a href="https://cloud.tencent.com/document/api/651/35316">DescribeTags</a> 返回值中的 Tags 字段来获取。</p>
 * @method array getDBNodeSet() 获取<p>实例节点部署信息，必须填写主备节点可用区。支持多可用区部署时需要指定每个节点的部署可用区信息。<br>可用区信息可以通过调用 <a href="https://cloud.tencent.com/document/api/409/16769">DescribeZones</a> 接口的返回值中的Zone字段来获取。</p>
 * @method void setDBNodeSet(array $DBNodeSet) 设置<p>实例节点部署信息，必须填写主备节点可用区。支持多可用区部署时需要指定每个节点的部署可用区信息。<br>可用区信息可以通过调用 <a href="https://cloud.tencent.com/document/api/409/16769">DescribeZones</a> 接口的返回值中的Zone字段来获取。</p>
 * @method integer getAutoVoucher() 获取<p>是否自动使用代金券：</p><ul><li>0：否</li><li>1：是</li></ul><p>默认值：0</p>
 * @method void setAutoVoucher(integer $AutoVoucher) 设置<p>是否自动使用代金券：</p><ul><li>0：否</li><li>1：是</li></ul><p>默认值：0</p>
 * @method string getVoucherIds() 获取<p>代金券ID列表。</p>
 * @method void setVoucherIds(string $VoucherIds) 设置<p>代金券ID列表。</p>
 * @method integer getActivityId() 获取<p>活动ID。</p>
 * @method void setActivityId(integer $ActivityId) 设置<p>活动ID。</p>
 * @method string getBackupSetId() 获取<p>基础备份集ID。参数BackupSetId、RecoveryTargetTime两者必须填写一项，且不能同时填写。</p>
 * @method void setBackupSetId(string $BackupSetId) 设置<p>基础备份集ID。参数BackupSetId、RecoveryTargetTime两者必须填写一项，且不能同时填写。</p>
 * @method string getRecoveryTargetTime() 获取<p>恢复时间点。参数BackupSetId、RecoveryTargetTime两者必须填写一项，且不能同时填写。</p>
 * @method void setRecoveryTargetTime(string $RecoveryTargetTime) 设置<p>恢复时间点。参数BackupSetId、RecoveryTargetTime两者必须填写一项，且不能同时填写。</p>
 * @method string getSyncMode() 获取<p>主从同步方式，支持： </p><li>Semi-sync：半同步</li><li>Async：异步</li>主实例默认值：Semi-sync只读实例默认值：Async
 * @method void setSyncMode(string $SyncMode) 设置<p>主从同步方式，支持： </p><li>Semi-sync：半同步</li><li>Async：异步</li>主实例默认值：Semi-sync只读实例默认值：Async
 * @method boolean getDeletionProtection() 获取<p>实例是否开启删除保护: true-开启删除保护；false-关闭删除保护。</p>
 * @method void setDeletionProtection(boolean $DeletionProtection) 设置<p>实例是否开启删除保护: true-开启删除保护；false-关闭删除保护。</p>
 */
class CloneDBInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>克隆的源实例ID。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
     */
    public $DBInstanceId;

    /**
     * @var string <p>售卖规格码。该参数可以通过调用<a href="https://cloud.tencent.com/document/api/409/89019">DescribeClasses</a>的返回值中的SpecCode字段来获取。</p>
     */
    public $SpecCode;

    /**
     * @var integer <p>实例磁盘容量大小，设置步长限制为10。单位：GB。</p>
     */
    public $Storage;

    /**
     * @var integer <p>购买时长，单位：月。</p><ul><li>预付费：支持1,2,3,4,5,6,7,8,9,10,11,12,24,36</li><li>后付费：只支持1</li></ul>
     */
    public $Period;

    /**
     * @var integer <p>续费标记。仅当计费模式为预付费时生效。<br>枚举值：</p><ul><li>0：手动续费</li><li>1：自动续费</li></ul><p>默认值：0</p>
     */
    public $AutoRenewFlag;

    /**
     * @var string <p>私有网络ID，形如vpc-xxxxxxxx。有效的VpcId可通过登录控制台查询；也可以调用接口 <a href="https://cloud.tencent.com/document/api/215/1372">DescribeVpcEx</a> ，从接口返回中的unVpcId字段获取。</p>
     */
    public $VpcId;

    /**
     * @var string <p>私有网络子网ID，形如subnet-xxxxxxxx。有效的私有网络子网ID可通过登录控制台查询；也可以调用接口 <a href="https://cloud.tencent.com/document/api/215/15784">DescribeSubnets </a>，从接口返回中的unSubnetId字段获取。</p>
     */
    public $SubnetId;

    /**
     * @var string <p>新购的实例名称，仅支持长度小于60的中文/英文/数字/&quot;_&quot;/&quot;-&quot;，不指定实例名称则默认显示&quot;源实例名-Copy&quot;。</p>
     */
    public $Name;

    /**
     * @var string <p>实例计费类型，目前支持：</p><ul><li>PREPAID：预付费，即包年包月</li><li>POSTPAID_BY_HOUR：后付费，即按量计费</li></ul><p>默认值：PREPAID</p>
     */
    public $InstanceChargeType;

    /**
     * @var array <p>实例所属安全组。该参数可以通过调用<a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a>的返回值中的SecurityGroupId字段来获取。若不指定该参数，则绑定默认安全组。</p>
     */
    public $SecurityGroupIds;

    /**
     * @var integer <p>项目ID。默认值为0，表示所属默认项目。</p>
     */
    public $ProjectId;

    /**
     * @var array <p>实例需要绑定的Tag信息，默认为空；可以通过调用 <a href="https://cloud.tencent.com/document/api/651/35316">DescribeTags</a> 返回值中的 Tags 字段来获取。</p>
     */
    public $TagList;

    /**
     * @var array <p>实例节点部署信息，必须填写主备节点可用区。支持多可用区部署时需要指定每个节点的部署可用区信息。<br>可用区信息可以通过调用 <a href="https://cloud.tencent.com/document/api/409/16769">DescribeZones</a> 接口的返回值中的Zone字段来获取。</p>
     */
    public $DBNodeSet;

    /**
     * @var integer <p>是否自动使用代金券：</p><ul><li>0：否</li><li>1：是</li></ul><p>默认值：0</p>
     */
    public $AutoVoucher;

    /**
     * @var string <p>代金券ID列表。</p>
     */
    public $VoucherIds;

    /**
     * @var integer <p>活动ID。</p>
     */
    public $ActivityId;

    /**
     * @var string <p>基础备份集ID。参数BackupSetId、RecoveryTargetTime两者必须填写一项，且不能同时填写。</p>
     */
    public $BackupSetId;

    /**
     * @var string <p>恢复时间点。参数BackupSetId、RecoveryTargetTime两者必须填写一项，且不能同时填写。</p>
     */
    public $RecoveryTargetTime;

    /**
     * @var string <p>主从同步方式，支持： </p><li>Semi-sync：半同步</li><li>Async：异步</li>主实例默认值：Semi-sync只读实例默认值：Async
     */
    public $SyncMode;

    /**
     * @var boolean <p>实例是否开启删除保护: true-开启删除保护；false-关闭删除保护。</p>
     */
    public $DeletionProtection;

    /**
     * @param string $DBInstanceId <p>克隆的源实例ID。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
     * @param string $SpecCode <p>售卖规格码。该参数可以通过调用<a href="https://cloud.tencent.com/document/api/409/89019">DescribeClasses</a>的返回值中的SpecCode字段来获取。</p>
     * @param integer $Storage <p>实例磁盘容量大小，设置步长限制为10。单位：GB。</p>
     * @param integer $Period <p>购买时长，单位：月。</p><ul><li>预付费：支持1,2,3,4,5,6,7,8,9,10,11,12,24,36</li><li>后付费：只支持1</li></ul>
     * @param integer $AutoRenewFlag <p>续费标记。仅当计费模式为预付费时生效。<br>枚举值：</p><ul><li>0：手动续费</li><li>1：自动续费</li></ul><p>默认值：0</p>
     * @param string $VpcId <p>私有网络ID，形如vpc-xxxxxxxx。有效的VpcId可通过登录控制台查询；也可以调用接口 <a href="https://cloud.tencent.com/document/api/215/1372">DescribeVpcEx</a> ，从接口返回中的unVpcId字段获取。</p>
     * @param string $SubnetId <p>私有网络子网ID，形如subnet-xxxxxxxx。有效的私有网络子网ID可通过登录控制台查询；也可以调用接口 <a href="https://cloud.tencent.com/document/api/215/15784">DescribeSubnets </a>，从接口返回中的unSubnetId字段获取。</p>
     * @param string $Name <p>新购的实例名称，仅支持长度小于60的中文/英文/数字/&quot;_&quot;/&quot;-&quot;，不指定实例名称则默认显示&quot;源实例名-Copy&quot;。</p>
     * @param string $InstanceChargeType <p>实例计费类型，目前支持：</p><ul><li>PREPAID：预付费，即包年包月</li><li>POSTPAID_BY_HOUR：后付费，即按量计费</li></ul><p>默认值：PREPAID</p>
     * @param array $SecurityGroupIds <p>实例所属安全组。该参数可以通过调用<a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a>的返回值中的SecurityGroupId字段来获取。若不指定该参数，则绑定默认安全组。</p>
     * @param integer $ProjectId <p>项目ID。默认值为0，表示所属默认项目。</p>
     * @param array $TagList <p>实例需要绑定的Tag信息，默认为空；可以通过调用 <a href="https://cloud.tencent.com/document/api/651/35316">DescribeTags</a> 返回值中的 Tags 字段来获取。</p>
     * @param array $DBNodeSet <p>实例节点部署信息，必须填写主备节点可用区。支持多可用区部署时需要指定每个节点的部署可用区信息。<br>可用区信息可以通过调用 <a href="https://cloud.tencent.com/document/api/409/16769">DescribeZones</a> 接口的返回值中的Zone字段来获取。</p>
     * @param integer $AutoVoucher <p>是否自动使用代金券：</p><ul><li>0：否</li><li>1：是</li></ul><p>默认值：0</p>
     * @param string $VoucherIds <p>代金券ID列表。</p>
     * @param integer $ActivityId <p>活动ID。</p>
     * @param string $BackupSetId <p>基础备份集ID。参数BackupSetId、RecoveryTargetTime两者必须填写一项，且不能同时填写。</p>
     * @param string $RecoveryTargetTime <p>恢复时间点。参数BackupSetId、RecoveryTargetTime两者必须填写一项，且不能同时填写。</p>
     * @param string $SyncMode <p>主从同步方式，支持： </p><li>Semi-sync：半同步</li><li>Async：异步</li>主实例默认值：Semi-sync只读实例默认值：Async
     * @param boolean $DeletionProtection <p>实例是否开启删除保护: true-开启删除保护；false-关闭删除保护。</p>
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

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }
    }
}
