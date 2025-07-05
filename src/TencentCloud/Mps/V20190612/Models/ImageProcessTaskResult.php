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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片处理任务结果类型
 *
 * @method string getStatus() 获取任务状态，有 PROCESSING，SUCCESS 和 FAIL 三种。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置任务状态，有 PROCESSING，SUCCESS 和 FAIL 三种。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取错误信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置错误信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageProcessTaskOutput getOutput() 获取转码任务的输出。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutput(ImageProcessTaskOutput $Output) 设置转码任务的输出。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProgress() 获取转码进度，取值范围 [0-100]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgress(integer $Progress) 设置转码进度，取值范围 [0-100]
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImageProcessTaskResult extends AbstractModel
{
    /**
     * @var string 任务状态，有 PROCESSING，SUCCESS 和 FAIL 三种。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 错误信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var ImageProcessTaskOutput 转码任务的输出。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Output;

    /**
     * @var integer 转码进度，取值范围 [0-100]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Progress;

    /**
     * @param string $Status 任务状态，有 PROCESSING，SUCCESS 和 FAIL 三种。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 错误信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageProcessTaskOutput $Output 转码任务的输出。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Progress 转码进度，取值范围 [0-100]
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new ImageProcessTaskOutput();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }
    }
}
