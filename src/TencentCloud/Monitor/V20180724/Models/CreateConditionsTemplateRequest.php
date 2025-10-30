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
 * @method string getModule() 获取固定值，monitor
 * @method void setModule(string $Module) 设置固定值，monitor
 * @method string getViewName() 获取视图名
 * @method void setViewName(string $ViewName) 设置视图名
 * @method string getGroupName() 获取组名
 * @method void setGroupName(string $GroupName) 设置组名
 * @method integer getIsUnionRule() 获取是否为与关系
 * @method void setIsUnionRule(integer $IsUnionRule) 设置是否为与关系
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method integer getParentGroupID() 获取父ID
 * @method void setParentGroupID(integer $ParentGroupID) 设置父ID
 * @method integer getIsShielded() 获取是否屏蔽
 * @method void setIsShielded(integer $IsShielded) 设置是否屏蔽
 * @method string getComplexExpression() 获取复合告警表达式
 * @method void setComplexExpression(string $ComplexExpression) 设置复合告警表达式
 * @method array getConditions() 获取指标告警条件
 * @method void setConditions(array $Conditions) 设置指标告警条件
 * @method array getEventConditions() 获取事件告警条件
 * @method void setEventConditions(array $EventConditions) 设置事件告警条件
 */
class CreateConditionsTemplateRequest extends AbstractModel
{
    /**
     * @var string 固定值，monitor
     */
    public $Module;

    /**
     * @var string 视图名
     */
    public $ViewName;

    /**
     * @var string 组名
     */
    public $GroupName;

    /**
     * @var integer 是否为与关系
     */
    public $IsUnionRule;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var integer 父ID
     */
    public $ParentGroupID;

    /**
     * @var integer 是否屏蔽
     */
    public $IsShielded;

    /**
     * @var string 复合告警表达式
     */
    public $ComplexExpression;

    /**
     * @var array 指标告警条件
     */
    public $Conditions;

    /**
     * @var array 事件告警条件
     */
    public $EventConditions;

    /**
     * @param string $Module 固定值，monitor
     * @param string $ViewName 视图名
     * @param string $GroupName 组名
     * @param integer $IsUnionRule 是否为与关系
     * @param string $Remark 备注
     * @param integer $ParentGroupID 父ID
     * @param integer $IsShielded 是否屏蔽
     * @param string $ComplexExpression 复合告警表达式
     * @param array $Conditions 指标告警条件
     * @param array $EventConditions 事件告警条件
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
