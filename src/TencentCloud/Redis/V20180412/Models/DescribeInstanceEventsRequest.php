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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceEvents请求参数结构体
 *
 * @method string getExecutionStartDate() 获取配置查询事件执行计划的起始日期，查询日期最大跨度30天。
 * @method void setExecutionStartDate(string $ExecutionStartDate) 设置配置查询事件执行计划的起始日期，查询日期最大跨度30天。
 * @method string getExecutionEndDate() 获取配置查询事件执行计划的结束日期，查询日期最大跨度30天。
 * @method void setExecutionEndDate(string $ExecutionEndDate) 设置配置查询事件执行计划的结束日期，查询日期最大跨度30天。
 * @method string getInstanceId() 获取指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。
 * @method integer getPageSize() 获取输出每页显示事件的数量，默认：10，最大100。
 * @method void setPageSize(integer $PageSize) 设置输出每页显示事件的数量，默认：10，最大100。
 * @method integer getPageNo() 获取配置查询事件的输出页码，即支持根据PageNo（页码）与 PageSize （每页输出数量）查询某一页的事件。默认：1。
 * @method void setPageNo(integer $PageNo) 设置配置查询事件的输出页码，即支持根据PageNo（页码）与 PageSize （每页输出数量）查询某一页的事件。默认：1。
 * @method array getStatus() 获取事件当前状态。
- Waiting：未到达执行日期或不在维护时间窗内的事件。
- Running：在维护时间窗内，正在执行维护的事件。
- Finished：已全部完成维护的事件。
- Canceled：已取消执行的事件。
 * @method void setStatus(array $Status) 设置事件当前状态。
- Waiting：未到达执行日期或不在维护时间窗内的事件。
- Running：在维护时间窗内，正在执行维护的事件。
- Finished：已全部完成维护的事件。
- Canceled：已取消执行的事件。
 * @method array getEventTypes() 获取事件类型，当前仅支持配置实例迁移、资源腾挪、机房裁撤相关的运维操作。该参数仅支持配置为 **InstanceMigration**。
 * @method void setEventTypes(array $EventTypes) 设置事件类型，当前仅支持配置实例迁移、资源腾挪、机房裁撤相关的运维操作。该参数仅支持配置为 **InstanceMigration**。
 * @method array getGrades() 获取配置查询事件等级。事件等级根据其影响严重程度和紧急程度进行分级，由重至轻依次为关键、重要、中等、一般。
- Critical：关键
- High：重要
- Middle：中等
- Low：一般
 * @method void setGrades(array $Grades) 设置配置查询事件等级。事件等级根据其影响严重程度和紧急程度进行分级，由重至轻依次为关键、重要、中等、一般。
- Critical：关键
- High：重要
- Middle：中等
- Low：一般
 */
class DescribeInstanceEventsRequest extends AbstractModel
{
    /**
     * @var string 配置查询事件执行计划的起始日期，查询日期最大跨度30天。
     */
    public $ExecutionStartDate;

    /**
     * @var string 配置查询事件执行计划的结束日期，查询日期最大跨度30天。
     */
    public $ExecutionEndDate;

    /**
     * @var string 指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。
     */
    public $InstanceId;

    /**
     * @var integer 输出每页显示事件的数量，默认：10，最大100。
     */
    public $PageSize;

    /**
     * @var integer 配置查询事件的输出页码，即支持根据PageNo（页码）与 PageSize （每页输出数量）查询某一页的事件。默认：1。
     */
    public $PageNo;

    /**
     * @var array 事件当前状态。
- Waiting：未到达执行日期或不在维护时间窗内的事件。
- Running：在维护时间窗内，正在执行维护的事件。
- Finished：已全部完成维护的事件。
- Canceled：已取消执行的事件。
     */
    public $Status;

    /**
     * @var array 事件类型，当前仅支持配置实例迁移、资源腾挪、机房裁撤相关的运维操作。该参数仅支持配置为 **InstanceMigration**。
     */
    public $EventTypes;

    /**
     * @var array 配置查询事件等级。事件等级根据其影响严重程度和紧急程度进行分级，由重至轻依次为关键、重要、中等、一般。
- Critical：关键
- High：重要
- Middle：中等
- Low：一般
     */
    public $Grades;

    /**
     * @param string $ExecutionStartDate 配置查询事件执行计划的起始日期，查询日期最大跨度30天。
     * @param string $ExecutionEndDate 配置查询事件执行计划的结束日期，查询日期最大跨度30天。
     * @param string $InstanceId 指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。
     * @param integer $PageSize 输出每页显示事件的数量，默认：10，最大100。
     * @param integer $PageNo 配置查询事件的输出页码，即支持根据PageNo（页码）与 PageSize （每页输出数量）查询某一页的事件。默认：1。
     * @param array $Status 事件当前状态。
- Waiting：未到达执行日期或不在维护时间窗内的事件。
- Running：在维护时间窗内，正在执行维护的事件。
- Finished：已全部完成维护的事件。
- Canceled：已取消执行的事件。
     * @param array $EventTypes 事件类型，当前仅支持配置实例迁移、资源腾挪、机房裁撤相关的运维操作。该参数仅支持配置为 **InstanceMigration**。
     * @param array $Grades 配置查询事件等级。事件等级根据其影响严重程度和紧急程度进行分级，由重至轻依次为关键、重要、中等、一般。
- Critical：关键
- High：重要
- Middle：中等
- Low：一般
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
        if (array_key_exists("ExecutionStartDate",$param) and $param["ExecutionStartDate"] !== null) {
            $this->ExecutionStartDate = $param["ExecutionStartDate"];
        }

        if (array_key_exists("ExecutionEndDate",$param) and $param["ExecutionEndDate"] !== null) {
            $this->ExecutionEndDate = $param["ExecutionEndDate"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EventTypes",$param) and $param["EventTypes"] !== null) {
            $this->EventTypes = $param["EventTypes"];
        }

        if (array_key_exists("Grades",$param) and $param["Grades"] !== null) {
            $this->Grades = $param["Grades"];
        }
    }
}
