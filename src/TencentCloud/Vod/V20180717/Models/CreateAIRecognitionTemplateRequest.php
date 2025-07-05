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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAIRecognitionTemplate请求参数结构体
 *
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method string getName() 获取音视频内容识别模板名称，长度限制：64 个字符。
 * @method void setName(string $Name) 设置音视频内容识别模板名称，长度限制：64 个字符。
 * @method string getComment() 获取音视频内容识别模板描述信息，长度限制：256 个字符。
 * @method void setComment(string $Comment) 设置音视频内容识别模板描述信息，长度限制：256 个字符。
 * @method HeadTailConfigureInfo getHeadTailConfigure() 获取视频片头片尾识别控制参数。
 * @method void setHeadTailConfigure(HeadTailConfigureInfo $HeadTailConfigure) 设置视频片头片尾识别控制参数。
 * @method SegmentConfigureInfo getSegmentConfigure() 获取视频拆条识别控制参数。
 * @method void setSegmentConfigure(SegmentConfigureInfo $SegmentConfigure) 设置视频拆条识别控制参数。
 * @method FaceConfigureInfo getFaceConfigure() 获取人脸识别控制参数。
 * @method void setFaceConfigure(FaceConfigureInfo $FaceConfigure) 设置人脸识别控制参数。
 * @method OcrFullTextConfigureInfo getOcrFullTextConfigure() 获取文本全文识别控制参数。
 * @method void setOcrFullTextConfigure(OcrFullTextConfigureInfo $OcrFullTextConfigure) 设置文本全文识别控制参数。
 * @method OcrWordsConfigureInfo getOcrWordsConfigure() 获取文本关键词识别控制参数。
 * @method void setOcrWordsConfigure(OcrWordsConfigureInfo $OcrWordsConfigure) 设置文本关键词识别控制参数。
 * @method AsrFullTextConfigureInfo getAsrFullTextConfigure() 获取语音全文识别控制参数。
<font color=red>注意：本参数已不再维护，推荐使用 AsrTranslateConfigure 参数发起语音翻译识别（当 DstLanguage 不填或填空字符串时，则不进行翻译，计费项和语音全文识别一致）。</font> 
 * @method void setAsrFullTextConfigure(AsrFullTextConfigureInfo $AsrFullTextConfigure) 设置语音全文识别控制参数。
<font color=red>注意：本参数已不再维护，推荐使用 AsrTranslateConfigure 参数发起语音翻译识别（当 DstLanguage 不填或填空字符串时，则不进行翻译，计费项和语音全文识别一致）。</font> 
 * @method AsrWordsConfigureInfo getAsrWordsConfigure() 获取语音关键词识别控制参数。
 * @method void setAsrWordsConfigure(AsrWordsConfigureInfo $AsrWordsConfigure) 设置语音关键词识别控制参数。
 * @method AsrTranslateConfigureInfo getAsrTranslateConfigure() 获取语音翻译识别控制参数。
 * @method void setAsrTranslateConfigure(AsrTranslateConfigureInfo $AsrTranslateConfigure) 设置语音翻译识别控制参数。
 * @method ObjectConfigureInfo getObjectConfigure() 获取物体识别控制参数。
 * @method void setObjectConfigure(ObjectConfigureInfo $ObjectConfigure) 设置物体识别控制参数。
 * @method float getScreenshotInterval() 获取截帧间隔，单位为秒。当不填时，默认截帧间隔为 1 秒，最小值为 0.5 秒。
 * @method void setScreenshotInterval(float $ScreenshotInterval) 设置截帧间隔，单位为秒。当不填时，默认截帧间隔为 1 秒，最小值为 0.5 秒。
 */
class CreateAIRecognitionTemplateRequest extends AbstractModel
{
    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     */
    public $SubAppId;

    /**
     * @var string 音视频内容识别模板名称，长度限制：64 个字符。
     */
    public $Name;

    /**
     * @var string 音视频内容识别模板描述信息，长度限制：256 个字符。
     */
    public $Comment;

    /**
     * @var HeadTailConfigureInfo 视频片头片尾识别控制参数。
     */
    public $HeadTailConfigure;

    /**
     * @var SegmentConfigureInfo 视频拆条识别控制参数。
     */
    public $SegmentConfigure;

    /**
     * @var FaceConfigureInfo 人脸识别控制参数。
     */
    public $FaceConfigure;

    /**
     * @var OcrFullTextConfigureInfo 文本全文识别控制参数。
     */
    public $OcrFullTextConfigure;

    /**
     * @var OcrWordsConfigureInfo 文本关键词识别控制参数。
     */
    public $OcrWordsConfigure;

    /**
     * @var AsrFullTextConfigureInfo 语音全文识别控制参数。
<font color=red>注意：本参数已不再维护，推荐使用 AsrTranslateConfigure 参数发起语音翻译识别（当 DstLanguage 不填或填空字符串时，则不进行翻译，计费项和语音全文识别一致）。</font> 
     */
    public $AsrFullTextConfigure;

