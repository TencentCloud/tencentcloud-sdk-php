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
 * CreateWordSamples请求参数结构体
 *
 * @method array getUsages() 获取<b>关键词应用场景，可选值：</b>
1. Recognition.Ocr：通过光学字符识别技术，进行内容识别；
2. Recognition.Asr：通过语音识别技术，进行内容识别；
3. Review.Ocr：通过光学字符识别技术，进行内容审核；
4. Review.Asr：通过语音识别技术，进行内容审核；
<b>可合并简写为：</b>
5. Recognition：通过光学字符识别技术、语音识别技术，进行内容识别，等价于 1+2；
6. Review：通过光学字符识别技术、语音识别技术，进行内容审核，等价于 3+4；
7. All：通过光学字符识别技术、语音识别技术，进行内容识别、内容审核，等价于 1+2+3+4。
 * @method void setUsages(array $Usages) 设置<b>关键词应用场景，可选值：</b>
1. Recognition.Ocr：通过光学字符识别技术，进行内容识别；
2. Recognition.Asr：通过语音识别技术，进行内容识别；
3. Review.Ocr：通过光学字符识别技术，进行内容审核；
4. Review.Asr：通过语音识别技术，进行内容审核；
<b>可合并简写为：</b>
5. Recognition：通过光学字符识别技术、语音识别技术，进行内容识别，等价于 1+2；
6. Review：通过光学字符识别技术、语音识别技术，进行内容审核，等价于 3+4；
7. All：通过光学字符识别技术、语音识别技术，进行内容识别、内容审核，等价于 1+2+3+4。
 * @method array getWords() 获取关键词，数组长度限制：100。
 * @method void setWords(array $Words) 设置关键词，数组长度限制：100。
 */
class CreateWordSamplesRequest extends AbstractModel
{
    /**
     * @var array <b>关键词应用场景，可选值：</b>
1. Recognition.Ocr：通过光学字符识别技术，进行内容识别；
2. Recognition.Asr：通过语音识别技术，进行内容识别；
3. Review.Ocr：通过光学字符识别技术，进行内容审核；
4. Review.Asr：通过语音识别技术，进行内容审核；
<b>可合并简写为：</b>
5. Recognition：通过光学字符识别技术、语音识别技术，进行内容识别，等价于 1+2；
6. Review：通过光学字符识别技术、语音识别技术，进行内容审核，等价于 3+4；
7. All：通过光学字符识别技术、语音识别技术，进行内容识别、内容审核，等价于 1+2+3+4。
     */
    public $Usages;

    /**
     * @var array 关键词，数组长度限制：100。
     */
    public $Words;

    /**
     * @param array $Usages <b>关键词应用场景，可选值：</b>
1. Recognition.Ocr：通过光学字符识别技术，进行内容识别；
2. Recognition.Asr：通过语音识别技术，进行内容识别；
3. Review.Ocr：通过光学字符识别技术，进行内容审核；
4. Review.Asr：通过语音识别技术，进行内容审核；
<b>可合并简写为：</b>
5. Recognition：通过光学字符识别技术、语音识别技术，进行内容识别，等价于 1+2；
6. Review：通过光学字符识别技术、语音识别技术，进行内容审核，等价于 3+4；
7. All：通过光学字符识别技术、语音识别技术，进行内容识别、内容审核，等价于 1+2+3+4。
     * @param array $Words 关键词，数组长度限制：100。
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
        if (array_key_exists('Usages',$param) and $param['Usages'] !== null) {
            $this->Usages = $param['Usages'];
        }

        if (array_key_exists('Words',$param) and $param['Words'] !== null) {
            $this->Words = [];
            foreach ($param['Words'] as $key => $value){
                $obj = new AiSampleWordInfo();
                $obj->deserialize($value);
                array_push($this->Words, $obj);
            }
        }
    }
}
