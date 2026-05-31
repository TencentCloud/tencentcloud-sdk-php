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
 * 展示apm业务系统关联prometheus关系返回体
 *
 * @method integer getId() 获取<p>指标匹配规则ID</p>
 * @method void setId(integer $Id) 设置<p>指标匹配规则ID</p>
 * @method string getName() 获取<p>指标匹配规则名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>指标匹配规则名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceName() 获取<p>规则生效的应用。生效于全部应用就传空字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceName(string $ServiceName) 设置<p>规则生效的应用。生效于全部应用就传空字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取<p>指标匹配规则状态：1(启用)、2（不启用）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置<p>指标匹配规则状态：1(启用)、2（不启用）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetricNameRule() 获取<p>指标匹配规则</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricNameRule(string $MetricNameRule) 设置<p>指标匹配规则</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMetricMatchType() 获取<p>匹配类型：0精准匹配，1前缀匹配，2后缀匹配</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricMatchType(integer $MetricMatchType) 设置<p>匹配类型：0精准匹配，1前缀匹配，2后缀匹配</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAppendResourceAttributes() 获取<p>是否追加资源属性</p>
 * @method void setAppendResourceAttributes(boolean $AppendResourceAttributes) 设置<p>是否追加资源属性</p>
 */
class ApmPrometheusRules extends AbstractModel
{
    /**
     * @var integer <p>指标匹配规则ID</p>
     */
    public $Id;

    /**
     * @var string <p>指标匹配规则名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>规则生效的应用。生效于全部应用就传空字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceName;

    /**
     * @var integer <p>指标匹配规则状态：1(启用)、2（不启用）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>指标匹配规则</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricNameRule;

    /**
     * @var integer <p>匹配类型：0精准匹配，1前缀匹配，2后缀匹配</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricMatchType;

    /**
     * @var boolean <p>是否追加资源属性</p>
     */
    public $AppendResourceAttributes;

    /**
     * @param integer $Id <p>指标匹配规则ID</p>
     * @param string $Name <p>指标匹配规则名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceName <p>规则生效的应用。生效于全部应用就传空字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status <p>指标匹配规则状态：1(启用)、2（不启用）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MetricNameRule <p>指标匹配规则</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MetricMatchType <p>匹配类型：0精准匹配，1前缀匹配，2后缀匹配</p>
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MetricNameRule",$param) and $param["MetricNameRule"] !== null) {
            $this->MetricNameRule = $param["MetricNameRule"];
        }

        if (array_key_exists("MetricMatchType",$param) and $param["MetricMatchType"] !== null) {
            $this->MetricMatchType = $param["MetricMatchType"];
        }

        if (array_key_exists("AppendResourceAttributes",$param) and $param["AppendResourceAttributes"] !== null) {
            $this->AppendResourceAttributes = $param["AppendResourceAttributes"];
        }
    }
}
