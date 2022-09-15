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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云企付-门店信息
 *
 * @method string getName() 获取门店名称
 * @method void setName(string $Name) 设置门店名称
 * @method string getAreaCode() 获取地区编码
 * @method void setAreaCode(string $AreaCode) 设置地区编码
 * @method string getAddress() 获取详细地址
 * @method void setAddress(string $Address) 设置详细地址
 * @method string getId() 获取门店编号
 * @method void setId(string $Id) 设置门店编号
 */
class OpenBankStoreInfo extends AbstractModel
{
    /**
     * @var string 门店名称
     */
    public $Name;

    /**
     * @var string 地区编码
     */
    public $AreaCode;

    /**
     * @var string 详细地址
     */
    public $Address;

    /**
     * @var string 门店编号
     */
    public $Id;

    /**
     * @param string $Name 门店名称
     * @param string $AreaCode 地区编码
     * @param string $Address 详细地址
     * @param string $Id 门店编号
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

        if (array_key_exists("AreaCode",$param) and $param["AreaCode"] !== null) {
            $this->AreaCode = $param["AreaCode"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
