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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 转自适应码流信息
 *
 * @method integer getDefinition() 获取<p>转自适应码流规格。</p>
 * @method void setDefinition(integer $Definition) 设置<p>转自适应码流规格。</p>
 * @method string getPackage() 获取<p>打包格式，取值范围：</p><li>HLS；</li><li>DASH。</li>
 * @method void setPackage(string $Package) 设置<p>打包格式，取值范围：</p><li>HLS；</li><li>DASH。</li>
 * @method string getDrmType() 获取<p>加密类型。</p>
 * @method void setDrmType(string $DrmType) 设置<p>加密类型。</p>
 * @method string getUrl() 获取<p>播放地址。</p>
 * @method void setUrl(string $Url) 设置<p>播放地址。</p>
 * @method integer getSize() 获取<p>媒体文件大小，单位：字节。</p><li>当媒体文件为 HLS 时，大小是 m3u8 和 ts 文件大小的总和；</li><li>当媒体文件为 DASH 时，大小是 mpd 和分片文件大小的总和；</li><li><font color="red">注意</font>：在 2022-01-10T16:00:00Z 前处理生成的自适应码流文件此字段为0。</li>
 * @method void setSize(integer $Size) 设置<p>媒体文件大小，单位：字节。</p><li>当媒体文件为 HLS 时，大小是 m3u8 和 ts 文件大小的总和；</li><li>当媒体文件为 DASH 时，大小是 mpd 和分片文件大小的总和；</li><li><font color="red">注意</font>：在 2022-01-10T16:00:00Z 前处理生成的自适应码流文件此字段为0。</li>
 * @method string getDigitalWatermarkType() 获取<p>数字水印类型。可选值：</p><li>Trace 表示经过溯源水印处理；</li><li>CopyRight 表示经过版权水印处理；</li><li>None 表示没有经过数字水印处理。</li>
 * @method void setDigitalWatermarkType(string $DigitalWatermarkType) 设置<p>数字水印类型。可选值：</p><li>Trace 表示经过溯源水印处理；</li><li>CopyRight 表示经过版权水印处理；</li><li>None 表示没有经过数字水印处理。</li>
 * @method array getSubStreamSet() 获取<p>子流信息列表。</p>
 * @method void setSubStreamSet(array $SubStreamSet) 设置<p>子流信息列表。</p>
 * @method string getCopyRightWatermarkText() 获取<p>版权信息。</p>
 * @method void setCopyRightWatermarkText(string $CopyRightWatermarkText) 设置<p>版权信息。</p>
 * @method integer getBlindWatermarkDefinition() 获取<p>数字水印模板id。</p>
 * @method void setBlindWatermarkDefinition(integer $BlindWatermarkDefinition) 设置<p>数字水印模板id。</p>
 * @method array getSubtitleSet() 获取<p>字幕信息列表。</p>
 * @method void setSubtitleSet(array $SubtitleSet) 设置<p>字幕信息列表。</p>
 * @method string getDefaultSubtitleId() 获取<p>默认字幕的唯一标识。</p>
 * @method void setDefaultSubtitleId(string $DefaultSubtitleId) 设置<p>默认字幕的唯一标识。</p>
 * @method string getDrmEncryptType() 获取<p>DRM加密方法。</p>
 * @method void setDrmEncryptType(string $DrmEncryptType) 设置<p>DRM加密方法。</p>
 */
class AdaptiveDynamicStreamingInfoItem extends AbstractModel
{
    /**
     * @var integer <p>转自适应码流规格。</p>
     */
    public $Definition;

    /**
     * @var string <p>打包格式，取值范围：</p><li>HLS；</li><li>DASH。</li>
     */
    public $Package;

    /**
     * @var string <p>加密类型。</p>
     */
    public $DrmType;

    /**
     * @var string <p>播放地址。</p>
     */
    public $Url;

