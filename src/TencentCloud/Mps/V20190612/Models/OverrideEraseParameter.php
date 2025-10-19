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
 * 智能擦除自定义参数
 *
 * @method string getEraseType() 获取擦除类型
- subtitle 去字幕
- watermark 去水印
- privacy 隐私保护
 * @method void setEraseType(string $EraseType) 设置擦除类型
- subtitle 去字幕
- watermark 去水印
- privacy 隐私保护
 * @method UpdateSmartEraseSubtitleConfig getEraseSubtitleConfig() 获取字幕擦除配置；
当EraseType值为：subtitle，此字段为必填参数
 * @method void setEraseSubtitleConfig(UpdateSmartEraseSubtitleConfig $EraseSubtitleConfig) 设置字幕擦除配置；
当EraseType值为：subtitle，此字段为必填参数
 * @method UpdateSmartEraseWatermarkConfig getEraseWatermarkConfig() 获取水印擦除配置；
当EraseType值为：watermark，此字段为必填参数
 * @method void setEraseWatermarkConfig(UpdateSmartEraseWatermarkConfig $EraseWatermarkConfig) 设置水印擦除配置；
当EraseType值为：watermark，此字段为必填参数
 * @method UpdateSmartErasePrivacyConfig getErasePrivacyConfig() 获取隐私保护配置；
当EraseType值为：privacy，此字段为必填参数
 * @method void setErasePrivacyConfig(UpdateSmartErasePrivacyConfig $ErasePrivacyConfig) 设置隐私保护配置；
当EraseType值为：privacy，此字段为必填参数
 */
class OverrideEraseParameter extends AbstractModel
{
    /**
     * @var string 擦除类型
- subtitle 去字幕
- watermark 去水印
- privacy 隐私保护
     */
    public $EraseType;

    /**
     * @var UpdateSmartEraseSubtitleConfig 字幕擦除配置；
当EraseType值为：subtitle，此字段为必填参数
     */
    public $EraseSubtitleConfig;

    /**
     * @var UpdateSmartEraseWatermarkConfig 水印擦除配置；
当EraseType值为：watermark，此字段为必填参数
     */
    public $EraseWatermarkConfig;

    /**
     * @var UpdateSmartErasePrivacyConfig 隐私保护配置；
当EraseType值为：privacy，此字段为必填参数
     */
    public $ErasePrivacyConfig;

    /**
     * @param string $EraseType 擦除类型
- subtitle 去字幕
- watermark 去水印
- privacy 隐私保护
     * @param UpdateSmartEraseSubtitleConfig $EraseSubtitleConfig 字幕擦除配置；
当EraseType值为：subtitle，此字段为必填参数
     * @param UpdateSmartEraseWatermarkConfig $EraseWatermarkConfig 水印擦除配置；
当EraseType值为：watermark，此字段为必填参数
     * @param UpdateSmartErasePrivacyConfig $ErasePrivacyConfig 隐私保护配置；
当EraseType值为：privacy，此字段为必填参数
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
            $this->EraseSubtitleConfig = new UpdateSmartEraseSubtitleConfig();
            $this->EraseSubtitleConfig->deserialize($param["EraseSubtitleConfig"]);
        }

        if (array_key_exists("EraseWatermarkConfig",$param) and $param["EraseWatermarkConfig"] !== null) {
            $this->EraseWatermarkConfig = new UpdateSmartEraseWatermarkConfig();
            $this->EraseWatermarkConfig->deserialize($param["EraseWatermarkConfig"]);
        }

        if (array_key_exists("ErasePrivacyConfig",$param) and $param["ErasePrivacyConfig"] !== null) {
            $this->ErasePrivacyConfig = new UpdateSmartErasePrivacyConfig();
            $this->ErasePrivacyConfig->deserialize($param["ErasePrivacyConfig"]);
        }
    }
}
