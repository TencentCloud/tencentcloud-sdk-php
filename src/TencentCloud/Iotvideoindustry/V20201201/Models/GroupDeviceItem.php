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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分组下设备信息
 *
 * @method string getDeviceId() 获取设备唯一标识
 * @method void setDeviceId(string $DeviceId) 设置设备唯一标识
 * @method string getNickName() 获取设备名称
 * @method void setNickName(string $NickName) 设置设备名称
 * @method integer getStatus() 获取设备状态
 * @method void setStatus(integer $Status) 设置设备状态
 * @method string getExtraInformation() 获取扩展信息
 * @method void setExtraInformation(string $ExtraInformation) 设置扩展信息
 * @method integer getDeviceType() 获取设备类型
 * @method void setDeviceType(integer $DeviceType) 设置设备类型
 * @method string getRTSPUrl() 获取rtsp地址
 * @method void setRTSPUrl(string $RTSPUrl) 设置rtsp地址
 * @method string getDeviceCode() 获取设备编码
 * @method void setDeviceCode(string $DeviceCode) 设置设备编码
 * @method integer getIsRecord() 获取是否存在录像
 * @method void setIsRecord(integer $IsRecord) 设置是否存在录像
 * @method integer getRecordable() 获取该设备是否可录制
 * @method void setRecordable(integer $Recordable) 设置该设备是否可录制
 * @method string getProtocol() 获取设备接入协议
 * @method void setProtocol(string $Protocol) 设置设备接入协议
 * @method integer getCreateTime() 获取设备创建时间
 * @method void setCreateTime(integer $CreateTime) 设置设备创建时间
 * @method integer getChannelNum() 获取设备通道总数
 * @method void setChannelNum(integer $ChannelNum) 设置设备通道总数
 * @method integer getVideoChannelNum() 获取设备视频通道总数
 * @method void setVideoChannelNum(integer $VideoChannelNum) 设置设备视频通道总数
 */
class GroupDeviceItem extends AbstractModel
{
    /**
     * @var string 设备唯一标识
     */
    public $DeviceId;

    /**
     * @var string 设备名称
     */
    public $NickName;

    /**
     * @var integer 设备状态
     */
    public $Status;

    /**
     * @var string 扩展信息
     */
    public $ExtraInformation;

    /**
     * @var integer 设备类型
     */
    public $DeviceType;

    /**
     * @var string rtsp地址
     */
    public $RTSPUrl;

    /**
     * @var string 设备编码
     */
    public $DeviceCode;

    /**
     * @var integer 是否存在录像
     */
    public $IsRecord;

    /**
     * @var integer 该设备是否可录制
     */
    public $Recordable;

    /**
     * @var string 设备接入协议
     */
    public $Protocol;

    /**
     * @var integer 设备创建时间
     */
    public $CreateTime;

    /**
     * @var integer 设备通道总数
     */
    public $ChannelNum;

    /**
     * @var integer 设备视频通道总数
     */
    public $VideoChannelNum;

    /**
     * @param string $DeviceId 设备唯一标识
     * @param string $NickName 设备名称
     * @param integer $Status 设备状态
     * @param string $ExtraInformation 扩展信息
     * @param integer $DeviceType 设备类型
     * @param string $RTSPUrl rtsp地址
     * @param string $DeviceCode 设备编码
     * @param integer $IsRecord 是否存在录像
     * @param integer $Recordable 该设备是否可录制
     * @param string $Protocol 设备接入协议
     * @param integer $CreateTime 设备创建时间
     * @param integer $ChannelNum 设备通道总数
     * @param integer $VideoChannelNum 设备视频通道总数
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
        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ExtraInformation",$param) and $param["ExtraInformation"] !== null) {
            $this->ExtraInformation = $param["ExtraInformation"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("RTSPUrl",$param) and $param["RTSPUrl"] !== null) {
            $this->RTSPUrl = $param["RTSPUrl"];
        }

        if (array_key_exists("DeviceCode",$param) and $param["DeviceCode"] !== null) {
            $this->DeviceCode = $param["DeviceCode"];
        }

        if (array_key_exists("IsRecord",$param) and $param["IsRecord"] !== null) {
            $this->IsRecord = $param["IsRecord"];
        }

        if (array_key_exists("Recordable",$param) and $param["Recordable"] !== null) {
            $this->Recordable = $param["Recordable"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ChannelNum",$param) and $param["ChannelNum"] !== null) {
            $this->ChannelNum = $param["ChannelNum"];
        }

        if (array_key_exists("VideoChannelNum",$param) and $param["VideoChannelNum"] !== null) {
            $this->VideoChannelNum = $param["VideoChannelNum"];
        }
    }
}
