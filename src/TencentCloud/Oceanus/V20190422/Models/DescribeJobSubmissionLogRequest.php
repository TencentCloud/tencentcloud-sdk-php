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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeJobSubmissionLog请求参数结构体
 *
 * @method string getJobId() 获取作业ID，例如：cql-6v1jkxrn
 * @method void setJobId(string $JobId) 设置作业ID，例如：cql-6v1jkxrn
 * @method integer getStartTime() 获取起始时间，unix时间戳，毫秒级，例如：1611754219108
 * @method void setStartTime(integer $StartTime) 设置起始时间，unix时间戳，毫秒级，例如：1611754219108
 * @method integer getEndTime() 获取结束时间，unix时间戳，毫秒级，例如：1611754219108
 * @method void setEndTime(integer $EndTime) 设置结束时间，unix时间戳，毫秒级，例如：1611754219108
 * @method integer getRunningOrderId() 获取作业运行的实例ID, 例如：1,2,3。默认为0，表示未选中任何实例，搜索该时间段内最近的一个实例的日志
 * @method void setRunningOrderId(integer $RunningOrderId) 设置作业运行的实例ID, 例如：1,2,3。默认为0，表示未选中任何实例，搜索该时间段内最近的一个实例的日志
 * @method string getKeyword() 获取日志搜索的关键词，默认为空
 * @method void setKeyword(string $Keyword) 设置日志搜索的关键词，默认为空
 * @method string getCursor() 获取日志搜索的游标，可透传上次返回的值，默认为空
 * @method void setCursor(string $Cursor) 设置日志搜索的游标，可透传上次返回的值，默认为空
 * @method string getOrderType() 获取时间戳排序规则，asc - 升序，desc - 降序。默认为升序
 * @method void setOrderType(string $OrderType) 设置时间戳排序规则，asc - 升序，desc - 降序。默认为升序
 * @method integer getLimit() 获取搜索的日志条数上限值，最大为100
 * @method void setLimit(integer $Limit) 设置搜索的日志条数上限值，最大为100
 */
class DescribeJobSubmissionLogRequest extends AbstractModel
{
    /**
     * @var string 作业ID，例如：cql-6v1jkxrn
     */
    public $JobId;

    /**
     * @var integer 起始时间，unix时间戳，毫秒级，例如：1611754219108
     */
    public $StartTime;

    /**
     * @var integer 结束时间，unix时间戳，毫秒级，例如：1611754219108
     */
    public $EndTime;

    /**
     * @var integer 作业运行的实例ID, 例如：1,2,3。默认为0，表示未选中任何实例，搜索该时间段内最近的一个实例的日志
     */
    public $RunningOrderId;

    /**
     * @var string 日志搜索的关键词，默认为空
     */
    public $Keyword;

    /**
     * @var string 日志搜索的游标，可透传上次返回的值，默认为空
     */
    public $Cursor;

    /**
     * @var string 时间戳排序规则，asc - 升序，desc - 降序。默认为升序
     */
    public $OrderType;

    /**
     * @var integer 搜索的日志条数上限值，最大为100
     */
    public $Limit;

    /**
     * @param string $JobId 作业ID，例如：cql-6v1jkxrn
     * @param integer $StartTime 起始时间，unix时间戳，毫秒级，例如：1611754219108
     * @param integer $EndTime 结束时间，unix时间戳，毫秒级，例如：1611754219108
     * @param integer $RunningOrderId 作业运行的实例ID, 例如：1,2,3。默认为0，表示未选中任何实例，搜索该时间段内最近的一个实例的日志
     * @param string $Keyword 日志搜索的关键词，默认为空
     * @param string $Cursor 日志搜索的游标，可透传上次返回的值，默认为空
     * @param string $OrderType 时间戳排序规则，asc - 升序，desc - 降序。默认为升序
     * @param integer $Limit 搜索的日志条数上限值，最大为100
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
    }
}
