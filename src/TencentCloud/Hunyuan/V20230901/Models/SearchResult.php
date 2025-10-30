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
 * 搜索引文信息
 *
 * @method integer getIndex() 获取搜索引文序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndex(integer $Index) 设置搜索引文序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTitle() 获取搜索引文标题
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTitle(string $Title) 设置搜索引文标题
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取搜索引文链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置搜索引文链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getText() 获取搜索引文站点名
 * @method void setText(string $Text) 设置搜索引文站点名
 * @method string getIcon() 获取搜索引文图标
 * @method void setIcon(string $Icon) 设置搜索引文图标
 */
class SearchResult extends AbstractModel
{
    /**
     * @var integer 搜索引文序号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Index;

    /**
     * @var string 搜索引文标题
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Title;

    /**
     * @var string 搜索引文链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var string 搜索引文站点名
     */
    public $Text;

    /**
     * @var string 搜索引文图标
     */
    public $Icon;

    /**
     * @param integer $Index 搜索引文序号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Title 搜索引文标题
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url 搜索引文链接
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Text 搜索引文站点名
     * @param string $Icon 搜索引文图标
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Icon",$param) and $param["Icon"] !== null) {
            $this->Icon = $param["Icon"];
        }
    }
}
