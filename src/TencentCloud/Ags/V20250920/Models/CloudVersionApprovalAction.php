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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Version 一次审批动作条目。
 *
 * @method string getActionId() 获取<p>动作 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActionId(string $ActionId) 设置<p>动作 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActionType() 获取<p>动作类型。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActionType(string $ActionType) 设置<p>动作类型。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActorType() 获取<p>动作发起者类型。USER 用户；SYSTEM 系统自动通过。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActorType(string $ActorType) 设置<p>动作发起者类型。USER 用户；SYSTEM 系统自动通过。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActorUin() 获取<p>发起者主账号 UIN。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActorUin(string $ActorUin) 设置<p>发起者主账号 UIN。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActorSubAccountUin() 获取<p>发起者子账号 UIN。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActorSubAccountUin(string $ActorSubAccountUin) 设置<p>发起者子账号 UIN。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComment() 获取<p>动作留言。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComment(string $Comment) 设置<p>动作留言。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>发生时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>发生时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取<p>对应云 API 请求的 RequestId。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestId(string $RequestId) 设置<p>对应云 API 请求的 RequestId。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloudVersionApprovalAction extends AbstractModel
{
    /**
     * @var string <p>动作 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActionId;

    /**
     * @var string <p>动作类型。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActionType;

    /**
     * @var string <p>动作发起者类型。USER 用户；SYSTEM 系统自动通过。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActorType;

    /**
     * @var string <p>发起者主账号 UIN。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActorUin;

    /**
     * @var string <p>发起者子账号 UIN。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActorSubAccountUin;

    /**
     * @var string <p>动作留言。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Comment;

    /**
     * @var string <p>发生时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>对应云 API 请求的 RequestId。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestId;

    /**
     * @param string $ActionId <p>动作 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActionType <p>动作类型。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActorType <p>动作发起者类型。USER 用户；SYSTEM 系统自动通过。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActorUin <p>发起者主账号 UIN。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActorSubAccountUin <p>发起者子账号 UIN。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Comment <p>动作留言。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>发生时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId <p>对应云 API 请求的 RequestId。</p>
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
        if (array_key_exists("ActionId",$param) and $param["ActionId"] !== null) {
            $this->ActionId = $param["ActionId"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("ActorType",$param) and $param["ActorType"] !== null) {
            $this->ActorType = $param["ActorType"];
        }

        if (array_key_exists("ActorUin",$param) and $param["ActorUin"] !== null) {
            $this->ActorUin = $param["ActorUin"];
        }

        if (array_key_exists("ActorSubAccountUin",$param) and $param["ActorSubAccountUin"] !== null) {
            $this->ActorSubAccountUin = $param["ActorSubAccountUin"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