    /**
     * @var integer <p>媒体文件大小，单位：字节。</p><li>当媒体文件为 HLS 时，大小是 m3u8 和 ts 文件大小的总和；</li><li>当媒体文件为 DASH 时，大小是 mpd 和分片文件大小的总和；</li><li><font color="red">注意</font>：在 2022-01-10T16:00:00Z 前处理生成的自适应码流文件此字段为0。</li>
     */
    public $Size;

    /**
     * @var string <p>数字水印类型。可选值：</p><li>Trace 表示经过溯源水印处理；</li><li>CopyRight 表示经过版权水印处理；</li><li>None 表示没有经过数字水印处理。</li>
     */
    public $DigitalWatermarkType;

    /**
     * @var array <p>子流信息列表。</p>
     */
    public $SubStreamSet;

    /**
     * @var string <p>版权信息。</p>
     */
    public $CopyRightWatermarkText;

    /**
     * @var integer <p>数字水印模板id。</p>
     */
    public $BlindWatermarkDefinition;

    /**
     * @var array <p>字幕信息列表。</p>
     */
    public $SubtitleSet;

    /**
     * @var string <p>默认字幕的唯一标识。</p>
     */
    public $DefaultSubtitleId;

    /**
     * @var string <p>DRM加密方法。</p>
     */
    public $DrmEncryptType;

    /**
     * @param integer $Definition <p>转自适应码流规格。</p>
     * @param string $Package <p>打包格式，取值范围：</p><li>HLS；</li><li>DASH。</li>
     * @param string $DrmType <p>加密类型。</p>
     * @param string $Url <p>播放地址。</p>
     * @param integer $Size <p>媒体文件大小，单位：字节。</p><li>当媒体文件为 HLS 时，大小是 m3u8 和 ts 文件大小的总和；</li><li>当媒体文件为 DASH 时，大小是 mpd 和分片文件大小的总和；</li><li><font color="red">注意</font>：在 2022-01-10T16:00:00Z 前处理生成的自适应码流文件此字段为0。</li>
     * @param string $DigitalWatermarkType <p>数字水印类型。可选值：</p><li>Trace 表示经过溯源水印处理；</li><li>CopyRight 表示经过版权水印处理；</li><li>None 表示没有经过数字水印处理。</li>
     * @param array $SubStreamSet <p>子流信息列表。</p>
     * @param string $CopyRightWatermarkText <p>版权信息。</p>
     * @param integer $BlindWatermarkDefinition <p>数字水印模板id。</p>
     * @param array $SubtitleSet <p>字幕信息列表。</p>
     * @param string $DefaultSubtitleId <p>默认字幕的唯一标识。</p>
     * @param string $DrmEncryptType <p>DRM加密方法。</p>
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

        if (array_key_exists("CopyRightWatermarkText",$param) and $param["CopyRightWatermarkText"] !== null) {
            $this->CopyRightWatermarkText = $param["CopyRightWatermarkText"];
        }

        if (array_key_exists("BlindWatermarkDefinition",$param) and $param["BlindWatermarkDefinition"] !== null) {
            $this->BlindWatermarkDefinition = $param["BlindWatermarkDefinition"];
        }

        if (array_key_exists("SubtitleSet",$param) and $param["SubtitleSet"] !== null) {
            $this->SubtitleSet = [];
            foreach ($param["SubtitleSet"] as $key => $value){
                $obj = new MediaSubtitleItem();
                $obj->deserialize($value);
                array_push($this->SubtitleSet, $obj);
            }
        }

        if (array_key_exists("DefaultSubtitleId",$param) and $param["DefaultSubtitleId"] !== null) {
            $this->DefaultSubtitleId = $param["DefaultSubtitleId"];
        }

        if (array_key_exists("DrmEncryptType",$param) and $param["DrmEncryptType"] !== null) {
            $this->DrmEncryptType = $param["DrmEncryptType"];
        }
    }
}
