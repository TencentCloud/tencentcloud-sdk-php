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
 * 智能横转竖结果信息
 *
 * @method string getPath() 获取视频智能横转竖列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置视频智能横转竖列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskOutputStorage getOutputStorage() 获取智能横转竖视频的存储位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置智能横转竖视频的存储位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getConfidence() 获取置信度。	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfidence(float $Confidence) 设置置信度。	
注意：此字段可能返回 null，表示取不到有效值。
 */
class AiAnalysisTaskHorizontalToVerticalOutput extends AbstractModel
{
    /**
     * @var string 视频智能横转竖列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @var TaskOutputStorage 智能横转竖视频的存储位置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputStorage;

    /**
     * @var float 置信度。	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Confidence;

    /**
     * @param string $Path 视频智能横转竖列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskOutputStorage $OutputStorage 智能横转竖视频的存储位置
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Confidence 置信度。	
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }
    }
}
