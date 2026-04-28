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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例信息结构体
 *
 * @method string getRegistryId() 获取<p>实例ID</p>
 * @method void setRegistryId(string $RegistryId) 设置<p>实例ID</p>
 * @method string getRegistryName() 获取<p>实例名称</p>
 * @method void setRegistryName(string $RegistryName) 设置<p>实例名称</p>
 * @method string getRegistryType() 获取<p>实例规格</p>
 * @method void setRegistryType(string $RegistryType) 设置<p>实例规格</p>
 * @method string getStatus() 获取<p>实例状态。有以下状态：<br>Pending, 初始化中<br>Deploying, 创建中<br>Running, 运行中<br>Unhealthy, 状态异常<br>FailedCreated, 创建失败<br>FailedUpdated, 更新失败<br>Bucket-Error, 存储桶异常<br>Isolate, 待回收<br>Deleting, 删除中<br>DeleteBucketFailed, 实例删除存储桶失败<br>DeleteFailed, 实例删除失败</p>
 * @method void setStatus(string $Status) 设置<p>实例状态。有以下状态：<br>Pending, 初始化中<br>Deploying, 创建中<br>Running, 运行中<br>Unhealthy, 状态异常<br>FailedCreated, 创建失败<br>FailedUpdated, 更新失败<br>Bucket-Error, 存储桶异常<br>Isolate, 待回收<br>Deleting, 删除中<br>DeleteBucketFailed, 实例删除存储桶失败<br>DeleteFailed, 实例删除失败</p>
 * @method string getPublicDomain() 获取<p>实例的公共访问地址</p>
 * @method void setPublicDomain(string $PublicDomain) 设置<p>实例的公共访问地址</p>
 * @method string getCreatedAt() 获取<p>实例创建时间</p>
 * @method void setCreatedAt(string $CreatedAt) 设置<p>实例创建时间</p>
 * @method string getRegionName() 获取<p>地域名称</p>
 * @method void setRegionName(string $RegionName) 设置<p>地域名称</p>
 * @method integer getRegionId() 获取<p>地域Id</p>
 * @method void setRegionId(integer $RegionId) 设置<p>地域Id</p>
 * @method boolean getEnableAnonymous() 获取<p>是否支持匿名</p>
 * @method void setEnableAnonymous(boolean $EnableAnonymous) 设置<p>是否支持匿名</p>
 * @method integer getTokenValidTime() 获取<p>Token有效时间</p>
 * @method void setTokenValidTime(integer $TokenValidTime) 设置<p>Token有效时间</p>
 * @method string getInternalEndpoint() 获取<p>实例内部访问地址</p>
 * @method void setInternalEndpoint(string $InternalEndpoint) 设置<p>实例内部访问地址</p>
 * @method TagSpecification getTagSpecification() 获取<p>实例云标签</p>
 * @method void setTagSpecification(TagSpecification $TagSpecification) 设置<p>实例云标签</p>
 * @method string getExpiredAt() 获取<p>实例过期时间（预付费）</p>
 * @method void setExpiredAt(string $ExpiredAt) 设置<p>实例过期时间（预付费）</p>
 * @method integer getPayMod() 获取<p>实例付费类型，0表示后付费，1表示预付费</p>
 * @method void setPayMod(integer $PayMod) 设置<p>实例付费类型，0表示后付费，1表示预付费</p>
 * @method integer getRenewFlag() 获取<p>预付费续费标识，0表示手动续费，1表示自动续费，2不续费并且不通知</p>
 * @method void setRenewFlag(integer $RenewFlag) 设置<p>预付费续费标识，0表示手动续费，1表示自动续费，2不续费并且不通知</p>
 * @method boolean getDeletionProtection() 获取<p>是否开启实例删除保护，false表示不开启</p>
 * @method void setDeletionProtection(boolean $DeletionProtection) 设置<p>是否开启实例删除保护，false表示不开启</p>
 * @method boolean getAIFeature() 获取<p>是否支持AI特性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAIFeature(boolean $AIFeature) 设置<p>是否支持AI特性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableCosMAZ() 获取<p>cos桶是否开启多AZ特性</p>
 * @method void setEnableCosMAZ(boolean $EnableCosMAZ) 设置<p>cos桶是否开启多AZ特性</p>
 * @method boolean getEnableCosVersioning() 获取<p>cos桶是否开启版本控制</p>
 * @method void setEnableCosVersioning(boolean $EnableCosVersioning) 设置<p>cos桶是否开启版本控制</p>
 */
