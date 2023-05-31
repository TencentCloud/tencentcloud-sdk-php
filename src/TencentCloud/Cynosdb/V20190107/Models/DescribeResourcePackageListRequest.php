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
 * DescribeResourcePackageList请求参数结构体
 *
 * @method array getPackageId() 获取资源包唯一ID
 * @method void setPackageId(array $PackageId) 设置资源包唯一ID
 * @method array getPackageName() 获取资源包名称
 * @method void setPackageName(array $PackageName) 设置资源包名称
 * @method array getPackageType() 获取资源包类型
CCU-计算资源包，DISK-存储资源包
 * @method void setPackageType(array $PackageType) 设置资源包类型
CCU-计算资源包，DISK-存储资源包
 * @method array getPackageRegion() 获取资源包使用地域
china-中国内地通用，overseas-港澳台及海外通用
 * @method void setPackageRegion(array $PackageRegion) 设置资源包使用地域
china-中国内地通用，overseas-港澳台及海外通用
 * @method array getStatus() 获取资源包状态
creating-创建中；
using-使用中；
expired-已过期；
normal_finish-使用完；
apply_refund-申请退费中；
refund-已退费。
 * @method void setStatus(array $Status) 设置资源包状态
creating-创建中；
using-使用中；
expired-已过期；
normal_finish-使用完；
apply_refund-申请退费中；
refund-已退费。
 * @method array getOrderBy() 获取排序条件，支持排序条件:startTime-生效时间，
expireTime-过期时间，packageUsedSpec-使用容量，packageTotalSpec-总存储量。
按照数组顺序排列；
 * @method void setOrderBy(array $OrderBy) 设置排序条件，支持排序条件:startTime-生效时间，
expireTime-过期时间，packageUsedSpec-使用容量，packageTotalSpec-总存储量。
按照数组顺序排列；
 * @method string getOrderDirection() 获取排序方式，DESC-降序，ASC-升序
 * @method void setOrderDirection(string $OrderDirection) 设置排序方式，DESC-降序，ASC-升序
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取限制
 * @method void setLimit(integer $Limit) 设置限制
 */
class DescribeResourcePackageListRequest extends AbstractModel
{
    /**
     * @var array 资源包唯一ID
     */
    public $PackageId;

    /**
     * @var array 资源包名称
     */
    public $PackageName;

    /**
     * @var array 资源包类型
CCU-计算资源包，DISK-存储资源包
     */
    public $PackageType;

    /**
     * @var array 资源包使用地域
china-中国内地通用，overseas-港澳台及海外通用
     */
    public $PackageRegion;

    /**
     * @var array 资源包状态
creating-创建中；
using-使用中；
expired-已过期；
normal_finish-使用完；
apply_refund-申请退费中；
refund-已退费。
     */
    public $Status;

    /**
     * @var array 排序条件，支持排序条件:startTime-生效时间，
expireTime-过期时间，packageUsedSpec-使用容量，packageTotalSpec-总存储量。
按照数组顺序排列；
     */
    public $OrderBy;

    /**
     * @var string 排序方式，DESC-降序，ASC-升序
     */
    public $OrderDirection;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 限制
     */
    public $Limit;

    /**
     * @param array $PackageId 资源包唯一ID
     * @param array $PackageName 资源包名称
     * @param array $PackageType 资源包类型
CCU-计算资源包，DISK-存储资源包
     * @param array $PackageRegion 资源包使用地域
china-中国内地通用，overseas-港澳台及海外通用
     * @param array $Status 资源包状态
creating-创建中；
using-使用中；
expired-已过期；
normal_finish-使用完；
apply_refund-申请退费中；
refund-已退费。
     * @param array $OrderBy 排序条件，支持排序条件:startTime-生效时间，
expireTime-过期时间，packageUsedSpec-使用容量，packageTotalSpec-总存储量。
按照数组顺序排列；
     * @param string $OrderDirection 排序方式，DESC-降序，ASC-升序
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
        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("PackageRegion",$param) and $param["PackageRegion"] !== null) {
            $this->PackageRegion = $param["PackageRegion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
