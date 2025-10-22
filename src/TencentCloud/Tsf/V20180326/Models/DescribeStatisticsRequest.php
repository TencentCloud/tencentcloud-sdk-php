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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStatistics请求参数结构体
 *
 * @method string getType() 获取统计类型。可选值 Interface：接口类型、Service：服务类型、Group：部署组类型、Instance：实例类型、SQL：SQL类型、NoSQL：NoSQL类型
 * @method void setType(string $Type) 设置统计类型。可选值 Interface：接口类型、Service：服务类型、Group：部署组类型、Instance：实例类型、SQL：SQL类型、NoSQL：NoSQL类型
 * @method integer getTimeStep() 获取步长，单位秒。可选值 60、3600、86400
 * @method void setTimeStep(integer $TimeStep) 设置步长，单位秒。可选值 60、3600、86400
 * @method integer getOffset() 获取偏移量，取值范围大于等于0，默认值为0
 * @method void setOffset(integer $Offset) 设置偏移量，取值范围大于等于0，默认值为0
 * @method integer getLimit() 获取单页请求配置数量，取值范围[1, 50]，默认值为10
 * @method void setLimit(integer $Limit) 设置单页请求配置数量，取值范围[1, 50]，默认值为10
 * @method string getNamespaceId() 获取命名空间ID。此字段，和 NamespaceIdList 或者 MetricDimensionValues 字段包含 namespaceId 维度信息。三者选其一。
