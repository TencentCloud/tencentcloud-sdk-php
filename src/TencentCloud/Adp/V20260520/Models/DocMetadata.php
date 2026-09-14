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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文档元信息
 *
 * @method string getDocCharCount() 获取<p>文档字符数</p>
 * @method void setDocCharCount(string $DocCharCount) 设置<p>文档字符数</p>
 * @method string getFileName() 获取<p>文件名</p>
 * @method void setFileName(string $FileName) 设置<p>文件名</p>
 * @method string getFileSize() 获取<p>文件大小（字节）</p>
 * @method void setFileSize(string $FileSize) 设置<p>文件大小（字节）</p>
 * @method string getFileType() 获取<p>文件类型/扩展名</p>
 * @method void setFileType(string $FileType) 设置<p>文件类型/扩展名</p>
 * @method array getRefFieldNameList() 获取<p>元数据引用字段名列表（用于显示文档哪些分类和属性被设置为元数据）</p>
 * @method void setRefFieldNameList(array $RefFieldNameList) 设置<p>元数据引用字段名列表（用于显示文档哪些分类和属性被设置为元数据）</p>
 * @method string getSourceDesc() 获取<p>来源描述</p>
 * @method void setSourceDesc(string $SourceDesc) 设置<p>来源描述</p>
 * @method integer getSourceType() 获取<p>文档来源类型：1=本地上传，2=网页链接，3=COS 对接，4=外部导入<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>DOC_SOURCE_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>DOC_SOURCE_TYPE_LOCAL</td><td>1</td><td>本地上传</td></tr><tr><td>DOC_SOURCE_TYPE_URL</td><td>2</td><td>网页链接</td></tr><tr><td>DOC_SOURCE_TYPE_COS</td><td>3</td><td>COS 对接</td></tr><tr><td>DOC_SOURCE_TYPE_IMPORT</td><td>4</td><td>外部导入</td></tr></tbody></table></p>
 * @method void setSourceType(integer $SourceType) 设置<p>文档来源类型：1=本地上传，2=网页链接，3=COS 对接，4=外部导入<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>DOC_SOURCE_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>DOC_SOURCE_TYPE_LOCAL</td><td>1</td><td>本地上传</td></tr><tr><td>DOC_SOURCE_TYPE_URL</td><td>2</td><td>网页链接</td></tr><tr><td>DOC_SOURCE_TYPE_COS</td><td>3</td><td>COS 对接</td></tr><tr><td>DOC_SOURCE_TYPE_IMPORT</td><td>4</td><td>外部导入</td></tr></tbody></table></p>
 */
class DocMetadata extends AbstractModel
{
    /**
     * @var string <p>文档字符数</p>
     */
    public $DocCharCount;

    /**
     * @var string <p>文件名</p>
     */
    public $FileName;

    /**
     * @var string <p>文件大小（字节）</p>
     */
    public $FileSize;

    /**
     * @var string <p>文件类型/扩展名</p>
     */
    public $FileType;

    /**
     * @var array <p>元数据引用字段名列表（用于显示文档哪些分类和属性被设置为元数据）</p>
     */
    public $RefFieldNameList;

    /**
     * @var string <p>来源描述</p>
     */
    public $SourceDesc;

    /**
     * @var integer <p>文档来源类型：1=本地上传，2=网页链接，3=COS 对接，4=外部导入<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>DOC_SOURCE_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>DOC_SOURCE_TYPE_LOCAL</td><td>1</td><td>本地上传</td></tr><tr><td>DOC_SOURCE_TYPE_URL</td><td>2</td><td>网页链接</td></tr><tr><td>DOC_SOURCE_TYPE_COS</td><td>3</td><td>COS 对接</td></tr><tr><td>DOC_SOURCE_TYPE_IMPORT</td><td>4</td><td>外部导入</td></tr></tbody></table></p>
     */
    public $SourceType;

    /**
     * @param string $DocCharCount <p>文档字符数</p>
     * @param string $FileName <p>文件名</p>
     * @param string $FileSize <p>文件大小（字节）</p>
     * @param string $FileType <p>文件类型/扩展名</p>
     * @param array $RefFieldNameList <p>元数据引用字段名列表（用于显示文档哪些分类和属性被设置为元数据）</p>
     * @param string $SourceDesc <p>来源描述</p>
     * @param integer $SourceType <p>文档来源类型：1=本地上传，2=网页链接，3=COS 对接，4=外部导入<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>DOC_SOURCE_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>DOC_SOURCE_TYPE_LOCAL</td><td>1</td><td>本地上传</td></tr><tr><td>DOC_SOURCE_TYPE_URL</td><td>2</td><td>网页链接</td></tr><tr><td>DOC_SOURCE_TYPE_COS</td><td>3</td><td>COS 对接</td></tr><tr><td>DOC_SOURCE_TYPE_IMPORT</td><td>4</td><td>外部导入</td></tr></tbody></table></p>
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
        if (array_key_exists("DocCharCount",$param) and $param["DocCharCount"] !== null) {
            $this->DocCharCount = $param["DocCharCount"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("RefFieldNameList",$param) and $param["RefFieldNameList"] !== null) {
            $this->RefFieldNameList = $param["RefFieldNameList"];
        }

        if (array_key_exists("SourceDesc",$param) and $param["SourceDesc"] !== null) {
            $this->SourceDesc = $param["SourceDesc"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }
    }
}
