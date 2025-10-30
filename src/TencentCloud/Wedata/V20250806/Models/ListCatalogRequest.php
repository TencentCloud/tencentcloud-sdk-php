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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListCatalog请求参数结构体
 *
 * @method integer getPageNumber() 获取页码，从1开始
 * @method void setPageNumber(integer $PageNumber) 设置页码，从1开始
 * @method integer getPageSize() 获取分页大小，最大500
 * @method void setPageSize(integer $PageSize) 设置分页大小，最大500
 * @method string getParentCatalogId() 获取父目录ID
 * @method void setParentCatalogId(string $ParentCatalogId) 设置父目录ID
 */
class ListCatalogRequest extends AbstractModel
{
    /**
     * @var integer 页码，从1开始
     */
    public $PageNumber;

    /**
     * @var integer 分页大小，最大500
     */
    public $PageSize;

    /**
     * @var string 父目录ID
     */
    public $ParentCatalogId;

    /**
     * @param integer $PageNumber 页码，从1开始
     * @param integer $PageSize 分页大小，最大500
     * @param string $ParentCatalogId 父目录ID
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ParentCatalogId",$param) and $param["ParentCatalogId"] !== null) {
            $this->ParentCatalogId = $param["ParentCatalogId"];
        }
    }
}
