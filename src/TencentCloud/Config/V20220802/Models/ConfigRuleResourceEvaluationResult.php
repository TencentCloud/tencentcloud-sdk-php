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
 * 配置规则资源评估结果
 *
 * @method string getRuleId() 获取规则ID
 * @method void setRuleId(string $RuleId) 设置规则ID
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method string getRuleIdentifier() 获取规则身份标识
 * @method void setRuleIdentifier(string $RuleIdentifier) 设置规则身份标识
 * @method string getRuleDescription() 获取规则描述
 * @method void setRuleDescription(string $RuleDescription) 设置规则描述
 * @method integer getRuleOwnerId() 获取规则归属账号
 * @method void setRuleOwnerId(integer $RuleOwnerId) 设置规则归属账号
 * @method integer getRuleRiskLevel() 获取规则风险等级
 * @method void setRuleRiskLevel(integer $RuleRiskLevel) 设置规则风险等级
 * @method string getResourceId() 获取资源ID
 * @method void setResourceId(string $ResourceId) 设置资源ID
 * @method string getResourceType() 获取资源类型
 * @method void setResourceType(string $ResourceType) 设置资源类型
 * @method string getResourceName() 获取资源名称
 * @method void setResourceName(string $ResourceName) 设置资源名称
 * @method string getResourceRegion() 获取资源地域
 * @method void setResourceRegion(string $ResourceRegion) 设置资源地域
 * @method array getResourceTags() 获取资源标签
 * @method void setResourceTags(array $ResourceTags) 设置资源标签
 * @method Annotation getAnnotation() 获取合规详情
 * @method void setAnnotation(Annotation $Annotation) 设置合规详情
 */
class ConfigRuleResourceEvaluationResult extends AbstractModel
{
    /**
     * @var string 规则ID
     */
    public $RuleId;

    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var string 规则身份标识
     */
    public $RuleIdentifier;

    /**
     * @var string 规则描述
     */
    public $RuleDescription;

    /**
     * @var integer 规则归属账号
     */
    public $RuleOwnerId;

    /**
     * @var integer 规则风险等级
     */
    public $RuleRiskLevel;

    /**
     * @var string 资源ID
     */
    public $ResourceId;

    /**
     * @var string 资源类型
     */
    public $ResourceType;

    /**
     * @var string 资源名称
     */
    public $ResourceName;

    /**
     * @var string 资源地域
     */
    public $ResourceRegion;

    /**
     * @var array 资源标签
     */
    public $ResourceTags;

    /**
     * @var Annotation 合规详情
     */
    public $Annotation;

    /**
     * @param string $RuleId 规则ID
     * @param string $RuleName 规则名称
     * @param string $RuleIdentifier 规则身份标识
     * @param string $RuleDescription 规则描述
     * @param integer $RuleOwnerId 规则归属账号
     * @param integer $RuleRiskLevel 规则风险等级
     * @param string $ResourceId 资源ID
     * @param string $ResourceType 资源类型
     * @param string $ResourceName 资源名称
     * @param string $ResourceRegion 资源地域
     * @param array $ResourceTags 资源标签
     * @param Annotation $Annotation 合规详情
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleIdentifier",$param) and $param["RuleIdentifier"] !== null) {
            $this->RuleIdentifier = $param["RuleIdentifier"];
        }

        if (array_key_exists("RuleDescription",$param) and $param["RuleDescription"] !== null) {
            $this->RuleDescription = $param["RuleDescription"];
        }

        if (array_key_exists("RuleOwnerId",$param) and $param["RuleOwnerId"] !== null) {
            $this->RuleOwnerId = $param["RuleOwnerId"];
        }

        if (array_key_exists("RuleRiskLevel",$param) and $param["RuleRiskLevel"] !== null) {
            $this->RuleRiskLevel = $param["RuleRiskLevel"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("Annotation",$param) and $param["Annotation"] !== null) {
            $this->Annotation = new Annotation();
            $this->Annotation->deserialize($param["Annotation"]);
        }
    }
}
