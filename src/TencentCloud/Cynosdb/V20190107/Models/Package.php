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
 * 资源包
 *
 * @method integer getAppId() 获取AppID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置AppID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageId() 获取资源包唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageId(string $PackageId) 设置资源包唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageName() 获取资源包名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageName(string $PackageName) 设置资源包名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageType() 获取资源包类型
CCU-计算资源包，DISK-存储资源包
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageType(string $PackageType) 设置资源包类型
CCU-计算资源包，DISK-存储资源包
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageRegion() 获取资源包使用地域
china-中国内地通用，overseas-港澳台及海外通用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageRegion(string $PackageRegion) 设置资源包使用地域
china-中国内地通用，overseas-港澳台及海外通用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取资源包状态
creating-创建中；
using-使用中；
expired-已过期；
normal_finish-使用完；
apply_refund-申请退费中；
refund-已退费。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置资源包状态
creating-创建中；
using-使用中；
expired-已过期；
normal_finish-使用完；
apply_refund-申请退费中；
refund-已退费。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getPackageTotalSpec() 获取资源包总量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageTotalSpec(float $PackageTotalSpec) 设置资源包总量
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getPackageUsedSpec() 获取资源包已使用量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageUsedSpec(float $PackageUsedSpec) 设置资源包已使用量
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHasQuota() 获取是否还有库存余量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasQuota(boolean $HasQuota) 设置是否还有库存余量
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBindInstanceInfos() 获取绑定实例信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBindInstanceInfos(array $BindInstanceInfos) 设置绑定实例信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取生效时间：2022-07-01 00:00:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置生效时间：2022-07-01 00:00:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取失效时间：2022-08-01 00:00:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置失效时间：2022-08-01 00:00:00
注意：此字段可能返回 null，表示取不到有效值。
 */
class Package extends AbstractModel
{
    /**
     * @var integer AppID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 资源包唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageId;

    /**
     * @var string 资源包名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageName;

    /**
     * @var string 资源包类型
CCU-计算资源包，DISK-存储资源包
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageType;

    /**
     * @var string 资源包使用地域
china-中国内地通用，overseas-港澳台及海外通用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageRegion;

    /**
     * @var string 资源包状态
creating-创建中；
using-使用中；
expired-已过期；
normal_finish-使用完；
apply_refund-申请退费中；
refund-已退费。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var float 资源包总量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageTotalSpec;

    /**
     * @var float 资源包已使用量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageUsedSpec;

    /**
     * @var boolean 是否还有库存余量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasQuota;

    /**
     * @var array 绑定实例信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BindInstanceInfos;

    /**
     * @var string 生效时间：2022-07-01 00:00:00
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 失效时间：2022-08-01 00:00:00
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @param integer $AppId AppID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageId 资源包唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageName 资源包名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageType 资源包类型
CCU-计算资源包，DISK-存储资源包
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageRegion 资源包使用地域
china-中国内地通用，overseas-港澳台及海外通用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 资源包状态
creating-创建中；
using-使用中；
expired-已过期；
normal_finish-使用完；
apply_refund-申请退费中；
refund-已退费。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $PackageTotalSpec 资源包总量
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $PackageUsedSpec 资源包已使用量
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HasQuota 是否还有库存余量
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BindInstanceInfos 绑定实例信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 生效时间：2022-07-01 00:00:00
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime 失效时间：2022-08-01 00:00:00
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
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

        if (array_key_exists("PackageTotalSpec",$param) and $param["PackageTotalSpec"] !== null) {
            $this->PackageTotalSpec = $param["PackageTotalSpec"];
        }

        if (array_key_exists("PackageUsedSpec",$param) and $param["PackageUsedSpec"] !== null) {
            $this->PackageUsedSpec = $param["PackageUsedSpec"];
        }

        if (array_key_exists("HasQuota",$param) and $param["HasQuota"] !== null) {
            $this->HasQuota = $param["HasQuota"];
        }

        if (array_key_exists("BindInstanceInfos",$param) and $param["BindInstanceInfos"] !== null) {
            $this->BindInstanceInfos = [];
            foreach ($param["BindInstanceInfos"] as $key => $value){
                $obj = new BindInstanceInfo();
                $obj->deserialize($value);
                array_push($this->BindInstanceInfos, $obj);
            }
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
