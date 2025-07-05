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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单个文本摘要分割结果和所有镜头的匹配度信息
 *
 * @method array getScoreSet() 获取数组第 i 个值表示该文本摘要和第 i 个镜头的匹配度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScoreSet(array $ScoreSet) 设置数组第 i 个值表示该文本摘要和第 i 个镜头的匹配度
注意：此字段可能返回 null，表示取不到有效值。
 */
class TextSegMatchShotScore extends AbstractModel
{
    /**
     * @var array 数组第 i 个值表示该文本摘要和第 i 个镜头的匹配度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScoreSet;

    /**
     * @param array $ScoreSet 数组第 i 个值表示该文本摘要和第 i 个镜头的匹配度
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
        if (array_key_exists("ScoreSet",$param) and $param["ScoreSet"] !== null) {
            $this->ScoreSet = $param["ScoreSet"];
        }
    }
}
