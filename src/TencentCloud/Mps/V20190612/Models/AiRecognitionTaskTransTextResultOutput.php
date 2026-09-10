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
 * 翻译结果。
 *
 * @method array getSegmentSet() 获取<p>翻译片段列表。</p>
 * @method void setSegmentSet(array $SegmentSet) 设置<p>翻译片段列表。</p>
 * @method string getSubtitlePath() 获取<p>字幕文件地址。</p>
 * @method void setSubtitlePath(string $SubtitlePath) 设置<p>字幕文件地址。</p>
 */
class AiRecognitionTaskTransTextResultOutput extends AbstractModel
{
    /**
     * @var array <p>翻译片段列表。</p>
     */
    public $SegmentSet;

    /**
     * @var string <p>字幕文件地址。</p>
     */
    public $SubtitlePath;

    /**
     * @param array $SegmentSet <p>翻译片段列表。</p>
     * @param string $SubtitlePath <p>字幕文件地址。</p>
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
        if (array_key_exists("SegmentSet",$param) and $param["SegmentSet"] !== null) {
            $this->SegmentSet = [];
            foreach ($param["SegmentSet"] as $key => $value){
                $obj = new AiRecognitionTaskTransTextSegmentItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }

        if (array_key_exists("SubtitlePath",$param) and $param["SubtitlePath"] !== null) {
            $this->SubtitlePath = $param["SubtitlePath"];
        }
    }
}
