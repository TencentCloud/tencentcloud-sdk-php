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
 * 图片质量评估任务。
 *
 * @method array getAttributes() 获取<p>图片质量评估维度</p><p>枚举值：</p><ul><li>Brightness： 亮度评估</li><li>Contrast： 对比度评估</li><li>Sharpness： 清晰度评估</li><li>IQA： 综合质量评估</li></ul>
 * @method void setAttributes(array $Attributes) 设置<p>图片质量评估维度</p><p>枚举值：</p><ul><li>Brightness： 亮度评估</li><li>Contrast： 对比度评估</li><li>Sharpness： 清晰度评估</li><li>IQA： 综合质量评估</li></ul>
 */
class ImageQualityConfig extends AbstractModel
{
    /**
     * @var array <p>图片质量评估维度</p><p>枚举值：</p><ul><li>Brightness： 亮度评估</li><li>Contrast： 对比度评估</li><li>Sharpness： 清晰度评估</li><li>IQA： 综合质量评估</li></ul>
     */
    public $Attributes;

    /**
     * @param array $Attributes <p>图片质量评估维度</p><p>枚举值：</p><ul><li>Brightness： 亮度评估</li><li>Contrast： 对比度评估</li><li>Sharpness： 清晰度评估</li><li>IQA： 综合质量评估</li></ul>
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
        if (array_key_exists("Attributes",$param) and $param["Attributes"] !== null) {
            $this->Attributes = $param["Attributes"];
        }
    }
}
