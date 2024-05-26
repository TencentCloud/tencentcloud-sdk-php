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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSlowQueryRecordsDownload请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method integer getQueryDurationMs() 获取慢查询时间
 * @method void setQueryDurationMs(integer $QueryDurationMs) 设置慢查询时间
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getDurationMs() 获取排序参数
 * @method void setDurationMs(string $DurationMs) 设置排序参数
 * @method string getSql() 获取查询sql
 * @method void setSql(string $Sql) 设置查询sql
 * @method string getReadRows() 获取排序参数
 * @method void setReadRows(string $ReadRows) 设置排序参数
 * @method string getResultBytes() 获取排序参数
 * @method void setResultBytes(string $ResultBytes) 设置排序参数
 * @method string getMemoryUsage() 获取排序参数
 * @method void setMemoryUsage(string $MemoryUsage) 设置排序参数
 * @method integer getIsQuery() 获取IsQuery条件
 * @method void setIsQuery(integer $IsQuery) 设置IsQuery条件
 */
class DescribeSlowQueryRecordsDownloadRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 慢查询时间
     */
    public $QueryDurationMs;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string 排序参数
     */
    public $DurationMs;

    /**
     * @var string 查询sql
     */
    public $Sql;

    /**
     * @var string 排序参数
     */
    public $ReadRows;

    /**
     * @var string 排序参数
     */
    public $ResultBytes;

    /**
     * @var string 排序参数
     */
    public $MemoryUsage;

    /**
     * @var integer IsQuery条件
     */
    public $IsQuery;

    /**
     * @param string $InstanceId 实例ID
     * @param integer $QueryDurationMs 慢查询时间
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param string $DurationMs 排序参数
     * @param string $Sql 查询sql
     * @param string $ReadRows 排序参数
     * @param string $ResultBytes 排序参数
     * @param string $MemoryUsage 排序参数
     * @param integer $IsQuery IsQuery条件
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("QueryDurationMs",$param) and $param["QueryDurationMs"] !== null) {
            $this->QueryDurationMs = $param["QueryDurationMs"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("DurationMs",$param) and $param["DurationMs"] !== null) {
            $this->DurationMs = $param["DurationMs"];
        }

        if (array_key_exists("Sql",$param) and $param["Sql"] !== null) {
            $this->Sql = $param["Sql"];
        }

        if (array_key_exists("ReadRows",$param) and $param["ReadRows"] !== null) {
            $this->ReadRows = $param["ReadRows"];
        }

        if (array_key_exists("ResultBytes",$param) and $param["ResultBytes"] !== null) {
            $this->ResultBytes = $param["ResultBytes"];
        }

        if (array_key_exists("MemoryUsage",$param) and $param["MemoryUsage"] !== null) {
            $this->MemoryUsage = $param["MemoryUsage"];
        }

        if (array_key_exists("IsQuery",$param) and $param["IsQuery"] !== null) {
            $this->IsQuery = $param["IsQuery"];
        }
    }
}
