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
 * DescribeResourcePackageSaleSpec请求参数结构体
 *
 * @method string getInstanceType() 获取实例类型
 * @method void setInstanceType(string $InstanceType) 设置实例类型
 * @method string getPackageRegion() 获取资源包使用地域
china-中国内地通用，overseas-港澳台及海外通用
 * @method void setPackageRegion(string $PackageRegion) 设置资源包使用地域
china-中国内地通用，overseas-港澳台及海外通用
 * @method string getPackageType() 获取资源包类型
CCU-计算资源包
DISK-存储资源包
 * @method void setPackageType(string $PackageType) 设置资源包类型
CCU-计算资源包
DISK-存储资源包
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取限制
 * @method void setLimit(integer $Limit) 设置限制
 */
class DescribeResourcePackageSaleSpecRequest extends AbstractModel
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
     * @var string 资源包类型
CCU-计算资源包
DISK-存储资源包
     */
    public $PackageType;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 限制
     */
    public $Limit;

    /**
     * @param string $InstanceType 实例类型
     * @param string $PackageRegion 资源包使用地域
china-中国内地通用，overseas-港澳台及海外通用
     * @param string $PackageType 资源包类型
CCU-计算资源包
DISK-存储资源包
     * @param integer $Offset 偏移量
     * @param integer $Limit 限制
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
