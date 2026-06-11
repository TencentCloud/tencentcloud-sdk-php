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
 * @method integer getId() 获取<p>白名单ID</p>
 * @method void setId(integer $Id) 设置<p>白名单ID</p>
 * @method integer getLimit() 获取<p>需要返回的数量，最大值为1000</p>
 * @method void setLimit(integer $Limit) 设置<p>需要返回的数量，最大值为1000</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0。</p>
 * @method array getFilters() 获取<p>过滤条件 <li>IpOrAlias - String - 是否必填：否 - 主机ip或别名筛选</li></p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件 <li>IpOrAlias - String - 是否必填：否 - 主机ip或别名筛选</li></p>
 */
class DescribeLoginWhiteHostListRequest extends AbstractModel
{
    /**
     * @var integer <p>白名单ID</p>
     */
    public $Id;

    /**
     * @var integer <p>需要返回的数量，最大值为1000</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量，默认为0。</p>
     */
    public $Offset;

    /**
     * @var array <p>过滤条件 <li>IpOrAlias - String - 是否必填：否 - 主机ip或别名筛选</li></p>
     */
    public $Filters;

    /**
     * @param integer $Id <p>白名单ID</p>
     * @param integer $Limit <p>需要返回的数量，最大值为1000</p>
     * @param integer $Offset <p>偏移量，默认为0。</p>
     * @param array $Filters <p>过滤条件 <li>IpOrAlias - String - 是否必填：否 - 主机ip或别名筛选</li></p>
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
