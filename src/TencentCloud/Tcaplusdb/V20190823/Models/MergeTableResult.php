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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 合服结果
 *
 * @method string getTaskId() 获取任务Id
 * @method void setTaskId(string $TaskId) 设置任务Id
 * @method ErrorInfo getError() 获取成功时此字段返回 null，表示取不到有效值。
 * @method void setError(ErrorInfo $Error) 设置成功时此字段返回 null，表示取不到有效值。
 * @method CompareTablesInfo getTable() 获取对比的表格信息
 * @method void setTable(CompareTablesInfo $Table) 设置对比的表格信息
 * @method string getApplicationId() 获取申请单Id
 * @method void setApplicationId(string $ApplicationId) 设置申请单Id
 */
class MergeTableResult extends AbstractModel
{
    /**
     * @var string 任务Id
     */
    public $TaskId;

    /**
     * @var ErrorInfo 成功时此字段返回 null，表示取不到有效值。
     */
    public $Error;

    /**
     * @var CompareTablesInfo 对比的表格信息
     */
    public $Table;

    /**
     * @var string 申请单Id
     */
    public $ApplicationId;

    /**
     * @param string $TaskId 任务Id
     * @param ErrorInfo $Error 成功时此字段返回 null，表示取不到有效值。
     * @param CompareTablesInfo $Table 对比的表格信息
     * @param string $ApplicationId 申请单Id
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

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = new ErrorInfo();
            $this->Error->deserialize($param["Error"]);
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = new CompareTablesInfo();
            $this->Table->deserialize($param["Table"]);
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }
    }
}
