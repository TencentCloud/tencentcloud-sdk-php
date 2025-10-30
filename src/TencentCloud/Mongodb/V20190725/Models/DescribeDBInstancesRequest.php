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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstances请求参数结构体
 *
 * @method array getInstanceIds() 获取实例 ID 列表。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
 * @method void setInstanceIds(array $InstanceIds) 设置实例 ID 列表。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
 * @method integer getInstanceType() 获取指定查询的实例类型。取值范围如下：
- 0：所有实例。
- 1：正式实例。
- 2：临时实例
- 3：只读实例。
- -1：查询同时包括正式实例、只读实例与灾备实例。
 * @method void setInstanceType(integer $InstanceType) 设置指定查询的实例类型。取值范围如下：
- 0：所有实例。
- 1：正式实例。
- 2：临时实例
- 3：只读实例。
- -1：查询同时包括正式实例、只读实例与灾备实例。
 * @method integer getClusterType() 获取指定所查询实例的集群类型，取值范围如下：
- 0：副本集实例。
- 1：分片实例。
- -1：副本集与分片实例。
 * @method void setClusterType(integer $ClusterType) 设置指定所查询实例的集群类型，取值范围如下：
- 0：副本集实例。
- 1：分片实例。
- -1：副本集与分片实例。
 * @method array getStatus() 获取指定所查询实例的当前状态，取值范围如下所示：
- 0：待初始化。
- 1：流程处理中，例如：变更规格、参数修改等。
- 2：实例正常运行中。
- -2：已隔离（包年包月）。
- -3：已隔离（按量计费）。
 * @method void setStatus(array $Status) 设置指定所查询实例的当前状态，取值范围如下所示：
- 0：待初始化。
- 1：流程处理中，例如：变更规格、参数修改等。
- 2：实例正常运行中。
- -2：已隔离（包年包月）。
- -3：已隔离（按量计费）。
 * @method string getVpcId() 获取私有网络的 ID。
- 基础网络则无需配置该参数。
- 请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表中，单击私有网络名称，在**私有网络**页面获取其 ID。
 * @method void setVpcId(string $VpcId) 设置私有网络的 ID。
- 基础网络则无需配置该参数。
- 请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表中，单击私有网络名称，在**私有网络**页面获取其 ID。
 * @method string getSubnetId() 获取私有网络的子网ID。
- 基础网络则无需配置该参数。
- 请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表中，单击私有网络名称，在**私有网络**页面获取其子网 ID。
 * @method void setSubnetId(string $SubnetId) 设置私有网络的子网ID。
- 基础网络则无需配置该参数。
- 请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表中，单击私有网络名称，在**私有网络**页面获取其子网 ID。
 * @method integer getPayMode() 获取指定所查询实例的付费类型。
- 0：查询按量计费实例。
- 1：查询包年包月实例。
- -1：查询按量计费与包年包月实例。
 * @method void setPayMode(integer $PayMode) 设置指定所查询实例的付费类型。
- 0：查询按量计费实例。
- 1：查询包年包月实例。
- -1：查询按量计费与包年包月实例。
 * @method integer getLimit() 获取单次请求返回的数量。默认值为20，取值范围为(1,100]。
 * @method void setLimit(integer $Limit) 设置单次请求返回的数量。默认值为20，取值范围为(1,100]。
 * @method integer getOffset() 获取偏移量，默认值为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认值为0。
 * @method string getOrderBy() 获取配置返回结果排序依据的字段。目前支持依据"ProjectId"、"InstanceName"、"CreateTime"排序。
 * @method void setOrderBy(string $OrderBy) 设置配置返回结果排序依据的字段。目前支持依据"ProjectId"、"InstanceName"、"CreateTime"排序。
 * @method string getOrderByType() 获取配置返回结果的排序方式。
- ASC：升序。
- DESC：降序。
 * @method void setOrderByType(string $OrderByType) 设置配置返回结果的排序方式。
- ASC：升序。
- DESC：降序。
 * @method array getProjectIds() 获取项目 ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)，在右上角的账户信息下拉菜单中，选择项目管理查询项目。
 * @method void setProjectIds(array $ProjectIds) 设置项目 ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)，在右上角的账户信息下拉菜单中，选择项目管理查询项目。
 * @method string getSearchKey() 获取指定查询搜索的关键词。支持设置为具体的实例ID、实例名称或者内网 IP 地址。
 * @method void setSearchKey(string $SearchKey) 设置指定查询搜索的关键词。支持设置为具体的实例ID、实例名称或者内网 IP 地址。
 * @method array getTags() 获取标签信息，包含标签键与标签值。
 * @method void setTags(array $Tags) 设置标签信息，包含标签键与标签值。
 */
