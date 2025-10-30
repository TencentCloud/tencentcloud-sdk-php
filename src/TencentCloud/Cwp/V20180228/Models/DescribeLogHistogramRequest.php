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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogHistogram请求参数结构体
 *
 * @method integer getStartTime() 获取要查询的日志的起始时间，Unix时间戳，单位ms
 * @method void setStartTime(integer $StartTime) 设置要查询的日志的起始时间，Unix时间戳，单位ms
 * @method integer getEndTime() 获取要查询的日志的结束时间，Unix时间戳，单位ms
 * @method void setEndTime(integer $EndTime) 设置要查询的日志的结束时间，Unix时间戳，单位ms
 * @method string getQueryString() 获取查询语句
 * @method void setQueryString(string $QueryString) 设置查询语句
 * @method integer getInterval() 获取时间间隔: 单位ms
 * @method void setInterval(integer $Interval) 设置时间间隔: 单位ms
 */
class DescribeLogHistogramRequest extends AbstractModel
{
    /**
     * @var integer 要查询的日志的起始时间，Unix时间戳，单位ms
     */
    public $StartTime;

    /**
     * @var integer 要查询的日志的结束时间，Unix时间戳，单位ms
     */
    public $EndTime;

    /**
     * @var string 查询语句
     */
    public $QueryString;

    /**
     * @var integer 时间间隔: 单位ms
     */
    public $Interval;

    /**
     * @param integer $StartTime 要查询的日志的起始时间，Unix时间戳，单位ms
     * @param integer $EndTime 要查询的日志的结束时间，Unix时间戳，单位ms
     * @param string $QueryString 查询语句
     * @param integer $Interval 时间间隔: 单位ms
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

        if (array_key_exists("QueryString",$param) and $param["QueryString"] !== null) {
            $this->QueryString = $param["QueryString"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }
    }
}
