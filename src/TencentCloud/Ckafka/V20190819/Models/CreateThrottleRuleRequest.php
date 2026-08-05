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
 * CreateThrottleRule请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例Id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例Id</p>
 * @method integer getThrottleType() 获取<p>限流类型:</p><p>枚举值：</p><ul><li>1： 用户/客户端限流</li><li>2： 消费组维度限流</li><li>3： Topic限流</li></ul>
 * @method void setThrottleType(integer $ThrottleType) 设置<p>限流类型:</p><p>枚举值：</p><ul><li>1： 用户/客户端限流</li><li>2： 消费组维度限流</li><li>3： Topic限流</li></ul>
 * @method array getGroupNameList() 获取<p>消费组名</p>
 * @method void setGroupNameList(array $GroupNameList) 设置<p>消费组名</p>
 * @method integer getConsumeThrottle() 获取<p>消费限流值,生产消费限流值,必填一个单位MB/s</p>
 * @method void setConsumeThrottle(integer $ConsumeThrottle) 设置<p>消费限流值,生产消费限流值,必填一个单位MB/s</p>
 * @method integer getProduceThrottle() 获取<p>生产限流值,生产消费限流值,单位MB/s</p>
 * @method void setProduceThrottle(integer $ProduceThrottle) 设置<p>生产限流值,生产消费限流值,单位MB/s</p>
 * @method array getClientIdList() 获取<p>用户客户端id</p>
 * @method void setClientIdList(array $ClientIdList) 设置<p>用户客户端id</p>
 * @method array getUserNameList() 获取<p>用户名</p>
 * @method void setUserNameList(array $UserNameList) 设置<p>用户名</p>
 * @method array getTopicNameList() 获取<p>topic名称</p>
 * @method void setTopicNameList(array $TopicNameList) 设置<p>topic名称</p>
 */
class CreateThrottleRuleRequest extends AbstractModel
{
    /**
     * @var string <p>实例Id</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>限流类型:</p><p>枚举值：</p><ul><li>1： 用户/客户端限流</li><li>2： 消费组维度限流</li><li>3： Topic限流</li></ul>
     */
    public $ThrottleType;

    /**
     * @var array <p>消费组名</p>
     */
    public $GroupNameList;

    /**
     * @var integer <p>消费限流值,生产消费限流值,必填一个单位MB/s</p>
     */
    public $ConsumeThrottle;

    /**
     * @var integer <p>生产限流值,生产消费限流值,单位MB/s</p>
     */
    public $ProduceThrottle;

    /**
     * @var array <p>用户客户端id</p>
     */
    public $ClientIdList;

    /**
     * @var array <p>用户名</p>
     */
    public $UserNameList;

    /**
     * @var array <p>topic名称</p>
     */
    public $TopicNameList;

    /**
     * @param string $InstanceId <p>实例Id</p>
     * @param integer $ThrottleType <p>限流类型:</p><p>枚举值：</p><ul><li>1： 用户/客户端限流</li><li>2： 消费组维度限流</li><li>3： Topic限流</li></ul>
     * @param array $GroupNameList <p>消费组名</p>
     * @param integer $ConsumeThrottle <p>消费限流值,生产消费限流值,必填一个单位MB/s</p>
     * @param integer $ProduceThrottle <p>生产限流值,生产消费限流值,单位MB/s</p>
     * @param array $ClientIdList <p>用户客户端id</p>
     * @param array $UserNameList <p>用户名</p>
     * @param array $TopicNameList <p>topic名称</p>
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

        if (array_key_exists("ThrottleType",$param) and $param["ThrottleType"] !== null) {
            $this->ThrottleType = $param["ThrottleType"];
        }

        if (array_key_exists("GroupNameList",$param) and $param["GroupNameList"] !== null) {
            $this->GroupNameList = $param["GroupNameList"];
        }

        if (array_key_exists("ConsumeThrottle",$param) and $param["ConsumeThrottle"] !== null) {
            $this->ConsumeThrottle = $param["ConsumeThrottle"];
        }

        if (array_key_exists("ProduceThrottle",$param) and $param["ProduceThrottle"] !== null) {
            $this->ProduceThrottle = $param["ProduceThrottle"];
        }

        if (array_key_exists("ClientIdList",$param) and $param["ClientIdList"] !== null) {
            $this->ClientIdList = $param["ClientIdList"];
        }

        if (array_key_exists("UserNameList",$param) and $param["UserNameList"] !== null) {
            $this->UserNameList = $param["UserNameList"];
        }

        if (array_key_exists("TopicNameList",$param) and $param["TopicNameList"] !== null) {
            $this->TopicNameList = $param["TopicNameList"];
        }
    }
}
