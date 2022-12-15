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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstances请求参数结构体
 *
 * @method integer getLimit() 获取每页输出实例的数量，参数默认值20，最大值为1000。
 * @method void setLimit(integer $Limit) 设置每页输出实例的数量，参数默认值20，最大值为1000。
 * @method integer getOffset() 获取分页偏移量，取Limit整数倍。
 * @method void setOffset(integer $Offset) 设置分页偏移量，取Limit整数倍。
 * @method string getInstanceId() 获取实例 ID，如：crs-6ubhgouj。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，如：crs-6ubhgouj。
 * @method string getOrderBy() 获取实例排序依据，枚举值如下所示：<ul><li>projectId：项目ID。</li><li>createtime：实例创建时间。</li><li>instancename：实例名称。</li><li>type：实例类型。</li><li>curDeadline：实例到期时间。</li></ul>
 * @method void setOrderBy(string $OrderBy) 设置实例排序依据，枚举值如下所示：<ul><li>projectId：项目ID。</li><li>createtime：实例创建时间。</li><li>instancename：实例名称。</li><li>type：实例类型。</li><li>curDeadline：实例到期时间。</li></ul>
 * @method integer getOrderType() 获取实例排序方式，默认为倒序排序。<ul><li>1：倒序。</li><li>0：顺序。</li></ul>
 * @method void setOrderType(integer $OrderType) 设置实例排序方式，默认为倒序排序。<ul><li>1：倒序。</li><li>0：顺序。</li></ul>
 * @method array getVpcIds() 获取私有网络 ID 数组。如果不配置该参数或设置数组为空则默认选择基础网络。例如47525。该参数暂时保留，可忽略。请根据 UniqVpcIds 参数格式设置私有网络ID数组。
 * @method void setVpcIds(array $VpcIds) 设置私有网络 ID 数组。如果不配置该参数或设置数组为空则默认选择基础网络。例如47525。该参数暂时保留，可忽略。请根据 UniqVpcIds 参数格式设置私有网络ID数组。
 * @method array getSubnetIds() 获取私有网络所属子网 ID 数组，例如：56854。该参数暂时保留，可忽略。请根据 UniqSubnetIds 参数格式设置私有网络子网 ID 数组。
 * @method void setSubnetIds(array $SubnetIds) 设置私有网络所属子网 ID 数组，例如：56854。该参数暂时保留，可忽略。请根据 UniqSubnetIds 参数格式设置私有网络子网 ID 数组。
 * @method string getSearchKey() 获取设置模糊查询关键字，支持根据实例名称或实例ID模糊查询实例。
 * @method void setSearchKey(string $SearchKey) 设置设置模糊查询关键字，支持根据实例名称或实例ID模糊查询实例。
 * @method array getProjectIds() 获取项目 ID 组成的数组。
 * @method void setProjectIds(array $ProjectIds) 设置项目 ID 组成的数组。
 * @method string getInstanceName() 获取实例名称。
 * @method void setInstanceName(string $InstanceName) 设置实例名称。
 * @method array getUniqVpcIds() 获取私有网络 ID 数组。如果不配置该参数或者设置数组为空则默认选择基础网络，如：vpc-sad23jfdfk。
 * @method void setUniqVpcIds(array $UniqVpcIds) 设置私有网络 ID 数组。如果不配置该参数或者设置数组为空则默认选择基础网络，如：vpc-sad23jfdfk。
 * @method array getUniqSubnetIds() 获取私有网络所属子网 ID 数组，如：subnet-fdj24n34j2。
 * @method void setUniqSubnetIds(array $UniqSubnetIds) 设置私有网络所属子网 ID 数组，如：subnet-fdj24n34j2。
 * @method array getRegionIds() 获取地域 ID 数组，该参数已经弃用，可通过公共参数Region查询对应地域。
 * @method void setRegionIds(array $RegionIds) 设置地域 ID 数组，该参数已经弃用，可通过公共参数Region查询对应地域。
 * @method array getStatus() 获取实例状态。<ul><li>0：待初始化。</li><li>1：流程中。</li><li>2：运行中。</li><li>-2：已隔离。</li><li>-3：待删除。</li></ul>
 * @method void setStatus(array $Status) 设置实例状态。<ul><li>0：待初始化。</li><li>1：流程中。</li><li>2：运行中。</li><li>-2：已隔离。</li><li>-3：待删除。</li></ul>
 * @method integer getTypeVersion() 获取实例架构版本。<ul><li>1：单机版。</li><li>2：主从版。</li><li>3：集群版。</li></ul>
 * @method void setTypeVersion(integer $TypeVersion) 设置实例架构版本。<ul><li>1：单机版。</li><li>2：主从版。</li><li>3：集群版。</li></ul>
 * @method string getEngineName() 获取存储引擎信息。可设置为Redis-2.8、Redis-4.0、Redis-5.0、Redis-6.0 或者 CKV。
 * @method void setEngineName(string $EngineName) 设置存储引擎信息。可设置为Redis-2.8、Redis-4.0、Redis-5.0、Redis-6.0 或者 CKV。
 * @method array getAutoRenew() 获取续费模式。<ul><li>0：默认状态（手动续费）。</li><li>1：自动续费。</li><li>2：明确不自动续费。</ul>
 * @method void setAutoRenew(array $AutoRenew) 设置续费模式。<ul><li>0：默认状态（手动续费）。</li><li>1：自动续费。</li><li>2：明确不自动续费。</ul>
 * @method string getBillingMode() 获取计费模式。<ul><li>postpaid：按量计费。</li><li>prepaid：包年包月。</li></ul>
 * @method void setBillingMode(string $BillingMode) 设置计费模式。<ul><li>postpaid：按量计费。</li><li>prepaid：包年包月。</li></ul>
 * @method integer getType() 获取实例类型。<ul><li>1：Redis 老集群版。</li><li>2：Redis 2.8 主从版。</li><li>3：CKV 主从版。</li><li>4：CKV 集群版。</li><li>5：Redis 2.8 单机版。</li><li>6：Redis 4.0主从版。</li><li>7：Redis 4.0 集群版。</li><li>8：Redis 5.0 主从版。</li><li>9：Redis 5.0 集群版。</li></ul>
 * @method void setType(integer $Type) 设置实例类型。<ul><li>1：Redis 老集群版。</li><li>2：Redis 2.8 主从版。</li><li>3：CKV 主从版。</li><li>4：CKV 集群版。</li><li>5：Redis 2.8 单机版。</li><li>6：Redis 4.0主从版。</li><li>7：Redis 4.0 集群版。</li><li>8：Redis 5.0 主从版。</li><li>9：Redis 5.0 集群版。</li></ul>
 * @method array getSearchKeys() 获取设置搜索关键字数组，可根据实例ID、实例名称、完整IP地址查询实例。
 * @method void setSearchKeys(array $SearchKeys) 设置设置搜索关键字数组，可根据实例ID、实例名称、完整IP地址查询实例。
 * @method array getTypeList() 获取内部参数，用户可忽略。
 * @method void setTypeList(array $TypeList) 设置内部参数，用户可忽略。
 * @method string getMonitorVersion() 获取内部参数，用户可忽略。
 * @method void setMonitorVersion(string $MonitorVersion) 设置内部参数，用户可忽略。
 * @method array getInstanceTags() 获取根据标签的 Key 和 Value 筛选资源。该参数不配置或者数组设置为空值，则不根据标签进行过滤。
 * @method void setInstanceTags(array $InstanceTags) 设置根据标签的 Key 和 Value 筛选资源。该参数不配置或者数组设置为空值，则不根据标签进行过滤。
 * @method array getTagKeys() 获取根据标签的 Key 筛选资源，该参数不配置或者数组设置为空值，则不根据标签Key进行过滤。
 * @method void setTagKeys(array $TagKeys) 设置根据标签的 Key 筛选资源，该参数不配置或者数组设置为空值，则不根据标签Key进行过滤。
 * @method array getProductVersions() 获取实例的产品版本。如果该参数不配置或者数组设置为空值，则默认不依据此参数过滤实例。<ul><li>local：本地盘版。</li><li>cloud：云盘版。</li><li>cdc：独享集群版。</li></ul>
 * @method void setProductVersions(array $ProductVersions) 设置实例的产品版本。如果该参数不配置或者数组设置为空值，则默认不依据此参数过滤实例。<ul><li>local：本地盘版。</li><li>cloud：云盘版。</li><li>cdc：独享集群版。</li></ul>
 * @method array getInstanceIds() 获取批量查询指定的实例 ID，返回结果已 Limit 限制为主。
 * @method void setInstanceIds(array $InstanceIds) 设置批量查询指定的实例 ID，返回结果已 Limit 限制为主。
 * @method string getAzMode() 获取可用区模式。<ul><li>singleaz：单可用区。</li><li>multiaz：多可用区。</li></ul>
 * @method void setAzMode(string $AzMode) 设置可用区模式。<ul><li>singleaz：单可用区。</li><li>multiaz：多可用区。</li></ul>
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var integer 每页输出实例的数量，参数默认值20，最大值为1000。
     */
    public $Limit;

    /**
     * @var integer 分页偏移量，取Limit整数倍。
     */
    public $Offset;

    /**
     * @var string 实例 ID，如：crs-6ubhgouj。
     */
    public $InstanceId;

    /**
     * @var string 实例排序依据，枚举值如下所示：<ul><li>projectId：项目ID。</li><li>createtime：实例创建时间。</li><li>instancename：实例名称。</li><li>type：实例类型。</li><li>curDeadline：实例到期时间。</li></ul>
     */
    public $OrderBy;

    /**
     * @var integer 实例排序方式，默认为倒序排序。<ul><li>1：倒序。</li><li>0：顺序。</li></ul>
     */
    public $OrderType;

    /**
     * @var array 私有网络 ID 数组。如果不配置该参数或设置数组为空则默认选择基础网络。例如47525。该参数暂时保留，可忽略。请根据 UniqVpcIds 参数格式设置私有网络ID数组。
     */
    public $VpcIds;

    /**
     * @var array 私有网络所属子网 ID 数组，例如：56854。该参数暂时保留，可忽略。请根据 UniqSubnetIds 参数格式设置私有网络子网 ID 数组。
     */
    public $SubnetIds;

    /**
     * @var string 设置模糊查询关键字，支持根据实例名称或实例ID模糊查询实例。
     */
    public $SearchKey;

    /**
     * @var array 项目 ID 组成的数组。
     */
    public $ProjectIds;

    /**
     * @var string 实例名称。
     */
    public $InstanceName;

    /**
     * @var array 私有网络 ID 数组。如果不配置该参数或者设置数组为空则默认选择基础网络，如：vpc-sad23jfdfk。
     */
    public $UniqVpcIds;

    /**
     * @var array 私有网络所属子网 ID 数组，如：subnet-fdj24n34j2。
     */
    public $UniqSubnetIds;

    /**
     * @var array 地域 ID 数组，该参数已经弃用，可通过公共参数Region查询对应地域。
     */
    public $RegionIds;

    /**
     * @var array 实例状态。<ul><li>0：待初始化。</li><li>1：流程中。</li><li>2：运行中。</li><li>-2：已隔离。</li><li>-3：待删除。</li></ul>
     */
    public $Status;

    /**
     * @var integer 实例架构版本。<ul><li>1：单机版。</li><li>2：主从版。</li><li>3：集群版。</li></ul>
     */
    public $TypeVersion;

    /**
     * @var string 存储引擎信息。可设置为Redis-2.8、Redis-4.0、Redis-5.0、Redis-6.0 或者 CKV。
     */
    public $EngineName;

    /**
     * @var array 续费模式。<ul><li>0：默认状态（手动续费）。</li><li>1：自动续费。</li><li>2：明确不自动续费。</ul>
     */
    public $AutoRenew;

    /**
     * @var string 计费模式。<ul><li>postpaid：按量计费。</li><li>prepaid：包年包月。</li></ul>
     */
    public $BillingMode;

    /**
     * @var integer 实例类型。<ul><li>1：Redis 老集群版。</li><li>2：Redis 2.8 主从版。</li><li>3：CKV 主从版。</li><li>4：CKV 集群版。</li><li>5：Redis 2.8 单机版。</li><li>6：Redis 4.0主从版。</li><li>7：Redis 4.0 集群版。</li><li>8：Redis 5.0 主从版。</li><li>9：Redis 5.0 集群版。</li></ul>
     */
    public $Type;

    /**
     * @var array 设置搜索关键字数组，可根据实例ID、实例名称、完整IP地址查询实例。
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
     * @var array 根据标签的 Key 和 Value 筛选资源。该参数不配置或者数组设置为空值，则不根据标签进行过滤。
     */
    public $InstanceTags;

    /**
     * @var array 根据标签的 Key 筛选资源，该参数不配置或者数组设置为空值，则不根据标签Key进行过滤。
     */
    public $TagKeys;

    /**
     * @var array 实例的产品版本。如果该参数不配置或者数组设置为空值，则默认不依据此参数过滤实例。<ul><li>local：本地盘版。</li><li>cloud：云盘版。</li><li>cdc：独享集群版。</li></ul>
     */
    public $ProductVersions;

    /**
     * @var array 批量查询指定的实例 ID，返回结果已 Limit 限制为主。
     */
    public $InstanceIds;

    /**
     * @var string 可用区模式。<ul><li>singleaz：单可用区。</li><li>multiaz：多可用区。</li></ul>
     */
    public $AzMode;

    /**
     * @param integer $Limit 每页输出实例的数量，参数默认值20，最大值为1000。
     * @param integer $Offset 分页偏移量，取Limit整数倍。
     * @param string $InstanceId 实例 ID，如：crs-6ubhgouj。
     * @param string $OrderBy 实例排序依据，枚举值如下所示：<ul><li>projectId：项目ID。</li><li>createtime：实例创建时间。</li><li>instancename：实例名称。</li><li>type：实例类型。</li><li>curDeadline：实例到期时间。</li></ul>
     * @param integer $OrderType 实例排序方式，默认为倒序排序。<ul><li>1：倒序。</li><li>0：顺序。</li></ul>
     * @param array $VpcIds 私有网络 ID 数组。如果不配置该参数或设置数组为空则默认选择基础网络。例如47525。该参数暂时保留，可忽略。请根据 UniqVpcIds 参数格式设置私有网络ID数组。
     * @param array $SubnetIds 私有网络所属子网 ID 数组，例如：56854。该参数暂时保留，可忽略。请根据 UniqSubnetIds 参数格式设置私有网络子网 ID 数组。
     * @param string $SearchKey 设置模糊查询关键字，支持根据实例名称或实例ID模糊查询实例。
     * @param array $ProjectIds 项目 ID 组成的数组。
     * @param string $InstanceName 实例名称。
     * @param array $UniqVpcIds 私有网络 ID 数组。如果不配置该参数或者设置数组为空则默认选择基础网络，如：vpc-sad23jfdfk。
     * @param array $UniqSubnetIds 私有网络所属子网 ID 数组，如：subnet-fdj24n34j2。
     * @param array $RegionIds 地域 ID 数组，该参数已经弃用，可通过公共参数Region查询对应地域。
     * @param array $Status 实例状态。<ul><li>0：待初始化。</li><li>1：流程中。</li><li>2：运行中。</li><li>-2：已隔离。</li><li>-3：待删除。</li></ul>
     * @param integer $TypeVersion 实例架构版本。<ul><li>1：单机版。</li><li>2：主从版。</li><li>3：集群版。</li></ul>
     * @param string $EngineName 存储引擎信息。可设置为Redis-2.8、Redis-4.0、Redis-5.0、Redis-6.0 或者 CKV。
     * @param array $AutoRenew 续费模式。<ul><li>0：默认状态（手动续费）。</li><li>1：自动续费。</li><li>2：明确不自动续费。</ul>
     * @param string $BillingMode 计费模式。<ul><li>postpaid：按量计费。</li><li>prepaid：包年包月。</li></ul>
     * @param integer $Type 实例类型。<ul><li>1：Redis 老集群版。</li><li>2：Redis 2.8 主从版。</li><li>3：CKV 主从版。</li><li>4：CKV 集群版。</li><li>5：Redis 2.8 单机版。</li><li>6：Redis 4.0主从版。</li><li>7：Redis 4.0 集群版。</li><li>8：Redis 5.0 主从版。</li><li>9：Redis 5.0 集群版。</li></ul>
     * @param array $SearchKeys 设置搜索关键字数组，可根据实例ID、实例名称、完整IP地址查询实例。
     * @param array $TypeList 内部参数，用户可忽略。
     * @param string $MonitorVersion 内部参数，用户可忽略。
     * @param array $InstanceTags 根据标签的 Key 和 Value 筛选资源。该参数不配置或者数组设置为空值，则不根据标签进行过滤。
     * @param array $TagKeys 根据标签的 Key 筛选资源，该参数不配置或者数组设置为空值，则不根据标签Key进行过滤。
     * @param array $ProductVersions 实例的产品版本。如果该参数不配置或者数组设置为空值，则默认不依据此参数过滤实例。<ul><li>local：本地盘版。</li><li>cloud：云盘版。</li><li>cdc：独享集群版。</li></ul>
     * @param array $InstanceIds 批量查询指定的实例 ID，返回结果已 Limit 限制为主。
     * @param string $AzMode 可用区模式。<ul><li>singleaz：单可用区。</li><li>multiaz：多可用区。</li></ul>
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

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
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

        if (array_key_exists("RegionIds",$param) and $param["RegionIds"] !== null) {
            $this->RegionIds = $param["RegionIds"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TypeVersion",$param) and $param["TypeVersion"] !== null) {
            $this->TypeVersion = $param["TypeVersion"];
        }

        if (array_key_exists("EngineName",$param) and $param["EngineName"] !== null) {
            $this->EngineName = $param["EngineName"];
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
            $this->InstanceTags = [];
            foreach ($param["InstanceTags"] as $key => $value){
                $obj = new InstanceTagInfo();
                $obj->deserialize($value);
                array_push($this->InstanceTags, $obj);
            }
        }

        if (array_key_exists("TagKeys",$param) and $param["TagKeys"] !== null) {
            $this->TagKeys = $param["TagKeys"];
        }

        if (array_key_exists("ProductVersions",$param) and $param["ProductVersions"] !== null) {
            $this->ProductVersions = $param["ProductVersions"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("AzMode",$param) and $param["AzMode"] !== null) {
            $this->AzMode = $param["AzMode"];
        }
    }
}
