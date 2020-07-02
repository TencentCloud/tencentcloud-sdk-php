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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 语音全文识别结果。
 *
 * @method array getSegmentSet() 获取语音全文识别片段列表。
 * @method void setSegmentSet(array $SegmentSet) 设置语音全文识别片段列表。
 * @method string getSubtitleUrl() 获取字幕文件 Url。
 * @method void setSubtitleUrl(string $SubtitleUrl) 设置字幕文件 Url。
 */
class AiRecognitionTaskAsrFullTextResultOutput extends AbstractModel
{
    /**
     * @var array 语音全文识别片段列表。
     */
    public $SegmentSet;

    /**
     * @var string 字幕文件 Url。
     */
    public $SubtitleUrl;

    /**
     * @param array $SegmentSet 语音全文识别片段列表。
     * @param string $SubtitleUrl 字幕文件 Url。
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
        if (array_key_exists('SegmentSet',$param) and $param['SegmentSet'] !== null) {
            $this->SegmentSet = [];
            foreach ($param['SegmentSet'] as $key => $value){
                $obj = new AiRecognitionTaskAsrFullTextSegmentItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }

        if (array_key_exists('SubtitleUrl',$param) and $param['SubtitleUrl'] !== null) {
            $this->SubtitleUrl = $param['SubtitleUrl'];
        }
    }
}
