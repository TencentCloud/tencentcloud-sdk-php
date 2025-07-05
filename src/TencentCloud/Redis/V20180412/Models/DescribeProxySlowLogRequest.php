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
 * DescribeProxySlowLog请求参数结构体
 *
 * @method string getInstanceId() 获取指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。

 * @method void setInstanceId(string $InstanceId) 设置指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。

 * @method string getBeginTime() 获取慢查询的开始时间，查询时间最大跨度30天。
 * @method void setBeginTime(string $BeginTime) 设置慢查询的开始时间，查询时间最大跨度30天。
 * @method string getEndTime() 获取慢查询的结束时间，查询时间最大跨度30天。
 * @method void setEndTime(string $EndTime) 设置慢查询的结束时间，查询时间最大跨度30天。
 * @method integer getMinQueryTime() 获取慢查询阈值，单位：毫秒。
 * @method void setMinQueryTime(integer $MinQueryTime) 设置慢查询阈值，单位：毫秒。
 * @method integer getLimit() 获取每页输出的任务列表大小，默认为 20，最多输出100条。
 * @method void setLimit(integer $Limit) 设置每页输出的任务列表大小，默认为 20，最多输出100条。
 * @method integer getOffset() 获取分页偏移量，取Limit整数倍，计算公式：offset=limit*(页码-1)。
 * @method void setOffset(integer $Offset) 设置分页偏移量，取Limit整数倍，计算公式：offset=limit*(页码-1)。
 */
class DescribeProxySlowLogRequest extends AbstractModel
{
    /**
     * @var string 指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。

     */
    public $InstanceId;

    /**
     * @var string 慢查询的开始时间，查询时间最大跨度30天。
     */
    public $BeginTime;

    /**
     * @var string 慢查询的结束时间，查询时间最大跨度30天。
     */
    public $EndTime;

    /**
     * @var integer 慢查询阈值，单位：毫秒。
     */
    public $MinQueryTime;

    /**
     * @var integer 每页输出的任务列表大小，默认为 20，最多输出100条。
     */
    public $Limit;

    /**
     * @var integer 分页偏移量，取Limit整数倍，计算公式：offset=limit*(页码-1)。
     */
    public $Offset;

    /**
     * @param string $InstanceId 指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。

     * @param string $BeginTime 慢查询的开始时间，查询时间最大跨度30天。
     * @param string $EndTime 慢查询的结束时间，查询时间最大跨度30天。
     * @param integer $MinQueryTime 慢查询阈值，单位：毫秒。
     * @param integer $Limit 每页输出的任务列表大小，默认为 20，最多输出100条。
     * @param integer $Offset 分页偏移量，取Limit整数倍，计算公式：offset=limit*(页码-1)。
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
    }
}
