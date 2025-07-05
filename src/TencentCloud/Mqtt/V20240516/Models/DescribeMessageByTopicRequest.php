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
 * DescribeMessageByTopic请求参数结构体
 *
 * @method string getInstanceId() 获取腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
 * @method void setInstanceId(string $InstanceId) 设置腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
 * @method string getTopic() 获取home/room
 * @method void setTopic(string $Topic) 设置home/room
 * @method integer getStartTime() 获取开始时间，毫秒级时间戳 。
 * @method void setStartTime(integer $StartTime) 设置开始时间，毫秒级时间戳 。
 * @method integer getMaxNumber() 获取查询消息条数，最大1024，默认100.
 * @method void setMaxNumber(integer $MaxNumber) 设置查询消息条数，最大1024，默认100.
 */
class DescribeMessageByTopicRequest extends AbstractModel
{
    /**
     * @var string 腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
     */
    public $InstanceId;

    /**
     * @var string home/room
     */
    public $Topic;

    /**
     * @var integer 开始时间，毫秒级时间戳 。
     */
    public $StartTime;

    /**
     * @var integer 查询消息条数，最大1024，默认100.
     */
    public $MaxNumber;

    /**
     * @param string $InstanceId 腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
     * @param string $Topic home/room
     * @param integer $StartTime 开始时间，毫秒级时间戳 。
     * @param integer $MaxNumber 查询消息条数，最大1024，默认100.
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

        if (array_key_exists("MaxNumber",$param) and $param["MaxNumber"] !== null) {
            $this->MaxNumber = $param["MaxNumber"];
        }
    }
}
