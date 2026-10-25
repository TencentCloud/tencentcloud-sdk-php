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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 高亮信息
 *
 * @method string getAssetName() 获取<p>资产名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetName(string $AssetName) 设置<p>资产名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFullName() 获取<p>资产全名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFullName(string $FullName) 设置<p>资产全名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComment() 获取<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComment(string $Comment) 设置<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCodeFragments() 获取<p>代码片段</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeFragments(array $CodeFragments) 设置<p>代码片段</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTextFragments() 获取<p>文本片段</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTextFragments(array $TextFragments) 设置<p>文本片段</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取<p>标签(废弃)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>标签(废弃)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagFragments() 获取<p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagFragments(array $TagFragments) 设置<p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAliasFragments() 获取<p>别名高亮片段列表。使用场景：资产别名命中关键词时，返回带 <em></em> 标签的高亮片段供前端渲染</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAliasFragments(array $AliasFragments) 设置<p>别名高亮片段列表。使用场景：资产别名命中关键词时，返回带 <em></em> 标签的高亮片段供前端渲染</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class HighlightingInfo extends AbstractModel
{
    /**
     * @var string <p>资产名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetName;

    /**
     * @var string <p>资产全名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FullName;

    /**
     * @var string <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Comment;

    /**
     * @var array <p>代码片段</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeFragments;

    /**
     * @var array <p>文本片段</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TextFragments;

    /**
     * @var array <p>标签(废弃)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var array <p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagFragments;

    /**
     * @var array <p>别名高亮片段列表。使用场景：资产别名命中关键词时，返回带 <em></em> 标签的高亮片段供前端渲染</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AliasFragments;

    /**
     * @param string $AssetName <p>资产名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FullName <p>资产全名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Comment <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CodeFragments <p>代码片段</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TextFragments <p>文本片段</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags <p>标签(废弃)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagFragments <p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AliasFragments <p>别名高亮片段列表。使用场景：资产别名命中关键词时，返回带 <em></em> 标签的高亮片段供前端渲染</p>
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
        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("FullName",$param) and $param["FullName"] !== null) {
            $this->FullName = $param["FullName"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("CodeFragments",$param) and $param["CodeFragments"] !== null) {
            $this->CodeFragments = [];
            foreach ($param["CodeFragments"] as $key => $value){
                $obj = new Fragment();
                $obj->deserialize($value);
                array_push($this->CodeFragments, $obj);
            }
        }

        if (array_key_exists("TextFragments",$param) and $param["TextFragments"] !== null) {
            $this->TextFragments = [];
            foreach ($param["TextFragments"] as $key => $value){
                $obj = new Fragment();
                $obj->deserialize($value);
                array_push($this->TextFragments, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("TagFragments",$param) and $param["TagFragments"] !== null) {
            $this->TagFragments = [];
            foreach ($param["TagFragments"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagFragments, $obj);
            }
        }

        if (array_key_exists("AliasFragments",$param) and $param["AliasFragments"] !== null) {
            $this->AliasFragments = $param["AliasFragments"];
        }
    }
}
