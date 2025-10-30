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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安卓实例设备信息
 *
 * @method string getBrand() 获取品牌
 * @method void setBrand(string $Brand) 设置品牌
 * @method string getModel() 获取型号
 * @method void setModel(string $Model) 设置型号
 */
class AndroidInstanceDevice extends AbstractModel
{
    /**
     * @var string 品牌
     */
    public $Brand;

    /**
     * @var string 型号
     */
    public $Model;

    /**
     * @param string $Brand 品牌
     * @param string $Model 型号
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
        if (array_key_exists("Brand",$param) and $param["Brand"] !== null) {
            $this->Brand = $param["Brand"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }
    }
}
