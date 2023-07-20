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
 * ModifyQualityInspectTemplate请求参数结构体
 *
 * @method integer getDefinition() 获取模板 ID。
 * @method void setDefinition(integer $Definition) 设置模板 ID。
 * @method integer getSubAppId() 获取<b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
 * @method string getName() 获取模板名称，长度限制：64 个字符。
 * @method void setName(string $Name) 设置模板名称，长度限制：64 个字符。
 * @method string getComment() 获取模板描述信息，长度限制：256 个字符。
 * @method void setComment(string $Comment) 设置模板描述信息，长度限制：256 个字符。
 * @method float getScreenshotInterval() 获取截帧间隔，单位为秒，最小值为 1。
 * @method void setScreenshotInterval(float $ScreenshotInterval) 设置截帧间隔，单位为秒，最小值为 1。
 * @method JitterConfigureInfoForUpdate getJitterConfigure() 获取视频画面抖动重影检测的控制参数。
 * @method void setJitterConfigure(JitterConfigureInfoForUpdate $JitterConfigure) 设置视频画面抖动重影检测的控制参数。
 * @method BlurConfigureInfoForUpdate getBlurConfigure() 获取视频画面模糊检测的控制参数。
 * @method void setBlurConfigure(BlurConfigureInfoForUpdate $BlurConfigure) 设置视频画面模糊检测的控制参数。
 * @method AbnormalLightingConfigureInfoForUpdate getAbnormalLightingConfigure() 获取视频画面低光、过曝检测的控制参数。
 * @method void setAbnormalLightingConfigure(AbnormalLightingConfigureInfoForUpdate $AbnormalLightingConfigure) 设置视频画面低光、过曝检测的控制参数。
 * @method CrashScreenConfigureInfoForUpdate getCrashScreenConfigure() 获取视频画面花屏检测的控制参数。
 * @method void setCrashScreenConfigure(CrashScreenConfigureInfoForUpdate $CrashScreenConfigure) 设置视频画面花屏检测的控制参数。
 * @method BlackWhiteEdgeConfigureInfoForUpdate getBlackWhiteEdgeConfigure() 获取视频画面黑边、白边、黑屏、白屏检测的控制参数。
 * @method void setBlackWhiteEdgeConfigure(BlackWhiteEdgeConfigureInfoForUpdate $BlackWhiteEdgeConfigure) 设置视频画面黑边、白边、黑屏、白屏检测的控制参数。
 * @method NoiseConfigureInfoForUpdate getNoiseConfigure() 获取视频画面噪点检测的控制参数。
 * @method void setNoiseConfigure(NoiseConfigureInfoForUpdate $NoiseConfigure) 设置视频画面噪点检测的控制参数。
 * @method MosaicConfigureInfoForUpdate getMosaicConfigure() 获取视频画面马赛克检测的控制参数。
 * @method void setMosaicConfigure(MosaicConfigureInfoForUpdate $MosaicConfigure) 设置视频画面马赛克检测的控制参数。
 * @method QRCodeConfigureInfoForUpdate getQRCodeConfigure() 获取视频画面二维码检测的控制参数。
 * @method void setQRCodeConfigure(QRCodeConfigureInfoForUpdate $QRCodeConfigure) 设置视频画面二维码检测的控制参数。
 * @method VoiceConfigureInfoForUpdate getVoiceConfigure() 获取音频（静音、低音、爆音）检测的控制参数。
 * @method void setVoiceConfigure(VoiceConfigureInfoForUpdate $VoiceConfigure) 设置音频（静音、低音、爆音）检测的控制参数。
 * @method QualityEvaluationConfigureInfoForUpdate getQualityEvaluationConfigure() 获取视频画面质量评价的控制参数。
 * @method void setQualityEvaluationConfigure(QualityEvaluationConfigureInfoForUpdate $QualityEvaluationConfigure) 设置视频画面质量评价的控制参数。
 */
class ModifyQualityInspectTemplateRequest extends AbstractModel
{
    /**
     * @var integer 模板 ID。
     */
    public $Definition;

    /**
     * @var integer <b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
     */
    public $SubAppId;

    /**
     * @var string 模板名称，长度限制：64 个字符。
     */
    public $Name;

    /**
     * @var string 模板描述信息，长度限制：256 个字符。
     */
    public $Comment;

    /**
     * @var float 截帧间隔，单位为秒，最小值为 1。
     */
    public $ScreenshotInterval;

    /**
     * @var JitterConfigureInfoForUpdate 视频画面抖动重影检测的控制参数。
     */
    public $JitterConfigure;

    /**
     * @var BlurConfigureInfoForUpdate 视频画面模糊检测的控制参数。
     */
    public $BlurConfigure;

    /**
     * @var AbnormalLightingConfigureInfoForUpdate 视频画面低光、过曝检测的控制参数。
     */
    public $AbnormalLightingConfigure;

    /**
     * @var CrashScreenConfigureInfoForUpdate 视频画面花屏检测的控制参数。
     */
    public $CrashScreenConfigure;

    /**
     * @var BlackWhiteEdgeConfigureInfoForUpdate 视频画面黑边、白边、黑屏、白屏检测的控制参数。
     */
    public $BlackWhiteEdgeConfigure;

    /**
     * @var NoiseConfigureInfoForUpdate 视频画面噪点检测的控制参数。
     */
    public $NoiseConfigure;

