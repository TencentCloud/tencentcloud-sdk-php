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
 * CreateSmartEraseTemplate请求参数结构体
 *
 * @method string getName() 获取智能擦除模板名称长度限制：64 个字符。
 * @method void setName(string $Name) 设置智能擦除模板名称长度限制：64 个字符。
 * @method string getEraseType() 获取擦除类型
- subtitle 去字幕
- watermark 去水印
- privacy 隐私保护
 * @method void setEraseType(string $EraseType) 设置擦除类型
- subtitle 去字幕
- watermark 去水印
- privacy 隐私保护
 * @method string getComment() 获取智能擦除模板描述信息长度限制：256 个字符。
 * @method void setComment(string $Comment) 设置智能擦除模板描述信息长度限制：256 个字符。
 * @method SmartEraseSubtitleConfig getEraseSubtitleConfig() 获取字幕擦除配置，EraseType取subtitle时必填且仅此时生效。
 * @method void setEraseSubtitleConfig(SmartEraseSubtitleConfig $EraseSubtitleConfig) 设置字幕擦除配置，EraseType取subtitle时必填且仅此时生效。
 * @method SmartEraseWatermarkConfig getEraseWatermarkConfig() 获取水印擦除配置，EraseType取watermark时必填且仅此时生效。
 * @method void setEraseWatermarkConfig(SmartEraseWatermarkConfig $EraseWatermarkConfig) 设置水印擦除配置，EraseType取watermark时必填且仅此时生效。
 * @method SmartErasePrivacyConfig getErasePrivacyConfig() 获取隐私保护配置，EraseType取privacy时必填且仅此时生效。
 * @method void setErasePrivacyConfig(SmartErasePrivacyConfig $ErasePrivacyConfig) 设置隐私保护配置，EraseType取privacy时必填且仅此时生效。
 */
class CreateSmartEraseTemplateRequest extends AbstractModel
{
    /**
     * @var string 智能擦除模板名称长度限制：64 个字符。
     */
    public $Name;

    /**
     * @var string 擦除类型
- subtitle 去字幕
- watermark 去水印
- privacy 隐私保护
     */
    public $EraseType;

    /**
     * @var string 智能擦除模板描述信息长度限制：256 个字符。
     */
    public $Comment;

    /**
     * @var SmartEraseSubtitleConfig 字幕擦除配置，EraseType取subtitle时必填且仅此时生效。
     */
    public $EraseSubtitleConfig;

    /**
     * @var SmartEraseWatermarkConfig 水印擦除配置，EraseType取watermark时必填且仅此时生效。
     */
    public $EraseWatermarkConfig;

    /**
     * @var SmartErasePrivacyConfig 隐私保护配置，EraseType取privacy时必填且仅此时生效。
     */
    public $ErasePrivacyConfig;

    /**
     * @param string $Name 智能擦除模板名称长度限制：64 个字符。
     * @param string $EraseType 擦除类型
- subtitle 去字幕
- watermark 去水印
- privacy 隐私保护
     * @param string $Comment 智能擦除模板描述信息长度限制：256 个字符。
     * @param SmartEraseSubtitleConfig $EraseSubtitleConfig 字幕擦除配置，EraseType取subtitle时必填且仅此时生效。
     * @param SmartEraseWatermarkConfig $EraseWatermarkConfig 水印擦除配置，EraseType取watermark时必填且仅此时生效。
     * @param SmartErasePrivacyConfig $ErasePrivacyConfig 隐私保护配置，EraseType取privacy时必填且仅此时生效。
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
