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
 * 分段信息。
 *
 * @method string getSummary() 获取分段摘要
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSummary(string $Summary) 设置分段摘要
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTitle() 获取分段标题
 * @method void setTitle(string $Title) 设置分段标题
 * @method array getKeywords() 获取分段关键词
 * @method void setKeywords(array $Keywords) 设置分段关键词
 * @method float getStartTimeOffset() 获取分段起始时间点，秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTimeOffset(float $StartTimeOffset) 设置分段起始时间点，秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getEndTimeOffset() 获取分段结束时间点，秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTimeOffset(float $EndTimeOffset) 设置分段结束时间点，秒
注意：此字段可能返回 null，表示取不到有效值。
 */
class AiParagraphInfo extends AbstractModel
{
    /**
     * @var string 分段摘要
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Summary;

    /**
     * @var string 分段标题
     */
    public $Title;

    /**
     * @var array 分段关键词
     */
    public $Keywords;

    /**
     * @var float 分段起始时间点，秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTimeOffset;

    /**
     * @var float 分段结束时间点，秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTimeOffset;

    /**
     * @param string $Summary 分段摘要
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Title 分段标题
     * @param array $Keywords 分段关键词
     * @param float $StartTimeOffset 分段起始时间点，秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $EndTimeOffset 分段结束时间点，秒
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
        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = $param["Summary"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }
    }
}
