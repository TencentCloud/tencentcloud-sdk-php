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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Prometheus Alertmanger 抑制规则
 *
 * @method array getSourceMatchers() 获取Source 告警的标签匹配规则，比如 "a=b"、"a!=c" 等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceMatchers(array $SourceMatchers) 设置Source 告警的标签匹配规则，比如 "a=b"、"a!=c" 等
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTargetMatchers() 获取Target 告警的标签匹配规则，比如 "a=b"、"a!=c" 等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetMatchers(array $TargetMatchers) 设置Target 告警的标签匹配规则，比如 "a=b"、"a!=c" 等
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEqual() 获取Source 和 Target 告警都必须有的一组标签名，比如 alertname、cluster 等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEqual(array $Equal) 设置Source 和 Target 告警都必须有的一组标签名，比如 alertname、cluster 等
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrometheusAlertmanagerConfigInhibitRule extends AbstractModel
{
    /**
     * @var array Source 告警的标签匹配规则，比如 "a=b"、"a!=c" 等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceMatchers;

    /**
     * @var array Target 告警的标签匹配规则，比如 "a=b"、"a!=c" 等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetMatchers;

    /**
     * @var array Source 和 Target 告警都必须有的一组标签名，比如 alertname、cluster 等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Equal;

    /**
     * @param array $SourceMatchers Source 告警的标签匹配规则，比如 "a=b"、"a!=c" 等
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TargetMatchers Target 告警的标签匹配规则，比如 "a=b"、"a!=c" 等
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Equal Source 和 Target 告警都必须有的一组标签名，比如 alertname、cluster 等
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
        if (array_key_exists("SourceMatchers",$param) and $param["SourceMatchers"] !== null) {
            $this->SourceMatchers = $param["SourceMatchers"];
        }

        if (array_key_exists("TargetMatchers",$param) and $param["TargetMatchers"] !== null) {
            $this->TargetMatchers = $param["TargetMatchers"];
        }

        if (array_key_exists("Equal",$param) and $param["Equal"] !== null) {
            $this->Equal = $param["Equal"];
        }
    }
}
