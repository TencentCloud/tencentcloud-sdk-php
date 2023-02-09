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
 * 按批提交Statement运行SQL任务。
 *
 * @method array getNotebookSessionStatementBatch() 获取任务详情列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotebookSessionStatementBatch(array $NotebookSessionStatementBatch) 设置任务详情列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsAvailable() 获取当前批任务是否运行完成
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAvailable(boolean $IsAvailable) 设置当前批任务是否运行完成
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSessionId() 获取Session唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionId(string $SessionId) 设置Session唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBatchId() 获取Batch唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBatchId(string $BatchId) 设置Batch唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 */
class NotebookSessionStatementBatchInformation extends AbstractModel
{
    /**
     * @var array 任务详情列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NotebookSessionStatementBatch;

    /**
     * @var boolean 当前批任务是否运行完成
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAvailable;

    /**
     * @var string Session唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionId;

    /**
     * @var string Batch唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BatchId;

    /**
     * @param array $NotebookSessionStatementBatch 任务详情列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsAvailable 当前批任务是否运行完成
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SessionId Session唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BatchId Batch唯一标识
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
        if (array_key_exists("NotebookSessionStatementBatch",$param) and $param["NotebookSessionStatementBatch"] !== null) {
            $this->NotebookSessionStatementBatch = [];
            foreach ($param["NotebookSessionStatementBatch"] as $key => $value){
                $obj = new NotebookSessionStatementInfo();
                $obj->deserialize($value);
                array_push($this->NotebookSessionStatementBatch, $obj);
            }
        }

        if (array_key_exists("IsAvailable",$param) and $param["IsAvailable"] !== null) {
            $this->IsAvailable = $param["IsAvailable"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("BatchId",$param) and $param["BatchId"] !== null) {
            $this->BatchId = $param["BatchId"];
        }
    }
}
