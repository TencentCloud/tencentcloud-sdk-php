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
 * DescribeInstanceBackups请求参数结构体
 *
 * @method integer getLimit() 获取<p>每页输出的备份列表大小。默认大小为20，最大值为 100。</p>
 * @method void setLimit(integer $Limit) 设置<p>每页输出的备份列表大小。默认大小为20，最大值为 100。</p>
 * @method integer getOffset() 获取<p>分页偏移量，取Limit整数倍。计算公式：offset=limit*(页码-1)。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，取Limit整数倍。计算公式：offset=limit*(页码-1)。</p>
 * @method string getInstanceId() 获取<p>待操作的实例ID，可通过 DescribeInstance 接口返回值中的 InstanceId 获取。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>待操作的实例ID，可通过 DescribeInstance 接口返回值中的 InstanceId 获取。</p>
 * @method string getBeginTime() 获取<p>开始时间，格式如：2017-02-08 16:46:34。查询实例在 [beginTime, endTime] 时间段内开始备份的备份列表，查询时间最大跨度30天。</p>
 * @method void setBeginTime(string $BeginTime) 设置<p>开始时间，格式如：2017-02-08 16:46:34。查询实例在 [beginTime, endTime] 时间段内开始备份的备份列表，查询时间最大跨度30天。</p>
 * @method string getEndTime() 获取<p>结束时间，格式如：2017-02-08 19:09:26。查询实例在 [beginTime, endTime] 时间段内开始备份的备份列表，查询时间最大跨度30天。</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间，格式如：2017-02-08 19:09:26。查询实例在 [beginTime, endTime] 时间段内开始备份的备份列表，查询时间最大跨度30天。</p>
 * @method array getStatus() 获取<p>备份任务的状态：<br>1：备份在流程中。<br>2：备份正常。<br>3：备份转RDB文件处理中。<br>4：已完成RDB转换。<br>-1：备份已过期。<br>-2：备份已删除。</p>
 * @method void setStatus(array $Status) 设置<p>备份任务的状态：<br>1：备份在流程中。<br>2：备份正常。<br>3：备份转RDB文件处理中。<br>4：已完成RDB转换。<br>-1：备份已过期。<br>-2：备份已删除。</p>
 * @method string getInstanceName() 获取<p>实例名称，支持根据实例名称模糊搜索。</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称，支持根据实例名称模糊搜索。</p>
 */
class DescribeInstanceBackupsRequest extends AbstractModel
{
    /**
     * @var integer <p>每页输出的备份列表大小。默认大小为20，最大值为 100。</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页偏移量，取Limit整数倍。计算公式：offset=limit*(页码-1)。</p>
     */
    public $Offset;

    /**
     * @var string <p>待操作的实例ID，可通过 DescribeInstance 接口返回值中的 InstanceId 获取。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>开始时间，格式如：2017-02-08 16:46:34。查询实例在 [beginTime, endTime] 时间段内开始备份的备份列表，查询时间最大跨度30天。</p>
     */
    public $BeginTime;

    /**
     * @var string <p>结束时间，格式如：2017-02-08 19:09:26。查询实例在 [beginTime, endTime] 时间段内开始备份的备份列表，查询时间最大跨度30天。</p>
     */
    public $EndTime;

    /**
     * @var array <p>备份任务的状态：<br>1：备份在流程中。<br>2：备份正常。<br>3：备份转RDB文件处理中。<br>4：已完成RDB转换。<br>-1：备份已过期。<br>-2：备份已删除。</p>
     */
    public $Status;

    /**
     * @var string <p>实例名称，支持根据实例名称模糊搜索。</p>
     */
    public $InstanceName;

    /**
     * @param integer $Limit <p>每页输出的备份列表大小。默认大小为20，最大值为 100。</p>
     * @param integer $Offset <p>分页偏移量，取Limit整数倍。计算公式：offset=limit*(页码-1)。</p>
     * @param string $InstanceId <p>待操作的实例ID，可通过 DescribeInstance 接口返回值中的 InstanceId 获取。</p>
     * @param string $BeginTime <p>开始时间，格式如：2017-02-08 16:46:34。查询实例在 [beginTime, endTime] 时间段内开始备份的备份列表，查询时间最大跨度30天。</p>
     * @param string $EndTime <p>结束时间，格式如：2017-02-08 19:09:26。查询实例在 [beginTime, endTime] 时间段内开始备份的备份列表，查询时间最大跨度30天。</p>
     * @param array $Status <p>备份任务的状态：<br>1：备份在流程中。<br>2：备份正常。<br>3：备份转RDB文件处理中。<br>4：已完成RDB转换。<br>-1：备份已过期。<br>-2：备份已删除。</p>
     * @param string $InstanceName <p>实例名称，支持根据实例名称模糊搜索。</p>
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }
    }
}
