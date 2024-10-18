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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Kyuubi查询信息
 *
 * @method string getClientIP() 获取提交IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientIP(string $ClientIP) 设置提交IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDuration() 获取执行时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(integer $Duration) 设置执行时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEndTime() 获取结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(integer $EndTime) 设置结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineID() 获取Engine Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineID(string $EngineID) 设置Engine Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineType() 获取计算引擎
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineType(string $EngineType) 设置计算引擎
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getId() 获取ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSessionID() 获取Session Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionID(string $SessionID) 设置Session Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBeginTime() 获取开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBeginTime(integer $BeginTime) 设置开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionState() 获取执行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionState(string $ExecutionState) 设置执行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionStatement() 获取执行语句
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionStatement(string $ExecutionStatement) 设置执行语句
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatementID() 获取Statement Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatementID(string $StatementID) 设置Statement Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUser() 获取提交用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUser(string $User) 设置提交用户
注意：此字段可能返回 null，表示取不到有效值。
 */
class KyuubiQueryInfo extends AbstractModel
{
    /**
     * @var string 提交IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientIP;

    /**
     * @var integer 执行时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var integer 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string Engine Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineID;

    /**
     * @var string 计算引擎
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineType;

    /**
     * @var string ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string Session Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionID;

    /**
     * @var integer 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BeginTime;

    /**
     * @var string 执行状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionState;

    /**
     * @var string 执行语句
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionStatement;

    /**
     * @var string Statement Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatementID;

    /**
     * @var string 提交用户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $User;

    /**
     * @param string $ClientIP 提交IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Duration 执行时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EndTime 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineID Engine Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineType 计算引擎
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Id ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SessionID Session Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BeginTime 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionState 执行状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionStatement 执行语句
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatementID Statement Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $User 提交用户
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
        if (array_key_exists("ClientIP",$param) and $param["ClientIP"] !== null) {
            $this->ClientIP = $param["ClientIP"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("EngineID",$param) and $param["EngineID"] !== null) {
            $this->EngineID = $param["EngineID"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("SessionID",$param) and $param["SessionID"] !== null) {
            $this->SessionID = $param["SessionID"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("ExecutionState",$param) and $param["ExecutionState"] !== null) {
            $this->ExecutionState = $param["ExecutionState"];
        }

        if (array_key_exists("ExecutionStatement",$param) and $param["ExecutionStatement"] !== null) {
            $this->ExecutionStatement = $param["ExecutionStatement"];
        }

        if (array_key_exists("StatementID",$param) and $param["StatementID"] !== null) {
            $this->StatementID = $param["StatementID"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }
    }
}
