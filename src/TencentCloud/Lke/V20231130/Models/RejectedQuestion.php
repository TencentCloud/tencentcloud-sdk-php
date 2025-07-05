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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 发布拒答
 *
 * @method string getRejectedBizId() 获取拒答问题ID


注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRejectedBizId(string $RejectedBizId) 设置拒答问题ID


注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQuestion() 获取被拒答的问题

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuestion(string $Question) 设置被拒答的问题

注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusDesc() 获取状态描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusDesc(string $StatusDesc) 设置状态描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间

注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsAllowEdit() 获取是否允许编辑

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAllowEdit(boolean $IsAllowEdit) 设置是否允许编辑

注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsAllowDelete() 获取是否允许删除

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAllowDelete(boolean $IsAllowDelete) 设置是否允许删除

注意：此字段可能返回 null，表示取不到有效值。
 */
class RejectedQuestion extends AbstractModel
{
    /**
     * @var string 拒答问题ID


注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RejectedBizId;

    /**
     * @var string 被拒答的问题

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Question;

    /**
     * @var integer 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 状态描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusDesc;

    /**
     * @var string 更新时间

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var boolean 是否允许编辑

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAllowEdit;

    /**
     * @var boolean 是否允许删除

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAllowDelete;

    /**
     * @param string $RejectedBizId 拒答问题ID


注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Question 被拒答的问题

注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusDesc 状态描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间

注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsAllowEdit 是否允许编辑

注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsAllowDelete 是否允许删除

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
        if (array_key_exists("RejectedBizId",$param) and $param["RejectedBizId"] !== null) {
            $this->RejectedBizId = $param["RejectedBizId"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("IsAllowEdit",$param) and $param["IsAllowEdit"] !== null) {
            $this->IsAllowEdit = $param["IsAllowEdit"];
        }

        if (array_key_exists("IsAllowDelete",$param) and $param["IsAllowDelete"] !== null) {
            $this->IsAllowDelete = $param["IsAllowDelete"];
        }
    }
}
