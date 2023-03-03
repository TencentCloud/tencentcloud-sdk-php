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
 * 转自适应码流子流信息。
 *
 * @method string getType() 获取子流类型，取值范围：
<li>audio：纯音频；</li>
<li>video：视频（可能包含音频流）。</li>
 * @method void setType(string $Type) 设置子流类型，取值范围：
<li>audio：纯音频；</li>
<li>video：视频（可能包含音频流）。</li>
 * @method integer getWidth() 获取当子流为视频流时，视频画面宽度，单位：px。
 * @method void setWidth(integer $Width) 设置当子流为视频流时，视频画面宽度，单位：px。
 * @method integer getHeight() 获取当子流为视频流时，视频画面高度，单位：px。
 * @method void setHeight(integer $Height) 设置当子流为视频流时，视频画面高度，单位：px。
 * @method integer getSize() 获取子流媒体文件大小，单位：Byte。
<font color=red>注意：</font>在 2023-02-09T16:00:00Z 前处理生成的自适应码流文件此字段为0。
 * @method void setSize(integer $Size) 设置子流媒体文件大小，单位：Byte。
<font color=red>注意：</font>在 2023-02-09T16:00:00Z 前处理生成的自适应码流文件此字段为0。
 */
class MediaSubStreamInfoItem extends AbstractModel
{
    /**
     * @var string 子流类型，取值范围：
<li>audio：纯音频；</li>
<li>video：视频（可能包含音频流）。</li>
     */
    public $Type;

    /**
     * @var integer 当子流为视频流时，视频画面宽度，单位：px。
     */
    public $Width;

    /**
     * @var integer 当子流为视频流时，视频画面高度，单位：px。
     */
    public $Height;

    /**
     * @var integer 子流媒体文件大小，单位：Byte。
<font color=red>注意：</font>在 2023-02-09T16:00:00Z 前处理生成的自适应码流文件此字段为0。
     */
    public $Size;

    /**
     * @param string $Type 子流类型，取值范围：
<li>audio：纯音频；</li>
<li>video：视频（可能包含音频流）。</li>
     * @param integer $Width 当子流为视频流时，视频画面宽度，单位：px。
     * @param integer $Height 当子流为视频流时，视频画面高度，单位：px。
     * @param integer $Size 子流媒体文件大小，单位：Byte。
<font color=red>注意：</font>在 2023-02-09T16:00:00Z 前处理生成的自适应码流文件此字段为0。
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

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }
    }
}
