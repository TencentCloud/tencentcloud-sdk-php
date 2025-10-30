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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAutoScalingActivities请求参数结构体
 *
 * @method array getActivityIds() 获取按照一个或者多个伸缩活动ID查询。伸缩活动ID形如：`asa-5l2ejpfo`。每次请求的上限为100。参数不支持同时指定`ActivityIds`和`Filters`。
 * @method void setActivityIds(array $ActivityIds) 设置按照一个或者多个伸缩活动ID查询。伸缩活动ID形如：`asa-5l2ejpfo`。每次请求的上限为100。参数不支持同时指定`ActivityIds`和`Filters`。
 * @method array getFilters() 获取过滤条件。过滤字段取值范围如下：
<ul>
<li><strong>auto-scaling-group-id</strong><ul><li>按照【<strong>伸缩组ID</strong>】进行过滤。可通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 或调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。</li><li>类型：String</li><li>必选：否</li><li>示例值: asg-kiju7yt5</li></ul></li><li><strong>activity-status-code</strong><ul><li>按照【<strong>伸缩活动状态</strong>】进行过滤</li><li>类型：String</li><li>必选：否</li><li>可选项: </li><ul><li>INIT：初始化中</li><li>RUNNING：运行中</li><li>SUCCESSFUL：活动成功</li><li>PARTIALLY_SUCCESSFUL：活动部分成功</li><li>FAILED：活动失败</li><li>CANCELLED：活动取消</li></ul></ul></li><li><strong>activity-type</strong><ul><li>按照【<strong>伸缩活动类型</strong>】进行过滤</li><li>类型：String</li><li>必选：否</li><li>可选项: </li><ul><li>SCALE_OUT：扩容活动</li><li>SCALE_IN：缩容活动</li><li>ATTACH_INSTANCES：添加实例</li><li>REMOVE_INSTANCES：销毁实例</li><li>DETACH_INSTANCES：移出实例</li><li>TERMINATE_INSTANCES_UNEXPECTEDLY：实例在CVM控制台被销毁</li><li>REPLACE_UNHEALTHY_INSTANCE：替换不健康实例</li><li>START_INSTANCES：开启实例</li><li>STOP_INSTANCES：关闭实例</li><li>INVOKE_COMMAND：执行命令</li></ul></ul></li><li><strong>activity-id</strong><ul><li>按照【<strong>伸缩活动ID</strong>】进行过滤。可通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 获取伸缩活动ID。</li><li>类型：String</li><li>必选：否</li><li>示例值: asa-hy6tr4ed</li></ul></li></ul>
每次请求的`Filters`的上限为10，`Filter.Values`的上限为5。参数不支持同时指定`ActivityIds`和`Filters`。
 * @method void setFilters(array $Filters) 设置过滤条件。过滤字段取值范围如下：
