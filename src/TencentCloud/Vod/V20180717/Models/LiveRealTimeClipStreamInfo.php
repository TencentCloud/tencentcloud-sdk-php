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
 * 直播即时剪辑流信息
 *
 * @method string getType() 获取直播流类型，可选值：
<li>Original（原始流，<b>默认值</b>）。</li>
<li>Transcoding（转码流）。</li>
 * @method void setType(string $Type) 设置直播流类型，可选值：
<li>Original（原始流，<b>默认值</b>）。</li>
<li>Transcoding（转码流）。</li>
 * @method integer getTemplateId() 获取直播转码模板ID。
<b>当Type值为"Transcoding"时，必须填写。</b>
 * @method void setTemplateId(integer $TemplateId) 设置直播转码模板ID。
<b>当Type值为"Transcoding"时，必须填写。</b>
 */
class LiveRealTimeClipStreamInfo extends AbstractModel
{
    /**
     * @var string 直播流类型，可选值：
<li>Original（原始流，<b>默认值</b>）。</li>
<li>Transcoding（转码流）。</li>
     */
    public $Type;

    /**
     * @var integer 直播转码模板ID。
<b>当Type值为"Transcoding"时，必须填写。</b>
     */
    public $TemplateId;

    /**
     * @param string $Type 直播流类型，可选值：
<li>Original（原始流，<b>默认值</b>）。</li>
<li>Transcoding（转码流）。</li>
     * @param integer $TemplateId 直播转码模板ID。
<b>当Type值为"Transcoding"时，必须填写。</b>
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

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }
    }
}
