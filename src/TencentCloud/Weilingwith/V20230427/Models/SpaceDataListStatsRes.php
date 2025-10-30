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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询项目空间楼栋数量与建筑面积响应体
 *
 * @method array getList() 获取楼栋数量与建筑面积列表
 * @method void setList(array $List) 设置楼栋数量与建筑面积列表
 */
class SpaceDataListStatsRes extends AbstractModel
{
    /**
     * @var array 楼栋数量与建筑面积列表
     */
    public $List;

    /**
     * @param array $List 楼栋数量与建筑面积列表
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
        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new SpaceDataStats();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }
    }
}
