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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 限流规则详情
 *
 * @method integer getThrottleRuleId() 获取<p>限流规则标识</p>
 * @method void setThrottleRuleId(integer $ThrottleRuleId) 设置<p>限流规则标识</p>
 * @method integer getThrottleType() 获取<p>限流类型</p><p>枚举值：</p><ul><li>1： 用户/客户端限流</li><li>2： 消费组限流</li><li>3： topic限流</li></ul>
 * @method void setThrottleType(integer $ThrottleType) 设置<p>限流类型</p><p>枚举值：</p><ul><li>1： 用户/客户端限流</li><li>2： 消费组限流</li><li>3： topic限流</li></ul>
 * @method string getClientId() 获取<p>客户端id</p>
 * @method void setClientId(string $ClientId) 设置<p>客户端id</p>
 * @method string getUserName() 获取<p>用户名</p>
 * @method void setUserName(string $UserName) 设置<p>用户名</p>
 * @method integer getConsumeThrottle() 获取<p>消费限流值,单位MB/s</p>
 * @method void setConsumeThrottle(integer $ConsumeThrottle) 设置<p>消费限流值,单位MB/s</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method string getTopicName() 获取<p>topic名称</p>
 * @method void setTopicName(string $TopicName) 设置<p>topic名称</p>
 * @method string getTopicId() 获取<p>topicId</p>
 * @method void setTopicId(string $TopicId) 设置<p>topicId</p>
 */
class ThrottleRuleDetail extends AbstractModel
{
    /**
     * @var integer <p>限流规则标识</p>
     */
    public $ThrottleRuleId;

    /**
     * @var integer <p>限流类型</p><p>枚举值：</p><ul><li>1： 用户/客户端限流</li><li>2： 消费组限流</li><li>3： topic限流</li></ul>
     */
    public $ThrottleType;

    /**
     * @var string <p>客户端id</p>
     */
    public $ClientId;

    /**
     * @var string <p>用户名</p>
     */
    public $UserName;

    /**
     * @var integer <p>消费限流值,单位MB/s</p>
     */
    public $ConsumeThrottle;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>topic名称</p>
     */
    public $TopicName;

    /**
     * @var string <p>topicId</p>
     */
    public $TopicId;

    /**
     * @param integer $ThrottleRuleId <p>限流规则标识</p>
     * @param integer $ThrottleType <p>限流类型</p><p>枚举值：</p><ul><li>1： 用户/客户端限流</li><li>2： 消费组限流</li><li>3： topic限流</li></ul>
     * @param string $ClientId <p>客户端id</p>
     * @param string $UserName <p>用户名</p>
     * @param integer $ConsumeThrottle <p>消费限流值,单位MB/s</p>
     * @param string $UpdateTime <p>更新时间</p>
     * @param string $TopicName <p>topic名称</p>
     * @param string $TopicId <p>topicId</p>
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
        if (array_key_exists("ThrottleRuleId",$param) and $param["ThrottleRuleId"] !== null) {
            $this->ThrottleRuleId = $param["ThrottleRuleId"];
        }

        if (array_key_exists("ThrottleType",$param) and $param["ThrottleType"] !== null) {
            $this->ThrottleType = $param["ThrottleType"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("ConsumeThrottle",$param) and $param["ConsumeThrottle"] !== null) {
            $this->ConsumeThrottle = $param["ConsumeThrottle"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }
    }
}
