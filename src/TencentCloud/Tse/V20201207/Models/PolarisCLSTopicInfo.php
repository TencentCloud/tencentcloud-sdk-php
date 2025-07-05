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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 北极星日志主题信息
 *
 * @method string getLogSetId() 获取日志集ID
 * @method void setLogSetId(string $LogSetId) 设置日志集ID
 * @method string getLogSetName() 获取日志集名称
 * @method void setLogSetName(string $LogSetName) 设置日志集名称
 * @method string getTopicId() 获取日志主题ID
 * @method void setTopicId(string $TopicId) 设置日志主题ID
 * @method string getTopicName() 获取日志主题名称
 * @method void setTopicName(string $TopicName) 设置日志主题名称
 */
class PolarisCLSTopicInfo extends AbstractModel
{
    /**
     * @var string 日志集ID
     */
    public $LogSetId;

    /**
     * @var string 日志集名称
     */
    public $LogSetName;

    /**
     * @var string 日志主题ID
     */
    public $TopicId;

    /**
     * @var string 日志主题名称
     */
    public $TopicName;

    /**
     * @param string $LogSetId 日志集ID
     * @param string $LogSetName 日志集名称
     * @param string $TopicId 日志主题ID
     * @param string $TopicName 日志主题名称
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
        if (array_key_exists("LogSetId",$param) and $param["LogSetId"] !== null) {
            $this->LogSetId = $param["LogSetId"];
        }

        if (array_key_exists("LogSetName",$param) and $param["LogSetName"] !== null) {
            $this->LogSetName = $param["LogSetName"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }
    }
}
