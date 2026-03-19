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
 * 字幕压制模块字幕排列配置
 *
 * @method integer getSubtitleLayoutConfigSwitch() 获取字幕排列配置开关，0关闭，1开启，默认0
 * @method void setSubtitleLayoutConfigSwitch(integer $SubtitleLayoutConfigSwitch) 设置字幕排列配置开关，0关闭，1开启，默认0
 * @method integer getLineSpacing() 获取行间距。正整数。
- 代表像素值时， [0, 1000]。
- 代表百分数时，[0, 100]。不填默认0。

 * @method void setLineSpacing(integer $LineSpacing) 设置行间距。正整数。
- 代表像素值时， [0, 1000]。
- 代表百分数时，[0, 100]。不填默认0。

 * @method integer getLineSpacingUnit() 获取LineSpacing单位，0 像素，1百分比，默认为0，像素

 * @method void setLineSpacingUnit(integer $LineSpacingUnit) 设置LineSpacing单位，0 像素，1百分比，默认为0，像素

 * @method string getAlignment() 获取对齐方式，取值：top: 顶部对齐，字幕顶部按位置固定，底部随行数变化。bottom: 底部对齐，字幕底部按位置固定，顶部随行数变化。不填默认底部对齐。

 * @method void setAlignment(string $Alignment) 设置对齐方式，取值：top: 顶部对齐，字幕顶部按位置固定，底部随行数变化。bottom: 底部对齐，字幕底部按位置固定，顶部随行数变化。不填默认底部对齐。
 */
class SubtitleLayoutConfig extends AbstractModel
{
    /**
     * @var integer 字幕排列配置开关，0关闭，1开启，默认0
     */
    public $SubtitleLayoutConfigSwitch;

    /**
     * @var integer 行间距。正整数。
- 代表像素值时， [0, 1000]。
- 代表百分数时，[0, 100]。不填默认0。

     */
    public $LineSpacing;

    /**
     * @var integer LineSpacing单位，0 像素，1百分比，默认为0，像素

     */
    public $LineSpacingUnit;

    /**
     * @var string 对齐方式，取值：top: 顶部对齐，字幕顶部按位置固定，底部随行数变化。bottom: 底部对齐，字幕底部按位置固定，顶部随行数变化。不填默认底部对齐。

     */
    public $Alignment;

    /**
     * @param integer $SubtitleLayoutConfigSwitch 字幕排列配置开关，0关闭，1开启，默认0
     * @param integer $LineSpacing 行间距。正整数。
- 代表像素值时， [0, 1000]。
- 代表百分数时，[0, 100]。不填默认0。

     * @param integer $LineSpacingUnit LineSpacing单位，0 像素，1百分比，默认为0，像素

     * @param string $Alignment 对齐方式，取值：top: 顶部对齐，字幕顶部按位置固定，底部随行数变化。bottom: 底部对齐，字幕底部按位置固定，顶部随行数变化。不填默认底部对齐。
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
        if (array_key_exists("SubtitleLayoutConfigSwitch",$param) and $param["SubtitleLayoutConfigSwitch"] !== null) {
            $this->SubtitleLayoutConfigSwitch = $param["SubtitleLayoutConfigSwitch"];
        }

        if (array_key_exists("LineSpacing",$param) and $param["LineSpacing"] !== null) {
            $this->LineSpacing = $param["LineSpacing"];
        }

        if (array_key_exists("LineSpacingUnit",$param) and $param["LineSpacingUnit"] !== null) {
            $this->LineSpacingUnit = $param["LineSpacingUnit"];
        }

        if (array_key_exists("Alignment",$param) and $param["Alignment"] !== null) {
            $this->Alignment = $param["Alignment"];
        }
    }
}
