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
 * ModifyTimeWindow请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method array getTimeRanges() 获取修改后的可维护时间段，其中每一个时间段的格式形如：10:00-12:00；起止时间按半个小时对齐；最短半个小时，最长三个小时；最多设置两个时间段；起止时间范围为：[00:00, 24:00]。
说明：设置两个时间段的 json 示例如下。
[
    "01:00-01:30",
    "02:00-02:30"
  ]
 * @method void setTimeRanges(array $TimeRanges) 设置修改后的可维护时间段，其中每一个时间段的格式形如：10:00-12:00；起止时间按半个小时对齐；最短半个小时，最长三个小时；最多设置两个时间段；起止时间范围为：[00:00, 24:00]。
说明：设置两个时间段的 json 示例如下。
[
    "01:00-01:30",
    "02:00-02:30"
  ]
 * @method array getWeekdays() 获取指定修改哪一天的可维护时间段，可能的取值为：monday，tuesday，wednesday，thursday，friday，saturday，sunday。如果不指定该值或者为空，则默认一周七天都修改。
说明：指定修改多天的 json 示例如下。
[
    "monday",
    "tuesday"
  ]
 * @method void setWeekdays(array $Weekdays) 设置指定修改哪一天的可维护时间段，可能的取值为：monday，tuesday，wednesday，thursday，friday，saturday，sunday。如果不指定该值或者为空，则默认一周七天都修改。
说明：指定修改多天的 json 示例如下。
[
    "monday",
    "tuesday"
  ]
 * @method integer getMaxDelayTime() 获取数据延迟阈值（秒），仅对主实例和灾备实例有效。不传默认不修改，保持原来的阈值，取值范围：1-10的整数。
 * @method void setMaxDelayTime(integer $MaxDelayTime) 设置数据延迟阈值（秒），仅对主实例和灾备实例有效。不传默认不修改，保持原来的阈值，取值范围：1-10的整数。
 */
class ModifyTimeWindowRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     */
    public $InstanceId;

    /**
     * @var array 修改后的可维护时间段，其中每一个时间段的格式形如：10:00-12:00；起止时间按半个小时对齐；最短半个小时，最长三个小时；最多设置两个时间段；起止时间范围为：[00:00, 24:00]。
说明：设置两个时间段的 json 示例如下。
[
    "01:00-01:30",
    "02:00-02:30"
  ]
     */
    public $TimeRanges;

    /**
     * @var array 指定修改哪一天的可维护时间段，可能的取值为：monday，tuesday，wednesday，thursday，friday，saturday，sunday。如果不指定该值或者为空，则默认一周七天都修改。
说明：指定修改多天的 json 示例如下。
[
    "monday",
    "tuesday"
  ]
     */
    public $Weekdays;

    /**
     * @var integer 数据延迟阈值（秒），仅对主实例和灾备实例有效。不传默认不修改，保持原来的阈值，取值范围：1-10的整数。
     */
    public $MaxDelayTime;

    /**
     * @param string $InstanceId 实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     * @param array $TimeRanges 修改后的可维护时间段，其中每一个时间段的格式形如：10:00-12:00；起止时间按半个小时对齐；最短半个小时，最长三个小时；最多设置两个时间段；起止时间范围为：[00:00, 24:00]。
说明：设置两个时间段的 json 示例如下。
[
    "01:00-01:30",
    "02:00-02:30"
  ]
     * @param array $Weekdays 指定修改哪一天的可维护时间段，可能的取值为：monday，tuesday，wednesday，thursday，friday，saturday，sunday。如果不指定该值或者为空，则默认一周七天都修改。
说明：指定修改多天的 json 示例如下。
[
    "monday",
    "tuesday"
  ]
     * @param integer $MaxDelayTime 数据延迟阈值（秒），仅对主实例和灾备实例有效。不传默认不修改，保持原来的阈值，取值范围：1-10的整数。
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

        if (array_key_exists("TimeRanges",$param) and $param["TimeRanges"] !== null) {
            $this->TimeRanges = $param["TimeRanges"];
        }

        if (array_key_exists("Weekdays",$param) and $param["Weekdays"] !== null) {
            $this->Weekdays = $param["Weekdays"];
        }

        if (array_key_exists("MaxDelayTime",$param) and $param["MaxDelayTime"] !== null) {
            $this->MaxDelayTime = $param["MaxDelayTime"];
        }
    }
}
