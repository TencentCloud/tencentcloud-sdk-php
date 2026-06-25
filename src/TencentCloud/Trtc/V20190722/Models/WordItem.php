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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 词级别对齐信息
 *
 * @method string getWord() 获取<p>词对应的文本</p>
 * @method void setWord(string $Word) 设置<p>词对应的文本</p>
 * @method integer getTimeBeginMs() 获取<p>词对应的时间起点</p>
 * @method void setTimeBeginMs(integer $TimeBeginMs) 设置<p>词对应的时间起点</p>
 * @method integer getTimeEndMs() 获取<p>词对应的时间尾点</p>
 * @method void setTimeEndMs(integer $TimeEndMs) 设置<p>词对应的时间尾点</p>
 * @method integer getWordBegin() 获取<p>词的索引起点</p>
 * @method void setWordBegin(integer $WordBegin) 设置<p>词的索引起点</p>
 * @method integer getWordEnd() 获取<p>词的索引尾点</p>
 * @method void setWordEnd(integer $WordEnd) 设置<p>词的索引尾点</p>
 */
class WordItem extends AbstractModel
{
    /**
     * @var string <p>词对应的文本</p>
     */
    public $Word;

    /**
     * @var integer <p>词对应的时间起点</p>
     */
    public $TimeBeginMs;

    /**
     * @var integer <p>词对应的时间尾点</p>
     */
    public $TimeEndMs;

    /**
     * @var integer <p>词的索引起点</p>
     */
    public $WordBegin;

    /**
     * @var integer <p>词的索引尾点</p>
     */
    public $WordEnd;

    /**
     * @param string $Word <p>词对应的文本</p>
     * @param integer $TimeBeginMs <p>词对应的时间起点</p>
     * @param integer $TimeEndMs <p>词对应的时间尾点</p>
     * @param integer $WordBegin <p>词的索引起点</p>
     * @param integer $WordEnd <p>词的索引尾点</p>
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

        if (array_key_exists("TimeBeginMs",$param) and $param["TimeBeginMs"] !== null) {
            $this->TimeBeginMs = $param["TimeBeginMs"];
        }

        if (array_key_exists("TimeEndMs",$param) and $param["TimeEndMs"] !== null) {
            $this->TimeEndMs = $param["TimeEndMs"];
        }

        if (array_key_exists("WordBegin",$param) and $param["WordBegin"] !== null) {
            $this->WordBegin = $param["WordBegin"];
        }

        if (array_key_exists("WordEnd",$param) and $param["WordEnd"] !== null) {
            $this->WordEnd = $param["WordEnd"];
        }
    }
}
