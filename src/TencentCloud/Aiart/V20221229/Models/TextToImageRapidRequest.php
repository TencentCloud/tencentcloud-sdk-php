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
namespace TencentCloud\Aiart\V20221229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TextToImageRapid请求参数结构体
 *
 * @method string getPrompt() 获取<p>文本描述。<br>算法将根据输入的文本智能生成与之相关的图像。建议详细描述画面主体、细节、场景等，文本描述越丰富，生成效果越精美。<br>不能为空，推荐使用中文。最多可传256个 utf-8 字符。</p>
 * @method void setPrompt(string $Prompt) 设置<p>文本描述。<br>算法将根据输入的文本智能生成与之相关的图像。建议详细描述画面主体、细节、场景等，文本描述越丰富，生成效果越精美。<br>不能为空，推荐使用中文。最多可传256个 utf-8 字符。</p>
 * @method string getResolution() 获取<p>生成图分辨率，默认1024:1024。<br>支持的图像宽高比例: 1:1，3:4，4:3，9:16，16:9。<br>支持的长边分辨率: 160，200，225，258，512，520，608，768，1024，1080，1280，1600，1620，1920，2048，2400，2560，2592，3440，3840，4096。<br>单位为 px。</p>
 * @method void setResolution(string $Resolution) 设置<p>生成图分辨率，默认1024:1024。<br>支持的图像宽高比例: 1:1，3:4，4:3，9:16，16:9。<br>支持的长边分辨率: 160，200，225，258，512，520，608，768，1024，1080，1280，1600，1620，1920，2048，2400，2560，2592，3440，3840，4096。<br>单位为 px。</p>
 * @method integer getSeed() 获取<p>随机种子，默认随机。<br>0：随机种子生成。<br>不传：随机种子生成。<br>正数：固定种子生成。</p>
 * @method void setSeed(integer $Seed) 设置<p>随机种子，默认随机。<br>0：随机种子生成。<br>不传：随机种子生成。<br>正数：固定种子生成。</p>
 * @method Image getImage() 获取<p>参考图。</p><ul><li>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。</li><li>当传入Image参数时，Style和Resolution参数不生效，输出图分辨率将保持Image传入图分辨率。</li><li>图片限制：单边分辨率大于128px且小于2048px；图片小于6M；格式支持 jpg、jpeg、png、bmp、tiff、webp。</li></ul>
 * @method void setImage(Image $Image) 设置<p>参考图。</p><ul><li>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。</li><li>当传入Image参数时，Style和Resolution参数不生效，输出图分辨率将保持Image传入图分辨率。</li><li>图片限制：单边分辨率大于128px且小于2048px；图片小于6M；格式支持 jpg、jpeg、png、bmp、tiff、webp。</li></ul>
 * @method string getStyle() 获取<p>生成的图片风格，参考值：</p><p>1：宫崎骏风格；<br>2：新海诚风格；<br>3：去旅行风格；<br>4：水彩风格；<br>5：像素风格；<br>6：童话世界风格；<br>7：奇趣卡通风格；<br>8：赛博朋克风格；<br>9：极简风格；<br>10：复古风格；<br>11：暗黑系风格；<br>12：波普风风格；<br>13：糖果色风格；<br>14：胶片电影风格；<br>15：素描风格；<br>16：水墨画风格；<br>17：油画风格；<br>18：粉笔风格；<br>19：粘土风格；<br>20：毛毡风格；<br>21：刺绣风格；<br>22：彩铅风格；<br>23：莫奈风格；<br>24：毕加索风格；<br>25：穆夏风格；<br>26：古风二次元风格；<br>27：都市二次元风格；<br>28：悬疑风格；<br>29：校园风格；<br>30：都市异能风格。</p>
 * @method void setStyle(string $Style) 设置<p>生成的图片风格，参考值：</p><p>1：宫崎骏风格；<br>2：新海诚风格；<br>3：去旅行风格；<br>4：水彩风格；<br>5：像素风格；<br>6：童话世界风格；<br>7：奇趣卡通风格；<br>8：赛博朋克风格；<br>9：极简风格；<br>10：复古风格；<br>11：暗黑系风格；<br>12：波普风风格；<br>13：糖果色风格；<br>14：胶片电影风格；<br>15：素描风格；<br>16：水墨画风格；<br>17：油画风格；<br>18：粉笔风格；<br>19：粘土风格；<br>20：毛毡风格；<br>21：刺绣风格；<br>22：彩铅风格；<br>23：莫奈风格；<br>24：毕加索风格；<br>25：穆夏风格；<br>26：古风二次元风格；<br>27：都市二次元风格；<br>28：悬疑风格；<br>29：校园风格；<br>30：都市异能风格。</p>
 * @method integer getLogoAdd() 获取<p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。</p>
 * @method void setLogoAdd(integer $LogoAdd) 设置<p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。</p>
 * @method LogoParam getLogoParam() 获取<p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
 * @method void setLogoParam(LogoParam $LogoParam) 设置<p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
 * @method string getRspImgType() 获取<p>返回图像方式（base64 或 url），二选一，默认为 base64。url 有效期为1小时。</p>
 * @method void setRspImgType(string $RspImgType) 设置<p>返回图像方式（base64 或 url），二选一，默认为 base64。url 有效期为1小时。</p>
 */
class TextToImageRapidRequest extends AbstractModel
{
    /**
     * @var string <p>文本描述。<br>算法将根据输入的文本智能生成与之相关的图像。建议详细描述画面主体、细节、场景等，文本描述越丰富，生成效果越精美。<br>不能为空，推荐使用中文。最多可传256个 utf-8 字符。</p>
     */
    public $Prompt;

