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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SparkSQL批任务信息
 *
 * @method string getTaskId() 获取SQL子任务唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置SQL子任务唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecuteSQL() 获取运行SQL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecuteSQL(string $ExecuteSQL) 设置运行SQL
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取任务信息，成功则返回：Task Success!，失败则返回异常信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置任务信息，成功则返回：Task Success!，失败则返回异常信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class BatchSqlTask extends AbstractModel
{
    /**
     * @var string SQL子任务唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 运行SQL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecuteSQL;

    /**
     * @var string 任务信息，成功则返回：Task Success!，失败则返回异常信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @param string $TaskId SQL子任务唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecuteSQL 运行SQL
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 任务信息，成功则返回：Task Success!，失败则返回异常信息
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ExecuteSQL",$param) and $param["ExecuteSQL"] !== null) {
            $this->ExecuteSQL = $param["ExecuteSQL"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
