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
 * Hive查询详情
 *
 * @method string getStatement() 获取查询语句
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatement(string $Statement) 设置查询语句
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDuration() 获取执行时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(string $Duration) 设置执行时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartTime() 获取开始时间毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(integer $StartTime) 设置开始时间毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEndTime() 获取结束时间毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(integer $EndTime) 设置结束时间毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getState() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(string $State) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUser() 获取用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUser(string $User) 设置用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getJobIds() 获取appId列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobIds(array $JobIds) 设置appId列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionEngine() 获取执行引擎
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionEngine(string $ExecutionEngine) 设置执行引擎
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getId() 获取查询ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置查询ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class HiveQuery extends AbstractModel
{
    /**
     * @var string 查询语句
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Statement;

    /**
     * @var string 执行时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var integer 开始时间毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var integer 结束时间毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var string 用户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $User;

    /**
     * @var array appId列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobIds;

    /**
     * @var string 执行引擎
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionEngine;

    /**
     * @var string 查询ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @param string $Statement 查询语句
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Duration 执行时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartTime 开始时间毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EndTime 结束时间毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $State 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $User 用户
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $JobIds appId列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionEngine 执行引擎
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Id 查询ID
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
        if (array_key_exists("Statement",$param) and $param["Statement"] !== null) {
            $this->Statement = $param["Statement"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("JobIds",$param) and $param["JobIds"] !== null) {
            $this->JobIds = $param["JobIds"];
        }

        if (array_key_exists("ExecutionEngine",$param) and $param["ExecutionEngine"] !== null) {
            $this->ExecutionEngine = $param["ExecutionEngine"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
