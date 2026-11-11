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
 * 爆款复刻 AIGC 生视频相关参数
 *
 * @method integer getDuration() 获取<p>视频时长</p><p>取值范围：[4, 30]</p><p>指定时取值范围随档位不同：flash 为 2-15, pro 为 4-30。</p>
 * @method void setDuration(integer $Duration) 设置<p>视频时长</p><p>取值范围：[4, 30]</p><p>指定时取值范围随档位不同：flash 为 2-15, pro 为 4-30。</p>
 * @method string getAspectRatio() 获取<p>宽高比。可选 9:16、16:9、3:4、4:3、1:1、21:9、adaptive（自适应参考视频，flash 档不支持）。</p>
 * @method void setAspectRatio(string $AspectRatio) 设置<p>宽高比。可选 9:16、16:9、3:4、4:3、1:1、21:9、adaptive（自适应参考视频，flash 档不支持）。</p>
 * @method string getResolution() 获取<p>分辨率。支持720p（默认）/1080p</p>
 * @method void setResolution(string $Resolution) 设置<p>分辨率。支持720p（默认）/1080p</p>
 * @method string getModelTier() 获取<p>模式。可选 pro（专业版）、 flash（高级版，默认）</p>
 * @method void setModelTier(string $ModelTier) 设置<p>模式。可选 pro（专业版）、 flash（高级版，默认）</p>
 * @method boolean getDepthWithAudio() 获取<p>深度估计结果是否含音频， 默认不含</p>
 * @method void setDepthWithAudio(boolean $DepthWithAudio) 设置<p>深度估计结果是否含音频， 默认不含</p>
 */
class CloneViralAIGC extends AbstractModel
{
    /**
     * @var integer <p>视频时长</p><p>取值范围：[4, 30]</p><p>指定时取值范围随档位不同：flash 为 2-15, pro 为 4-30。</p>
     */
    public $Duration;

    /**
     * @var string <p>宽高比。可选 9:16、16:9、3:4、4:3、1:1、21:9、adaptive（自适应参考视频，flash 档不支持）。</p>
     */
    public $AspectRatio;

    /**
     * @var string <p>分辨率。支持720p（默认）/1080p</p>
     */
    public $Resolution;

    /**
     * @var string <p>模式。可选 pro（专业版）、 flash（高级版，默认）</p>
     */
    public $ModelTier;

    /**
     * @var boolean <p>深度估计结果是否含音频， 默认不含</p>
     */
    public $DepthWithAudio;

    /**
     * @param integer $Duration <p>视频时长</p><p>取值范围：[4, 30]</p><p>指定时取值范围随档位不同：flash 为 2-15, pro 为 4-30。</p>
     * @param string $AspectRatio <p>宽高比。可选 9:16、16:9、3:4、4:3、1:1、21:9、adaptive（自适应参考视频，flash 档不支持）。</p>
     * @param string $Resolution <p>分辨率。支持720p（默认）/1080p</p>
     * @param string $ModelTier <p>模式。可选 pro（专业版）、 flash（高级版，默认）</p>
     * @param boolean $DepthWithAudio <p>深度估计结果是否含音频， 默认不含</p>
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
        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("AspectRatio",$param) and $param["AspectRatio"] !== null) {
            $this->AspectRatio = $param["AspectRatio"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("ModelTier",$param) and $param["ModelTier"] !== null) {
            $this->ModelTier = $param["ModelTier"];
        }

        if (array_key_exists("DepthWithAudio",$param) and $param["DepthWithAudio"] !== null) {
            $this->DepthWithAudio = $param["DepthWithAudio"];
        }
    }
}
