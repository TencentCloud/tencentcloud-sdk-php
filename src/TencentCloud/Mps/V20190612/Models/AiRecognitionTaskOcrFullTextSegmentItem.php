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
 * 文本全文识别片段。
 *
 * @method float getStartTimeOffset() 获取识别片段起始的偏移时间，单位：秒。
 * @method void setStartTimeOffset(float $StartTimeOffset) 设置识别片段起始的偏移时间，单位：秒。
 * @method float getEndTimeOffset() 获取识别片段终止的偏移时间，单位：秒。
 * @method void setEndTimeOffset(float $EndTimeOffset) 设置识别片段终止的偏移时间，单位：秒。
 * @method array getTextSet() 获取识别片段结果集。
 * @method void setTextSet(array $TextSet) 设置识别片段结果集。
 */
class AiRecognitionTaskOcrFullTextSegmentItem extends AbstractModel
{
    /**
     * @var float 识别片段起始的偏移时间，单位：秒。
     */
    public $StartTimeOffset;

    /**
     * @var float 识别片段终止的偏移时间，单位：秒。
     */
    public $EndTimeOffset;

    /**
     * @var array 识别片段结果集。
     */
    public $TextSet;

    /**
     * @param float $StartTimeOffset 识别片段起始的偏移时间，单位：秒。
     * @param float $EndTimeOffset 识别片段终止的偏移时间，单位：秒。
     * @param array $TextSet 识别片段结果集。
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
        if (array_key_exists('StartTimeOffset',$param) and $param['StartTimeOffset'] !== null) {
            $this->StartTimeOffset = $param['StartTimeOffset'];
        }

        if (array_key_exists('EndTimeOffset',$param) and $param['EndTimeOffset'] !== null) {
            $this->EndTimeOffset = $param['EndTimeOffset'];
        }

        if (array_key_exists('TextSet',$param) and $param['TextSet'] !== null) {
            $this->TextSet = [];
            foreach ($param['TextSet'] as $key => $value){
                $obj = new AiRecognitionTaskOcrFullTextSegmentTextItem();
                $obj->deserialize($value);
                array_push($this->TextSet, $obj);
            }
        }
    }
}
