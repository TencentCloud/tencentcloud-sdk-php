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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddConfigRule请求参数结构体
 *
 * @method string getIdentifier() 获取<p>规则模板标识，预设规则模板为Identifier, 自定义规则为云函数arn（region:functionName）</p>
 * @method void setIdentifier(string $Identifier) 设置<p>规则模板标识，预设规则模板为Identifier, 自定义规则为云函数arn（region:functionName）</p>
 * @method string getIdentifierType() 获取<p>规则模板类型，SYSTEM, CUSTOMIZE</p>
 * @method void setIdentifierType(string $IdentifierType) 设置<p>规则模板类型，SYSTEM, CUSTOMIZE</p>
 * @method string getRuleName() 获取<p>规则名称</p>
 * @method void setRuleName(string $RuleName) 设置<p>规则名称</p>
 * @method array getResourceType() 获取<p>规则支持的资源</p>
 * @method void setResourceType(array $ResourceType) 设置<p>规则支持的资源</p>
 * @method array getTriggerType() 获取<p>触发类型，最多支持两种</p>
 * @method void setTriggerType(array $TriggerType) 设置<p>触发类型，最多支持两种</p>
 * @method integer getRiskLevel() 获取<p>风险等级<br>1：高风险。<br>2：中风险。<br>3：低风险。</p>
 * @method void setRiskLevel(integer $RiskLevel) 设置<p>风险等级<br>1：高风险。<br>2：中风险。<br>3：低风险。</p>
 * @method array getInputParameter() 获取<p>入参</p>
 * @method void setInputParameter(array $InputParameter) 设置<p>入参</p>
 * @method string getDescription() 获取<p>规则描述。长度范围0~1024字符</p>
 * @method void setDescription(string $Description) 设置<p>规则描述。长度范围0~1024字符</p>
 * @method array getRegionsScope() 获取<p>规则评估地域范围，规则仅对指定地域中的资源生效。<br>支持的地域范围config:ListResourceRegions返回的地域</p>
 * @method void setRegionsScope(array $RegionsScope) 设置<p>规则评估地域范围，规则仅对指定地域中的资源生效。<br>支持的地域范围config:ListResourceRegions返回的地域</p>
 * @method array getTagsScope() 获取<p>规则评估标签范围，规则仅对绑定指定标签的资源生效。</p>
 * @method void setTagsScope(array $TagsScope) 设置<p>规则评估标签范围，规则仅对绑定指定标签的资源生效。</p>
 * @method array getExcludeResourceIdsScope() 获取<p>规则对指定资源ID无效，即不对该资源执行评估。</p>
 * @method void setExcludeResourceIdsScope(array $ExcludeResourceIdsScope) 设置<p>规则对指定资源ID无效，即不对该资源执行评估。</p>
 */
class AddConfigRuleRequest extends AbstractModel
{
    /**
     * @var string <p>规则模板标识，预设规则模板为Identifier, 自定义规则为云函数arn（region:functionName）</p>
     */
    public $Identifier;

    /**
     * @var string <p>规则模板类型，SYSTEM, CUSTOMIZE</p>
     */
    public $IdentifierType;

    /**
     * @var string <p>规则名称</p>
     */
    public $RuleName;

    /**
     * @var array <p>规则支持的资源</p>
     */
    public $ResourceType;

    /**
     * @var array <p>触发类型，最多支持两种</p>
     */
    public $TriggerType;

    /**
     * @var integer <p>风险等级<br>1：高风险。<br>2：中风险。<br>3：低风险。</p>
     */
    public $RiskLevel;

    /**
     * @var array <p>入参</p>
     */
    public $InputParameter;

    /**
     * @var string <p>规则描述。长度范围0~1024字符</p>
     */
    public $Description;

    /**
     * @var array <p>规则评估地域范围，规则仅对指定地域中的资源生效。<br>支持的地域范围config:ListResourceRegions返回的地域</p>
     */
    public $RegionsScope;

    /**
     * @var array <p>规则评估标签范围，规则仅对绑定指定标签的资源生效。</p>
     */
    public $TagsScope;

    /**
     * @var array <p>规则对指定资源ID无效，即不对该资源执行评估。</p>
     */
    public $ExcludeResourceIdsScope;

    /**
     * @param string $Identifier <p>规则模板标识，预设规则模板为Identifier, 自定义规则为云函数arn（region:functionName）</p>
     * @param string $IdentifierType <p>规则模板类型，SYSTEM, CUSTOMIZE</p>
     * @param string $RuleName <p>规则名称</p>
     * @param array $ResourceType <p>规则支持的资源</p>
     * @param array $TriggerType <p>触发类型，最多支持两种</p>
     * @param integer $RiskLevel <p>风险等级<br>1：高风险。<br>2：中风险。<br>3：低风险。</p>
     * @param array $InputParameter <p>入参</p>
     * @param string $Description <p>规则描述。长度范围0~1024字符</p>
     * @param array $RegionsScope <p>规则评估地域范围，规则仅对指定地域中的资源生效。<br>支持的地域范围config:ListResourceRegions返回的地域</p>
     * @param array $TagsScope <p>规则评估标签范围，规则仅对绑定指定标签的资源生效。</p>
     * @param array $ExcludeResourceIdsScope <p>规则对指定资源ID无效，即不对该资源执行评估。</p>
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
        if (array_key_exists("Identifier",$param) and $param["Identifier"] !== null) {
            $this->Identifier = $param["Identifier"];
        }

        if (array_key_exists("IdentifierType",$param) and $param["IdentifierType"] !== null) {
            $this->IdentifierType = $param["IdentifierType"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = [];
            foreach ($param["TriggerType"] as $key => $value){
                $obj = new TriggerType();
                $obj->deserialize($value);
                array_push($this->TriggerType, $obj);
            }
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("InputParameter",$param) and $param["InputParameter"] !== null) {
            $this->InputParameter = [];
            foreach ($param["InputParameter"] as $key => $value){
                $obj = new InputParameter();
                $obj->deserialize($value);
                array_push($this->InputParameter, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RegionsScope",$param) and $param["RegionsScope"] !== null) {
            $this->RegionsScope = $param["RegionsScope"];
        }

        if (array_key_exists("TagsScope",$param) and $param["TagsScope"] !== null) {
            $this->TagsScope = [];
            foreach ($param["TagsScope"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagsScope, $obj);
            }
        }

        if (array_key_exists("ExcludeResourceIdsScope",$param) and $param["ExcludeResourceIdsScope"] !== null) {
            $this->ExcludeResourceIdsScope = $param["ExcludeResourceIdsScope"];
        }
    }
}
