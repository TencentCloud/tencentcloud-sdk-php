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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例信息
公共实例过期时间 0001-01-01T00:00:00Z，公共实例是永久有效
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method integer getInstanceType() 获取实例类型（0 公共实例 1 标准企业实例 2新企业实例3新公共实例）
 * @method void setInstanceType(integer $InstanceType) 设置实例类型（0 公共实例 1 标准企业实例 2新企业实例3新公共实例）
 * @method string getRegion() 获取地域字母缩写
 * @method void setRegion(string $Region) 设置地域字母缩写
 * @method string getZoneId() 获取区域全拼
 * @method void setZoneId(string $ZoneId) 设置区域全拼
 * @method integer getTotalDeviceNum() 获取支持设备总数
 * @method void setTotalDeviceNum(integer $TotalDeviceNum) 设置支持设备总数
 * @method integer getUsedDeviceNum() 获取已注册设备数
 * @method void setUsedDeviceNum(integer $UsedDeviceNum) 设置已注册设备数
 * @method integer getProjectNum() 获取项目数
 * @method void setProjectNum(integer $ProjectNum) 设置项目数
 * @method integer getProductNum() 获取产品数
 * @method void setProductNum(integer $ProductNum) 设置产品数
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getExpireTime() 获取过期时间，公共实例过期时间 0001-01-01T00:00:00Z，公共实例是永久有效
 * @method void setExpireTime(string $ExpireTime) 设置过期时间，公共实例过期时间 0001-01-01T00:00:00Z，公共实例是永久有效
 * @method integer getTotalDevice() 获取总设备数
 * @method void setTotalDevice(integer $TotalDevice) 设置总设备数
 * @method integer getActivateDevice() 获取激活设备数
 * @method void setActivateDevice(integer $ActivateDevice) 设置激活设备数
 * @method string getDescription() 获取备注
 * @method void setDescription(string $Description) 设置备注
 * @method integer getStatus() 获取实例状态
 * @method void setStatus(integer $Status) 设置实例状态
 * @method integer getUpDownTPS() 获取消息上下行配置TPS
 * @method void setUpDownTPS(integer $UpDownTPS) 设置消息上下行配置TPS
 * @method integer getUpDownCurrentTPS() 获取当前消息上下行TPS
 * @method void setUpDownCurrentTPS(integer $UpDownCurrentTPS) 设置当前消息上下行TPS
 * @method integer getForwardTPS() 获取消息转发配置TPS
 * @method void setForwardTPS(integer $ForwardTPS) 设置消息转发配置TPS
 * @method integer getForwardCurrentTPS() 获取消息转发当前TPS
 * @method void setForwardCurrentTPS(integer $ForwardCurrentTPS) 设置消息转发当前TPS
 * @method integer getCellNum() 获取实例单元数
 * @method void setCellNum(integer $CellNum) 设置实例单元数
 * @method string getBillingTag() 获取实例Tag，企业实例必传
 * @method void setBillingTag(string $BillingTag) 设置实例Tag，企业实例必传
 * @method integer getEverydayFreeMessageCount() 获取每日消息数
 * @method void setEverydayFreeMessageCount(integer $EverydayFreeMessageCount) 设置每日消息数
 * @method integer getMaxDeviceOnlineCount() 获取最大在线设备数
 * @method void setMaxDeviceOnlineCount(integer $MaxDeviceOnlineCount) 设置最大在线设备数
 */
