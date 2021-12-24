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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 操作日志
 *
 * @method string getOperateTime() 获取操作时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperateTime(string $OperateTime) 设置操作时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModule() 获取模块名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModule(string $Module) 设置模块名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取操作信息
 * @method void setDescription(string $Description) 设置操作信息
 * @method string getUserId() 获取用户ID
 * @method void setUserId(string $UserId) 设置用户ID
 * @method integer getStatus() 获取状态: 1:成功 2:失败
 * @method void setStatus(integer $Status) 设置状态: 1:成功 2:失败
 * @method string getOperatorUserID() 获取操作用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatorUserID(string $OperatorUserID) 设置操作用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAction() 获取操作动作
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAction(string $Action) 设置操作动作
注意：此字段可能返回 null，表示取不到有效值。
 */
class OperationLog extends AbstractModel
{
    /**
     * @var string 操作时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperateTime;

    /**
     * @var string 模块名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Module;

    /**
     * @var string 操作信息
     */
    public $Description;

    /**
     * @var string 用户ID
     */
    public $UserId;

    /**
     * @var integer 状态: 1:成功 2:失败
     */
    public $Status;

    /**
     * @var string 操作用户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatorUserID;

    /**
     * @var string 操作动作
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Action;

    /**
     * @param string $OperateTime 操作时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Module 模块名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 操作信息
     * @param string $UserId 用户ID
     * @param integer $Status 状态: 1:成功 2:失败
     * @param string $OperatorUserID 操作用户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Action 操作动作
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
        if (array_key_exists("OperateTime",$param) and $param["OperateTime"] !== null) {
            $this->OperateTime = $param["OperateTime"];
        }

        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OperatorUserID",$param) and $param["OperatorUserID"] !== null) {
            $this->OperatorUserID = $param["OperatorUserID"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }
    }
}
