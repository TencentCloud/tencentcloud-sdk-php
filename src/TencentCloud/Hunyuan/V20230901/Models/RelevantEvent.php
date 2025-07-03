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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 相关事件
 *
 * @method string getTitle() 获取相关事件标题
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTitle(string $Title) 设置相关事件标题
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContent() 获取相关事件内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置相关事件内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatetime() 获取相关事件时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatetime(string $Datetime) 设置相关事件时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReference() 获取相关事件引用文章标号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReference(array $Reference) 设置相关事件引用文章标号
注意：此字段可能返回 null，表示取不到有效值。
 */
class RelevantEvent extends AbstractModel
{
    /**
     * @var string 相关事件标题
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Title;

    /**
     * @var string 相关事件内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var string 相关事件时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Datetime;

    /**
     * @var array 相关事件引用文章标号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reference;

    /**
     * @param string $Title 相关事件标题
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Content 相关事件内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Datetime 相关事件时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Reference 相关事件引用文章标号
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Datetime",$param) and $param["Datetime"] !== null) {
            $this->Datetime = $param["Datetime"];
        }

        if (array_key_exists("Reference",$param) and $param["Reference"] !== null) {
            $this->Reference = $param["Reference"];
        }
    }
}