class DescribeDBInstancesRequest extends AbstractModel
{
    /**
     * @var array 实例 ID 列表。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
     */
    public $InstanceIds;

    /**
     * @var integer 指定查询的实例类型。取值范围如下：
- 0：所有实例。
- 1：正式实例。
- 2：临时实例
- 3：只读实例。
- -1：查询同时包括正式实例、只读实例与灾备实例。
     */
    public $InstanceType;

    /**
     * @var integer 指定所查询实例的集群类型，取值范围如下：
- 0：副本集实例。
- 1：分片实例。
- -1：副本集与分片实例。
     */
    public $ClusterType;

    /**
     * @var array 指定所查询实例的当前状态，取值范围如下所示：
- 0：待初始化。
- 1：流程处理中，例如：变更规格、参数修改等。
- 2：实例正常运行中。
- -2：已隔离（包年包月）。
- -3：已隔离（按量计费）。
     */
    public $Status;

    /**
     * @var string 私有网络的 ID。
- 基础网络则无需配置该参数。
- 请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表中，单击私有网络名称，在**私有网络**页面获取其 ID。
     */
    public $VpcId;

    /**
     * @var string 私有网络的子网ID。
- 基础网络则无需配置该参数。
- 请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表中，单击私有网络名称，在**私有网络**页面获取其子网 ID。
     */
    public $SubnetId;

    /**
     * @var integer 指定所查询实例的付费类型。
- 0：查询按量计费实例。
- 1：查询包年包月实例。
- -1：查询按量计费与包年包月实例。
     */
    public $PayMode;

    /**
     * @var integer 单次请求返回的数量。默认值为20，取值范围为(1,100]。
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认值为0。
     */
    public $Offset;

    /**
     * @var string 配置返回结果排序依据的字段。目前支持依据"ProjectId"、"InstanceName"、"CreateTime"排序。
     */
    public $OrderBy;

    /**
     * @var string 配置返回结果的排序方式。
- ASC：升序。
- DESC：降序。
     */
    public $OrderByType;

    /**
     * @var array 项目 ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)，在右上角的账户信息下拉菜单中，选择项目管理查询项目。
     */
    public $ProjectIds;

    /**
     * @var string 指定查询搜索的关键词。支持设置为具体的实例ID、实例名称或者内网 IP 地址。
     */
    public $SearchKey;

    /**
     * @var array 标签信息，包含标签键与标签值。
     */
    public $Tags;

    /**
     * @param array $InstanceIds 实例 ID 列表。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
     * @param integer $InstanceType 指定查询的实例类型。取值范围如下：
- 0：所有实例。
- 1：正式实例。
- 2：临时实例
- 3：只读实例。
- -1：查询同时包括正式实例、只读实例与灾备实例。
     * @param integer $ClusterType 指定所查询实例的集群类型，取值范围如下：
- 0：副本集实例。
- 1：分片实例。
- -1：副本集与分片实例。
     * @param array $Status 指定所查询实例的当前状态，取值范围如下所示：
- 0：待初始化。
- 1：流程处理中，例如：变更规格、参数修改等。
- 2：实例正常运行中。
- -2：已隔离（包年包月）。
- -3：已隔离（按量计费）。
     * @param string $VpcId 私有网络的 ID。
- 基础网络则无需配置该参数。
- 请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表中，单击私有网络名称，在**私有网络**页面获取其 ID。
     * @param string $SubnetId 私有网络的子网ID。
- 基础网络则无需配置该参数。
- 请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表中，单击私有网络名称，在**私有网络**页面获取其子网 ID。
     * @param integer $PayMode 指定所查询实例的付费类型。
- 0：查询按量计费实例。
- 1：查询包年包月实例。
- -1：查询按量计费与包年包月实例。
     * @param integer $Limit 单次请求返回的数量。默认值为20，取值范围为(1,100]。
     * @param integer $Offset 偏移量，默认值为0。
     * @param string $OrderBy 配置返回结果排序依据的字段。目前支持依据"ProjectId"、"InstanceName"、"CreateTime"排序。
     * @param string $OrderByType 配置返回结果的排序方式。
- ASC：升序。
- DESC：降序。
     * @param array $ProjectIds 项目 ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)，在右上角的账户信息下拉菜单中，选择项目管理查询项目。
     * @param string $SearchKey 指定查询搜索的关键词。支持设置为具体的实例ID、实例名称或者内网 IP 地址。
     * @param array $Tags 标签信息，包含标签键与标签值。
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
