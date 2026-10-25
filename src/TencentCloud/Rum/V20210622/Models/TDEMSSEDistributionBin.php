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
 * 大模型对话分布档
 *
 * @method float getStart() 获取<p>档位左端，左闭。</p>
 * @method void setStart(float $Start) 设置<p>档位左端，左闭。</p>
 * @method float getEnd() 获取<p>档位右端。溢出档省略。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnd(float $End) 设置<p>档位右端。溢出档省略。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getOverflow() 获取<p>是否为溢出档。溢出档为 true，且不返回 End。</p>
 * @method void setOverflow(boolean $Overflow) 设置<p>是否为溢出档。溢出档为 true，且不返回 End。</p>
 * @method integer getCount() 获取<p>落入该档的对话次数。</p>
 * @method void setCount(integer $Count) 设置<p>落入该档的对话次数。</p>
 * @method float getRate() 获取<p>该档占有效样本的百分比，已乘 100。</p>
 * @method void setRate(float $Rate) 设置<p>该档占有效样本的百分比，已乘 100。</p>
 */
class TDEMSSEDistributionBin extends AbstractModel
{
    /**
     * @var float <p>档位左端，左闭。</p>
     */
    public $Start;

    /**
     * @var float <p>档位右端。溢出档省略。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $End;

    /**
     * @var boolean <p>是否为溢出档。溢出档为 true，且不返回 End。</p>
     */
    public $Overflow;

    /**
     * @var integer <p>落入该档的对话次数。</p>
     */
    public $Count;

    /**
     * @var float <p>该档占有效样本的百分比，已乘 100。</p>
     */
    public $Rate;

    /**
     * @param float $Start <p>档位左端，左闭。</p>
     * @param float $End <p>档位右端。溢出档省略。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Overflow <p>是否为溢出档。溢出档为 true，且不返回 End。</p>
     * @param integer $Count <p>落入该档的对话次数。</p>
     * @param float $Rate <p>该档占有效样本的百分比，已乘 100。</p>
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
        if (array_key_exists("Start",$param) and $param["Start"] !== null) {
            $this->Start = $param["Start"];
        }

        if (array_key_exists("End",$param) and $param["End"] !== null) {
            $this->End = $param["End"];
        }

        if (array_key_exists("Overflow",$param) and $param["Overflow"] !== null) {
            $this->Overflow = $param["Overflow"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }
    }
}
