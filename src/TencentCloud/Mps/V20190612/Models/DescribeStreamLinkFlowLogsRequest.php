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
 * DescribeStreamLinkFlowLogs请求参数结构体
 *
 * @method string getFlowId() 获取传输流Id。
 * @method void setFlowId(string $FlowId) 设置传输流Id。
 * @method string getStartTime() 获取统计的开始时间，默认为前一小时，最多支持查询近7天。
UTC时间，如'2020-01-01T12:00:00Z'。
 * @method void setStartTime(string $StartTime) 设置统计的开始时间，默认为前一小时，最多支持查询近7天。
UTC时间，如'2020-01-01T12:00:00Z'。
 * @method string getEndTime() 获取统计的结束时间，默认为StartTime后一小时，最多支持查询24小时的数据。
UTC时间，如'2020-01-01T12:00:00Z'。
 * @method void setEndTime(string $EndTime) 设置统计的结束时间，默认为StartTime后一小时，最多支持查询24小时的数据。
UTC时间，如'2020-01-01T12:00:00Z'。
 * @method array getType() 获取输入或输出类型，可选[input|output]。
 * @method void setType(array $Type) 设置输入或输出类型，可选[input|output]。
 * @method array getPipeline() 获取主通道或备通道，可选[0|1]。
 * @method void setPipeline(array $Pipeline) 设置主通道或备通道，可选[0|1]。
 * @method integer getPageSize() 获取每页大小，默认100，范围为[1, 1000]。
 * @method void setPageSize(integer $PageSize) 设置每页大小，默认100，范围为[1, 1000]。
 * @method string getSortType() 获取按Timestamp升序或降序排序，默认降序，可选[desc|asc]。
 * @method void setSortType(string $SortType) 设置按Timestamp升序或降序排序，默认降序，可选[desc|asc]。
 * @method integer getPageNum() 获取页码，默认1，范围为[1, 1000]。
 * @method void setPageNum(integer $PageNum) 设置页码，默认1，范围为[1, 1000]。
 */
class DescribeStreamLinkFlowLogsRequest extends AbstractModel
{
    /**
     * @var string 传输流Id。
     */
    public $FlowId;

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
     * @var array 输入或输出类型，可选[input|output]。
     */
    public $Type;

    /**
     * @var array 主通道或备通道，可选[0|1]。
     */
    public $Pipeline;

    /**
     * @var integer 每页大小，默认100，范围为[1, 1000]。
     */
    public $PageSize;

    /**
     * @var string 按Timestamp升序或降序排序，默认降序，可选[desc|asc]。
     */
    public $SortType;

    /**
     * @var integer 页码，默认1，范围为[1, 1000]。
     */
    public $PageNum;

    /**
     * @param string $FlowId 传输流Id。
     * @param string $StartTime 统计的开始时间，默认为前一小时，最多支持查询近7天。
UTC时间，如'2020-01-01T12:00:00Z'。
     * @param string $EndTime 统计的结束时间，默认为StartTime后一小时，最多支持查询24小时的数据。
UTC时间，如'2020-01-01T12:00:00Z'。
     * @param array $Type 输入或输出类型，可选[input|output]。
     * @param array $Pipeline 主通道或备通道，可选[0|1]。
     * @param integer $PageSize 每页大小，默认100，范围为[1, 1000]。
     * @param string $SortType 按Timestamp升序或降序排序，默认降序，可选[desc|asc]。
     * @param integer $PageNum 页码，默认1，范围为[1, 1000]。
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Pipeline",$param) and $param["Pipeline"] !== null) {
            $this->Pipeline = $param["Pipeline"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }
    }
}
