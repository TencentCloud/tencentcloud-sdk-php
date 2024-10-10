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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 动态添加签署人的结果信息
 *
 * @method string getRecipientId() 获取签署方角色编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecipientId(string $RecipientId) 设置签署方角色编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSignId() 获取签署方唯一编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSignId(string $SignId) 设置签署方唯一编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getApproverStatus() 获取签署方当前状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproverStatus(integer $ApproverStatus) 设置签署方当前状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class DynamicFlowApproverResult extends AbstractModel
{
    /**
     * @var string 签署方角色编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecipientId;

    /**
     * @var string 签署方唯一编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SignId;

    /**
     * @var integer 签署方当前状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproverStatus;

    /**
     * @param string $RecipientId 签署方角色编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SignId 签署方唯一编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ApproverStatus 签署方当前状态
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
        if (array_key_exists("RecipientId",$param) and $param["RecipientId"] !== null) {
            $this->RecipientId = $param["RecipientId"];
        }

        if (array_key_exists("SignId",$param) and $param["SignId"] !== null) {
            $this->SignId = $param["SignId"];
        }

        if (array_key_exists("ApproverStatus",$param) and $param["ApproverStatus"] !== null) {
            $this->ApproverStatus = $param["ApproverStatus"];
        }
    }
}
