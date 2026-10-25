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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 总览计分项。Score/Value 缺失时省略，前端展示 —。
 *
 * @method string getKey() 获取<p>计分项，如 crash / anr / lag</p>
 * @method void setKey(string $Key) 设置<p>计分项，如 crash / anr / lag</p>
 * @method float getScore() 获取<p>单项 0-100，缺失省略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScore(float $Score) 设置<p>单项 0-100，缺失省略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getValue() 获取<p>原始值（率为小数、耗时为 ms）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(float $Value) 设置<p>原始值（率为小数、耗时为 ms）</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class OverviewScoreItem extends AbstractModel
{
    /**
     * @var string <p>计分项，如 crash / anr / lag</p>
     */
    public $Key;

    /**
     * @var float <p>单项 0-100，缺失省略</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Score;

    /**
     * @var float <p>原始值（率为小数、耗时为 ms）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @param string $Key <p>计分项，如 crash / anr / lag</p>
     * @param float $Score <p>单项 0-100，缺失省略</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Value <p>原始值（率为小数、耗时为 ms）</p>
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
