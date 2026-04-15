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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * NDR资产识别服务类型统计结果
 *
 * @method string getName() 获取服务类型
 * @method void setName(string $Name) 设置服务类型
 * @method array getServices() 获取服务统计结果
 * @method void setServices(array $Services) 设置服务统计结果
 */
class NDRAssetCategoryStats extends AbstractModel
{
    /**
     * @var string 服务类型
     */
    public $Name;

    /**
     * @var array 服务统计结果
     */
    public $Services;

    /**
     * @param string $Name 服务类型
     * @param array $Services 服务统计结果
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Services",$param) and $param["Services"] !== null) {
            $this->Services = [];
            foreach ($param["Services"] as $key => $value){
                $obj = new NDRAssetServiceStats();
                $obj->deserialize($value);
                array_push($this->Services, $obj);
            }
        }
    }
}
