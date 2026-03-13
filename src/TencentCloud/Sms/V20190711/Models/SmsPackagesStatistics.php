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
namespace TencentCloud\Sms\V20190711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 套餐包信息统计响应包体
 *
 * @method string getPackageCreateTime() 获取<p>套餐包创建时间，标准时间，例如：2019-10-08 17:18:37。</p>
 * @method void setPackageCreateTime(string $PackageCreateTime) 设置<p>套餐包创建时间，标准时间，例如：2019-10-08 17:18:37。</p>
 * @method integer getPackageCreateUnixTime() 获取<p>套餐包创建时间，UNIX 时间戳。</p><p>单位：秒</p>
 * @method void setPackageCreateUnixTime(integer $PackageCreateUnixTime) 设置<p>套餐包创建时间，UNIX 时间戳。</p><p>单位：秒</p>
 * @method string getPackageEffectiveTime() 获取<p>套餐包生效时间，标准时间，例如：2019-10-08 17:18:37。</p>
 * @method void setPackageEffectiveTime(string $PackageEffectiveTime) 设置<p>套餐包生效时间，标准时间，例如：2019-10-08 17:18:37。</p>
 * @method integer getPackageEffectiveUnixTime() 获取<p>套餐包生效时间，UNIX 时间戳。</p><p>单位：秒</p>
 * @method void setPackageEffectiveUnixTime(integer $PackageEffectiveUnixTime) 设置<p>套餐包生效时间，UNIX 时间戳。</p><p>单位：秒</p>
 * @method string getPackageExpiredTime() 获取<p>套餐包过期时间，标准时间，例如：2019-10-08 17:18:37。</p>
 * @method void setPackageExpiredTime(string $PackageExpiredTime) 设置<p>套餐包过期时间，标准时间，例如：2019-10-08 17:18:37。</p>
 * @method integer getPackageExpiredUnixTime() 获取<p>套餐包过期时间，UNIX 时间戳。</p><p>单位：秒</p>
 * @method void setPackageExpiredUnixTime(integer $PackageExpiredUnixTime) 设置<p>套餐包过期时间，UNIX 时间戳。</p><p>单位：秒</p>
 * @method integer getAmountOfPackage() 获取<p>套餐包条数。</p><p>单位：条</p>
 * @method void setAmountOfPackage(integer $AmountOfPackage) 设置<p>套餐包条数。</p><p>单位：条</p>
 * @method integer getTypeOfPackage() 获取<p>套餐包类别。</p><p>枚举值：</p><ul><li>0： 赠送套餐包</li><li>1： 购买套餐包</li></ul>
 * @method void setTypeOfPackage(integer $TypeOfPackage) 设置<p>套餐包类别。</p><p>枚举值：</p><ul><li>0： 赠送套餐包</li><li>1： 购买套餐包</li></ul>
 * @method integer getPackageId() 获取<p>套餐包 ID。</p>
 * @method void setPackageId(integer $PackageId) 设置<p>套餐包 ID。</p>
 * @method integer getCurrentUsage() 获取<p>当前使用量。</p><p>单位：条</p>
 * @method void setCurrentUsage(integer $CurrentUsage) 设置<p>当前使用量。</p><p>单位：条</p>
 */
class SmsPackagesStatistics extends AbstractModel
{
    /**
     * @var string <p>套餐包创建时间，标准时间，例如：2019-10-08 17:18:37。</p>
     */
    public $PackageCreateTime;

    /**
     * @var integer <p>套餐包创建时间，UNIX 时间戳。</p><p>单位：秒</p>
     */
    public $PackageCreateUnixTime;

    /**
     * @var string <p>套餐包生效时间，标准时间，例如：2019-10-08 17:18:37。</p>
     */
    public $PackageEffectiveTime;

    /**
     * @var integer <p>套餐包生效时间，UNIX 时间戳。</p><p>单位：秒</p>
     */
    public $PackageEffectiveUnixTime;

