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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可用区的地域大类描述
 *
 * @method string getName() 获取大类地域信息，如"south_china", "east_china"等
 * @method void setName(string $Name) 设置大类地域信息，如"south_china", "east_china"等
 * @method string getDesc() 获取对应Name的描述，例如“华南地区”，“华东地区”等
 * @method void setDesc(string $Desc) 设置对应Name的描述，例如“华南地区”，“华东地区”等
 * @method array getRegions() 获取具体地域列表1
 * @method void setRegions(array $Regions) 设置具体地域列表1
 */
class RegionAreaInfo extends AbstractModel
{
    /**
     * @var string 大类地域信息，如"south_china", "east_china"等
     */
    public $Name;

    /**
     * @var string 对应Name的描述，例如“华南地区”，“华东地区”等
     */
    public $Desc;

    /**
     * @var array 具体地域列表1
     */
    public $Regions;

    /**
     * @param string $Name 大类地域信息，如"south_china", "east_china"等
     * @param string $Desc 对应Name的描述，例如“华南地区”，“华东地区”等
     * @param array $Regions 具体地域列表1
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

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            $this->Regions = [];
            foreach ($param["Regions"] as $key => $value){
                $obj = new RegionInfo();
                $obj->deserialize($value);
                array_push($this->Regions, $obj);
            }
        }
    }
}