    /**
     * @var MosaicConfigureInfoForUpdate 视频画面马赛克检测的控制参数。
     */
    public $MosaicConfigure;

    /**
     * @var QRCodeConfigureInfoForUpdate 视频画面二维码检测的控制参数。
     */
    public $QRCodeConfigure;

    /**
     * @var VoiceConfigureInfoForUpdate 音频（静音、低音、爆音）检测的控制参数。
     */
    public $VoiceConfigure;

    /**
     * @var QualityEvaluationConfigureInfoForUpdate 视频画面质量评价的控制参数。
     */
    public $QualityEvaluationConfigure;

    /**
     * @param integer $Definition 模板 ID。
     * @param integer $SubAppId <b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
     * @param string $Name 模板名称，长度限制：64 个字符。
     * @param string $Comment 模板描述信息，长度限制：256 个字符。
     * @param float $ScreenshotInterval 截帧间隔，单位为秒，最小值为 1。
     * @param JitterConfigureInfoForUpdate $JitterConfigure 视频画面抖动重影检测的控制参数。
     * @param BlurConfigureInfoForUpdate $BlurConfigure 视频画面模糊检测的控制参数。
     * @param AbnormalLightingConfigureInfoForUpdate $AbnormalLightingConfigure 视频画面低光、过曝检测的控制参数。
     * @param CrashScreenConfigureInfoForUpdate $CrashScreenConfigure 视频画面花屏检测的控制参数。
     * @param BlackWhiteEdgeConfigureInfoForUpdate $BlackWhiteEdgeConfigure 视频画面黑边、白边、黑屏、白屏检测的控制参数。
     * @param NoiseConfigureInfoForUpdate $NoiseConfigure 视频画面噪点检测的控制参数。
     * @param MosaicConfigureInfoForUpdate $MosaicConfigure 视频画面马赛克检测的控制参数。
     * @param QRCodeConfigureInfoForUpdate $QRCodeConfigure 视频画面二维码检测的控制参数。
     * @param VoiceConfigureInfoForUpdate $VoiceConfigure 音频（静音、低音、爆音）检测的控制参数。
     * @param QualityEvaluationConfigureInfoForUpdate $QualityEvaluationConfigure 视频画面质量评价的控制参数。
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

        if (array_key_exists("ScreenshotInterval",$param) and $param["ScreenshotInterval"] !== null) {
            $this->ScreenshotInterval = $param["ScreenshotInterval"];
        }

        if (array_key_exists("JitterConfigure",$param) and $param["JitterConfigure"] !== null) {
            $this->JitterConfigure = new JitterConfigureInfoForUpdate();
            $this->JitterConfigure->deserialize($param["JitterConfigure"]);
        }

        if (array_key_exists("BlurConfigure",$param) and $param["BlurConfigure"] !== null) {
            $this->BlurConfigure = new BlurConfigureInfoForUpdate();
            $this->BlurConfigure->deserialize($param["BlurConfigure"]);
        }

        if (array_key_exists("AbnormalLightingConfigure",$param) and $param["AbnormalLightingConfigure"] !== null) {
            $this->AbnormalLightingConfigure = new AbnormalLightingConfigureInfoForUpdate();
            $this->AbnormalLightingConfigure->deserialize($param["AbnormalLightingConfigure"]);
        }

        if (array_key_exists("CrashScreenConfigure",$param) and $param["CrashScreenConfigure"] !== null) {
            $this->CrashScreenConfigure = new CrashScreenConfigureInfoForUpdate();
            $this->CrashScreenConfigure->deserialize($param["CrashScreenConfigure"]);
        }

        if (array_key_exists("BlackWhiteEdgeConfigure",$param) and $param["BlackWhiteEdgeConfigure"] !== null) {
            $this->BlackWhiteEdgeConfigure = new BlackWhiteEdgeConfigureInfoForUpdate();
            $this->BlackWhiteEdgeConfigure->deserialize($param["BlackWhiteEdgeConfigure"]);
        }

        if (array_key_exists("NoiseConfigure",$param) and $param["NoiseConfigure"] !== null) {
            $this->NoiseConfigure = new NoiseConfigureInfoForUpdate();
            $this->NoiseConfigure->deserialize($param["NoiseConfigure"]);
        }

        if (array_key_exists("MosaicConfigure",$param) and $param["MosaicConfigure"] !== null) {
            $this->MosaicConfigure = new MosaicConfigureInfoForUpdate();
            $this->MosaicConfigure->deserialize($param["MosaicConfigure"]);
        }

        if (array_key_exists("QRCodeConfigure",$param) and $param["QRCodeConfigure"] !== null) {
            $this->QRCodeConfigure = new QRCodeConfigureInfoForUpdate();
            $this->QRCodeConfigure->deserialize($param["QRCodeConfigure"]);
        }

        if (array_key_exists("VoiceConfigure",$param) and $param["VoiceConfigure"] !== null) {
            $this->VoiceConfigure = new VoiceConfigureInfoForUpdate();
            $this->VoiceConfigure->deserialize($param["VoiceConfigure"]);
        }

        if (array_key_exists("QualityEvaluationConfigure",$param) and $param["QualityEvaluationConfigure"] !== null) {
            $this->QualityEvaluationConfigure = new QualityEvaluationConfigureInfoForUpdate();
            $this->QualityEvaluationConfigure->deserialize($param["QualityEvaluationConfigure"]);
        }
    }
}
