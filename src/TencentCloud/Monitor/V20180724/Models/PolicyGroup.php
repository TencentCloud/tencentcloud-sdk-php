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
 * 策略组信息
 *
 * @method boolean getCanSetDefault() 获取<p>是否可设为默认告警策略</p>
 * @method void setCanSetDefault(boolean $CanSetDefault) 设置<p>是否可设为默认告警策略</p>
 * @method integer getGroupID() 获取<p>告警策略组ID</p>
 * @method void setGroupID(integer $GroupID) 设置<p>告警策略组ID</p>
 * @method string getGroupName() 获取<p>告警策略组名称</p>
 * @method void setGroupName(string $GroupName) 设置<p>告警策略组名称</p>
 * @method integer getInsertTime() 获取<p>创建时间</p>
 * @method void setInsertTime(integer $InsertTime) 设置<p>创建时间</p>
 * @method integer getIsDefault() 获取<p>是否为默认告警策略</p>
 * @method void setIsDefault(integer $IsDefault) 设置<p>是否为默认告警策略</p>
 * @method boolean getEnable() 获取<p>告警策略启用状态</p>
 * @method void setEnable(boolean $Enable) 设置<p>告警策略启用状态</p>
 * @method integer getLastEditUin() 获取<p>最后修改人UIN</p>
 * @method void setLastEditUin(integer $LastEditUin) 设置<p>最后修改人UIN</p>
 * @method integer getNoShieldedInstanceCount() 获取<p>未屏蔽的实例数</p>
 * @method void setNoShieldedInstanceCount(integer $NoShieldedInstanceCount) 设置<p>未屏蔽的实例数</p>
 * @method integer getParentGroupID() 获取<p>父策略组ID</p>
 * @method void setParentGroupID(integer $ParentGroupID) 设置<p>父策略组ID</p>
 * @method integer getProjectID() 获取<p>所属项目ID</p>
 * @method void setProjectID(integer $ProjectID) 设置<p>所属项目ID</p>
 * @method array getReceiverInfos() 获取<p>告警接收对象信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiverInfos(array $ReceiverInfos) 设置<p>告警接收对象信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取<p>备注信息</p>
 * @method void setRemark(string $Remark) 设置<p>备注信息</p>
 * @method integer getUpdateTime() 获取<p>修改时间</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>修改时间</p>
 * @method integer getTotalInstanceCount() 获取<p>总绑定实例数</p>
 * @method void setTotalInstanceCount(integer $TotalInstanceCount) 设置<p>总绑定实例数</p>
 * @method string getViewName() 获取<p>视图</p>
 * @method void setViewName(string $ViewName) 设置<p>视图</p>
 * @method integer getIsUnionRule() 获取<p>是否为与关系规则</p>
 * @method void setIsUnionRule(integer $IsUnionRule) 设置<p>是否为与关系规则</p>
 */
class PolicyGroup extends AbstractModel
{
    /**
     * @var boolean <p>是否可设为默认告警策略</p>
     */
    public $CanSetDefault;

    /**
     * @var integer <p>告警策略组ID</p>
     */
    public $GroupID;

    /**
     * @var string <p>告警策略组名称</p>
     */
    public $GroupName;

    /**
     * @var integer <p>创建时间</p>
     */
    public $InsertTime;

    /**
     * @var integer <p>是否为默认告警策略</p>
     */
    public $IsDefault;

    /**
     * @var boolean <p>告警策略启用状态</p>
     */
    public $Enable;

    /**
     * @var integer <p>最后修改人UIN</p>
     */
    public $LastEditUin;

    /**
     * @var integer <p>未屏蔽的实例数</p>
     */
    public $NoShieldedInstanceCount;

    /**
     * @var integer <p>父策略组ID</p>
     */
    public $ParentGroupID;

    /**
     * @var integer <p>所属项目ID</p>
     */
    public $ProjectID;

    /**
     * @var array <p>告警接收对象信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiverInfos;

    /**
     * @var string <p>备注信息</p>
     */
    public $Remark;

    /**
     * @var integer <p>修改时间</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>总绑定实例数</p>
     */
    public $TotalInstanceCount;

    /**
     * @var string <p>视图</p>
     */
    public $ViewName;

    /**
     * @var integer <p>是否为与关系规则</p>
     */
    public $IsUnionRule;

    /**
     * @param boolean $CanSetDefault <p>是否可设为默认告警策略</p>
     * @param integer $GroupID <p>告警策略组ID</p>
     * @param string $GroupName <p>告警策略组名称</p>
     * @param integer $InsertTime <p>创建时间</p>
     * @param integer $IsDefault <p>是否为默认告警策略</p>
     * @param boolean $Enable <p>告警策略启用状态</p>
     * @param integer $LastEditUin <p>最后修改人UIN</p>
     * @param integer $NoShieldedInstanceCount <p>未屏蔽的实例数</p>
     * @param integer $ParentGroupID <p>父策略组ID</p>
     * @param integer $ProjectID <p>所属项目ID</p>
     * @param array $ReceiverInfos <p>告警接收对象信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark <p>备注信息</p>
     * @param integer $UpdateTime <p>修改时间</p>
     * @param integer $TotalInstanceCount <p>总绑定实例数</p>
     * @param string $ViewName <p>视图</p>
     * @param integer $IsUnionRule <p>是否为与关系规则</p>
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
        if (array_key_exists("CanSetDefault",$param) and $param["CanSetDefault"] !== null) {
            $this->CanSetDefault = $param["CanSetDefault"];
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

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("LastEditUin",$param) and $param["LastEditUin"] !== null) {
            $this->LastEditUin = $param["LastEditUin"];
        }

        if (array_key_exists("NoShieldedInstanceCount",$param) and $param["NoShieldedInstanceCount"] !== null) {
            $this->NoShieldedInstanceCount = $param["NoShieldedInstanceCount"];
        }

        if (array_key_exists("ParentGroupID",$param) and $param["ParentGroupID"] !== null) {
            $this->ParentGroupID = $param["ParentGroupID"];
        }

        if (array_key_exists("ProjectID",$param) and $param["ProjectID"] !== null) {
            $this->ProjectID = $param["ProjectID"];
        }

        if (array_key_exists("ReceiverInfos",$param) and $param["ReceiverInfos"] !== null) {
            $this->ReceiverInfos = [];
            foreach ($param["ReceiverInfos"] as $key => $value){
                $obj = new PolicyGroupReceiverInfo();
                $obj->deserialize($value);
                array_push($this->ReceiverInfos, $obj);
            }
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("TotalInstanceCount",$param) and $param["TotalInstanceCount"] !== null) {
            $this->TotalInstanceCount = $param["TotalInstanceCount"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("IsUnionRule",$param) and $param["IsUnionRule"] !== null) {
            $this->IsUnionRule = $param["IsUnionRule"];
        }
    }
}
