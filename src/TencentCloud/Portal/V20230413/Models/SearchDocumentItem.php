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
namespace TencentCloud\Portal\V20230413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 搜索文档结果
 *
 * @method string getUrl() 获取<p>文档URL</p>
 * @method void setUrl(string $Url) 设置<p>文档URL</p>
 * @method string getTitle() 获取<p>文档标题</p>
 * @method void setTitle(string $Title) 设置<p>文档标题</p>
 * @method string getProductName() 获取<p>产品名称</p>
 * @method void setProductName(string $ProductName) 设置<p>产品名称</p>
 * @method string getSnippet() 获取<p>文档片段</p>
 * @method void setSnippet(string $Snippet) 设置<p>文档片段</p>
 */
class SearchDocumentItem extends AbstractModel
{
    /**
     * @var string <p>文档URL</p>
     */
    public $Url;

    /**
     * @var string <p>文档标题</p>
     */
    public $Title;

    /**
     * @var string <p>产品名称</p>
     */
    public $ProductName;

    /**
     * @var string <p>文档片段</p>
     */
    public $Snippet;

    /**
     * @param string $Url <p>文档URL</p>
     * @param string $Title <p>文档标题</p>
     * @param string $ProductName <p>产品名称</p>
     * @param string $Snippet <p>文档片段</p>
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("Snippet",$param) and $param["Snippet"] !== null) {
            $this->Snippet = $param["Snippet"];
        }
    }
}