<ul>
<li><strong>auto-scaling-group-id</strong><ul><li>按照【<strong>伸缩组ID</strong>】进行过滤。可通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 或调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。</li><li>类型：String</li><li>必选：否</li><li>示例值: asg-kiju7yt5</li></ul></li><li><strong>activity-status-code</strong><ul><li>按照【<strong>伸缩活动状态</strong>】进行过滤</li><li>类型：String</li><li>必选：否</li><li>可选项: </li><ul><li>INIT：初始化中</li><li>RUNNING：运行中</li><li>SUCCESSFUL：活动成功</li><li>PARTIALLY_SUCCESSFUL：活动部分成功</li><li>FAILED：活动失败</li><li>CANCELLED：活动取消</li></ul></ul></li><li><strong>activity-type</strong><ul><li>按照【<strong>伸缩活动类型</strong>】进行过滤</li><li>类型：String</li><li>必选：否</li><li>可选项: </li><ul><li>SCALE_OUT：扩容活动</li><li>SCALE_IN：缩容活动</li><li>ATTACH_INSTANCES：添加实例</li><li>REMOVE_INSTANCES：销毁实例</li><li>DETACH_INSTANCES：移出实例</li><li>TERMINATE_INSTANCES_UNEXPECTEDLY：实例在CVM控制台被销毁</li><li>REPLACE_UNHEALTHY_INSTANCE：替换不健康实例</li><li>START_INSTANCES：开启实例</li><li>STOP_INSTANCES：关闭实例</li><li>INVOKE_COMMAND：执行命令</li></ul></ul></li><li><strong>activity-id</strong><ul><li>按照【<strong>伸缩活动ID</strong>】进行过滤。可通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 获取伸缩活动ID。</li><li>类型：String</li><li>必选：否</li><li>示例值: asa-hy6tr4ed</li></ul></li></ul>
每次请求的`Filters`的上限为10，`Filter.Values`的上限为5。参数不支持同时指定`ActivityIds`和`Filters`。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
 * @method integer getOffset() 获取偏移量，默认为0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
 * @method string getStartTime() 获取伸缩活动最早的开始时间，如果指定了ActivityIds，此参数将被忽略。取值为`UTC`时间，按照`ISO8601`标准，格式：`YYYY-MM-DDThh:mm:ssZ`。注意：当前仅保存近两年的伸缩活动。
 * @method void setStartTime(string $StartTime) 设置伸缩活动最早的开始时间，如果指定了ActivityIds，此参数将被忽略。取值为`UTC`时间，按照`ISO8601`标准，格式：`YYYY-MM-DDThh:mm:ssZ`。注意：当前仅保存近两年的伸缩活动。
 * @method string getEndTime() 获取伸缩活动最晚的结束时间，如果指定了ActivityIds，此参数将被忽略。取值为`UTC`时间，按照`ISO8601`标准，格式：`YYYY-MM-DDThh:mm:ssZ`。
 * @method void setEndTime(string $EndTime) 设置伸缩活动最晚的结束时间，如果指定了ActivityIds，此参数将被忽略。取值为`UTC`时间，按照`ISO8601`标准，格式：`YYYY-MM-DDThh:mm:ssZ`。
 */
class DescribeAutoScalingActivitiesRequest extends AbstractModel
{
    /**
     * @var array 按照一个或者多个伸缩活动ID查询。伸缩活动ID形如：`asa-5l2ejpfo`。每次请求的上限为100。参数不支持同时指定`ActivityIds`和`Filters`。
     */
    public $ActivityIds;

    /**
     * @var array 过滤条件。过滤字段取值范围如下：
<ul>
<li><strong>auto-scaling-group-id</strong><ul><li>按照【<strong>伸缩组ID</strong>】进行过滤。可通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 或调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。</li><li>类型：String</li><li>必选：否</li><li>示例值: asg-kiju7yt5</li></ul></li><li><strong>activity-status-code</strong><ul><li>按照【<strong>伸缩活动状态</strong>】进行过滤</li><li>类型：String</li><li>必选：否</li><li>可选项: </li><ul><li>INIT：初始化中</li><li>RUNNING：运行中</li><li>SUCCESSFUL：活动成功</li><li>PARTIALLY_SUCCESSFUL：活动部分成功</li><li>FAILED：活动失败</li><li>CANCELLED：活动取消</li></ul></ul></li><li><strong>activity-type</strong><ul><li>按照【<strong>伸缩活动类型</strong>】进行过滤</li><li>类型：String</li><li>必选：否</li><li>可选项: </li><ul><li>SCALE_OUT：扩容活动</li><li>SCALE_IN：缩容活动</li><li>ATTACH_INSTANCES：添加实例</li><li>REMOVE_INSTANCES：销毁实例</li><li>DETACH_INSTANCES：移出实例</li><li>TERMINATE_INSTANCES_UNEXPECTEDLY：实例在CVM控制台被销毁</li><li>REPLACE_UNHEALTHY_INSTANCE：替换不健康实例</li><li>START_INSTANCES：开启实例</li><li>STOP_INSTANCES：关闭实例</li><li>INVOKE_COMMAND：执行命令</li></ul></ul></li><li><strong>activity-id</strong><ul><li>按照【<strong>伸缩活动ID</strong>】进行过滤。可通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 获取伸缩活动ID。</li><li>类型：String</li><li>必选：否</li><li>示例值: asa-hy6tr4ed</li></ul></li></ul>
每次请求的`Filters`的上限为10，`Filter.Values`的上限为5。参数不支持同时指定`ActivityIds`和`Filters`。
     */
    public $Filters;

