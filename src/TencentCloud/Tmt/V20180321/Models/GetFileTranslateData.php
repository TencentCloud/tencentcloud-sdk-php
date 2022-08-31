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
namespace TencentCloud\Tmt\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询文件翻译任务
 *
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method string getFileData() 获取文件数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileData(string $FileData) 设置文件数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取错误提示
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置错误提示
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProgress() 获取翻译进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgress(integer $Progress) 设置翻译进度
注意：此字段可能返回 null，表示取不到有效值。
 */
class GetFileTranslateData extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var string 文件数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileData;

    /**
     * @var string 错误提示
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var integer 翻译进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Progress;

    /**
     * @param string $TaskId 任务ID
     * @param string $Status 状态
     * @param string $FileData 文件数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 错误提示
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Progress 翻译进度
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FileData",$param) and $param["FileData"] !== null) {
            $this->FileData = $param["FileData"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }
    }
}
