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
 * 字词信息。
 *
 * @method string getWord() 获取字词文本。
 * @method void setWord(string $Word) 设置字词文本。
 * @method float getStart() 获取字词起始时间戳，单位秒。
 * @method void setStart(float $Start) 设置字词起始时间戳，单位秒。
 * @method float getEnd() 获取字词结束时间戳，单位秒。
 * @method void setEnd(float $End) 设置字词结束时间戳，单位秒。
 * @method string getTrans() 获取翻译文本
 * @method void setTrans(string $Trans) 设置翻译文本
 */
class WordResult extends AbstractModel
{
    /**
     * @var string 字词文本。
     */
    public $Word;

    /**
     * @var float 字词起始时间戳，单位秒。
     */
    public $Start;

    /**
     * @var float 字词结束时间戳，单位秒。
     */
    public $End;

    /**
     * @var string 翻译文本
     */
    public $Trans;

    /**
     * @param string $Word 字词文本。
     * @param float $Start 字词起始时间戳，单位秒。
     * @param float $End 字词结束时间戳，单位秒。
     * @param string $Trans 翻译文本
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
        if (array_key_exists("Word",$param) and $param["Word"] !== null) {
            $this->Word = $param["Word"];
        }

        if (array_key_exists("Start",$param) and $param["Start"] !== null) {
            $this->Start = $param["Start"];
        }

        if (array_key_exists("End",$param) and $param["End"] !== null) {
            $this->End = $param["End"];
        }

        if (array_key_exists("Trans",$param) and $param["Trans"] !== null) {
            $this->Trans = $param["Trans"];
        }
    }
}
