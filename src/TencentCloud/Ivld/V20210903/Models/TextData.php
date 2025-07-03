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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文本文件标签识别结果
 *
 * @method string getContent() 获取文本内容信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置文本内容信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSummary() 获取文本概要信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSummary(string $Summary) 设置文本概要信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method MultiLevelTag getTextTagSet() 获取文本标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTextTagSet(MultiLevelTag $TextTagSet) 设置文本标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWebMediaURL() 获取文档下载地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebMediaURL(string $WebMediaURL) 设置文档下载地址
注意：此字段可能返回 null，表示取不到有效值。
 */
class TextData extends AbstractModel
{
    /**
     * @var string 文本内容信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var string 文本概要信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Summary;

    /**
     * @var MultiLevelTag 文本标签信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TextTagSet;

    /**
     * @var string 文档下载地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebMediaURL;

    /**
     * @param string $Content 文本内容信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Summary 文本概要信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param MultiLevelTag $TextTagSet 文本标签信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WebMediaURL 文档下载地址
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = $param["Summary"];
        }

        if (array_key_exists("TextTagSet",$param) and $param["TextTagSet"] !== null) {
            $this->TextTagSet = new MultiLevelTag();
            $this->TextTagSet->deserialize($param["TextTagSet"]);
        }

        if (array_key_exists("WebMediaURL",$param) and $param["WebMediaURL"] !== null) {
            $this->WebMediaURL = $param["WebMediaURL"];
        }
    }
}
