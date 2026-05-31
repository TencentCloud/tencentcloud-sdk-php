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
 * ModifyApmPrometheusRule请求参数结构体
 *
 * @method integer getId() 获取<p>规则ID</p>
 * @method void setId(integer $Id) 设置<p>规则ID</p>
 * @method string getInstanceId() 获取<p>业务系统ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>业务系统ID</p>
 * @method string getName() 获取<p>所要修改的规则名</p>
 * @method void setName(string $Name) 设置<p>所要修改的规则名</p>
 * @method integer getStatus() 获取<p>规则状态：1(启用)、2（不启用）、3（删除）</p>
 * @method void setStatus(integer $Status) 设置<p>规则状态：1(启用)、2（不启用）、3（删除）</p>
 * @method string getServiceName() 获取<p>规则生效的应用。生效于全部应用就传空（这个如果不修改也要传旧的规则）</p>
 * @method void setServiceName(string $ServiceName) 设置<p>规则生效的应用。生效于全部应用就传空（这个如果不修改也要传旧的规则）</p>
 * @method integer getMetricMatchType() 获取<p>匹配类型：0精准匹配，1前缀匹配，2后缀匹配（这个如果不修改也要传旧的规则）</p>
 * @method void setMetricMatchType(integer $MetricMatchType) 设置<p>匹配类型：0精准匹配，1前缀匹配，2后缀匹配（这个如果不修改也要传旧的规则）</p>
 * @method string getMetricNameRule() 获取<p>客户定义的命中指标名规则。</p>
 * @method void setMetricNameRule(string $MetricNameRule) 设置<p>客户定义的命中指标名规则。</p>
 * @method boolean getAppendResourceAttributes() 获取<p>是否追加资源属性</p>
 * @method void setAppendResourceAttributes(boolean $AppendResourceAttributes) 设置<p>是否追加资源属性</p>
 */
class ModifyApmPrometheusRuleRequest extends AbstractModel
{
    /**
     * @var integer <p>规则ID</p>
     */
    public $Id;

    /**
     * @var string <p>业务系统ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>所要修改的规则名</p>
     */
    public $Name;

    /**
     * @var integer <p>规则状态：1(启用)、2（不启用）、3（删除）</p>
     */
    public $Status;

    /**
     * @var string <p>规则生效的应用。生效于全部应用就传空（这个如果不修改也要传旧的规则）</p>
     */
    public $ServiceName;

    /**
     * @var integer <p>匹配类型：0精准匹配，1前缀匹配，2后缀匹配（这个如果不修改也要传旧的规则）</p>
     */
    public $MetricMatchType;

    /**
     * @var string <p>客户定义的命中指标名规则。</p>
     */
    public $MetricNameRule;

    /**
     * @var boolean <p>是否追加资源属性</p>
     */
    public $AppendResourceAttributes;

    /**
     * @param integer $Id <p>规则ID</p>
     * @param string $InstanceId <p>业务系统ID</p>
     * @param string $Name <p>所要修改的规则名</p>
     * @param integer $Status <p>规则状态：1(启用)、2（不启用）、3（删除）</p>
     * @param string $ServiceName <p>规则生效的应用。生效于全部应用就传空（这个如果不修改也要传旧的规则）</p>
     * @param integer $MetricMatchType <p>匹配类型：0精准匹配，1前缀匹配，2后缀匹配（这个如果不修改也要传旧的规则）</p>
     * @param string $MetricNameRule <p>客户定义的命中指标名规则。</p>
     * @param boolean $AppendResourceAttributes <p>是否追加资源属性</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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

        if (array_key_exists("AppendResourceAttributes",$param) and $param["AppendResourceAttributes"] !== null) {
            $this->AppendResourceAttributes = $param["AppendResourceAttributes"];
        }
    }
}
