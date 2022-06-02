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
namespace TencentCloud\Tiia\V20190529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 整张图颜色信息。
 *
 * @method string getColor() 获取RGB颜色值（16进制），例如：291A18。
 * @method void setColor(string $Color) 设置RGB颜色值（16进制），例如：291A18。
 * @method float getPercentage() 获取当前颜色标签所占比例。
 * @method void setPercentage(float $Percentage) 设置当前颜色标签所占比例。
 * @method string getLabel() 获取颜色标签。蜜柚色，米驼色等。
 * @method void setLabel(string $Label) 设置颜色标签。蜜柚色，米驼色等。
 */
class ColorInfo extends AbstractModel
{
    /**
     * @var string RGB颜色值（16进制），例如：291A18。
     */
    public $Color;

    /**
     * @var float 当前颜色标签所占比例。
     */
    public $Percentage;

    /**
     * @var string 颜色标签。蜜柚色，米驼色等。
     */
    public $Label;

    /**
     * @param string $Color RGB颜色值（16进制），例如：291A18。
     * @param float $Percentage 当前颜色标签所占比例。
     * @param string $Label 颜色标签。蜜柚色，米驼色等。
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
        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }

        if (array_key_exists("Percentage",$param) and $param["Percentage"] !== null) {
            $this->Percentage = $param["Percentage"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }
    }
}
