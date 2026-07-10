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
 * DescribePolicyGroupList.Group
 *
 * @method integer getGroupId() 获取<p>策略组id</p>
 * @method void setGroupId(integer $GroupId) 设置<p>策略组id</p>
 * @method string getGroupName() 获取<p>策略组名称</p>
 * @method void setGroupName(string $GroupName) 设置<p>策略组名称</p>
 * @method boolean getIsOpen() 获取<p>是否开启</p>
 * @method void setIsOpen(boolean $IsOpen) 设置<p>是否开启</p>
 * @method string getViewName() 获取<p>策略视图名称</p>
 * @method void setViewName(string $ViewName) 设置<p>策略视图名称</p>
 * @method string getLastEditUin() 获取<p>最近编辑的用户uin</p>
 * @method void setLastEditUin(string $LastEditUin) 设置<p>最近编辑的用户uin</p>
 * @method integer getUpdateTime() 获取<p>最后修改时间</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>最后修改时间</p>
 * @method integer getInsertTime() 获取<p>创建时间</p>
 * @method void setInsertTime(integer $InsertTime) 设置<p>创建时间</p>
 * @method integer getUseSum() 获取<p>策略组绑定的实例数</p>
 * @method void setUseSum(integer $UseSum) 设置<p>策略组绑定的实例数</p>
 * @method integer getNoShieldedSum() 获取<p>策略组绑定的未屏蔽实例数</p>
 * @method void setNoShieldedSum(integer $NoShieldedSum) 设置<p>策略组绑定的未屏蔽实例数</p>
 * @method integer getIsDefault() 获取<p>是否为默认策略，0表示非默认策略，1表示默认策略</p>
 * @method void setIsDefault(integer $IsDefault) 设置<p>是否为默认策略，0表示非默认策略，1表示默认策略</p>
 * @method boolean getCanSetDefault() 获取<p>是否可以设置成默认策略</p>
 * @method void setCanSetDefault(boolean $CanSetDefault) 设置<p>是否可以设置成默认策略</p>
 * @method integer getParentGroupId() 获取<p>父策略组id</p>
 * @method void setParentGroupId(integer $ParentGroupId) 设置<p>父策略组id</p>
 * @method string getRemark() 获取<p>策略组备注</p>
 * @method void setRemark(string $Remark) 设置<p>策略组备注</p>
 * @method integer getProjectId() 获取<p>策略组所属项目id</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>策略组所属项目id</p>
 * @method array getConditions() 获取<p>阈值规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConditions(array $Conditions) 设置<p>阈值规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEventConditions() 获取<p>产品事件规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventConditions(array $EventConditions) 设置<p>产品事件规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReceiverInfos() 获取<p>用户接收人列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiverInfos(array $ReceiverInfos) 设置<p>用户接收人列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribePolicyGroupInfoConditionTpl getConditionsTemp() 获取<p>模板策略组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConditionsTemp(DescribePolicyGroupInfoConditionTpl $ConditionsTemp) 设置<p>模板策略组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribePolicyGroupListGroupInstanceGroup getInstanceGroup() 获取<p>策略组绑定的实例组信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceGroup(DescribePolicyGroupListGroupInstanceGroup $InstanceGroup) 设置<p>策略组绑定的实例组信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsUnionRule() 获取<p>且或规则标识, 0表示或规则(任意一条规则满足阈值条件就告警), 1表示且规则(所有规则都满足阈值条件才告警)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsUnionRule(integer $IsUnionRule) 设置<p>且或规则标识, 0表示或规则(任意一条规则满足阈值条件就告警), 1表示且规则(所有规则都满足阈值条件才告警)</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribePolicyGroupListGroup extends AbstractModel
{
    /**
     * @var integer <p>策略组id</p>
     */
    public $GroupId;

    /**
     * @var string <p>策略组名称</p>
     */
    public $GroupName;

    /**
     * @var boolean <p>是否开启</p>
     */
    public $IsOpen;

    /**
     * @var string <p>策略视图名称</p>
     */
    public $ViewName;

    /**
     * @var string <p>最近编辑的用户uin</p>
     */
    public $LastEditUin;

    /**
     * @var integer <p>最后修改时间</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>创建时间</p>
     */
    public $InsertTime;

    /**
     * @var integer <p>策略组绑定的实例数</p>
     */
    public $UseSum;

    /**
     * @var integer <p>策略组绑定的未屏蔽实例数</p>
     */
    public $NoShieldedSum;

    /**
     * @var integer <p>是否为默认策略，0表示非默认策略，1表示默认策略</p>
     */
    public $IsDefault;

    /**
     * @var boolean <p>是否可以设置成默认策略</p>
     */
    public $CanSetDefault;

    /**
     * @var integer <p>父策略组id</p>
     */
    public $ParentGroupId;

    /**
     * @var string <p>策略组备注</p>
     */
    public $Remark;

    /**
     * @var integer <p>策略组所属项目id</p>
     */
    public $ProjectId;

    /**
     * @var array <p>阈值规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Conditions;

    /**
     * @var array <p>产品事件规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventConditions;

    /**
     * @var array <p>用户接收人列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiverInfos;

    /**
     * @var DescribePolicyGroupInfoConditionTpl <p>模板策略组</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConditionsTemp;

    /**
     * @var DescribePolicyGroupListGroupInstanceGroup <p>策略组绑定的实例组信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceGroup;

    /**
     * @var integer <p>且或规则标识, 0表示或规则(任意一条规则满足阈值条件就告警), 1表示且规则(所有规则都满足阈值条件才告警)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsUnionRule;

    /**
     * @param integer $GroupId <p>策略组id</p>
     * @param string $GroupName <p>策略组名称</p>
     * @param boolean $IsOpen <p>是否开启</p>
     * @param string $ViewName <p>策略视图名称</p>
     * @param string $LastEditUin <p>最近编辑的用户uin</p>
     * @param integer $UpdateTime <p>最后修改时间</p>
     * @param integer $InsertTime <p>创建时间</p>
     * @param integer $UseSum <p>策略组绑定的实例数</p>
     * @param integer $NoShieldedSum <p>策略组绑定的未屏蔽实例数</p>
     * @param integer $IsDefault <p>是否为默认策略，0表示非默认策略，1表示默认策略</p>
     * @param boolean $CanSetDefault <p>是否可以设置成默认策略</p>
     * @param integer $ParentGroupId <p>父策略组id</p>
     * @param string $Remark <p>策略组备注</p>
     * @param integer $ProjectId <p>策略组所属项目id</p>
     * @param array $Conditions <p>阈值规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EventConditions <p>产品事件规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ReceiverInfos <p>用户接收人列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribePolicyGroupInfoConditionTpl $ConditionsTemp <p>模板策略组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribePolicyGroupListGroupInstanceGroup $InstanceGroup <p>策略组绑定的实例组信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsUnionRule <p>且或规则标识, 0表示或规则(任意一条规则满足阈值条件就告警), 1表示且规则(所有规则都满足阈值条件才告警)</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("IsOpen",$param) and $param["IsOpen"] !== null) {
            $this->IsOpen = $param["IsOpen"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("LastEditUin",$param) and $param["LastEditUin"] !== null) {
            $this->LastEditUin = $param["LastEditUin"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("UseSum",$param) and $param["UseSum"] !== null) {
            $this->UseSum = $param["UseSum"];
        }

        if (array_key_exists("NoShieldedSum",$param) and $param["NoShieldedSum"] !== null) {
            $this->NoShieldedSum = $param["NoShieldedSum"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("CanSetDefault",$param) and $param["CanSetDefault"] !== null) {
            $this->CanSetDefault = $param["CanSetDefault"];
        }

        if (array_key_exists("ParentGroupId",$param) and $param["ParentGroupId"] !== null) {
            $this->ParentGroupId = $param["ParentGroupId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new DescribePolicyGroupInfoCondition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }

        if (array_key_exists("EventConditions",$param) and $param["EventConditions"] !== null) {
            $this->EventConditions = [];
            foreach ($param["EventConditions"] as $key => $value){
                $obj = new DescribePolicyGroupInfoEventCondition();
                $obj->deserialize($value);
                array_push($this->EventConditions, $obj);
            }
        }

        if (array_key_exists("ReceiverInfos",$param) and $param["ReceiverInfos"] !== null) {
            $this->ReceiverInfos = [];
            foreach ($param["ReceiverInfos"] as $key => $value){
                $obj = new DescribePolicyGroupInfoReceiverInfo();
                $obj->deserialize($value);
                array_push($this->ReceiverInfos, $obj);
            }
        }

        if (array_key_exists("ConditionsTemp",$param) and $param["ConditionsTemp"] !== null) {
            $this->ConditionsTemp = new DescribePolicyGroupInfoConditionTpl();
            $this->ConditionsTemp->deserialize($param["ConditionsTemp"]);
        }

        if (array_key_exists("InstanceGroup",$param) and $param["InstanceGroup"] !== null) {
            $this->InstanceGroup = new DescribePolicyGroupListGroupInstanceGroup();
            $this->InstanceGroup->deserialize($param["InstanceGroup"]);
        }

        if (array_key_exists("IsUnionRule",$param) and $param["IsUnionRule"] !== null) {
            $this->IsUnionRule = $param["IsUnionRule"];
        }
    }
}
