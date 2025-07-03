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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 机位信息
 *
 * @method integer getPositionId() 获取机位ID
 * @method void setPositionId(integer $PositionId) 设置机位ID
 * @method integer getHeight() 获取机位高度
 * @method void setHeight(integer $Height) 设置机位高度
 * @method string getPositionCode() 获取机位编号
 * @method void setPositionCode(string $PositionCode) 设置机位编号
 * @method integer getPositionStatus() 获取机位状态,0 空闲,1 已用,2 不可用,3 预占用,4 预留
 * @method void setPositionStatus(integer $PositionStatus) 设置机位状态,0 空闲,1 已用,2 不可用,3 预占用,4 预留
 * @method integer getPlanDeviceType() 获取设备规划类型ID
 * @method void setPlanDeviceType(integer $PlanDeviceType) 设置设备规划类型ID
 * @method integer getIdcUnitId() 获取机位所属的机房管理单元ID
 * @method void setIdcUnitId(integer $IdcUnitId) 设置机位所属的机房管理单元ID
 * @method integer getRackId() 获取机位所属的机架ID
 * @method void setRackId(integer $RackId) 设置机位所属的机架ID
 * @method string getRackName() 获取机位所属的机架名称
 * @method void setRackName(string $RackName) 设置机位所属的机架名称
 * @method string getIdcUnitName() 获取机位所属的机房管理单元名称
 * @method void setIdcUnitName(string $IdcUnitName) 设置机位所属的机房管理单元名称
 * @method string getIdcName() 获取机位所属的机房名称
 * @method void setIdcName(string $IdcName) 设置机位所属的机房名称
 * @method integer getIdcId() 获取机位所属的机房ID
 * @method void setIdcId(integer $IdcId) 设置机位所属的机房ID
 * @method string getSn() 获取机位上如果有设备，该字段代表设备的 SN 码，如果是空闲机位，不返回该字段。
 * @method void setSn(string $Sn) 设置机位上如果有设备，该字段代表设备的 SN 码，如果是空闲机位，不返回该字段。
 * @method string getAssetId() 获取机位上如果有设备，该字段代表设备的固资号，如果是空闲机位，不返回该字段。
 * @method void setAssetId(string $AssetId) 设置机位上如果有设备，该字段代表设备的固资号，如果是空闲机位，不返回该字段。
 * @method string getModelVersion() 获取机位上如果有设备，该字段代表设备的设备型号加版本号，如果是空闲机位，不返回该字段。
 * @method void setModelVersion(string $ModelVersion) 设置机位上如果有设备，该字段代表设备的设备型号加版本号，如果是空闲机位，不返回该字段。
 */
class Position extends AbstractModel
{
    /**
     * @var integer 机位ID
     */
    public $PositionId;

    /**
     * @var integer 机位高度
     */
    public $Height;

    /**
     * @var string 机位编号
     */
    public $PositionCode;

    /**
     * @var integer 机位状态,0 空闲,1 已用,2 不可用,3 预占用,4 预留
     */
    public $PositionStatus;

    /**
     * @var integer 设备规划类型ID
     */
    public $PlanDeviceType;

    /**
     * @var integer 机位所属的机房管理单元ID
     */
    public $IdcUnitId;

    /**
     * @var integer 机位所属的机架ID
     */
    public $RackId;

    /**
     * @var string 机位所属的机架名称
     */
    public $RackName;

    /**
     * @var string 机位所属的机房管理单元名称
     */
    public $IdcUnitName;

    /**
     * @var string 机位所属的机房名称
     */
    public $IdcName;

    /**
     * @var integer 机位所属的机房ID
     */
    public $IdcId;

    /**
     * @var string 机位上如果有设备，该字段代表设备的 SN 码，如果是空闲机位，不返回该字段。
     */
    public $Sn;

    /**
     * @var string 机位上如果有设备，该字段代表设备的固资号，如果是空闲机位，不返回该字段。
     */
    public $AssetId;

    /**
     * @var string 机位上如果有设备，该字段代表设备的设备型号加版本号，如果是空闲机位，不返回该字段。
     */
    public $ModelVersion;

    /**
     * @param integer $PositionId 机位ID
     * @param integer $Height 机位高度
     * @param string $PositionCode 机位编号
     * @param integer $PositionStatus 机位状态,0 空闲,1 已用,2 不可用,3 预占用,4 预留
     * @param integer $PlanDeviceType 设备规划类型ID
     * @param integer $IdcUnitId 机位所属的机房管理单元ID
     * @param integer $RackId 机位所属的机架ID
     * @param string $RackName 机位所属的机架名称
     * @param string $IdcUnitName 机位所属的机房管理单元名称
     * @param string $IdcName 机位所属的机房名称
     * @param integer $IdcId 机位所属的机房ID
     * @param string $Sn 机位上如果有设备，该字段代表设备的 SN 码，如果是空闲机位，不返回该字段。
     * @param string $AssetId 机位上如果有设备，该字段代表设备的固资号，如果是空闲机位，不返回该字段。
     * @param string $ModelVersion 机位上如果有设备，该字段代表设备的设备型号加版本号，如果是空闲机位，不返回该字段。
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
        if (array_key_exists("PositionId",$param) and $param["PositionId"] !== null) {
            $this->PositionId = $param["PositionId"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("PositionCode",$param) and $param["PositionCode"] !== null) {
            $this->PositionCode = $param["PositionCode"];
        }

        if (array_key_exists("PositionStatus",$param) and $param["PositionStatus"] !== null) {
            $this->PositionStatus = $param["PositionStatus"];
        }

        if (array_key_exists("PlanDeviceType",$param) and $param["PlanDeviceType"] !== null) {
            $this->PlanDeviceType = $param["PlanDeviceType"];
        }

        if (array_key_exists("IdcUnitId",$param) and $param["IdcUnitId"] !== null) {
            $this->IdcUnitId = $param["IdcUnitId"];
        }

        if (array_key_exists("RackId",$param) and $param["RackId"] !== null) {
            $this->RackId = $param["RackId"];
        }

        if (array_key_exists("RackName",$param) and $param["RackName"] !== null) {
            $this->RackName = $param["RackName"];
        }

        if (array_key_exists("IdcUnitName",$param) and $param["IdcUnitName"] !== null) {
            $this->IdcUnitName = $param["IdcUnitName"];
        }

        if (array_key_exists("IdcName",$param) and $param["IdcName"] !== null) {
            $this->IdcName = $param["IdcName"];
        }

        if (array_key_exists("IdcId",$param) and $param["IdcId"] !== null) {
            $this->IdcId = $param["IdcId"];
        }

        if (array_key_exists("Sn",$param) and $param["Sn"] !== null) {
            $this->Sn = $param["Sn"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("ModelVersion",$param) and $param["ModelVersion"] !== null) {
            $this->ModelVersion = $param["ModelVersion"];
        }
    }
}
