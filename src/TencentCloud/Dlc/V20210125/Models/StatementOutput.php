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
 * notebook session statement输出信息。
 *
 * @method integer getExecutionCount() 获取执行总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionCount(integer $ExecutionCount) 设置执行总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getData() 获取Statement数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(array $Data) 设置Statement数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取Statement状态:ok,error
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置Statement状态:ok,error
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorName() 获取错误名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorName(string $ErrorName) 设置错误名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorValue() 获取错误类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorValue(string $ErrorValue) 设置错误类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getErrorMessage() 获取错误堆栈信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMessage(array $ErrorMessage) 设置错误堆栈信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSQLResult() 获取SQL类型任务结果返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSQLResult(string $SQLResult) 设置SQL类型任务结果返回
注意：此字段可能返回 null，表示取不到有效值。
 */
class StatementOutput extends AbstractModel
{
    /**
     * @var integer 执行总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionCount;

    /**
     * @var array Statement数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @var string Statement状态:ok,error
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 错误名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorName;

    /**
     * @var string 错误类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorValue;

    /**
     * @var array 错误堆栈信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMessage;

    /**
     * @var string SQL类型任务结果返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SQLResult;

    /**
     * @param integer $ExecutionCount 执行总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Data Statement数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status Statement状态:ok,error
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorName 错误名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorValue 错误类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ErrorMessage 错误堆栈信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SQLResult SQL类型任务结果返回
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
        if (array_key_exists("ExecutionCount",$param) and $param["ExecutionCount"] !== null) {
            $this->ExecutionCount = $param["ExecutionCount"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrorName",$param) and $param["ErrorName"] !== null) {
            $this->ErrorName = $param["ErrorName"];
        }

        if (array_key_exists("ErrorValue",$param) and $param["ErrorValue"] !== null) {
            $this->ErrorValue = $param["ErrorValue"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("SQLResult",$param) and $param["SQLResult"] !== null) {
            $this->SQLResult = $param["SQLResult"];
        }
    }
}
