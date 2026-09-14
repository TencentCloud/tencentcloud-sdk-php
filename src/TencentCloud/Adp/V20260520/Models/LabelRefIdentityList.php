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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标签引用列表
 *
 * @method array getItemList() 获取<p>标签引用列表</p>
 * @method void setItemList(array $ItemList) 设置<p>标签引用列表</p>
 */
class LabelRefIdentityList extends AbstractModel
{
    /**
     * @var array <p>标签引用列表</p>
     */
    public $ItemList;

    /**
     * @param array $ItemList <p>标签引用列表</p>
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
        if (array_key_exists("ItemList",$param) and $param["ItemList"] !== null) {
            $this->ItemList = [];
            foreach ($param["ItemList"] as $key => $value){
                $obj = new LabelRefIdentity();
                $obj->deserialize($value);
                array_push($this->ItemList, $obj);
            }
        }
    }
}
