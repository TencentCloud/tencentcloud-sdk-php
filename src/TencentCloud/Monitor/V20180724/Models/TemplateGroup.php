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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模板列表
 *
 * @method array getConditions() 获取指标告警规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConditions(array $Conditions) 设置指标告警规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEventConditions() 获取事件告警规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventConditions(array $EventConditions) 设置事件告警规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPolicyGroups() 获取关联告警策略组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyGroups(array $PolicyGroups) 设置关联告警策略组
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGroupID() 获取模板策略组ID
 * @method void setGroupID(integer $GroupID) 设置模板策略组ID
 * @method string getGroupName() 获取模板策略组名称
 * @method void setGroupName(string $GroupName) 设置模板策略组名称
 * @method integer getInsertTime() 获取创建时间
 * @method void setInsertTime(integer $InsertTime) 设置创建时间
 * @method integer getLastEditUin() 获取最后修改人UIN
 * @method void setLastEditUin(integer $LastEditUin) 设置最后修改人UIN
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method integer getUpdateTime() 获取更新时间
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间
 * @method string getViewName() 获取视图
 * @method void setViewName(string $ViewName) 设置视图
 * @method integer getIsUnionRule() 获取是否为与关系
 * @method void setIsUnionRule(integer $IsUnionRule) 设置是否为与关系
 */
class TemplateGroup extends AbstractModel
{
    /**
     * @var array 指标告警规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Conditions;

    /**
     * @var array 事件告警规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventConditions;

    /**
     * @var array 关联告警策略组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyGroups;

    /**
     * @var integer 模板策略组ID
     */
    public $GroupID;

    /**
     * @var string 模板策略组名称
     */
    public $GroupName;

    /**
     * @var integer 创建时间
     */
    public $InsertTime;

    /**
     * @var integer 最后修改人UIN
     */
    public $LastEditUin;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var integer 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 视图
     */
    public $ViewName;

    /**
     * @var integer 是否为与关系
     */
    public $IsUnionRule;

    /**
     * @param array $Conditions 指标告警规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EventConditions 事件告警规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PolicyGroups 关联告警策略组
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GroupID 模板策略组ID
     * @param string $GroupName 模板策略组名称
     * @param integer $InsertTime 创建时间
     * @param integer $LastEditUin 最后修改人UIN
     * @param string $Remark 备注
     * @param integer $UpdateTime 更新时间
     * @param string $ViewName 视图
     * @param integer $IsUnionRule 是否为与关系
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
        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new Condition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }

        if (array_key_exists("EventConditions",$param) and $param["EventConditions"] !== null) {
            $this->EventConditions = [];
            foreach ($param["EventConditions"] as $key => $value){
                $obj = new EventCondition();
                $obj->deserialize($value);
                array_push($this->EventConditions, $obj);
            }
        }

        if (array_key_exists("PolicyGroups",$param) and $param["PolicyGroups"] !== null) {
            $this->PolicyGroups = [];
            foreach ($param["PolicyGroups"] as $key => $value){
                $obj = new PolicyGroup();
                $obj->deserialize($value);
                array_push($this->PolicyGroups, $obj);
            }
        }

        if (array_key_exists("GroupID",$param) and $param["GroupID"] !== null) {
            $this->GroupID = $param["GroupID"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("LastEditUin",$param) and $param["LastEditUin"] !== null) {
            $this->LastEditUin = $param["LastEditUin"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("IsUnionRule",$param) and $param["IsUnionRule"] !== null) {
            $this->IsUnionRule = $param["IsUnionRule"];
        }
    }
}
