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
 * @method integer getId() 获取指标匹配规则ID
 * @method void setId(integer $Id) 设置指标匹配规则ID
 * @method string getName() 获取指标匹配规则名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置指标匹配规则名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceName() 获取规则生效的应用。生效于全部应用就传空字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceName(string $ServiceName) 设置规则生效的应用。生效于全部应用就传空字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取指标匹配规则状态：1(启用)、2（不启用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置指标匹配规则状态：1(启用)、2（不启用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetricNameRule() 获取指标匹配规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricNameRule(string $MetricNameRule) 设置指标匹配规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMetricMatchType() 获取匹配类型：0精准匹配，1前缀匹配，2后缀匹配
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricMatchType(integer $MetricMatchType) 设置匹配类型：0精准匹配，1前缀匹配，2后缀匹配
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApmPrometheusRules extends AbstractModel
{
    /**
     * @var integer 指标匹配规则ID
     */
    public $Id;

    /**
     * @var string 指标匹配规则名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 规则生效的应用。生效于全部应用就传空字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceName;

    /**
     * @var integer 指标匹配规则状态：1(启用)、2（不启用）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 指标匹配规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricNameRule;

    /**
     * @var integer 匹配类型：0精准匹配，1前缀匹配，2后缀匹配
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricMatchType;

    /**
     * @param integer $Id 指标匹配规则ID
     * @param string $Name 指标匹配规则名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceName 规则生效的应用。生效于全部应用就传空字符串
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 指标匹配规则状态：1(启用)、2（不启用）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MetricNameRule 指标匹配规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MetricMatchType 匹配类型：0精准匹配，1前缀匹配，2后缀匹配
注意：此字段可能返回 null，表示取不到有效值。
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
    }
}
