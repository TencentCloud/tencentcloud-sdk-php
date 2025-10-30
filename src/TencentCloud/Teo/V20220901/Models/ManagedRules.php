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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Web安全的托管规则
 *
 * @method string getEnabled() 获取托管规则是否开启。取值有：<li>on：开启，所有托管规则按配置生效；</li><li>off：关闭，所有托管规则不生效。</li>
 * @method void setEnabled(string $Enabled) 设置托管规则是否开启。取值有：<li>on：开启，所有托管规则按配置生效；</li><li>off：关闭，所有托管规则不生效。</li>
 * @method string getDetectionOnly() 获取评估模式是否开启，仅在 Enabled 参数为 on 时有效。取值有：<li>on：开启，表示所有托管规则以观察模式生效；</li><li>off：关闭，表示所有托管规则以实际配置生效。</li>
 * @method void setDetectionOnly(string $DetectionOnly) 设置评估模式是否开启，仅在 Enabled 参数为 on 时有效。取值有：<li>on：开启，表示所有托管规则以观察模式生效；</li><li>off：关闭，表示所有托管规则以实际配置生效。</li>
 * @method string getSemanticAnalysis() 获取托管规则语义分析选项是否开启，仅在 Enabled 参数为 on 时有效。取值有：<li>on：开启，对请求进行语义分析后进行处理；</li><li>off：关闭，对请求不进行语义分析，直接进行处理。</li> <br/>默认为 off。
 * @method void setSemanticAnalysis(string $SemanticAnalysis) 设置托管规则语义分析选项是否开启，仅在 Enabled 参数为 on 时有效。取值有：<li>on：开启，对请求进行语义分析后进行处理；</li><li>off：关闭，对请求不进行语义分析，直接进行处理。</li> <br/>默认为 off。
 * @method ManagedRuleAutoUpdate getAutoUpdate() 获取托管规则自动更新选项。
 * @method void setAutoUpdate(ManagedRuleAutoUpdate $AutoUpdate) 设置托管规则自动更新选项。
 * @method array getManagedRuleGroups() 获取托管规则组的配置。如果此结构传空数组或 GroupId 未包含在列表内将按照默认方式处理。
 * @method void setManagedRuleGroups(array $ManagedRuleGroups) 设置托管规则组的配置。如果此结构传空数组或 GroupId 未包含在列表内将按照默认方式处理。
 * @method FrequentScanningProtection getFrequentScanningProtection() 获取高频扫描防护配置选项，当某一访客的请求频繁命中「配置为拦截」的托管规则时，在一段时间内封禁该访客所有请求。
 * @method void setFrequentScanningProtection(FrequentScanningProtection $FrequentScanningProtection) 设置高频扫描防护配置选项，当某一访客的请求频繁命中「配置为拦截」的托管规则时，在一段时间内封禁该访客所有请求。
 */
class ManagedRules extends AbstractModel
{
    /**
     * @var string 托管规则是否开启。取值有：<li>on：开启，所有托管规则按配置生效；</li><li>off：关闭，所有托管规则不生效。</li>
     */
    public $Enabled;

    /**
     * @var string 评估模式是否开启，仅在 Enabled 参数为 on 时有效。取值有：<li>on：开启，表示所有托管规则以观察模式生效；</li><li>off：关闭，表示所有托管规则以实际配置生效。</li>
     */
    public $DetectionOnly;

    /**
     * @var string 托管规则语义分析选项是否开启，仅在 Enabled 参数为 on 时有效。取值有：<li>on：开启，对请求进行语义分析后进行处理；</li><li>off：关闭，对请求不进行语义分析，直接进行处理。</li> <br/>默认为 off。
     */
    public $SemanticAnalysis;

    /**
     * @var ManagedRuleAutoUpdate 托管规则自动更新选项。
     */
    public $AutoUpdate;

    /**
     * @var array 托管规则组的配置。如果此结构传空数组或 GroupId 未包含在列表内将按照默认方式处理。
     */
    public $ManagedRuleGroups;

    /**
     * @var FrequentScanningProtection 高频扫描防护配置选项，当某一访客的请求频繁命中「配置为拦截」的托管规则时，在一段时间内封禁该访客所有请求。
     */
    public $FrequentScanningProtection;

    /**
     * @param string $Enabled 托管规则是否开启。取值有：<li>on：开启，所有托管规则按配置生效；</li><li>off：关闭，所有托管规则不生效。</li>
     * @param string $DetectionOnly 评估模式是否开启，仅在 Enabled 参数为 on 时有效。取值有：<li>on：开启，表示所有托管规则以观察模式生效；</li><li>off：关闭，表示所有托管规则以实际配置生效。</li>
     * @param string $SemanticAnalysis 托管规则语义分析选项是否开启，仅在 Enabled 参数为 on 时有效。取值有：<li>on：开启，对请求进行语义分析后进行处理；</li><li>off：关闭，对请求不进行语义分析，直接进行处理。</li> <br/>默认为 off。
     * @param ManagedRuleAutoUpdate $AutoUpdate 托管规则自动更新选项。
     * @param array $ManagedRuleGroups 托管规则组的配置。如果此结构传空数组或 GroupId 未包含在列表内将按照默认方式处理。
     * @param FrequentScanningProtection $FrequentScanningProtection 高频扫描防护配置选项，当某一访客的请求频繁命中「配置为拦截」的托管规则时，在一段时间内封禁该访客所有请求。
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("DetectionOnly",$param) and $param["DetectionOnly"] !== null) {
            $this->DetectionOnly = $param["DetectionOnly"];
        }

        if (array_key_exists("SemanticAnalysis",$param) and $param["SemanticAnalysis"] !== null) {
            $this->SemanticAnalysis = $param["SemanticAnalysis"];
        }

        if (array_key_exists("AutoUpdate",$param) and $param["AutoUpdate"] !== null) {
            $this->AutoUpdate = new ManagedRuleAutoUpdate();
            $this->AutoUpdate->deserialize($param["AutoUpdate"]);
        }

        if (array_key_exists("ManagedRuleGroups",$param) and $param["ManagedRuleGroups"] !== null) {
            $this->ManagedRuleGroups = [];
            foreach ($param["ManagedRuleGroups"] as $key => $value){
                $obj = new ManagedRuleGroup();
                $obj->deserialize($value);
                array_push($this->ManagedRuleGroups, $obj);
            }
        }

        if (array_key_exists("FrequentScanningProtection",$param) and $param["FrequentScanningProtection"] !== null) {
            $this->FrequentScanningProtection = new FrequentScanningProtection();
            $this->FrequentScanningProtection->deserialize($param["FrequentScanningProtection"]);
        }
    }
}
