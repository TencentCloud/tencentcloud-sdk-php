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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 出参
 *
 * @method string getInstanceName() 获取数据库实例
 * @method void setInstanceName(string $InstanceName) 设置数据库实例
 * @method string getIp() 获取数据库IP
 * @method void setIp(string $Ip) 设置数据库IP
 * @method integer getPort() 获取数据库端口
 * @method void setPort(integer $Port) 设置数据库端口
 * @method integer getMemSize() 获取数据库内存规格
 * @method void setMemSize(integer $MemSize) 设置数据库内存规格
 * @method integer getVolume() 获取数据库磁盘规格
 * @method void setVolume(integer $Volume) 设置数据库磁盘规格
 * @method string getService() 获取服务标识
 * @method void setService(string $Service) 设置服务标识
 * @method string getExpireTime() 获取过期时间
 * @method void setExpireTime(string $ExpireTime) 设置过期时间
 * @method string getApplyTime() 获取申请时间
 * @method void setApplyTime(string $ApplyTime) 设置申请时间
 * @method integer getPayType() 获取付费类型
 * @method void setPayType(integer $PayType) 设置付费类型
 * @method boolean getExpireFlag() 获取过期标识
 * @method void setExpireFlag(boolean $ExpireFlag) 设置过期标识
 * @method integer getStatus() 获取数据库状态
 * @method void setStatus(integer $Status) 设置数据库状态
 * @method integer getIsAutoRenew() 获取续费标识
 * @method void setIsAutoRenew(integer $IsAutoRenew) 设置续费标识
 * @method string getSerialNo() 获取数据库字符串
 * @method void setSerialNo(string $SerialNo) 设置数据库字符串
 * @method integer getZoneId() 获取ZoneId
 * @method void setZoneId(integer $ZoneId) 设置ZoneId
 * @method integer getRegionId() 获取RegionId
 * @method void setRegionId(integer $RegionId) 设置RegionId
 */
class CdbInfo extends AbstractModel
{
    /**
     * @var string 数据库实例
     */
    public $InstanceName;

    /**
     * @var string 数据库IP
     */
    public $Ip;

    /**
     * @var integer 数据库端口
     */
    public $Port;

    /**
     * @var integer 数据库内存规格
     */
    public $MemSize;

    /**
     * @var integer 数据库磁盘规格
     */
    public $Volume;

    /**
     * @var string 服务标识
     */
    public $Service;

    /**
     * @var string 过期时间
     */
    public $ExpireTime;

    /**
     * @var string 申请时间
     */
    public $ApplyTime;

    /**
     * @var integer 付费类型
     */
    public $PayType;

    /**
     * @var boolean 过期标识
     */
    public $ExpireFlag;

    /**
     * @var integer 数据库状态
     */
    public $Status;

    /**
     * @var integer 续费标识
     */
    public $IsAutoRenew;

    /**
     * @var string 数据库字符串
     */
    public $SerialNo;

    /**
     * @var integer ZoneId
     */
    public $ZoneId;

    /**
     * @var integer RegionId
     */
    public $RegionId;

    /**
     * @param string $InstanceName 数据库实例
     * @param string $Ip 数据库IP
     * @param integer $Port 数据库端口
     * @param integer $MemSize 数据库内存规格
     * @param integer $Volume 数据库磁盘规格
     * @param string $Service 服务标识
     * @param string $ExpireTime 过期时间
     * @param string $ApplyTime 申请时间
     * @param integer $PayType 付费类型
     * @param boolean $ExpireFlag 过期标识
     * @param integer $Status 数据库状态
     * @param integer $IsAutoRenew 续费标识
     * @param string $SerialNo 数据库字符串
     * @param integer $ZoneId ZoneId
     * @param integer $RegionId RegionId
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ApplyTime",$param) and $param["ApplyTime"] !== null) {
            $this->ApplyTime = $param["ApplyTime"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("ExpireFlag",$param) and $param["ExpireFlag"] !== null) {
            $this->ExpireFlag = $param["ExpireFlag"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsAutoRenew",$param) and $param["IsAutoRenew"] !== null) {
            $this->IsAutoRenew = $param["IsAutoRenew"];
        }

        if (array_key_exists("SerialNo",$param) and $param["SerialNo"] !== null) {
            $this->SerialNo = $param["SerialNo"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }
    }
}
