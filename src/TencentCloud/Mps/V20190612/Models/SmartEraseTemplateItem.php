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
 * 智能擦除模板详情
 *
 * @method integer getDefinition() 获取智能擦除模板唯一标识
 * @method void setDefinition(integer $Definition) 设置智能擦除模板唯一标识
 * @method string getName() 获取智能擦除模板名称
 * @method void setName(string $Name) 设置智能擦除模板名称
 * @method string getComment() 获取智能擦除模板描述信息
 * @method void setComment(string $Comment) 设置智能擦除模板描述信息
 * @method string getType() 获取模板类型，取值范围：
* Preset：系统预置模板；
* Custom：用户自定义模板。
 * @method void setType(string $Type) 设置模板类型，取值范围：
* Preset：系统预置模板；
* Custom：用户自定义模板。
 * @method string getEraseType() 获取擦除类型
- subtitle 去字幕
- watermark 去水印
- privacy 隐私保护
 * @method void setEraseType(string $EraseType) 设置擦除类型
- subtitle 去字幕
- watermark 去水印
- privacy 隐私保护
 * @method SmartEraseSubtitleConfig getEraseSubtitleConfig() 获取字幕擦除配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEraseSubtitleConfig(SmartEraseSubtitleConfig $EraseSubtitleConfig) 设置字幕擦除配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method SmartEraseWatermarkConfig getEraseWatermarkConfig() 获取水印擦除配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEraseWatermarkConfig(SmartEraseWatermarkConfig $EraseWatermarkConfig) 设置水印擦除配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method SmartErasePrivacyConfig getErasePrivacyConfig() 获取隐私保护配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErasePrivacyConfig(SmartErasePrivacyConfig $ErasePrivacyConfig) 设置隐私保护配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
 * @method void setCreateTime(string $CreateTime) 设置模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
 * @method string getUpdateTime() 获取模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
 * @method void setUpdateTime(string $UpdateTime) 设置模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
 * @method string getAliasName() 获取智能擦除预设模板别名
 * @method void setAliasName(string $AliasName) 设置智能擦除预设模板别名
 */
class SmartEraseTemplateItem extends AbstractModel
{
    /**
     * @var integer 智能擦除模板唯一标识
     */
    public $Definition;

    /**
     * @var string 智能擦除模板名称
     */
    public $Name;

    /**
     * @var string 智能擦除模板描述信息
     */
    public $Comment;

    /**
     * @var string 模板类型，取值范围：
* Preset：系统预置模板；
* Custom：用户自定义模板。
     */
    public $Type;

    /**
     * @var string 擦除类型
- subtitle 去字幕
- watermark 去水印
- privacy 隐私保护
     */
    public $EraseType;

    /**
     * @var SmartEraseSubtitleConfig 字幕擦除配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EraseSubtitleConfig;

    /**
     * @var SmartEraseWatermarkConfig 水印擦除配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EraseWatermarkConfig;

    /**
     * @var SmartErasePrivacyConfig 隐私保护配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErasePrivacyConfig;

    /**
     * @var string 模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
     */
    public $CreateTime;

    /**
     * @var string 模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
     */
    public $UpdateTime;

    /**
     * @var string 智能擦除预设模板别名
     */
    public $AliasName;

    /**
     * @param integer $Definition 智能擦除模板唯一标识
     * @param string $Name 智能擦除模板名称
     * @param string $Comment 智能擦除模板描述信息
     * @param string $Type 模板类型，取值范围：
* Preset：系统预置模板；
* Custom：用户自定义模板。
     * @param string $EraseType 擦除类型
- subtitle 去字幕
- watermark 去水印
- privacy 隐私保护
     * @param SmartEraseSubtitleConfig $EraseSubtitleConfig 字幕擦除配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param SmartEraseWatermarkConfig $EraseWatermarkConfig 水印擦除配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param SmartErasePrivacyConfig $ErasePrivacyConfig 隐私保护配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
     * @param string $UpdateTime 模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
     * @param string $AliasName 智能擦除预设模板别名
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }
    }
}
