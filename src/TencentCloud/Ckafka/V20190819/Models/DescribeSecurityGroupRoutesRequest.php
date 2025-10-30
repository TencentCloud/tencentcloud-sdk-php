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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityGroupRoutes请求参数结构体
 *
 * @method InstanceRoute getInstanceRoute() 获取路由信息
 * @method void setInstanceRoute(InstanceRoute $InstanceRoute) 设置路由信息
 * @method array getFilters() 获取过滤器
 * @method void setFilters(array $Filters) 设置过滤器
 * @method integer getOffset() 获取分页Offset,默认0
 * @method void setOffset(integer $Offset) 设置分页Offset,默认0
 * @method integer getLimit() 获取分页Limit,默认20
 * @method void setLimit(integer $Limit) 设置分页Limit,默认20
 * @method string getSearchWord() 获取关键词,可根据实例id/实例名称/vip模糊搜索
 * @method void setSearchWord(string $SearchWord) 设置关键词,可根据实例id/实例名称/vip模糊搜索
 */
class DescribeSecurityGroupRoutesRequest extends AbstractModel
{
    /**
     * @var InstanceRoute 路由信息
     */
    public $InstanceRoute;

    /**
     * @var array 过滤器
     */
    public $Filters;

    /**
     * @var integer 分页Offset,默认0
     */
    public $Offset;

    /**
     * @var integer 分页Limit,默认20
     */
    public $Limit;

    /**
     * @var string 关键词,可根据实例id/实例名称/vip模糊搜索
     */
    public $SearchWord;

    /**
     * @param InstanceRoute $InstanceRoute 路由信息
     * @param array $Filters 过滤器
     * @param integer $Offset 分页Offset,默认0
     * @param integer $Limit 分页Limit,默认20
     * @param string $SearchWord 关键词,可根据实例id/实例名称/vip模糊搜索
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
        if (array_key_exists("InstanceRoute",$param) and $param["InstanceRoute"] !== null) {
            $this->InstanceRoute = new InstanceRoute();
            $this->InstanceRoute->deserialize($param["InstanceRoute"]);
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new RouteFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }
    }
}
