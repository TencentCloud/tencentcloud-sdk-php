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
 * 智能精彩片段结果信息
 *
 * @method array getHighlightSet() 获取视频智能精彩片段列表。
 * @method void setHighlightSet(array $HighlightSet) 设置视频智能精彩片段列表。
 * @method TaskOutputStorage getOutputStorage() 获取精彩片段的存储位置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置精彩片段的存储位置。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AiAnalysisTaskHighlightOutput extends AbstractModel
{
    /**
     * @var array 视频智能精彩片段列表。
     */
    public $HighlightSet;

    /**
     * @var TaskOutputStorage 精彩片段的存储位置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputStorage;

    /**
     * @param array $HighlightSet 视频智能精彩片段列表。
     * @param TaskOutputStorage $OutputStorage 精彩片段的存储位置。
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
        if (array_key_exists("HighlightSet",$param) and $param["HighlightSet"] !== null) {
            $this->HighlightSet = [];
            foreach ($param["HighlightSet"] as $key => $value){
                $obj = new MediaAiAnalysisHighlightItem();
                $obj->deserialize($value);
                array_push($this->HighlightSet, $obj);
            }
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }
    }
}
