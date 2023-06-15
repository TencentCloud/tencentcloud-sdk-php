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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 媒体处理结果，包含智能语音识别、智能文字识别结果
 *
 * @method array getAiAsrResults() 获取智能语音识别结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAiAsrResults(array $AiAsrResults) 设置智能语音识别结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAiOcrResults() 获取智能文字识别结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAiOcrResults(array $AiOcrResults) 设置智能文字识别结果
注意：此字段可能返回 null，表示取不到有效值。
 */
class MPSResult extends AbstractModel
{
    /**
     * @var array 智能语音识别结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AiAsrResults;

    /**
     * @var array 智能文字识别结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AiOcrResults;

    /**
     * @param array $AiAsrResults 智能语音识别结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AiOcrResults 智能文字识别结果
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
        if (array_key_exists("AiAsrResults",$param) and $param["AiAsrResults"] !== null) {
            $this->AiAsrResults = $param["AiAsrResults"];
        }

        if (array_key_exists("AiOcrResults",$param) and $param["AiOcrResults"] !== null) {
            $this->AiOcrResults = $param["AiOcrResults"];
        }
    }
}
