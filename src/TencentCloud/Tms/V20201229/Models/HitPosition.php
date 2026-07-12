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
namespace TencentCloud\Tms\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 命中的位置坐标，是个左闭右开结构，比如原文是“一二三四五”，命中的文本是“二三”，则位置坐标是{1,3}
 *
 * @method integer getStart() 获取<p>起始下标，含（按 rune/字符计算）,一段文本的起始下标是0</p>
 * @method void setStart(integer $Start) 设置<p>起始下标，含（按 rune/字符计算）,一段文本的起始下标是0</p>
 * @method integer getEnd() 获取<p>结束下标，不含（按 rune/字符），比如Start：1，End:3,表示第1，第2个字符，不包含第3个字符</p>
 * @method void setEnd(integer $End) 设置<p>结束下标，不含（按 rune/字符），比如Start：1，End:3,表示第1，第2个字符，不包含第3个字符</p>
 */
class HitPosition extends AbstractModel
{
    /**
     * @var integer <p>起始下标，含（按 rune/字符计算）,一段文本的起始下标是0</p>
     */
    public $Start;

    /**
     * @var integer <p>结束下标，不含（按 rune/字符），比如Start：1，End:3,表示第1，第2个字符，不包含第3个字符</p>
     */
    public $End;

    /**
     * @param integer $Start <p>起始下标，含（按 rune/字符计算）,一段文本的起始下标是0</p>
     * @param integer $End <p>结束下标，不含（按 rune/字符），比如Start：1，End:3,表示第1，第2个字符，不包含第3个字符</p>
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
    }
}
