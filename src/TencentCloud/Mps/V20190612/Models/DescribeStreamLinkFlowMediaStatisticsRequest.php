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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStreamLinkFlowMediaStatistics请求参数结构体
 *
 * @method string getFlowId() 获取传输流ID。
 * @method void setFlowId(string $FlowId) 设置传输流ID。
 * @method string getType() 获取输入或输出类型，可选[input|output]。
 * @method void setType(string $Type) 设置输入或输出类型，可选[input|output]。
 * @method string getInputOutputId() 获取输入或输出Id。
 * @method void setInputOutputId(string $InputOutputId) 设置输入或输出Id。
 * @method string getPipeline() 获取主通道或备通道，可选[0|1]。
 * @method void setPipeline(string $Pipeline) 设置主通道或备通道，可选[0|1]。
 * @method string getPeriod() 获取查询间隔，可选[5s|1min|5min|15min]。
 * @method void setPeriod(string $Period) 设置查询间隔，可选[5s|1min|5min|15min]。
 * @method string getStartTime() 获取统计的开始时间，默认为前一小时，最多支持查询近7天。
UTC时间，如'2020-01-01T12:00:00Z'。
 * @method void setStartTime(string $StartTime) 设置统计的开始时间，默认为前一小时，最多支持查询近7天。
UTC时间，如'2020-01-01T12:00:00Z'。
 * @method string getEndTime() 获取统计的结束时间，默认为StartTime后一小时，最多支持查询24小时的数据。
UTC时间，如'2020-01-01T12:00:00Z'。
 * @method void setEndTime(string $EndTime) 设置统计的结束时间，默认为StartTime后一小时，最多支持查询24小时的数据。
UTC时间，如'2020-01-01T12:00:00Z'。
 */
class DescribeStreamLinkFlowMediaStatisticsRequest extends AbstractModel
{
    /**
     * @var string 传输流ID。
     */
    public $FlowId;

    /**
     * @var string 输入或输出类型，可选[input|output]。
     */
    public $Type;

    /**
     * @var string 输入或输出Id。
     */
    public $InputOutputId;

    /**
     * @var string 主通道或备通道，可选[0|1]。
     */
    public $Pipeline;

    /**
     * @var string 查询间隔，可选[5s|1min|5min|15min]。
     */
    public $Period;

    /**
     * @var string 统计的开始时间，默认为前一小时，最多支持查询近7天。
UTC时间，如'2020-01-01T12:00:00Z'。
     */
    public $StartTime;

    /**
     * @var string 统计的结束时间，默认为StartTime后一小时，最多支持查询24小时的数据。
UTC时间，如'2020-01-01T12:00:00Z'。
     */
    public $EndTime;

    /**
     * @param string $FlowId 传输流ID。
     * @param string $Type 输入或输出类型，可选[input|output]。
     * @param string $InputOutputId 输入或输出Id。
     * @param string $Pipeline 主通道或备通道，可选[0|1]。
     * @param string $Period 查询间隔，可选[5s|1min|5min|15min]。
     * @param string $StartTime 统计的开始时间，默认为前一小时，最多支持查询近7天。
UTC时间，如'2020-01-01T12:00:00Z'。
     * @param string $EndTime 统计的结束时间，默认为StartTime后一小时，最多支持查询24小时的数据。
UTC时间，如'2020-01-01T12:00:00Z'。
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("InputOutputId",$param) and $param["InputOutputId"] !== null) {
            $this->InputOutputId = $param["InputOutputId"];
        }

        if (array_key_exists("Pipeline",$param) and $param["Pipeline"] !== null) {
            $this->Pipeline = $param["Pipeline"];
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
