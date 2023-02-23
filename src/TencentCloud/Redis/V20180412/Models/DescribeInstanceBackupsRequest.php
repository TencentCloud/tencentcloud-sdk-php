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
 * DescribeInstanceBackups请求参数结构体
 *
 * @method integer getLimit() 获取每页输出的备份列表大小。默认大小为20，最大值为 100。
 * @method void setLimit(integer $Limit) 设置每页输出的备份列表大小。默认大小为20，最大值为 100。
 * @method integer getOffset() 获取分页偏移量，取Limit整数倍。计算公式：offset=limit*(页码-1)。
 * @method void setOffset(integer $Offset) 设置分页偏移量，取Limit整数倍。计算公式：offset=limit*(页码-1)。
 * @method string getInstanceId() 获取待操作的实例ID，可通过 DescribeInstance 接口返回值中的 InstanceId 获取。
 * @method void setInstanceId(string $InstanceId) 设置待操作的实例ID，可通过 DescribeInstance 接口返回值中的 InstanceId 获取。
 * @method string getBeginTime() 获取开始时间，格式如：2017-02-08 16:46:34。查询实例在 [beginTime, endTime] 时间段内开始备份的备份列表。
 * @method void setBeginTime(string $BeginTime) 设置开始时间，格式如：2017-02-08 16:46:34。查询实例在 [beginTime, endTime] 时间段内开始备份的备份列表。
 * @method string getEndTime() 获取结束时间，格式如：2017-02-08 19:09:26。查询实例在 [beginTime, endTime] 时间段内开始备份的备份列表。
 * @method void setEndTime(string $EndTime) 设置结束时间，格式如：2017-02-08 19:09:26。查询实例在 [beginTime, endTime] 时间段内开始备份的备份列表。
 * @method array getStatus() 获取备份任务的状态：
1：备份在流程中。
2：备份正常。
3：备份转RDB文件处理中。
4：已完成RDB转换。
-1：备份已过期。
-2：备份已删除。
 * @method void setStatus(array $Status) 设置备份任务的状态：
1：备份在流程中。
2：备份正常。
3：备份转RDB文件处理中。
4：已完成RDB转换。
-1：备份已过期。
-2：备份已删除。
 * @method string getInstanceName() 获取实例名称，支持根据实例名称模糊搜索。
 * @method void setInstanceName(string $InstanceName) 设置实例名称，支持根据实例名称模糊搜索。
 */
class DescribeInstanceBackupsRequest extends AbstractModel
{
    /**
     * @var integer 每页输出的备份列表大小。默认大小为20，最大值为 100。
     */
    public $Limit;

    /**
     * @var integer 分页偏移量，取Limit整数倍。计算公式：offset=limit*(页码-1)。
     */
    public $Offset;

    /**
     * @var string 待操作的实例ID，可通过 DescribeInstance 接口返回值中的 InstanceId 获取。
     */
    public $InstanceId;

    /**
     * @var string 开始时间，格式如：2017-02-08 16:46:34。查询实例在 [beginTime, endTime] 时间段内开始备份的备份列表。
     */
    public $BeginTime;

    /**
     * @var string 结束时间，格式如：2017-02-08 19:09:26。查询实例在 [beginTime, endTime] 时间段内开始备份的备份列表。
     */
    public $EndTime;

    /**
     * @var array 备份任务的状态：
1：备份在流程中。
2：备份正常。
3：备份转RDB文件处理中。
4：已完成RDB转换。
-1：备份已过期。
-2：备份已删除。
     */
    public $Status;

    /**
     * @var string 实例名称，支持根据实例名称模糊搜索。
     */
    public $InstanceName;

    /**
     * @param integer $Limit 每页输出的备份列表大小。默认大小为20，最大值为 100。
     * @param integer $Offset 分页偏移量，取Limit整数倍。计算公式：offset=limit*(页码-1)。
     * @param string $InstanceId 待操作的实例ID，可通过 DescribeInstance 接口返回值中的 InstanceId 获取。
     * @param string $BeginTime 开始时间，格式如：2017-02-08 16:46:34。查询实例在 [beginTime, endTime] 时间段内开始备份的备份列表。
     * @param string $EndTime 结束时间，格式如：2017-02-08 19:09:26。查询实例在 [beginTime, endTime] 时间段内开始备份的备份列表。
     * @param array $Status 备份任务的状态：
1：备份在流程中。
2：备份正常。
3：备份转RDB文件处理中。
4：已完成RDB转换。
-1：备份已过期。
-2：备份已删除。
     * @param string $InstanceName 实例名称，支持根据实例名称模糊搜索。
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
