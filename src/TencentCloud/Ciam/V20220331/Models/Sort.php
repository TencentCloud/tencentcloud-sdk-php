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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询用户排序
 *
 * @method string getPropertyKey() 获取排序字段的key，参考自定义属性
 * @method void setPropertyKey(string $PropertyKey) 设置排序字段的key，参考自定义属性
 * @method string getOrder() 获取升序或者降序，ASC/DESC
 * @method void setOrder(string $Order) 设置升序或者降序，ASC/DESC
 */
class Sort extends AbstractModel
{
    /**
     * @var string 排序字段的key，参考自定义属性
     */
    public $PropertyKey;

    /**
     * @var string 升序或者降序，ASC/DESC
     */
    public $Order;

    /**
     * @param string $PropertyKey 排序字段的key，参考自定义属性
     * @param string $Order 升序或者降序，ASC/DESC
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
        if (array_key_exists("PropertyKey",$param) and $param["PropertyKey"] !== null) {
            $this->PropertyKey = $param["PropertyKey"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
