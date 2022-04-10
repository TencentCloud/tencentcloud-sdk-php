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
 * 资产查询过滤参数
 *
 * @method array getFilter() 获取查询参数
 * @method void setFilter(array $Filter) 设置查询参数
 * @method integer getLogic() 获取查询连接符，1 and  ，2 or
 * @method void setLogic(integer $Logic) 设置查询连接符，1 and  ，2 or
 */
class AssetQueryFilter extends AbstractModel
{
    /**
     * @var array 查询参数
     */
    public $Filter;

    /**
     * @var integer 查询连接符，1 and  ，2 or
     */
    public $Logic;

    /**
     * @param array $Filter 查询参数
     * @param integer $Logic 查询连接符，1 and  ，2 or
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
            $this->Filter = [];
            foreach ($param["Filter"] as $key => $value){
                $obj = new QueryFilter();
                $obj->deserialize($value);
                array_push($this->Filter, $obj);
            }
        }

        if (array_key_exists("Logic",$param) and $param["Logic"] !== null) {
            $this->Logic = $param["Logic"];
        }
    }
}
