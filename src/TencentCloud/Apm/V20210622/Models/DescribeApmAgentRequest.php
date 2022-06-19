<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApmAgent请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getAgentType() 获取接入方式
 * @method void setAgentType(string $AgentType) 设置接入方式
 * @method string getNetworkMode() 获取环境
 * @method void setNetworkMode(string $NetworkMode) 设置环境
 * @method string getLanguageEnvironment() 获取语言
 * @method void setLanguageEnvironment(string $LanguageEnvironment) 设置语言
 * @method string getReportMethod() 获取上报方式
 * @method void setReportMethod(string $ReportMethod) 设置上报方式
 */
class DescribeApmAgentRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 接入方式
     */
    public $AgentType;

    /**
     * @var string 环境
     */
    public $NetworkMode;

    /**
     * @var string 语言
     */
    public $LanguageEnvironment;

    /**
     * @var string 上报方式
     */
    public $ReportMethod;

    /**
     * @param string $InstanceId 实例ID
     * @param string $AgentType 接入方式
     * @param string $NetworkMode 环境
     * @param string $LanguageEnvironment 语言
     * @param string $ReportMethod 上报方式
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

        if (array_key_exists("AgentType",$param) and $param["AgentType"] !== null) {
            $this->AgentType = $param["AgentType"];
        }

        if (array_key_exists("NetworkMode",$param) and $param["NetworkMode"] !== null) {
            $this->NetworkMode = $param["NetworkMode"];
        }

        if (array_key_exists("LanguageEnvironment",$param) and $param["LanguageEnvironment"] !== null) {
            $this->LanguageEnvironment = $param["LanguageEnvironment"];
        }

        if (array_key_exists("ReportMethod",$param) and $param["ReportMethod"] !== null) {
            $this->ReportMethod = $param["ReportMethod"];
        }
    }
}
