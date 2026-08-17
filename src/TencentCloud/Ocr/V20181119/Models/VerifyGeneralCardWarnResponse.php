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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VerifyGeneralCardWarn返回参数结构体
 *
 * @method GeneralCardWarnInfo getTamper() 获取<p>区域篡改提示</p>
 * @method void setTamper(GeneralCardWarnInfo $Tamper) 设置<p>区域篡改提示</p>
 * @method GeneralCardWarnInfo getSynthesis() 获取<p>AIGC合成提示</p>
 * @method void setSynthesis(GeneralCardWarnInfo $Synthesis) 设置<p>AIGC合成提示</p>
 * @method GeneralCardWarnInfo getTemplate() 获取<p>模板图片提示</p>
 * @method void setTemplate(GeneralCardWarnInfo $Template) 设置<p>模板图片提示</p>
 * @method GeneralCardWarnInfo getRemakeScreen() 获取<p>屏幕翻拍提示</p>
 * @method void setRemakeScreen(GeneralCardWarnInfo $RemakeScreen) 设置<p>屏幕翻拍提示</p>
 * @method GeneralCardWarnInfo getScreenshot() 获取<p>截图提示</p>
 * @method void setScreenshot(GeneralCardWarnInfo $Screenshot) 设置<p>截图提示</p>
 * @method GeneralCardWarnInfo getBlur() 获取<p>模糊提示</p>
 * @method void setBlur(GeneralCardWarnInfo $Blur) 设置<p>模糊提示</p>
 * @method GeneralCardWarnInfo getBorderIncomplete() 获取<p>边框不完整提示</p>
 * @method void setBorderIncomplete(GeneralCardWarnInfo $BorderIncomplete) 设置<p>边框不完整提示</p>
 * @method GeneralCardWarnInfo getCopy() 获取<p>复印件提示</p>
 * @method void setCopy(GeneralCardWarnInfo $Copy) 设置<p>复印件提示</p>
 * @method GeneralCardWarnInfo getReflection() 获取<p>反光提示</p>
 * @method void setReflection(GeneralCardWarnInfo $Reflection) 设置<p>反光提示</p>
 * @method GeneralCardWarnInfo getCover() 获取<p>遮挡提示</p>
 * @method void setCover(GeneralCardWarnInfo $Cover) 设置<p>遮挡提示</p>
 * @method GeneralCardWarnInfo getOverlap() 获取<p>重叠提示</p>
 * @method void setOverlap(GeneralCardWarnInfo $Overlap) 设置<p>重叠提示</p>
 * @method GeneralCardWarnInfo getElectron() 获取<p>电子证照提示（目前仅支持电子身份证、电子营业执照识别）</p>
 * @method void setElectron(GeneralCardWarnInfo $Electron) 设置<p>电子证照提示（目前仅支持电子身份证、电子营业执照识别）</p>
 * @method GeneralCardWarnInfo getTextWatermark() 获取<p>文字水印提示</p>
 * @method void setTextWatermark(GeneralCardWarnInfo $TextWatermark) 设置<p>文字水印提示</p>
 * @method string getWatermarkContent() 获取<p>水印内容，当未检测到文字水印时不返回，返回多组水印时以 | 分隔。</p>
 * @method void setWatermarkContent(string $WatermarkContent) 设置<p>水印内容，当未检测到文字水印时不返回，返回多组水印时以 | 分隔。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class VerifyGeneralCardWarnResponse extends AbstractModel
{
    /**
     * @var GeneralCardWarnInfo <p>区域篡改提示</p>
     */
    public $Tamper;

    /**
     * @var GeneralCardWarnInfo <p>AIGC合成提示</p>
     */
    public $Synthesis;

    /**
     * @var GeneralCardWarnInfo <p>模板图片提示</p>
     */
    public $Template;

    /**
     * @var GeneralCardWarnInfo <p>屏幕翻拍提示</p>
     */
    public $RemakeScreen;

    /**
     * @var GeneralCardWarnInfo <p>截图提示</p>
     */
    public $Screenshot;

    /**
     * @var GeneralCardWarnInfo <p>模糊提示</p>
     */
    public $Blur;

    /**
     * @var GeneralCardWarnInfo <p>边框不完整提示</p>
     */
    public $BorderIncomplete;

    /**
     * @var GeneralCardWarnInfo <p>复印件提示</p>
     */
    public $Copy;

    /**
     * @var GeneralCardWarnInfo <p>反光提示</p>
     */
    public $Reflection;

    /**
     * @var GeneralCardWarnInfo <p>遮挡提示</p>
     */
    public $Cover;

    /**
     * @var GeneralCardWarnInfo <p>重叠提示</p>
     */
    public $Overlap;

    /**
     * @var GeneralCardWarnInfo <p>电子证照提示（目前仅支持电子身份证、电子营业执照识别）</p>
     */
    public $Electron;

    /**
     * @var GeneralCardWarnInfo <p>文字水印提示</p>
     */
    public $TextWatermark;

    /**
     * @var string <p>水印内容，当未检测到文字水印时不返回，返回多组水印时以 | 分隔。</p>
     */
    public $WatermarkContent;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param GeneralCardWarnInfo $Tamper <p>区域篡改提示</p>
     * @param GeneralCardWarnInfo $Synthesis <p>AIGC合成提示</p>
     * @param GeneralCardWarnInfo $Template <p>模板图片提示</p>
     * @param GeneralCardWarnInfo $RemakeScreen <p>屏幕翻拍提示</p>
     * @param GeneralCardWarnInfo $Screenshot <p>截图提示</p>
     * @param GeneralCardWarnInfo $Blur <p>模糊提示</p>
     * @param GeneralCardWarnInfo $BorderIncomplete <p>边框不完整提示</p>
     * @param GeneralCardWarnInfo $Copy <p>复印件提示</p>
     * @param GeneralCardWarnInfo $Reflection <p>反光提示</p>
     * @param GeneralCardWarnInfo $Cover <p>遮挡提示</p>
     * @param GeneralCardWarnInfo $Overlap <p>重叠提示</p>
     * @param GeneralCardWarnInfo $Electron <p>电子证照提示（目前仅支持电子身份证、电子营业执照识别）</p>
     * @param GeneralCardWarnInfo $TextWatermark <p>文字水印提示</p>
     * @param string $WatermarkContent <p>水印内容，当未检测到文字水印时不返回，返回多组水印时以 | 分隔。</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Tamper",$param) and $param["Tamper"] !== null) {
            $this->Tamper = new GeneralCardWarnInfo();
            $this->Tamper->deserialize($param["Tamper"]);
        }

        if (array_key_exists("Synthesis",$param) and $param["Synthesis"] !== null) {
            $this->Synthesis = new GeneralCardWarnInfo();
            $this->Synthesis->deserialize($param["Synthesis"]);
        }

        if (array_key_exists("Template",$param) and $param["Template"] !== null) {
            $this->Template = new GeneralCardWarnInfo();
            $this->Template->deserialize($param["Template"]);
        }

        if (array_key_exists("RemakeScreen",$param) and $param["RemakeScreen"] !== null) {
            $this->RemakeScreen = new GeneralCardWarnInfo();
            $this->RemakeScreen->deserialize($param["RemakeScreen"]);
        }

        if (array_key_exists("Screenshot",$param) and $param["Screenshot"] !== null) {
            $this->Screenshot = new GeneralCardWarnInfo();
            $this->Screenshot->deserialize($param["Screenshot"]);
        }

        if (array_key_exists("Blur",$param) and $param["Blur"] !== null) {
            $this->Blur = new GeneralCardWarnInfo();
            $this->Blur->deserialize($param["Blur"]);
        }

        if (array_key_exists("BorderIncomplete",$param) and $param["BorderIncomplete"] !== null) {
            $this->BorderIncomplete = new GeneralCardWarnInfo();
            $this->BorderIncomplete->deserialize($param["BorderIncomplete"]);
        }

        if (array_key_exists("Copy",$param) and $param["Copy"] !== null) {
            $this->Copy = new GeneralCardWarnInfo();
            $this->Copy->deserialize($param["Copy"]);
        }

        if (array_key_exists("Reflection",$param) and $param["Reflection"] !== null) {
            $this->Reflection = new GeneralCardWarnInfo();
            $this->Reflection->deserialize($param["Reflection"]);
        }

        if (array_key_exists("Cover",$param) and $param["Cover"] !== null) {
            $this->Cover = new GeneralCardWarnInfo();
            $this->Cover->deserialize($param["Cover"]);
        }

        if (array_key_exists("Overlap",$param) and $param["Overlap"] !== null) {
            $this->Overlap = new GeneralCardWarnInfo();
            $this->Overlap->deserialize($param["Overlap"]);
        }

        if (array_key_exists("Electron",$param) and $param["Electron"] !== null) {
            $this->Electron = new GeneralCardWarnInfo();
            $this->Electron->deserialize($param["Electron"]);
        }

        if (array_key_exists("TextWatermark",$param) and $param["TextWatermark"] !== null) {
            $this->TextWatermark = new GeneralCardWarnInfo();
            $this->TextWatermark->deserialize($param["TextWatermark"]);
        }

        if (array_key_exists("WatermarkContent",$param) and $param["WatermarkContent"] !== null) {
            $this->WatermarkContent = $param["WatermarkContent"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
