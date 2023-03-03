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
 * 转自适应码流信息
 *
 * @method integer getDefinition() 获取转自适应码流规格。
 * @method void setDefinition(integer $Definition) 设置转自适应码流规格。
 * @method string getPackage() 获取打包格式，取值范围：
<li>HLS；</li>
<li>DASH。</li>
 * @method void setPackage(string $Package) 设置打包格式，取值范围：
<li>HLS；</li>
<li>DASH。</li>
 * @method string getDrmType() 获取加密类型。
 * @method void setDrmType(string $DrmType) 设置加密类型。
 * @method string getUrl() 获取播放地址。
 * @method void setUrl(string $Url) 设置播放地址。
 * @method integer getSize() 获取媒体文件大小，单位：字节。
<li>当媒体文件为 HLS 时，大小是 m3u8 和 ts 文件大小的总和；</li>
<li>当媒体文件为 DASH 时，大小是 mpd 和分片文件大小的总和；</li>
<li><font color=red>注意</font>：在 2022-01-10T16:00:00Z 前处理生成的自适应码流文件此字段为0。</li>
 * @method void setSize(integer $Size) 设置媒体文件大小，单位：字节。
<li>当媒体文件为 HLS 时，大小是 m3u8 和 ts 文件大小的总和；</li>
<li>当媒体文件为 DASH 时，大小是 mpd 和分片文件大小的总和；</li>
<li><font color=red>注意</font>：在 2022-01-10T16:00:00Z 前处理生成的自适应码流文件此字段为0。</li>
 * @method string getDigitalWatermarkType() 获取数字水印类型。可选值：
<li>Trace 表示经过溯源水印处理；</li>
<li>None 表示没有经过数字水印处理。</li>
 * @method void setDigitalWatermarkType(string $DigitalWatermarkType) 设置数字水印类型。可选值：
<li>Trace 表示经过溯源水印处理；</li>
<li>None 表示没有经过数字水印处理。</li>
 * @method array getSubStreamSet() 获取子流信息列表。
 * @method void setSubStreamSet(array $SubStreamSet) 设置子流信息列表。
 */
class AdaptiveDynamicStreamingInfoItem extends AbstractModel
{
    /**
     * @var integer 转自适应码流规格。
     */
    public $Definition;

    /**
     * @var string 打包格式，取值范围：
<li>HLS；</li>
<li>DASH。</li>
     */
    public $Package;

    /**
     * @var string 加密类型。
     */
    public $DrmType;

    /**
     * @var string 播放地址。
     */
    public $Url;

    /**
     * @var integer 媒体文件大小，单位：字节。
<li>当媒体文件为 HLS 时，大小是 m3u8 和 ts 文件大小的总和；</li>
<li>当媒体文件为 DASH 时，大小是 mpd 和分片文件大小的总和；</li>
<li><font color=red>注意</font>：在 2022-01-10T16:00:00Z 前处理生成的自适应码流文件此字段为0。</li>
     */
    public $Size;

    /**
     * @var string 数字水印类型。可选值：
<li>Trace 表示经过溯源水印处理；</li>
<li>None 表示没有经过数字水印处理。</li>
     */
    public $DigitalWatermarkType;

    /**
     * @var array 子流信息列表。
     */
    public $SubStreamSet;

    /**
     * @param integer $Definition 转自适应码流规格。
     * @param string $Package 打包格式，取值范围：
<li>HLS；</li>
<li>DASH。</li>
     * @param string $DrmType 加密类型。
     * @param string $Url 播放地址。
     * @param integer $Size 媒体文件大小，单位：字节。
<li>当媒体文件为 HLS 时，大小是 m3u8 和 ts 文件大小的总和；</li>
<li>当媒体文件为 DASH 时，大小是 mpd 和分片文件大小的总和；</li>
<li><font color=red>注意</font>：在 2022-01-10T16:00:00Z 前处理生成的自适应码流文件此字段为0。</li>
     * @param string $DigitalWatermarkType 数字水印类型。可选值：
<li>Trace 表示经过溯源水印处理；</li>
<li>None 表示没有经过数字水印处理。</li>
     * @param array $SubStreamSet 子流信息列表。
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

        if (array_key_exists("Package",$param) and $param["Package"] !== null) {
            $this->Package = $param["Package"];
        }

        if (array_key_exists("DrmType",$param) and $param["DrmType"] !== null) {
            $this->DrmType = $param["DrmType"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("DigitalWatermarkType",$param) and $param["DigitalWatermarkType"] !== null) {
            $this->DigitalWatermarkType = $param["DigitalWatermarkType"];
        }

        if (array_key_exists("SubStreamSet",$param) and $param["SubStreamSet"] !== null) {
            $this->SubStreamSet = [];
            foreach ($param["SubStreamSet"] as $key => $value){
                $obj = new MediaSubStreamInfoItem();
                $obj->deserialize($value);
                array_push($this->SubStreamSet, $obj);
            }
        }
    }
}
