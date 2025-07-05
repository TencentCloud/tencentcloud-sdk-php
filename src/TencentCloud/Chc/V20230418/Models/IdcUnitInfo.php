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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 机房管理单元
 *
 * @method string getAddress() 获取机房管理单元地址
 * @method void setAddress(string $Address) 设置机房管理单元地址
 * @method string getOperator() 获取机房经理
 * @method void setOperator(string $Operator) 设置机房经理
 * @method string getTelNumber() 获取联系电话
 * @method void setTelNumber(string $TelNumber) 设置联系电话
 * @method string getAssetManager() 获取资产管理员
 * @method void setAssetManager(string $AssetManager) 设置资产管理员
 * @method string getAssetManagerTelNumber() 获取资产管理员电话
 * @method void setAssetManagerTelNumber(string $AssetManagerTelNumber) 设置资产管理员电话
 */
class IdcUnitInfo extends AbstractModel
{
    /**
     * @var string 机房管理单元地址
     */
    public $Address;

    /**
     * @var string 机房经理
     */
    public $Operator;

    /**
     * @var string 联系电话
     */
    public $TelNumber;

    /**
     * @var string 资产管理员
     */
    public $AssetManager;

    /**
     * @var string 资产管理员电话
     */
    public $AssetManagerTelNumber;

    /**
     * @param string $Address 机房管理单元地址
     * @param string $Operator 机房经理
     * @param string $TelNumber 联系电话
     * @param string $AssetManager 资产管理员
     * @param string $AssetManagerTelNumber 资产管理员电话
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
        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("TelNumber",$param) and $param["TelNumber"] !== null) {
            $this->TelNumber = $param["TelNumber"];
        }

        if (array_key_exists("AssetManager",$param) and $param["AssetManager"] !== null) {
            $this->AssetManager = $param["AssetManager"];
        }

        if (array_key_exists("AssetManagerTelNumber",$param) and $param["AssetManagerTelNumber"] !== null) {
            $this->AssetManagerTelNumber = $param["AssetManagerTelNumber"];
        }
    }
}
