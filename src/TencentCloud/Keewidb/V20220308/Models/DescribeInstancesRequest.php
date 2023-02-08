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
namespace TencentCloud\Keewidb\V20220308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstances请求参数结构体
 *
 * @method integer getLimit() 获取每页输出的实例列表的大小，即每页输出的实例数量，默认值20，取值范围为[1,1000]。
 * @method void setLimit(integer $Limit) 设置每页输出的实例列表的大小，即每页输出的实例数量，默认值20，取值范围为[1,1000]。
 * @method integer getOffset() 获取分页偏移量，取Limit整数倍。
计算公式为offset=limit*(页码-1)。例如 limit=10，第1页offset就为0，第2页offset就为10，依次类推。
 * @method void setOffset(integer $Offset) 设置分页偏移量，取Limit整数倍。
计算公式为offset=limit*(页码-1)。例如 limit=10，第1页offset就为0，第2页offset就为10，依次类推。
 * @method string getInstanceId() 获取实例 ID，如：kee-6ubh****。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，如：kee-6ubh****。
 * @method string getOrderBy() 获取排序依据。枚举范围如下所示。 <ul><li>projectId：实例按照项目ID排序。</li><li>createtime：实例按照创建时间排序。</li><li>instancename：实例按照实例名称排序。</li><li>type：实例按照类型排序。</li><li>curDeadline：实例按照到期时间排序。</li></ul>
 * @method void setOrderBy(string $OrderBy) 设置排序依据。枚举范围如下所示。 <ul><li>projectId：实例按照项目ID排序。</li><li>createtime：实例按照创建时间排序。</li><li>instancename：实例按照实例名称排序。</li><li>type：实例按照类型排序。</li><li>curDeadline：实例按照到期时间排序。</li></ul>
 * @method integer getOrderType() 获取排序方式。<ul><li>1：倒序。默认为倒序。</li><li>0：顺序。</li></ul>
 * @method void setOrderType(integer $OrderType) 设置排序方式。<ul><li>1：倒序。默认为倒序。</li><li>0：顺序。</li></ul>
 * @method array getVpcIds() 获取私有网络ID数组。数组下标从0开始，如果不传则默认选择基础网络，如：47525
 * @method void setVpcIds(array $VpcIds) 设置私有网络ID数组。数组下标从0开始，如果不传则默认选择基础网络，如：47525
 * @method array getSubnetIds() 获取子网ID数组，数组下标从0开始，如：56854
 * @method void setSubnetIds(array $SubnetIds) 设置子网ID数组，数组下标从0开始，如：56854
 * @method array getProjectIds() 获取项目ID 组成的数组，数组下标从0开始
 * @method void setProjectIds(array $ProjectIds) 设置项目ID 组成的数组，数组下标从0开始
 * @method string getSearchKey() 获取查找关键字，可输入实例的ID或者实例名称。
 * @method void setSearchKey(string $SearchKey) 设置查找关键字，可输入实例的ID或者实例名称。
 * @method string getInstanceName() 获取实例名称。
 * @method void setInstanceName(string $InstanceName) 设置实例名称。
 * @method array getUniqVpcIds() 获取私有网络ID数组，数组下标从0开始，如果不传则默认选择基础网络，如：vpc-sad23jfdfk
 * @method void setUniqVpcIds(array $UniqVpcIds) 设置私有网络ID数组，数组下标从0开始，如果不传则默认选择基础网络，如：vpc-sad23jfdfk
 * @method array getUniqSubnetIds() 获取子网ID数组，数组下标从0开始，如：subnet-fdj24n34j2
 * @method void setUniqSubnetIds(array $UniqSubnetIds) 设置子网ID数组，数组下标从0开始，如：subnet-fdj24n34j2
 * @method array getStatus() 获取实例状态。<ul><li>0：待初始化。</li><li>1：流程中。</li><li>2：运行中。</li><li>-2：已隔离。</li><li>-3：待删除。</li></ul>
 * @method void setStatus(array $Status) 设置实例状态。<ul><li>0：待初始化。</li><li>1：流程中。</li><li>2：运行中。</li><li>-2：已隔离。</li><li>-3：待删除。</li></ul>
 * @method array getAutoRenew() 获取包年包月计费的续费模式。<ul><li>0：默认状态，指手动续费。</li><li>1：自动续费。</li><li>2：到期不再续费。</ul>
 * @method void setAutoRenew(array $AutoRenew) 设置包年包月计费的续费模式。<ul><li>0：默认状态，指手动续费。</li><li>1：自动续费。</li><li>2：到期不再续费。</ul>
 * @method string getBillingMode() 获取计费模式。<ul><li>postpaid：按量计费。</li><li>prepaid：包年包月。</li></ul>
 * @method void setBillingMode(string $BillingMode) 设置计费模式。<ul><li>postpaid：按量计费。</li><li>prepaid：包年包月。</li></ul>
 * @method integer getType() 获取实例类型。<ul><li>13：标准版。</li><li>14：集群版。</li></ul>
 * @method void setType(integer $Type) 设置实例类型。<ul><li>13：标准版。</li><li>14：集群版。</li></ul>
 * @method array getSearchKeys() 获取搜索关键词：支持实例 ID、实例名称、私有网络IP地址。
 * @method void setSearchKeys(array $SearchKeys) 设置搜索关键词：支持实例 ID、实例名称、私有网络IP地址。
 * @method array getTypeList() 获取内部参数，用户可忽略。
 * @method void setTypeList(array $TypeList) 设置内部参数，用户可忽略。
 * @method string getMonitorVersion() 获取内部参数，用户可忽略。
 * @method void setMonitorVersion(string $MonitorVersion) 设置内部参数，用户可忽略。
 * @method InstanceTagInfo getInstanceTags() 获取根据标签的 Key 和 Value 筛选资源。该参数不配置或者数组设置为空值，则不根据标签进行过滤。
 * @method void setInstanceTags(InstanceTagInfo $InstanceTags) 设置根据标签的 Key 和 Value 筛选资源。该参数不配置或者数组设置为空值，则不根据标签进行过滤。
 * @method array getTagKeys() 获取根据标签的 Key 筛选资源，该参数不配置或者数组设置为空值，则不根据标签Key进行过滤。
 * @method void setTagKeys(array $TagKeys) 设置根据标签的 Key 筛选资源，该参数不配置或者数组设置为空值，则不根据标签Key进行过滤。
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var integer 每页输出的实例列表的大小，即每页输出的实例数量，默认值20，取值范围为[1,1000]。
     */
    public $Limit;

    /**
     * @var integer 分页偏移量，取Limit整数倍。
计算公式为offset=limit*(页码-1)。例如 limit=10，第1页offset就为0，第2页offset就为10，依次类推。
     */
    public $Offset;

    /**
     * @var string 实例 ID，如：kee-6ubh****。
     */
    public $InstanceId;

    /**
     * @var string 排序依据。枚举范围如下所示。 <ul><li>projectId：实例按照项目ID排序。</li><li>createtime：实例按照创建时间排序。</li><li>instancename：实例按照实例名称排序。</li><li>type：实例按照类型排序。</li><li>curDeadline：实例按照到期时间排序。</li></ul>
     */
    public $OrderBy;

    /**
     * @var integer 排序方式。<ul><li>1：倒序。默认为倒序。</li><li>0：顺序。</li></ul>
     */
    public $OrderType;

    /**
     * @var array 私有网络ID数组。数组下标从0开始，如果不传则默认选择基础网络，如：47525
     */
    public $VpcIds;

    /**
     * @var array 子网ID数组，数组下标从0开始，如：56854
     */
    public $SubnetIds;

    /**
     * @var array 项目ID 组成的数组，数组下标从0开始
     */
    public $ProjectIds;

    /**
     * @var string 查找关键字，可输入实例的ID或者实例名称。
     */
    public $SearchKey;

    /**
     * @var string 实例名称。
     */
    public $InstanceName;

    /**
     * @var array 私有网络ID数组，数组下标从0开始，如果不传则默认选择基础网络，如：vpc-sad23jfdfk
     */
    public $UniqVpcIds;

    /**
     * @var array 子网ID数组，数组下标从0开始，如：subnet-fdj24n34j2
     */
    public $UniqSubnetIds;

    /**
     * @var array 实例状态。<ul><li>0：待初始化。</li><li>1：流程中。</li><li>2：运行中。</li><li>-2：已隔离。</li><li>-3：待删除。</li></ul>
     */
    public $Status;

    /**
     * @var array 包年包月计费的续费模式。<ul><li>0：默认状态，指手动续费。</li><li>1：自动续费。</li><li>2：到期不再续费。</ul>
     */
    public $AutoRenew;

    /**
     * @var string 计费模式。<ul><li>postpaid：按量计费。</li><li>prepaid：包年包月。</li></ul>
     */
    public $BillingMode;

    /**
     * @var integer 实例类型。<ul><li>13：标准版。</li><li>14：集群版。</li></ul>
     */
    public $Type;

    /**
     * @var array 搜索关键词：支持实例 ID、实例名称、私有网络IP地址。
     */
    public $SearchKeys;

    /**
     * @var array 内部参数，用户可忽略。
     */
    public $TypeList;

    /**
     * @var string 内部参数，用户可忽略。
     */
    public $MonitorVersion;

    /**
     * @var InstanceTagInfo 根据标签的 Key 和 Value 筛选资源。该参数不配置或者数组设置为空值，则不根据标签进行过滤。
     */
    public $InstanceTags;

    /**
     * @var array 根据标签的 Key 筛选资源，该参数不配置或者数组设置为空值，则不根据标签Key进行过滤。
     */
    public $TagKeys;

    /**
     * @param integer $Limit 每页输出的实例列表的大小，即每页输出的实例数量，默认值20，取值范围为[1,1000]。
     * @param integer $Offset 分页偏移量，取Limit整数倍。
计算公式为offset=limit*(页码-1)。例如 limit=10，第1页offset就为0，第2页offset就为10，依次类推。
     * @param string $InstanceId 实例 ID，如：kee-6ubh****。
     * @param string $OrderBy 排序依据。枚举范围如下所示。 <ul><li>projectId：实例按照项目ID排序。</li><li>createtime：实例按照创建时间排序。</li><li>instancename：实例按照实例名称排序。</li><li>type：实例按照类型排序。</li><li>curDeadline：实例按照到期时间排序。</li></ul>
     * @param integer $OrderType 排序方式。<ul><li>1：倒序。默认为倒序。</li><li>0：顺序。</li></ul>
     * @param array $VpcIds 私有网络ID数组。数组下标从0开始，如果不传则默认选择基础网络，如：47525
     * @param array $SubnetIds 子网ID数组，数组下标从0开始，如：56854
     * @param array $ProjectIds 项目ID 组成的数组，数组下标从0开始
     * @param string $SearchKey 查找关键字，可输入实例的ID或者实例名称。
     * @param string $InstanceName 实例名称。
     * @param array $UniqVpcIds 私有网络ID数组，数组下标从0开始，如果不传则默认选择基础网络，如：vpc-sad23jfdfk
     * @param array $UniqSubnetIds 子网ID数组，数组下标从0开始，如：subnet-fdj24n34j2
     * @param array $Status 实例状态。<ul><li>0：待初始化。</li><li>1：流程中。</li><li>2：运行中。</li><li>-2：已隔离。</li><li>-3：待删除。</li></ul>
     * @param array $AutoRenew 包年包月计费的续费模式。<ul><li>0：默认状态，指手动续费。</li><li>1：自动续费。</li><li>2：到期不再续费。</ul>
     * @param string $BillingMode 计费模式。<ul><li>postpaid：按量计费。</li><li>prepaid：包年包月。</li></ul>
     * @param integer $Type 实例类型。<ul><li>13：标准版。</li><li>14：集群版。</li></ul>
     * @param array $SearchKeys 搜索关键词：支持实例 ID、实例名称、私有网络IP地址。
     * @param array $TypeList 内部参数，用户可忽略。
     * @param string $MonitorVersion 内部参数，用户可忽略。
     * @param InstanceTagInfo $InstanceTags 根据标签的 Key 和 Value 筛选资源。该参数不配置或者数组设置为空值，则不根据标签进行过滤。
     * @param array $TagKeys 根据标签的 Key 筛选资源，该参数不配置或者数组设置为空值，则不根据标签Key进行过滤。
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("VpcIds",$param) and $param["VpcIds"] !== null) {
            $this->VpcIds = $param["VpcIds"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("UniqVpcIds",$param) and $param["UniqVpcIds"] !== null) {
            $this->UniqVpcIds = $param["UniqVpcIds"];
        }

        if (array_key_exists("UniqSubnetIds",$param) and $param["UniqSubnetIds"] !== null) {
            $this->UniqSubnetIds = $param["UniqSubnetIds"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("BillingMode",$param) and $param["BillingMode"] !== null) {
            $this->BillingMode = $param["BillingMode"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SearchKeys",$param) and $param["SearchKeys"] !== null) {
            $this->SearchKeys = $param["SearchKeys"];
        }

        if (array_key_exists("TypeList",$param) and $param["TypeList"] !== null) {
            $this->TypeList = $param["TypeList"];
        }

        if (array_key_exists("MonitorVersion",$param) and $param["MonitorVersion"] !== null) {
            $this->MonitorVersion = $param["MonitorVersion"];
        }

        if (array_key_exists("InstanceTags",$param) and $param["InstanceTags"] !== null) {
            $this->InstanceTags = new InstanceTagInfo();
            $this->InstanceTags->deserialize($param["InstanceTags"]);
        }

        if (array_key_exists("TagKeys",$param) and $param["TagKeys"] !== null) {
            $this->TagKeys = $param["TagKeys"];
        }
    }
}
