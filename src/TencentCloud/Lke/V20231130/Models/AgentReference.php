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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Agent中的参考来源
 *
 * @method string getDocId() 获取<p>来源文档ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocId(string $DocId) 设置<p>来源文档ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getId() 获取<p>id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置<p>id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取<p>类型</p><p>枚举值：</p><ul><li>1： 问答</li><li>2： 文档片段</li><li>4： 联网检索到的内容</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置<p>类型</p><p>枚举值：</p><ul><li>1： 问答</li><li>2： 文档片段</li><li>4： 联网检索到的内容</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取<p>链接</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置<p>链接</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDocBizId() 获取<p>文档业务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocBizId(string $DocBizId) 设置<p>文档业务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDocName() 获取<p>文档名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocName(string $DocName) 设置<p>文档名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQaBizId() 获取<p>问答业务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQaBizId(string $QaBizId) 设置<p>问答业务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIndex() 获取<p>搜索引擎索引</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndex(integer $Index) 设置<p>搜索引擎索引</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTitle() 获取<p>标题</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTitle(string $Title) 设置<p>标题</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKnowledgeName() 获取<p>知识库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKnowledgeName(string $KnowledgeName) 设置<p>知识库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKnowledgeBizId() 获取<p>知识库标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKnowledgeBizId(string $KnowledgeBizId) 设置<p>知识库标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AgentReference extends AbstractModel
{
    /**
     * @var string <p>来源文档ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DocId;

    /**
     * @var string <p>id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string <p>名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer <p>类型</p><p>枚举值：</p><ul><li>1： 问答</li><li>2： 文档片段</li><li>4： 联网检索到的内容</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string <p>链接</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var string <p>文档业务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DocBizId;

    /**
     * @var string <p>文档名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DocName;

    /**
     * @var string <p>问答业务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QaBizId;

    /**
     * @var integer <p>搜索引擎索引</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Index;

    /**
     * @var string <p>标题</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Title;

    /**
     * @var string <p>知识库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KnowledgeName;

    /**
     * @var string <p>知识库标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KnowledgeBizId;

    /**
     * @param string $DocId <p>来源文档ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Id <p>id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type <p>类型</p><p>枚举值：</p><ul><li>1： 问答</li><li>2： 文档片段</li><li>4： 联网检索到的内容</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url <p>链接</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DocBizId <p>文档业务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DocName <p>文档名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QaBizId <p>问答业务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Index <p>搜索引擎索引</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Title <p>标题</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KnowledgeName <p>知识库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KnowledgeBizId <p>知识库标识</p>
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
        if (array_key_exists("DocId",$param) and $param["DocId"] !== null) {
            $this->DocId = $param["DocId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }

        if (array_key_exists("DocName",$param) and $param["DocName"] !== null) {
            $this->DocName = $param["DocName"];
        }

        if (array_key_exists("QaBizId",$param) and $param["QaBizId"] !== null) {
            $this->QaBizId = $param["QaBizId"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("KnowledgeName",$param) and $param["KnowledgeName"] !== null) {
            $this->KnowledgeName = $param["KnowledgeName"];
        }

        if (array_key_exists("KnowledgeBizId",$param) and $param["KnowledgeBizId"] !== null) {
            $this->KnowledgeBizId = $param["KnowledgeBizId"];
        }
    }
}
