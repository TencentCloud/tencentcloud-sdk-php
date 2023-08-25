<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateIdentifyRuleAnotherName请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例ID
 * @method void setDspaId(string $DspaId) 设置DSPA实例ID
 * @method integer getComplianceId() 获取合规组ID
 * @method void setComplianceId(integer $ComplianceId) 设置合规组ID
 * @method integer getCategoryId() 获取规则绑定的分类id
 * @method void setCategoryId(integer $CategoryId) 设置规则绑定的分类id
 * @method integer getRuleId() 获取规则id
 * @method void setRuleId(integer $RuleId) 设置规则id
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method string getAnotherName() 获取规则别名
 * @method void setAnotherName(string $AnotherName) 设置规则别名
 * @method integer getAliasRuleId() 获取别名规则id
 * @method void setAliasRuleId(integer $AliasRuleId) 设置别名规则id
 * @method string getAliasRuleName() 获取别名规则名称
 * @method void setAliasRuleName(string $AliasRuleName) 设置别名规则名称
 */
class CreateIdentifyRuleAnotherNameRequest extends AbstractModel
{
    /**
     * @var string DSPA实例ID
     */
    public $DspaId;

    /**
     * @var integer 合规组ID
     */
    public $ComplianceId;

    /**
     * @var integer 规则绑定的分类id
     */
    public $CategoryId;

    /**
     * @var integer 规则id
     */
    public $RuleId;

    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var string 规则别名
     */
    public $AnotherName;

    /**
     * @var integer 别名规则id
     */
    public $AliasRuleId;

    /**
     * @var string 别名规则名称
     */
    public $AliasRuleName;

    /**
     * @param string $DspaId DSPA实例ID
     * @param integer $ComplianceId 合规组ID
     * @param integer $CategoryId 规则绑定的分类id
     * @param integer $RuleId 规则id
     * @param string $RuleName 规则名称
     * @param string $AnotherName 规则别名
     * @param integer $AliasRuleId 别名规则id
     * @param string $AliasRuleName 别名规则名称
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("ComplianceId",$param) and $param["ComplianceId"] !== null) {
            $this->ComplianceId = $param["ComplianceId"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("AnotherName",$param) and $param["AnotherName"] !== null) {
            $this->AnotherName = $param["AnotherName"];
        }

        if (array_key_exists("AliasRuleId",$param) and $param["AliasRuleId"] !== null) {
            $this->AliasRuleId = $param["AliasRuleId"];
        }

        if (array_key_exists("AliasRuleName",$param) and $param["AliasRuleName"] !== null) {
            $this->AliasRuleName = $param["AliasRuleName"];
        }
    }
}
