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
namespace TencentCloud\Iotvideo\V20211125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云存套餐包消耗统计
 *
 * @method string getPackageId() 获取云存套餐包id
 * @method void setPackageId(string $PackageId) 设置云存套餐包id
 * @method string getPackageName() 获取云存套餐包名称
 * @method void setPackageName(string $PackageName) 设置云存套餐包名称
 * @method integer getCnt() 获取消耗个数
 * @method void setCnt(integer $Cnt) 设置消耗个数
 * @method integer getPrice() 获取套餐包单价，单位分
 * @method void setPrice(integer $Price) 设置套餐包单价，单位分
 * @method integer getSource() 获取消耗来源，1预付费
 * @method void setSource(integer $Source) 设置消耗来源，1预付费
 */
class PackageConsumeStat extends AbstractModel
{
    /**
     * @var string 云存套餐包id
     */
    public $PackageId;

    /**
     * @var string 云存套餐包名称
     */
    public $PackageName;

    /**
     * @var integer 消耗个数
     */
    public $Cnt;

    /**
     * @var integer 套餐包单价，单位分
     */
    public $Price;

    /**
     * @var integer 消耗来源，1预付费
     */
    public $Source;

    /**
     * @param string $PackageId 云存套餐包id
     * @param string $PackageName 云存套餐包名称
     * @param integer $Cnt 消耗个数
     * @param integer $Price 套餐包单价，单位分
     * @param integer $Source 消耗来源，1预付费
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

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("Cnt",$param) and $param["Cnt"] !== null) {
            $this->Cnt = $param["Cnt"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }
    }
}
