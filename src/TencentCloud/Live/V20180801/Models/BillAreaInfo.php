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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 海外分区直播带宽出参，分区信息
 *
 * @method string getName() 获取大区名称。
 * @method void setName(string $Name) 设置大区名称。
 * @method array getCountrys() 获取国家或地区明细数据。
 * @method void setCountrys(array $Countrys) 设置国家或地区明细数据。
 */
class BillAreaInfo extends AbstractModel
{
    /**
     * @var string 大区名称。
     */
    public $Name;

    /**
     * @var array 国家或地区明细数据。
     */
    public $Countrys;

    /**
     * @param string $Name 大区名称。
     * @param array $Countrys 国家或地区明细数据。
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

        if (array_key_exists("Countrys",$param) and $param["Countrys"] !== null) {
            $this->Countrys = [];
            foreach ($param["Countrys"] as $key => $value){
                $obj = new BillCountryInfo();
                $obj->deserialize($value);
                array_push($this->Countrys, $obj);
            }
        }
    }
}
