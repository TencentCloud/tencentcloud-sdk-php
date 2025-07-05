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
 * 知识库搜索文档信息
 *
 * @method string getCollectionViewName() 获取知识库名称
 * @method void setCollectionViewName(string $CollectionViewName) 设置知识库名称
 * @method string getDocSetId() 获取文档Id
 * @method void setDocSetId(string $DocSetId) 设置文档Id
 * @method string getDocSetName() 获取文档Name
 * @method void setDocSetName(string $DocSetName) 设置文档Name
 * @method string getDocType() 获取文档类型
 * @method void setDocType(string $DocType) 设置文档类型
 * @method string getFileTitle() 获取文档标题
 * @method void setFileTitle(string $FileTitle) 设置文档标题
 * @method string getFileMetaData() 获取文档元信息
 * @method void setFileMetaData(string $FileMetaData) 设置文档元信息
 * @method string getDocDesc() 获取文档描述
 * @method void setDocDesc(string $DocDesc) 设置文档描述
 * @method integer getFileSize() 获取文档大小
 * @method void setFileSize(integer $FileSize) 设置文档大小
 * @method string getFileId() 获取Cos存储文件ID
 * @method void setFileId(string $FileId) 设置Cos存储文件ID
 */
class SearchDocInfo extends AbstractModel
{
    /**
     * @var string 知识库名称
     */
    public $CollectionViewName;

    /**
     * @var string 文档Id
     */
    public $DocSetId;

    /**
     * @var string 文档Name
     */
    public $DocSetName;

    /**
     * @var string 文档类型
     */
    public $DocType;

    /**
     * @var string 文档标题
     */
    public $FileTitle;

    /**
     * @var string 文档元信息
     */
    public $FileMetaData;

    /**
     * @var string 文档描述
     */
    public $DocDesc;

    /**
     * @var integer 文档大小
     */
    public $FileSize;

    /**
     * @var string Cos存储文件ID
     */
    public $FileId;

    /**
     * @param string $CollectionViewName 知识库名称
     * @param string $DocSetId 文档Id
     * @param string $DocSetName 文档Name
     * @param string $DocType 文档类型
     * @param string $FileTitle 文档标题
     * @param string $FileMetaData 文档元信息
     * @param string $DocDesc 文档描述
     * @param integer $FileSize 文档大小
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
        if (array_key_exists("CollectionViewName",$param) and $param["CollectionViewName"] !== null) {
            $this->CollectionViewName = $param["CollectionViewName"];
        }

        if (array_key_exists("DocSetId",$param) and $param["DocSetId"] !== null) {
            $this->DocSetId = $param["DocSetId"];
        }

        if (array_key_exists("DocSetName",$param) and $param["DocSetName"] !== null) {
            $this->DocSetName = $param["DocSetName"];
        }

        if (array_key_exists("DocType",$param) and $param["DocType"] !== null) {
            $this->DocType = $param["DocType"];
        }

        if (array_key_exists("FileTitle",$param) and $param["FileTitle"] !== null) {
            $this->FileTitle = $param["FileTitle"];
        }

        if (array_key_exists("FileMetaData",$param) and $param["FileMetaData"] !== null) {
            $this->FileMetaData = $param["FileMetaData"];
        }

        if (array_key_exists("DocDesc",$param) and $param["DocDesc"] !== null) {
            $this->DocDesc = $param["DocDesc"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }
    }
}
