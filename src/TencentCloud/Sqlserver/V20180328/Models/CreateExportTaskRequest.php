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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateExportTask请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getLogType() 获取<p>日志类型：auditLog,slowLog,errLog</p>
 * @method void setLogType(string $LogType) 设置<p>日志类型：auditLog,slowLog,errLog</p>
 * @method string getStartTime() 获取<p>要检索日志的起始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>要检索日志的起始时间</p>
 * @method string getEndTime() 获取<p>要检索日志的结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>要检索日志的结束时间</p>
 * @method array getLogFilter() 获取<p>过滤条件[type, Compare, Value]</p>
 * @method void setLogFilter(array $LogFilter) 设置<p>过滤条件[type, Compare, Value]</p>
 * @method array getColumnFilter() 获取<p>过滤列</p>
 * @method void setColumnFilter(array $ColumnFilter) 设置<p>过滤列</p>
 */
class CreateExportTaskRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>日志类型：auditLog,slowLog,errLog</p>
     */
    public $LogType;

    /**
     * @var string <p>要检索日志的起始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>要检索日志的结束时间</p>
     */
    public $EndTime;

    /**
     * @var array <p>过滤条件[type, Compare, Value]</p>
     */
    public $LogFilter;

    /**
     * @var array <p>过滤列</p>
     */
    public $ColumnFilter;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param string $LogType <p>日志类型：auditLog,slowLog,errLog</p>
     * @param string $StartTime <p>要检索日志的起始时间</p>
     * @param string $EndTime <p>要检索日志的结束时间</p>
     * @param array $LogFilter <p>过滤条件[type, Compare, Value]</p>
     * @param array $ColumnFilter <p>过滤列</p>
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

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("LogFilter",$param) and $param["LogFilter"] !== null) {
            $this->LogFilter = [];
            foreach ($param["LogFilter"] as $key => $value){
                $obj = new LogFilter();
                $obj->deserialize($value);
                array_push($this->LogFilter, $obj);
            }
        }

        if (array_key_exists("ColumnFilter",$param) and $param["ColumnFilter"] !== null) {
            $this->ColumnFilter = $param["ColumnFilter"];
        }
    }
}
