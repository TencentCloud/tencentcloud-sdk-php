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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 组件日志采集配置
 *
 * @method string getName() 获取组件名称
 * @method void setName(string $Name) 设置组件名称
 * @method integer getLogLevel() 获取日志级别，对于支持动态调整日志级别的组件，开启日志时可指定该参数
 * @method void setLogLevel(integer $LogLevel) 设置日志级别，对于支持动态调整日志级别的组件，开启日志时可指定该参数
 * @method string getLogSetId() 获取日志集ID。如果不指定，则自动创建
 * @method void setLogSetId(string $LogSetId) 设置日志集ID。如果不指定，则自动创建
 * @method string getTopicId() 获取日志主题ID。如果不指定，则自动创建
 * @method void setTopicId(string $TopicId) 设置日志主题ID。如果不指定，则自动创建
 * @method string getTopicRegion() 获取topic 所属region。 该参数可实现日志跨地域投递
 * @method void setTopicRegion(string $TopicRegion) 设置topic 所属region。 该参数可实现日志跨地域投递
 */
class ComponentLogConfig extends AbstractModel
{
    /**
     * @var string 组件名称
     */
    public $Name;

    /**
     * @var integer 日志级别，对于支持动态调整日志级别的组件，开启日志时可指定该参数
     */
    public $LogLevel;

    /**
     * @var string 日志集ID。如果不指定，则自动创建
     */
    public $LogSetId;

    /**
     * @var string 日志主题ID。如果不指定，则自动创建
     */
    public $TopicId;

    /**
     * @var string topic 所属region。 该参数可实现日志跨地域投递
     */
    public $TopicRegion;

    /**
     * @param string $Name 组件名称
     * @param integer $LogLevel 日志级别，对于支持动态调整日志级别的组件，开启日志时可指定该参数
     * @param string $LogSetId 日志集ID。如果不指定，则自动创建
     * @param string $TopicId 日志主题ID。如果不指定，则自动创建
     * @param string $TopicRegion topic 所属region。 该参数可实现日志跨地域投递
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("LogLevel",$param) and $param["LogLevel"] !== null) {
            $this->LogLevel = $param["LogLevel"];
        }

        if (array_key_exists("LogSetId",$param) and $param["LogSetId"] !== null) {
            $this->LogSetId = $param["LogSetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicRegion",$param) and $param["TopicRegion"] !== null) {
            $this->TopicRegion = $param["TopicRegion"];
        }
    }
}