    /**
     * @var string <p>套餐包过期时间，标准时间，例如：2019-10-08 17:18:37。</p>
     */
    public $PackageExpiredTime;

    /**
     * @var integer <p>套餐包过期时间，UNIX 时间戳。</p><p>单位：秒</p>
     */
    public $PackageExpiredUnixTime;

    /**
     * @var integer <p>套餐包条数。</p><p>单位：条</p>
     */
    public $AmountOfPackage;

    /**
     * @var integer <p>套餐包类别。</p><p>枚举值：</p><ul><li>0： 赠送套餐包</li><li>1： 购买套餐包</li></ul>
     */
    public $TypeOfPackage;

    /**
     * @var integer <p>套餐包 ID。</p>
     */
    public $PackageId;

    /**
     * @var integer <p>当前使用量。</p><p>单位：条</p>
     */
    public $CurrentUsage;

    /**
     * @param string $PackageCreateTime <p>套餐包创建时间，标准时间，例如：2019-10-08 17:18:37。</p>
     * @param integer $PackageCreateUnixTime <p>套餐包创建时间，UNIX 时间戳。</p><p>单位：秒</p>
     * @param string $PackageEffectiveTime <p>套餐包生效时间，标准时间，例如：2019-10-08 17:18:37。</p>
     * @param integer $PackageEffectiveUnixTime <p>套餐包生效时间，UNIX 时间戳。</p><p>单位：秒</p>
     * @param string $PackageExpiredTime <p>套餐包过期时间，标准时间，例如：2019-10-08 17:18:37。</p>
     * @param integer $PackageExpiredUnixTime <p>套餐包过期时间，UNIX 时间戳。</p><p>单位：秒</p>
     * @param integer $AmountOfPackage <p>套餐包条数。</p><p>单位：条</p>
     * @param integer $TypeOfPackage <p>套餐包类别。</p><p>枚举值：</p><ul><li>0： 赠送套餐包</li><li>1： 购买套餐包</li></ul>
     * @param integer $PackageId <p>套餐包 ID。</p>
     * @param integer $CurrentUsage <p>当前使用量。</p><p>单位：条</p>
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
        if (array_key_exists("PackageCreateTime",$param) and $param["PackageCreateTime"] !== null) {
            $this->PackageCreateTime = $param["PackageCreateTime"];
        }

        if (array_key_exists("PackageCreateUnixTime",$param) and $param["PackageCreateUnixTime"] !== null) {
            $this->PackageCreateUnixTime = $param["PackageCreateUnixTime"];
        }

        if (array_key_exists("PackageEffectiveTime",$param) and $param["PackageEffectiveTime"] !== null) {
            $this->PackageEffectiveTime = $param["PackageEffectiveTime"];
        }

        if (array_key_exists("PackageEffectiveUnixTime",$param) and $param["PackageEffectiveUnixTime"] !== null) {
            $this->PackageEffectiveUnixTime = $param["PackageEffectiveUnixTime"];
        }

        if (array_key_exists("PackageExpiredTime",$param) and $param["PackageExpiredTime"] !== null) {
            $this->PackageExpiredTime = $param["PackageExpiredTime"];
        }

        if (array_key_exists("PackageExpiredUnixTime",$param) and $param["PackageExpiredUnixTime"] !== null) {
            $this->PackageExpiredUnixTime = $param["PackageExpiredUnixTime"];
        }

        if (array_key_exists("AmountOfPackage",$param) and $param["AmountOfPackage"] !== null) {
            $this->AmountOfPackage = $param["AmountOfPackage"];
        }

        if (array_key_exists("TypeOfPackage",$param) and $param["TypeOfPackage"] !== null) {
            $this->TypeOfPackage = $param["TypeOfPackage"];
        }

        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("CurrentUsage",$param) and $param["CurrentUsage"] !== null) {
            $this->CurrentUsage = $param["CurrentUsage"];
        }
    }
}
