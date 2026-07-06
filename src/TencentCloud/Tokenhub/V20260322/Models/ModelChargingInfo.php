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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型计费信息
 *
 * @method string getType() 获取计费类型。取值：Uniform（统一计费）、Tiered（阶梯计费）。
 * @method void setType(string $Type) 设置计费类型。取值：Uniform（统一计费）、Tiered（阶梯计费）。
 * @method string getName() 获取计费名称，阶梯计费时表示区间标识，统一计费为空。
 * @method void setName(string $Name) 设置计费名称，阶梯计费时表示区间标识，统一计费为空。
 * @method string getScenario() 获取计费场景，用于区分同一产品不同功能的计费。
 * @method void setScenario(string $Scenario) 设置计费场景，用于区分同一产品不同功能的计费。
 * @method array getChargingItems() 获取计费条目列表，顺序即前端展示顺序。
 * @method void setChargingItems(array $ChargingItems) 设置计费条目列表，顺序即前端展示顺序。
 * @method string getChargeUnit() 获取计费单位。取值：TOKEN（词元）、COUNT（次）、CREDIT（积分）、PICTURE（张）。
 * @method void setChargeUnit(string $ChargeUnit) 设置计费单位。取值：TOKEN（词元）、COUNT（次）、CREDIT（积分）、PICTURE（张）。
 * @method string getReference() 获取计费参考链接。
 * @method void setReference(string $Reference) 设置计费参考链接。
 */
class ModelChargingInfo extends AbstractModel
{
    /**
     * @var string 计费类型。取值：Uniform（统一计费）、Tiered（阶梯计费）。
     */
    public $Type;

    /**
     * @var string 计费名称，阶梯计费时表示区间标识，统一计费为空。
     */
    public $Name;

    /**
     * @var string 计费场景，用于区分同一产品不同功能的计费。
     */
    public $Scenario;

    /**
     * @var array 计费条目列表，顺序即前端展示顺序。
     */
    public $ChargingItems;

    /**
     * @var string 计费单位。取值：TOKEN（词元）、COUNT（次）、CREDIT（积分）、PICTURE（张）。
     */
    public $ChargeUnit;

    /**
     * @var string 计费参考链接。
     */
    public $Reference;

    /**
     * @param string $Type 计费类型。取值：Uniform（统一计费）、Tiered（阶梯计费）。
     * @param string $Name 计费名称，阶梯计费时表示区间标识，统一计费为空。
     * @param string $Scenario 计费场景，用于区分同一产品不同功能的计费。
     * @param array $ChargingItems 计费条目列表，顺序即前端展示顺序。
     * @param string $ChargeUnit 计费单位。取值：TOKEN（词元）、COUNT（次）、CREDIT（积分）、PICTURE（张）。
     * @param string $Reference 计费参考链接。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Scenario",$param) and $param["Scenario"] !== null) {
            $this->Scenario = $param["Scenario"];
        }

        if (array_key_exists("ChargingItems",$param) and $param["ChargingItems"] !== null) {
            $this->ChargingItems = [];
            foreach ($param["ChargingItems"] as $key => $value){
                $obj = new ModelChargingItem();
                $obj->deserialize($value);
                array_push($this->ChargingItems, $obj);
            }
        }

        if (array_key_exists("ChargeUnit",$param) and $param["ChargeUnit"] !== null) {
            $this->ChargeUnit = $param["ChargeUnit"];
        }

        if (array_key_exists("Reference",$param) and $param["Reference"] !== null) {
            $this->Reference = $param["Reference"];
        }
    }
}
