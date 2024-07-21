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
 * 搜索引文信息
 *
 * @method string getIndex() 获取搜索引文序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndex(string $Index) 设置搜索引文序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTitle() 获取搜索引文标题
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTitle(string $Title) 设置搜索引文标题
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取搜索引文链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置搜索引文链接
注意：此字段可能返回 null，表示取不到有效值。
 */
class SearchResult extends AbstractModel
{
    /**
     * @var string 搜索引文序号
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
     * @param string $Index 搜索引文序号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Title 搜索引文标题
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url 搜索引文链接
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
