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
 * DescribeOverviewInvocation请求参数结构体
 *
 * @method string getNamespaceId() 获取命名空间ID
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间ID
 * @method string getType() 获取监控统计类型，可选值：SumReqAmount、AvgFailureRate、AvgTimeCost，分别对应请求量、请求错误率、平均响应耗时
 * @method void setType(string $Type) 设置监控统计类型，可选值：SumReqAmount、AvgFailureRate、AvgTimeCost，分别对应请求量、请求错误率、平均响应耗时
 * @method integer getPeriod() 获取监控统计数据粒度，可选值：60、3600、86400，分别对应1分钟、1小时、1天
 * @method void setPeriod(integer $Period) 设置监控统计数据粒度，可选值：60、3600、86400，分别对应1分钟、1小时、1天
 * @method string getStartTime() 获取查询开始时间，默认为当天的 00:00:00
 * @method void setStartTime(string $StartTime) 设置查询开始时间，默认为当天的 00:00:00
 * @method string getEndTime() 获取查询结束时间，默认为当前时间
 * @method void setEndTime(string $EndTime) 设置查询结束时间，默认为当前时间
 */
class DescribeOverviewInvocationRequest extends AbstractModel
{
    /**
     * @var string 命名空间ID
     */
    public $NamespaceId;

    /**
     * @var string 监控统计类型，可选值：SumReqAmount、AvgFailureRate、AvgTimeCost，分别对应请求量、请求错误率、平均响应耗时
     */
    public $Type;

    /**
     * @var integer 监控统计数据粒度，可选值：60、3600、86400，分别对应1分钟、1小时、1天
     */
    public $Period;

    /**
     * @var string 查询开始时间，默认为当天的 00:00:00
     */
    public $StartTime;

    /**
     * @var string 查询结束时间，默认为当前时间
     */
    public $EndTime;

    /**
     * @param string $NamespaceId 命名空间ID
     * @param string $Type 监控统计类型，可选值：SumReqAmount、AvgFailureRate、AvgTimeCost，分别对应请求量、请求错误率、平均响应耗时
     * @param integer $Period 监控统计数据粒度，可选值：60、3600、86400，分别对应1分钟、1小时、1天
     * @param string $StartTime 查询开始时间，默认为当天的 00:00:00
     * @param string $EndTime 查询结束时间，默认为当前时间
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
        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
