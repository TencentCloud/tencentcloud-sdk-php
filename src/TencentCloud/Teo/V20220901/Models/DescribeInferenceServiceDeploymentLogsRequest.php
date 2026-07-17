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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInferenceServiceDeploymentLogs请求参数结构体
 *
 * @method string getZoneId() 获取站点ID。
 * @method void setZoneId(string $ZoneId) 设置站点ID。
 * @method string getServiceId() 获取推理服务 ID。
 * @method void setServiceId(string $ServiceId) 设置推理服务 ID。
 * @method string getRecordId() 获取部署记录 ID。
 * @method void setRecordId(string $RecordId) 设置部署记录 ID。
 * @method string getStartTime() 获取需检索日志的开始时间。
 * @method void setStartTime(string $StartTime) 设置需检索日志的开始时间。
 * @method string getEndTime() 获取需检索日志的结束时间。默认查询时间范围（EndTime - StartTime）为最近 7 天。
 * @method void setEndTime(string $EndTime) 设置需检索日志的结束时间。默认查询时间范围（EndTime - StartTime）为最近 7 天。
 * @method string getSortBy() 获取排序字段，取值有：<li>timestamp：日志生成时间。</li>默认值为：timestamp。
 * @method void setSortBy(string $SortBy) 设置排序字段，取值有：<li>timestamp：日志生成时间。</li>默认值为：timestamp。
 * @method string getSortOrder() 获取排序方式，取值有：<li>asc：升序方式；</li><li>desc：降序方式。</li>默认值为：desc。
 * @method void setSortOrder(string $SortOrder) 设置排序方式，取值有：<li>asc：升序方式；</li><li>desc：降序方式。</li>默认值为：desc。
 * @method integer getOffset() 获取分页偏移量，默认值：0。
 * @method void setOffset(integer $Offset) 设置分页偏移量，默认值：0。
 * @method integer getLimit() 获取返回记录条数，默认值：20，最大值：1000。
 * @method void setLimit(integer $Limit) 设置返回记录条数，默认值：20，最大值：1000。
 */
class DescribeInferenceServiceDeploymentLogsRequest extends AbstractModel
{
    /**
     * @var string 站点ID。
     */
    public $ZoneId;

    /**
     * @var string 推理服务 ID。
     */
    public $ServiceId;

    /**
     * @var string 部署记录 ID。
     */
    public $RecordId;

    /**
     * @var string 需检索日志的开始时间。
     */
    public $StartTime;

    /**
     * @var string 需检索日志的结束时间。默认查询时间范围（EndTime - StartTime）为最近 7 天。
     */
    public $EndTime;

    /**
     * @var string 排序字段，取值有：<li>timestamp：日志生成时间。</li>默认值为：timestamp。
     */
    public $SortBy;

    /**
     * @var string 排序方式，取值有：<li>asc：升序方式；</li><li>desc：降序方式。</li>默认值为：desc。
     */
    public $SortOrder;

    /**
     * @var integer 分页偏移量，默认值：0。
     */
    public $Offset;

    /**
     * @var integer 返回记录条数，默认值：20，最大值：1000。
     */
    public $Limit;

    /**
     * @param string $ZoneId 站点ID。
     * @param string $ServiceId 推理服务 ID。
     * @param string $RecordId 部署记录 ID。
     * @param string $StartTime 需检索日志的开始时间。
     * @param string $EndTime 需检索日志的结束时间。默认查询时间范围（EndTime - StartTime）为最近 7 天。
     * @param string $SortBy 排序字段，取值有：<li>timestamp：日志生成时间。</li>默认值为：timestamp。
     * @param string $SortOrder 排序方式，取值有：<li>asc：升序方式；</li><li>desc：降序方式。</li>默认值为：desc。
     * @param integer $Offset 分页偏移量，默认值：0。
     * @param integer $Limit 返回记录条数，默认值：20，最大值：1000。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
