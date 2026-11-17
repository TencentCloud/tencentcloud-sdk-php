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
 * AuditMaterialAgent返回参数结构体
 *
 * @method array getStoreLabel() 获取<p>商户照片类型  支持该出参的资料审核Agent类型：StorePicAudit</p>
 * @method void setStoreLabel(array $StoreLabel) 设置<p>商户照片类型  支持该出参的资料审核Agent类型：StorePicAudit</p>
 * @method string getSceneType() 获取<p>商户照片分类具体场景标签，输出3个最匹配的场景， 注：仅SceneType配置为true时支持。  支持该出参的资料审核Agent类型：StorePicAudit</p>
 * @method void setSceneType(string $SceneType) 设置<p>商户照片分类具体场景标签，输出3个最匹配的场景， 注：仅SceneType配置为true时支持。  支持该出参的资料审核Agent类型：StorePicAudit</p>
 * @method array getStoreInfo() 获取<p>商户门头名称  支持该出参的资料审核Agent类型：StorePicAudit</p>
 * @method void setStoreInfo(array $StoreInfo) 设置<p>商户门头名称  支持该出参的资料审核Agent类型：StorePicAudit</p>
 * @method float getAngle() 获取<p>图片旋转角度（角度制），文本的水平方向为0°，顺时针为正，逆时针为负  支持该出参的资料审核Agent类型：StorePicAudit</p>
 * @method void setAngle(float $Angle) 设置<p>图片旋转角度（角度制），文本的水平方向为0°，顺时针为正，逆时针为负  支持该出参的资料审核Agent类型：StorePicAudit</p>
 * @method SceneWarnInfo getTamper() 获取<p>区域篡改提示</p>
 * @method void setTamper(SceneWarnInfo $Tamper) 设置<p>区域篡改提示</p>
 * @method SceneWarnInfo getSynthesis() 获取<p>AIGC合成提示</p>
 * @method void setSynthesis(SceneWarnInfo $Synthesis) 设置<p>AIGC合成提示</p>
 * @method SceneWarnInfo getRemakeScreen() 获取<p>屏幕翻拍提示</p>
 * @method void setRemakeScreen(SceneWarnInfo $RemakeScreen) 设置<p>屏幕翻拍提示</p>
 * @method SceneWarnInfo getScreenshot() 获取<p>截图提示</p>
 * @method void setScreenshot(SceneWarnInfo $Screenshot) 设置<p>截图提示</p>
 * @method SceneWarnInfo getTextWatermark() 获取<p>文字水印提示</p>
 * @method void setTextWatermark(SceneWarnInfo $TextWatermark) 设置<p>文字水印提示</p>
 * @method string getWatermarkContent() 获取<p>水印内容，当未检测到文字水印时不返回，返回多组水印时以 | 分隔。</p>
 * @method void setWatermarkContent(string $WatermarkContent) 设置<p>水印内容，当未检测到文字水印时不返回，返回多组水印时以 | 分隔。</p>
 * @method SceneWarnInfo getTemplate() 获取<p>模板图片提示</p>
 * @method void setTemplate(SceneWarnInfo $Template) 设置<p>模板图片提示</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class AuditMaterialAgentResponse extends AbstractModel
{
    /**
     * @var array <p>商户照片类型  支持该出参的资料审核Agent类型：StorePicAudit</p>
     */
    public $StoreLabel;

    /**
     * @var string <p>商户照片分类具体场景标签，输出3个最匹配的场景， 注：仅SceneType配置为true时支持。  支持该出参的资料审核Agent类型：StorePicAudit</p>
     */
    public $SceneType;

    /**
     * @var array <p>商户门头名称  支持该出参的资料审核Agent类型：StorePicAudit</p>
     */
    public $StoreInfo;

    /**
     * @var float <p>图片旋转角度（角度制），文本的水平方向为0°，顺时针为正，逆时针为负  支持该出参的资料审核Agent类型：StorePicAudit</p>
     */
    public $Angle;

    /**
     * @var SceneWarnInfo <p>区域篡改提示</p>
     */
    public $Tamper;

    /**
     * @var SceneWarnInfo <p>AIGC合成提示</p>
     */
    public $Synthesis;

    /**
     * @var SceneWarnInfo <p>屏幕翻拍提示</p>
     */
    public $RemakeScreen;

    /**
     * @var SceneWarnInfo <p>截图提示</p>
     */
    public $Screenshot;

    /**
     * @var SceneWarnInfo <p>文字水印提示</p>
     */
    public $TextWatermark;

    /**
     * @var string <p>水印内容，当未检测到文字水印时不返回，返回多组水印时以 | 分隔。</p>
     */
    public $WatermarkContent;

    /**
     * @var SceneWarnInfo <p>模板图片提示</p>
     */
    public $Template;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $StoreLabel <p>商户照片类型  支持该出参的资料审核Agent类型：StorePicAudit</p>
     * @param string $SceneType <p>商户照片分类具体场景标签，输出3个最匹配的场景， 注：仅SceneType配置为true时支持。  支持该出参的资料审核Agent类型：StorePicAudit</p>
     * @param array $StoreInfo <p>商户门头名称  支持该出参的资料审核Agent类型：StorePicAudit</p>
     * @param float $Angle <p>图片旋转角度（角度制），文本的水平方向为0°，顺时针为正，逆时针为负  支持该出参的资料审核Agent类型：StorePicAudit</p>
     * @param SceneWarnInfo $Tamper <p>区域篡改提示</p>
     * @param SceneWarnInfo $Synthesis <p>AIGC合成提示</p>
     * @param SceneWarnInfo $RemakeScreen <p>屏幕翻拍提示</p>
     * @param SceneWarnInfo $Screenshot <p>截图提示</p>
     * @param SceneWarnInfo $TextWatermark <p>文字水印提示</p>
     * @param string $WatermarkContent <p>水印内容，当未检测到文字水印时不返回，返回多组水印时以 | 分隔。</p>
     * @param SceneWarnInfo $Template <p>模板图片提示</p>
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
        if (array_key_exists("StoreLabel",$param) and $param["StoreLabel"] !== null) {
            $this->StoreLabel = $param["StoreLabel"];
        }

        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
        }

        if (array_key_exists("StoreInfo",$param) and $param["StoreInfo"] !== null) {
            $this->StoreInfo = [];
            foreach ($param["StoreInfo"] as $key => $value){
                $obj = new StoreInfo();
                $obj->deserialize($value);
                array_push($this->StoreInfo, $obj);
            }
        }

        if (array_key_exists("Angle",$param) and $param["Angle"] !== null) {
            $this->Angle = $param["Angle"];
        }

        if (array_key_exists("Tamper",$param) and $param["Tamper"] !== null) {
            $this->Tamper = new SceneWarnInfo();
            $this->Tamper->deserialize($param["Tamper"]);
        }

        if (array_key_exists("Synthesis",$param) and $param["Synthesis"] !== null) {
            $this->Synthesis = new SceneWarnInfo();
            $this->Synthesis->deserialize($param["Synthesis"]);
        }

        if (array_key_exists("RemakeScreen",$param) and $param["RemakeScreen"] !== null) {
            $this->RemakeScreen = new SceneWarnInfo();
            $this->RemakeScreen->deserialize($param["RemakeScreen"]);
        }

        if (array_key_exists("Screenshot",$param) and $param["Screenshot"] !== null) {
            $this->Screenshot = new SceneWarnInfo();
            $this->Screenshot->deserialize($param["Screenshot"]);
        }

        if (array_key_exists("TextWatermark",$param) and $param["TextWatermark"] !== null) {
            $this->TextWatermark = new SceneWarnInfo();
            $this->TextWatermark->deserialize($param["TextWatermark"]);
        }

        if (array_key_exists("WatermarkContent",$param) and $param["WatermarkContent"] !== null) {
            $this->WatermarkContent = $param["WatermarkContent"];
        }

        if (array_key_exists("Template",$param) and $param["Template"] !== null) {
            $this->Template = new SceneWarnInfo();
            $this->Template->deserialize($param["Template"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
