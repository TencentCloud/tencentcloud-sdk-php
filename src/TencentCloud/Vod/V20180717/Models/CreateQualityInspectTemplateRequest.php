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
 * CreateQualityInspectTemplate请求参数结构体
 *
 * @method integer getSubAppId() 获取<b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
 * @method string getName() 获取音画质检测模板名称。
 * @method void setName(string $Name) 设置音画质检测模板名称。
 * @method string getComment() 获取音画质检测模板描述。
 * @method void setComment(string $Comment) 设置音画质检测模板描述。
 * @method float getScreenshotInterval() 获取截帧间隔，单位为秒，最小值为 1。当不填时，默认截帧间隔为 1 秒。
 * @method void setScreenshotInterval(float $ScreenshotInterval) 设置截帧间隔，单位为秒，最小值为 1。当不填时，默认截帧间隔为 1 秒。
 * @method JitterConfigureInfo getJitterConfigure() 获取视频画面抖动重影检测的控制参数。
 * @method void setJitterConfigure(JitterConfigureInfo $JitterConfigure) 设置视频画面抖动重影检测的控制参数。
 * @method BlurConfigureInfo getBlurConfigure() 获取视频画面模糊检测的控制参数。
 * @method void setBlurConfigure(BlurConfigureInfo $BlurConfigure) 设置视频画面模糊检测的控制参数。
 * @method AbnormalLightingConfigureInfo getAbnormalLightingConfigure() 获取视频画面低光、过曝检测的控制参数。
 * @method void setAbnormalLightingConfigure(AbnormalLightingConfigureInfo $AbnormalLightingConfigure) 设置视频画面低光、过曝检测的控制参数。
 * @method CrashScreenConfigureInfo getCrashScreenConfigure() 获取视频画面花屏检测的控制参数。
 * @method void setCrashScreenConfigure(CrashScreenConfigureInfo $CrashScreenConfigure) 设置视频画面花屏检测的控制参数。
 * @method BlackWhiteEdgeConfigureInfo getBlackWhiteEdgeConfigure() 获取视频画面黑边、白边、黑屏、白屏检测的控制参数。
 * @method void setBlackWhiteEdgeConfigure(BlackWhiteEdgeConfigureInfo $BlackWhiteEdgeConfigure) 设置视频画面黑边、白边、黑屏、白屏检测的控制参数。
 * @method NoiseConfigureInfo getNoiseConfigure() 获取视频画面噪点检测的控制参数。
 * @method void setNoiseConfigure(NoiseConfigureInfo $NoiseConfigure) 设置视频画面噪点检测的控制参数。
 * @method MosaicConfigureInfo getMosaicConfigure() 获取视频画面马赛克检测的控制参数。
 * @method void setMosaicConfigure(MosaicConfigureInfo $MosaicConfigure) 设置视频画面马赛克检测的控制参数。
 * @method QRCodeConfigureInfo getQRCodeConfigure() 获取视频画面二维码检测的控制参数。
 * @method void setQRCodeConfigure(QRCodeConfigureInfo $QRCodeConfigure) 设置视频画面二维码检测的控制参数。
 * @method VoiceConfigureInfo getVoiceConfigure() 获取音频（静音、低音、爆音）检测的控制参数。
 * @method void setVoiceConfigure(VoiceConfigureInfo $VoiceConfigure) 设置音频（静音、低音、爆音）检测的控制参数。
 * @method QualityEvaluationConfigureInfo getQualityEvaluationConfigure() 获取视频画面质量评价的控制参数。
 * @method void setQualityEvaluationConfigure(QualityEvaluationConfigureInfo $QualityEvaluationConfigure) 设置视频画面质量评价的控制参数。
 */
class CreateQualityInspectTemplateRequest extends AbstractModel
{
    /**
     * @var integer <b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
     */
    public $SubAppId;

    /**
     * @var string 音画质检测模板名称。
     */
    public $Name;

    /**
     * @var string 音画质检测模板描述。
     */
    public $Comment;

    /**
     * @var float 截帧间隔，单位为秒，最小值为 1。当不填时，默认截帧间隔为 1 秒。
     */
    public $ScreenshotInterval;

    /**
     * @var JitterConfigureInfo 视频画面抖动重影检测的控制参数。
     */
    public $JitterConfigure;

    /**
     * @var BlurConfigureInfo 视频画面模糊检测的控制参数。
     */
    public $BlurConfigure;

    /**
     * @var AbnormalLightingConfigureInfo 视频画面低光、过曝检测的控制参数。
     */
    public $AbnormalLightingConfigure;

    /**
     * @var CrashScreenConfigureInfo 视频画面花屏检测的控制参数。
     */
    public $CrashScreenConfigure;

    /**
     * @var BlackWhiteEdgeConfigureInfo 视频画面黑边、白边、黑屏、白屏检测的控制参数。
     */
    public $BlackWhiteEdgeConfigure;

    /**
     * @var NoiseConfigureInfo 视频画面噪点检测的控制参数。
     */
    public $NoiseConfigure;

