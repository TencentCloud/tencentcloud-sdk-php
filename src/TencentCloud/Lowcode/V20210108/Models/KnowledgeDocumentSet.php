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
namespace TencentCloud\Lowcode\V20210108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文档信息
 *
 * @method string getDocumentSetId() 获取文档id
 * @method void setDocumentSetId(string $DocumentSetId) 设置文档id
 * @method string getDocumentSetName() 获取文档名
 * @method void setDocumentSetName(string $DocumentSetName) 设置文档名
 * @method string getText() 获取文件完整内容。
 * @method void setText(string $Text) 设置文件完整内容。
 * @method string getTextPrefix() 获取文件内容前 200个字符。
 * @method void setTextPrefix(string $TextPrefix) 设置文件内容前 200个字符。
 * @method KnowledgeDocumentSetInfo getDocumentSetInfo() 获取文件详情
 * @method void setDocumentSetInfo(KnowledgeDocumentSetInfo $DocumentSetInfo) 设置文件详情
 * @method KnowledgeSplitterPreprocess getSplitterPreprocess() 获取文件拆分信息
 * @method void setSplitterPreprocess(KnowledgeSplitterPreprocess $SplitterPreprocess) 设置文件拆分信息
 * @method string getName() 获取未使用
 * @method void setName(string $Name) 设置未使用
 * @method string getFileTitle() 获取文档标题
 * @method void setFileTitle(string $FileTitle) 设置文档标题
 * @method string getFileMetaData() 获取文档元信息，必须为jsonstring
 * @method void setFileMetaData(string $FileMetaData) 设置文档元信息，必须为jsonstring
 * @method string getAuthor() 获取作者
 * @method void setAuthor(string $Author) 设置作者
 * @method string getDocStatus() 获取上传文件状态
 * @method void setDocStatus(string $DocStatus) 设置上传文件状态
 * @method string getErrMsg() 获取文件上传失败的具体原因
 * @method void setErrMsg(string $ErrMsg) 设置文件上传失败的具体原因
 * @method string getFileId() 获取Cos存储文件ID
 * @method void setFileId(string $FileId) 设置Cos存储文件ID
 */
class KnowledgeDocumentSet extends AbstractModel
{
    /**
     * @var string 文档id
     */
    public $DocumentSetId;

    /**
     * @var string 文档名
     */
    public $DocumentSetName;

    /**
     * @var string 文件完整内容。
     */
    public $Text;

    /**
     * @var string 文件内容前 200个字符。
     */
    public $TextPrefix;

    /**
     * @var KnowledgeDocumentSetInfo 文件详情
     */
    public $DocumentSetInfo;

    /**
     * @var KnowledgeSplitterPreprocess 文件拆分信息
     */
    public $SplitterPreprocess;

    /**
     * @var string 未使用
     */
    public $Name;

    /**
     * @var string 文档标题
     */
    public $FileTitle;

    /**
     * @var string 文档元信息，必须为jsonstring
     */
    public $FileMetaData;

    /**
     * @var string 作者
     */
    public $Author;

    /**
     * @var string 上传文件状态
     */
    public $DocStatus;

    /**
     * @var string 文件上传失败的具体原因
     */
    public $ErrMsg;

    /**
     * @var string Cos存储文件ID
     */
    public $FileId;

    /**
     * @param string $DocumentSetId 文档id
     * @param string $DocumentSetName 文档名
     * @param string $Text 文件完整内容。
     * @param string $TextPrefix 文件内容前 200个字符。
     * @param KnowledgeDocumentSetInfo $DocumentSetInfo 文件详情
     * @param KnowledgeSplitterPreprocess $SplitterPreprocess 文件拆分信息
     * @param string $Name 未使用
     * @param string $FileTitle 文档标题
     * @param string $FileMetaData 文档元信息，必须为jsonstring
     * @param string $Author 作者
     * @param string $DocStatus 上传文件状态
     * @param string $ErrMsg 文件上传失败的具体原因
     * @param string $FileId Cos存储文件ID
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

        if (array_key_exists("DocStatus",$param) and $param["DocStatus"] !== null) {
            $this->DocStatus = $param["DocStatus"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }
    }
}
