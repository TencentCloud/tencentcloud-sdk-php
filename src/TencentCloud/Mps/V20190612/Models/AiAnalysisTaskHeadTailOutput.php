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
 * 片头片尾结果信息
 *
 * @method float getHeadTimeOffset() 获取片头pts。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeadTimeOffset(float $HeadTimeOffset) 设置片头pts。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTailTimeOffset() 获取片尾pts。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTailTimeOffset(float $TailTimeOffset) 设置片尾pts。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AiAnalysisTaskHeadTailOutput extends AbstractModel
{
    /**
     * @var float 片头pts。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeadTimeOffset;

    /**
     * @var float 片尾pts。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TailTimeOffset;

    /**
     * @param float $HeadTimeOffset 片头pts。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TailTimeOffset 片尾pts。
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
        if (array_key_exists("HeadTimeOffset",$param) and $param["HeadTimeOffset"] !== null) {
            $this->HeadTimeOffset = $param["HeadTimeOffset"];
        }

        if (array_key_exists("TailTimeOffset",$param) and $param["TailTimeOffset"] !== null) {
            $this->TailTimeOffset = $param["TailTimeOffset"];
        }
    }
}
