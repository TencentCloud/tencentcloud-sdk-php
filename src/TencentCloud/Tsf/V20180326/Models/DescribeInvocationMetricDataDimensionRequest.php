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
 * DescribeInvocationMetricDataDimension请求参数结构体
 *
 * @method string getStartTime() 获取开始时间，格式yyyy-MM-dd HH:mm:ss
 * @method void setStartTime(string $StartTime) 设置开始时间，格式yyyy-MM-dd HH:mm:ss
 * @method string getEndTime() 获取结束时间，格式yyyy-MM-dd HH:mm:ss
 * @method void setEndTime(string $EndTime) 设置结束时间，格式yyyy-MM-dd HH:mm:ss
 * @method integer getOffset() 获取开始index，取值范围大于等于0，默认值为0
 * @method void setOffset(integer $Offset) 设置开始index，取值范围大于等于0，默认值为0
 * @method integer getLimit() 获取单页请求配置数量，取值范围[1, 50]，默认值为10
 * @method void setLimit(integer $Limit) 设置单页请求配置数量，取值范围[1, 50]，默认值为10
 * @method string getDimensionName() 获取聚合维度。可选值 NamespaceId：命名空间ID，GroupId：部署组ID，InstanceId：实例ID，ApplicationId：应用ID，OperationMethod：执行方法，OperationName：执行名称，ServiceName：服务名，UpstreamNamespaceId：上游命名空间ID
 * @method void setDimensionName(string $DimensionName) 设置聚合维度。可选值 NamespaceId：命名空间ID，GroupId：部署组ID，InstanceId：实例ID，ApplicationId：应用ID，OperationMethod：执行方法，OperationName：执行名称，ServiceName：服务名，UpstreamNamespaceId：上游命名空间ID
 * @method string getSearchWord() 获取搜索关键字
 * @method void setSearchWord(string $SearchWord) 设置搜索关键字
 * @method array getMetricDimensionValues() 获取构建维度
 * @method void setMetricDimensionValues(array $MetricDimensionValues) 设置构建维度
 */
class DescribeInvocationMetricDataDimensionRequest extends AbstractModel
{
    /**
     * @var string 开始时间，格式yyyy-MM-dd HH:mm:ss
     */
    public $StartTime;

    /**
     * @var string 结束时间，格式yyyy-MM-dd HH:mm:ss
     */
    public $EndTime;

    /**
     * @var integer 开始index，取值范围大于等于0，默认值为0
     */
    public $Offset;

    /**
     * @var integer 单页请求配置数量，取值范围[1, 50]，默认值为10
     */
    public $Limit;

    /**
     * @var string 聚合维度。可选值 NamespaceId：命名空间ID，GroupId：部署组ID，InstanceId：实例ID，ApplicationId：应用ID，OperationMethod：执行方法，OperationName：执行名称，ServiceName：服务名，UpstreamNamespaceId：上游命名空间ID
     */
    public $DimensionName;

    /**
     * @var string 搜索关键字
     */
    public $SearchWord;

    /**
     * @var array 构建维度
     */
    public $MetricDimensionValues;

    /**
     * @param string $StartTime 开始时间，格式yyyy-MM-dd HH:mm:ss
     * @param string $EndTime 结束时间，格式yyyy-MM-dd HH:mm:ss
     * @param integer $Offset 开始index，取值范围大于等于0，默认值为0
     * @param integer $Limit 单页请求配置数量，取值范围[1, 50]，默认值为10
     * @param string $DimensionName 聚合维度。可选值 NamespaceId：命名空间ID，GroupId：部署组ID，InstanceId：实例ID，ApplicationId：应用ID，OperationMethod：执行方法，OperationName：执行名称，ServiceName：服务名，UpstreamNamespaceId：上游命名空间ID
     * @param string $SearchWord 搜索关键字
     * @param array $MetricDimensionValues 构建维度
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("DimensionName",$param) and $param["DimensionName"] !== null) {
            $this->DimensionName = $param["DimensionName"];
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
    }
}
