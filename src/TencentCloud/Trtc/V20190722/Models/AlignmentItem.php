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
 * 字幕对齐
 *
 * @method string getText() 获取<p>字幕文本</p>
 * @method void setText(string $Text) 设置<p>字幕文本</p>
 * @method integer getTimeBeginMs() 获取<p>字幕对应的时间起点</p>
 * @method void setTimeBeginMs(integer $TimeBeginMs) 设置<p>字幕对应的时间起点</p>
 * @method integer getTimeEndMs() 获取<p>字幕对应的时间尾点</p>
 * @method void setTimeEndMs(integer $TimeEndMs) 设置<p>字幕对应的时间尾点</p>
 * @method integer getTextBegin() 获取<p>字幕对应的文本索引起点</p>
 * @method void setTextBegin(integer $TextBegin) 设置<p>字幕对应的文本索引起点</p>
 * @method integer getTextEnd() 获取<p>字幕对应的文本索引尾点</p>
 * @method void setTextEnd(integer $TextEnd) 设置<p>字幕对应的文本索引尾点</p>
 * @method array getWords() 获取<p>词级别时间戳</p>
 * @method void setWords(array $Words) 设置<p>词级别时间戳</p>
 */
class AlignmentItem extends AbstractModel
{
    /**
     * @var string <p>字幕文本</p>
     */
    public $Text;

    /**
     * @var integer <p>字幕对应的时间起点</p>
     */
    public $TimeBeginMs;

    /**
     * @var integer <p>字幕对应的时间尾点</p>
     */
    public $TimeEndMs;

    /**
     * @var integer <p>字幕对应的文本索引起点</p>
     */
    public $TextBegin;

    /**
     * @var integer <p>字幕对应的文本索引尾点</p>
     */
    public $TextEnd;

    /**
     * @var array <p>词级别时间戳</p>
     */
    public $Words;

    /**
     * @param string $Text <p>字幕文本</p>
     * @param integer $TimeBeginMs <p>字幕对应的时间起点</p>
     * @param integer $TimeEndMs <p>字幕对应的时间尾点</p>
     * @param integer $TextBegin <p>字幕对应的文本索引起点</p>
     * @param integer $TextEnd <p>字幕对应的文本索引尾点</p>
     * @param array $Words <p>词级别时间戳</p>
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("TimeBeginMs",$param) and $param["TimeBeginMs"] !== null) {
            $this->TimeBeginMs = $param["TimeBeginMs"];
        }

        if (array_key_exists("TimeEndMs",$param) and $param["TimeEndMs"] !== null) {
            $this->TimeEndMs = $param["TimeEndMs"];
        }

        if (array_key_exists("TextBegin",$param) and $param["TextBegin"] !== null) {
            $this->TextBegin = $param["TextBegin"];
        }

        if (array_key_exists("TextEnd",$param) and $param["TextEnd"] !== null) {
            $this->TextEnd = $param["TextEnd"];
        }

        if (array_key_exists("Words",$param) and $param["Words"] !== null) {
            $this->Words = [];
            foreach ($param["Words"] as $key => $value){
                $obj = new WordItem();
                $obj->deserialize($value);
                array_push($this->Words, $obj);
            }
        }
    }
}
