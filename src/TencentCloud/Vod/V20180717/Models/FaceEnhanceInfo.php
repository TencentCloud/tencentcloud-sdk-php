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
 * 人脸增强控制
 *
 * @method string getSwitch() 获取人脸增强控制开关，可选值：
<li>ON：开启人脸增强；</li>
<li>OFF：关闭人脸增强。</li>
 * @method void setSwitch(string $Switch) 设置人脸增强控制开关，可选值：
<li>ON：开启人脸增强；</li>
<li>OFF：关闭人脸增强。</li>
 * @method float getIntensity() 获取人脸增强强度，仅当人脸增强控制开关为 ON 时有效，取值范围：0.0~1.0。
默认：0.0。
 * @method void setIntensity(float $Intensity) 设置人脸增强强度，仅当人脸增强控制开关为 ON 时有效，取值范围：0.0~1.0。
默认：0.0。
 */
class FaceEnhanceInfo extends AbstractModel
{
    /**
     * @var string 人脸增强控制开关，可选值：
<li>ON：开启人脸增强；</li>
<li>OFF：关闭人脸增强。</li>
     */
    public $Switch;

    /**
     * @var float 人脸增强强度，仅当人脸增强控制开关为 ON 时有效，取值范围：0.0~1.0。
默认：0.0。
     */
    public $Intensity;

    /**
     * @param string $Switch 人脸增强控制开关，可选值：
<li>ON：开启人脸增强；</li>
<li>OFF：关闭人脸增强。</li>
     * @param float $Intensity 人脸增强强度，仅当人脸增强控制开关为 ON 时有效，取值范围：0.0~1.0。
默认：0.0。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Intensity",$param) and $param["Intensity"] !== null) {
            $this->Intensity = $param["Intensity"];
        }
    }
}
