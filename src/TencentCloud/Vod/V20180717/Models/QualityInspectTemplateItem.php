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
 * 音画质检测模板详情。
 *
 * @method integer getDefinition() 获取<p>模板 ID。</p>
 * @method void setDefinition(integer $Definition) 设置<p>模板 ID。</p>
 * @method string getType() 获取<p>模板类型，可选值：</p><li>Preset：系统预置模板；</li><li>Custom：用户自定义模板。</li>
 * @method void setType(string $Type) 设置<p>模板类型，可选值：</p><li>Preset：系统预置模板；</li><li>Custom：用户自定义模板。</li>
 * @method string getName() 获取<p>模板名称。</p>
 * @method void setName(string $Name) 设置<p>模板名称。</p>
 * @method string getComment() 获取<p>模板描述。</p>
 * @method void setComment(string $Comment) 设置<p>模板描述。</p>
 * @method array getConfigs() 获取<p>音画质检测的配置参数。</p>
 * @method void setConfigs(array $Configs) 设置<p>音画质检测的配置参数。</p>
 * @method QualityInspectStrategy getStrategy() 获取<p>音画质检测的抽检策略。</p>
 * @method void setStrategy(QualityInspectStrategy $Strategy) 设置<p>音画质检测的抽检策略。</p>
 * @method string getCreateTime() 获取<p>模板创建时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>模板创建时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method string getUpdateTime() 获取<p>模板最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>模板最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method float getScreenshotInterval() 获取<p>（不推荐，使用 Configs 替代）截帧间隔，单位为秒。</p>
 * @method void setScreenshotInterval(float $ScreenshotInterval) 设置<p>（不推荐，使用 Configs 替代）截帧间隔，单位为秒。</p>
 * @method JitterConfigureInfo getJitterConfigure() 获取<p>（不推荐，使用 Configs 替代）视频画面抖动重影检测的控制参数。</p>
 * @method void setJitterConfigure(JitterConfigureInfo $JitterConfigure) 设置<p>（不推荐，使用 Configs 替代）视频画面抖动重影检测的控制参数。</p>
 * @method BlurConfigureInfo getBlurConfigure() 获取<p>（不推荐，使用 Configs 替代）视频画面模糊检测的控制参数。</p>
 * @method void setBlurConfigure(BlurConfigureInfo $BlurConfigure) 设置<p>（不推荐，使用 Configs 替代）视频画面模糊检测的控制参数。</p>
 * @method AbnormalLightingConfigureInfo getAbnormalLightingConfigure() 获取<p>（不推荐，使用 Configs 替代）视频画面低光、过曝检测的控制参数。</p>
 * @method void setAbnormalLightingConfigure(AbnormalLightingConfigureInfo $AbnormalLightingConfigure) 设置<p>（不推荐，使用 Configs 替代）视频画面低光、过曝检测的控制参数。</p>
 * @method CrashScreenConfigureInfo getCrashScreenConfigure() 获取<p>（不推荐，使用 Configs 替代）视频画面花屏检测的控制参数。</p>
 * @method void setCrashScreenConfigure(CrashScreenConfigureInfo $CrashScreenConfigure) 设置<p>（不推荐，使用 Configs 替代）视频画面花屏检测的控制参数。</p>
 * @method BlackWhiteEdgeConfigureInfo getBlackWhiteEdgeConfigure() 获取<p>视频画面黑边、白边、黑屏、白屏检测的控制参数。</p>
 * @method void setBlackWhiteEdgeConfigure(BlackWhiteEdgeConfigureInfo $BlackWhiteEdgeConfigure) 设置<p>视频画面黑边、白边、黑屏、白屏检测的控制参数。</p>
 * @method NoiseConfigureInfo getNoiseConfigure() 获取<p>（不推荐，使用 Configs 替代）视频画面噪点检测的控制参数。</p>
 * @method void setNoiseConfigure(NoiseConfigureInfo $NoiseConfigure) 设置<p>（不推荐，使用 Configs 替代）视频画面噪点检测的控制参数。</p>
 * @method MosaicConfigureInfo getMosaicConfigure() 获取<p>（不推荐，使用 Configs 替代）视频画面马赛克检测的控制参数。</p>
 * @method void setMosaicConfigure(MosaicConfigureInfo $MosaicConfigure) 设置<p>（不推荐，使用 Configs 替代）视频画面马赛克检测的控制参数。</p>
 * @method QRCodeConfigureInfo getQRCodeConfigure() 获取<p>（不推荐，使用 Configs 替代）视频画面二维码检测的控制参数。</p>
 * @method void setQRCodeConfigure(QRCodeConfigureInfo $QRCodeConfigure) 设置<p>（不推荐，使用 Configs 替代）视频画面二维码检测的控制参数。</p>
 * @method QualityEvaluationConfigureInfo getQualityEvaluationConfigure() 获取<p>（不推荐，使用 Configs 替代）视频画面质量评价的控制参数。</p>
 * @method void setQualityEvaluationConfigure(QualityEvaluationConfigureInfo $QualityEvaluationConfigure) 设置<p>（不推荐，使用 Configs 替代）视频画面质量评价的控制参数。</p>
 * @method VoiceConfigureInfo getVoiceConfigure() 获取<p>（不推荐，使用 Configs 替代）音频（静音、低音、爆音）检测的控制参数。</p>
 * @method void setVoiceConfigure(VoiceConfigureInfo $VoiceConfigure) 设置<p>（不推荐，使用 Configs 替代）音频（静音、低音、爆音）检测的控制参数。</p>
 */
