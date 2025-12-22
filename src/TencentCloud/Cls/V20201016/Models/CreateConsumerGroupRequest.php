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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateConsumerGroup请求参数结构体
 *
 * @method string getConsumerGroup() 获取创建的消费者组标识
限制： 字母数字下划线，不允许数字开头，长度限制256
 * @method void setConsumerGroup(string $ConsumerGroup) 设置创建的消费者组标识
限制： 字母数字下划线，不允许数字开头，长度限制256
 * @method integer getTimeout() 获取消费者心跳超时时间（秒）
 * @method void setTimeout(integer $Timeout) 设置消费者心跳超时时间（秒）
 * @method array getTopics() 获取创建的消费者组包含的日志主题列表
 * @method void setTopics(array $Topics) 设置创建的消费者组包含的日志主题列表
 * @method string getLogsetId() 获取日志集Id（日志主题所属的日志集）
 * @method void setLogsetId(string $LogsetId) 设置日志集Id（日志主题所属的日志集）
 */
class CreateConsumerGroupRequest extends AbstractModel
{
    /**
     * @var string 创建的消费者组标识
限制： 字母数字下划线，不允许数字开头，长度限制256
     */
    public $ConsumerGroup;

    /**
     * @var integer 消费者心跳超时时间（秒）
     */
    public $Timeout;

    /**
     * @var array 创建的消费者组包含的日志主题列表
     */
    public $Topics;

    /**
     * @var string 日志集Id（日志主题所属的日志集）
     */
    public $LogsetId;

    /**
     * @param string $ConsumerGroup 创建的消费者组标识
限制： 字母数字下划线，不允许数字开头，长度限制256
     * @param integer $Timeout 消费者心跳超时时间（秒）
     * @param array $Topics 创建的消费者组包含的日志主题列表
     * @param string $LogsetId 日志集Id（日志主题所属的日志集）
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
        if (array_key_exists("ConsumerGroup",$param) and $param["ConsumerGroup"] !== null) {
            $this->ConsumerGroup = $param["ConsumerGroup"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("Topics",$param) and $param["Topics"] !== null) {
            $this->Topics = $param["Topics"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }
    }
}
