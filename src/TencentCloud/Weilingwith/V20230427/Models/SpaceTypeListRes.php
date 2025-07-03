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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 空间分类列表响应体
 *
 * @method array getSpaceTypeList() 获取空间分类列表
 * @method void setSpaceTypeList(array $SpaceTypeList) 设置空间分类列表
 */
class SpaceTypeListRes extends AbstractModel
{
    /**
     * @var array 空间分类列表
     */
    public $SpaceTypeList;

    /**
     * @param array $SpaceTypeList 空间分类列表
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
        if (array_key_exists("SpaceTypeList",$param) and $param["SpaceTypeList"] !== null) {
            $this->SpaceTypeList = [];
            foreach ($param["SpaceTypeList"] as $key => $value){
                $obj = new SpaceType();
                $obj->deserialize($value);
                array_push($this->SpaceTypeList, $obj);
            }
        }
    }
}
