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
 * 搜索数据的集合
 *
 * @method string getDocumentSetId() 获取文件id
 * @method void setDocumentSetId(string $DocumentSetId) 设置文件id
 * @method string getDocumentSetName() 获取文件名
 * @method void setDocumentSetName(string $DocumentSetName) 设置文件名
 * @method string getTextPrefix() 获取文件内容前 200个字符。
 * @method void setTextPrefix(string $TextPrefix) 设置文件内容前 200个字符。
 * @method KnowledgeSplitterPreprocess getSplitterPreprocess() 获取文件拆分信息
 * @method void setSplitterPreprocess(KnowledgeSplitterPreprocess $SplitterPreprocess) 设置文件拆分信息
 * @method QureyKnowledgeDocumentSetInfo getDocumentSetInfo() 获取文件详情
 * @method void setDocumentSetInfo(QureyKnowledgeDocumentSetInfo $DocumentSetInfo) 设置文件详情
 * @method string getFileTitle() 获取文件标题
 * @method void setFileTitle(string $FileTitle) 设置文件标题
 * @method string getFileMetaData() 获取文件元信息，必须为jsonstring
 * @method void setFileMetaData(string $FileMetaData) 设置文件元信息，必须为jsonstring
 * @method string getName() 获取name
 * @method void setName(string $Name) 设置name
 * @method string getAuthor() 获取作者
 * @method void setAuthor(string $Author) 设置作者
 */
class QureyKnowledgeDocumentSet extends AbstractModel
{
    /**
     * @var string 文件id
     */
    public $DocumentSetId;

    /**
     * @var string 文件名
     */
    public $DocumentSetName;

    /**
     * @var string 文件内容前 200个字符。
     */
    public $TextPrefix;

    /**
     * @var KnowledgeSplitterPreprocess 文件拆分信息
     */
    public $SplitterPreprocess;

    /**
     * @var QureyKnowledgeDocumentSetInfo 文件详情
     */
    public $DocumentSetInfo;

    /**
     * @var string 文件标题
     */
    public $FileTitle;

    /**
     * @var string 文件元信息，必须为jsonstring
     */
    public $FileMetaData;

    /**
     * @var string name
     */
    public $Name;

    /**
     * @var string 作者
     */
    public $Author;

    /**
     * @param string $DocumentSetId 文件id
     * @param string $DocumentSetName 文件名
     * @param string $TextPrefix 文件内容前 200个字符。
     * @param KnowledgeSplitterPreprocess $SplitterPreprocess 文件拆分信息
     * @param QureyKnowledgeDocumentSetInfo $DocumentSetInfo 文件详情
     * @param string $FileTitle 文件标题
     * @param string $FileMetaData 文件元信息，必须为jsonstring
     * @param string $Name name
     * @param string $Author 作者
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

        if (array_key_exists("TextPrefix",$param) and $param["TextPrefix"] !== null) {
            $this->TextPrefix = $param["TextPrefix"];
        }

        if (array_key_exists("SplitterPreprocess",$param) and $param["SplitterPreprocess"] !== null) {
            $this->SplitterPreprocess = new KnowledgeSplitterPreprocess();
            $this->SplitterPreprocess->deserialize($param["SplitterPreprocess"]);
        }

        if (array_key_exists("DocumentSetInfo",$param) and $param["DocumentSetInfo"] !== null) {
            $this->DocumentSetInfo = new QureyKnowledgeDocumentSetInfo();
            $this->DocumentSetInfo->deserialize($param["DocumentSetInfo"]);
        }

        if (array_key_exists("FileTitle",$param) and $param["FileTitle"] !== null) {
            $this->FileTitle = $param["FileTitle"];
        }

        if (array_key_exists("FileMetaData",$param) and $param["FileMetaData"] !== null) {
            $this->FileMetaData = $param["FileMetaData"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Author",$param) and $param["Author"] !== null) {
            $this->Author = $param["Author"];
        }
    }
}
