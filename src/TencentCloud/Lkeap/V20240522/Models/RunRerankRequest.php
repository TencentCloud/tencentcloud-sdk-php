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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RunRerank请求参数结构体
 *
 * @method string getQuery() 获取说明：查询内容
备注：用于匹配的query
 * @method void setQuery(string $Query) 设置说明：查询内容
备注：用于匹配的query
 * @method array getDocs() 获取说明：文档列表
备注：最多60个，Query字段和Docs字段的总长度上限为2000字符
 * @method void setDocs(array $Docs) 设置说明：文档列表
备注：最多60个，Query字段和Docs字段的总长度上限为2000字符
 * @method string getModel() 获取说明：模型名称
备注：仅一个模型可选
默认值：lke-reranker-base
 * @method void setModel(string $Model) 设置说明：模型名称
备注：仅一个模型可选
默认值：lke-reranker-base
 */
class RunRerankRequest extends AbstractModel
{
    /**
     * @var string 说明：查询内容
备注：用于匹配的query
     */
    public $Query;

    /**
     * @var array 说明：文档列表
备注：最多60个，Query字段和Docs字段的总长度上限为2000字符
     */
    public $Docs;

    /**
     * @var string 说明：模型名称
备注：仅一个模型可选
默认值：lke-reranker-base
     */
    public $Model;

    /**
     * @param string $Query 说明：查询内容
备注：用于匹配的query
     * @param array $Docs 说明：文档列表
备注：最多60个，Query字段和Docs字段的总长度上限为2000字符
     * @param string $Model 说明：模型名称
备注：仅一个模型可选
默认值：lke-reranker-base
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
        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Docs",$param) and $param["Docs"] !== null) {
            $this->Docs = $param["Docs"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }
    }
}
