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
 * 聊天详情Refer
 *
 * @method string getId() 获取<p>id</p>
 * @method void setId(string $Id) 设置<p>id</p>
 * @method string getUrl() 获取<p>链接</p>
 * @method void setUrl(string $Url) 设置<p>链接</p>
 * @method integer getType() 获取<p>类型</p><p>枚举值：</p><ul><li>1： 问答</li><li>2： 文档片段</li><li>4： 联网检索到的内容</li></ul>
 * @method void setType(integer $Type) 设置<p>类型</p><p>枚举值：</p><ul><li>1： 问答</li><li>2： 文档片段</li><li>4： 联网检索到的内容</li></ul>
 * @method string getName() 获取<p>名称</p>
 * @method void setName(string $Name) 设置<p>名称</p>
 * @method string getDocId() 获取<p>来源文档ID</p>
 * @method void setDocId(string $DocId) 设置<p>来源文档ID</p>
 * @method string getKnowledgeName() 获取<p>知识库名称</p>
 * @method void setKnowledgeName(string $KnowledgeName) 设置<p>知识库名称</p>
 * @method string getKnowledgeBizId() 获取<p>知识库业务id</p>
 * @method void setKnowledgeBizId(string $KnowledgeBizId) 设置<p>知识库业务id</p>
 * @method string getDocBizId() 获取<p>文档业务id</p>
 * @method void setDocBizId(string $DocBizId) 设置<p>文档业务id</p>
 * @method string getQaBizId() 获取<p>问答业务id</p>
 * @method void setQaBizId(string $QaBizId) 设置<p>问答业务id</p>
 * @method integer getIndex() 获取<p>文档索引id</p>
 * @method void setIndex(integer $Index) 设置<p>文档索引id</p>
 */
class MsgRecordReference extends AbstractModel
{
    /**
     * @var string <p>id</p>
     */
    public $Id;

    /**
     * @var string <p>链接</p>
     */
    public $Url;

    /**
     * @var integer <p>类型</p><p>枚举值：</p><ul><li>1： 问答</li><li>2： 文档片段</li><li>4： 联网检索到的内容</li></ul>
     */
    public $Type;

    /**
     * @var string <p>名称</p>
     */
    public $Name;

    /**
     * @var string <p>来源文档ID</p>
     */
    public $DocId;

    /**
     * @var string <p>知识库名称</p>
     */
    public $KnowledgeName;

    /**
     * @var string <p>知识库业务id</p>
     */
    public $KnowledgeBizId;

    /**
     * @var string <p>文档业务id</p>
     */
    public $DocBizId;

    /**
     * @var string <p>问答业务id</p>
     */
    public $QaBizId;

    /**
     * @var integer <p>文档索引id</p>
     */
    public $Index;

    /**
     * @param string $Id <p>id</p>
     * @param string $Url <p>链接</p>
     * @param integer $Type <p>类型</p><p>枚举值：</p><ul><li>1： 问答</li><li>2： 文档片段</li><li>4： 联网检索到的内容</li></ul>
     * @param string $Name <p>名称</p>
     * @param string $DocId <p>来源文档ID</p>
     * @param string $KnowledgeName <p>知识库名称</p>
     * @param string $KnowledgeBizId <p>知识库业务id</p>
     * @param string $DocBizId <p>文档业务id</p>
     * @param string $QaBizId <p>问答业务id</p>
     * @param integer $Index <p>文档索引id</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DocId",$param) and $param["DocId"] !== null) {
            $this->DocId = $param["DocId"];
        }

        if (array_key_exists("KnowledgeName",$param) and $param["KnowledgeName"] !== null) {
            $this->KnowledgeName = $param["KnowledgeName"];
        }

        if (array_key_exists("KnowledgeBizId",$param) and $param["KnowledgeBizId"] !== null) {
            $this->KnowledgeBizId = $param["KnowledgeBizId"];
        }

        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }

        if (array_key_exists("QaBizId",$param) and $param["QaBizId"] !== null) {
            $this->QaBizId = $param["QaBizId"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }
    }
}
