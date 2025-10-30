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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 组件名称筛选列表
 *
 * @method string getItemCode() 获取组件名称编码
 * @method void setItemCode(string $ItemCode) 设置组件名称编码
 * @method string getItemCodeName() 获取组件名称：用户购买的产品或服务，所包含的具体组件
 * @method void setItemCodeName(string $ItemCodeName) 设置组件名称：用户购买的产品或服务，所包含的具体组件
 */
class BillItem extends AbstractModel
{
    /**
     * @var string 组件名称编码
     */
    public $ItemCode;

    /**
     * @var string 组件名称：用户购买的产品或服务，所包含的具体组件
     */
    public $ItemCodeName;

    /**
     * @param string $ItemCode 组件名称编码
     * @param string $ItemCodeName 组件名称：用户购买的产品或服务，所包含的具体组件
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
        if (array_key_exists("ItemCode",$param) and $param["ItemCode"] !== null) {
            $this->ItemCode = $param["ItemCode"];
        }

        if (array_key_exists("ItemCodeName",$param) and $param["ItemCodeName"] !== null) {
            $this->ItemCodeName = $param["ItemCodeName"];
        }
    }
}
