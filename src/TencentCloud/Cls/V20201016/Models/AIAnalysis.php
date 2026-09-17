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
 * 开启告警AI诊断。UserPrompt是给AI诊断告警时使用的提示词，比如请详细分析根因。AnalysisDataScope示例：{"DataScopeType":"CLSLogTopic","DataScopeEntry":[{"Key":"TopicId",Value:"work-topic"},{"Key":"Region",Value:"ap-guangzhou"}]}
 *
 * @method boolean getEnable() 获取<p>是否开启告警AI诊断</p><p>默认值：false</p>
 * @method void setEnable(boolean $Enable) 设置<p>是否开启告警AI诊断</p><p>默认值：false</p>
 * @method boolean getHideProcess() 获取<p>是否显示诊断过程</p><p>默认值：false</p>
 * @method void setHideProcess(boolean $HideProcess) 设置<p>是否显示诊断过程</p><p>默认值：false</p>
 * @method string getUserPrompt() 获取<p>AI诊断告警时给AI的提示词</p><p>参数格式：请详细诊断根因</p>
 * @method void setUserPrompt(string $UserPrompt) 设置<p>AI诊断告警时给AI的提示词</p><p>参数格式：请详细诊断根因</p>
 * @method array getAnalysisDataScope() 获取<p>AI 分析的数据范围</p>
 * @method void setAnalysisDataScope(array $AnalysisDataScope) 设置<p>AI 分析的数据范围</p>
 */
class AIAnalysis extends AbstractModel
{
    /**
     * @var boolean <p>是否开启告警AI诊断</p><p>默认值：false</p>
     */
    public $Enable;

    /**
     * @var boolean <p>是否显示诊断过程</p><p>默认值：false</p>
     */
    public $HideProcess;

    /**
     * @var string <p>AI诊断告警时给AI的提示词</p><p>参数格式：请详细诊断根因</p>
     */
    public $UserPrompt;

    /**
     * @var array <p>AI 分析的数据范围</p>
     */
    public $AnalysisDataScope;

    /**
     * @param boolean $Enable <p>是否开启告警AI诊断</p><p>默认值：false</p>
     * @param boolean $HideProcess <p>是否显示诊断过程</p><p>默认值：false</p>
     * @param string $UserPrompt <p>AI诊断告警时给AI的提示词</p><p>参数格式：请详细诊断根因</p>
     * @param array $AnalysisDataScope <p>AI 分析的数据范围</p>
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("HideProcess",$param) and $param["HideProcess"] !== null) {
            $this->HideProcess = $param["HideProcess"];
        }

        if (array_key_exists("UserPrompt",$param) and $param["UserPrompt"] !== null) {
            $this->UserPrompt = $param["UserPrompt"];
        }

        if (array_key_exists("AnalysisDataScope",$param) and $param["AnalysisDataScope"] !== null) {
            $this->AnalysisDataScope = [];
            foreach ($param["AnalysisDataScope"] as $key => $value){
                $obj = new AIAnalysisDataScope();
                $obj->deserialize($value);
                array_push($this->AnalysisDataScope, $obj);
            }
        }
    }
}
