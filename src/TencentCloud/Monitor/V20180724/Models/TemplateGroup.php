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
 * 模板列表
 *
 * @method array getConditions() 获取<p>指标告警规则</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConditions(array $Conditions) 设置<p>指标告警规则</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEventConditions() 获取<p>事件告警规则</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventConditions(array $EventConditions) 设置<p>事件告警规则</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPolicyGroups() 获取<p>关联告警策略组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyGroups(array $PolicyGroups) 设置<p>关联告警策略组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGroupID() 获取<p>模板策略组ID</p>
 * @method void setGroupID(integer $GroupID) 设置<p>模板策略组ID</p>
 * @method string getGroupName() 获取<p>模板策略组名称</p>
 * @method void setGroupName(string $GroupName) 设置<p>模板策略组名称</p>
 * @method integer getInsertTime() 获取<p>创建时间</p>
 * @method void setInsertTime(integer $InsertTime) 设置<p>创建时间</p>
 * @method integer getLastEditUin() 获取<p>最后修改人UIN</p>
 * @method void setLastEditUin(integer $LastEditUin) 设置<p>最后修改人UIN</p>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 * @method integer getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间</p>
 * @method string getViewName() 获取<p>视图</p>
 * @method void setViewName(string $ViewName) 设置<p>视图</p>
 * @method integer getIsUnionRule() 获取<p>是否为与关系</p>
 * @method void setIsUnionRule(integer $IsUnionRule) 设置<p>是否为与关系</p>
 */
class TemplateGroup extends AbstractModel
{
    /**
     * @var array <p>指标告警规则</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Conditions;

    /**
     * @var array <p>事件告警规则</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventConditions;

    /**
     * @var array <p>关联告警策略组</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyGroups;

    /**
     * @var integer <p>模板策略组ID</p>
     */
    public $GroupID;

    /**
     * @var string <p>模板策略组名称</p>
     */
    public $GroupName;

    /**
     * @var integer <p>创建时间</p>
     */
    public $InsertTime;

    /**
     * @var integer <p>最后修改人UIN</p>
     */
    public $LastEditUin;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @var integer <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>视图</p>
     */
    public $ViewName;

    /**
     * @var integer <p>是否为与关系</p>
     */
    public $IsUnionRule;

    /**
     * @param array $Conditions <p>指标告警规则</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EventConditions <p>事件告警规则</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PolicyGroups <p>关联告警策略组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GroupID <p>模板策略组ID</p>
     * @param string $GroupName <p>模板策略组名称</p>
     * @param integer $InsertTime <p>创建时间</p>
     * @param integer $LastEditUin <p>最后修改人UIN</p>
     * @param string $Remark <p>备注</p>
     * @param integer $UpdateTime <p>更新时间</p>
     * @param string $ViewName <p>视图</p>
     * @param integer $IsUnionRule <p>是否为与关系</p>
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