class QualityInspectTemplateItem extends AbstractModel
{
    /**
     * @var integer <p>模板 ID。</p>
     */
    public $Definition;

    /**
     * @var string <p>模板类型，可选值：</p><li>Preset：系统预置模板；</li><li>Custom：用户自定义模板。</li>
     */
    public $Type;

    /**
     * @var string <p>模板名称。</p>
     */
    public $Name;

    /**
     * @var string <p>模板描述。</p>
     */
    public $Comment;

    /**
     * @var array <p>音画质检测的配置参数。</p>
     */
    public $Configs;

    /**
     * @var QualityInspectStrategy <p>音画质检测的抽检策略。</p>
     */
    public $Strategy;

    /**
     * @var string <p>模板创建时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>模板最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     */
    public $UpdateTime;

    /**
     * @var float <p>（不推荐，使用 Configs 替代）截帧间隔，单位为秒。</p>
     */
    public $ScreenshotInterval;

    /**
     * @var JitterConfigureInfo <p>（不推荐，使用 Configs 替代）视频画面抖动重影检测的控制参数。</p>
     */
    public $JitterConfigure;

    /**
     * @var BlurConfigureInfo <p>（不推荐，使用 Configs 替代）视频画面模糊检测的控制参数。</p>
     */
    public $BlurConfigure;

    /**
     * @var AbnormalLightingConfigureInfo <p>（不推荐，使用 Configs 替代）视频画面低光、过曝检测的控制参数。</p>
     */
    public $AbnormalLightingConfigure;

    /**
     * @var CrashScreenConfigureInfo <p>（不推荐，使用 Configs 替代）视频画面花屏检测的控制参数。</p>
     */
    public $CrashScreenConfigure;

    /**
     * @var BlackWhiteEdgeConfigureInfo <p>视频画面黑边、白边、黑屏、白屏检测的控制参数。</p>
     */
    public $BlackWhiteEdgeConfigure;

    /**
     * @var NoiseConfigureInfo <p>（不推荐，使用 Configs 替代）视频画面噪点检测的控制参数。</p>
     */
    public $NoiseConfigure;

    /**
     * @var MosaicConfigureInfo <p>（不推荐，使用 Configs 替代）视频画面马赛克检测的控制参数。</p>
     */
    public $MosaicConfigure;

    /**
     * @var QRCodeConfigureInfo <p>（不推荐，使用 Configs 替代）视频画面二维码检测的控制参数。</p>
     */
    public $QRCodeConfigure;

    /**
     * @var QualityEvaluationConfigureInfo <p>（不推荐，使用 Configs 替代）视频画面质量评价的控制参数。</p>
     */
    public $QualityEvaluationConfigure;

    /**
     * @var VoiceConfigureInfo <p>（不推荐，使用 Configs 替代）音频（静音、低音、爆音）检测的控制参数。</p>
     */
    public $VoiceConfigure;

    /**
     * @param integer $Definition <p>模板 ID。</p>
     * @param string $Type <p>模板类型，可选值：</p><li>Preset：系统预置模板；</li><li>Custom：用户自定义模板。</li>
     * @param string $Name <p>模板名称。</p>
     * @param string $Comment <p>模板描述。</p>
     * @param array $Configs <p>音画质检测的配置参数。</p>
     * @param QualityInspectStrategy $Strategy <p>音画质检测的抽检策略。</p>
     * @param string $CreateTime <p>模板创建时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     * @param string $UpdateTime <p>模板最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     * @param float $ScreenshotInterval <p>（不推荐，使用 Configs 替代）截帧间隔，单位为秒。</p>
     * @param JitterConfigureInfo $JitterConfigure <p>（不推荐，使用 Configs 替代）视频画面抖动重影检测的控制参数。</p>
     * @param BlurConfigureInfo $BlurConfigure <p>（不推荐，使用 Configs 替代）视频画面模糊检测的控制参数。</p>
     * @param AbnormalLightingConfigureInfo $AbnormalLightingConfigure <p>（不推荐，使用 Configs 替代）视频画面低光、过曝检测的控制参数。</p>
     * @param CrashScreenConfigureInfo $CrashScreenConfigure <p>（不推荐，使用 Configs 替代）视频画面花屏检测的控制参数。</p>
     * @param BlackWhiteEdgeConfigureInfo $BlackWhiteEdgeConfigure <p>视频画面黑边、白边、黑屏、白屏检测的控制参数。</p>
     * @param NoiseConfigureInfo $NoiseConfigure <p>（不推荐，使用 Configs 替代）视频画面噪点检测的控制参数。</p>
     * @param MosaicConfigureInfo $MosaicConfigure <p>（不推荐，使用 Configs 替代）视频画面马赛克检测的控制参数。</p>
     * @param QRCodeConfigureInfo $QRCodeConfigure <p>（不推荐，使用 Configs 替代）视频画面二维码检测的控制参数。</p>
     * @param QualityEvaluationConfigureInfo $QualityEvaluationConfigure <p>（不推荐，使用 Configs 替代）视频画面质量评价的控制参数。</p>
     * @param VoiceConfigureInfo $VoiceConfigure <p>（不推荐，使用 Configs 替代）音频（静音、低音、爆音）检测的控制参数。</p>
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

        if (array_key_exists("Configs",$param) and $param["Configs"] !== null) {
            $this->Configs = [];
            foreach ($param["Configs"] as $key => $value){
                $obj = new QualityInspectConfig();
                $obj->deserialize($value);
                array_push($this->Configs, $obj);
            }
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = new QualityInspectStrategy();
            $this->Strategy->deserialize($param["Strategy"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
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
    }
}
