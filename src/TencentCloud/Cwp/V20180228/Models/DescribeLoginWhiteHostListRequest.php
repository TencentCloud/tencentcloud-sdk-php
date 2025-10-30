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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLoginWhiteHostList请求参数结构体
 *
 * @method integer getId() 获取白名单ID
 * @method void setId(integer $Id) 设置白名单ID
 * @method integer getLimit() 获取需要返回的数量，最大值为1000
 * @method void setLimit(integer $Limit) 设置需要返回的数量，最大值为1000
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method array getFilters() 获取过滤条件 <li>IpOrAlias - String - 是否必填：否 - 主机ip或别名筛选</li>
 * @method void setFilters(array $Filters) 设置过滤条件 <li>IpOrAlias - String - 是否必填：否 - 主机ip或别名筛选</li>
 */
class DescribeLoginWhiteHostListRequest extends AbstractModel
{
    /**
     * @var integer 白名单ID
     */
    public $Id;

    /**
     * @var integer 需要返回的数量，最大值为1000
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var array 过滤条件 <li>IpOrAlias - String - 是否必填：否 - 主机ip或别名筛选</li>
     */
    public $Filters;

    /**
     * @param integer $Id 白名单ID
     * @param integer $Limit 需要返回的数量，最大值为1000
     * @param integer $Offset 偏移量，默认为0。
     * @param array $Filters 过滤条件 <li>IpOrAlias - String - 是否必填：否 - 主机ip或别名筛选</li>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
