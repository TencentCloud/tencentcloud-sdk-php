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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AnalyzeAuditLogs请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method string getStartTime() 获取要分析的日志开始时间，格式为："2023-02-16 00:00:20"。
 * @method void setStartTime(string $StartTime) 设置要分析的日志开始时间，格式为："2023-02-16 00:00:20"。
 * @method string getEndTime() 获取要分析的日志结束时间，格式为："2023-02-16 00:10:20"。
 * @method void setEndTime(string $EndTime) 设置要分析的日志结束时间，格式为："2023-02-16 00:10:20"。
 * @method array getAggregationConditions() 获取聚合维度的排序条件。
 * @method void setAggregationConditions(array $AggregationConditions) 设置聚合维度的排序条件。
 * @method AuditLogFilter getAuditLogFilter() 获取已废弃。该过滤条件下的审计日志结果集作为分析日志。
 * @method void setAuditLogFilter(AuditLogFilter $AuditLogFilter) 设置已废弃。该过滤条件下的审计日志结果集作为分析日志。
 * @method array getLogFilter() 获取该过滤条件下的审计日志结果集作为分析日志。
 * @method void setLogFilter(array $LogFilter) 设置该过滤条件下的审计日志结果集作为分析日志。
 */
class AnalyzeAuditLogsRequest extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var string 要分析的日志开始时间，格式为："2023-02-16 00:00:20"。
     */
    public $StartTime;

    /**
     * @var string 要分析的日志结束时间，格式为："2023-02-16 00:10:20"。
     */
    public $EndTime;

    /**
     * @var array 聚合维度的排序条件。
     */
    public $AggregationConditions;

    /**
     * @var AuditLogFilter 已废弃。该过滤条件下的审计日志结果集作为分析日志。
     */
    public $AuditLogFilter;

    /**
     * @var array 该过滤条件下的审计日志结果集作为分析日志。
     */
    public $LogFilter;

    /**
     * @param string $InstanceId 实例ID。
     * @param string $StartTime 要分析的日志开始时间，格式为："2023-02-16 00:00:20"。
     * @param string $EndTime 要分析的日志结束时间，格式为："2023-02-16 00:10:20"。
     * @param array $AggregationConditions 聚合维度的排序条件。
     * @param AuditLogFilter $AuditLogFilter 已废弃。该过滤条件下的审计日志结果集作为分析日志。
     * @param array $LogFilter 该过滤条件下的审计日志结果集作为分析日志。
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("AggregationConditions",$param) and $param["AggregationConditions"] !== null) {
            $this->AggregationConditions = [];
            foreach ($param["AggregationConditions"] as $key => $value){
                $obj = new AggregationCondition();
                $obj->deserialize($value);
                array_push($this->AggregationConditions, $obj);
            }
        }

        if (array_key_exists("AuditLogFilter",$param) and $param["AuditLogFilter"] !== null) {
            $this->AuditLogFilter = new AuditLogFilter();
            $this->AuditLogFilter->deserialize($param["AuditLogFilter"]);
        }

        if (array_key_exists("LogFilter",$param) and $param["LogFilter"] !== null) {
            $this->LogFilter = [];
            foreach ($param["LogFilter"] as $key => $value){
                $obj = new InstanceAuditLogFilters();
                $obj->deserialize($value);
                array_push($this->LogFilter, $obj);
            }
        }
    }
}
