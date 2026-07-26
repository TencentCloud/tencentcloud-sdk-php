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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTimerTaskSummaryList请求参数结构体
 *
 * @method array getFilterList() 获取查询条件
 * @method void setFilterList(array $FilterList) 设置查询条件
 * @method integer getPageNumber() 获取页码
 * @method void setPageNumber(integer $PageNumber) 设置页码
 * @method integer getPageSize() 获取页大小
 * @method void setPageSize(integer $PageSize) 设置页大小
 * @method string getQuery() 获取查询关键字
 * @method void setQuery(string $Query) 设置查询关键字
 * @method string getSpaceId() 获取空间ID
 * @method void setSpaceId(string $SpaceId) 设置空间ID
 * @method string getLoginSubAccountUin() 获取<p>子用户Uin</p>
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) 设置<p>子用户Uin</p>
 * @method string getLoginUin() 获取<p>主用户Uin</p>
 * @method void setLoginUin(string $LoginUin) 设置<p>主用户Uin</p>
 */
class DescribeTimerTaskSummaryListRequest extends AbstractModel
{
    /**
     * @var array 查询条件
     */
    public $FilterList;

    /**
     * @var integer 页码
     */
    public $PageNumber;

    /**
     * @var integer 页大小
     */
    public $PageSize;

    /**
     * @var string 查询关键字
     */
    public $Query;

    /**
     * @var string 空间ID
     */
    public $SpaceId;

    /**
     * @var string <p>子用户Uin</p>
     */
    public $LoginSubAccountUin;

    /**
     * @var string <p>主用户Uin</p>
     */
    public $LoginUin;

    /**
     * @param array $FilterList 查询条件
     * @param integer $PageNumber 页码
     * @param integer $PageSize 页大小
     * @param string $Query 查询关键字
     * @param string $SpaceId 空间ID
     * @param string $LoginSubAccountUin <p>子用户Uin</p>
     * @param string $LoginUin <p>主用户Uin</p>
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
        if (array_key_exists("FilterList",$param) and $param["FilterList"] !== null) {
            $this->FilterList = [];
            foreach ($param["FilterList"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->FilterList, $obj);
            }
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }
    }
}