可通过[DescribeSimpleNamespaces](https://cloud.tencent.com/document/product/649/36096)查询已经创建的命名空间，也可以通过登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1&tab=namespace)查看

 * @method void setNamespaceId(string $NamespaceId) 设置命名空间ID。此字段，和 NamespaceIdList 或者 MetricDimensionValues 字段包含 namespaceId 维度信息。三者选其一。
可通过[DescribeSimpleNamespaces](https://cloud.tencent.com/document/product/649/36096)查询已经创建的命名空间，也可以通过登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1&tab=namespace)查看

 * @method string getOrderBy() 获取排序字段:AvgTimeConsuming[默认]、RequestCount、ErrorRate。实例监控还支持 CpuPercent
 * @method void setOrderBy(string $OrderBy) 设置排序字段:AvgTimeConsuming[默认]、RequestCount、ErrorRate。实例监控还支持 CpuPercent
 * @method integer getOrderType() 获取排序方式：ASC:0、DESC:1
 * @method void setOrderType(integer $OrderType) 设置排序方式：ASC:0、DESC:1
 * @method string getEndTime() 获取开始时间：年月日 时分秒2020-05-12 14:43:12， 不能为空
 * @method void setEndTime(string $EndTime) 设置开始时间：年月日 时分秒2020-05-12 14:43:12， 不能为空
 * @method string getStartTime() 获取开始时间：年月日 时分秒2020-05-12 14:43:12， 不能为空
 * @method void setStartTime(string $StartTime) 设置开始时间：年月日 时分秒2020-05-12 14:43:12， 不能为空
 * @method string getServiceName() 获取服务名称
 * @method void setServiceName(string $ServiceName) 设置服务名称
 * @method string getSearchWord() 获取搜索关键词
 * @method void setSearchWord(string $SearchWord) 设置搜索关键词
 * @method array getMetricDimensionValues() 获取维度。此字段，和 NamespaceIdList 或者 MetricDimensionValues 字段包含 namespaceId 维度信息。三者选其一
 * @method void setMetricDimensionValues(array $MetricDimensionValues) 设置维度。此字段，和 NamespaceIdList 或者 MetricDimensionValues 字段包含 namespaceId 维度信息。三者选其一
 * @method string getBucketKey() 获取聚合关键词
 * @method void setBucketKey(string $BucketKey) 设置聚合关键词
 * @method string getDbName() 获取数据库名称
 * @method void setDbName(string $DbName) 设置数据库名称
 * @method array getNamespaceIdList() 获取命名空间ID数组。此字段，和 NamespaceIdList 或者 MetricDimensionValues 字段包含 namespaceId 维度信息。三者选其一
 * @method void setNamespaceIdList(array $NamespaceIdList) 设置命名空间ID数组。此字段，和 NamespaceIdList 或者 MetricDimensionValues 字段包含 namespaceId 维度信息。三者选其一
 * @method string getConfigCenterInstanceId() 获取独占配置中心的ID。
可通过调用[DescribeClusterInstances](https://cloud.tencent.com/document/product/649/36048)查询已导入的实例列表或登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1&tab=instance)进行查询。实例ID例如：ins-6decplwk。
 * @method void setConfigCenterInstanceId(string $ConfigCenterInstanceId) 设置独占配置中心的ID。
可通过调用[DescribeClusterInstances](https://cloud.tencent.com/document/product/649/36048)查询已导入的实例列表或登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1&tab=instance)进行查询。实例ID例如：ins-6decplwk。
 * @method string getServiceFilter() 获取服务过滤
 * @method void setServiceFilter(string $ServiceFilter) 设置服务过滤
 */
class DescribeStatisticsRequest extends AbstractModel
{
    /**
     * @var string 统计类型。可选值 Interface：接口类型、Service：服务类型、Group：部署组类型、Instance：实例类型、SQL：SQL类型、NoSQL：NoSQL类型
     */
    public $Type;

    /**
     * @var integer 步长，单位秒。可选值 60、3600、86400
     */
    public $TimeStep;

    /**
     * @var integer 偏移量，取值范围大于等于0，默认值为0
     */
    public $Offset;

    /**
     * @var integer 单页请求配置数量，取值范围[1, 50]，默认值为10
     */
    public $Limit;

    /**
     * @var string 命名空间ID。此字段，和 NamespaceIdList 或者 MetricDimensionValues 字段包含 namespaceId 维度信息。三者选其一。
可通过[DescribeSimpleNamespaces](https://cloud.tencent.com/document/product/649/36096)查询已经创建的命名空间，也可以通过登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1&tab=namespace)查看

     */
    public $NamespaceId;

    /**
     * @var string 排序字段:AvgTimeConsuming[默认]、RequestCount、ErrorRate。实例监控还支持 CpuPercent
     */
    public $OrderBy;

    /**
     * @var integer 排序方式：ASC:0、DESC:1
     */
    public $OrderType;

    /**
     * @var string 开始时间：年月日 时分秒2020-05-12 14:43:12， 不能为空
     */
    public $EndTime;

    /**
     * @var string 开始时间：年月日 时分秒2020-05-12 14:43:12， 不能为空
     */
    public $StartTime;

    /**
     * @var string 服务名称
     */
    public $ServiceName;

    /**
     * @var string 搜索关键词
     */
    public $SearchWord;

    /**
     * @var array 维度。此字段，和 NamespaceIdList 或者 MetricDimensionValues 字段包含 namespaceId 维度信息。三者选其一
     */
    public $MetricDimensionValues;

    /**
     * @var string 聚合关键词
     */
    public $BucketKey;

    /**
     * @var string 数据库名称
     */
    public $DbName;

    /**
     * @var array 命名空间ID数组。此字段，和 NamespaceIdList 或者 MetricDimensionValues 字段包含 namespaceId 维度信息。三者选其一
     */
    public $NamespaceIdList;

    /**
     * @var string 独占配置中心的ID。
可通过调用[DescribeClusterInstances](https://cloud.tencent.com/document/product/649/36048)查询已导入的实例列表或登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1&tab=instance)进行查询。实例ID例如：ins-6decplwk。
     */
    public $ConfigCenterInstanceId;

    /**
     * @var string 服务过滤
     */
    public $ServiceFilter;

    /**
     * @param string $Type 统计类型。可选值 Interface：接口类型、Service：服务类型、Group：部署组类型、Instance：实例类型、SQL：SQL类型、NoSQL：NoSQL类型
     * @param integer $TimeStep 步长，单位秒。可选值 60、3600、86400
     * @param integer $Offset 偏移量，取值范围大于等于0，默认值为0
     * @param integer $Limit 单页请求配置数量，取值范围[1, 50]，默认值为10
     * @param string $NamespaceId 命名空间ID。此字段，和 NamespaceIdList 或者 MetricDimensionValues 字段包含 namespaceId 维度信息。三者选其一。
可通过[DescribeSimpleNamespaces](https://cloud.tencent.com/document/product/649/36096)查询已经创建的命名空间，也可以通过登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1&tab=namespace)查看

     * @param string $OrderBy 排序字段:AvgTimeConsuming[默认]、RequestCount、ErrorRate。实例监控还支持 CpuPercent
     * @param integer $OrderType 排序方式：ASC:0、DESC:1
     * @param string $EndTime 开始时间：年月日 时分秒2020-05-12 14:43:12， 不能为空
     * @param string $StartTime 开始时间：年月日 时分秒2020-05-12 14:43:12， 不能为空
     * @param string $ServiceName 服务名称
     * @param string $SearchWord 搜索关键词
     * @param array $MetricDimensionValues 维度。此字段，和 NamespaceIdList 或者 MetricDimensionValues 字段包含 namespaceId 维度信息。三者选其一
     * @param string $BucketKey 聚合关键词
     * @param string $DbName 数据库名称
     * @param array $NamespaceIdList 命名空间ID数组。此字段，和 NamespaceIdList 或者 MetricDimensionValues 字段包含 namespaceId 维度信息。三者选其一
     * @param string $ConfigCenterInstanceId 独占配置中心的ID。
可通过调用[DescribeClusterInstances](https://cloud.tencent.com/document/product/649/36048)查询已导入的实例列表或登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1&tab=instance)进行查询。实例ID例如：ins-6decplwk。
     * @param string $ServiceFilter 服务过滤
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TimeStep",$param) and $param["TimeStep"] !== null) {
            $this->TimeStep = $param["TimeStep"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("MetricDimensionValues",$param) and $param["MetricDimensionValues"] !== null) {
            $this->MetricDimensionValues = [];
            foreach ($param["MetricDimensionValues"] as $key => $value){
                $obj = new MetricDimensionValue();
                $obj->deserialize($value);
                array_push($this->MetricDimensionValues, $obj);
            }
        }

        if (array_key_exists("BucketKey",$param) and $param["BucketKey"] !== null) {
            $this->BucketKey = $param["BucketKey"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("NamespaceIdList",$param) and $param["NamespaceIdList"] !== null) {
            $this->NamespaceIdList = $param["NamespaceIdList"];
        }

        if (array_key_exists("ConfigCenterInstanceId",$param) and $param["ConfigCenterInstanceId"] !== null) {
            $this->ConfigCenterInstanceId = $param["ConfigCenterInstanceId"];
        }

        if (array_key_exists("ServiceFilter",$param) and $param["ServiceFilter"] !== null) {
            $this->ServiceFilter = $param["ServiceFilter"];
        }
    }
}
