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
 * CreateReadOnlyDBInstance请求参数结构体
 *
 * @method string getZone() 获取实例所属主可用区， 如：ap-guangzhou-3；
可用区信息可以通过调用 [DescribeZones](https://cloud.tencent.com/document/api/409/16769) 接口的返回值中的Zone字段来获取。
 * @method void setZone(string $Zone) 设置实例所属主可用区， 如：ap-guangzhou-3；
可用区信息可以通过调用 [DescribeZones](https://cloud.tencent.com/document/api/409/16769) 接口的返回值中的Zone字段来获取。
 * @method string getMasterDBInstanceId() 获取只读实例的主实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method void setMasterDBInstanceId(string $MasterDBInstanceId) 设置只读实例的主实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method string getSpecCode() 获取售卖规格码。该参数可以通过调用[DescribeClasses](https://cloud.tencent.com/document/api/409/89019)的返回值中的SpecCode字段来获取。
 * @method void setSpecCode(string $SpecCode) 设置售卖规格码。该参数可以通过调用[DescribeClasses](https://cloud.tencent.com/document/api/409/89019)的返回值中的SpecCode字段来获取。
 * @method integer getStorage() 获取实例硬盘容量大小，单位：GB。该参数的设置步长为10。
 * @method void setStorage(integer $Storage) 设置实例硬盘容量大小，单位：GB。该参数的设置步长为10。
 * @method integer getInstanceCount() 获取购买实例数量，取值范围：[1-6]。购买支持最大数量6个。
 * @method void setInstanceCount(integer $InstanceCount) 设置购买实例数量，取值范围：[1-6]。购买支持最大数量6个。
 * @method integer getPeriod() 获取购买时长，单位：月。
<li>预付费：支持1,2,3,4,5,6,7,8,9,10,11,12,24,36</li>
<li>后付费：只支持1</li>
 * @method void setPeriod(integer $Period) 设置购买时长，单位：月。
<li>预付费：支持1,2,3,4,5,6,7,8,9,10,11,12,24,36</li>
<li>后付费：只支持1</li>
 * @method string getVpcId() 获取私有网络ID，形如vpc-xxxxxxxx（该参数当前必传）。有效的VpcId可通过登录控制台查询；也可以调用接口 [DescribeVpcEx](https://cloud.tencent.com/document/api/215/1372) ，从接口返回中的unVpcId字段获取。
 * @method void setVpcId(string $VpcId) 设置私有网络ID，形如vpc-xxxxxxxx（该参数当前必传）。有效的VpcId可通过登录控制台查询；也可以调用接口 [DescribeVpcEx](https://cloud.tencent.com/document/api/215/1372) ，从接口返回中的unVpcId字段获取。
 * @method string getSubnetId() 获取私有网络子网ID，形如subnet-xxxxxxxx（该参数当前必传）。有效的私有网络子网ID可通过登录控制台查询；也可以调用接口 [DescribeSubnets ](https://cloud.tencent.com/document/api/215/15784)，从接口返回中的unSubnetId字段获取。
 * @method void setSubnetId(string $SubnetId) 设置私有网络子网ID，形如subnet-xxxxxxxx（该参数当前必传）。有效的私有网络子网ID可通过登录控制台查询；也可以调用接口 [DescribeSubnets ](https://cloud.tencent.com/document/api/215/15784)，从接口返回中的unSubnetId字段获取。
 * @method string getInstanceChargeType() 获取实例计费类型，目前支持：
<li>PREPAID：预付费，即包年包月。</li>
<li>POSTPAID_BY_HOUR：后付费，即按量计费。</li>
默认值：PREPAID。如果主实例为后付费，只读实例必须也为后付费。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置实例计费类型，目前支持：
<li>PREPAID：预付费，即包年包月。</li>
<li>POSTPAID_BY_HOUR：后付费，即按量计费。</li>
默认值：PREPAID。如果主实例为后付费，只读实例必须也为后付费。
 * @method integer getAutoVoucher() 获取是否自动使用代金券：
<li>0：否</li>
<li>1：是</li>
默认值：0
 * @method void setAutoVoucher(integer $AutoVoucher) 设置是否自动使用代金券：
<li>0：否</li>
<li>1：是</li>
默认值：0
 * @method array getVoucherIds() 获取代金券ID列表，目前仅支持指定一张代金券。
 * @method void setVoucherIds(array $VoucherIds) 设置代金券ID列表，目前仅支持指定一张代金券。
 * @method integer getAutoRenewFlag() 获取续费标记：
<li>0：手动续费</li>
<li>1：自动续费</li>
默认值：0
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置续费标记：
<li>0：手动续费</li>
<li>1：自动续费</li>
默认值：0
 * @method integer getProjectId() 获取项目ID。默认值为0，表示归属默认项目。
 * @method void setProjectId(integer $ProjectId) 设置项目ID。默认值为0，表示归属默认项目。
 * @method integer getActivityId() 获取优惠活动ID
 * @method void setActivityId(integer $ActivityId) 设置优惠活动ID
 * @method string getReadOnlyGroupId() 获取只读组ID。
 * @method void setReadOnlyGroupId(string $ReadOnlyGroupId) 设置只读组ID。
 * @method Tag getTagList() 获取实例需要绑定的Tag信息，默认为空；可以通过调用 [DescribeTags](https://cloud.tencent.com/document/api/651/35316) 返回值中的 Tags 字段来获取。
 * @method void setTagList(Tag $TagList) 设置实例需要绑定的Tag信息，默认为空；可以通过调用 [DescribeTags](https://cloud.tencent.com/document/api/651/35316) 返回值中的 Tags 字段来获取。
 * @method array getSecurityGroupIds() 获取实例所属安全组，该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。

 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置实例所属安全组，该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。

 * @method integer getNeedSupportIpv6() 获取是否需要支持Ipv6：
<li>0：否</li>
<li>1：是</li>
默认值：0
 * @method void setNeedSupportIpv6(integer $NeedSupportIpv6) 设置是否需要支持Ipv6：
<li>0：否</li>
<li>1：是</li>
默认值：0
 * @method string getName() 获取实例名。仅支持长度小于60的中文/英文/数字/"_"/"-"
 * @method void setName(string $Name) 设置实例名。仅支持长度小于60的中文/英文/数字/"_"/"-"
 * @method string getDBVersion() 获取不再需要指定，内核版本号与主实例保持一致
 * @method void setDBVersion(string $DBVersion) 设置不再需要指定，内核版本号与主实例保持一致
 * @method string getDedicatedClusterId() 获取专属集群ID
 * @method void setDedicatedClusterId(string $DedicatedClusterId) 设置专属集群ID
 * @method boolean getDeletionProtection() 获取实例是否开启删除保护: true-开启删除保护；false-关闭删除保护。
 * @method void setDeletionProtection(boolean $DeletionProtection) 设置实例是否开启删除保护: true-开启删除保护；false-关闭删除保护。
 */
class CreateReadOnlyDBInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例所属主可用区， 如：ap-guangzhou-3；
可用区信息可以通过调用 [DescribeZones](https://cloud.tencent.com/document/api/409/16769) 接口的返回值中的Zone字段来获取。
     */
    public $Zone;

    /**
     * @var string 只读实例的主实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     */
    public $MasterDBInstanceId;

    /**
     * @var string 售卖规格码。该参数可以通过调用[DescribeClasses](https://cloud.tencent.com/document/api/409/89019)的返回值中的SpecCode字段来获取。
     */
    public $SpecCode;

    /**
     * @var integer 实例硬盘容量大小，单位：GB。该参数的设置步长为10。
     */
    public $Storage;

    /**
     * @var integer 购买实例数量，取值范围：[1-6]。购买支持最大数量6个。
     */
    public $InstanceCount;

    /**
     * @var integer 购买时长，单位：月。
<li>预付费：支持1,2,3,4,5,6,7,8,9,10,11,12,24,36</li>
<li>后付费：只支持1</li>
     */
    public $Period;

    /**
     * @var string 私有网络ID，形如vpc-xxxxxxxx（该参数当前必传）。有效的VpcId可通过登录控制台查询；也可以调用接口 [DescribeVpcEx](https://cloud.tencent.com/document/api/215/1372) ，从接口返回中的unVpcId字段获取。
     */
    public $VpcId;

    /**
     * @var string 私有网络子网ID，形如subnet-xxxxxxxx（该参数当前必传）。有效的私有网络子网ID可通过登录控制台查询；也可以调用接口 [DescribeSubnets ](https://cloud.tencent.com/document/api/215/15784)，从接口返回中的unSubnetId字段获取。
     */
    public $SubnetId;

    /**
     * @var string 实例计费类型，目前支持：
<li>PREPAID：预付费，即包年包月。</li>
<li>POSTPAID_BY_HOUR：后付费，即按量计费。</li>
默认值：PREPAID。如果主实例为后付费，只读实例必须也为后付费。
     */
    public $InstanceChargeType;

    /**
     * @var integer 是否自动使用代金券：
<li>0：否</li>
<li>1：是</li>
默认值：0
     */
    public $AutoVoucher;

    /**
     * @var array 代金券ID列表，目前仅支持指定一张代金券。
     */
    public $VoucherIds;

    /**
     * @var integer 续费标记：
<li>0：手动续费</li>
<li>1：自动续费</li>
默认值：0
     */
    public $AutoRenewFlag;

    /**
     * @var integer 项目ID。默认值为0，表示归属默认项目。
     */
    public $ProjectId;

    /**
     * @var integer 优惠活动ID
     */
    public $ActivityId;

    /**
     * @var string 只读组ID。
     */
    public $ReadOnlyGroupId;

    /**
     * @var Tag 实例需要绑定的Tag信息，默认为空；可以通过调用 [DescribeTags](https://cloud.tencent.com/document/api/651/35316) 返回值中的 Tags 字段来获取。
     */
    public $TagList;

    /**
     * @var array 实例所属安全组，该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。

     */
    public $SecurityGroupIds;

    /**
     * @var integer 是否需要支持Ipv6：
<li>0：否</li>
<li>1：是</li>
默认值：0
     */
    public $NeedSupportIpv6;

    /**
     * @var string 实例名。仅支持长度小于60的中文/英文/数字/"_"/"-"
     */
    public $Name;

    /**
     * @var string 不再需要指定，内核版本号与主实例保持一致
     * @deprecated
     */
    public $DBVersion;

    /**
     * @var string 专属集群ID
     */
    public $DedicatedClusterId;

    /**
     * @var boolean 实例是否开启删除保护: true-开启删除保护；false-关闭删除保护。
     */
    public $DeletionProtection;

    /**
     * @param string $Zone 实例所属主可用区， 如：ap-guangzhou-3；
可用区信息可以通过调用 [DescribeZones](https://cloud.tencent.com/document/api/409/16769) 接口的返回值中的Zone字段来获取。
     * @param string $MasterDBInstanceId 只读实例的主实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     * @param string $SpecCode 售卖规格码。该参数可以通过调用[DescribeClasses](https://cloud.tencent.com/document/api/409/89019)的返回值中的SpecCode字段来获取。
     * @param integer $Storage 实例硬盘容量大小，单位：GB。该参数的设置步长为10。
     * @param integer $InstanceCount 购买实例数量，取值范围：[1-6]。购买支持最大数量6个。
     * @param integer $Period 购买时长，单位：月。
<li>预付费：支持1,2,3,4,5,6,7,8,9,10,11,12,24,36</li>
<li>后付费：只支持1</li>
     * @param string $VpcId 私有网络ID，形如vpc-xxxxxxxx（该参数当前必传）。有效的VpcId可通过登录控制台查询；也可以调用接口 [DescribeVpcEx](https://cloud.tencent.com/document/api/215/1372) ，从接口返回中的unVpcId字段获取。
     * @param string $SubnetId 私有网络子网ID，形如subnet-xxxxxxxx（该参数当前必传）。有效的私有网络子网ID可通过登录控制台查询；也可以调用接口 [DescribeSubnets ](https://cloud.tencent.com/document/api/215/15784)，从接口返回中的unSubnetId字段获取。
     * @param string $InstanceChargeType 实例计费类型，目前支持：
<li>PREPAID：预付费，即包年包月。</li>
<li>POSTPAID_BY_HOUR：后付费，即按量计费。</li>
默认值：PREPAID。如果主实例为后付费，只读实例必须也为后付费。
     * @param integer $AutoVoucher 是否自动使用代金券：
<li>0：否</li>
<li>1：是</li>
默认值：0
     * @param array $VoucherIds 代金券ID列表，目前仅支持指定一张代金券。
     * @param integer $AutoRenewFlag 续费标记：
<li>0：手动续费</li>
<li>1：自动续费</li>
默认值：0
     * @param integer $ProjectId 项目ID。默认值为0，表示归属默认项目。
     * @param integer $ActivityId 优惠活动ID
     * @param string $ReadOnlyGroupId 只读组ID。
     * @param Tag $TagList 实例需要绑定的Tag信息，默认为空；可以通过调用 [DescribeTags](https://cloud.tencent.com/document/api/651/35316) 返回值中的 Tags 字段来获取。
     * @param array $SecurityGroupIds 实例所属安全组，该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。

     * @param integer $NeedSupportIpv6 是否需要支持Ipv6：
<li>0：否</li>
<li>1：是</li>
默认值：0
     * @param string $Name 实例名。仅支持长度小于60的中文/英文/数字/"_"/"-"
     * @param string $DBVersion 不再需要指定，内核版本号与主实例保持一致
     * @param string $DedicatedClusterId 专属集群ID
     * @param boolean $DeletionProtection 实例是否开启删除保护: true-开启删除保护；false-关闭删除保护。
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("MasterDBInstanceId",$param) and $param["MasterDBInstanceId"] !== null) {
            $this->MasterDBInstanceId = $param["MasterDBInstanceId"];
        }

        if (array_key_exists("SpecCode",$param) and $param["SpecCode"] !== null) {
            $this->SpecCode = $param["SpecCode"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }

        if (array_key_exists("ReadOnlyGroupId",$param) and $param["ReadOnlyGroupId"] !== null) {
            $this->ReadOnlyGroupId = $param["ReadOnlyGroupId"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = new Tag();
            $this->TagList->deserialize($param["TagList"]);
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("NeedSupportIpv6",$param) and $param["NeedSupportIpv6"] !== null) {
            $this->NeedSupportIpv6 = $param["NeedSupportIpv6"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }
    }
}
