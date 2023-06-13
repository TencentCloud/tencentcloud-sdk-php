<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 过滤
 *
 * @method QueryFilter getFilter() 获取过滤条件
 * @method void setFilter(QueryFilter $Filter) 设置过滤条件
 * @method boolean getHasSub() 获取有无子条件
 * @method void setHasSub(boolean $HasSub) 设置有无子条件
 * @method array getSubFilters() 获取查询条件
 * @method void setSubFilters(array $SubFilters) 设置查询条件
 * @method integer getLogic() 获取逻辑操作(只支持32位)
 * @method void setLogic(integer $Logic) 设置逻辑操作(只支持32位)
 */
class QueryFilterV3 extends AbstractModel
{
    /**
     * @var QueryFilter 过滤条件
     */
    public $Filter;

    /**
     * @var boolean 有无子条件
     */
    public $HasSub;

    /**
     * @var array 查询条件
     */
    public $SubFilters;

    /**
     * @var integer 逻辑操作(只支持32位)
     */
    public $Logic;

    /**
     * @param QueryFilter $Filter 过滤条件
     * @param boolean $HasSub 有无子条件
     * @param array $SubFilters 查询条件
     * @param integer $Logic 逻辑操作(只支持32位)
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
        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new QueryFilter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("HasSub",$param) and $param["HasSub"] !== null) {
            $this->HasSub = $param["HasSub"];
        }

        if (array_key_exists("SubFilters",$param) and $param["SubFilters"] !== null) {
            $this->SubFilters = [];
            foreach ($param["SubFilters"] as $key => $value){
                $obj = new QueryFilter();
                $obj->deserialize($value);
                array_push($this->SubFilters, $obj);
            }
        }

        if (array_key_exists("Logic",$param) and $param["Logic"] !== null) {
            $this->Logic = $param["Logic"];
        }
    }
}
