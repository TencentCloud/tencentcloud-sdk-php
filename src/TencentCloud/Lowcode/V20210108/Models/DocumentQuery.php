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
 * 删除文档时查询入参
 *
 * @method array getDocumentSetId() 获取文件ids
 * @method void setDocumentSetId(array $DocumentSetId) 设置文件ids
 * @method array getDocumentSetName() 获取文件名集合
 * @method void setDocumentSetName(array $DocumentSetName) 设置文件名集合
 * @method string getFilter() 获取使用创建 CollectionView 指定的 Filter 索引的字段设置查询过滤表达式
 * @method void setFilter(string $Filter) 设置使用创建 CollectionView 指定的 Filter 索引的字段设置查询过滤表达式
 */
class DocumentQuery extends AbstractModel
{
    /**
     * @var array 文件ids
     */
    public $DocumentSetId;

    /**
     * @var array 文件名集合
     */
    public $DocumentSetName;

    /**
     * @var string 使用创建 CollectionView 指定的 Filter 索引的字段设置查询过滤表达式
     */
    public $Filter;

    /**
     * @param array $DocumentSetId 文件ids
     * @param array $DocumentSetName 文件名集合
     * @param string $Filter 使用创建 CollectionView 指定的 Filter 索引的字段设置查询过滤表达式
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

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }
    }
}
