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
namespace TencentCloud\Keewidb\V20220308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstances请求参数结构体
 *
 * @method integer getLimit() 获取<p>每页输出的实例列表的大小，即每页输出的实例数量，默认值20，取值范围为[1,1000]。</p>
 * @method void setLimit(integer $Limit) 设置<p>每页输出的实例列表的大小，即每页输出的实例数量，默认值20，取值范围为[1,1000]。</p>
 * @method integer getOffset() 获取<p>分页偏移量，取Limit整数倍。<br>计算公式为offset=limit*(页码-1)。例如 limit=10，第1页offset就为0，第2页offset就为10，依次类推。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，取Limit整数倍。<br>计算公式为offset=limit*(页码-1)。例如 limit=10，第1页offset就为0，第2页offset就为10，依次类推。</p>
 * @method string getInstanceId() 获取<p>实例 ID，如：kee-6ubh****。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID，如：kee-6ubh****。</p>
 * @method string getOrderBy() 获取<p>排序依据。枚举范围如下所示。 <ul><li>projectId：实例按照项目ID排序。</li><li>createtime：实例按照创建时间排序。</li><li>instancename：实例按照实例名称排序。</li><li>type：实例按照类型排序。</li><li>curDeadline：实例按照到期时间排序。</li></ul></p>
 * @method void setOrderBy(string $OrderBy) 设置<p>排序依据。枚举范围如下所示。 <ul><li>projectId：实例按照项目ID排序。</li><li>createtime：实例按照创建时间排序。</li><li>instancename：实例按照实例名称排序。</li><li>type：实例按照类型排序。</li><li>curDeadline：实例按照到期时间排序。</li></ul></p>
 * @method integer getOrderType() 获取<p>排序方式。<ul><li>1：倒序。默认为倒序。</li><li>0：顺序。</li></ul></p>
 * @method void setOrderType(integer $OrderType) 设置<p>排序方式。<ul><li>1：倒序。默认为倒序。</li><li>0：顺序。</li></ul></p>
 * @method array getVpcIds() 获取<p>私有网络ID数组。数组下标从0开始，如果不传则默认选择基础网络，如：47525</p>
 * @method void setVpcIds(array $VpcIds) 设置<p>私有网络ID数组。数组下标从0开始，如果不传则默认选择基础网络，如：47525</p>
 * @method array getSubnetIds() 获取<p>子网ID数组，数组下标从0开始，如：56854</p>
 * @method void setSubnetIds(array $SubnetIds) 设置<p>子网ID数组，数组下标从0开始，如：56854</p>
 * @method array getProjectIds() 获取<p>项目ID 组成的数组，数组下标从0开始</p>
 * @method void setProjectIds(array $ProjectIds) 设置<p>项目ID 组成的数组，数组下标从0开始</p>
 * @method string getSearchKey() 获取<p>查找关键字，可输入实例的ID或者实例名称。</p>
 * @method void setSearchKey(string $SearchKey) 设置<p>查找关键字，可输入实例的ID或者实例名称。</p>
 * @method string getInstanceName() 获取<p>实例名称。</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称。</p>
 * @method array getUniqVpcIds() 获取<p>私有网络ID数组，数组下标从0开始，如果不传则默认选择基础网络，如：vpc-sad23jfdfk</p>
 * @method void setUniqVpcIds(array $UniqVpcIds) 设置<p>私有网络ID数组，数组下标从0开始，如果不传则默认选择基础网络，如：vpc-sad23jfdfk</p>
 * @method array getUniqSubnetIds() 获取<p>子网ID数组，数组下标从0开始，如：subnet-fdj24n34j2</p>
 * @method void setUniqSubnetIds(array $UniqSubnetIds) 设置<p>子网ID数组，数组下标从0开始，如：subnet-fdj24n34j2</p>
 * @method array getStatus() 获取<p>实例状态。<ul><li>0：待初始化。</li><li>1：流程中。</li><li>2：运行中。</li><li>-2：已隔离。</li><li>-3：待删除。</li></ul></p>
 * @method void setStatus(array $Status) 设置<p>实例状态。<ul><li>0：待初始化。</li><li>1：流程中。</li><li>2：运行中。</li><li>-2：已隔离。</li><li>-3：待删除。</li></ul></p>
 * @method array getAutoRenew() 获取<p>续费模式。- 0：手动续费。- 1：自动续费。- 2：到期不再续费。</p>
 * @method void setAutoRenew(array $AutoRenew) 设置<p>续费模式。- 0：手动续费。- 1：自动续费。- 2：到期不再续费。</p>
 * @method string getBillingMode() 获取<p>计费模式。<ul><li>postpaid：按量计费。</li><li>prepaid：包年包月。</li></ul></p>
 * @method void setBillingMode(string $BillingMode) 设置<p>计费模式。<ul><li>postpaid：按量计费。</li><li>prepaid：包年包月。</li></ul></p>
 * @method integer getType() 获取<p>实例类型。</p><p>枚举值：</p><ul><li>11： 存储版标准架构。</li><li>12： 存储版集群架构。</li><li>13： 极速版标准架构。</li><li>14： 极速版集群架构。</li></ul>
 * @method void setType(integer $Type) 设置<p>实例类型。</p><p>枚举值：</p><ul><li>11： 存储版标准架构。</li><li>12： 存储版集群架构。</li><li>13： 极速版标准架构。</li><li>14： 极速版集群架构。</li></ul>
 * @method array getSearchKeys() 获取<p>搜索关键词：支持实例 ID、实例名称、私有网络IP地址。</p>
 * @method void setSearchKeys(array $SearchKeys) 设置<p>搜索关键词：支持实例 ID、实例名称、私有网络IP地址。</p>
 * @method array getTypeList() 获取<p>内部参数，用户可忽略。</p>
 * @method void setTypeList(array $TypeList) 设置<p>内部参数，用户可忽略。</p>
 * @method string getMonitorVersion() 获取<p>内部参数，用户可忽略。</p>
 * @method void setMonitorVersion(string $MonitorVersion) 设置<p>内部参数，用户可忽略。</p>
 * @method InstanceTagInfo getInstanceTags() 获取<p>废弃字段。请使用TagList传参。</p>
 * @method void setInstanceTags(InstanceTagInfo $InstanceTags) 设置<p>废弃字段。请使用TagList传参。</p>
 * @method array getTagKeys() 获取<p>根据标签的 Key 筛选资源，该参数不配置或者数组设置为空值，则不根据标签Key进行过滤。</p>
 * @method void setTagKeys(array $TagKeys) 设置<p>根据标签的 Key 筛选资源，该参数不配置或者数组设置为空值，则不根据标签Key进行过滤。</p>
 * @method array getTagList() 获取<p>根据标签的 Key 和 Value 筛选资源。该参数不配置或者数组设置为空值，则不根据标签进行过滤。</p>
 * @method void setTagList(array $TagList) 设置<p>根据标签的 Key 和 Value 筛选资源。该参数不配置或者数组设置为空值，则不根据标签进行过滤。</p>
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var integer <p>每页输出的实例列表的大小，即每页输出的实例数量，默认值20，取值范围为[1,1000]。</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页偏移量，取Limit整数倍。<br>计算公式为offset=limit*(页码-1)。例如 limit=10，第1页offset就为0，第2页offset就为10，依次类推。</p>
     */
    public $Offset;

    /**
     * @var string <p>实例 ID，如：kee-6ubh****。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>排序依据。枚举范围如下所示。 <ul><li>projectId：实例按照项目ID排序。</li><li>createtime：实例按照创建时间排序。</li><li>instancename：实例按照实例名称排序。</li><li>type：实例按照类型排序。</li><li>curDeadline：实例按照到期时间排序。</li></ul></p>
     */
    public $OrderBy;

    /**
     * @var integer <p>排序方式。<ul><li>1：倒序。默认为倒序。</li><li>0：顺序。</li></ul></p>
     */
    public $OrderType;

    /**
     * @var array <p>私有网络ID数组。数组下标从0开始，如果不传则默认选择基础网络，如：47525</p>
     */
    public $VpcIds;

    /**
     * @var array <p>子网ID数组，数组下标从0开始，如：56854</p>
     */
    public $SubnetIds;

    /**
     * @var array <p>项目ID 组成的数组，数组下标从0开始</p>
     */
    public $ProjectIds;

    /**
     * @var string <p>查找关键字，可输入实例的ID或者实例名称。</p>
     */
    public $SearchKey;

    /**
     * @var string <p>实例名称。</p>
     */
    public $InstanceName;

    /**
     * @var array <p>私有网络ID数组，数组下标从0开始，如果不传则默认选择基础网络，如：vpc-sad23jfdfk</p>
     */
    public $UniqVpcIds;

    /**
     * @var array <p>子网ID数组，数组下标从0开始，如：subnet-fdj24n34j2</p>
     */
    public $UniqSubnetIds;

    /**
     * @var array <p>实例状态。<ul><li>0：待初始化。</li><li>1：流程中。</li><li>2：运行中。</li><li>-2：已隔离。</li><li>-3：待删除。</li></ul></p>
     */
    public $Status;

    /**
     * @var array <p>续费模式。- 0：手动续费。- 1：自动续费。- 2：到期不再续费。</p>
     */
    public $AutoRenew;

    /**
     * @var string <p>计费模式。<ul><li>postpaid：按量计费。</li><li>prepaid：包年包月。</li></ul></p>
     */
    public $BillingMode;

    /**
     * @var integer <p>实例类型。</p><p>枚举值：</p><ul><li>11： 存储版标准架构。</li><li>12： 存储版集群架构。</li><li>13： 极速版标准架构。</li><li>14： 极速版集群架构。</li></ul>
     */
    public $Type;

    /**
     * @var array <p>搜索关键词：支持实例 ID、实例名称、私有网络IP地址。</p>
     */
    public $SearchKeys;

    /**
     * @var array <p>内部参数，用户可忽略。</p>
     */
    public $TypeList;

    /**
     * @var string <p>内部参数，用户可忽略。</p>
     */
    public $MonitorVersion;

    /**
     * @var InstanceTagInfo <p>废弃字段。请使用TagList传参。</p>
     * @deprecated
     */
    public $InstanceTags;

    /**
     * @var array <p>根据标签的 Key 筛选资源，该参数不配置或者数组设置为空值，则不根据标签Key进行过滤。</p>
     */
    public $TagKeys;

    /**
     * @var array <p>根据标签的 Key 和 Value 筛选资源。该参数不配置或者数组设置为空值，则不根据标签进行过滤。</p>
     */
    public $TagList;

    /**
     * @param integer $Limit <p>每页输出的实例列表的大小，即每页输出的实例数量，默认值20，取值范围为[1,1000]。</p>
     * @param integer $Offset <p>分页偏移量，取Limit整数倍。<br>计算公式为offset=limit*(页码-1)。例如 limit=10，第1页offset就为0，第2页offset就为10，依次类推。</p>
     * @param string $InstanceId <p>实例 ID，如：kee-6ubh****。</p>
     * @param string $OrderBy <p>排序依据。枚举范围如下所示。 <ul><li>projectId：实例按照项目ID排序。</li><li>createtime：实例按照创建时间排序。</li><li>instancename：实例按照实例名称排序。</li><li>type：实例按照类型排序。</li><li>curDeadline：实例按照到期时间排序。</li></ul></p>
     * @param integer $OrderType <p>排序方式。<ul><li>1：倒序。默认为倒序。</li><li>0：顺序。</li></ul></p>
     * @param array $VpcIds <p>私有网络ID数组。数组下标从0开始，如果不传则默认选择基础网络，如：47525</p>
     * @param array $SubnetIds <p>子网ID数组，数组下标从0开始，如：56854</p>
     * @param array $ProjectIds <p>项目ID 组成的数组，数组下标从0开始</p>
     * @param string $SearchKey <p>查找关键字，可输入实例的ID或者实例名称。</p>
     * @param string $InstanceName <p>实例名称。</p>
     * @param array $UniqVpcIds <p>私有网络ID数组，数组下标从0开始，如果不传则默认选择基础网络，如：vpc-sad23jfdfk</p>
     * @param array $UniqSubnetIds <p>子网ID数组，数组下标从0开始，如：subnet-fdj24n34j2</p>
     * @param array $Status <p>实例状态。<ul><li>0：待初始化。</li><li>1：流程中。</li><li>2：运行中。</li><li>-2：已隔离。</li><li>-3：待删除。</li></ul></p>
     * @param array $AutoRenew <p>续费模式。- 0：手动续费。- 1：自动续费。- 2：到期不再续费。</p>
     * @param string $BillingMode <p>计费模式。<ul><li>postpaid：按量计费。</li><li>prepaid：包年包月。</li></ul></p>
     * @param integer $Type <p>实例类型。</p><p>枚举值：</p><ul><li>11： 存储版标准架构。</li><li>12： 存储版集群架构。</li><li>13： 极速版标准架构。</li><li>14： 极速版集群架构。</li></ul>
     * @param array $SearchKeys <p>搜索关键词：支持实例 ID、实例名称、私有网络IP地址。</p>
     * @param array $TypeList <p>内部参数，用户可忽略。</p>
     * @param string $MonitorVersion <p>内部参数，用户可忽略。</p>
     * @param InstanceTagInfo $InstanceTags <p>废弃字段。请使用TagList传参。</p>
     * @param array $TagKeys <p>根据标签的 Key 筛选资源，该参数不配置或者数组设置为空值，则不根据标签Key进行过滤。</p>
     * @param array $TagList <p>根据标签的 Key 和 Value 筛选资源。该参数不配置或者数组设置为空值，则不根据标签进行过滤。</p>
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

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new InstanceTagInfo();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }
    }
}