class Registry extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $RegistryId;

    /**
     * @var string <p>实例名称</p>
     */
    public $RegistryName;

    /**
     * @var string <p>实例规格</p>
     */
    public $RegistryType;

    /**
     * @var string <p>实例状态。有以下状态：<br>Pending, 初始化中<br>Deploying, 创建中<br>Running, 运行中<br>Unhealthy, 状态异常<br>FailedCreated, 创建失败<br>FailedUpdated, 更新失败<br>Bucket-Error, 存储桶异常<br>Isolate, 待回收<br>Deleting, 删除中<br>DeleteBucketFailed, 实例删除存储桶失败<br>DeleteFailed, 实例删除失败</p>
     */
    public $Status;

    /**
     * @var string <p>实例的公共访问地址</p>
     */
    public $PublicDomain;

    /**
     * @var string <p>实例创建时间</p>
     */
    public $CreatedAt;

    /**
     * @var string <p>地域名称</p>
     */
    public $RegionName;

    /**
     * @var integer <p>地域Id</p>
     */
    public $RegionId;

    /**
     * @var boolean <p>是否支持匿名</p>
     */
    public $EnableAnonymous;

    /**
     * @var integer <p>Token有效时间</p>
     */
    public $TokenValidTime;

    /**
     * @var string <p>实例内部访问地址</p>
     */
    public $InternalEndpoint;

    /**
     * @var TagSpecification <p>实例云标签</p>
     */
    public $TagSpecification;

    /**
     * @var string <p>实例过期时间（预付费）</p>
     */
    public $ExpiredAt;

    /**
     * @var integer <p>实例付费类型，0表示后付费，1表示预付费</p>
     */
    public $PayMod;

    /**
     * @var integer <p>预付费续费标识，0表示手动续费，1表示自动续费，2不续费并且不通知</p>
     */
    public $RenewFlag;

    /**
     * @var boolean <p>是否开启实例删除保护，false表示不开启</p>
     */
    public $DeletionProtection;

    /**
     * @var boolean <p>是否支持AI特性</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AIFeature;

    /**
     * @var boolean <p>cos桶是否开启多AZ特性</p>
     */
    public $EnableCosMAZ;

    /**
     * @var boolean <p>cos桶是否开启版本控制</p>
     */
    public $EnableCosVersioning;

    /**
     * @param string $RegistryId <p>实例ID</p>
     * @param string $RegistryName <p>实例名称</p>
     * @param string $RegistryType <p>实例规格</p>
     * @param string $Status <p>实例状态。有以下状态：<br>Pending, 初始化中<br>Deploying, 创建中<br>Running, 运行中<br>Unhealthy, 状态异常<br>FailedCreated, 创建失败<br>FailedUpdated, 更新失败<br>Bucket-Error, 存储桶异常<br>Isolate, 待回收<br>Deleting, 删除中<br>DeleteBucketFailed, 实例删除存储桶失败<br>DeleteFailed, 实例删除失败</p>
     * @param string $PublicDomain <p>实例的公共访问地址</p>
     * @param string $CreatedAt <p>实例创建时间</p>
     * @param string $RegionName <p>地域名称</p>
     * @param integer $RegionId <p>地域Id</p>
     * @param boolean $EnableAnonymous <p>是否支持匿名</p>
     * @param integer $TokenValidTime <p>Token有效时间</p>
     * @param string $InternalEndpoint <p>实例内部访问地址</p>
     * @param TagSpecification $TagSpecification <p>实例云标签</p>
     * @param string $ExpiredAt <p>实例过期时间（预付费）</p>
     * @param integer $PayMod <p>实例付费类型，0表示后付费，1表示预付费</p>
     * @param integer $RenewFlag <p>预付费续费标识，0表示手动续费，1表示自动续费，2不续费并且不通知</p>
     * @param boolean $DeletionProtection <p>是否开启实例删除保护，false表示不开启</p>
     * @param boolean $AIFeature <p>是否支持AI特性</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableCosMAZ <p>cos桶是否开启多AZ特性</p>
     * @param boolean $EnableCosVersioning <p>cos桶是否开启版本控制</p>
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("RegistryName",$param) and $param["RegistryName"] !== null) {
            $this->RegistryName = $param["RegistryName"];
        }

        if (array_key_exists("RegistryType",$param) and $param["RegistryType"] !== null) {
            $this->RegistryType = $param["RegistryType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PublicDomain",$param) and $param["PublicDomain"] !== null) {
            $this->PublicDomain = $param["PublicDomain"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("EnableAnonymous",$param) and $param["EnableAnonymous"] !== null) {
            $this->EnableAnonymous = $param["EnableAnonymous"];
        }

        if (array_key_exists("TokenValidTime",$param) and $param["TokenValidTime"] !== null) {
            $this->TokenValidTime = $param["TokenValidTime"];
        }

        if (array_key_exists("InternalEndpoint",$param) and $param["InternalEndpoint"] !== null) {
            $this->InternalEndpoint = $param["InternalEndpoint"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = new TagSpecification();
            $this->TagSpecification->deserialize($param["TagSpecification"]);
        }

        if (array_key_exists("ExpiredAt",$param) and $param["ExpiredAt"] !== null) {
            $this->ExpiredAt = $param["ExpiredAt"];
        }

        if (array_key_exists("PayMod",$param) and $param["PayMod"] !== null) {
            $this->PayMod = $param["PayMod"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }

        if (array_key_exists("AIFeature",$param) and $param["AIFeature"] !== null) {
            $this->AIFeature = $param["AIFeature"];
        }

        if (array_key_exists("EnableCosMAZ",$param) and $param["EnableCosMAZ"] !== null) {
            $this->EnableCosMAZ = $param["EnableCosMAZ"];
        }

        if (array_key_exists("EnableCosVersioning",$param) and $param["EnableCosVersioning"] !== null) {
            $this->EnableCosVersioning = $param["EnableCosVersioning"];
        }
    }
}
