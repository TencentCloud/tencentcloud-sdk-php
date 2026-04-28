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
namespace TencentCloud\Dataagent\V20250513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务配置
 *
 * @method integer getChunkType() 获取<p>切片类型  0:自定义切片，1：智能切片</p>
 * @method void setChunkType(integer $ChunkType) 设置<p>切片类型  0:自定义切片，1：智能切片</p>
 * @method integer getMaxChunkSize() 获取<p>/智能切片：最小值 1000，默认 4800 自定义切片：正整数即可,默认值 1000</p>
 * @method void setMaxChunkSize(integer $MaxChunkSize) 设置<p>/智能切片：最小值 1000，默认 4800 自定义切片：正整数即可,默认值 1000</p>
 * @method array getDelimiters() 获取<p>切片分隔符,自定义切片使用：默认值为：[&quot;\n\n&quot;, &quot;\n&quot;, &quot;。&quot;, &quot;！&quot;, &quot;？&quot;, &quot;，&quot;, &quot;&quot;]</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDelimiters(array $Delimiters) 设置<p>切片分隔符,自定义切片使用：默认值为：[&quot;\n\n&quot;, &quot;\n&quot;, &quot;。&quot;, &quot;！&quot;, &quot;？&quot;, &quot;，&quot;, &quot;&quot;]</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getChunkOverlap() 获取<p>自定义切片使用:默认0 可重叠字符长度</p>
 * @method void setChunkOverlap(integer $ChunkOverlap) 设置<p>自定义切片使用:默认0 可重叠字符长度</p>
 * @method array getColumns() 获取<p>表格类文档解析</p>
 * @method void setColumns(array $Columns) 设置<p>表格类文档解析</p>
 * @method array getIndexes() 获取<p>带检索的索引列表</p>
 * @method void setIndexes(array $Indexes) 设置<p>带检索的索引列表</p>
 * @method integer getGenDocSummary() 获取<p>0：不生成文档摘要，1：生成文档概要。默认0，当取1时，GenParaSummary必须也为1</p>
 * @method void setGenDocSummary(integer $GenDocSummary) 设置<p>0：不生成文档摘要，1：生成文档概要。默认0，当取1时，GenParaSummary必须也为1</p>
 * @method integer getGenParaSummary() 获取<p>0：不生成段落摘要，1：生成段落概要。默认0</p>
 * @method void setGenParaSummary(integer $GenParaSummary) 设置<p>0：不生成段落摘要，1：生成段落概要。默认0</p>
 * @method integer getEnableImageUnderstanding() 获取<p>0：不开启图片理解，1：开启图片理解。默认1</p><p>取值范围：[1, 10000]</p><p>默认值：1</p>
 * @method void setEnableImageUnderstanding(integer $EnableImageUnderstanding) 设置<p>0：不开启图片理解，1：开启图片理解。默认1</p><p>取值范围：[1, 10000]</p><p>默认值：1</p>
 */
class KnowledgeTaskConfig extends AbstractModel
{
    /**
     * @var integer <p>切片类型  0:自定义切片，1：智能切片</p>
     */
    public $ChunkType;

    /**
     * @var integer <p>/智能切片：最小值 1000，默认 4800 自定义切片：正整数即可,默认值 1000</p>
     */
    public $MaxChunkSize;

    /**
     * @var array <p>切片分隔符,自定义切片使用：默认值为：[&quot;\n\n&quot;, &quot;\n&quot;, &quot;。&quot;, &quot;！&quot;, &quot;？&quot;, &quot;，&quot;, &quot;&quot;]</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Delimiters;

    /**
     * @var integer <p>自定义切片使用:默认0 可重叠字符长度</p>
     */
    public $ChunkOverlap;

    /**
     * @var array <p>表格类文档解析</p>
     */
    public $Columns;

    /**
     * @var array <p>带检索的索引列表</p>
     */
    public $Indexes;

    /**
     * @var integer <p>0：不生成文档摘要，1：生成文档概要。默认0，当取1时，GenParaSummary必须也为1</p>
     */
    public $GenDocSummary;

    /**
     * @var integer <p>0：不生成段落摘要，1：生成段落概要。默认0</p>
     */
    public $GenParaSummary;

    /**
     * @var integer <p>0：不开启图片理解，1：开启图片理解。默认1</p><p>取值范围：[1, 10000]</p><p>默认值：1</p>
     */
    public $EnableImageUnderstanding;

    /**
     * @param integer $ChunkType <p>切片类型  0:自定义切片，1：智能切片</p>
     * @param integer $MaxChunkSize <p>/智能切片：最小值 1000，默认 4800 自定义切片：正整数即可,默认值 1000</p>
     * @param array $Delimiters <p>切片分隔符,自定义切片使用：默认值为：[&quot;\n\n&quot;, &quot;\n&quot;, &quot;。&quot;, &quot;！&quot;, &quot;？&quot;, &quot;，&quot;, &quot;&quot;]</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ChunkOverlap <p>自定义切片使用:默认0 可重叠字符长度</p>
     * @param array $Columns <p>表格类文档解析</p>
     * @param array $Indexes <p>带检索的索引列表</p>
     * @param integer $GenDocSummary <p>0：不生成文档摘要，1：生成文档概要。默认0，当取1时，GenParaSummary必须也为1</p>
     * @param integer $GenParaSummary <p>0：不生成段落摘要，1：生成段落概要。默认0</p>
     * @param integer $EnableImageUnderstanding <p>0：不开启图片理解，1：开启图片理解。默认1</p><p>取值范围：[1, 10000]</p><p>默认值：1</p>
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
        if (array_key_exists("ChunkType",$param) and $param["ChunkType"] !== null) {
            $this->ChunkType = $param["ChunkType"];
        }

        if (array_key_exists("MaxChunkSize",$param) and $param["MaxChunkSize"] !== null) {
            $this->MaxChunkSize = $param["MaxChunkSize"];
        }

        if (array_key_exists("Delimiters",$param) and $param["Delimiters"] !== null) {
            $this->Delimiters = $param["Delimiters"];
        }

        if (array_key_exists("ChunkOverlap",$param) and $param["ChunkOverlap"] !== null) {
            $this->ChunkOverlap = $param["ChunkOverlap"];
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = [];
            foreach ($param["Columns"] as $key => $value){
                $obj = new ColumnInfo();
                $obj->deserialize($value);
                array_push($this->Columns, $obj);
            }
        }

        if (array_key_exists("Indexes",$param) and $param["Indexes"] !== null) {
            $this->Indexes = $param["Indexes"];
        }

        if (array_key_exists("GenDocSummary",$param) and $param["GenDocSummary"] !== null) {
            $this->GenDocSummary = $param["GenDocSummary"];
        }

        if (array_key_exists("GenParaSummary",$param) and $param["GenParaSummary"] !== null) {
            $this->GenParaSummary = $param["GenParaSummary"];
        }

        if (array_key_exists("EnableImageUnderstanding",$param) and $param["EnableImageUnderstanding"] !== null) {
            $this->EnableImageUnderstanding = $param["EnableImageUnderstanding"];
        }
    }
}