    /**
     * @var integer 返回数量，默认为20，最大值为100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
     */
    public $Offset;

    /**
     * @var string 伸缩活动最早的开始时间，如果指定了ActivityIds，此参数将被忽略。取值为`UTC`时间，按照`ISO8601`标准，格式：`YYYY-MM-DDThh:mm:ssZ`。注意：当前仅保存近两年的伸缩活动。
     */
    public $StartTime;

    /**
     * @var string 伸缩活动最晚的结束时间，如果指定了ActivityIds，此参数将被忽略。取值为`UTC`时间，按照`ISO8601`标准，格式：`YYYY-MM-DDThh:mm:ssZ`。
     */
    public $EndTime;

    /**
     * @param array $ActivityIds 按照一个或者多个伸缩活动ID查询。伸缩活动ID形如：`asa-5l2ejpfo`。每次请求的上限为100。参数不支持同时指定`ActivityIds`和`Filters`。
     * @param array $Filters 过滤条件。过滤字段取值范围如下：
<ul>
<li><strong>auto-scaling-group-id</strong><ul><li>按照【<strong>伸缩组ID</strong>】进行过滤。可通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 或调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。</li><li>类型：String</li><li>必选：否</li><li>示例值: asg-kiju7yt5</li></ul></li><li><strong>activity-status-code</strong><ul><li>按照【<strong>伸缩活动状态</strong>】进行过滤</li><li>类型：String</li><li>必选：否</li><li>可选项: </li><ul><li>INIT：初始化中</li><li>RUNNING：运行中</li><li>SUCCESSFUL：活动成功</li><li>PARTIALLY_SUCCESSFUL：活动部分成功</li><li>FAILED：活动失败</li><li>CANCELLED：活动取消</li></ul></ul></li><li><strong>activity-type</strong><ul><li>按照【<strong>伸缩活动类型</strong>】进行过滤</li><li>类型：String</li><li>必选：否</li><li>可选项: </li><ul><li>SCALE_OUT：扩容活动</li><li>SCALE_IN：缩容活动</li><li>ATTACH_INSTANCES：添加实例</li><li>REMOVE_INSTANCES：销毁实例</li><li>DETACH_INSTANCES：移出实例</li><li>TERMINATE_INSTANCES_UNEXPECTEDLY：实例在CVM控制台被销毁</li><li>REPLACE_UNHEALTHY_INSTANCE：替换不健康实例</li><li>START_INSTANCES：开启实例</li><li>STOP_INSTANCES：关闭实例</li><li>INVOKE_COMMAND：执行命令</li></ul></ul></li><li><strong>activity-id</strong><ul><li>按照【<strong>伸缩活动ID</strong>】进行过滤。可通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 获取伸缩活动ID。</li><li>类型：String</li><li>必选：否</li><li>示例值: asa-hy6tr4ed</li></ul></li></ul>
每次请求的`Filters`的上限为10，`Filter.Values`的上限为5。参数不支持同时指定`ActivityIds`和`Filters`。
     * @param integer $Limit 返回数量，默认为20，最大值为100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
     * @param integer $Offset 偏移量，默认为0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
     * @param string $StartTime 伸缩活动最早的开始时间，如果指定了ActivityIds，此参数将被忽略。取值为`UTC`时间，按照`ISO8601`标准，格式：`YYYY-MM-DDThh:mm:ssZ`。注意：当前仅保存近两年的伸缩活动。
     * @param string $EndTime 伸缩活动最晚的结束时间，如果指定了ActivityIds，此参数将被忽略。取值为`UTC`时间，按照`ISO8601`标准，格式：`YYYY-MM-DDThh:mm:ssZ`。
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
        if (array_key_exists("ActivityIds",$param) and $param["ActivityIds"] !== null) {
            $this->ActivityIds = $param["ActivityIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
