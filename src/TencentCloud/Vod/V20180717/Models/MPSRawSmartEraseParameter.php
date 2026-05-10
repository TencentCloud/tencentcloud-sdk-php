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
 * 智能擦除自定义参数
 *
 * @method string getEraseType() 获取<p>擦除类型</p><ul><li>subtitle 去字幕</li><li>watermark 去水印</li><li>privacy 隐私保护</li></ul>
 * @method void setEraseType(string $EraseType) 设置<p>擦除类型</p><ul><li>subtitle 去字幕</li><li>watermark 去水印</li><li>privacy 隐私保护</li></ul>
 * @method MPSSmartEraseSubtitleConfig getEraseSubtitleConfig() 获取<p>字幕擦除配置；<br>当EraseType值为：subtitle，此字段为必填参数</p>
 * @method void setEraseSubtitleConfig(MPSSmartEraseSubtitleConfig $EraseSubtitleConfig) 设置<p>字幕擦除配置；<br>当EraseType值为：subtitle，此字段为必填参数</p>
 * @method MPSSmartEraseWatermarkConfig getEraseWatermarkConfig() 获取<p>水印擦除配置；<br>当EraseType值为：watermark，此字段为必填参数</p>
 * @method void setEraseWatermarkConfig(MPSSmartEraseWatermarkConfig $EraseWatermarkConfig) 设置<p>水印擦除配置；<br>当EraseType值为：watermark，此字段为必填参数</p>
 * @method MPSSmartErasePrivacyConfig getErasePrivacyConfig() 获取<p>隐私保护配置；<br>当EraseType值为：privacy，此字段为必填参数</p>
 * @method void setErasePrivacyConfig(MPSSmartErasePrivacyConfig $ErasePrivacyConfig) 设置<p>隐私保护配置；<br>当EraseType值为：privacy，此字段为必填参数</p>
 * @method integer getSubtitleEmbedId() 获取<p>擦除字幕压制模板id。</p>
 * @method void setSubtitleEmbedId(integer $SubtitleEmbedId) 设置<p>擦除字幕压制模板id。</p>
 * @method integer getUseOriginalPos() 获取<p>压制配置，默认开启1, 把字幕压制回原字幕位置。</p>
 * @method void setUseOriginalPos(integer $UseOriginalPos) 设置<p>压制配置，默认开启1, 把字幕压制回原字幕位置。</p>
 * @method integer getUseOriginalSize() 获取<p>压制配置，默认开启1, 开启后使用原字幕字号。</p>
 * @method void setUseOriginalSize(integer $UseOriginalSize) 设置<p>压制配置，默认开启1, 开启后使用原字幕字号。</p>
 */
class MPSRawSmartEraseParameter extends AbstractModel
{
    /**
     * @var string <p>擦除类型</p><ul><li>subtitle 去字幕</li><li>watermark 去水印</li><li>privacy 隐私保护</li></ul>
     */
    public $EraseType;

    /**
     * @var MPSSmartEraseSubtitleConfig <p>字幕擦除配置；<br>当EraseType值为：subtitle，此字段为必填参数</p>
     */
    public $EraseSubtitleConfig;

    /**
     * @var MPSSmartEraseWatermarkConfig <p>水印擦除配置；<br>当EraseType值为：watermark，此字段为必填参数</p>
     */
    public $EraseWatermarkConfig;

    /**
     * @var MPSSmartErasePrivacyConfig <p>隐私保护配置；<br>当EraseType值为：privacy，此字段为必填参数</p>
     */
    public $ErasePrivacyConfig;

    /**
     * @var integer <p>擦除字幕压制模板id。</p>
     */
    public $SubtitleEmbedId;

    /**
     * @var integer <p>压制配置，默认开启1, 把字幕压制回原字幕位置。</p>
     */
    public $UseOriginalPos;

    /**
     * @var integer <p>压制配置，默认开启1, 开启后使用原字幕字号。</p>
     */
    public $UseOriginalSize;

    /**
     * @param string $EraseType <p>擦除类型</p><ul><li>subtitle 去字幕</li><li>watermark 去水印</li><li>privacy 隐私保护</li></ul>
     * @param MPSSmartEraseSubtitleConfig $EraseSubtitleConfig <p>字幕擦除配置；<br>当EraseType值为：subtitle，此字段为必填参数</p>
     * @param MPSSmartEraseWatermarkConfig $EraseWatermarkConfig <p>水印擦除配置；<br>当EraseType值为：watermark，此字段为必填参数</p>
     * @param MPSSmartErasePrivacyConfig $ErasePrivacyConfig <p>隐私保护配置；<br>当EraseType值为：privacy，此字段为必填参数</p>
     * @param integer $SubtitleEmbedId <p>擦除字幕压制模板id。</p>
     * @param integer $UseOriginalPos <p>压制配置，默认开启1, 把字幕压制回原字幕位置。</p>
     * @param integer $UseOriginalSize <p>压制配置，默认开启1, 开启后使用原字幕字号。</p>
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
        if (array_key_exists("EraseType",$param) and $param["EraseType"] !== null) {
            $this->EraseType = $param["EraseType"];
        }

        if (array_key_exists("EraseSubtitleConfig",$param) and $param["EraseSubtitleConfig"] !== null) {
            $this->EraseSubtitleConfig = new MPSSmartEraseSubtitleConfig();
            $this->EraseSubtitleConfig->deserialize($param["EraseSubtitleConfig"]);
        }

        if (array_key_exists("EraseWatermarkConfig",$param) and $param["EraseWatermarkConfig"] !== null) {
            $this->EraseWatermarkConfig = new MPSSmartEraseWatermarkConfig();
            $this->EraseWatermarkConfig->deserialize($param["EraseWatermarkConfig"]);
        }

        if (array_key_exists("ErasePrivacyConfig",$param) and $param["ErasePrivacyConfig"] !== null) {
            $this->ErasePrivacyConfig = new MPSSmartErasePrivacyConfig();
            $this->ErasePrivacyConfig->deserialize($param["ErasePrivacyConfig"]);
        }

        if (array_key_exists("SubtitleEmbedId",$param) and $param["SubtitleEmbedId"] !== null) {
            $this->SubtitleEmbedId = $param["SubtitleEmbedId"];
        }

        if (array_key_exists("UseOriginalPos",$param) and $param["UseOriginalPos"] !== null) {
            $this->UseOriginalPos = $param["UseOriginalPos"];
        }

        if (array_key_exists("UseOriginalSize",$param) and $param["UseOriginalSize"] !== null) {
            $this->UseOriginalSize = $param["UseOriginalSize"];
        }
    }
}
