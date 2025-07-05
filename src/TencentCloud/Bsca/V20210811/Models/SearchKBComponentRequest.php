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
namespace TencentCloud\Bsca\V20210811\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchKBComponent请求参数结构体
 *
 * @method string getQuery() 获取需要搜索的组件名
 * @method void setQuery(string $Query) 设置需要搜索的组件名
 * @method string getProtocol() 获取需要搜索的组件类型
 * @method void setProtocol(string $Protocol) 设置需要搜索的组件类型
 * @method integer getPageNumber() 获取分页参数，从 0 开始
 * @method void setPageNumber(integer $PageNumber) 设置分页参数，从 0 开始
 * @method integer getPageSize() 获取分页参数，设置每页返回的结果数量
 * @method void setPageSize(integer $PageSize) 设置分页参数，设置每页返回的结果数量
 */
class SearchKBComponentRequest extends AbstractModel
{
    /**
     * @var string 需要搜索的组件名
     */
    public $Query;

    /**
     * @var string 需要搜索的组件类型
     */
    public $Protocol;

    /**
     * @var integer 分页参数，从 0 开始
     */
    public $PageNumber;

    /**
     * @var integer 分页参数，设置每页返回的结果数量
     */
    public $PageSize;

    /**
     * @param string $Query 需要搜索的组件名
     * @param string $Protocol 需要搜索的组件类型
     * @param integer $PageNumber 分页参数，从 0 开始
     * @param integer $PageSize 分页参数，设置每页返回的结果数量
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

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
