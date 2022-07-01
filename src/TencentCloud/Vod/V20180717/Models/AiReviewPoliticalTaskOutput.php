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
 * 涉及令人不适宜的信息
 *
 * @method float getConfidence() 获取视频涉及令人不适宜信息的评分，分值为0到100。
 * @method void setConfidence(float $Confidence) 设置视频涉及令人不适宜信息的评分，分值为0到100。
 * @method string getSuggestion() 获取涉及令人不适宜信息的结果建议，取值范围：
<li>pass。</li>
<li>review。</li>
<li>block。</li>
 * @method void setSuggestion(string $Suggestion) 设置涉及令人不适宜信息的结果建议，取值范围：
<li>pass。</li>
<li>review。</li>
<li>block。</li>
 * @method string getLabel() 获取视频涉及令人不适宜信息的结果标签。音视频审核模板[画面鉴政任务控制参数](https://cloud.tencent.com/document/api/266/31773#PoliticalImgReviewTemplateInfo)里 LabelSet 参数与此参数取值范围的对应关系：
violation_photo：
<li>violation_photo：违规图标。</li>
其他（即 politician/entertainment/sport/entrepreneur/scholar/celebrity/military）：
<li>politician：相关人物。</li>
 * @method void setLabel(string $Label) 设置视频涉及令人不适宜信息的结果标签。音视频审核模板[画面鉴政任务控制参数](https://cloud.tencent.com/document/api/266/31773#PoliticalImgReviewTemplateInfo)里 LabelSet 参数与此参数取值范围的对应关系：
violation_photo：
<li>violation_photo：违规图标。</li>
其他（即 politician/entertainment/sport/entrepreneur/scholar/celebrity/military）：
<li>politician：相关人物。</li>
 * @method array getSegmentSet() 获取有涉及令人不适宜信息嫌疑的视频片段列表。
<font color=red>注意</font> ：该列表最多仅展示前 100 个元素。如希望获得完整结果，请从 SegmentSetFileUrl 对应的文件中获取。
 * @method void setSegmentSet(array $SegmentSet) 设置有涉及令人不适宜信息嫌疑的视频片段列表。
<font color=red>注意</font> ：该列表最多仅展示前 100 个元素。如希望获得完整结果，请从 SegmentSetFileUrl 对应的文件中获取。
 * @method string getSegmentSetFileUrl() 获取有涉及令人不适宜的信息嫌疑的视频片段列表文件 URL。文件的内容为 JSON，数据结构与 SegmentSet 字段一致。 （文件不会永久存储，到达 SegmentSetFileUrlExpireTime 时间点后文件将被删除）。
 * @method void setSegmentSetFileUrl(string $SegmentSetFileUrl) 设置有涉及令人不适宜的信息嫌疑的视频片段列表文件 URL。文件的内容为 JSON，数据结构与 SegmentSet 字段一致。 （文件不会永久存储，到达 SegmentSetFileUrlExpireTime 时间点后文件将被删除）。
 * @method string getSegmentSetFileUrlExpireTime() 获取有涉及令人不适宜的信息嫌疑的视频片段列表文件 URL 失效时间，使用  [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setSegmentSetFileUrlExpireTime(string $SegmentSetFileUrlExpireTime) 设置有涉及令人不适宜的信息嫌疑的视频片段列表文件 URL 失效时间，使用  [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 */
class AiReviewPoliticalTaskOutput extends AbstractModel
{
    /**
     * @var float 视频涉及令人不适宜信息的评分，分值为0到100。
     */
    public $Confidence;

    /**
     * @var string 涉及令人不适宜信息的结果建议，取值范围：
<li>pass。</li>
<li>review。</li>
<li>block。</li>
     */
    public $Suggestion;

    /**
     * @var string 视频涉及令人不适宜信息的结果标签。音视频审核模板[画面鉴政任务控制参数](https://cloud.tencent.com/document/api/266/31773#PoliticalImgReviewTemplateInfo)里 LabelSet 参数与此参数取值范围的对应关系：
violation_photo：
<li>violation_photo：违规图标。</li>
其他（即 politician/entertainment/sport/entrepreneur/scholar/celebrity/military）：
<li>politician：相关人物。</li>
     */
    public $Label;

    /**
     * @var array 有涉及令人不适宜信息嫌疑的视频片段列表。
<font color=red>注意</font> ：该列表最多仅展示前 100 个元素。如希望获得完整结果，请从 SegmentSetFileUrl 对应的文件中获取。
     */
    public $SegmentSet;

    /**
     * @var string 有涉及令人不适宜的信息嫌疑的视频片段列表文件 URL。文件的内容为 JSON，数据结构与 SegmentSet 字段一致。 （文件不会永久存储，到达 SegmentSetFileUrlExpireTime 时间点后文件将被删除）。
     */
    public $SegmentSetFileUrl;

    /**
     * @var string 有涉及令人不适宜的信息嫌疑的视频片段列表文件 URL 失效时间，使用  [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $SegmentSetFileUrlExpireTime;

    /**
     * @param float $Confidence 视频涉及令人不适宜信息的评分，分值为0到100。
     * @param string $Suggestion 涉及令人不适宜信息的结果建议，取值范围：
<li>pass。</li>
<li>review。</li>
<li>block。</li>
     * @param string $Label 视频涉及令人不适宜信息的结果标签。音视频审核模板[画面鉴政任务控制参数](https://cloud.tencent.com/document/api/266/31773#PoliticalImgReviewTemplateInfo)里 LabelSet 参数与此参数取值范围的对应关系：
violation_photo：
<li>violation_photo：违规图标。</li>
其他（即 politician/entertainment/sport/entrepreneur/scholar/celebrity/military）：
<li>politician：相关人物。</li>
     * @param array $SegmentSet 有涉及令人不适宜信息嫌疑的视频片段列表。
<font color=red>注意</font> ：该列表最多仅展示前 100 个元素。如希望获得完整结果，请从 SegmentSetFileUrl 对应的文件中获取。
     * @param string $SegmentSetFileUrl 有涉及令人不适宜的信息嫌疑的视频片段列表文件 URL。文件的内容为 JSON，数据结构与 SegmentSet 字段一致。 （文件不会永久存储，到达 SegmentSetFileUrlExpireTime 时间点后文件将被删除）。
     * @param string $SegmentSetFileUrlExpireTime 有涉及令人不适宜的信息嫌疑的视频片段列表文件 URL 失效时间，使用  [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
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
        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("SegmentSet",$param) and $param["SegmentSet"] !== null) {
            $this->SegmentSet = [];
            foreach ($param["SegmentSet"] as $key => $value){
                $obj = new MediaContentReviewPoliticalSegmentItem();
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
    }
}
