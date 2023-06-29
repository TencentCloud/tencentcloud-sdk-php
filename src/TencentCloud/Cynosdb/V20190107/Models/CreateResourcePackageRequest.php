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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateResourcePackage请求参数结构体
 *
 * @method string getInstanceType() 获取实例类型
 * @method void setInstanceType(string $InstanceType) 设置实例类型
 * @method string getPackageRegion() 获取资源包使用地域
china-中国内地通用，overseas-港澳台及海外通用
 * @method void setPackageRegion(string $PackageRegion) 设置资源包使用地域
china-中国内地通用，overseas-港澳台及海外通用
 * @method string getPackageType() 获取资源包类型：CCU-计算资源包，DISK-存储资源包
 * @method void setPackageType(string $PackageType) 设置资源包类型：CCU-计算资源包，DISK-存储资源包
 * @method string getPackageVersion() 获取资源包版本
base-基础版本，common-通用版本，enterprise-企业版本
 * @method void setPackageVersion(string $PackageVersion) 设置资源包版本
base-基础版本，common-通用版本，enterprise-企业版本
 * @method float getPackageSpec() 获取资源包大小，计算资源单位：万个；存储资源：GB
 * @method void setPackageSpec(float $PackageSpec) 设置资源包大小，计算资源单位：万个；存储资源：GB
 * @method integer getExpireDay() 获取资源包有效期，单位:天
 * @method void setExpireDay(integer $ExpireDay) 设置资源包有效期，单位:天
 * @method integer getPackageCount() 获取购买资源包个数
 * @method void setPackageCount(integer $PackageCount) 设置购买资源包个数
 * @method string getPackageName() 获取资源包名称
 * @method void setPackageName(string $PackageName) 设置资源包名称
 */
class CreateResourcePackageRequest extends AbstractModel
{
    /**
     * @var string 实例类型
     */
    public $InstanceType;

    /**
     * @var string 资源包使用地域
china-中国内地通用，overseas-港澳台及海外通用
     */
    public $PackageRegion;

    /**
     * @var string 资源包类型：CCU-计算资源包，DISK-存储资源包
     */
    public $PackageType;

    /**
     * @var string 资源包版本
base-基础版本，common-通用版本，enterprise-企业版本
     */
    public $PackageVersion;

    /**
     * @var float 资源包大小，计算资源单位：万个；存储资源：GB
     */
    public $PackageSpec;

    /**
     * @var integer 资源包有效期，单位:天
     */
    public $ExpireDay;

    /**
     * @var integer 购买资源包个数
     */
    public $PackageCount;

    /**
     * @var string 资源包名称
     */
    public $PackageName;

    /**
     * @param string $InstanceType 实例类型
     * @param string $PackageRegion 资源包使用地域
china-中国内地通用，overseas-港澳台及海外通用
     * @param string $PackageType 资源包类型：CCU-计算资源包，DISK-存储资源包
     * @param string $PackageVersion 资源包版本
base-基础版本，common-通用版本，enterprise-企业版本
     * @param float $PackageSpec 资源包大小，计算资源单位：万个；存储资源：GB
     * @param integer $ExpireDay 资源包有效期，单位:天
     * @param integer $PackageCount 购买资源包个数
     * @param string $PackageName 资源包名称
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("PackageRegion",$param) and $param["PackageRegion"] !== null) {
            $this->PackageRegion = $param["PackageRegion"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("PackageVersion",$param) and $param["PackageVersion"] !== null) {
            $this->PackageVersion = $param["PackageVersion"];
        }

        if (array_key_exists("PackageSpec",$param) and $param["PackageSpec"] !== null) {
            $this->PackageSpec = $param["PackageSpec"];
        }

        if (array_key_exists("ExpireDay",$param) and $param["ExpireDay"] !== null) {
            $this->ExpireDay = $param["ExpireDay"];
        }

        if (array_key_exists("PackageCount",$param) and $param["PackageCount"] !== null) {
            $this->PackageCount = $param["PackageCount"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }
    }
}
