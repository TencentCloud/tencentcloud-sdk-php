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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEsInstanceEventLists请求参数结构体
 *
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method string getStartTime() 获取起始时间, e.g. "2019-03-07 16:30:39"
 * @method void setStartTime(string $StartTime) 设置起始时间, e.g. "2019-03-07 16:30:39"
 * @method string getEndTime() 获取结束时间, e.g. "2019-03-30 20:18:03"
 * @method void setEndTime(string $EndTime) 设置结束时间, e.g. "2019-03-30 20:18:03"
 * @method array getInstanceIds() 获取集群id，非必填，查询集群相关的事件
 * @method void setInstanceIds(array $InstanceIds) 设置集群id，非必填，查询集群相关的事件
 * @method array getEventTypes() 获取查询的类型，包括：硬件异常、用户变更和智能运维等，默认查询所有。1：硬件异常；2：用户变更；3：智能运维
 * @method void setEventTypes(array $EventTypes) 设置查询的类型，包括：硬件异常、用户变更和智能运维等，默认查询所有。1：硬件异常；2：用户变更；3：智能运维
 * @method array getEventStatus() 获取事件状态
 * @method void setEventStatus(array $EventStatus) 设置事件状态
 */
class DescribeEsInstanceEventListsRequest extends AbstractModel
{
    /**
     * @var integer 返回数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var string 起始时间, e.g. "2019-03-07 16:30:39"
     */
    public $StartTime;

    /**
     * @var string 结束时间, e.g. "2019-03-30 20:18:03"
     */
    public $EndTime;

    /**
     * @var array 集群id，非必填，查询集群相关的事件
     */
    public $InstanceIds;

    /**
     * @var array 查询的类型，包括：硬件异常、用户变更和智能运维等，默认查询所有。1：硬件异常；2：用户变更；3：智能运维
     */
    public $EventTypes;

    /**
     * @var array 事件状态
     */
    public $EventStatus;

    /**
     * @param integer $Limit 返回数量，默认为20，最大值为100。
     * @param integer $Offset 偏移量，默认为0。
     * @param string $StartTime 起始时间, e.g. "2019-03-07 16:30:39"
     * @param string $EndTime 结束时间, e.g. "2019-03-30 20:18:03"
     * @param array $InstanceIds 集群id，非必填，查询集群相关的事件
     * @param array $EventTypes 查询的类型，包括：硬件异常、用户变更和智能运维等，默认查询所有。1：硬件异常；2：用户变更；3：智能运维
     * @param array $EventStatus 事件状态
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("EventTypes",$param) and $param["EventTypes"] !== null) {
            $this->EventTypes = $param["EventTypes"];
        }

        if (array_key_exists("EventStatus",$param) and $param["EventStatus"] !== null) {
            $this->EventStatus = $param["EventStatus"];
        }
    }
}
