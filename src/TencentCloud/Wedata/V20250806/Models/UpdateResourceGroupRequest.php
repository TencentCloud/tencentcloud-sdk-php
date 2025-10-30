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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateResourceGroup请求参数结构体
 *
 * @method string getId() 获取资源组id
 * @method void setId(string $Id) 设置资源组id
 * @method string getType() 获取**变更配置(变配、续费、修改资源包数量 不能同时操作), 变配无法修改资源组类型**

实时集成资源组  
- i32c(实时数据同步-16C64G)

离线集成资源组
- integrated(离线数据同步-8C16G)
- i16(离线数据同步-8C32G)

调度资源组
- s_test(测试规格)
- s_small(基础规格)
- s_medium(普及规格)
- s_large(专业规格)

数据服务资源组
- ds_t(测试规格)
- ds_s(基础规格)
- ds_m(普及规格)
- ds_l(专业规格)
 * @method void setType(string $Type) 设置**变更配置(变配、续费、修改资源包数量 不能同时操作), 变配无法修改资源组类型**

实时集成资源组  
- i32c(实时数据同步-16C64G)

离线集成资源组
- integrated(离线数据同步-8C16G)
- i16(离线数据同步-8C32G)

调度资源组
- s_test(测试规格)
- s_small(基础规格)
- s_medium(普及规格)
- s_large(专业规格)

数据服务资源组
- ds_t(测试规格)
- ds_s(基础规格)
- ds_m(普及规格)
- ds_l(专业规格)
 * @method integer getPurchasePeriod() 获取续费时长，单位月(变配、续费、修改资源包数量 不能同时操作)
 * @method void setPurchasePeriod(integer $PurchasePeriod) 设置续费时长，单位月(变配、续费、修改资源包数量 不能同时操作)
 * @method ResourceNumber getNumber() 获取增加/减少资源包的数量(变配、续费、修改资源包数量 不能同时操作)
 * @method void setNumber(ResourceNumber $Number) 设置增加/减少资源包的数量(变配、续费、修改资源包数量 不能同时操作)
 * @method boolean getAutoRenewEnabled() 获取是否自动续费，续费参数PurchasePeriod不为空时可以生效
 * @method void setAutoRenewEnabled(boolean $AutoRenewEnabled) 设置是否自动续费，续费参数PurchasePeriod不为空时可以生效
 */
class UpdateResourceGroupRequest extends AbstractModel
{
    /**
     * @var string 资源组id
     */
    public $Id;

    /**
     * @var string **变更配置(变配、续费、修改资源包数量 不能同时操作), 变配无法修改资源组类型**

实时集成资源组  
- i32c(实时数据同步-16C64G)

离线集成资源组
- integrated(离线数据同步-8C16G)
- i16(离线数据同步-8C32G)

调度资源组
- s_test(测试规格)
- s_small(基础规格)
- s_medium(普及规格)
- s_large(专业规格)

数据服务资源组
- ds_t(测试规格)
- ds_s(基础规格)
- ds_m(普及规格)
- ds_l(专业规格)
     */
    public $Type;

    /**
     * @var integer 续费时长，单位月(变配、续费、修改资源包数量 不能同时操作)
     */
    public $PurchasePeriod;

    /**
     * @var ResourceNumber 增加/减少资源包的数量(变配、续费、修改资源包数量 不能同时操作)
     */
    public $Number;

    /**
     * @var boolean 是否自动续费，续费参数PurchasePeriod不为空时可以生效
     */
    public $AutoRenewEnabled;

    /**
     * @param string $Id 资源组id
     * @param string $Type **变更配置(变配、续费、修改资源包数量 不能同时操作), 变配无法修改资源组类型**

实时集成资源组  
- i32c(实时数据同步-16C64G)

离线集成资源组
- integrated(离线数据同步-8C16G)
- i16(离线数据同步-8C32G)

调度资源组
- s_test(测试规格)
- s_small(基础规格)
- s_medium(普及规格)
- s_large(专业规格)

数据服务资源组
- ds_t(测试规格)
- ds_s(基础规格)
- ds_m(普及规格)
- ds_l(专业规格)
     * @param integer $PurchasePeriod 续费时长，单位月(变配、续费、修改资源包数量 不能同时操作)
     * @param ResourceNumber $Number 增加/减少资源包的数量(变配、续费、修改资源包数量 不能同时操作)
     * @param boolean $AutoRenewEnabled 是否自动续费，续费参数PurchasePeriod不为空时可以生效
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PurchasePeriod",$param) and $param["PurchasePeriod"] !== null) {
            $this->PurchasePeriod = $param["PurchasePeriod"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = new ResourceNumber();
            $this->Number->deserialize($param["Number"]);
        }

        if (array_key_exists("AutoRenewEnabled",$param) and $param["AutoRenewEnabled"] !== null) {
            $this->AutoRenewEnabled = $param["AutoRenewEnabled"];
        }
    }
}
