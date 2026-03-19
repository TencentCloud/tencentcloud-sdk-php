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
 * 字幕压制模板详情
 *
 * @method integer getDefinition() 获取字幕压制模板唯一标识
 * @method void setDefinition(integer $Definition) 设置字幕压制模板唯一标识
 * @method string getName() 获取字幕压制模板名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置字幕压制模板名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComment() 获取字幕压制模板描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComment(string $Comment) 设置字幕压制模板描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取模板类型，取值范围：
* Preset：系统预置模板；
* Custom：用户自定义模板。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置模板类型，取值范围：
* Preset：系统预置模板；
* Custom：用户自定义模板。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDeleteTag() 获取删除标记，0 未删除 1 删除
 * @method void setDeleteTag(integer $DeleteTag) 设置删除标记，0 未删除 1 删除
 * @method string getCreateTime() 获取模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
 * @method void setCreateTime(string $CreateTime) 设置模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
 * @method string getUpdateTime() 获取模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
 * @method void setUpdateTime(string $UpdateTime) 设置模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
 * @method SubtitleEmbedConfig getSubtitleEmbedConfig() 获取字幕压制模块配置
 * @method void setSubtitleEmbedConfig(SubtitleEmbedConfig $SubtitleEmbedConfig) 设置字幕压制模块配置
 * @method string getAliasName() 获取字幕压制模板英文名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAliasName(string $AliasName) 设置字幕压制模板英文名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class SubtitleEmbedTemplateItem extends AbstractModel
{
    /**
     * @var integer 字幕压制模板唯一标识
     */
    public $Definition;

    /**
     * @var string 字幕压制模板名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 字幕压制模板描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Comment;

    /**
     * @var string 模板类型，取值范围：
* Preset：系统预置模板；
* Custom：用户自定义模板。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var integer 删除标记，0 未删除 1 删除
     */
    public $DeleteTag;

    /**
     * @var string 模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
     */
    public $CreateTime;

    /**
     * @var string 模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
     */
    public $UpdateTime;

    /**
     * @var SubtitleEmbedConfig 字幕压制模块配置
     */
    public $SubtitleEmbedConfig;

    /**
     * @var string 字幕压制模板英文名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AliasName;

    /**
     * @param integer $Definition 字幕压制模板唯一标识
     * @param string $Name 字幕压制模板名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Comment 字幕压制模板描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 模板类型，取值范围：
* Preset：系统预置模板；
* Custom：用户自定义模板。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DeleteTag 删除标记，0 未删除 1 删除
     * @param string $CreateTime 模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
     * @param string $UpdateTime 模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
     * @param SubtitleEmbedConfig $SubtitleEmbedConfig 字幕压制模块配置
     * @param string $AliasName 字幕压制模板英文名称
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

        if (array_key_exists("DeleteTag",$param) and $param["DeleteTag"] !== null) {
            $this->DeleteTag = $param["DeleteTag"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("SubtitleEmbedConfig",$param) and $param["SubtitleEmbedConfig"] !== null) {
            $this->SubtitleEmbedConfig = new SubtitleEmbedConfig();
            $this->SubtitleEmbedConfig->deserialize($param["SubtitleEmbedConfig"]);
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }
    }
}
