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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 流量包信息
 *
 * @method string getResourceId() 获取流量包的唯一资源ID
 * @method void setResourceId(string $ResourceId) 设置流量包的唯一资源ID
 * @method integer getAppId() 获取流量包所属的用户AppId
 * @method void setAppId(integer $AppId) 设置流量包所属的用户AppId
 * @method string getPackageType() 获取流量包规格类型。可取值如下：
DEVICE_1_FLOW_20G、DEVICE_2_FLOW_50G、
DEVICE_3_FLOW_100G、
DEVICE_5_FLOW_500G，分别代表20G、50G、100G、500G档位的流量包。
档位也影响流量包可绑定的设备数量上限：
20G：最多绑定1个设备
50G：最多绑定2个设备
100G：最多绑定3个设备
500G：最多绑定5个设备
 * @method void setPackageType(string $PackageType) 设置流量包规格类型。可取值如下：
DEVICE_1_FLOW_20G、DEVICE_2_FLOW_50G、
DEVICE_3_FLOW_100G、
DEVICE_5_FLOW_500G，分别代表20G、50G、100G、500G档位的流量包。
档位也影响流量包可绑定的设备数量上限：
20G：最多绑定1个设备
50G：最多绑定2个设备
100G：最多绑定3个设备
500G：最多绑定5个设备
 * @method integer getStatus() 获取流量包状态，0：未生效，1：有效期内，2：已过期
 * @method void setStatus(integer $Status) 设置流量包状态，0：未生效，1：有效期内，2：已过期
 * @method integer getCreateTime() 获取购买时间，Unix时间戳格式，单位：秒
 * @method void setCreateTime(integer $CreateTime) 设置购买时间，Unix时间戳格式，单位：秒
 * @method integer getActiveTime() 获取生效时间，Unix时间戳格式，单位：秒
 * @method void setActiveTime(integer $ActiveTime) 设置生效时间，Unix时间戳格式，单位：秒
 * @method integer getExpireTime() 获取过期时间，Unix时间戳格式，单位：秒
 * @method void setExpireTime(integer $ExpireTime) 设置过期时间，Unix时间戳格式，单位：秒
 * @method array getDeviceList() 获取流量包绑定的设备ID列表
 * @method void setDeviceList(array $DeviceList) 设置流量包绑定的设备ID列表
 * @method integer getCapacitySize() 获取流量包总容量，单位：MB
 * @method void setCapacitySize(integer $CapacitySize) 设置流量包总容量，单位：MB
 * @method integer getCapacityRemain() 获取流量包余量，单位：MB
 * @method void setCapacityRemain(integer $CapacityRemain) 设置流量包余量，单位：MB
 * @method boolean getRenewFlag() 获取自动续费标识。true代表自动续费，false代表不自动续费
 * @method void setRenewFlag(boolean $RenewFlag) 设置自动续费标识。true代表自动续费，false代表不自动续费
 * @method integer getModifyStatus() 获取资源包变更状态，0：未发生变配；1：变配中；2：已变配或已续费
 * @method void setModifyStatus(integer $ModifyStatus) 设置资源包变更状态，0：未发生变配；1：变配中；2：已变配或已续费
 * @method boolean getTruncFlag() 获取流量截断标识。true代表开启流量截断，false代表不开启流量截断
 * @method void setTruncFlag(boolean $TruncFlag) 设置流量截断标识。true代表开启流量截断，false代表不开启流量截断
 * @method integer getCapacityRemainPrecise() 获取流量包精确余量，单位：MB
 * @method void setCapacityRemainPrecise(integer $CapacityRemainPrecise) 设置流量包精确余量，单位：MB
 */
class FlowPackageInfo extends AbstractModel
{
    /**
     * @var string 流量包的唯一资源ID
     */
    public $ResourceId;

    /**
     * @var integer 流量包所属的用户AppId
     */
    public $AppId;

    /**
     * @var string 流量包规格类型。可取值如下：
DEVICE_1_FLOW_20G、DEVICE_2_FLOW_50G、
DEVICE_3_FLOW_100G、
DEVICE_5_FLOW_500G，分别代表20G、50G、100G、500G档位的流量包。
档位也影响流量包可绑定的设备数量上限：
20G：最多绑定1个设备
50G：最多绑定2个设备
100G：最多绑定3个设备
500G：最多绑定5个设备
     */
    public $PackageType;

