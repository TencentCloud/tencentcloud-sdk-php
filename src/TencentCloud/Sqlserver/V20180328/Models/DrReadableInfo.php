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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备机只读信息
 *
 * @method string getDrInstanceId() 获取备机资源ID
 * @method void setDrInstanceId(string $DrInstanceId) 设置备机资源ID
 * @method string getZone() 获取备机可用区
 * @method void setZone(string $Zone) 设置备机可用区
 * @method string getSlaveStatus() 获取备机状态
DR_CREATING-备机创建中
DR_RUNNING-备机运行中
DR_UNAVAILABLE-备机不可用
DR_ISOLATED-备机已隔离
DR_RECYCLING-备机回收中
DR_RECYCLED-备机已回收
DR_JOB_RUNNING-备机执行任务中
DR_OFFLINE-备机已下线
DR_FAIL_OVER-备机只读故障转移中
 * @method void setSlaveStatus(string $SlaveStatus) 设置备机状态
DR_CREATING-备机创建中
DR_RUNNING-备机运行中
DR_UNAVAILABLE-备机不可用
DR_ISOLATED-备机已隔离
DR_RECYCLING-备机回收中
DR_RECYCLED-备机已回收
DR_JOB_RUNNING-备机执行任务中
DR_OFFLINE-备机已下线
DR_FAIL_OVER-备机只读故障转移中
 * @method string getReadableStatus() 获取备机可读状态，enable-已开启，disable-已关闭
 * @method void setReadableStatus(string $ReadableStatus) 设置备机可读状态，enable-已开启，disable-已关闭
 * @method string getVip() 获取备机只读vip
 * @method void setVip(string $Vip) 设置备机只读vip
 * @method integer getVPort() 获取备机只读端口
 * @method void setVPort(integer $VPort) 设置备机只读端口
 * @method string getUniqVpcId() 获取备机所在私有网络ID
 * @method void setUniqVpcId(string $UniqVpcId) 设置备机所在私有网络ID
 * @method string getUniqSubnetId() 获取备机所在私有网络子网ID
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置备机所在私有网络子网ID
 * @method integer getRoWeight() 获取备机只读权重
 * @method void setRoWeight(integer $RoWeight) 设置备机只读权重
 * @method string getReadMode() 获取备机只读模式，BalancedReadOnly-多备一读模式，SingleReadOnly-一备一读模式
 * @method void setReadMode(string $ReadMode) 设置备机只读模式，BalancedReadOnly-多备一读模式，SingleReadOnly-一备一读模式
 */
class DrReadableInfo extends AbstractModel
{
    /**
     * @var string 备机资源ID
     */
    public $DrInstanceId;

    /**
     * @var string 备机可用区
     */
    public $Zone;

    /**
     * @var string 备机状态
DR_CREATING-备机创建中
DR_RUNNING-备机运行中
DR_UNAVAILABLE-备机不可用
DR_ISOLATED-备机已隔离
DR_RECYCLING-备机回收中
DR_RECYCLED-备机已回收
DR_JOB_RUNNING-备机执行任务中
DR_OFFLINE-备机已下线
DR_FAIL_OVER-备机只读故障转移中
     */
    public $SlaveStatus;

    /**
     * @var string 备机可读状态，enable-已开启，disable-已关闭
     */
    public $ReadableStatus;

    /**
     * @var string 备机只读vip
     */
    public $Vip;

    /**
     * @var integer 备机只读端口
     */
    public $VPort;

    /**
     * @var string 备机所在私有网络ID
     */
    public $UniqVpcId;

    /**
     * @var string 备机所在私有网络子网ID
     */
    public $UniqSubnetId;

    /**
     * @var integer 备机只读权重
     */
    public $RoWeight;

    /**
     * @var string 备机只读模式，BalancedReadOnly-多备一读模式，SingleReadOnly-一备一读模式
     */
    public $ReadMode;

    /**
     * @param string $DrInstanceId 备机资源ID
     * @param string $Zone 备机可用区
     * @param string $SlaveStatus 备机状态
DR_CREATING-备机创建中
DR_RUNNING-备机运行中
DR_UNAVAILABLE-备机不可用
DR_ISOLATED-备机已隔离
DR_RECYCLING-备机回收中
DR_RECYCLED-备机已回收
DR_JOB_RUNNING-备机执行任务中
DR_OFFLINE-备机已下线
DR_FAIL_OVER-备机只读故障转移中
     * @param string $ReadableStatus 备机可读状态，enable-已开启，disable-已关闭
     * @param string $Vip 备机只读vip
     * @param integer $VPort 备机只读端口
     * @param string $UniqVpcId 备机所在私有网络ID
     * @param string $UniqSubnetId 备机所在私有网络子网ID
     * @param integer $RoWeight 备机只读权重
     * @param string $ReadMode 备机只读模式，BalancedReadOnly-多备一读模式，SingleReadOnly-一备一读模式
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
        if (array_key_exists("DrInstanceId",$param) and $param["DrInstanceId"] !== null) {
            $this->DrInstanceId = $param["DrInstanceId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SlaveStatus",$param) and $param["SlaveStatus"] !== null) {
            $this->SlaveStatus = $param["SlaveStatus"];
        }

        if (array_key_exists("ReadableStatus",$param) and $param["ReadableStatus"] !== null) {
            $this->ReadableStatus = $param["ReadableStatus"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VPort",$param) and $param["VPort"] !== null) {
            $this->VPort = $param["VPort"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("RoWeight",$param) and $param["RoWeight"] !== null) {
            $this->RoWeight = $param["RoWeight"];
        }

        if (array_key_exists("ReadMode",$param) and $param["ReadMode"] !== null) {
            $this->ReadMode = $param["ReadMode"];
        }
    }
}
