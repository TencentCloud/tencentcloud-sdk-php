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
 * VerifyScenePhoto返回参数结构体
 *
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
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class VerifyScenePhotoResponse extends AbstractModel
{
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
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param SceneWarnInfo $Tamper <p>区域篡改提示</p>
     * @param SceneWarnInfo $Synthesis <p>AIGC合成提示</p>
     * @param SceneWarnInfo $RemakeScreen <p>屏幕翻拍提示</p>
     * @param SceneWarnInfo $Screenshot <p>截图提示</p>
     * @param SceneWarnInfo $TextWatermark <p>文字水印提示</p>
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
