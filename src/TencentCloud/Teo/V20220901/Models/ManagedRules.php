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
 * @method string getEnabled() 获取<p>托管规则是否开启。取值有：<li>on：开启，所有托管规则按配置生效；</li><li>off：关闭，所有托管规则不生效。</li></p>
 * @method void setEnabled(string $Enabled) 设置<p>托管规则是否开启。取值有：<li>on：开启，所有托管规则按配置生效；</li><li>off：关闭，所有托管规则不生效。</li></p>
 * @method string getDetectionOnly() 获取<p>评估模式是否开启，仅在 Enabled 参数为 on 时有效。取值有：<li>on：开启，表示所有托管规则以观察模式生效；</li><li>off：关闭，表示所有托管规则以实际配置生效。</li></p>
 * @method void setDetectionOnly(string $DetectionOnly) 设置<p>评估模式是否开启，仅在 Enabled 参数为 on 时有效。取值有：<li>on：开启，表示所有托管规则以观察模式生效；</li><li>off：关闭，表示所有托管规则以实际配置生效。</li></p>
 * @method string getSemanticAnalysis() 获取<p>托管规则深度分析选项是否开启，仅在 Enabled 参数为 on 时有效。取值有：<li>on：开启，对请求进行深度分析后进行处理；</li><li>off：关闭，对请求不进行深度分析，直接进行处理。</li> <br>此参数待废弃，深度分析规则开关迁移至 SemanticAnalysisRules.Enabled 参数。</p>
 * @method void setSemanticAnalysis(string $SemanticAnalysis) 设置<p>托管规则深度分析选项是否开启，仅在 Enabled 参数为 on 时有效。取值有：<li>on：开启，对请求进行深度分析后进行处理；</li><li>off：关闭，对请求不进行深度分析，直接进行处理。</li> <br>此参数待废弃，深度分析规则开关迁移至 SemanticAnalysisRules.Enabled 参数。</p>
 * @method SemanticAnalysisRules getSemanticAnalysisRules() 获取<p>深度分析配置选项，识别请求中的恶意行为（如：SQL 注入，XSS 攻击等），对恶意请求进行日志记录和拦截。</p>
 * @method void setSemanticAnalysisRules(SemanticAnalysisRules $SemanticAnalysisRules) 设置<p>深度分析配置选项，识别请求中的恶意行为（如：SQL 注入，XSS 攻击等），对恶意请求进行日志记录和拦截。</p>
 * @method ManagedRuleAutoUpdate getAutoUpdate() 获取<p>托管规则自动更新选项。</p>
 * @method void setAutoUpdate(ManagedRuleAutoUpdate $AutoUpdate) 设置<p>托管规则自动更新选项。</p>
 * @method array getManagedRuleGroups() 获取<p>托管规则组的配置。如果此结构传空数组或 GroupId 未包含在列表内将按照默认方式处理。</p>
 * @method void setManagedRuleGroups(array $ManagedRuleGroups) 设置<p>托管规则组的配置。如果此结构传空数组或 GroupId 未包含在列表内将按照默认方式处理。</p>
 * @method FrequentScanningProtection getFrequentScanningProtection() 获取<p>高频扫描防护配置选项，当某一访客的请求频繁命中「配置为拦截」的托管规则时，在一段时间内封禁该访客所有请求。</p>
 * @method void setFrequentScanningProtection(FrequentScanningProtection $FrequentScanningProtection) 设置<p>高频扫描防护配置选项，当某一访客的请求频繁命中「配置为拦截」的托管规则时，在一段时间内封禁该访客所有请求。</p>
 */
class ManagedRules extends AbstractModel
{
    /**
     * @var string <p>托管规则是否开启。取值有：<li>on：开启，所有托管规则按配置生效；</li><li>off：关闭，所有托管规则不生效。</li></p>
     */
    public $Enabled;

    /**
     * @var string <p>评估模式是否开启，仅在 Enabled 参数为 on 时有效。取值有：<li>on：开启，表示所有托管规则以观察模式生效；</li><li>off：关闭，表示所有托管规则以实际配置生效。</li></p>
     */
    public $DetectionOnly;

    /**
     * @var string <p>托管规则深度分析选项是否开启，仅在 Enabled 参数为 on 时有效。取值有：<li>on：开启，对请求进行深度分析后进行处理；</li><li>off：关闭，对请求不进行深度分析，直接进行处理。</li> <br>此参数待废弃，深度分析规则开关迁移至 SemanticAnalysisRules.Enabled 参数。</p>
     */
    public $SemanticAnalysis;

    /**
     * @var SemanticAnalysisRules <p>深度分析配置选项，识别请求中的恶意行为（如：SQL 注入，XSS 攻击等），对恶意请求进行日志记录和拦截。</p>
     */
    public $SemanticAnalysisRules;

    /**
     * @var ManagedRuleAutoUpdate <p>托管规则自动更新选项。</p>
     */
    public $AutoUpdate;

    /**
     * @var array <p>托管规则组的配置。如果此结构传空数组或 GroupId 未包含在列表内将按照默认方式处理。</p>
     */
    public $ManagedRuleGroups;

    /**
     * @var FrequentScanningProtection <p>高频扫描防护配置选项，当某一访客的请求频繁命中「配置为拦截」的托管规则时，在一段时间内封禁该访客所有请求。</p>
     */
    public $FrequentScanningProtection;

    /**
     * @param string $Enabled <p>托管规则是否开启。取值有：<li>on：开启，所有托管规则按配置生效；</li><li>off：关闭，所有托管规则不生效。</li></p>
     * @param string $DetectionOnly <p>评估模式是否开启，仅在 Enabled 参数为 on 时有效。取值有：<li>on：开启，表示所有托管规则以观察模式生效；</li><li>off：关闭，表示所有托管规则以实际配置生效。</li></p>
     * @param string $SemanticAnalysis <p>托管规则深度分析选项是否开启，仅在 Enabled 参数为 on 时有效。取值有：<li>on：开启，对请求进行深度分析后进行处理；</li><li>off：关闭，对请求不进行深度分析，直接进行处理。</li> <br>此参数待废弃，深度分析规则开关迁移至 SemanticAnalysisRules.Enabled 参数。</p>
     * @param SemanticAnalysisRules $SemanticAnalysisRules <p>深度分析配置选项，识别请求中的恶意行为（如：SQL 注入，XSS 攻击等），对恶意请求进行日志记录和拦截。</p>
     * @param ManagedRuleAutoUpdate $AutoUpdate <p>托管规则自动更新选项。</p>
     * @param array $ManagedRuleGroups <p>托管规则组的配置。如果此结构传空数组或 GroupId 未包含在列表内将按照默认方式处理。</p>
     * @param FrequentScanningProtection $FrequentScanningProtection <p>高频扫描防护配置选项，当某一访客的请求频繁命中「配置为拦截」的托管规则时，在一段时间内封禁该访客所有请求。</p>
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

        if (array_key_exists("SemanticAnalysisRules",$param) and $param["SemanticAnalysisRules"] !== null) {
            $this->SemanticAnalysisRules = new SemanticAnalysisRules();
            $this->SemanticAnalysisRules->deserialize($param["SemanticAnalysisRules"]);
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
