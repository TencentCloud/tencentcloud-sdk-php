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
 * ModifyPolicyGroup请求参数结构体
 *
 * @method string getModule() 获取<p>固定值，为&quot;monitor&quot;</p>
 * @method void setModule(string $Module) 设置<p>固定值，为&quot;monitor&quot;</p>
 * @method integer getGroupId() 获取<p>策略组id</p>
 * @method void setGroupId(integer $GroupId) 设置<p>策略组id</p>
 * @method string getViewName() 获取<p>告警类型</p>
 * @method void setViewName(string $ViewName) 设置<p>告警类型</p>
 * @method string getGroupName() 获取<p>策略组名称</p>
 * @method void setGroupName(string $GroupName) 设置<p>策略组名称</p>
 * @method integer getIsUnionRule() 获取<p>是否复合告警</p><p>枚举值：</p><ul><li>1： 所有指标告警条件都达到才告警</li><li>0： 任意指标告警条件达到都告警</li></ul>
 * @method void setIsUnionRule(integer $IsUnionRule) 设置<p>是否复合告警</p><p>枚举值：</p><ul><li>1： 所有指标告警条件都达到才告警</li><li>0： 任意指标告警条件达到都告警</li></ul>
 * @method array getConditions() 获取<p>指标告警条件规则，不填表示删除已有的所有指标告警条件规则</p>
 * @method void setConditions(array $Conditions) 设置<p>指标告警条件规则，不填表示删除已有的所有指标告警条件规则</p>
 * @method array getEventConditions() 获取<p>事件告警条件，不填表示删除已有的事件告警条件</p>
 * @method void setEventConditions(array $EventConditions) 设置<p>事件告警条件，不填表示删除已有的事件告警条件</p>
 * @method integer getConditionTempGroupId() 获取<p>模板策略组id</p>
 * @method void setConditionTempGroupId(integer $ConditionTempGroupId) 设置<p>模板策略组id</p>
 */
class ModifyPolicyGroupRequest extends AbstractModel
{
    /**
     * @var string <p>固定值，为&quot;monitor&quot;</p>
     */
    public $Module;

    /**
     * @var integer <p>策略组id</p>
     */
    public $GroupId;

    /**
     * @var string <p>告警类型</p>
     */
    public $ViewName;

    /**
     * @var string <p>策略组名称</p>
     */
    public $GroupName;

    /**
     * @var integer <p>是否复合告警</p><p>枚举值：</p><ul><li>1： 所有指标告警条件都达到才告警</li><li>0： 任意指标告警条件达到都告警</li></ul>
     */
    public $IsUnionRule;

    /**
     * @var array <p>指标告警条件规则，不填表示删除已有的所有指标告警条件规则</p>
     */
    public $Conditions;

    /**
     * @var array <p>事件告警条件，不填表示删除已有的事件告警条件</p>
     */
    public $EventConditions;

    /**
     * @var integer <p>模板策略组id</p>
     */
    public $ConditionTempGroupId;

    /**
     * @param string $Module <p>固定值，为&quot;monitor&quot;</p>
     * @param integer $GroupId <p>策略组id</p>
     * @param string $ViewName <p>告警类型</p>
     * @param string $GroupName <p>策略组名称</p>
     * @param integer $IsUnionRule <p>是否复合告警</p><p>枚举值：</p><ul><li>1： 所有指标告警条件都达到才告警</li><li>0： 任意指标告警条件达到都告警</li></ul>
     * @param array $Conditions <p>指标告警条件规则，不填表示删除已有的所有指标告警条件规则</p>
     * @param array $EventConditions <p>事件告警条件，不填表示删除已有的事件告警条件</p>
     * @param integer $ConditionTempGroupId <p>模板策略组id</p>
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
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

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new ModifyPolicyGroupCondition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }

        if (array_key_exists("EventConditions",$param) and $param["EventConditions"] !== null) {
            $this->EventConditions = [];
            foreach ($param["EventConditions"] as $key => $value){
                $obj = new ModifyPolicyGroupEventCondition();
                $obj->deserialize($value);
                array_push($this->EventConditions, $obj);
            }
        }

        if (array_key_exists("ConditionTempGroupId",$param) and $param["ConditionTempGroupId"] !== null) {
            $this->ConditionTempGroupId = $param["ConditionTempGroupId"];
        }
    }
}
