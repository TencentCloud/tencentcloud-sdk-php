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
 * @method string getInstanceId() 获取<p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
 * @method string getTopic() 获取<p>home/room</p>
 * @method void setTopic(string $Topic) 设置<p>home/room</p>
 * @method integer getStartTime() 获取<p>开始时间，毫秒级时间戳 。</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间，毫秒级时间戳 。</p>
 * @method integer getMaxNumber() 获取<p>查询消息条数，最大1024，默认100.</p>
 * @method void setMaxNumber(integer $MaxNumber) 设置<p>查询消息条数，最大1024，默认100.</p>
 * @method string getFilterExpression() 获取<p>消息 body 过滤表达式（Base64 编码），jq 1.6 语法</p><p>枚举值：</p><ul><li>LmxldmVsID09ICJFUlJPUiI=： .level == &quot;ERROR&quot; Base64编码后的字符串</li></ul>
 * @method void setFilterExpression(string $FilterExpression) 设置<p>消息 body 过滤表达式（Base64 编码），jq 1.6 语法</p><p>枚举值：</p><ul><li>LmxldmVsID09ICJFUlJPUiI=： .level == &quot;ERROR&quot; Base64编码后的字符串</li></ul>
 */
class DescribeMessageByTopicRequest extends AbstractModel
{
    /**
     * @var string <p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>home/room</p>
     */
    public $Topic;

    /**
     * @var integer <p>开始时间，毫秒级时间戳 。</p>
     */
    public $StartTime;

    /**
     * @var integer <p>查询消息条数，最大1024，默认100.</p>
     */
    public $MaxNumber;

    /**
     * @var string <p>消息 body 过滤表达式（Base64 编码），jq 1.6 语法</p><p>枚举值：</p><ul><li>LmxldmVsID09ICJFUlJPUiI=： .level == &quot;ERROR&quot; Base64编码后的字符串</li></ul>
     */
    public $FilterExpression;

    /**
     * @param string $InstanceId <p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
     * @param string $Topic <p>home/room</p>
     * @param integer $StartTime <p>开始时间，毫秒级时间戳 。</p>
     * @param integer $MaxNumber <p>查询消息条数，最大1024，默认100.</p>
     * @param string $FilterExpression <p>消息 body 过滤表达式（Base64 编码），jq 1.6 语法</p><p>枚举值：</p><ul><li>LmxldmVsID09ICJFUlJPUiI=： .level == &quot;ERROR&quot; Base64编码后的字符串</li></ul>
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

        if (array_key_exists("FilterExpression",$param) and $param["FilterExpression"] !== null) {
            $this->FilterExpression = $param["FilterExpression"];
        }
    }
}
