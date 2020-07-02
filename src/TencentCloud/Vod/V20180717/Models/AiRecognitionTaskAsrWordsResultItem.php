<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 语音关键词识别结果。
 *
 * @method string getWord() 获取语音关键词。
 * @method void setWord(string $Word) 设置语音关键词。
 * @method array getSegmentSet() 获取语音关键词出现的时间片段列表。
 * @method void setSegmentSet(array $SegmentSet) 设置语音关键词出现的时间片段列表。
 */
class AiRecognitionTaskAsrWordsResultItem extends AbstractModel
{
    /**
     * @var string 语音关键词。
     */
    public $Word;

    /**
     * @var array 语音关键词出现的时间片段列表。
     */
    public $SegmentSet;

    /**
     * @param string $Word 语音关键词。
     * @param array $SegmentSet 语音关键词出现的时间片段列表。
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
        if (array_key_exists('Word',$param) and $param['Word'] !== null) {
            $this->Word = $param['Word'];
        }

        if (array_key_exists('SegmentSet',$param) and $param['SegmentSet'] !== null) {
            $this->SegmentSet = [];
            foreach ($param['SegmentSet'] as $key => $value){
                $obj = new AiRecognitionTaskAsrWordsSegmentItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }
    }
}
