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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRumLogExportsV2请求参数结构体
 *
 * @method integer getPageSize() 获取<p>Page size</p>
 * @method void setPageSize(integer $PageSize) 设置<p>Page size</p>
 * @method integer getPageNum() 获取<p>Page number</p>
 * @method void setPageNum(integer $PageNum) 设置<p>Page number</p>
 * @method integer getID() 获取<p>Project ID</p>
 * @method void setID(integer $ID) 设置<p>Project ID</p>
 */
class DescribeRumLogExportsV2Request extends AbstractModel
{
    /**
     * @var integer <p>Page size</p>
     */
    public $PageSize;

    /**
     * @var integer <p>Page number</p>
     */
    public $PageNum;

    /**
     * @var integer <p>Project ID</p>
     */
    public $ID;

    /**
     * @param integer $PageSize <p>Page size</p>
     * @param integer $PageNum <p>Page number</p>
     * @param integer $ID <p>Project ID</p>
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
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }
    }
}
