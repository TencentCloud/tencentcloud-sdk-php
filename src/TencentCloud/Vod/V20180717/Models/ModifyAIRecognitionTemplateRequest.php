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
 * ModifyAIRecognitionTemplate请求参数结构体
 *
 * @method integer getDefinition() 获取音视频内容识别模板唯一标识。
 * @method void setDefinition(integer $Definition) 设置音视频内容识别模板唯一标识。
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method string getName() 获取音视频内容识别模板名称，长度限制：64 个字符。
 * @method void setName(string $Name) 设置音视频内容识别模板名称，长度限制：64 个字符。
 * @method string getComment() 获取音视频内容识别模板描述信息，长度限制：256 个字符。
 * @method void setComment(string $Comment) 设置音视频内容识别模板描述信息，长度限制：256 个字符。
 * @method HeadTailConfigureInfoForUpdate getHeadTailConfigure() 获取视频片头片尾识别控制参数。
 * @method void setHeadTailConfigure(HeadTailConfigureInfoForUpdate $HeadTailConfigure) 设置视频片头片尾识别控制参数。
 * @method SegmentConfigureInfoForUpdate getSegmentConfigure() 获取视频拆条识别控制参数。
 * @method void setSegmentConfigure(SegmentConfigureInfoForUpdate $SegmentConfigure) 设置视频拆条识别控制参数。
 * @method FaceConfigureInfoForUpdate getFaceConfigure() 获取人脸识别控制参数。
 * @method void setFaceConfigure(FaceConfigureInfoForUpdate $FaceConfigure) 设置人脸识别控制参数。
 * @method OcrFullTextConfigureInfoForUpdate getOcrFullTextConfigure() 获取文本全文识别控制参数。
 * @method void setOcrFullTextConfigure(OcrFullTextConfigureInfoForUpdate $OcrFullTextConfigure) 设置文本全文识别控制参数。
 * @method OcrWordsConfigureInfoForUpdate getOcrWordsConfigure() 获取文本关键词识别控制参数。
 * @method void setOcrWordsConfigure(OcrWordsConfigureInfoForUpdate $OcrWordsConfigure) 设置文本关键词识别控制参数。
 * @method AsrFullTextConfigureInfoForUpdate getAsrFullTextConfigure() 获取语音全文识别控制参数。
<font color=red>注意：本参数已不再维护，推荐使用 AsrTranslateConfigure 参数发起语音翻译识别（当 DstLanguage 不填或填空字符串时，则不进行翻译，计费项和语音全文识别一致）。</font>
 * @method void setAsrFullTextConfigure(AsrFullTextConfigureInfoForUpdate $AsrFullTextConfigure) 设置语音全文识别控制参数。
<font color=red>注意：本参数已不再维护，推荐使用 AsrTranslateConfigure 参数发起语音翻译识别（当 DstLanguage 不填或填空字符串时，则不进行翻译，计费项和语音全文识别一致）。</font>
 * @method AsrWordsConfigureInfoForUpdate getAsrWordsConfigure() 获取语音关键词识别控制参数。
 * @method void setAsrWordsConfigure(AsrWordsConfigureInfoForUpdate $AsrWordsConfigure) 设置语音关键词识别控制参数。
 * @method AsrTranslateConfigureInfoForUpdate getAsrTranslateConfigure() 获取语音翻译识别控制参数。
 * @method void setAsrTranslateConfigure(AsrTranslateConfigureInfoForUpdate $AsrTranslateConfigure) 设置语音翻译识别控制参数。
 * @method ObjectConfigureInfoForUpdate getObjectConfigure() 获取物体识别控制参数。
 * @method void setObjectConfigure(ObjectConfigureInfoForUpdate $ObjectConfigure) 设置物体识别控制参数。
 * @method float getScreenshotInterval() 获取截帧间隔，单位为秒，最小值为 0.5 秒。
 * @method void setScreenshotInterval(float $ScreenshotInterval) 设置截帧间隔，单位为秒，最小值为 0.5 秒。
 */
class ModifyAIRecognitionTemplateRequest extends AbstractModel
{
    /**
     * @var integer 音视频内容识别模板唯一标识。
     */
    public $Definition;

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
     * @var HeadTailConfigureInfoForUpdate 视频片头片尾识别控制参数。
     */
    public $HeadTailConfigure;

    /**
     * @var SegmentConfigureInfoForUpdate 视频拆条识别控制参数。
     */
    public $SegmentConfigure;

    /**
     * @var FaceConfigureInfoForUpdate 人脸识别控制参数。
     */
    public $FaceConfigure;

    /**
     * @var OcrFullTextConfigureInfoForUpdate 文本全文识别控制参数。
     */
    public $OcrFullTextConfigure;

    /**
     * @var OcrWordsConfigureInfoForUpdate 文本关键词识别控制参数。
     */
    public $OcrWordsConfigure;

    /**
     * @var AsrFullTextConfigureInfoForUpdate 语音全文识别控制参数。
<font color=red>注意：本参数已不再维护，推荐使用 AsrTranslateConfigure 参数发起语音翻译识别（当 DstLanguage 不填或填空字符串时，则不进行翻译，计费项和语音全文识别一致）。</font>
     */
    public $AsrFullTextConfigure;

