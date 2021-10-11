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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFenceBind请求参数结构体
 *
 * @method integer getFenceId() 获取围栏Id
 * @method void setFenceId(integer $FenceId) 设置围栏Id
 * @method array getItems() 获取围栏绑定的产品列表
 * @method void setItems(array $Items) 设置围栏绑定的产品列表
 */
class CreateFenceBindRequest extends AbstractModel
{
    /**
     * @var integer 围栏Id
     */
    public $FenceId;

    /**
     * @var array 围栏绑定的产品列表
     */
    public $Items;

    /**
     * @param integer $FenceId 围栏Id
     * @param array $Items 围栏绑定的产品列表
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
        if (array_key_exists("FenceId",$param) and $param["FenceId"] !== null) {
            $this->FenceId = $param["FenceId"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new FenceBindProductItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
