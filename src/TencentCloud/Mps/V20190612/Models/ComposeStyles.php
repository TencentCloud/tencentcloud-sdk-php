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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频编辑/合成任务 样式信息。
 *
 * @method string getId() 获取样式 Id，用于和轨道元素中的样式关联。
注意：允许字母、数字、-、_ 组合，最长 32 字符。
 * @method void setId(string $Id) 设置样式 Id，用于和轨道元素中的样式关联。
注意：允许字母、数字、-、_ 组合，最长 32 字符。
 * @method string getType() 获取样式类型，取值有：
<li>Subtitle：字幕样式。</li>
 * @method void setType(string $Type) 设置样式类型，取值有：
<li>Subtitle：字幕样式。</li>
 * @method ComposeSubtitleStyle getSubtitle() 获取字幕样式信息，当 Type = Subtitle 时有效。
 * @method void setSubtitle(ComposeSubtitleStyle $Subtitle) 设置字幕样式信息，当 Type = Subtitle 时有效。
 */
class ComposeStyles extends AbstractModel
{
    /**
     * @var string 样式 Id，用于和轨道元素中的样式关联。
注意：允许字母、数字、-、_ 组合，最长 32 字符。
     */
    public $Id;

    /**
     * @var string 样式类型，取值有：
<li>Subtitle：字幕样式。</li>
     */
    public $Type;

    /**
     * @var ComposeSubtitleStyle 字幕样式信息，当 Type = Subtitle 时有效。
     */
    public $Subtitle;

    /**
     * @param string $Id 样式 Id，用于和轨道元素中的样式关联。
注意：允许字母、数字、-、_ 组合，最长 32 字符。
     * @param string $Type 样式类型，取值有：
<li>Subtitle：字幕样式。</li>
     * @param ComposeSubtitleStyle $Subtitle 字幕样式信息，当 Type = Subtitle 时有效。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Subtitle",$param) and $param["Subtitle"] !== null) {
            $this->Subtitle = new ComposeSubtitleStyle();
            $this->Subtitle->deserialize($param["Subtitle"]);
        }
    }
}