    /**
     * @var AsrWordsConfigureInfoForUpdate 语音关键词识别控制参数。
     */
    public $AsrWordsConfigure;

    /**
     * @var AsrTranslateConfigureInfoForUpdate 语音翻译识别控制参数。
     */
    public $AsrTranslateConfigure;

    /**
     * @var ObjectConfigureInfoForUpdate 物体识别控制参数。
     */
    public $ObjectConfigure;

    /**
     * @var float 截帧间隔，单位为秒，最小值为 0.5 秒。
     */
    public $ScreenshotInterval;

    /**
     * @param integer $Definition 音视频内容识别模板唯一标识。
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     * @param string $Name 音视频内容识别模板名称，长度限制：64 个字符。
     * @param string $Comment 音视频内容识别模板描述信息，长度限制：256 个字符。
     * @param HeadTailConfigureInfoForUpdate $HeadTailConfigure 视频片头片尾识别控制参数。
     * @param SegmentConfigureInfoForUpdate $SegmentConfigure 视频拆条识别控制参数。
     * @param FaceConfigureInfoForUpdate $FaceConfigure 人脸识别控制参数。
     * @param OcrFullTextConfigureInfoForUpdate $OcrFullTextConfigure 文本全文识别控制参数。
     * @param OcrWordsConfigureInfoForUpdate $OcrWordsConfigure 文本关键词识别控制参数。
     * @param AsrFullTextConfigureInfoForUpdate $AsrFullTextConfigure 语音全文识别控制参数。
<font color=red>注意：本参数已不再维护，推荐使用 AsrTranslateConfigure 参数发起语音翻译识别（当 DstLanguage 不填或填空字符串时，则不进行翻译，计费项和语音全文识别一致）。</font>
     * @param AsrWordsConfigureInfoForUpdate $AsrWordsConfigure 语音关键词识别控制参数。
     * @param AsrTranslateConfigureInfoForUpdate $AsrTranslateConfigure 语音翻译识别控制参数。
     * @param ObjectConfigureInfoForUpdate $ObjectConfigure 物体识别控制参数。
     * @param float $ScreenshotInterval 截帧间隔，单位为秒，最小值为 0.5 秒。
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
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
            $this->HeadTailConfigure = new HeadTailConfigureInfoForUpdate();
            $this->HeadTailConfigure->deserialize($param["HeadTailConfigure"]);
        }

        if (array_key_exists("SegmentConfigure",$param) and $param["SegmentConfigure"] !== null) {
            $this->SegmentConfigure = new SegmentConfigureInfoForUpdate();
            $this->SegmentConfigure->deserialize($param["SegmentConfigure"]);
        }

        if (array_key_exists("FaceConfigure",$param) and $param["FaceConfigure"] !== null) {
            $this->FaceConfigure = new FaceConfigureInfoForUpdate();
            $this->FaceConfigure->deserialize($param["FaceConfigure"]);
        }

        if (array_key_exists("OcrFullTextConfigure",$param) and $param["OcrFullTextConfigure"] !== null) {
            $this->OcrFullTextConfigure = new OcrFullTextConfigureInfoForUpdate();
            $this->OcrFullTextConfigure->deserialize($param["OcrFullTextConfigure"]);
        }

        if (array_key_exists("OcrWordsConfigure",$param) and $param["OcrWordsConfigure"] !== null) {
            $this->OcrWordsConfigure = new OcrWordsConfigureInfoForUpdate();
            $this->OcrWordsConfigure->deserialize($param["OcrWordsConfigure"]);
        }

        if (array_key_exists("AsrFullTextConfigure",$param) and $param["AsrFullTextConfigure"] !== null) {
            $this->AsrFullTextConfigure = new AsrFullTextConfigureInfoForUpdate();
            $this->AsrFullTextConfigure->deserialize($param["AsrFullTextConfigure"]);
        }

        if (array_key_exists("AsrWordsConfigure",$param) and $param["AsrWordsConfigure"] !== null) {
            $this->AsrWordsConfigure = new AsrWordsConfigureInfoForUpdate();
            $this->AsrWordsConfigure->deserialize($param["AsrWordsConfigure"]);
        }

        if (array_key_exists("AsrTranslateConfigure",$param) and $param["AsrTranslateConfigure"] !== null) {
            $this->AsrTranslateConfigure = new AsrTranslateConfigureInfoForUpdate();
            $this->AsrTranslateConfigure->deserialize($param["AsrTranslateConfigure"]);
        }

        if (array_key_exists("ObjectConfigure",$param) and $param["ObjectConfigure"] !== null) {
            $this->ObjectConfigure = new ObjectConfigureInfoForUpdate();
            $this->ObjectConfigure->deserialize($param["ObjectConfigure"]);
        }

        if (array_key_exists("ScreenshotInterval",$param) and $param["ScreenshotInterval"] !== null) {
            $this->ScreenshotInterval = $param["ScreenshotInterval"];
        }
    }
}
