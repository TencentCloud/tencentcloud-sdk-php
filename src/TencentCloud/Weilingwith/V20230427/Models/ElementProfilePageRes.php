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
 * 构件分页查询响应体
 *
 * @method integer getTotalCount() 获取构件总数
 * @method void setTotalCount(integer $TotalCount) 设置构件总数
 * @method array getList() 获取构件列表
 * @method void setList(array $List) 设置构件列表
 */
class ElementProfilePageRes extends AbstractModel
{
    /**
     * @var integer 构件总数
     */
    public $TotalCount;

    /**
     * @var array 构件列表
     */
    public $List;

    /**
     * @param integer $TotalCount 构件总数
     * @param array $List 构件列表
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new ElementProfile();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }
    }
}
