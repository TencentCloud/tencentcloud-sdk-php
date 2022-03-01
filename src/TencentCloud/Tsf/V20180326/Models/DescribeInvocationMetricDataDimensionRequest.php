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
 * DescribeInvocationMetricDataDimension请求参数结构体
 *
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method integer getOffset() 获取开始index
 * @method void setOffset(integer $Offset) 设置开始index
 * @method integer getLimit() 获取分页大小
 * @method void setLimit(integer $Limit) 设置分页大小
 * @method string getDimensionName() 获取聚合维度
 * @method void setDimensionName(string $DimensionName) 设置聚合维度
 * @method string getSearchWord() 获取搜索关键字
 * @method void setSearchWord(string $SearchWord) 设置搜索关键字
 * @method array getMetricDimensionValues() 获取维度
 * @method void setMetricDimensionValues(array $MetricDimensionValues) 设置维度
 */
class DescribeInvocationMetricDataDimensionRequest extends AbstractModel
{
    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var integer 开始index
     */
    public $Offset;

    /**
     * @var integer 分页大小
     */
    public $Limit;

    /**
     * @var string 聚合维度
     */
    public $DimensionName;

    /**
     * @var string 搜索关键字
     */
    public $SearchWord;

    /**
     * @var array 维度
     */
    public $MetricDimensionValues;

    /**
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param integer $Offset 开始index
     * @param integer $Limit 分页大小
     * @param string $DimensionName 聚合维度
     * @param string $SearchWord 搜索关键字
     * @param array $MetricDimensionValues 维度
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