    /**
     * @var string <p>生成图分辨率，默认1024:1024。<br>支持的图像宽高比例: 1:1，3:4，4:3，9:16，16:9。<br>支持的长边分辨率: 160，200，225，258，512，520，608，768，1024，1080，1280，1600，1620，1920，2048，2400，2560，2592，3440，3840，4096。<br>单位为 px。</p>
     */
    public $Resolution;

    /**
     * @var integer <p>随机种子，默认随机。<br>0：随机种子生成。<br>不传：随机种子生成。<br>正数：固定种子生成。</p>
     */
    public $Seed;

    /**
     * @var Image <p>参考图。</p><ul><li>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。</li><li>当传入Image参数时，Style和Resolution参数不生效，输出图分辨率将保持Image传入图分辨率。</li><li>图片限制：单边分辨率大于128px且小于2048px；图片小于6M；格式支持 jpg、jpeg、png、bmp、tiff、webp。</li></ul>
     */
    public $Image;

    /**
     * @var string <p>生成的图片风格，参考值：</p><p>1：宫崎骏风格；<br>2：新海诚风格；<br>3：去旅行风格；<br>4：水彩风格；<br>5：像素风格；<br>6：童话世界风格；<br>7：奇趣卡通风格；<br>8：赛博朋克风格；<br>9：极简风格；<br>10：复古风格；<br>11：暗黑系风格；<br>12：波普风风格；<br>13：糖果色风格；<br>14：胶片电影风格；<br>15：素描风格；<br>16：水墨画风格；<br>17：油画风格；<br>18：粉笔风格；<br>19：粘土风格；<br>20：毛毡风格；<br>21：刺绣风格；<br>22：彩铅风格；<br>23：莫奈风格；<br>24：毕加索风格；<br>25：穆夏风格；<br>26：古风二次元风格；<br>27：都市二次元风格；<br>28：悬疑风格；<br>29：校园风格；<br>30：都市异能风格。</p>
     */
    public $Style;

    /**
     * @var integer <p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。</p>
     */
    public $LogoAdd;

    /**
     * @var LogoParam <p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
     */
    public $LogoParam;

    /**
     * @var string <p>返回图像方式（base64 或 url），二选一，默认为 base64。url 有效期为1小时。</p>
     */
    public $RspImgType;

    /**
     * @param string $Prompt <p>文本描述。<br>算法将根据输入的文本智能生成与之相关的图像。建议详细描述画面主体、细节、场景等，文本描述越丰富，生成效果越精美。<br>不能为空，推荐使用中文。最多可传256个 utf-8 字符。</p>
     * @param string $Resolution <p>生成图分辨率，默认1024:1024。<br>支持的图像宽高比例: 1:1，3:4，4:3，9:16，16:9。<br>支持的长边分辨率: 160，200，225，258，512，520，608，768，1024，1080，1280，1600，1620，1920，2048，2400，2560，2592，3440，3840，4096。<br>单位为 px。</p>
     * @param integer $Seed <p>随机种子，默认随机。<br>0：随机种子生成。<br>不传：随机种子生成。<br>正数：固定种子生成。</p>
     * @param Image $Image <p>参考图。</p><ul><li>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。</li><li>当传入Image参数时，Style和Resolution参数不生效，输出图分辨率将保持Image传入图分辨率。</li><li>图片限制：单边分辨率大于128px且小于2048px；图片小于6M；格式支持 jpg、jpeg、png、bmp、tiff、webp。</li></ul>
     * @param string $Style <p>生成的图片风格，参考值：</p><p>1：宫崎骏风格；<br>2：新海诚风格；<br>3：去旅行风格；<br>4：水彩风格；<br>5：像素风格；<br>6：童话世界风格；<br>7：奇趣卡通风格；<br>8：赛博朋克风格；<br>9：极简风格；<br>10：复古风格；<br>11：暗黑系风格；<br>12：波普风风格；<br>13：糖果色风格；<br>14：胶片电影风格；<br>15：素描风格；<br>16：水墨画风格；<br>17：油画风格；<br>18：粉笔风格；<br>19：粘土风格；<br>20：毛毡风格；<br>21：刺绣风格；<br>22：彩铅风格；<br>23：莫奈风格；<br>24：毕加索风格；<br>25：穆夏风格；<br>26：古风二次元风格；<br>27：都市二次元风格；<br>28：悬疑风格；<br>29：校园风格；<br>30：都市异能风格。</p>
     * @param integer $LogoAdd <p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。</p>
     * @param LogoParam $LogoParam <p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
     * @param string $RspImgType <p>返回图像方式（base64 或 url），二选一，默认为 base64。url 有效期为1小时。</p>
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
        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("Seed",$param) and $param["Seed"] !== null) {
            $this->Seed = $param["Seed"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = new Image();
            $this->Image->deserialize($param["Image"]);
        }

        if (array_key_exists("Style",$param) and $param["Style"] !== null) {
            $this->Style = $param["Style"];
        }

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }

        if (array_key_exists("LogoParam",$param) and $param["LogoParam"] !== null) {
            $this->LogoParam = new LogoParam();
            $this->LogoParam->deserialize($param["LogoParam"]);
        }

        if (array_key_exists("RspImgType",$param) and $param["RspImgType"] !== null) {
            $this->RspImgType = $param["RspImgType"];
        }
    }
}
