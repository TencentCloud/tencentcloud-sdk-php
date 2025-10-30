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
 * 智能标签结果信息
 *
 * @method string getTag() 获取标签名称。
 * @method void setTag(string $Tag) 设置标签名称。
 * @method float getConfidence() 获取标签的可信度，取值范围是 0 到 100。
 * @method void setConfidence(float $Confidence) 设置标签的可信度，取值范围是 0 到 100。
 * @method string getSpecialInfo() 获取根据不同类型决定
 * @method void setSpecialInfo(string $SpecialInfo) 设置根据不同类型决定
 */
class MediaAiAnalysisTagItem extends AbstractModel
{
    /**
     * @var string 标签名称。
     */
    public $Tag;

    /**
     * @var float 标签的可信度，取值范围是 0 到 100。
     */
    public $Confidence;

    /**
     * @var string 根据不同类型决定
     */
    public $SpecialInfo;

    /**
     * @param string $Tag 标签名称。
     * @param float $Confidence 标签的可信度，取值范围是 0 到 100。
     * @param string $SpecialInfo 根据不同类型决定
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
        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("SpecialInfo",$param) and $param["SpecialInfo"] !== null) {
            $this->SpecialInfo = $param["SpecialInfo"];
        }
    }
}
