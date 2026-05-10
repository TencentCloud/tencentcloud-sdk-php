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
 * MPS智能擦除模板输入
 *
 * @method string getName() 获取<p>智能擦除模板名称长度限制：64 个字符。</p>
 * @method void setName(string $Name) 设置<p>智能擦除模板名称长度限制：64 个字符。</p>
 * @method string getEraseType() 获取<p>擦除类型</p><ul><li>subtitle 去字幕</li><li>watermark 去水印</li><li>privacy 隐私保护</li></ul>
 * @method void setEraseType(string $EraseType) 设置<p>擦除类型</p><ul><li>subtitle 去字幕</li><li>watermark 去水印</li><li>privacy 隐私保护</li></ul>
 * @method string getComment() 获取<p>智能擦除模板描述信息长度限制：256 个字符。</p>
 * @method void setComment(string $Comment) 设置<p>智能擦除模板描述信息长度限制：256 个字符。</p>
 * @method MPSSmartEraseSubtitleConfig getEraseSubtitleConfig() 获取<p>字幕擦除配置，EraseType取subtitle时必填且仅此时生效。</p>
 * @method void setEraseSubtitleConfig(MPSSmartEraseSubtitleConfig $EraseSubtitleConfig) 设置<p>字幕擦除配置，EraseType取subtitle时必填且仅此时生效。</p>
 * @method MPSSmartEraseWatermarkConfig getEraseWatermarkConfig() 获取<p>水印擦除配置，EraseType取watermark时必填且仅此时生效。</p>
 * @method void setEraseWatermarkConfig(MPSSmartEraseWatermarkConfig $EraseWatermarkConfig) 设置<p>水印擦除配置，EraseType取watermark时必填且仅此时生效。</p>
 * @method MPSSmartErasePrivacyConfig getErasePrivacyConfig() 获取<p>隐私保护配置，EraseType取privacy时必填且仅此时生效。</p>
 * @method void setErasePrivacyConfig(MPSSmartErasePrivacyConfig $ErasePrivacyConfig) 设置<p>隐私保护配置，EraseType取privacy时必填且仅此时生效。</p>
 * @method integer getSampleWidth() 获取<p>示例视频或图片的宽，单位像素值</p>
 * @method void setSampleWidth(integer $SampleWidth) 设置<p>示例视频或图片的宽，单位像素值</p>
 * @method integer getSampleHeight() 获取<p>示例视频或图片的高，单位像素值</p>
 * @method void setSampleHeight(integer $SampleHeight) 设置<p>示例视频或图片的高，单位像素值</p>
 */
class MPSSmartEraseTemplate extends AbstractModel
{
    /**
     * @var string <p>智能擦除模板名称长度限制：64 个字符。</p>
     */
    public $Name;

    /**
     * @var string <p>擦除类型</p><ul><li>subtitle 去字幕</li><li>watermark 去水印</li><li>privacy 隐私保护</li></ul>
     */
    public $EraseType;

    /**
     * @var string <p>智能擦除模板描述信息长度限制：256 个字符。</p>
     */
    public $Comment;

    /**
     * @var MPSSmartEraseSubtitleConfig <p>字幕擦除配置，EraseType取subtitle时必填且仅此时生效。</p>
     */
    public $EraseSubtitleConfig;

    /**
     * @var MPSSmartEraseWatermarkConfig <p>水印擦除配置，EraseType取watermark时必填且仅此时生效。</p>
     */
    public $EraseWatermarkConfig;

    /**
     * @var MPSSmartErasePrivacyConfig <p>隐私保护配置，EraseType取privacy时必填且仅此时生效。</p>
     */
    public $ErasePrivacyConfig;

    /**
     * @var integer <p>示例视频或图片的宽，单位像素值</p>
     */
    public $SampleWidth;

    /**
     * @var integer <p>示例视频或图片的高，单位像素值</p>
     */
    public $SampleHeight;

    /**
     * @param string $Name <p>智能擦除模板名称长度限制：64 个字符。</p>
     * @param string $EraseType <p>擦除类型</p><ul><li>subtitle 去字幕</li><li>watermark 去水印</li><li>privacy 隐私保护</li></ul>
     * @param string $Comment <p>智能擦除模板描述信息长度限制：256 个字符。</p>
     * @param MPSSmartEraseSubtitleConfig $EraseSubtitleConfig <p>字幕擦除配置，EraseType取subtitle时必填且仅此时生效。</p>
     * @param MPSSmartEraseWatermarkConfig $EraseWatermarkConfig <p>水印擦除配置，EraseType取watermark时必填且仅此时生效。</p>
     * @param MPSSmartErasePrivacyConfig $ErasePrivacyConfig <p>隐私保护配置，EraseType取privacy时必填且仅此时生效。</p>
     * @param integer $SampleWidth <p>示例视频或图片的宽，单位像素值</p>
     * @param integer $SampleHeight <p>示例视频或图片的高，单位像素值</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("EraseType",$param) and $param["EraseType"] !== null) {
            $this->EraseType = $param["EraseType"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
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

        if (array_key_exists("SampleWidth",$param) and $param["SampleWidth"] !== null) {
            $this->SampleWidth = $param["SampleWidth"];
        }

        if (array_key_exists("SampleHeight",$param) and $param["SampleHeight"] !== null) {
            $this->SampleHeight = $param["SampleHeight"];
        }
    }
}