class InstanceDetail extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 实例类型（0 公共实例 1 标准企业实例 2新企业实例3新公共实例）
     */
    public $InstanceType;

    /**
     * @var string 地域字母缩写
     */
    public $Region;

    /**
     * @var string 区域全拼
     */
    public $ZoneId;

    /**
     * @var integer 支持设备总数
     */
    public $TotalDeviceNum;

    /**
     * @var integer 已注册设备数
     */
    public $UsedDeviceNum;

    /**
     * @var integer 项目数
     */
    public $ProjectNum;

    /**
     * @var integer 产品数
     */
    public $ProductNum;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 过期时间，公共实例过期时间 0001-01-01T00:00:00Z，公共实例是永久有效
     */
    public $ExpireTime;

    /**
     * @var integer 总设备数
     */
    public $TotalDevice;

    /**
     * @var integer 激活设备数
     */
    public $ActivateDevice;

    /**
     * @var string 备注
     */
    public $Description;

    /**
     * @var integer 实例状态
     */
    public $Status;

    /**
     * @var integer 消息上下行配置TPS
     */
    public $UpDownTPS;

    /**
     * @var integer 当前消息上下行TPS
     */
    public $UpDownCurrentTPS;

    /**
     * @var integer 消息转发配置TPS
     */
    public $ForwardTPS;

    /**
     * @var integer 消息转发当前TPS
     */
    public $ForwardCurrentTPS;

    /**
     * @var integer 实例单元数
     */
    public $CellNum;

    /**
     * @var string 实例Tag，企业实例必传
     */
    public $BillingTag;

    /**
     * @var integer 每日消息数
     */
    public $EverydayFreeMessageCount;

    /**
     * @var integer 最大在线设备数
     */
    public $MaxDeviceOnlineCount;

    /**
     * @param string $InstanceId 实例ID
     * @param integer $InstanceType 实例类型（0 公共实例 1 标准企业实例 2新企业实例3新公共实例）
     * @param string $Region 地域字母缩写
     * @param string $ZoneId 区域全拼
     * @param integer $TotalDeviceNum 支持设备总数
     * @param integer $UsedDeviceNum 已注册设备数
     * @param integer $ProjectNum 项目数
     * @param integer $ProductNum 产品数
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param string $ExpireTime 过期时间，公共实例过期时间 0001-01-01T00:00:00Z，公共实例是永久有效
     * @param integer $TotalDevice 总设备数
     * @param integer $ActivateDevice 激活设备数
     * @param string $Description 备注
     * @param integer $Status 实例状态
     * @param integer $UpDownTPS 消息上下行配置TPS
     * @param integer $UpDownCurrentTPS 当前消息上下行TPS
     * @param integer $ForwardTPS 消息转发配置TPS
     * @param integer $ForwardCurrentTPS 消息转发当前TPS
     * @param integer $CellNum 实例单元数
     * @param string $BillingTag 实例Tag，企业实例必传
     * @param integer $EverydayFreeMessageCount 每日消息数
     * @param integer $MaxDeviceOnlineCount 最大在线设备数
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("TotalDeviceNum",$param) and $param["TotalDeviceNum"] !== null) {
            $this->TotalDeviceNum = $param["TotalDeviceNum"];
        }

        if (array_key_exists("UsedDeviceNum",$param) and $param["UsedDeviceNum"] !== null) {
            $this->UsedDeviceNum = $param["UsedDeviceNum"];
        }

        if (array_key_exists("ProjectNum",$param) and $param["ProjectNum"] !== null) {
            $this->ProjectNum = $param["ProjectNum"];
        }

        if (array_key_exists("ProductNum",$param) and $param["ProductNum"] !== null) {
            $this->ProductNum = $param["ProductNum"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("TotalDevice",$param) and $param["TotalDevice"] !== null) {
            $this->TotalDevice = $param["TotalDevice"];
        }

        if (array_key_exists("ActivateDevice",$param) and $param["ActivateDevice"] !== null) {
            $this->ActivateDevice = $param["ActivateDevice"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UpDownTPS",$param) and $param["UpDownTPS"] !== null) {
            $this->UpDownTPS = $param["UpDownTPS"];
        }

        if (array_key_exists("UpDownCurrentTPS",$param) and $param["UpDownCurrentTPS"] !== null) {
            $this->UpDownCurrentTPS = $param["UpDownCurrentTPS"];
        }

        if (array_key_exists("ForwardTPS",$param) and $param["ForwardTPS"] !== null) {
            $this->ForwardTPS = $param["ForwardTPS"];
        }

        if (array_key_exists("ForwardCurrentTPS",$param) and $param["ForwardCurrentTPS"] !== null) {
            $this->ForwardCurrentTPS = $param["ForwardCurrentTPS"];
        }

        if (array_key_exists("CellNum",$param) and $param["CellNum"] !== null) {
            $this->CellNum = $param["CellNum"];
        }

        if (array_key_exists("BillingTag",$param) and $param["BillingTag"] !== null) {
            $this->BillingTag = $param["BillingTag"];
        }

        if (array_key_exists("EverydayFreeMessageCount",$param) and $param["EverydayFreeMessageCount"] !== null) {
            $this->EverydayFreeMessageCount = $param["EverydayFreeMessageCount"];
        }

        if (array_key_exists("MaxDeviceOnlineCount",$param) and $param["MaxDeviceOnlineCount"] !== null) {
            $this->MaxDeviceOnlineCount = $param["MaxDeviceOnlineCount"];
        }
    }
}
