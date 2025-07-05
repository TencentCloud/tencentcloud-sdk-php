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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Serverless HBase实例信息
 *
 * @method string getClusterId() 获取集群实例字符串ID
 * @method void setClusterId(string $ClusterId) 设置集群实例字符串ID
 * @method integer getId() 获取集群实例数字ID
 * @method void setId(integer $Id) 设置集群实例数字ID
 * @method string getStatusDesc() 获取状态描述
 * @method void setStatusDesc(string $StatusDesc) 设置状态描述
 * @method string getHealthStatus() 获取健康状态
 * @method void setHealthStatus(string $HealthStatus) 设置健康状态
 * @method string getClusterName() 获取实例名称
 * @method void setClusterName(string $ClusterName) 设置实例名称
 * @method integer getRegionId() 获取地域ID
 * @method void setRegionId(integer $RegionId) 设置地域ID
 * @method integer getZoneId() 获取主可用区ID
 * @method void setZoneId(integer $ZoneId) 设置主可用区ID
 * @method string getZone() 获取主可用区
 * @method void setZone(string $Zone) 设置主可用区
 * @method integer getAppId() 获取用户APPID
 * @method void setAppId(integer $AppId) 设置用户APPID
 * @method integer getVpcId() 获取主可用区私有网络ID
 * @method void setVpcId(integer $VpcId) 设置主可用区私有网络ID
 * @method integer getSubnetId() 获取主可用区子网ID
 * @method void setSubnetId(integer $SubnetId) 设置主可用区子网ID
 * @method integer getStatus() 获取状态码
 * @method void setStatus(integer $Status) 设置状态码
 * @method string getAddTime() 获取创建时间
 * @method void setAddTime(string $AddTime) 设置创建时间
 * @method integer getPayMode() 获取集群计费类型。0表示按量计费，1表示包年包月
 * @method void setPayMode(integer $PayMode) 设置集群计费类型。0表示按量计费，1表示包年包月
 * @method array getZoneSettings() 获取多可用区信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneSettings(array $ZoneSettings) 设置多可用区信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取实例标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置实例标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoRenewFlag() 获取自动续费标记， 0：表示通知即将过期，但不自动续费 1：表示通知即将过期，而且自动续费 2：表示不通知即将过期，也不自动续费，若业务无续费概念，设置为0
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标记， 0：表示通知即将过期，但不自动续费 1：表示通知即将过期，而且自动续费 2：表示不通知即将过期，也不自动续费，若业务无续费概念，设置为0
 * @method string getIsolateTime() 获取隔离时间，未隔离返回0000-00-00 00:00:00。
 * @method void setIsolateTime(string $IsolateTime) 设置隔离时间，未隔离返回0000-00-00 00:00:00。
 * @method string getExpireTime() 获取过期时间，后付费返回0000-00-00 00:00:00
 * @method void setExpireTime(string $ExpireTime) 设置过期时间，后付费返回0000-00-00 00:00:00
 */
class SLInstanceInfo extends AbstractModel
{
    /**
     * @var string 集群实例字符串ID
     */
    public $ClusterId;

    /**
     * @var integer 集群实例数字ID
     */
    public $Id;

    /**
     * @var string 状态描述
     */
    public $StatusDesc;

    /**
     * @var string 健康状态
     */
    public $HealthStatus;

    /**
     * @var string 实例名称
     */
    public $ClusterName;

    /**
     * @var integer 地域ID
     */
    public $RegionId;

    /**
     * @var integer 主可用区ID
     */
    public $ZoneId;

    /**
     * @var string 主可用区
     */
    public $Zone;

    /**
     * @var integer 用户APPID
     */
    public $AppId;

    /**
     * @var integer 主可用区私有网络ID
     */
    public $VpcId;

    /**
     * @var integer 主可用区子网ID
     */
    public $SubnetId;

    /**
     * @var integer 状态码
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $AddTime;

    /**
     * @var integer 集群计费类型。0表示按量计费，1表示包年包月
     */
    public $PayMode;

    /**
     * @var array 多可用区信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneSettings;

    /**
     * @var array 实例标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var integer 自动续费标记， 0：表示通知即将过期，但不自动续费 1：表示通知即将过期，而且自动续费 2：表示不通知即将过期，也不自动续费，若业务无续费概念，设置为0
     */
    public $AutoRenewFlag;

    /**
     * @var string 隔离时间，未隔离返回0000-00-00 00:00:00。
     */
    public $IsolateTime;

    /**
     * @var string 过期时间，后付费返回0000-00-00 00:00:00
     */
    public $ExpireTime;

    /**
     * @param string $ClusterId 集群实例字符串ID
     * @param integer $Id 集群实例数字ID
     * @param string $StatusDesc 状态描述
     * @param string $HealthStatus 健康状态
     * @param string $ClusterName 实例名称
     * @param integer $RegionId 地域ID
     * @param integer $ZoneId 主可用区ID
     * @param string $Zone 主可用区
     * @param integer $AppId 用户APPID
     * @param integer $VpcId 主可用区私有网络ID
     * @param integer $SubnetId 主可用区子网ID
     * @param integer $Status 状态码
     * @param string $AddTime 创建时间
     * @param integer $PayMode 集群计费类型。0表示按量计费，1表示包年包月
     * @param array $ZoneSettings 多可用区信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 实例标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoRenewFlag 自动续费标记， 0：表示通知即将过期，但不自动续费 1：表示通知即将过期，而且自动续费 2：表示不通知即将过期，也不自动续费，若业务无续费概念，设置为0
     * @param string $IsolateTime 隔离时间，未隔离返回0000-00-00 00:00:00。
     * @param string $ExpireTime 过期时间，后付费返回0000-00-00 00:00:00
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("HealthStatus",$param) and $param["HealthStatus"] !== null) {
            $this->HealthStatus = $param["HealthStatus"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ZoneSettings",$param) and $param["ZoneSettings"] !== null) {
            $this->ZoneSettings = [];
            foreach ($param["ZoneSettings"] as $key => $value){
                $obj = new ZoneSetting();
                $obj->deserialize($value);
                array_push($this->ZoneSettings, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
