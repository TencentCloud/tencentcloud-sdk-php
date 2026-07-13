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
 * 查询策略输出的模板策略组信息
 *
 * @method integer getGroupId() 获取<p>策略组id</p>
 * @method void setGroupId(integer $GroupId) 设置<p>策略组id</p>
 * @method string getGroupName() 获取<p>策略组名称</p>
 * @method void setGroupName(string $GroupName) 设置<p>策略组名称</p>
 * @method string getViewName() 获取<p>策略类型</p>
 * @method void setViewName(string $ViewName) 设置<p>策略类型</p>
 * @method string getRemark() 获取<p>策略组说明</p>
 * @method void setRemark(string $Remark) 设置<p>策略组说明</p>
 * @method string getLastEditUin() 获取<p>最后编辑的用户uin</p>
 * @method void setLastEditUin(string $LastEditUin) 设置<p>最后编辑的用户uin</p>
 * @method integer getUpdateTime() 获取<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInsertTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInsertTime(integer $InsertTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsUnionRule() 获取<p>是否且规则</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsUnionRule(integer $IsUnionRule) 设置<p>是否且规则</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribePolicyGroupInfoConditionTpl extends AbstractModel
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
     * @var string <p>策略类型</p>
     */
    public $ViewName;

    /**
     * @var string <p>策略组说明</p>
     */
    public $Remark;

    /**
     * @var string <p>最后编辑的用户uin</p>
     */
    public $LastEditUin;

    /**
     * @var integer <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InsertTime;

    /**
     * @var integer <p>是否且规则</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsUnionRule;

    /**
     * @param integer $GroupId <p>策略组id</p>
     * @param string $GroupName <p>策略组名称</p>
     * @param string $ViewName <p>策略类型</p>
     * @param string $Remark <p>策略组说明</p>
     * @param string $LastEditUin <p>最后编辑的用户uin</p>
     * @param integer $UpdateTime <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InsertTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsUnionRule <p>是否且规则</p>
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

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
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

        if (array_key_exists("IsUnionRule",$param) and $param["IsUnionRule"] !== null) {
            $this->IsUnionRule = $param["IsUnionRule"];
        }
    }
}
