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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLiveWatermarks请求参数结构体
 *
 * @method string getName() 获取水印名称
 * @method void setName(string $Name) 设置水印名称
 * @method integer getPageNo() 获取分页的索引参数，从1开始
 * @method void setPageNo(integer $PageNo) 设置分页的索引参数，从1开始
 * @method integer getPageSize() 获取分页的大小参数，默认值500
 * @method void setPageSize(integer $PageSize) 设置分页的大小参数，默认值500
 */
class DescribeLiveWatermarksRequest extends AbstractModel
{
    /**
     * @var string 水印名称
     */
    public $Name;

    /**
     * @var integer 分页的索引参数，从1开始
     */
    public $PageNo;

    /**
     * @var integer 分页的大小参数，默认值500
     */
    public $PageSize;

    /**
     * @param string $Name 水印名称
     * @param integer $PageNo 分页的索引参数，从1开始
     * @param integer $PageSize 分页的大小参数，默认值500
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
