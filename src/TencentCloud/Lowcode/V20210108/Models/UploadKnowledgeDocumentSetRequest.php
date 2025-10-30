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
 * UploadKnowledgeDocumentSet请求参数结构体
 *
 * @method string getEnvId() 获取环境ID
 * @method void setEnvId(string $EnvId) 设置环境ID
 * @method string getCollectionView() 获取知识库标识
 * @method void setCollectionView(string $CollectionView) 设置知识库标识
 * @method string getFileName() 获取状态;ENABLED启用；NOT_ENABLED不启用
 * @method void setFileName(string $FileName) 设置状态;ENABLED启用；NOT_ENABLED不启用
 * @method string getCosUrl() 获取腾讯云文件存储位置的可读地址
 * @method void setCosUrl(string $CosUrl) 设置腾讯云文件存储位置的可读地址
 * @method string getDocumentType() 获取文件类型，例如: .docx, .md
 * @method void setDocumentType(string $DocumentType) 设置文件类型，例如: .docx, .md
 * @method string getDocumentDesc() 获取对文件的描述
 * @method void setDocumentDesc(string $DocumentDesc) 设置对文件的描述
 * @method string getFileTitle() 获取文件标题
 * @method void setFileTitle(string $FileTitle) 设置文件标题
 * @method string getFileMetaData() 获取文件元信息，为jsonstring
 * @method void setFileMetaData(string $FileMetaData) 设置文件元信息，为jsonstring
 * @method string getDocumentSetId() 获取文件id
 * @method void setDocumentSetId(string $DocumentSetId) 设置文件id
 * @method string getDelimiter() 获取使用 regex 分割文档
 * @method void setDelimiter(string $Delimiter) 设置使用 regex 分割文档
 * @method string getFileId() 获取Cos存储文件ID
 * @method void setFileId(string $FileId) 设置Cos存储文件ID
 */
class UploadKnowledgeDocumentSetRequest extends AbstractModel
{
    /**
     * @var string 环境ID
     */
    public $EnvId;

    /**
     * @var string 知识库标识
     */
    public $CollectionView;

    /**
     * @var string 状态;ENABLED启用；NOT_ENABLED不启用
     */
    public $FileName;

    /**
     * @var string 腾讯云文件存储位置的可读地址
     */
    public $CosUrl;

    /**
     * @var string 文件类型，例如: .docx, .md
     */
    public $DocumentType;

    /**
     * @var string 对文件的描述
     */
    public $DocumentDesc;

    /**
     * @var string 文件标题
     */
    public $FileTitle;

    /**
     * @var string 文件元信息，为jsonstring
     */
    public $FileMetaData;

    /**
     * @var string 文件id
     */
    public $DocumentSetId;

    /**
     * @var string 使用 regex 分割文档
     */
    public $Delimiter;

    /**
     * @var string Cos存储文件ID
     */
    public $FileId;

    /**
     * @param string $EnvId 环境ID
     * @param string $CollectionView 知识库标识
     * @param string $FileName 状态;ENABLED启用；NOT_ENABLED不启用
     * @param string $CosUrl 腾讯云文件存储位置的可读地址
     * @param string $DocumentType 文件类型，例如: .docx, .md
     * @param string $DocumentDesc 对文件的描述
     * @param string $FileTitle 文件标题
     * @param string $FileMetaData 文件元信息，为jsonstring
     * @param string $DocumentSetId 文件id
     * @param string $Delimiter 使用 regex 分割文档
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("CollectionView",$param) and $param["CollectionView"] !== null) {
            $this->CollectionView = $param["CollectionView"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("CosUrl",$param) and $param["CosUrl"] !== null) {
            $this->CosUrl = $param["CosUrl"];
        }

        if (array_key_exists("DocumentType",$param) and $param["DocumentType"] !== null) {
            $this->DocumentType = $param["DocumentType"];
        }

        if (array_key_exists("DocumentDesc",$param) and $param["DocumentDesc"] !== null) {
            $this->DocumentDesc = $param["DocumentDesc"];
        }

        if (array_key_exists("FileTitle",$param) and $param["FileTitle"] !== null) {
            $this->FileTitle = $param["FileTitle"];
        }

        if (array_key_exists("FileMetaData",$param) and $param["FileMetaData"] !== null) {
            $this->FileMetaData = $param["FileMetaData"];
        }

        if (array_key_exists("DocumentSetId",$param) and $param["DocumentSetId"] !== null) {
            $this->DocumentSetId = $param["DocumentSetId"];
        }

        if (array_key_exists("Delimiter",$param) and $param["Delimiter"] !== null) {
            $this->Delimiter = $param["Delimiter"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }
    }
}
