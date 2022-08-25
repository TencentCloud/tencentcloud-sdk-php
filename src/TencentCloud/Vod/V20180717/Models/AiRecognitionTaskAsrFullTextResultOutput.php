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
<font color=red>注意</font> ：该列表最多仅展示前 100 个元素。如希望获得完整结果，请从 SegmentSetFileUrl 对应的文件中获取。
 * @method void setSegmentSet(array $SegmentSet) 设置语音全文识别片段列表。
<font color=red>注意</font> ：该列表最多仅展示前 100 个元素。如希望获得完整结果，请从 SegmentSetFileUrl 对应的文件中获取。
 * @method string getSegmentSetFileUrl() 获取语音全文识别片段列表文件 URL。文件的内容为 JSON，数据结构与 SegmentSet 字段一致。 （文件不会永久存储，到达SegmentSetFileUrlExpireTime 时间点后文件将被删除）。
 * @method void setSegmentSetFileUrl(string $SegmentSetFileUrl) 设置语音全文识别片段列表文件 URL。文件的内容为 JSON，数据结构与 SegmentSet 字段一致。 （文件不会永久存储，到达SegmentSetFileUrlExpireTime 时间点后文件将被删除）。
 * @method string getSegmentSetFileUrlExpireTime() 获取语音全文识别片段列表文件 URL 失效时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setSegmentSetFileUrlExpireTime(string $SegmentSetFileUrlExpireTime) 设置语音全文识别片段列表文件 URL 失效时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method array getSubtitleSet() 获取生成的字幕列表，对应 [语音全文识别任务控制参数](https://cloud.tencent.com/document/api/266/31773#AsrFullTextConfigureInfo) SubtitleFormats。
 * @method void setSubtitleSet(array $SubtitleSet) 设置生成的字幕列表，对应 [语音全文识别任务控制参数](https://cloud.tencent.com/document/api/266/31773#AsrFullTextConfigureInfo) SubtitleFormats。
 * @method string getSubtitleUrl() 获取生成的字幕文件 Url，对应 [语音全文识别任务控制参数](https://cloud.tencent.com/document/api/266/31773#AsrFullTextConfigureInfo) SubtitleFormat。
 * @method void setSubtitleUrl(string $SubtitleUrl) 设置生成的字幕文件 Url，对应 [语音全文识别任务控制参数](https://cloud.tencent.com/document/api/266/31773#AsrFullTextConfigureInfo) SubtitleFormat。
 */
class AiRecognitionTaskAsrFullTextResultOutput extends AbstractModel
{
    /**
     * @var array 语音全文识别片段列表。
<font color=red>注意</font> ：该列表最多仅展示前 100 个元素。如希望获得完整结果，请从 SegmentSetFileUrl 对应的文件中获取。
     */
    public $SegmentSet;

    /**
     * @var string 语音全文识别片段列表文件 URL。文件的内容为 JSON，数据结构与 SegmentSet 字段一致。 （文件不会永久存储，到达SegmentSetFileUrlExpireTime 时间点后文件将被删除）。
     */
    public $SegmentSetFileUrl;

    /**
     * @var string 语音全文识别片段列表文件 URL 失效时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $SegmentSetFileUrlExpireTime;

    /**
     * @var array 生成的字幕列表，对应 [语音全文识别任务控制参数](https://cloud.tencent.com/document/api/266/31773#AsrFullTextConfigureInfo) SubtitleFormats。
     */
    public $SubtitleSet;

    /**
     * @var string 生成的字幕文件 Url，对应 [语音全文识别任务控制参数](https://cloud.tencent.com/document/api/266/31773#AsrFullTextConfigureInfo) SubtitleFormat。
     */
    public $SubtitleUrl;

    /**
     * @param array $SegmentSet 语音全文识别片段列表。
<font color=red>注意</font> ：该列表最多仅展示前 100 个元素。如希望获得完整结果，请从 SegmentSetFileUrl 对应的文件中获取。
     * @param string $SegmentSetFileUrl 语音全文识别片段列表文件 URL。文件的内容为 JSON，数据结构与 SegmentSet 字段一致。 （文件不会永久存储，到达SegmentSetFileUrlExpireTime 时间点后文件将被删除）。
     * @param string $SegmentSetFileUrlExpireTime 语音全文识别片段列表文件 URL 失效时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param array $SubtitleSet 生成的字幕列表，对应 [语音全文识别任务控制参数](https://cloud.tencent.com/document/api/266/31773#AsrFullTextConfigureInfo) SubtitleFormats。
     * @param string $SubtitleUrl 生成的字幕文件 Url，对应 [语音全文识别任务控制参数](https://cloud.tencent.com/document/api/266/31773#AsrFullTextConfigureInfo) SubtitleFormat。
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
                $obj = new AiRecognitionTaskAsrFullTextSegmentItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }

        if (array_key_exists("SegmentSetFileUrl",$param) and $param["SegmentSetFileUrl"] !== null) {
            $this->SegmentSetFileUrl = $param["SegmentSetFileUrl"];
        }

        if (array_key_exists("SegmentSetFileUrlExpireTime",$param) and $param["SegmentSetFileUrlExpireTime"] !== null) {
            $this->SegmentSetFileUrlExpireTime = $param["SegmentSetFileUrlExpireTime"];
        }

        if (array_key_exists("SubtitleSet",$param) and $param["SubtitleSet"] !== null) {
            $this->SubtitleSet = [];
            foreach ($param["SubtitleSet"] as $key => $value){
                $obj = new AiRecognitionTaskAsrFullTextResultOutputSubtitleItem();
                $obj->deserialize($value);
                array_push($this->SubtitleSet, $obj);
            }
        }

        if (array_key_exists("SubtitleUrl",$param) and $param["SubtitleUrl"] !== null) {
            $this->SubtitleUrl = $param["SubtitleUrl"];
        }
    }
}
