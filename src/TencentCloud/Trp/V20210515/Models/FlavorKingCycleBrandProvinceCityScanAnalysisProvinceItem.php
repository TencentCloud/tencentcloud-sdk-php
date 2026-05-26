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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 品牌扫码数据
 *
 * @method array getRatio() 获取<p>口味王分布</p>
 * @method void setRatio(array $Ratio) 设置<p>口味王分布</p>
 * @method array getCities() 获取<p>下属城市明细</p>
 * @method void setCities(array $Cities) 设置<p>下属城市明细</p>
 * @method string getProvince() 获取<p>省份</p>
 * @method void setProvince(string $Province) 设置<p>省份</p>
 */
class FlavorKingCycleBrandProvinceCityScanAnalysisProvinceItem extends AbstractModel
{
    /**
     * @var array <p>口味王分布</p>
     */
    public $Ratio;

    /**
     * @var array <p>下属城市明细</p>
     */
    public $Cities;

    /**
     * @var string <p>省份</p>
     */
    public $Province;

    /**
     * @param array $Ratio <p>口味王分布</p>
     * @param array $Cities <p>下属城市明细</p>
     * @param string $Province <p>省份</p>
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
        if (array_key_exists("Ratio",$param) and $param["Ratio"] !== null) {
            $this->Ratio = $param["Ratio"];
        }

        if (array_key_exists("Cities",$param) and $param["Cities"] !== null) {
            $this->Cities = [];
            foreach ($param["Cities"] as $key => $value){
                $obj = new FlavorKingCycleBrandProvinceCityScanAnalysisCityItem();
                $obj->deserialize($value);
                array_push($this->Cities, $obj);
            }
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }
    }
}
