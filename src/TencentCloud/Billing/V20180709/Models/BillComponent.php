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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 组件类型筛选列表
 *
 * @method string getComponentCode() 获取组件类型编码
 * @method void setComponentCode(string $ComponentCode) 设置组件类型编码
 * @method string getComponentCodeName() 获取组件类型：用户购买的产品或服务对应的组件大类
 * @method void setComponentCodeName(string $ComponentCodeName) 设置组件类型：用户购买的产品或服务对应的组件大类
 */
class BillComponent extends AbstractModel
{
    /**
     * @var string 组件类型编码
     */
    public $ComponentCode;

    /**
     * @var string 组件类型：用户购买的产品或服务对应的组件大类
     */
    public $ComponentCodeName;

    /**
     * @param string $ComponentCode 组件类型编码
     * @param string $ComponentCodeName 组件类型：用户购买的产品或服务对应的组件大类
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
        if (array_key_exists("ComponentCode",$param) and $param["ComponentCode"] !== null) {
            $this->ComponentCode = $param["ComponentCode"];
        }

        if (array_key_exists("ComponentCodeName",$param) and $param["ComponentCodeName"] !== null) {
            $this->ComponentCodeName = $param["ComponentCodeName"];
        }
    }
}
