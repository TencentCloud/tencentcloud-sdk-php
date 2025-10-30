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
 * @method SmartEraseSubtitleConfig getEraseSubtitleConfig() 获取字幕擦除配置；
当EraseType值为：subtitle，此字段为必填参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEraseSubtitleConfig(SmartEraseSubtitleConfig $EraseSubtitleConfig) 设置字幕擦除配置；
当EraseType值为：subtitle，此字段为必填参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method SmartEraseWatermarkConfig getEraseWatermarkConfig() 获取水印擦除配置；
当EraseType值为：watermark，此字段为必填参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEraseWatermarkConfig(SmartEraseWatermarkConfig $EraseWatermarkConfig) 设置水印擦除配置；
当EraseType值为：watermark，此字段为必填参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method SmartErasePrivacyConfig getErasePrivacyConfig() 获取隐私保护配置；
当EraseType值为：privacy，此字段为必填参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErasePrivacyConfig(SmartErasePrivacyConfig $ErasePrivacyConfig) 设置隐私保护配置；
当EraseType值为：privacy，此字段为必填参数
注意：此字段可能返回 null，表示取不到有效值。
 */
class RawSmartEraseParameter extends AbstractModel
{
    /**
     * @var string 擦除类型
- subtitle 去字幕
- watermark 去水印
- privacy 隐私保护
     */
    public $EraseType;

    /**
     * @var SmartEraseSubtitleConfig 字幕擦除配置；
当EraseType值为：subtitle，此字段为必填参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EraseSubtitleConfig;

    /**
     * @var SmartEraseWatermarkConfig 水印擦除配置；
当EraseType值为：watermark，此字段为必填参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EraseWatermarkConfig;

    /**
     * @var SmartErasePrivacyConfig 隐私保护配置；
当EraseType值为：privacy，此字段为必填参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErasePrivacyConfig;

    /**
     * @param string $EraseType 擦除类型
- subtitle 去字幕
- watermark 去水印
- privacy 隐私保护
     * @param SmartEraseSubtitleConfig $EraseSubtitleConfig 字幕擦除配置；
当EraseType值为：subtitle，此字段为必填参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param SmartEraseWatermarkConfig $EraseWatermarkConfig 水印擦除配置；
当EraseType值为：watermark，此字段为必填参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param SmartErasePrivacyConfig $ErasePrivacyConfig 隐私保护配置；
当EraseType值为：privacy，此字段为必填参数
注意：此字段可能返回 null，表示取不到有效值。
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
            $this->EraseSubtitleConfig = new SmartEraseSubtitleConfig();
            $this->EraseSubtitleConfig->deserialize($param["EraseSubtitleConfig"]);
        }

        if (array_key_exists("EraseWatermarkConfig",$param) and $param["EraseWatermarkConfig"] !== null) {
            $this->EraseWatermarkConfig = new SmartEraseWatermarkConfig();
            $this->EraseWatermarkConfig->deserialize($param["EraseWatermarkConfig"]);
        }

        if (array_key_exists("ErasePrivacyConfig",$param) and $param["ErasePrivacyConfig"] !== null) {
            $this->ErasePrivacyConfig = new SmartErasePrivacyConfig();
            $this->ErasePrivacyConfig->deserialize($param["ErasePrivacyConfig"]);
        }
    }
}