    /**
     * @var AsrWordsConfigureInfo 语音关键词识别控制参数。
     */
    public $AsrWordsConfigure;

    /**
     * @var AsrTranslateConfigureInfo 语音翻译识别控制参数。
     */
    public $AsrTranslateConfigure;

    /**
     * @var ObjectConfigureInfo 物体识别控制参数。
     */
    public $ObjectConfigure;

    /**
     * @var float 截帧间隔，单位为秒。当不填时，默认截帧间隔为 1 秒，最小值为 0.5 秒。
     */
    public $ScreenshotInterval;

    /**
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     * @param string $Name 音视频内容识别模板名称，长度限制：64 个字符。
     * @param string $Comment 音视频内容识别模板描述信息，长度限制：256 个字符。
     * @param HeadTailConfigureInfo $HeadTailConfigure 视频片头片尾识别控制参数。
     * @param SegmentConfigureInfo $SegmentConfigure 视频拆条识别控制参数。
     * @param FaceConfigureInfo $FaceConfigure 人脸识别控制参数。
     * @param OcrFullTextConfigureInfo $OcrFullTextConfigure 文本全文识别控制参数。
     * @param OcrWordsConfigureInfo $OcrWordsConfigure 文本关键词识别控制参数。
     * @param AsrFullTextConfigureInfo $AsrFullTextConfigure 语音全文识别控制参数。
<font color=red>注意：本参数已不再维护，推荐使用 AsrTranslateConfigure 参数发起语音翻译识别（当 DstLanguage 不填或填空字符串时，则不进行翻译，计费项和语音全文识别一致）。</font> 
     * @param AsrWordsConfigureInfo $AsrWordsConfigure 语音关键词识别控制参数。
     * @param AsrTranslateConfigureInfo $AsrTranslateConfigure 语音翻译识别控制参数。
     * @param ObjectConfigureInfo $ObjectConfigure 物体识别控制参数。
     * @param float $ScreenshotInterval 截帧间隔，单位为秒。当不填时，默认截帧间隔为 1 秒，最小值为 0.5 秒。
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("HeadTailConfigure",$param) and $param["HeadTailConfigure"] !== null) {
            $this->HeadTailConfigure = new HeadTailConfigureInfo();
            $this->HeadTailConfigure->deserialize($param["HeadTailConfigure"]);
        }

        if (array_key_exists("SegmentConfigure",$param) and $param["SegmentConfigure"] !== null) {
            $this->SegmentConfigure = new SegmentConfigureInfo();
            $this->SegmentConfigure->deserialize($param["SegmentConfigure"]);
        }

        if (array_key_exists("FaceConfigure",$param) and $param["FaceConfigure"] !== null) {
            $this->FaceConfigure = new FaceConfigureInfo();
            $this->FaceConfigure->deserialize($param["FaceConfigure"]);
        }

        if (array_key_exists("OcrFullTextConfigure",$param) and $param["OcrFullTextConfigure"] !== null) {
            $this->OcrFullTextConfigure = new OcrFullTextConfigureInfo();
            $this->OcrFullTextConfigure->deserialize($param["OcrFullTextConfigure"]);
        }

        if (array_key_exists("OcrWordsConfigure",$param) and $param["OcrWordsConfigure"] !== null) {
            $this->OcrWordsConfigure = new OcrWordsConfigureInfo();
            $this->OcrWordsConfigure->deserialize($param["OcrWordsConfigure"]);
        }

        if (array_key_exists("AsrFullTextConfigure",$param) and $param["AsrFullTextConfigure"] !== null) {
            $this->AsrFullTextConfigure = new AsrFullTextConfigureInfo();
            $this->AsrFullTextConfigure->deserialize($param["AsrFullTextConfigure"]);
        }

        if (array_key_exists("AsrWordsConfigure",$param) and $param["AsrWordsConfigure"] !== null) {
            $this->AsrWordsConfigure = new AsrWordsConfigureInfo();
            $this->AsrWordsConfigure->deserialize($param["AsrWordsConfigure"]);
        }

        if (array_key_exists("AsrTranslateConfigure",$param) and $param["AsrTranslateConfigure"] !== null) {
            $this->AsrTranslateConfigure = new AsrTranslateConfigureInfo();
            $this->AsrTranslateConfigure->deserialize($param["AsrTranslateConfigure"]);
        }

        if (array_key_exists("ObjectConfigure",$param) and $param["ObjectConfigure"] !== null) {
            $this->ObjectConfigure = new ObjectConfigureInfo();
            $this->ObjectConfigure->deserialize($param["ObjectConfigure"]);
        }

        if (array_key_exists("ScreenshotInterval",$param) and $param["ScreenshotInterval"] !== null) {
            $this->ScreenshotInterval = $param["ScreenshotInterval"];
        }
    }
}
