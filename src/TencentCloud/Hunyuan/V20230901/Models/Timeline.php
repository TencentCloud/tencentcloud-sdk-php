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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 时间线
 *
 * @method string getTitle() 获取标题
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTitle(string $Title) 设置标题
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatetime() 获取时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatetime(string $Datetime) 设置时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取相关网页链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置相关网页链接
注意：此字段可能返回 null，表示取不到有效值。
 */
class Timeline extends AbstractModel
{
    /**
     * @var string 标题
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Title;

    /**
     * @var string 时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Datetime;

    /**
     * @var string 相关网页链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @param string $Title 标题
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Datetime 时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url 相关网页链接
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

        if (array_key_exists("Datetime",$param) and $param["Datetime"] !== null) {
            $this->Datetime = $param["Datetime"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
