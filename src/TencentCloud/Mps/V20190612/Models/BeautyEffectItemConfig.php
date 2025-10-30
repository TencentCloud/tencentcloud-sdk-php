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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 美颜效果配置项
 *
 * @method string getType() 获取类型名称。取值如下：
<li>Whiten：美白</li>
<li>BlackAlpha1：美黑</li>
<li>BlackAlpha2：较强美黑</li>
<li>FoundationAlpha2：美白-粉白</li>
<li>Clear：清晰度</li>
<li>Sharpen：锐化</li>
<li>Smooth：磨皮</li>
<li>BeautyThinFace：瘦脸</li>
<li>NatureFace：自然脸型</li>
<li>VFace：V脸</li>
<li>EnlargeEye：大眼</li>
<li>EyeLighten：亮眼</li>
<li>RemoveEyeBags：祛眼袋</li>
<li>ThinNose：瘦鼻</li>
<li>RemoveLawLine：祛法令纹</li>
<li>CheekboneThin：瘦颧骨</li>
<li>FaceFeatureLipsLut：口红</li>
<li>ToothWhiten：牙齿美白</li>
<li>FaceFeatureSoftlight：柔光</li>
<li>Makeup：美妆</li>
 * @method void setType(string $Type) 设置类型名称。取值如下：
<li>Whiten：美白</li>
<li>BlackAlpha1：美黑</li>
<li>BlackAlpha2：较强美黑</li>
<li>FoundationAlpha2：美白-粉白</li>
<li>Clear：清晰度</li>
<li>Sharpen：锐化</li>
<li>Smooth：磨皮</li>
<li>BeautyThinFace：瘦脸</li>
<li>NatureFace：自然脸型</li>
<li>VFace：V脸</li>
<li>EnlargeEye：大眼</li>
<li>EyeLighten：亮眼</li>
<li>RemoveEyeBags：祛眼袋</li>
<li>ThinNose：瘦鼻</li>
<li>RemoveLawLine：祛法令纹</li>
<li>CheekboneThin：瘦颧骨</li>
<li>FaceFeatureLipsLut：口红</li>
<li>ToothWhiten：牙齿美白</li>
<li>FaceFeatureSoftlight：柔光</li>
<li>Makeup：美妆</li>
 * @method string getSwitch() 获取能力配置开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li>
默认值：ON。
 * @method void setSwitch(string $Switch) 设置能力配置开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li>
默认值：ON。
 * @method integer getValue() 获取效果强度，值范围：[0, 100]。
 * @method void setValue(integer $Value) 设置效果强度，值范围：[0, 100]。
 * @method string getResourcePath() 获取附加资源路径。
 * @method void setResourcePath(string $ResourcePath) 设置附加资源路径。
 * @method string getExtInfo() 获取自定义参数。
 * @method void setExtInfo(string $ExtInfo) 设置自定义参数。
 */
class BeautyEffectItemConfig extends AbstractModel
{
    /**
     * @var string 类型名称。取值如下：
<li>Whiten：美白</li>
<li>BlackAlpha1：美黑</li>
<li>BlackAlpha2：较强美黑</li>
<li>FoundationAlpha2：美白-粉白</li>
<li>Clear：清晰度</li>
<li>Sharpen：锐化</li>
<li>Smooth：磨皮</li>
<li>BeautyThinFace：瘦脸</li>
<li>NatureFace：自然脸型</li>
<li>VFace：V脸</li>
<li>EnlargeEye：大眼</li>
<li>EyeLighten：亮眼</li>
<li>RemoveEyeBags：祛眼袋</li>
<li>ThinNose：瘦鼻</li>
<li>RemoveLawLine：祛法令纹</li>
<li>CheekboneThin：瘦颧骨</li>
<li>FaceFeatureLipsLut：口红</li>
<li>ToothWhiten：牙齿美白</li>
<li>FaceFeatureSoftlight：柔光</li>
<li>Makeup：美妆</li>
     */
    public $Type;

    /**
     * @var string 能力配置开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li>
默认值：ON。
     */
    public $Switch;

    /**
     * @var integer 效果强度，值范围：[0, 100]。
     */
    public $Value;

    /**
     * @var string 附加资源路径。
     */
    public $ResourcePath;

    /**
     * @var string 自定义参数。
     */
    public $ExtInfo;

    /**
     * @param string $Type 类型名称。取值如下：
<li>Whiten：美白</li>
<li>BlackAlpha1：美黑</li>
<li>BlackAlpha2：较强美黑</li>
<li>FoundationAlpha2：美白-粉白</li>
<li>Clear：清晰度</li>
<li>Sharpen：锐化</li>
<li>Smooth：磨皮</li>
<li>BeautyThinFace：瘦脸</li>
<li>NatureFace：自然脸型</li>
<li>VFace：V脸</li>
<li>EnlargeEye：大眼</li>
<li>EyeLighten：亮眼</li>
<li>RemoveEyeBags：祛眼袋</li>
<li>ThinNose：瘦鼻</li>
<li>RemoveLawLine：祛法令纹</li>
<li>CheekboneThin：瘦颧骨</li>
<li>FaceFeatureLipsLut：口红</li>
<li>ToothWhiten：牙齿美白</li>
<li>FaceFeatureSoftlight：柔光</li>
<li>Makeup：美妆</li>
     * @param string $Switch 能力配置开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li>
默认值：ON。
     * @param integer $Value 效果强度，值范围：[0, 100]。
     * @param string $ResourcePath 附加资源路径。
     * @param string $ExtInfo 自定义参数。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("ResourcePath",$param) and $param["ResourcePath"] !== null) {
            $this->ResourcePath = $param["ResourcePath"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
