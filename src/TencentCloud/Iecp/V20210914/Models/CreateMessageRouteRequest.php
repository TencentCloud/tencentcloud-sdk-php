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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMessageRoute请求参数结构体
 *
 * @method string getRouteName() 获取路由名称
 * @method void setRouteName(string $RouteName) 设置路由名称
 * @method string getDescript() 获取路由备注
 * @method void setDescript(string $Descript) 设置路由备注
 */
class CreateMessageRouteRequest extends AbstractModel
{
    /**
     * @var string 路由名称
     */
    public $RouteName;

    /**
     * @var string 路由备注
     */
    public $Descript;

    /**
     * @param string $RouteName 路由名称
     * @param string $Descript 路由备注
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
        if (array_key_exists("RouteName",$param) and $param["RouteName"] !== null) {
            $this->RouteName = $param["RouteName"];
        }

        if (array_key_exists("Descript",$param) and $param["Descript"] !== null) {
            $this->Descript = $param["Descript"];
        }
    }
}
