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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStatistics请求参数结构体
 *
 * @method string getType() 获取类型：Interface、Service、Group、Instance、SQL、NoSQL
 * @method void setType(string $Type) 设置类型：Interface、Service、Group、Instance、SQL、NoSQL
 * @method integer getTimeStep() 获取步长，单位s：60、3600、86400
 * @method void setTimeStep(integer $TimeStep) 设置步长，单位s：60、3600、86400
 * @method integer getOffset() 获取偏移量，取值范围大于等于0，默认值为0
 * @method void setOffset(integer $Offset) 设置偏移量，取值范围大于等于0，默认值为0
 * @method integer getLimit() 获取单页请求配置数量，取值范围[1, 50]，默认值为10
 * @method void setLimit(integer $Limit) 设置单页请求配置数量，取值范围[1, 50]，默认值为10
 * @method string getNamespaceId() 获取命名空间Id
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间Id
 * @method string getOrderBy() 获取排序字段:AvgTimeConsuming[默认]、RequestCount、ErrorRate。实例监控还支持 CpuPercent
 * @method void setOrderBy(string $OrderBy) 设置排序字段:AvgTimeConsuming[默认]、RequestCount、ErrorRate。实例监控还支持 CpuPercent
 * @method integer getOrderType() 获取排序方式：ASC:0、DESC:1
 * @method void setOrderType(integer $OrderType) 设置排序方式：ASC:0、DESC:1
 * @method string getEndTime() 获取开始时间：年月日 时分秒2020-05-12 14:43:12
 * @method void setEndTime(string $EndTime) 设置开始时间：年月日 时分秒2020-05-12 14:43:12
 * @method string getStartTime() 获取开始时间：年月日 时分秒2020-05-12 14:43:12
 * @method void setStartTime(string $StartTime) 设置开始时间：年月日 时分秒2020-05-12 14:43:12
 * @method string getServiceName() 获取服务名称
 * @method void setServiceName(string $ServiceName) 设置服务名称
 * @method string getSearchWord() 获取搜索关键词
 * @method void setSearchWord(string $SearchWord) 设置搜索关键词
 * @method array getMetricDimensionValues() 获取维度
 * @method void setMetricDimensionValues(array $MetricDimensionValues) 设置维度
 * @method string getBucketKey() 获取聚合关键词
 * @method void setBucketKey(string $BucketKey) 设置聚合关键词
 * @method string getDbName() 获取数据库
 * @method void setDbName(string $DbName) 设置数据库
 * @method array getNamespaceIdList() 获取命名空间id数组
 * @method void setNamespaceIdList(array $NamespaceIdList) 设置命名空间id数组
 */
class DescribeStatisticsRequest extends AbstractModel
{
    /**
     * @var string 类型：Interface、Service、Group、Instance、SQL、NoSQL
     */
    public $Type;

    /**
     * @var integer 步长，单位s：60、3600、86400
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
     * @var string 命名空间Id
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
     * @var string 开始时间：年月日 时分秒2020-05-12 14:43:12
     */
    public $EndTime;

    /**
     * @var string 开始时间：年月日 时分秒2020-05-12 14:43:12
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
     * @var array 维度
     */
    public $MetricDimensionValues;

    /**
     * @var string 聚合关键词
     */
    public $BucketKey;

    /**
     * @var string 数据库
     */
    public $DbName;

    /**
     * @var array 命名空间id数组
     */
    public $NamespaceIdList;

    /**
     * @param string $Type 类型：Interface、Service、Group、Instance、SQL、NoSQL
     * @param integer $TimeStep 步长，单位s：60、3600、86400
     * @param integer $Offset 偏移量，取值范围大于等于0，默认值为0
     * @param integer $Limit 单页请求配置数量，取值范围[1, 50]，默认值为10
     * @param string $NamespaceId 命名空间Id
     * @param string $OrderBy 排序字段:AvgTimeConsuming[默认]、RequestCount、ErrorRate。实例监控还支持 CpuPercent
     * @param integer $OrderType 排序方式：ASC:0、DESC:1
     * @param string $EndTime 开始时间：年月日 时分秒2020-05-12 14:43:12
     * @param string $StartTime 开始时间：年月日 时分秒2020-05-12 14:43:12
     * @param string $ServiceName 服务名称
     * @param string $SearchWord 搜索关键词
     * @param array $MetricDimensionValues 维度
     * @param string $BucketKey 聚合关键词
     * @param string $DbName 数据库
     * @param array $NamespaceIdList 命名空间id数组
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
    }
}
