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
 * 音画质检测模板详情。
 *
 * @method integer getDefinition() 获取模板 ID。
 * @method void setDefinition(integer $Definition) 设置模板 ID。
 * @method string getType() 获取模板类型，可选值：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
 * @method void setType(string $Type) 设置模板类型，可选值：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
 * @method string getName() 获取模板名称。
 * @method void setName(string $Name) 设置模板名称。
 * @method string getComment() 获取模板描述。
 * @method void setComment(string $Comment) 设置模板描述。
 * @method float getScreenshotInterval() 获取截帧间隔，单位为秒。
 * @method void setScreenshotInterval(float $ScreenshotInterval) 设置截帧间隔，单位为秒。
 * @method JitterConfigureInfo getJitterConfigure() 获取视频画面抖动重影检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJitterConfigure(JitterConfigureInfo $JitterConfigure) 设置视频画面抖动重影检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlurConfigureInfo getBlurConfigure() 获取视频画面模糊检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlurConfigure(BlurConfigureInfo $BlurConfigure) 设置视频画面模糊检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AbnormalLightingConfigureInfo getAbnormalLightingConfigure() 获取视频画面低光、过曝检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAbnormalLightingConfigure(AbnormalLightingConfigureInfo $AbnormalLightingConfigure) 设置视频画面低光、过曝检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method CrashScreenConfigureInfo getCrashScreenConfigure() 获取视频画面花屏检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrashScreenConfigure(CrashScreenConfigureInfo $CrashScreenConfigure) 设置视频画面花屏检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlackWhiteEdgeConfigureInfo getBlackWhiteEdgeConfigure() 获取视频画面黑边、白边、黑屏、白屏检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlackWhiteEdgeConfigure(BlackWhiteEdgeConfigureInfo $BlackWhiteEdgeConfigure) 设置视频画面黑边、白边、黑屏、白屏检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method NoiseConfigureInfo getNoiseConfigure() 获取视频画面噪点检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNoiseConfigure(NoiseConfigureInfo $NoiseConfigure) 设置视频画面噪点检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method MosaicConfigureInfo getMosaicConfigure() 获取视频画面马赛克检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMosaicConfigure(MosaicConfigureInfo $MosaicConfigure) 设置视频画面马赛克检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method QRCodeConfigureInfo getQRCodeConfigure() 获取视频画面二维码检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQRCodeConfigure(QRCodeConfigureInfo $QRCodeConfigure) 设置视频画面二维码检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method QualityEvaluationConfigureInfo getQualityEvaluationConfigure() 获取视频画面质量评价的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQualityEvaluationConfigure(QualityEvaluationConfigureInfo $QualityEvaluationConfigure) 设置视频画面质量评价的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method VoiceConfigureInfo getVoiceConfigure() 获取音频（静音、低音、爆音）检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVoiceConfigure(VoiceConfigureInfo $VoiceConfigure) 设置音频（静音、低音、爆音）检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setCreateTime(string $CreateTime) 设置模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method string getUpdateTime() 获取模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setUpdateTime(string $UpdateTime) 设置模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 */
class QualityInspectTemplateItem extends AbstractModel
{
    /**
     * @var integer 模板 ID。
     */
    public $Definition;

    /**
     * @var string 模板类型，可选值：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
     */
    public $Type;

    /**
     * @var string 模板名称。
     */
    public $Name;

    /**
     * @var string 模板描述。
     */
    public $Comment;

    /**
     * @var float 截帧间隔，单位为秒。
     */
    public $ScreenshotInterval;

    /**
     * @var JitterConfigureInfo 视频画面抖动重影检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JitterConfigure;

    /**
     * @var BlurConfigureInfo 视频画面模糊检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlurConfigure;

    /**
     * @var AbnormalLightingConfigureInfo 视频画面低光、过曝检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AbnormalLightingConfigure;

    /**
     * @var CrashScreenConfigureInfo 视频画面花屏检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CrashScreenConfigure;

    /**
     * @var BlackWhiteEdgeConfigureInfo 视频画面黑边、白边、黑屏、白屏检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlackWhiteEdgeConfigure;

    /**
     * @var NoiseConfigureInfo 视频画面噪点检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NoiseConfigure;

    /**
     * @var MosaicConfigureInfo 视频画面马赛克检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MosaicConfigure;

    /**
     * @var QRCodeConfigureInfo 视频画面二维码检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QRCodeConfigure;

    /**
     * @var QualityEvaluationConfigureInfo 视频画面质量评价的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QualityEvaluationConfigure;

    /**
     * @var VoiceConfigureInfo 音频（静音、低音、爆音）检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VoiceConfigure;

    /**
     * @var string 模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $CreateTime;

    /**
     * @var string 模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $UpdateTime;

    /**
     * @param integer $Definition 模板 ID。
     * @param string $Type 模板类型，可选值：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
     * @param string $Name 模板名称。
     * @param string $Comment 模板描述。
     * @param float $ScreenshotInterval 截帧间隔，单位为秒。
     * @param JitterConfigureInfo $JitterConfigure 视频画面抖动重影检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlurConfigureInfo $BlurConfigure 视频画面模糊检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AbnormalLightingConfigureInfo $AbnormalLightingConfigure 视频画面低光、过曝检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param CrashScreenConfigureInfo $CrashScreenConfigure 视频画面花屏检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlackWhiteEdgeConfigureInfo $BlackWhiteEdgeConfigure 视频画面黑边、白边、黑屏、白屏检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param NoiseConfigureInfo $NoiseConfigure 视频画面噪点检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param MosaicConfigureInfo $MosaicConfigure 视频画面马赛克检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param QRCodeConfigureInfo $QRCodeConfigure 视频画面二维码检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param QualityEvaluationConfigureInfo $QualityEvaluationConfigure 视频画面质量评价的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param VoiceConfigureInfo $VoiceConfigure 音频（静音、低音、爆音）检测的控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param string $UpdateTime 模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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

        if (array_key_exists("QualityEvaluationConfigure",$param) and $param["QualityEvaluationConfigure"] !== null) {
            $this->QualityEvaluationConfigure = new QualityEvaluationConfigureInfo();
            $this->QualityEvaluationConfigure->deserialize($param["QualityEvaluationConfigure"]);
        }

        if (array_key_exists("VoiceConfigure",$param) and $param["VoiceConfigure"] !== null) {
            $this->VoiceConfigure = new VoiceConfigureInfo();
            $this->VoiceConfigure->deserialize($param["VoiceConfigure"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
