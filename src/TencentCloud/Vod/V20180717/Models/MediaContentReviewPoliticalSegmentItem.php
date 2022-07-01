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
 * 音视频审核涉及令人不适宜信息的嫌疑片段
 *
 * @method float getStartTimeOffset() 获取嫌疑片段起始的偏移时间，单位：秒。
 * @method void setStartTimeOffset(float $StartTimeOffset) 设置嫌疑片段起始的偏移时间，单位：秒。
 * @method float getEndTimeOffset() 获取嫌疑片段结束的偏移时间，单位：秒。
 * @method void setEndTimeOffset(float $EndTimeOffset) 设置嫌疑片段结束的偏移时间，单位：秒。
 * @method float getConfidence() 获取嫌疑片段分数。
 * @method void setConfidence(float $Confidence) 设置嫌疑片段分数。
 * @method string getSuggestion() 获取嫌疑片段涉及令人不适宜的信息的结果建议，取值范围：
<li>pass。</li>
<li>review。</li>
<li>block。</li>
 * @method void setSuggestion(string $Suggestion) 设置嫌疑片段涉及令人不适宜的信息的结果建议，取值范围：
<li>pass。</li>
<li>review。</li>
<li>block。</li>
 * @method string getName() 获取涉及令人不适宜的信息、违规图标名字。
 * @method void setName(string $Name) 设置涉及令人不适宜的信息、违规图标名字。
 * @method string getLabel() 获取嫌疑片段涉及令人不适宜的信息的结果标签。音视频审核模板[画面涉及令人不适宜的信息的任务控制参数](https://cloud.tencent.com/document/api/266/31773#PoliticalImgReviewTemplateInfo)里 LabelSet 参数与此参数取值范围的对应关系：
violation_photo：
<li>violation_photo：违规图标。</li>
politician：
<li>nation_politician：国家领导人；</li>
<li>province_politician: 省部级领导人；</li>
<li>bureau_politician：厅局级领导人；</li>
<li>county_politician：县处级领导人；</li>
<li>rural_politician：乡科级领导人；</li>
<li>sensitive_politician：违规相关人物；</li>
<li>foreign_politician：国外领导人。</li>
entertainment：
<li>sensitive_entertainment：违规娱乐人物。</li>
sport：
<li>sensitive_sport：违规体育人物。</li>
entrepreneur：
<li>sensitive_entrepreneur：违规商业人物。</li>
scholar：
<li>sensitive_scholar：违规教育学者。</li>
celebrity：
<li>sensitive_celebrity：违规知名人物；</li>
<li>historical_celebrity：历史知名人物。</li>
military：
<li>sensitive_military：违规相关人物。</li>
 * @method void setLabel(string $Label) 设置嫌疑片段涉及令人不适宜的信息的结果标签。音视频审核模板[画面涉及令人不适宜的信息的任务控制参数](https://cloud.tencent.com/document/api/266/31773#PoliticalImgReviewTemplateInfo)里 LabelSet 参数与此参数取值范围的对应关系：
violation_photo：
<li>violation_photo：违规图标。</li>
politician：
<li>nation_politician：国家领导人；</li>
<li>province_politician: 省部级领导人；</li>
<li>bureau_politician：厅局级领导人；</li>
<li>county_politician：县处级领导人；</li>
<li>rural_politician：乡科级领导人；</li>
<li>sensitive_politician：违规相关人物；</li>
<li>foreign_politician：国外领导人。</li>
entertainment：
<li>sensitive_entertainment：违规娱乐人物。</li>
sport：
<li>sensitive_sport：违规体育人物。</li>
entrepreneur：
<li>sensitive_entrepreneur：违规商业人物。</li>
scholar：
<li>sensitive_scholar：违规教育学者。</li>
celebrity：
<li>sensitive_celebrity：违规知名人物；</li>
<li>historical_celebrity：历史知名人物。</li>
military：
<li>sensitive_military：违规相关人物。</li>
 * @method string getUrl() 获取嫌疑图片 URL （图片不会永久存储，到达
 PicUrlExpireTime 时间点后图片将被删除）。
 * @method void setUrl(string $Url) 设置嫌疑图片 URL （图片不会永久存储，到达
 PicUrlExpireTime 时间点后图片将被删除）。
 * @method array getAreaCoordSet() 获取涉及令人不适宜的信息、违规图标出现的区域坐标 (像素级)，[x1, y1, x2, y2]，即左上角坐标、右下角坐标。
 * @method void setAreaCoordSet(array $AreaCoordSet) 设置涉及令人不适宜的信息、违规图标出现的区域坐标 (像素级)，[x1, y1, x2, y2]，即左上角坐标、右下角坐标。
 * @method integer getPicUrlExpireTimeStamp() 获取该字段已废弃，请使用 PicUrlExpireTime。
 * @method void setPicUrlExpireTimeStamp(integer $PicUrlExpireTimeStamp) 设置该字段已废弃，请使用 PicUrlExpireTime。
 * @method string getPicUrlExpireTime() 获取嫌疑图片 URL 失效时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setPicUrlExpireTime(string $PicUrlExpireTime) 设置嫌疑图片 URL 失效时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 */
class MediaContentReviewPoliticalSegmentItem extends AbstractModel
{
    /**
     * @var float 嫌疑片段起始的偏移时间，单位：秒。
     */
    public $StartTimeOffset;

    /**
     * @var float 嫌疑片段结束的偏移时间，单位：秒。
     */
    public $EndTimeOffset;

    /**
     * @var float 嫌疑片段分数。
     */
    public $Confidence;

    /**
     * @var string 嫌疑片段涉及令人不适宜的信息的结果建议，取值范围：
<li>pass。</li>
<li>review。</li>
<li>block。</li>
     */
    public $Suggestion;

    /**
     * @var string 涉及令人不适宜的信息、违规图标名字。
     */
    public $Name;

    /**
     * @var string 嫌疑片段涉及令人不适宜的信息的结果标签。音视频审核模板[画面涉及令人不适宜的信息的任务控制参数](https://cloud.tencent.com/document/api/266/31773#PoliticalImgReviewTemplateInfo)里 LabelSet 参数与此参数取值范围的对应关系：
violation_photo：
<li>violation_photo：违规图标。</li>
politician：
<li>nation_politician：国家领导人；</li>
<li>province_politician: 省部级领导人；</li>
<li>bureau_politician：厅局级领导人；</li>
<li>county_politician：县处级领导人；</li>
<li>rural_politician：乡科级领导人；</li>
<li>sensitive_politician：违规相关人物；</li>
<li>foreign_politician：国外领导人。</li>
entertainment：
<li>sensitive_entertainment：违规娱乐人物。</li>
sport：
<li>sensitive_sport：违规体育人物。</li>
entrepreneur：
<li>sensitive_entrepreneur：违规商业人物。</li>
scholar：
<li>sensitive_scholar：违规教育学者。</li>
celebrity：
<li>sensitive_celebrity：违规知名人物；</li>
<li>historical_celebrity：历史知名人物。</li>
military：
<li>sensitive_military：违规相关人物。</li>
     */
    public $Label;

    /**
     * @var string 嫌疑图片 URL （图片不会永久存储，到达
 PicUrlExpireTime 时间点后图片将被删除）。
     */
    public $Url;

    /**
     * @var array 涉及令人不适宜的信息、违规图标出现的区域坐标 (像素级)，[x1, y1, x2, y2]，即左上角坐标、右下角坐标。
     */
    public $AreaCoordSet;

    /**
     * @var integer 该字段已废弃，请使用 PicUrlExpireTime。
     */
    public $PicUrlExpireTimeStamp;

    /**
     * @var string 嫌疑图片 URL 失效时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $PicUrlExpireTime;

    /**
     * @param float $StartTimeOffset 嫌疑片段起始的偏移时间，单位：秒。
     * @param float $EndTimeOffset 嫌疑片段结束的偏移时间，单位：秒。
     * @param float $Confidence 嫌疑片段分数。
     * @param string $Suggestion 嫌疑片段涉及令人不适宜的信息的结果建议，取值范围：
<li>pass。</li>
<li>review。</li>
<li>block。</li>
     * @param string $Name 涉及令人不适宜的信息、违规图标名字。
     * @param string $Label 嫌疑片段涉及令人不适宜的信息的结果标签。音视频审核模板[画面涉及令人不适宜的信息的任务控制参数](https://cloud.tencent.com/document/api/266/31773#PoliticalImgReviewTemplateInfo)里 LabelSet 参数与此参数取值范围的对应关系：
violation_photo：
<li>violation_photo：违规图标。</li>
politician：
<li>nation_politician：国家领导人；</li>
<li>province_politician: 省部级领导人；</li>
<li>bureau_politician：厅局级领导人；</li>
<li>county_politician：县处级领导人；</li>
<li>rural_politician：乡科级领导人；</li>
<li>sensitive_politician：违规相关人物；</li>
<li>foreign_politician：国外领导人。</li>
entertainment：
<li>sensitive_entertainment：违规娱乐人物。</li>
sport：
<li>sensitive_sport：违规体育人物。</li>
entrepreneur：
<li>sensitive_entrepreneur：违规商业人物。</li>
scholar：
<li>sensitive_scholar：违规教育学者。</li>
celebrity：
<li>sensitive_celebrity：违规知名人物；</li>
<li>historical_celebrity：历史知名人物。</li>
military：
<li>sensitive_military：违规相关人物。</li>
     * @param string $Url 嫌疑图片 URL （图片不会永久存储，到达
 PicUrlExpireTime 时间点后图片将被删除）。
     * @param array $AreaCoordSet 涉及令人不适宜的信息、违规图标出现的区域坐标 (像素级)，[x1, y1, x2, y2]，即左上角坐标、右下角坐标。
     * @param integer $PicUrlExpireTimeStamp 该字段已废弃，请使用 PicUrlExpireTime。
     * @param string $PicUrlExpireTime 嫌疑图片 URL 失效时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
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
        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("AreaCoordSet",$param) and $param["AreaCoordSet"] !== null) {
            $this->AreaCoordSet = $param["AreaCoordSet"];
        }

        if (array_key_exists("PicUrlExpireTimeStamp",$param) and $param["PicUrlExpireTimeStamp"] !== null) {
            $this->PicUrlExpireTimeStamp = $param["PicUrlExpireTimeStamp"];
        }

        if (array_key_exists("PicUrlExpireTime",$param) and $param["PicUrlExpireTime"] !== null) {
            $this->PicUrlExpireTime = $param["PicUrlExpireTime"];
        }
    }
}
