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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能字幕结果。
 *
 * @method SmartSubtitleTaskResultInput getInput() 获取智能字幕任务输入信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInput(SmartSubtitleTaskResultInput $Input) 设置智能字幕任务输入信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOutputs() 获取智能字幕输出信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputs(array $Outputs) 设置智能字幕输出信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class BatchSmartSubtitlesResult extends AbstractModel
{
    /**
     * @var SmartSubtitleTaskResultInput 智能字幕任务输入信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Input;

    /**
     * @var array 智能字幕输出信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Outputs;

    /**
     * @param SmartSubtitleTaskResultInput $Input 智能字幕任务输入信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Outputs 智能字幕输出信息
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
        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new SmartSubtitleTaskResultInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Outputs",$param) and $param["Outputs"] !== null) {
            $this->Outputs = [];
            foreach ($param["Outputs"] as $key => $value){
                $obj = new SmartSubtitleTaskBatchOutput();
                $obj->deserialize($value);
                array_push($this->Outputs, $obj);
            }
        }
    }
}
