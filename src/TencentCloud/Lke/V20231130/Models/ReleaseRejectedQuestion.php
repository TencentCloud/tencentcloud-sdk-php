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
 * @method string getQuestion() 获取问题
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuestion(string $Question) 设置问题
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAction() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAction(integer $Action) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActionDesc() 获取状态描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActionDesc(string $ActionDesc) 设置状态描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置失败原因
注意：此字段可能返回 null，表示取不到有效值。
 */
class ReleaseRejectedQuestion extends AbstractModel
{
    /**
     * @var string 问题
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Question;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Action;

    /**
     * @var string 状态描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActionDesc;

    /**
     * @var string 失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @param string $Question 问题
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Action 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActionDesc 状态描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 失败原因
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
        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("ActionDesc",$param) and $param["ActionDesc"] !== null) {
            $this->ActionDesc = $param["ActionDesc"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
