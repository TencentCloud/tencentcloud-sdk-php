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
namespace TencentCloud\Tmt\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件翻译任务结果
 *
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getStatus() 获取任务状态

- init：任务已初始化
- wait：任务等待执行
- success：任务执行成功
- fail：任务执行失败
 * @method void setStatus(string $Status) 设置任务状态

- init：任务已初始化
- wait：任务等待执行
- success：任务执行成功
- fail：任务执行失败
 * @method string getFileData() 获取文件数据，目标文件必须小于50M，否则请通过回调方式请求文件翻译接口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileData(string $FileData) 设置文件数据，目标文件必须小于50M，否则请通过回调方式请求文件翻译接口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取错误提示
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置错误提示
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProgress() 获取任务进度
 * @method void setProgress(integer $Progress) 设置任务进度
 * @method integer getUsedAmount() 获取本次翻译消耗的字符数	
 * @method void setUsedAmount(integer $UsedAmount) 设置本次翻译消耗的字符数	
 */
class GetFileTranslateData extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 任务状态

- init：任务已初始化
- wait：任务等待执行
- success：任务执行成功
- fail：任务执行失败
     */
    public $Status;

    /**
     * @var string 文件数据，目标文件必须小于50M，否则请通过回调方式请求文件翻译接口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileData;

    /**
     * @var string 错误提示
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var integer 任务进度
     */
    public $Progress;

    /**
     * @var integer 本次翻译消耗的字符数	
     */
    public $UsedAmount;

    /**
     * @param string $TaskId 任务ID
     * @param string $Status 任务状态

- init：任务已初始化
- wait：任务等待执行
- success：任务执行成功
- fail：任务执行失败
     * @param string $FileData 文件数据，目标文件必须小于50M，否则请通过回调方式请求文件翻译接口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 错误提示
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Progress 任务进度
     * @param integer $UsedAmount 本次翻译消耗的字符数	
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

        if (array_key_exists("UsedAmount",$param) and $param["UsedAmount"] !== null) {
            $this->UsedAmount = $param["UsedAmount"];
        }
    }
}
