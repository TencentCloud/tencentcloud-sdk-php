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
 * ModifySmartEraseTemplate请求参数结构体
 *
 * @method integer getDefinition() 获取<p>智能擦除模板唯一标识</p>
 * @method void setDefinition(integer $Definition) 设置<p>智能擦除模板唯一标识</p>
 * @method string getName() 获取<p>智能擦除模板名称长度限制：64 个字符。</p>
 * @method void setName(string $Name) 设置<p>智能擦除模板名称长度限制：64 个字符。</p>
 * @method string getComment() 获取<p>智能擦除模板描述信息长度限制：256 个字符。</p>
 * @method void setComment(string $Comment) 设置<p>智能擦除模板描述信息长度限制：256 个字符。</p>
 * @method string getEraseType() 获取<p>擦除类型</p><ul><li>subtitle 去字幕</li><li>watermark 去水印</li><li>privacy 隐私保护</li></ul>
 * @method void setEraseType(string $EraseType) 设置<p>擦除类型</p><ul><li>subtitle 去字幕</li><li>watermark 去水印</li><li>privacy 隐私保护</li></ul>
 * @method SmartEraseSubtitleConfig getEraseSubtitleConfig() 获取<p>字幕擦除配置，EraseType取subtitle或者EraseType不填，对应模板原EraseType为subtitle时生效。</p>
 * @method void setEraseSubtitleConfig(SmartEraseSubtitleConfig $EraseSubtitleConfig) 设置<p>字幕擦除配置，EraseType取subtitle或者EraseType不填，对应模板原EraseType为subtitle时生效。</p>
 * @method SmartEraseWatermarkConfig getEraseWatermarkConfig() 获取<p>水印擦除配置，EraseType取watermark或者EraseType不填，对应模板原EraseType为watermark时生效。</p>
 * @method void setEraseWatermarkConfig(SmartEraseWatermarkConfig $EraseWatermarkConfig) 设置<p>水印擦除配置，EraseType取watermark或者EraseType不填，对应模板原EraseType为watermark时生效。</p>
 * @method SmartErasePrivacyConfig getErasePrivacyConfig() 获取<p>隐私保护配置，EraseType取privacy或者EraseType不填，对应模板原EraseType为privacy时生效。</p>
 * @method void setErasePrivacyConfig(SmartErasePrivacyConfig $ErasePrivacyConfig) 设置<p>隐私保护配置，EraseType取privacy或者EraseType不填，对应模板原EraseType为privacy时生效。</p>
 */
class ModifySmartEraseTemplateRequest extends AbstractModel
{
    /**
     * @var integer <p>智能擦除模板唯一标识</p>
     */
    public $Definition;

    /**
     * @var string <p>智能擦除模板名称长度限制：64 个字符。</p>
     */
    public $Name;

    /**
     * @var string <p>智能擦除模板描述信息长度限制：256 个字符。</p>
     */
    public $Comment;

    /**
     * @var string <p>擦除类型</p><ul><li>subtitle 去字幕</li><li>watermark 去水印</li><li>privacy 隐私保护</li></ul>
     */
    public $EraseType;

    /**
     * @var SmartEraseSubtitleConfig <p>字幕擦除配置，EraseType取subtitle或者EraseType不填，对应模板原EraseType为subtitle时生效。</p>
     */
    public $EraseSubtitleConfig;

    /**
     * @var SmartEraseWatermarkConfig <p>水印擦除配置，EraseType取watermark或者EraseType不填，对应模板原EraseType为watermark时生效。</p>
     */
    public $EraseWatermarkConfig;

    /**
     * @var SmartErasePrivacyConfig <p>隐私保护配置，EraseType取privacy或者EraseType不填，对应模板原EraseType为privacy时生效。</p>
     */
    public $ErasePrivacyConfig;

    /**
     * @param integer $Definition <p>智能擦除模板唯一标识</p>
     * @param string $Name <p>智能擦除模板名称长度限制：64 个字符。</p>
     * @param string $Comment <p>智能擦除模板描述信息长度限制：256 个字符。</p>
     * @param string $EraseType <p>擦除类型</p><ul><li>subtitle 去字幕</li><li>watermark 去水印</li><li>privacy 隐私保护</li></ul>
     * @param SmartEraseSubtitleConfig $EraseSubtitleConfig <p>字幕擦除配置，EraseType取subtitle或者EraseType不填，对应模板原EraseType为subtitle时生效。</p>
     * @param SmartEraseWatermarkConfig $EraseWatermarkConfig <p>水印擦除配置，EraseType取watermark或者EraseType不填，对应模板原EraseType为watermark时生效。</p>
     * @param SmartErasePrivacyConfig $ErasePrivacyConfig <p>隐私保护配置，EraseType取privacy或者EraseType不填，对应模板原EraseType为privacy时生效。</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
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
