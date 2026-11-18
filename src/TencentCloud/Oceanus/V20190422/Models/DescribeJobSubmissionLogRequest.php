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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeJobSubmissionLog请求参数结构体
 *
 * @method string getJobId() 获取<p>作业ID，例如：cql-6v1jkxrn</p>
 * @method void setJobId(string $JobId) 设置<p>作业ID，例如：cql-6v1jkxrn</p>
 * @method integer getStartTime() 获取<p>起始时间，unix时间戳，毫秒级，例如：1611754219108</p>
 * @method void setStartTime(integer $StartTime) 设置<p>起始时间，unix时间戳，毫秒级，例如：1611754219108</p>
 * @method integer getEndTime() 获取<p>结束时间，unix时间戳，毫秒级，例如：1611754219108</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间，unix时间戳，毫秒级，例如：1611754219108</p>
 * @method integer getRunningOrderId() 获取<p>作业运行的实例ID, 例如：1,2,3。默认为0，表示未选中任何实例，搜索该时间段内最近的一个实例的日志</p>
 * @method void setRunningOrderId(integer $RunningOrderId) 设置<p>作业运行的实例ID, 例如：1,2,3。默认为0，表示未选中任何实例，搜索该时间段内最近的一个实例的日志</p>
 * @method string getKeyword() 获取<p>日志搜索的关键词，默认为空</p>
 * @method void setKeyword(string $Keyword) 设置<p>日志搜索的关键词，默认为空</p>
 * @method string getCursor() 获取<p>日志搜索的游标，可透传上次返回的值，默认为空</p>
 * @method void setCursor(string $Cursor) 设置<p>日志搜索的游标，可透传上次返回的值，默认为空</p>
 * @method string getOrderType() 获取<p>时间戳排序规则，asc - 升序，desc - 降序。默认为升序</p>
 * @method void setOrderType(string $OrderType) 设置<p>时间戳排序规则，asc - 升序，desc - 降序。默认为升序</p>
 * @method integer getLimit() 获取<p>搜索的日志条数上限值，最大为100</p>
 * @method void setLimit(integer $Limit) 设置<p>搜索的日志条数上限值，最大为100</p>
 * @method integer getOffset() 获取<p>分页偏移</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移</p>
 * @method array getFilters() 获取<p>过滤</p>
 * @method void setFilters(array $Filters) 设置<p>过滤</p>
 */
class DescribeJobSubmissionLogRequest extends AbstractModel
{
    /**
     * @var string <p>作业ID，例如：cql-6v1jkxrn</p>
     */
    public $JobId;

    /**
     * @var integer <p>起始时间，unix时间戳，毫秒级，例如：1611754219108</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束时间，unix时间戳，毫秒级，例如：1611754219108</p>
     */
    public $EndTime;

    /**
     * @var integer <p>作业运行的实例ID, 例如：1,2,3。默认为0，表示未选中任何实例，搜索该时间段内最近的一个实例的日志</p>
     */
    public $RunningOrderId;

    /**
     * @var string <p>日志搜索的关键词，默认为空</p>
     */
    public $Keyword;

    /**
     * @var string <p>日志搜索的游标，可透传上次返回的值，默认为空</p>
     */
    public $Cursor;

    /**
     * @var string <p>时间戳排序规则，asc - 升序，desc - 降序。默认为升序</p>
     */
    public $OrderType;

    /**
     * @var integer <p>搜索的日志条数上限值，最大为100</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页偏移</p>
     */
    public $Offset;

    /**
     * @var array <p>过滤</p>
     */
    public $Filters;

    /**
     * @param string $JobId <p>作业ID，例如：cql-6v1jkxrn</p>
     * @param integer $StartTime <p>起始时间，unix时间戳，毫秒级，例如：1611754219108</p>
     * @param integer $EndTime <p>结束时间，unix时间戳，毫秒级，例如：1611754219108</p>
     * @param integer $RunningOrderId <p>作业运行的实例ID, 例如：1,2,3。默认为0，表示未选中任何实例，搜索该时间段内最近的一个实例的日志</p>
     * @param string $Keyword <p>日志搜索的关键词，默认为空</p>
     * @param string $Cursor <p>日志搜索的游标，可透传上次返回的值，默认为空</p>
     * @param string $OrderType <p>时间戳排序规则，asc - 升序，desc - 降序。默认为升序</p>
     * @param integer $Limit <p>搜索的日志条数上限值，最大为100</p>
     * @param integer $Offset <p>分页偏移</p>
     * @param array $Filters <p>过滤</p>
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("RunningOrderId",$param) and $param["RunningOrderId"] !== null) {
            $this->RunningOrderId = $param["RunningOrderId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Cursor",$param) and $param["Cursor"] !== null) {
            $this->Cursor = $param["Cursor"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
