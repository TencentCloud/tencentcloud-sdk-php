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
 * ModifyMetricSubscribe请求参数结构体
 *
 * @method string getTopicId() 获取指标采集任务的日志主题id。必填字段
 * @method void setTopicId(string $TopicId) 设置指标采集任务的日志主题id。必填字段
 * @method string getTaskId() 获取指标采集任务id。必填字段
 * @method void setTaskId(string $TaskId) 设置指标采集任务id。必填字段
 * @method string getName() 获取名称：长度不超过64字符，以字母开头，接受0-9,a-z,A-Z, _,-,中文字符。
 * @method void setName(string $Name) 设置名称：长度不超过64字符，以字母开头，接受0-9,a-z,A-Z, _,-,中文字符。
 * @method string getNamespace() 获取云产品命名空间。
 * @method void setNamespace(string $Namespace) 设置云产品命名空间。
 * @method array getMetrics() 获取指标配置信息。
 * @method void setMetrics(array $Metrics) 设置指标配置信息。
 * @method InstanceConfig getInstanceInfo() 获取实例配置信息。
 * @method void setInstanceInfo(InstanceConfig $InstanceInfo) 设置实例配置信息。
 * @method integer getEnable() 获取任务状态。

1： 未启用

2： 启用
 * @method void setEnable(integer $Enable) 设置任务状态。

1： 未启用

2： 启用
 */
class ModifyMetricSubscribeRequest extends AbstractModel
{
    /**
     * @var string 指标采集任务的日志主题id。必填字段
     */
    public $TopicId;

    /**
     * @var string 指标采集任务id。必填字段
     */
    public $TaskId;

    /**
     * @var string 名称：长度不超过64字符，以字母开头，接受0-9,a-z,A-Z, _,-,中文字符。
     */
    public $Name;

    /**
     * @var string 云产品命名空间。
     */
    public $Namespace;

    /**
     * @var array 指标配置信息。
     */
    public $Metrics;

    /**
     * @var InstanceConfig 实例配置信息。
     */
    public $InstanceInfo;

    /**
     * @var integer 任务状态。

1： 未启用

2： 启用
     */
    public $Enable;

    /**
     * @param string $TopicId 指标采集任务的日志主题id。必填字段
     * @param string $TaskId 指标采集任务id。必填字段
     * @param string $Name 名称：长度不超过64字符，以字母开头，接受0-9,a-z,A-Z, _,-,中文字符。
     * @param string $Namespace 云产品命名空间。
     * @param array $Metrics 指标配置信息。
     * @param InstanceConfig $InstanceInfo 实例配置信息。
     * @param integer $Enable 任务状态。

1： 未启用

2： 启用
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
