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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateApmPrometheusRule请求参数结构体
 *
 * @method string getName() 获取指标匹配规则名
 * @method void setName(string $Name) 设置指标匹配规则名
 * @method string getServiceName() 获取规则生效的应用。作用全部应用就传空字符串
 * @method void setServiceName(string $ServiceName) 设置规则生效的应用。作用全部应用就传空字符串
 * @method integer getMetricMatchType() 获取指标匹配类型：0精准匹配，1前缀匹配，2后缀匹配
 * @method void setMetricMatchType(integer $MetricMatchType) 设置指标匹配类型：0精准匹配，1前缀匹配，2后缀匹配
 * @method string getMetricNameRule() 获取客户定义的命中指标名规则。
 * @method void setMetricNameRule(string $MetricNameRule) 设置客户定义的命中指标名规则。
 * @method string getInstanceId() 获取业务系统ID
 * @method void setInstanceId(string $InstanceId) 设置业务系统ID
 */
class CreateApmPrometheusRuleRequest extends AbstractModel
{
    /**
     * @var string 指标匹配规则名
     */
    public $Name;

    /**
     * @var string 规则生效的应用。作用全部应用就传空字符串
     */
    public $ServiceName;

    /**
     * @var integer 指标匹配类型：0精准匹配，1前缀匹配，2后缀匹配
     */
    public $MetricMatchType;

    /**
     * @var string 客户定义的命中指标名规则。
     */
    public $MetricNameRule;

    /**
     * @var string 业务系统ID
     */
    public $InstanceId;

    /**
     * @param string $Name 指标匹配规则名
     * @param string $ServiceName 规则生效的应用。作用全部应用就传空字符串
     * @param integer $MetricMatchType 指标匹配类型：0精准匹配，1前缀匹配，2后缀匹配
     * @param string $MetricNameRule 客户定义的命中指标名规则。
     * @param string $InstanceId 业务系统ID
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

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("MetricMatchType",$param) and $param["MetricMatchType"] !== null) {
            $this->MetricMatchType = $param["MetricMatchType"];
        }

        if (array_key_exists("MetricNameRule",$param) and $param["MetricNameRule"] !== null) {
            $this->MetricNameRule = $param["MetricNameRule"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
