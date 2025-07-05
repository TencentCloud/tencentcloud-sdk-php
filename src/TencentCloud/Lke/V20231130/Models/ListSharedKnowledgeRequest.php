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
 * ListSharedKnowledge请求参数结构体
 *
 * @method integer getPageNumber() 获取分页序号，编码从1开始
 * @method void setPageNumber(integer $PageNumber) 设置分页序号，编码从1开始
 * @method integer getPageSize() 获取分页大小，有效范围为[1,200]
 * @method void setPageSize(integer $PageSize) 设置分页大小，有效范围为[1,200]
 * @method string getKeyword() 获取搜索关键字
 * @method void setKeyword(string $Keyword) 设置搜索关键字
 */
class ListSharedKnowledgeRequest extends AbstractModel
{
    /**
     * @var integer 分页序号，编码从1开始
     */
    public $PageNumber;

    /**
     * @var integer 分页大小，有效范围为[1,200]
     */
    public $PageSize;

    /**
     * @var string 搜索关键字
     */
    public $Keyword;

    /**
     * @param integer $PageNumber 分页序号，编码从1开始
     * @param integer $PageSize 分页大小，有效范围为[1,200]
     * @param string $Keyword 搜索关键字
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

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