    /**
     * @var integer 流量包状态，0：未生效，1：有效期内，2：已过期
     */
    public $Status;

    /**
     * @var integer 购买时间，Unix时间戳格式，单位：秒
     */
    public $CreateTime;

    /**
     * @var integer 生效时间，Unix时间戳格式，单位：秒
     */
    public $ActiveTime;

    /**
     * @var integer 过期时间，Unix时间戳格式，单位：秒
     */
    public $ExpireTime;

    /**
     * @var array 流量包绑定的设备ID列表
     */
    public $DeviceList;

    /**
     * @var integer 流量包总容量，单位：MB
     */
    public $CapacitySize;

    /**
     * @var integer 流量包余量，单位：MB
     */
    public $CapacityRemain;

    /**
     * @var boolean 自动续费标识。true代表自动续费，false代表不自动续费
     */
    public $RenewFlag;

    /**
     * @var integer 资源包变更状态，0：未发生变配；1：变配中；2：已变配或已续费
     */
    public $ModifyStatus;

    /**
     * @var boolean 流量截断标识。true代表开启流量截断，false代表不开启流量截断
     */
    public $TruncFlag;

    /**
     * @var integer 流量包精确余量，单位：MB
     */
    public $CapacityRemainPrecise;

    /**
     * @param string $ResourceId 流量包的唯一资源ID
     * @param integer $AppId 流量包所属的用户AppId
     * @param string $PackageType 流量包规格类型。可取值如下：
DEVICE_1_FLOW_20G、DEVICE_2_FLOW_50G、
DEVICE_3_FLOW_100G、
DEVICE_5_FLOW_500G，分别代表20G、50G、100G、500G档位的流量包。
档位也影响流量包可绑定的设备数量上限：
20G：最多绑定1个设备
50G：最多绑定2个设备
100G：最多绑定3个设备
500G：最多绑定5个设备
     * @param integer $Status 流量包状态，0：未生效，1：有效期内，2：已过期
     * @param integer $CreateTime 购买时间，Unix时间戳格式，单位：秒
     * @param integer $ActiveTime 生效时间，Unix时间戳格式，单位：秒
     * @param integer $ExpireTime 过期时间，Unix时间戳格式，单位：秒
     * @param array $DeviceList 流量包绑定的设备ID列表
     * @param integer $CapacitySize 流量包总容量，单位：MB
     * @param integer $CapacityRemain 流量包余量，单位：MB
     * @param boolean $RenewFlag 自动续费标识。true代表自动续费，false代表不自动续费
     * @param integer $ModifyStatus 资源包变更状态，0：未发生变配；1：变配中；2：已变配或已续费
     * @param boolean $TruncFlag 流量截断标识。true代表开启流量截断，false代表不开启流量截断
     * @param integer $CapacityRemainPrecise 流量包精确余量，单位：MB
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ActiveTime",$param) and $param["ActiveTime"] !== null) {
            $this->ActiveTime = $param["ActiveTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("DeviceList",$param) and $param["DeviceList"] !== null) {
            $this->DeviceList = $param["DeviceList"];
        }

        if (array_key_exists("CapacitySize",$param) and $param["CapacitySize"] !== null) {
            $this->CapacitySize = $param["CapacitySize"];
        }

        if (array_key_exists("CapacityRemain",$param) and $param["CapacityRemain"] !== null) {
            $this->CapacityRemain = $param["CapacityRemain"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("ModifyStatus",$param) and $param["ModifyStatus"] !== null) {
            $this->ModifyStatus = $param["ModifyStatus"];
        }

        if (array_key_exists("TruncFlag",$param) and $param["TruncFlag"] !== null) {
            $this->TruncFlag = $param["TruncFlag"];
        }

        if (array_key_exists("CapacityRemainPrecise",$param) and $param["CapacityRemainPrecise"] !== null) {
            $this->CapacityRemainPrecise = $param["CapacityRemainPrecise"];
        }
    }
}
