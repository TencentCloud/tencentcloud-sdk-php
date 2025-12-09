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
 * @method integer getChunkType() 获取切片类型  0:自定义切片，1：智能切片
 * @method void setChunkType(integer $ChunkType) 设置切片类型  0:自定义切片，1：智能切片
 * @method integer getMaxChunkSize() 获取/智能切片：最小值 1000，默认 4800 自定义切片：正整数即可,默认值 1000
 * @method void setMaxChunkSize(integer $MaxChunkSize) 设置/智能切片：最小值 1000，默认 4800 自定义切片：正整数即可,默认值 1000
 * @method array getDelimiters() 获取 切片分隔符,自定义切片使用：默认值为：["\n\n", "\n", "。", "！", "？", "，", ""]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDelimiters(array $Delimiters) 设置 切片分隔符,自定义切片使用：默认值为：["\n\n", "\n", "。", "！", "？", "，", ""]
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getChunkOverlap() 获取自定义切片使用:默认0 可重叠字符长度
 * @method void setChunkOverlap(integer $ChunkOverlap) 设置自定义切片使用:默认0 可重叠字符长度
 * @method array getColumns() 获取表格类文档解析
 * @method void setColumns(array $Columns) 设置表格类文档解析
 * @method array getIndexes() 获取带检索的索引列表
 * @method void setIndexes(array $Indexes) 设置带检索的索引列表
 * @method integer getGenDocSummary() 获取0：不生成文档摘要，1：生成文档概要。默认0，当取1时，GenParaSummary必须也为1
 * @method void setGenDocSummary(integer $GenDocSummary) 设置0：不生成文档摘要，1：生成文档概要。默认0，当取1时，GenParaSummary必须也为1
 * @method integer getGenParaSummary() 获取0：不生成段落摘要，1：生成段落概要。默认0
 * @method void setGenParaSummary(integer $GenParaSummary) 设置0：不生成段落摘要，1：生成段落概要。默认0
 */
class KnowledgeTaskConfig extends AbstractModel
{
    /**
     * @var integer 切片类型  0:自定义切片，1：智能切片
     */
    public $ChunkType;

    /**
     * @var integer /智能切片：最小值 1000，默认 4800 自定义切片：正整数即可,默认值 1000
     */
    public $MaxChunkSize;

    /**
     * @var array  切片分隔符,自定义切片使用：默认值为：["\n\n", "\n", "。", "！", "？", "，", ""]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Delimiters;

    /**
     * @var integer 自定义切片使用:默认0 可重叠字符长度
     */
    public $ChunkOverlap;

    /**
     * @var array 表格类文档解析
     */
    public $Columns;

    /**
     * @var array 带检索的索引列表
     */
    public $Indexes;

    /**
     * @var integer 0：不生成文档摘要，1：生成文档概要。默认0，当取1时，GenParaSummary必须也为1
     */
    public $GenDocSummary;

    /**
     * @var integer 0：不生成段落摘要，1：生成段落概要。默认0
     */
    public $GenParaSummary;

    /**
     * @param integer $ChunkType 切片类型  0:自定义切片，1：智能切片
     * @param integer $MaxChunkSize /智能切片：最小值 1000，默认 4800 自定义切片：正整数即可,默认值 1000
     * @param array $Delimiters  切片分隔符,自定义切片使用：默认值为：["\n\n", "\n", "。", "！", "？", "，", ""]
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ChunkOverlap 自定义切片使用:默认0 可重叠字符长度
     * @param array $Columns 表格类文档解析
     * @param array $Indexes 带检索的索引列表
     * @param integer $GenDocSummary 0：不生成文档摘要，1：生成文档概要。默认0，当取1时，GenParaSummary必须也为1
     * @param integer $GenParaSummary 0：不生成段落摘要，1：生成段落概要。默认0
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
    }
}
