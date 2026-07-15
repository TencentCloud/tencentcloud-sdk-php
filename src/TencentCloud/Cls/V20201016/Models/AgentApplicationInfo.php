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
 * agent 应用信息
 *
 * @method string getApplicationId() 获取<p>应用id</p>
 * @method void setApplicationId(string $ApplicationId) 设置<p>应用id</p>
 * @method string getApplicationName() 获取<p>应用名称</p>
 * @method void setApplicationName(string $ApplicationName) 设置<p>应用名称</p>
 * @method string getAccessType() 获取<p>接入类型</p><p>枚举值：</p><ul><li>Langfuse：  Langfuse​ 是一款开源的 LLM（大语言模型）工程与可观测性平台（LLMOps Tool）</li></ul>
 * @method void setAccessType(string $AccessType) 设置<p>接入类型</p><p>枚举值：</p><ul><li>Langfuse：  Langfuse​ 是一款开源的 LLM（大语言模型）工程与可观测性平台（LLMOps Tool）</li></ul>
 * @method string getRegion() 获取<p>应用下资源所属地域</p><p>例如：ap-guangzhou</p>
 * @method void setRegion(string $Region) 设置<p>应用下资源所属地域</p><p>例如：ap-guangzhou</p>
 * @method array getLogTopics() 获取<p>日志主题列表</p>
 * @method void setLogTopics(array $LogTopics) 设置<p>日志主题列表</p>
 * @method array getMetricsTopics() 获取<p>指标主题列表</p>
 * @method void setMetricsTopics(array $MetricsTopics) 设置<p>指标主题列表</p>
 * @method integer getCreateTime() 获取<p>创建时间</p><p>单位：秒</p><p>秒级时间戳</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间</p><p>单位：秒</p><p>秒级时间戳</p>
 * @method integer getUpdateTime() 获取<p>更新时间</p><p>单位：秒</p><p>秒级时间戳</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间</p><p>单位：秒</p><p>秒级时间戳</p>
 */
class AgentApplicationInfo extends AbstractModel
{
    /**
     * @var string <p>应用id</p>
     */
    public $ApplicationId;

    /**
     * @var string <p>应用名称</p>
     */
    public $ApplicationName;

    /**
     * @var string <p>接入类型</p><p>枚举值：</p><ul><li>Langfuse：  Langfuse​ 是一款开源的 LLM（大语言模型）工程与可观测性平台（LLMOps Tool）</li></ul>
     */
    public $AccessType;

    /**
     * @var string <p>应用下资源所属地域</p><p>例如：ap-guangzhou</p>
     */
    public $Region;

    /**
     * @var array <p>日志主题列表</p>
     */
    public $LogTopics;

    /**
     * @var array <p>指标主题列表</p>
     */
    public $MetricsTopics;

    /**
     * @var integer <p>创建时间</p><p>单位：秒</p><p>秒级时间戳</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>更新时间</p><p>单位：秒</p><p>秒级时间戳</p>
     */
    public $UpdateTime;

    /**
     * @param string $ApplicationId <p>应用id</p>
     * @param string $ApplicationName <p>应用名称</p>
     * @param string $AccessType <p>接入类型</p><p>枚举值：</p><ul><li>Langfuse：  Langfuse​ 是一款开源的 LLM（大语言模型）工程与可观测性平台（LLMOps Tool）</li></ul>
     * @param string $Region <p>应用下资源所属地域</p><p>例如：ap-guangzhou</p>
     * @param array $LogTopics <p>日志主题列表</p>
     * @param array $MetricsTopics <p>指标主题列表</p>
     * @param integer $CreateTime <p>创建时间</p><p>单位：秒</p><p>秒级时间戳</p>
     * @param integer $UpdateTime <p>更新时间</p><p>单位：秒</p><p>秒级时间戳</p>
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("LogTopics",$param) and $param["LogTopics"] !== null) {
            $this->LogTopics = [];
            foreach ($param["LogTopics"] as $key => $value){
                $obj = new AgentTopicInfo();
                $obj->deserialize($value);
                array_push($this->LogTopics, $obj);
            }
        }

        if (array_key_exists("MetricsTopics",$param) and $param["MetricsTopics"] !== null) {
            $this->MetricsTopics = [];
            foreach ($param["MetricsTopics"] as $key => $value){
                $obj = new AgentTopicInfo();
                $obj->deserialize($value);
                array_push($this->MetricsTopics, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
