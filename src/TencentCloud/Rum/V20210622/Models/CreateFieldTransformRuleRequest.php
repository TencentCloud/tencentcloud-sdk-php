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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFieldTransformRule请求参数结构体
 *
 * @method integer getProjectId() 获取<p>项目id</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目id</p>
 * @method string getTargetField() 获取<p>目标字段</p>
 * @method void setTargetField(string $TargetField) 设置<p>目标字段</p>
 * @method string getMatchType() 获取<p>匹配方式</p>
 * @method void setMatchType(string $MatchType) 设置<p>匹配方式</p>
 * @method string getMatchPattern() 获取<p>匹配规则</p>
 * @method void setMatchPattern(string $MatchPattern) 设置<p>匹配规则</p>
 * @method string getTransformAction() 获取<p>转换类型</p>
 * @method void setTransformAction(string $TransformAction) 设置<p>转换类型</p>
 * @method string getName() 获取<p>规则名</p>
 * @method void setName(string $Name) 设置<p>规则名</p>
 * @method string getReplaceValue() 获取<p>替换值</p>
 * @method void setReplaceValue(string $ReplaceValue) 设置<p>替换值</p>
 * @method integer getPriority() 获取<p>优先级</p>
 * @method void setPriority(integer $Priority) 设置<p>优先级</p>
 * @method boolean getEnabled() 获取<p>是否开启</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>是否开启</p>
 */
class CreateFieldTransformRuleRequest extends AbstractModel
{
    /**
     * @var integer <p>项目id</p>
     */
    public $ProjectId;

    /**
     * @var string <p>目标字段</p>
     */
    public $TargetField;

    /**
     * @var string <p>匹配方式</p>
     */
    public $MatchType;

    /**
     * @var string <p>匹配规则</p>
     */
    public $MatchPattern;

    /**
     * @var string <p>转换类型</p>
     */
    public $TransformAction;

    /**
     * @var string <p>规则名</p>
     */
    public $Name;

    /**
     * @var string <p>替换值</p>
     */
    public $ReplaceValue;

    /**
     * @var integer <p>优先级</p>
     */
    public $Priority;

    /**
     * @var boolean <p>是否开启</p>
     */
    public $Enabled;

    /**
     * @param integer $ProjectId <p>项目id</p>
     * @param string $TargetField <p>目标字段</p>
     * @param string $MatchType <p>匹配方式</p>
     * @param string $MatchPattern <p>匹配规则</p>
     * @param string $TransformAction <p>转换类型</p>
     * @param string $Name <p>规则名</p>
     * @param string $ReplaceValue <p>替换值</p>
     * @param integer $Priority <p>优先级</p>
     * @param boolean $Enabled <p>是否开启</p>
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TargetField",$param) and $param["TargetField"] !== null) {
            $this->TargetField = $param["TargetField"];
        }

        if (array_key_exists("MatchType",$param) and $param["MatchType"] !== null) {
            $this->MatchType = $param["MatchType"];
        }

        if (array_key_exists("MatchPattern",$param) and $param["MatchPattern"] !== null) {
            $this->MatchPattern = $param["MatchPattern"];
        }

        if (array_key_exists("TransformAction",$param) and $param["TransformAction"] !== null) {
            $this->TransformAction = $param["TransformAction"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ReplaceValue",$param) and $param["ReplaceValue"] !== null) {
            $this->ReplaceValue = $param["ReplaceValue"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
