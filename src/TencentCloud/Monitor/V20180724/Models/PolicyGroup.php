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
 * 策略组信息
 *
 * @method boolean getCanSetDefault() 获取是否可设为默认告警策略
 * @method void setCanSetDefault(boolean $CanSetDefault) 设置是否可设为默认告警策略
 * @method integer getGroupID() 获取告警策略组ID
 * @method void setGroupID(integer $GroupID) 设置告警策略组ID
 * @method string getGroupName() 获取告警策略组名称
 * @method void setGroupName(string $GroupName) 设置告警策略组名称
 * @method integer getInsertTime() 获取创建时间
 * @method void setInsertTime(integer $InsertTime) 设置创建时间
 * @method integer getIsDefault() 获取是否为默认告警策略
 * @method void setIsDefault(integer $IsDefault) 设置是否为默认告警策略
 * @method boolean getEnable() 获取告警策略启用状态
 * @method void setEnable(boolean $Enable) 设置告警策略启用状态
 * @method integer getLastEditUin() 获取最后修改人UIN
 * @method void setLastEditUin(integer $LastEditUin) 设置最后修改人UIN
 * @method integer getNoShieldedInstanceCount() 获取未屏蔽的实例数
 * @method void setNoShieldedInstanceCount(integer $NoShieldedInstanceCount) 设置未屏蔽的实例数
 * @method integer getParentGroupID() 获取父策略组ID
 * @method void setParentGroupID(integer $ParentGroupID) 设置父策略组ID
 * @method integer getProjectID() 获取所属项目ID
 * @method void setProjectID(integer $ProjectID) 设置所属项目ID
 * @method array getReceiverInfos() 获取告警接收对象信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiverInfos(array $ReceiverInfos) 设置告警接收对象信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注信息
 * @method void setRemark(string $Remark) 设置备注信息
 * @method integer getUpdateTime() 获取修改时间
 * @method void setUpdateTime(integer $UpdateTime) 设置修改时间
 * @method integer getTotalInstanceCount() 获取总绑定实例数
 * @method void setTotalInstanceCount(integer $TotalInstanceCount) 设置总绑定实例数
 * @method string getViewName() 获取视图
 * @method void setViewName(string $ViewName) 设置视图
 * @method integer getIsUnionRule() 获取是否为与关系规则
 * @method void setIsUnionRule(integer $IsUnionRule) 设置是否为与关系规则
 */
class PolicyGroup extends AbstractModel
{
    /**
     * @var boolean 是否可设为默认告警策略
     */
    public $CanSetDefault;

    /**
     * @var integer 告警策略组ID
     */
    public $GroupID;

    /**
     * @var string 告警策略组名称
     */
    public $GroupName;

    /**
     * @var integer 创建时间
     */
    public $InsertTime;

    /**
     * @var integer 是否为默认告警策略
     */
    public $IsDefault;

    /**
     * @var boolean 告警策略启用状态
     */
    public $Enable;

    /**
     * @var integer 最后修改人UIN
     */
    public $LastEditUin;

    /**
     * @var integer 未屏蔽的实例数
     */
    public $NoShieldedInstanceCount;

    /**
     * @var integer 父策略组ID
     */
    public $ParentGroupID;

    /**
     * @var integer 所属项目ID
     */
    public $ProjectID;

    /**
     * @var array 告警接收对象信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiverInfos;

    /**
     * @var string 备注信息
     */
    public $Remark;

    /**
     * @var integer 修改时间
     */
    public $UpdateTime;

    /**
     * @var integer 总绑定实例数
     */
    public $TotalInstanceCount;

    /**
     * @var string 视图
     */
    public $ViewName;

    /**
     * @var integer 是否为与关系规则
     */
    public $IsUnionRule;

    /**
     * @param boolean $CanSetDefault 是否可设为默认告警策略
     * @param integer $GroupID 告警策略组ID
     * @param string $GroupName 告警策略组名称
     * @param integer $InsertTime 创建时间
     * @param integer $IsDefault 是否为默认告警策略
     * @param boolean $Enable 告警策略启用状态
     * @param integer $LastEditUin 最后修改人UIN
     * @param integer $NoShieldedInstanceCount 未屏蔽的实例数
     * @param integer $ParentGroupID 父策略组ID
     * @param integer $ProjectID 所属项目ID
     * @param array $ReceiverInfos 告警接收对象信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注信息
     * @param integer $UpdateTime 修改时间
     * @param integer $TotalInstanceCount 总绑定实例数
     * @param string $ViewName 视图
     * @param integer $IsUnionRule 是否为与关系规则
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
