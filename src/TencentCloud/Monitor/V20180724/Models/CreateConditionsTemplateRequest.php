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
 * CreateConditionsTemplate请求参数结构体
 *
 * @method string getModule() 获取<p>固定值，monitor</p>
 * @method void setModule(string $Module) 设置<p>固定值，monitor</p>
 * @method string getViewName() 获取<p>视图名</p>
 * @method void setViewName(string $ViewName) 设置<p>视图名</p>
 * @method string getGroupName() 获取<p>组名</p>
 * @method void setGroupName(string $GroupName) 设置<p>组名</p>
 * @method integer getIsUnionRule() 获取<p>是否为与关系</p>
 * @method void setIsUnionRule(integer $IsUnionRule) 设置<p>是否为与关系</p>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 * @method integer getParentGroupID() 获取<p>父ID</p>
 * @method void setParentGroupID(integer $ParentGroupID) 设置<p>父ID</p>
 * @method integer getIsShielded() 获取<p>是否屏蔽</p>
 * @method void setIsShielded(integer $IsShielded) 设置<p>是否屏蔽</p>
 * @method string getComplexExpression() 获取<p>复合告警表达式</p>
 * @method void setComplexExpression(string $ComplexExpression) 设置<p>复合告警表达式</p>
 * @method array getConditions() 获取<p>指标告警条件</p>
 * @method void setConditions(array $Conditions) 设置<p>指标告警条件</p>
 * @method array getEventConditions() 获取<p>事件告警条件</p>
 * @method void setEventConditions(array $EventConditions) 设置<p>事件告警条件</p>
 */
class CreateConditionsTemplateRequest extends AbstractModel
{
    /**
     * @var string <p>固定值，monitor</p>
     */
    public $Module;

    /**
     * @var string <p>视图名</p>
     */
    public $ViewName;

    /**
     * @var string <p>组名</p>
     */
    public $GroupName;

    /**
     * @var integer <p>是否为与关系</p>
     */
    public $IsUnionRule;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @var integer <p>父ID</p>
     */
    public $ParentGroupID;

    /**
     * @var integer <p>是否屏蔽</p>
     */
    public $IsShielded;

    /**
     * @var string <p>复合告警表达式</p>
     */
    public $ComplexExpression;

    /**
     * @var array <p>指标告警条件</p>
     */
    public $Conditions;

    /**
     * @var array <p>事件告警条件</p>
     */
    public $EventConditions;

    /**
     * @param string $Module <p>固定值，monitor</p>
     * @param string $ViewName <p>视图名</p>
     * @param string $GroupName <p>组名</p>
     * @param integer $IsUnionRule <p>是否为与关系</p>
     * @param string $Remark <p>备注</p>
     * @param integer $ParentGroupID <p>父ID</p>
     * @param integer $IsShielded <p>是否屏蔽</p>
     * @param string $ComplexExpression <p>复合告警表达式</p>
     * @param array $Conditions <p>指标告警条件</p>
     * @param array $EventConditions <p>事件告警条件</p>
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("IsUnionRule",$param) and $param["IsUnionRule"] !== null) {
            $this->IsUnionRule = $param["IsUnionRule"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ParentGroupID",$param) and $param["ParentGroupID"] !== null) {
            $this->ParentGroupID = $param["ParentGroupID"];
        }

        if (array_key_exists("IsShielded",$param) and $param["IsShielded"] !== null) {
            $this->IsShielded = $param["IsShielded"];
        }

        if (array_key_exists("ComplexExpression",$param) and $param["ComplexExpression"] !== null) {
            $this->ComplexExpression = $param["ComplexExpression"];
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new ModifyConditionsTemplateRequestCondition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }

        if (array_key_exists("EventConditions",$param) and $param["EventConditions"] !== null) {
            $this->EventConditions = [];
            foreach ($param["EventConditions"] as $key => $value){
                $obj = new ModifyConditionsTemplateRequestEventCondition();
                $obj->deserialize($value);
                array_push($this->EventConditions, $obj);
            }
        }
    }
}
