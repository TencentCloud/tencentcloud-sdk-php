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
 * 自适应码流任务多语言字幕的输入参数。
 *
 * @method string getId() 获取字幕 ID。该字幕必须归属于自适应码流任务的输入主媒体。
 * @method void setId(string $Id) 设置字幕 ID。该字幕必须归属于自适应码流任务的输入主媒体。
 * @method string getDefault() 获取是否设置为自适应码流的默认字幕。取值：
<li>YES：设置为默认字幕；</li>
<li>NO：不设置为默认字幕（默认值）。</li>
 * @method void setDefault(string $Default) 设置是否设置为自适应码流的默认字幕。取值：
<li>YES：设置为默认字幕；</li>
<li>NO：不设置为默认字幕（默认值）。</li>
 */
class ComplexAdaptiveDynamicStreamingTaskSubtitleInput extends AbstractModel
{
    /**
     * @var string 字幕 ID。该字幕必须归属于自适应码流任务的输入主媒体。
     */
    public $Id;

    /**
     * @var string 是否设置为自适应码流的默认字幕。取值：
<li>YES：设置为默认字幕；</li>
<li>NO：不设置为默认字幕（默认值）。</li>
     */
    public $Default;

    /**
     * @param string $Id 字幕 ID。该字幕必须归属于自适应码流任务的输入主媒体。
     * @param string $Default 是否设置为自适应码流的默认字幕。取值：
<li>YES：设置为默认字幕；</li>
<li>NO：不设置为默认字幕（默认值）。</li>
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

        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }
    }
}
