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
namespace TencentCloud\Ams\V20200608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAmsList请求参数结构体
 *
 * @method string getPageToken() 获取页码
 * @method void setPageToken(string $PageToken) 设置页码
 * @method integer getLimit() 获取过滤条件
 * @method void setLimit(integer $Limit) 设置过滤条件
 * @method string getPageDirection() 获取查询方向
 * @method void setPageDirection(string $PageDirection) 设置查询方向
 * @method array getFilters() 获取过滤条件
 * @method void setFilters(array $Filters) 设置过滤条件
 */
class DescribeAmsListRequest extends AbstractModel
{
    /**
     * @var string 页码
     */
    public $PageToken;

    /**
     * @var integer 过滤条件
     */
    public $Limit;

    /**
     * @var string 查询方向
     */
    public $PageDirection;

    /**
     * @var array 过滤条件
     */
    public $Filters;

    /**
     * @param string $PageToken 页码
     * @param integer $Limit 过滤条件
     * @param string $PageDirection 查询方向
     * @param array $Filters 过滤条件
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
        if (array_key_exists("PageToken",$param) and $param["PageToken"] !== null) {
            $this->PageToken = $param["PageToken"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("PageDirection",$param) and $param["PageDirection"] !== null) {
            $this->PageDirection = $param["PageDirection"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
