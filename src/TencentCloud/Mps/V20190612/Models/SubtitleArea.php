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
 * 自动探测硬字幕区域中，表示字幕区域坐标的数据结构。同时包含置信度。
 *
 * @method EraseArea getArea() 获取<p>检测到的字幕区域</p>
 * @method void setArea(EraseArea $Area) 设置<p>检测到的字幕区域</p>
 * @method float getConfidence() 获取<p>检测区域的置信度</p><p>取值范围：[0, 100]</p>
 * @method void setConfidence(float $Confidence) 设置<p>检测区域的置信度</p><p>取值范围：[0, 100]</p>
 */
class SubtitleArea extends AbstractModel
{
    /**
     * @var EraseArea <p>检测到的字幕区域</p>
     */
    public $Area;

    /**
     * @var float <p>检测区域的置信度</p><p>取值范围：[0, 100]</p>
     */
    public $Confidence;

    /**
     * @param EraseArea $Area <p>检测到的字幕区域</p>
     * @param float $Confidence <p>检测区域的置信度</p><p>取值范围：[0, 100]</p>
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
        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = new EraseArea();
            $this->Area->deserialize($param["Area"]);
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }
    }
}
