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
 * Prometheus Alertmanger 可修改配置
 *
 * @method array getInhibitRules() 获取Prometheus Alertmanger 抑制规则组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInhibitRules(array $InhibitRules) 设置Prometheus Alertmanger 抑制规则组
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrometheusAlertmanagerConfigV2 extends AbstractModel
{
    /**
     * @var array Prometheus Alertmanger 抑制规则组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InhibitRules;

    /**
     * @param array $InhibitRules Prometheus Alertmanger 抑制规则组
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
        if (array_key_exists("InhibitRules",$param) and $param["InhibitRules"] !== null) {
            $this->InhibitRules = [];
            foreach ($param["InhibitRules"] as $key => $value){
                $obj = new PrometheusAlertmanagerConfigInhibitRule();
                $obj->deserialize($value);
                array_push($this->InhibitRules, $obj);
            }
        }
    }
}
