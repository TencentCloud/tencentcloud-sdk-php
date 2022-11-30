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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 专用宿主机实例详细信息
 *
 * @method Placement getPlacement() 获取专用宿主机实例所在的位置。通过该参数可以指定实例所属可用区，所属项目等属性。
 * @method void setPlacement(Placement $Placement) 设置专用宿主机实例所在的位置。通过该参数可以指定实例所属可用区，所属项目等属性。
 * @method string getHostId() 获取专用宿主机实例ID
 * @method void setHostId(string $HostId) 设置专用宿主机实例ID
 * @method string getHostType() 获取专用宿主机实例类型
 * @method void setHostType(string $HostType) 设置专用宿主机实例类型
 * @method string getHostName() 获取专用宿主机实例名称
 * @method void setHostName(string $HostName) 设置专用宿主机实例名称
 * @method string getHostChargeType() 获取专用宿主机实例付费模式
 * @method void setHostChargeType(string $HostChargeType) 设置专用宿主机实例付费模式
 * @method string getRenewFlag() 获取专用宿主机实例自动续费标记
 * @method void setRenewFlag(string $RenewFlag) 设置专用宿主机实例自动续费标记
 * @method string getCreatedTime() 获取专用宿主机实例创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置专用宿主机实例创建时间
 * @method string getExpiredTime() 获取专用宿主机实例过期时间
 * @method void setExpiredTime(string $ExpiredTime) 设置专用宿主机实例过期时间
 * @method array getInstanceIds() 获取专用宿主机实例上已创建云子机的实例id列表
 * @method void setInstanceIds(array $InstanceIds) 设置专用宿主机实例上已创建云子机的实例id列表
 * @method string getHostState() 获取专用宿主机实例状态
 * @method void setHostState(string $HostState) 设置专用宿主机实例状态
 * @method string getHostIp() 获取专用宿主机实例IP
 * @method void setHostIp(string $HostIp) 设置专用宿主机实例IP
 * @method HostResource getHostResource() 获取专用宿主机实例资源信息
 * @method void setHostResource(HostResource $HostResource) 设置专用宿主机实例资源信息
 * @method string getCageId() 获取专用宿主机所属的围笼ID。该字段仅对金融专区围笼内的专用宿主机有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCageId(string $CageId) 设置专用宿主机所属的围笼ID。该字段仅对金融专区围笼内的专用宿主机有效。
注意：此字段可能返回 null，表示取不到有效值。
 */
class HostItem extends AbstractModel
{
    /**
     * @var Placement 专用宿主机实例所在的位置。通过该参数可以指定实例所属可用区，所属项目等属性。
     */
    public $Placement;

    /**
     * @var string 专用宿主机实例ID
     */
    public $HostId;

    /**
     * @var string 专用宿主机实例类型
     */
    public $HostType;

    /**
     * @var string 专用宿主机实例名称
     */
    public $HostName;

    /**
     * @var string 专用宿主机实例付费模式
     */
    public $HostChargeType;

    /**
     * @var string 专用宿主机实例自动续费标记
     */
    public $RenewFlag;

    /**
     * @var string 专用宿主机实例创建时间
     */
    public $CreatedTime;

    /**
     * @var string 专用宿主机实例过期时间
     */
    public $ExpiredTime;

    /**
     * @var array 专用宿主机实例上已创建云子机的实例id列表
     */
    public $InstanceIds;

    /**
     * @var string 专用宿主机实例状态
     */
    public $HostState;

    /**
     * @var string 专用宿主机实例IP
     */
    public $HostIp;

    /**
     * @var HostResource 专用宿主机实例资源信息
     */
    public $HostResource;

    /**
     * @var string 专用宿主机所属的围笼ID。该字段仅对金融专区围笼内的专用宿主机有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CageId;

    /**
     * @param Placement $Placement 专用宿主机实例所在的位置。通过该参数可以指定实例所属可用区，所属项目等属性。
     * @param string $HostId 专用宿主机实例ID
     * @param string $HostType 专用宿主机实例类型
     * @param string $HostName 专用宿主机实例名称
     * @param string $HostChargeType 专用宿主机实例付费模式
     * @param string $RenewFlag 专用宿主机实例自动续费标记
     * @param string $CreatedTime 专用宿主机实例创建时间
     * @param string $ExpiredTime 专用宿主机实例过期时间
     * @param array $InstanceIds 专用宿主机实例上已创建云子机的实例id列表
     * @param string $HostState 专用宿主机实例状态
     * @param string $HostIp 专用宿主机实例IP
     * @param HostResource $HostResource 专用宿主机实例资源信息
     * @param string $CageId 专用宿主机所属的围笼ID。该字段仅对金融专区围笼内的专用宿主机有效。
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
        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $this->HostId = $param["HostId"];
        }

        if (array_key_exists("HostType",$param) and $param["HostType"] !== null) {
            $this->HostType = $param["HostType"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostChargeType",$param) and $param["HostChargeType"] !== null) {
            $this->HostChargeType = $param["HostChargeType"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("HostState",$param) and $param["HostState"] !== null) {
            $this->HostState = $param["HostState"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("HostResource",$param) and $param["HostResource"] !== null) {
            $this->HostResource = new HostResource();
            $this->HostResource->deserialize($param["HostResource"]);
        }

        if (array_key_exists("CageId",$param) and $param["CageId"] !== null) {
            $this->CageId = $param["CageId"];
        }
    }
}
