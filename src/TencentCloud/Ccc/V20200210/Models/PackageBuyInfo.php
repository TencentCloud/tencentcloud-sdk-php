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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 套餐包购买信息
 *
 * @method string getPackageId() 获取套餐包Id
 * @method void setPackageId(string $PackageId) 设置套餐包Id
 * @method integer getType() 获取套餐包类型，0-外呼套餐包|1-400呼入套餐包
 * @method void setType(integer $Type) 设置套餐包类型，0-外呼套餐包|1-400呼入套餐包
 * @method integer getCapacitySize() 获取套餐包总量
 * @method void setCapacitySize(integer $CapacitySize) 设置套餐包总量
 * @method integer getCapacityRemain() 获取套餐包剩余量
 * @method void setCapacityRemain(integer $CapacityRemain) 设置套餐包剩余量
 * @method integer getBuyTime() 获取购买时间戳
 * @method void setBuyTime(integer $BuyTime) 设置购买时间戳
 * @method integer getEndTime() 获取截至时间戳
 * @method void setEndTime(integer $EndTime) 设置截至时间戳
 */
class PackageBuyInfo extends AbstractModel
{
    /**
     * @var string 套餐包Id
     */
    public $PackageId;

    /**
     * @var integer 套餐包类型，0-外呼套餐包|1-400呼入套餐包
     */
    public $Type;

    /**
     * @var integer 套餐包总量
     */
    public $CapacitySize;

    /**
     * @var integer 套餐包剩余量
     */
    public $CapacityRemain;

    /**
     * @var integer 购买时间戳
     */
    public $BuyTime;

    /**
     * @var integer 截至时间戳
     */
    public $EndTime;

    /**
     * @param string $PackageId 套餐包Id
     * @param integer $Type 套餐包类型，0-外呼套餐包|1-400呼入套餐包
     * @param integer $CapacitySize 套餐包总量
     * @param integer $CapacityRemain 套餐包剩余量
     * @param integer $BuyTime 购买时间戳
     * @param integer $EndTime 截至时间戳
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
        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CapacitySize",$param) and $param["CapacitySize"] !== null) {
            $this->CapacitySize = $param["CapacitySize"];
        }

        if (array_key_exists("CapacityRemain",$param) and $param["CapacityRemain"] !== null) {
            $this->CapacityRemain = $param["CapacityRemain"];
        }

        if (array_key_exists("BuyTime",$param) and $param["BuyTime"] !== null) {
            $this->BuyTime = $param["BuyTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
