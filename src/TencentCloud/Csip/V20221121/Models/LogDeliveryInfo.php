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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志类型投递主题配置
 *
 * @method integer getLogType() 获取日志类型
 * @method void setLogType(integer $LogType) 设置日志类型
 * @method string getTopicId() 获取投递的topicid
 * @method void setTopicId(string $TopicId) 设置投递的topicid
 * @method string getTopicName() 获取投递的topicname
 * @method void setTopicName(string $TopicName) 设置投递的topicname
 */
class LogDeliveryInfo extends AbstractModel
{
    /**
     * @var integer 日志类型
     */
    public $LogType;

    /**
     * @var string 投递的topicid
     */
    public $TopicId;

    /**
     * @var string 投递的topicname
     */
    public $TopicName;

    /**
     * @param integer $LogType 日志类型
     * @param string $TopicId 投递的topicid
     * @param string $TopicName 投递的topicname
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
        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }
    }
}
