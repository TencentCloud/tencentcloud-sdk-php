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
 * 自适应码流任务的输出结果。
 *
 * @method integer getDefinition() 获取自适应码流模板 ID。
 * @method void setDefinition(integer $Definition) 设置自适应码流模板 ID。
 * @method string getFormat() 获取自适应码流打包格式。可选值：
<li>HLS；</li>
<li>MPEG-DASH。</li>
 * @method void setFormat(string $Format) 设置自适应码流打包格式。可选值：
<li>HLS；</li>
<li>MPEG-DASH。</li>
 * @method string getDrmType() 获取DRM 方案类型。可选值：
<li>空字符串：无加密；</li>
<li>SimpleAES；</li>
<li>Widevine；</li>
<li>FairPlay。</li>
 * @method void setDrmType(string $DrmType) 设置DRM 方案类型。可选值：
<li>空字符串：无加密；</li>
<li>SimpleAES；</li>
<li>Widevine；</li>
<li>FairPlay。</li>
 * @method string getUrl() 获取自适应码流的播放地址。
 * @method void setUrl(string $Url) 设置自适应码流的播放地址。
 */
class ComplexAdaptiveDynamicStreamingTaskOutput extends AbstractModel
{
    /**
     * @var integer 自适应码流模板 ID。
     */
    public $Definition;

    /**
     * @var string 自适应码流打包格式。可选值：
<li>HLS；</li>
<li>MPEG-DASH。</li>
     */
    public $Format;

    /**
     * @var string DRM 方案类型。可选值：
<li>空字符串：无加密；</li>
<li>SimpleAES；</li>
<li>Widevine；</li>
<li>FairPlay。</li>
     */
    public $DrmType;

    /**
     * @var string 自适应码流的播放地址。
     */
    public $Url;

    /**
     * @param integer $Definition 自适应码流模板 ID。
     * @param string $Format 自适应码流打包格式。可选值：
<li>HLS；</li>
<li>MPEG-DASH。</li>
     * @param string $DrmType DRM 方案类型。可选值：
<li>空字符串：无加密；</li>
<li>SimpleAES；</li>
<li>Widevine；</li>
<li>FairPlay。</li>
     * @param string $Url 自适应码流的播放地址。
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("DrmType",$param) and $param["DrmType"] !== null) {
            $this->DrmType = $param["DrmType"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
