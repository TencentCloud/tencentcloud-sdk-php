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
 * DescribeSlowLog请求参数结构体
 *
 * @method string getInstanceId() 获取指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。

 * @method void setInstanceId(string $InstanceId) 设置指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。

 * @method string getBeginTime() 获取预查询慢日志的起始时间，查询时间最大跨度30天。
 * @method void setBeginTime(string $BeginTime) 设置预查询慢日志的起始时间，查询时间最大跨度30天。
 * @method string getEndTime() 获取预查询慢日志的结束时间，查询时间最大跨度30天
 * @method void setEndTime(string $EndTime) 设置预查询慢日志的结束时间，查询时间最大跨度30天
 * @method integer getMinQueryTime() 获取慢查询平均执行时间阈值，单位：毫秒。
 * @method void setMinQueryTime(integer $MinQueryTime) 设置慢查询平均执行时间阈值，单位：毫秒。
 * @method integer getLimit() 获取每个页面展示的慢查询条数，默认值为20，最大100。
 * @method void setLimit(integer $Limit) 设置每个页面展示的慢查询条数，默认值为20，最大100。
 * @method integer getOffset() 获取慢查询条数的偏移量，取Limit整数倍。计算公式：offset=limit*(页码-1)。
 * @method void setOffset(integer $Offset) 设置慢查询条数的偏移量，取Limit整数倍。计算公式：offset=limit*(页码-1)。
 * @method string getRole() 获取节点所属角色。
- master：主节点。
- slave：从节点。
 * @method void setRole(string $Role) 设置节点所属角色。
- master：主节点。
- slave：从节点。
 */
class DescribeSlowLogRequest extends AbstractModel
{
    /**
     * @var string 指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。

     */
    public $InstanceId;

    /**
     * @var string 预查询慢日志的起始时间，查询时间最大跨度30天。
     */
    public $BeginTime;

    /**
     * @var string 预查询慢日志的结束时间，查询时间最大跨度30天
     */
    public $EndTime;

    /**
     * @var integer 慢查询平均执行时间阈值，单位：毫秒。
     */
    public $MinQueryTime;

    /**
     * @var integer 每个页面展示的慢查询条数，默认值为20，最大100。
     */
    public $Limit;

    /**
     * @var integer 慢查询条数的偏移量，取Limit整数倍。计算公式：offset=limit*(页码-1)。
     */
    public $Offset;

    /**
     * @var string 节点所属角色。
- master：主节点。
- slave：从节点。
     */
    public $Role;

    /**
     * @param string $InstanceId 指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。

     * @param string $BeginTime 预查询慢日志的起始时间，查询时间最大跨度30天。
     * @param string $EndTime 预查询慢日志的结束时间，查询时间最大跨度30天
     * @param integer $MinQueryTime 慢查询平均执行时间阈值，单位：毫秒。
     * @param integer $Limit 每个页面展示的慢查询条数，默认值为20，最大100。
     * @param integer $Offset 慢查询条数的偏移量，取Limit整数倍。计算公式：offset=limit*(页码-1)。
     * @param string $Role 节点所属角色。
- master：主节点。
- slave：从节点。
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

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MinQueryTime",$param) and $param["MinQueryTime"] !== null) {
            $this->MinQueryTime = $param["MinQueryTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }
    }
}
