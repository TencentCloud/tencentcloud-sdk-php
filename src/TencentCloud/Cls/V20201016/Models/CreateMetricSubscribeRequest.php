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
 * CreateMetricSubscribe请求参数结构体
 *
 * @method string getName() 获取名称：长度不超过64字符，以字母开头，接受0-9,a-z,A-Z, _,-,中文字符。
 * @method void setName(string $Name) 设置名称：长度不超过64字符，以字母开头，接受0-9,a-z,A-Z, _,-,中文字符。
 * @method string getTopicId() 获取日志主题id。
 * @method void setTopicId(string $TopicId) 设置日志主题id。
 * @method string getNamespace() 获取云产品命名空间。
 * @method void setNamespace(string $Namespace) 设置云产品命名空间。
 * @method array getMetrics() 获取数据库配置信息。
 * @method void setMetrics(array $Metrics) 设置数据库配置信息。
 * @method InstanceConfig getInstanceInfo() 获取实例配置配置。
 * @method void setInstanceInfo(InstanceConfig $InstanceInfo) 设置实例配置配置。
 */
class CreateMetricSubscribeRequest extends AbstractModel
{
    /**
     * @var string 名称：长度不超过64字符，以字母开头，接受0-9,a-z,A-Z, _,-,中文字符。
     */
    public $Name;

    /**
     * @var string 日志主题id。
     */
    public $TopicId;

    /**
     * @var string 云产品命名空间。
     */
    public $Namespace;

    /**
     * @var array 数据库配置信息。
     */
    public $Metrics;

    /**
     * @var InstanceConfig 实例配置配置。
     */
    public $InstanceInfo;

    /**
     * @param string $Name 名称：长度不超过64字符，以字母开头，接受0-9,a-z,A-Z, _,-,中文字符。
     * @param string $TopicId 日志主题id。
     * @param string $Namespace 云产品命名空间。
     * @param array $Metrics 数据库配置信息。
     * @param InstanceConfig $InstanceInfo 实例配置配置。
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

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = [];
            foreach ($param["Metrics"] as $key => $value){
                $obj = new MetricConfig();
                $obj->deserialize($value);
                array_push($this->Metrics, $obj);
            }
        }

        if (array_key_exists("InstanceInfo",$param) and $param["InstanceInfo"] !== null) {
            $this->InstanceInfo = new InstanceConfig();
            $this->InstanceInfo->deserialize($param["InstanceInfo"]);
        }
    }
}
