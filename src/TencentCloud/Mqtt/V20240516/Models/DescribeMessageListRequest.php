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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMessageList请求参数结构体
 *
 * @method string getInstanceId() 获取腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
 * @method void setInstanceId(string $InstanceId) 设置腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
 * @method string getTopic() 获取要查询的一级Topic，可从 [查询MQTT主题列表](https://cloud.tencent.com/document/product/1778/111082) 获取。
 * @method void setTopic(string $Topic) 设置要查询的一级Topic，可从 [查询MQTT主题列表](https://cloud.tencent.com/document/product/1778/111082) 获取。
 * @method integer getStartTime() 获取开始时间，毫秒级时间戳 。
 * @method void setStartTime(integer $StartTime) 设置开始时间，毫秒级时间戳 。
 * @method integer getEndTime() 获取结束时间，毫秒级时间戳 。
 * @method void setEndTime(integer $EndTime) 设置结束时间，毫秒级时间戳 。
 * @method string getTaskRequestId() 获取请求任务id，用于相同查询参数下查询加速，第一次查询时无需传递，第一次查询会根据本次查询参数生成查询任务ID，保留查询条件，查询下一页消息时可传递第一次查询返回的任务ID。
 * @method void setTaskRequestId(string $TaskRequestId) 设置请求任务id，用于相同查询参数下查询加速，第一次查询时无需传递，第一次查询会根据本次查询参数生成查询任务ID，保留查询条件，查询下一页消息时可传递第一次查询返回的任务ID。
 * @method integer getOffset() 获取查询起始位置，默认0
 * @method void setOffset(integer $Offset) 设置查询起始位置，默认0
 * @method integer getLimit() 获取查询结果限制数量，默认20，最大50
 * @method void setLimit(integer $Limit) 设置查询结果限制数量，默认20，最大50
 */
class DescribeMessageListRequest extends AbstractModel
{
    /**
     * @var string 腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
     */
    public $InstanceId;

    /**
     * @var string 要查询的一级Topic，可从 [查询MQTT主题列表](https://cloud.tencent.com/document/product/1778/111082) 获取。
     */
    public $Topic;

    /**
     * @var integer 开始时间，毫秒级时间戳 。
     */
    public $StartTime;

    /**
     * @var integer 结束时间，毫秒级时间戳 。
     */
    public $EndTime;

    /**
     * @var string 请求任务id，用于相同查询参数下查询加速，第一次查询时无需传递，第一次查询会根据本次查询参数生成查询任务ID，保留查询条件，查询下一页消息时可传递第一次查询返回的任务ID。
     */
    public $TaskRequestId;

    /**
     * @var integer 查询起始位置，默认0
     */
    public $Offset;

    /**
     * @var integer 查询结果限制数量，默认20，最大50
     */
    public $Limit;

    /**
     * @param string $InstanceId 腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
     * @param string $Topic 要查询的一级Topic，可从 [查询MQTT主题列表](https://cloud.tencent.com/document/product/1778/111082) 获取。
     * @param integer $StartTime 开始时间，毫秒级时间戳 。
     * @param integer $EndTime 结束时间，毫秒级时间戳 。
     * @param string $TaskRequestId 请求任务id，用于相同查询参数下查询加速，第一次查询时无需传递，第一次查询会根据本次查询参数生成查询任务ID，保留查询条件，查询下一页消息时可传递第一次查询返回的任务ID。
     * @param integer $Offset 查询起始位置，默认0
     * @param integer $Limit 查询结果限制数量，默认20，最大50
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

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskRequestId",$param) and $param["TaskRequestId"] !== null) {
            $this->TaskRequestId = $param["TaskRequestId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