    /**
     * @var MosaicConfigureInfo 视频画面马赛克检测的控制参数。
     */
    public $MosaicConfigure;

    /**
     * @var QRCodeConfigureInfo 视频画面二维码检测的控制参数。
     */
    public $QRCodeConfigure;

    /**
     * @var VoiceConfigureInfo 音频（静音、低音、爆音）检测的控制参数。
     */
    public $VoiceConfigure;

    /**
     * @var QualityEvaluationConfigureInfo 视频画面质量评价的控制参数。
     */
    public $QualityEvaluationConfigure;

    /**
     * @param integer $SubAppId <b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
     * @param string $Name 音画质检测模板名称。
     * @param string $Comment 音画质检测模板描述。
     * @param float $ScreenshotInterval 截帧间隔，单位为秒，最小值为 1。当不填时，默认截帧间隔为 1 秒。
     * @param JitterConfigureInfo $JitterConfigure 视频画面抖动重影检测的控制参数。
     * @param BlurConfigureInfo $BlurConfigure 视频画面模糊检测的控制参数。
     * @param AbnormalLightingConfigureInfo $AbnormalLightingConfigure 视频画面低光、过曝检测的控制参数。
     * @param CrashScreenConfigureInfo $CrashScreenConfigure 视频画面花屏检测的控制参数。
     * @param BlackWhiteEdgeConfigureInfo $BlackWhiteEdgeConfigure 视频画面黑边、白边、黑屏、白屏检测的控制参数。
     * @param NoiseConfigureInfo $NoiseConfigure 视频画面噪点检测的控制参数。
     * @param MosaicConfigureInfo $MosaicConfigure 视频画面马赛克检测的控制参数。
     * @param QRCodeConfigureInfo $QRCodeConfigure 视频画面二维码检测的控制参数。
     * @param VoiceConfigureInfo $VoiceConfigure 音频（静音、低音、爆音）检测的控制参数。
     * @param QualityEvaluationConfigureInfo $QualityEvaluationConfigure 视频画面质量评价的控制参数。
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

        if (array_key_exists("ScreenshotInterval",$param) and $param["ScreenshotInterval"] !== null) {
            $this->ScreenshotInterval = $param["ScreenshotInterval"];
        }

        if (array_key_exists("JitterConfigure",$param) and $param["JitterConfigure"] !== null) {
            $this->JitterConfigure = new JitterConfigureInfo();
            $this->JitterConfigure->deserialize($param["JitterConfigure"]);
        }

        if (array_key_exists("BlurConfigure",$param) and $param["BlurConfigure"] !== null) {
            $this->BlurConfigure = new BlurConfigureInfo();
            $this->BlurConfigure->deserialize($param["BlurConfigure"]);
        }

        if (array_key_exists("AbnormalLightingConfigure",$param) and $param["AbnormalLightingConfigure"] !== null) {
            $this->AbnormalLightingConfigure = new AbnormalLightingConfigureInfo();
            $this->AbnormalLightingConfigure->deserialize($param["AbnormalLightingConfigure"]);
        }

        if (array_key_exists("CrashScreenConfigure",$param) and $param["CrashScreenConfigure"] !== null) {
            $this->CrashScreenConfigure = new CrashScreenConfigureInfo();
            $this->CrashScreenConfigure->deserialize($param["CrashScreenConfigure"]);
        }

        if (array_key_exists("BlackWhiteEdgeConfigure",$param) and $param["BlackWhiteEdgeConfigure"] !== null) {
            $this->BlackWhiteEdgeConfigure = new BlackWhiteEdgeConfigureInfo();
            $this->BlackWhiteEdgeConfigure->deserialize($param["BlackWhiteEdgeConfigure"]);
        }

        if (array_key_exists("NoiseConfigure",$param) and $param["NoiseConfigure"] !== null) {
            $this->NoiseConfigure = new NoiseConfigureInfo();
            $this->NoiseConfigure->deserialize($param["NoiseConfigure"]);
        }

        if (array_key_exists("MosaicConfigure",$param) and $param["MosaicConfigure"] !== null) {
            $this->MosaicConfigure = new MosaicConfigureInfo();
            $this->MosaicConfigure->deserialize($param["MosaicConfigure"]);
        }

        if (array_key_exists("QRCodeConfigure",$param) and $param["QRCodeConfigure"] !== null) {
            $this->QRCodeConfigure = new QRCodeConfigureInfo();
            $this->QRCodeConfigure->deserialize($param["QRCodeConfigure"]);
        }

        if (array_key_exists("VoiceConfigure",$param) and $param["VoiceConfigure"] !== null) {
            $this->VoiceConfigure = new VoiceConfigureInfo();
            $this->VoiceConfigure->deserialize($param["VoiceConfigure"]);
        }

        if (array_key_exists("QualityEvaluationConfigure",$param) and $param["QualityEvaluationConfigure"] !== null) {
            $this->QualityEvaluationConfigure = new QualityEvaluationConfigureInfo();
            $this->QualityEvaluationConfigure->deserialize($param["QualityEvaluationConfigure"]);
        }
    }
}
