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
 * @method string getZone() 获取<p>实例所属主可用区， 如：ap-guangzhou-3；<br>可用区信息可以通过调用 <a href="https://cloud.tencent.com/document/api/409/16769">DescribeZones</a> 接口的返回值中的Zone字段来获取。</p>
 * @method void setZone(string $Zone) 设置<p>实例所属主可用区， 如：ap-guangzhou-3；<br>可用区信息可以通过调用 <a href="https://cloud.tencent.com/document/api/409/16769">DescribeZones</a> 接口的返回值中的Zone字段来获取。</p>
 * @method string getMasterDBInstanceId() 获取<p>只读实例的主实例ID。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
 * @method void setMasterDBInstanceId(string $MasterDBInstanceId) 设置<p>只读实例的主实例ID。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
 * @method string getSpecCode() 获取<p>售卖规格码。该参数可以通过调用<a href="https://cloud.tencent.com/document/api/409/89019">DescribeClasses</a>的返回值中的SpecCode字段来获取。</p>
 * @method void setSpecCode(string $SpecCode) 设置<p>售卖规格码。该参数可以通过调用<a href="https://cloud.tencent.com/document/api/409/89019">DescribeClasses</a>的返回值中的SpecCode字段来获取。</p>
 * @method integer getStorage() 获取<p>实例硬盘容量大小，单位：GB。该参数的设置步长为10。</p>
 * @method void setStorage(integer $Storage) 设置<p>实例硬盘容量大小，单位：GB。该参数的设置步长为10。</p>
 * @method integer getInstanceCount() 获取<p>购买实例数量，取值范围：[1-6]。购买支持最大数量6个。</p>
 * @method void setInstanceCount(integer $InstanceCount) 设置<p>购买实例数量，取值范围：[1-6]。购买支持最大数量6个。</p>
 * @method integer getPeriod() 获取<p>购买时长，单位：月。</p><li>预付费：支持1,2,3,4,5,6,7,8,9,10,11,12,24,36</li><li>后付费：只支持1</li>
 * @method void setPeriod(integer $Period) 设置<p>购买时长，单位：月。</p><li>预付费：支持1,2,3,4,5,6,7,8,9,10,11,12,24,36</li><li>后付费：只支持1</li>
 * @method string getVpcId() 获取<p>私有网络ID，形如vpc-xxxxxxxx（该参数当前必传）。有效的VpcId可通过登录控制台查询；也可以调用接口 <a href="https://cloud.tencent.com/document/api/215/1372">DescribeVpcEx</a> ，从接口返回中的unVpcId字段获取。</p>
 * @method void setVpcId(string $VpcId) 设置<p>私有网络ID，形如vpc-xxxxxxxx（该参数当前必传）。有效的VpcId可通过登录控制台查询；也可以调用接口 <a href="https://cloud.tencent.com/document/api/215/1372">DescribeVpcEx</a> ，从接口返回中的unVpcId字段获取。</p>
 * @method string getSubnetId() 获取<p>私有网络子网ID，形如subnet-xxxxxxxx（该参数当前必传）。有效的私有网络子网ID可通过登录控制台查询；也可以调用接口 <a href="https://cloud.tencent.com/document/api/215/15784">DescribeSubnets </a>，从接口返回中的unSubnetId字段获取。</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>私有网络子网ID，形如subnet-xxxxxxxx（该参数当前必传）。有效的私有网络子网ID可通过登录控制台查询；也可以调用接口 <a href="https://cloud.tencent.com/document/api/215/15784">DescribeSubnets </a>，从接口返回中的unSubnetId字段获取。</p>
 * @method string getInstanceChargeType() 获取<p>实例计费类型，目前支持：</p><li>PREPAID：预付费，即包年包月。</li><li>POSTPAID_BY_HOUR：后付费，即按量计费。</li>默认值：PREPAID。如果主实例为后付费，只读实例必须也为后付费。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置<p>实例计费类型，目前支持：</p><li>PREPAID：预付费，即包年包月。</li><li>POSTPAID_BY_HOUR：后付费，即按量计费。</li>默认值：PREPAID。如果主实例为后付费，只读实例必须也为后付费。
 * @method integer getAutoVoucher() 获取<p>是否自动使用代金券：</p><li>0：否</li><li>1：是</li>默认值：0
 * @method void setAutoVoucher(integer $AutoVoucher) 设置<p>是否自动使用代金券：</p><li>0：否</li><li>1：是</li>默认值：0
 * @method array getVoucherIds() 获取<p>代金券ID列表，目前仅支持指定一张代金券。</p>
 * @method void setVoucherIds(array $VoucherIds) 设置<p>代金券ID列表，目前仅支持指定一张代金券。</p>
 * @method integer getAutoRenewFlag() 获取<p>续费标记：</p><li>0：手动续费</li><li>1：自动续费</li>默认值：0
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>续费标记：</p><li>0：手动续费</li><li>1：自动续费</li>默认值：0
 * @method integer getProjectId() 获取<p>项目ID。默认值为0，表示归属默认项目。</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目ID。默认值为0，表示归属默认项目。</p>
 * @method integer getActivityId() 获取<p>优惠活动ID</p>
 * @method void setActivityId(integer $ActivityId) 设置<p>优惠活动ID</p>
 * @method string getReadOnlyGroupId() 获取<p>只读组ID。</p>
 * @method void setReadOnlyGroupId(string $ReadOnlyGroupId) 设置<p>只读组ID。</p>
 * @method Tag getTagList() 获取<p>实例需要绑定的Tag信息，默认为空；可以通过调用 <a href="https://cloud.tencent.com/document/api/651/35316">DescribeTags</a> 返回值中的 Tags 字段来获取。</p>
 * @method void setTagList(Tag $TagList) 设置<p>实例需要绑定的Tag信息，默认为空；可以通过调用 <a href="https://cloud.tencent.com/document/api/651/35316">DescribeTags</a> 返回值中的 Tags 字段来获取。</p>
 * @method array getSecurityGroupIds() 获取<p>实例所属安全组，该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>实例所属安全组，该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。</p>
 * @method integer getNeedSupportIpv6() 获取<p>是否需要支持Ipv6：</p><li>0：否</li><li>1：是</li>默认值：0
 * @method void setNeedSupportIpv6(integer $NeedSupportIpv6) 设置<p>是否需要支持Ipv6：</p><li>0：否</li><li>1：是</li>默认值：0
 * @method string getName() 获取<p>实例名。仅支持长度小于60的中文/英文/数字/&quot;_&quot;/&quot;-&quot;</p>
 * @method void setName(string $Name) 设置<p>实例名。仅支持长度小于60的中文/英文/数字/&quot;_&quot;/&quot;-&quot;</p>
 * @method string getDBVersion() 获取<p>不再需要指定，内核版本号与主实例保持一致</p>
 * @method void setDBVersion(string $DBVersion) 设置<p>不再需要指定，内核版本号与主实例保持一致</p>
 * @method string getDedicatedClusterId() 获取<p>专属集群ID</p>
 * @method void setDedicatedClusterId(string $DedicatedClusterId) 设置<p>专属集群ID</p>
 * @method boolean getDeletionProtection() 获取<p>实例是否开启删除保护: true-开启删除保护；false-关闭删除保护。</p>
 * @method void setDeletionProtection(boolean $DeletionProtection) 设置<p>实例是否开启删除保护: true-开启删除保护；false-关闭删除保护。</p>
 */
class CreateReadOnlyDBInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>实例所属主可用区， 如：ap-guangzhou-3；<br>可用区信息可以通过调用 <a href="https://cloud.tencent.com/document/api/409/16769">DescribeZones</a> 接口的返回值中的Zone字段来获取。</p>
     */
    public $Zone;

    /**
     * @var string <p>只读实例的主实例ID。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
     */
    public $MasterDBInstanceId;

    /**
     * @var string <p>售卖规格码。该参数可以通过调用<a href="https://cloud.tencent.com/document/api/409/89019">DescribeClasses</a>的返回值中的SpecCode字段来获取。</p>
     */
    public $SpecCode;

    /**
     * @var integer <p>实例硬盘容量大小，单位：GB。该参数的设置步长为10。</p>
     */
    public $Storage;

    /**
     * @var integer <p>购买实例数量，取值范围：[1-6]。购买支持最大数量6个。</p>
     */
    public $InstanceCount;

    /**
     * @var integer <p>购买时长，单位：月。</p><li>预付费：支持1,2,3,4,5,6,7,8,9,10,11,12,24,36</li><li>后付费：只支持1</li>
     */
    public $Period;

    /**
     * @var string <p>私有网络ID，形如vpc-xxxxxxxx（该参数当前必传）。有效的VpcId可通过登录控制台查询；也可以调用接口 <a href="https://cloud.tencent.com/document/api/215/1372">DescribeVpcEx</a> ，从接口返回中的unVpcId字段获取。</p>
     */
    public $VpcId;

    /**
     * @var string <p>私有网络子网ID，形如subnet-xxxxxxxx（该参数当前必传）。有效的私有网络子网ID可通过登录控制台查询；也可以调用接口 <a href="https://cloud.tencent.com/document/api/215/15784">DescribeSubnets </a>，从接口返回中的unSubnetId字段获取。</p>
     */
    public $SubnetId;

    /**
     * @var string <p>实例计费类型，目前支持：</p><li>PREPAID：预付费，即包年包月。</li><li>POSTPAID_BY_HOUR：后付费，即按量计费。</li>默认值：PREPAID。如果主实例为后付费，只读实例必须也为后付费。
     */
    public $InstanceChargeType;

    /**
     * @var integer <p>是否自动使用代金券：</p><li>0：否</li><li>1：是</li>默认值：0
     */
    public $AutoVoucher;

    /**
     * @var array <p>代金券ID列表，目前仅支持指定一张代金券。</p>
     */
    public $VoucherIds;

    /**
     * @var integer <p>续费标记：</p><li>0：手动续费</li><li>1：自动续费</li>默认值：0
     */
    public $AutoRenewFlag;

    /**
     * @var integer <p>项目ID。默认值为0，表示归属默认项目。</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>优惠活动ID</p>
     */
    public $ActivityId;

    /**
     * @var string <p>只读组ID。</p>
     */
    public $ReadOnlyGroupId;

    /**
     * @var Tag <p>实例需要绑定的Tag信息，默认为空；可以通过调用 <a href="https://cloud.tencent.com/document/api/651/35316">DescribeTags</a> 返回值中的 Tags 字段来获取。</p>
     */
    public $TagList;

    /**
     * @var array <p>实例所属安全组，该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。</p>
     */
    public $SecurityGroupIds;

    /**
     * @var integer <p>是否需要支持Ipv6：</p><li>0：否</li><li>1：是</li>默认值：0
     */
    public $NeedSupportIpv6;

    /**
     * @var string <p>实例名。仅支持长度小于60的中文/英文/数字/&quot;_&quot;/&quot;-&quot;</p>
     */
    public $Name;

    /**
     * @var string <p>不再需要指定，内核版本号与主实例保持一致</p>
     * @deprecated
     */
    public $DBVersion;

    /**
     * @var string <p>专属集群ID</p>
     */
    public $DedicatedClusterId;

    /**
     * @var boolean <p>实例是否开启删除保护: true-开启删除保护；false-关闭删除保护。</p>
     */
    public $DeletionProtection;

    /**
     * @param string $Zone <p>实例所属主可用区， 如：ap-guangzhou-3；<br>可用区信息可以通过调用 <a href="https://cloud.tencent.com/document/api/409/16769">DescribeZones</a> 接口的返回值中的Zone字段来获取。</p>
     * @param string $MasterDBInstanceId <p>只读实例的主实例ID。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
     * @param string $SpecCode <p>售卖规格码。该参数可以通过调用<a href="https://cloud.tencent.com/document/api/409/89019">DescribeClasses</a>的返回值中的SpecCode字段来获取。</p>
     * @param integer $Storage <p>实例硬盘容量大小，单位：GB。该参数的设置步长为10。</p>
     * @param integer $InstanceCount <p>购买实例数量，取值范围：[1-6]。购买支持最大数量6个。</p>
     * @param integer $Period <p>购买时长，单位：月。</p><li>预付费：支持1,2,3,4,5,6,7,8,9,10,11,12,24,36</li><li>后付费：只支持1</li>
     * @param string $VpcId <p>私有网络ID，形如vpc-xxxxxxxx（该参数当前必传）。有效的VpcId可通过登录控制台查询；也可以调用接口 <a href="https://cloud.tencent.com/document/api/215/1372">DescribeVpcEx</a> ，从接口返回中的unVpcId字段获取。</p>
     * @param string $SubnetId <p>私有网络子网ID，形如subnet-xxxxxxxx（该参数当前必传）。有效的私有网络子网ID可通过登录控制台查询；也可以调用接口 <a href="https://cloud.tencent.com/document/api/215/15784">DescribeSubnets </a>，从接口返回中的unSubnetId字段获取。</p>
     * @param string $InstanceChargeType <p>实例计费类型，目前支持：</p><li>PREPAID：预付费，即包年包月。</li><li>POSTPAID_BY_HOUR：后付费，即按量计费。</li>默认值：PREPAID。如果主实例为后付费，只读实例必须也为后付费。
     * @param integer $AutoVoucher <p>是否自动使用代金券：</p><li>0：否</li><li>1：是</li>默认值：0
     * @param array $VoucherIds <p>代金券ID列表，目前仅支持指定一张代金券。</p>
     * @param integer $AutoRenewFlag <p>续费标记：</p><li>0：手动续费</li><li>1：自动续费</li>默认值：0
     * @param integer $ProjectId <p>项目ID。默认值为0，表示归属默认项目。</p>
     * @param integer $ActivityId <p>优惠活动ID</p>
     * @param string $ReadOnlyGroupId <p>只读组ID。</p>
     * @param Tag $TagList <p>实例需要绑定的Tag信息，默认为空；可以通过调用 <a href="https://cloud.tencent.com/document/api/651/35316">DescribeTags</a> 返回值中的 Tags 字段来获取。</p>
     * @param array $SecurityGroupIds <p>实例所属安全组，该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。</p>
     * @param integer $NeedSupportIpv6 <p>是否需要支持Ipv6：</p><li>0：否</li><li>1：是</li>默认值：0
     * @param string $Name <p>实例名。仅支持长度小于60的中文/英文/数字/&quot;_&quot;/&quot;-&quot;</p>
     * @param string $DBVersion <p>不再需要指定，内核版本号与主实例保持一致</p>
     * @param string $DedicatedClusterId <p>专属集群ID</p>
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
