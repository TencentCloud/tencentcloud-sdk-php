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
namespace TencentCloud\Lowcode\V20210108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文档信息
 *
 * @method string getDocumentSetId() 获取文档id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocumentSetId(string $DocumentSetId) 设置文档id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDocumentSetName() 获取文档名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocumentSetName(string $DocumentSetName) 设置文档名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getText() 获取文件完整内容。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(string $Text) 设置文件完整内容。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTextPrefix() 获取文件内容前 200个字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTextPrefix(string $TextPrefix) 设置文件内容前 200个字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method KnowledgeDocumentSetInfo getDocumentSetInfo() 获取文件详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocumentSetInfo(KnowledgeDocumentSetInfo $DocumentSetInfo) 设置文件详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method KnowledgeSplitterPreprocess getSplitterPreprocess() 获取文件拆分信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSplitterPreprocess(KnowledgeSplitterPreprocess $SplitterPreprocess) 设置文件拆分信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取未使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置未使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileTitle() 获取文档标题
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileTitle(string $FileTitle) 设置文档标题
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileMetaData() 获取文档元信息，必须为jsonstring
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileMetaData(string $FileMetaData) 设置文档元信息，必须为jsonstring
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthor() 获取作者
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthor(string $Author) 设置作者
注意：此字段可能返回 null，表示取不到有效值。
 */
class KnowledgeDocumentSet extends AbstractModel
{
    /**
     * @var string 文档id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DocumentSetId;

    /**
     * @var string 文档名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DocumentSetName;

    /**
     * @var string 文件完整内容。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var string 文件内容前 200个字符。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TextPrefix;

    /**
     * @var KnowledgeDocumentSetInfo 文件详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DocumentSetInfo;

    /**
     * @var KnowledgeSplitterPreprocess 文件拆分信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SplitterPreprocess;

    /**
     * @var string 未使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 文档标题
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileTitle;

    /**
     * @var string 文档元信息，必须为jsonstring
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileMetaData;

    /**
     * @var string 作者
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Author;

    /**
     * @param string $DocumentSetId 文档id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DocumentSetName 文档名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Text 文件完整内容。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TextPrefix 文件内容前 200个字符。
注意：此字段可能返回 null，表示取不到有效值。
     * @param KnowledgeDocumentSetInfo $DocumentSetInfo 文件详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param KnowledgeSplitterPreprocess $SplitterPreprocess 文件拆分信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 未使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileTitle 文档标题
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileMetaData 文档元信息，必须为jsonstring
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Author 作者
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
        if (array_key_exists("DocumentSetId",$param) and $param["DocumentSetId"] !== null) {
            $this->DocumentSetId = $param["DocumentSetId"];
        }

        if (array_key_exists("DocumentSetName",$param) and $param["DocumentSetName"] !== null) {
            $this->DocumentSetName = $param["DocumentSetName"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("TextPrefix",$param) and $param["TextPrefix"] !== null) {
            $this->TextPrefix = $param["TextPrefix"];
        }

        if (array_key_exists("DocumentSetInfo",$param) and $param["DocumentSetInfo"] !== null) {
            $this->DocumentSetInfo = new KnowledgeDocumentSetInfo();
            $this->DocumentSetInfo->deserialize($param["DocumentSetInfo"]);
        }

        if (array_key_exists("SplitterPreprocess",$param) and $param["SplitterPreprocess"] !== null) {
            $this->SplitterPreprocess = new KnowledgeSplitterPreprocess();
            $this->SplitterPreprocess->deserialize($param["SplitterPreprocess"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("FileTitle",$param) and $param["FileTitle"] !== null) {
            $this->FileTitle = $param["FileTitle"];
        }

        if (array_key_exists("FileMetaData",$param) and $param["FileMetaData"] !== null) {
            $this->FileMetaData = $param["FileMetaData"];
        }

        if (array_key_exists("Author",$param) and $param["Author"] !== null) {
            $this->Author = $param["Author"];
        }
    }
}
