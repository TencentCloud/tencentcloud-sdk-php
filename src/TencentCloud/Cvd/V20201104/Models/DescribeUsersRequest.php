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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUsers请求参数结构体
 *
 * @method string getKeyword() 获取<p>搜索关键字。</p>
 * @method void setKeyword(string $Keyword) 设置<p>搜索关键字。</p>
 * @method integer getPageNumber() 获取<p>页面编号。从1开始</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页面编号。从1开始</p>
 * @method integer getPageSize() 获取<p>页面大小。默认20，不超过100。</p>
 * @method void setPageSize(integer $PageSize) 设置<p>页面大小。默认20，不超过100。</p>
 * @method string getDepartmentId() 获取<p>部门ID。</p>
 * @method void setDepartmentId(string $DepartmentId) 设置<p>部门ID。</p>
 */
class DescribeUsersRequest extends AbstractModel
{
    /**
     * @var string <p>搜索关键字。</p>
     */
    public $Keyword;

    /**
     * @var integer <p>页面编号。从1开始</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>页面大小。默认20，不超过100。</p>
     */
    public $PageSize;

    /**
     * @var string <p>部门ID。</p>
     */
    public $DepartmentId;

    /**
     * @param string $Keyword <p>搜索关键字。</p>
     * @param integer $PageNumber <p>页面编号。从1开始</p>
     * @param integer $PageSize <p>页面大小。默认20，不超过100。</p>
     * @param string $DepartmentId <p>部门ID。</p>
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
        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("DepartmentId",$param) and $param["DepartmentId"] !== null) {
            $this->DepartmentId = $param["DepartmentId"];
        }
    }
}
