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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateExportTask请求参数结构体
 *
 * @method string getInstanceId() 获取<p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
 * @method string getLogType() 获取<p>日志类型。</p><p>枚举值：</p><ul><li>auditLog： 审计日志。</li></ul>
 * @method void setLogType(string $LogType) 设置<p>日志类型。</p><p>枚举值：</p><ul><li>auditLog： 审计日志。</li></ul>
 * @method string getStartTime() 获取<p>日志检索的起始时间。</p><p>参数格式：YYYY-MM-DD HH:mm:ss，例如 2026-03-06 00:00:00。返回结果中仅包含该时间点及之后的日志。</p>
 * @method void setStartTime(string $StartTime) 设置<p>日志检索的起始时间。</p><p>参数格式：YYYY-MM-DD HH:mm:ss，例如 2026-03-06 00:00:00。返回结果中仅包含该时间点及之后的日志。</p>
 * @method string getEndTime() 获取<p>日志检索的结束时间。</p><p>参数格式：YYYY-MM-DD HH:mm:ss，例如 2026-03-06 23:59:59。返回结果中仅包含该时间点及之前的日志。</p>
 * @method void setEndTime(string $EndTime) 设置<p>日志检索的结束时间。</p><p>参数格式：YYYY-MM-DD HH:mm:ss，例如 2026-03-06 23:59:59。返回结果中仅包含该时间点及之前的日志。</p>
 * @method array getLogFilter() 获取<p>设置日志筛选字段，过滤并下载符合条件的日志。</p>
 * @method void setLogFilter(array $LogFilter) 设置<p>设置日志筛选字段，过滤并下载符合条件的日志。</p>
 * @method array getColumnFilter() 获取<p>自定义下载的日志字段，多个字段以逗号分隔，例如 &quot;timestamp,operation,user&quot;。指定后仅下载所选字段的数据。不传该参数时，默认下载所有字段。</p>
 * @method void setColumnFilter(array $ColumnFilter) 设置<p>自定义下载的日志字段，多个字段以逗号分隔，例如 &quot;timestamp,operation,user&quot;。指定后仅下载所选字段的数据。不传该参数时，默认下载所有字段。</p>
 */
class CreateExportTaskRequest extends AbstractModel
{
    /**
     * @var string <p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>日志类型。</p><p>枚举值：</p><ul><li>auditLog： 审计日志。</li></ul>
     */
    public $LogType;

    /**
     * @var string <p>日志检索的起始时间。</p><p>参数格式：YYYY-MM-DD HH:mm:ss，例如 2026-03-06 00:00:00。返回结果中仅包含该时间点及之后的日志。</p>
     */
    public $StartTime;

    /**
     * @var string <p>日志检索的结束时间。</p><p>参数格式：YYYY-MM-DD HH:mm:ss，例如 2026-03-06 23:59:59。返回结果中仅包含该时间点及之前的日志。</p>
     */
    public $EndTime;

    /**
     * @var array <p>设置日志筛选字段，过滤并下载符合条件的日志。</p>
     */
    public $LogFilter;

    /**
     * @var array <p>自定义下载的日志字段，多个字段以逗号分隔，例如 &quot;timestamp,operation,user&quot;。指定后仅下载所选字段的数据。不传该参数时，默认下载所有字段。</p>
     */
    public $ColumnFilter;

    /**
     * @param string $InstanceId <p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
     * @param string $LogType <p>日志类型。</p><p>枚举值：</p><ul><li>auditLog： 审计日志。</li></ul>
     * @param string $StartTime <p>日志检索的起始时间。</p><p>参数格式：YYYY-MM-DD HH:mm:ss，例如 2026-03-06 00:00:00。返回结果中仅包含该时间点及之后的日志。</p>
     * @param string $EndTime <p>日志检索的结束时间。</p><p>参数格式：YYYY-MM-DD HH:mm:ss，例如 2026-03-06 23:59:59。返回结果中仅包含该时间点及之前的日志。</p>
     * @param array $LogFilter <p>设置日志筛选字段，过滤并下载符合条件的日志。</p>
     * @param array $ColumnFilter <p>自定义下载的日志字段，多个字段以逗号分隔，例如 &quot;timestamp,operation,user&quot;。指定后仅下载所选字段的数据。不传该参数时，默认下载所有字段。</p>
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
