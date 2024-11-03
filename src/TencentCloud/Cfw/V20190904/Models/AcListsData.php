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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 访问控制列表对象
 *
 * @method integer getId() 获取规则id
 * @method void setId(integer $Id) 设置规则id
 * @method string getSourceIp() 获取访问源
 * @method void setSourceIp(string $SourceIp) 设置访问源
 * @method string getTargetIp() 获取访问目的
 * @method void setTargetIp(string $TargetIp) 设置访问目的
 * @method string getProtocol() 获取协议
 * @method void setProtocol(string $Protocol) 设置协议
 * @method string getPort() 获取端口
 * @method void setPort(string $Port) 设置端口
 * @method integer getStrategy() 获取策略
 * @method void setStrategy(integer $Strategy) 设置策略
 * @method string getDetail() 获取描述
 * @method void setDetail(string $Detail) 设置描述
 * @method integer getCount() 获取命中次数
 * @method void setCount(integer $Count) 设置命中次数
 * @method integer getOrderIndex() 获取执行顺序
 * @method void setOrderIndex(integer $OrderIndex) 设置执行顺序
 * @method string getLogId() 获取告警规则id
 * @method void setLogId(string $LogId) 设置告警规则id
 * @method integer getStatus() 获取规则开关状态 1打开 0关闭
 * @method void setStatus(integer $Status) 设置规则开关状态 1打开 0关闭
 * @method integer getSrcType() 获取规则源类型
 * @method void setSrcType(integer $SrcType) 设置规则源类型
 * @method integer getDstType() 获取规则目的类型
 * @method void setDstType(integer $DstType) 设置规则目的类型
 * @method string getUuid() 获取规则唯一ID
 * @method void setUuid(string $Uuid) 设置规则唯一ID
 * @method integer getInvalid() 获取规则有效性
1 有效
0 无效
 * @method void setInvalid(integer $Invalid) 设置规则有效性
1 有效
0 无效
 * @method integer getIsRegion() 获取是否地域规则
 * @method void setIsRegion(integer $IsRegion) 设置是否地域规则
 * @method string getCloudCode() 获取云厂商代码
 * @method void setCloudCode(string $CloudCode) 设置云厂商代码
 * @method string getAutoTask() 获取自动化助手信息
 * @method void setAutoTask(string $AutoTask) 设置自动化助手信息
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getRegionCode() 获取地域码信息
 * @method void setRegionCode(string $RegionCode) 设置地域码信息
 * @method integer getCountry() 获取国家代码
 * @method void setCountry(integer $Country) 设置国家代码
 * @method integer getCity() 获取城市代码
 * @method void setCity(integer $City) 设置城市代码
 * @method string getRegName1() 获取国家名称
 * @method void setRegName1(string $RegName1) 设置国家名称
 * @method string getRegName2() 获取城市名称
 * @method void setRegName2(string $RegName2) 设置城市名称
 */
class AcListsData extends AbstractModel
{
    /**
     * @var integer 规则id
     */
    public $Id;

    /**
     * @var string 访问源
     */
    public $SourceIp;

    /**
     * @var string 访问目的
     */
    public $TargetIp;

    /**
     * @var string 协议
     */
    public $Protocol;

    /**
     * @var string 端口
     */
    public $Port;

    /**
     * @var integer 策略
     */
    public $Strategy;

    /**
     * @var string 描述
     */
    public $Detail;

    /**
     * @var integer 命中次数
     */
    public $Count;

    /**
     * @var integer 执行顺序
     */
    public $OrderIndex;

    /**
     * @var string 告警规则id
     */
    public $LogId;

    /**
     * @var integer 规则开关状态 1打开 0关闭
     */
    public $Status;

    /**
     * @var integer 规则源类型
     */
    public $SrcType;

    /**
     * @var integer 规则目的类型
     */
    public $DstType;

    /**
     * @var string 规则唯一ID
     */
    public $Uuid;

    /**
     * @var integer 规则有效性
1 有效
0 无效
     */
    public $Invalid;

    /**
     * @var integer 是否地域规则
     */
    public $IsRegion;

    /**
     * @var string 云厂商代码
     */
    public $CloudCode;

    /**
     * @var string 自动化助手信息
     */
    public $AutoTask;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 地域码信息
     */
    public $RegionCode;

    /**
     * @var integer 国家代码
     */
    public $Country;

    /**
     * @var integer 城市代码
     */
    public $City;

    /**
     * @var string 国家名称
     */
    public $RegName1;

    /**
     * @var string 城市名称
     */
    public $RegName2;

    /**
     * @param integer $Id 规则id
     * @param string $SourceIp 访问源
     * @param string $TargetIp 访问目的
     * @param string $Protocol 协议
     * @param string $Port 端口
     * @param integer $Strategy 策略
     * @param string $Detail 描述
     * @param integer $Count 命中次数
     * @param integer $OrderIndex 执行顺序
     * @param string $LogId 告警规则id
     * @param integer $Status 规则开关状态 1打开 0关闭
     * @param integer $SrcType 规则源类型
     * @param integer $DstType 规则目的类型
     * @param string $Uuid 规则唯一ID
     * @param integer $Invalid 规则有效性
1 有效
0 无效
     * @param integer $IsRegion 是否地域规则
     * @param string $CloudCode 云厂商代码
     * @param string $AutoTask 自动化助手信息
     * @param string $InstanceName 实例名称
     * @param string $RegionCode 地域码信息
     * @param integer $Country 国家代码
     * @param integer $City 城市代码
     * @param string $RegName1 国家名称
     * @param string $RegName2 城市名称
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("SourceIp",$param) and $param["SourceIp"] !== null) {
            $this->SourceIp = $param["SourceIp"];
        }

        if (array_key_exists("TargetIp",$param) and $param["TargetIp"] !== null) {
            $this->TargetIp = $param["TargetIp"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("OrderIndex",$param) and $param["OrderIndex"] !== null) {
            $this->OrderIndex = $param["OrderIndex"];
        }

        if (array_key_exists("LogId",$param) and $param["LogId"] !== null) {
            $this->LogId = $param["LogId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SrcType",$param) and $param["SrcType"] !== null) {
            $this->SrcType = $param["SrcType"];
        }

        if (array_key_exists("DstType",$param) and $param["DstType"] !== null) {
            $this->DstType = $param["DstType"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Invalid",$param) and $param["Invalid"] !== null) {
            $this->Invalid = $param["Invalid"];
        }

        if (array_key_exists("IsRegion",$param) and $param["IsRegion"] !== null) {
            $this->IsRegion = $param["IsRegion"];
        }

        if (array_key_exists("CloudCode",$param) and $param["CloudCode"] !== null) {
            $this->CloudCode = $param["CloudCode"];
        }

        if (array_key_exists("AutoTask",$param) and $param["AutoTask"] !== null) {
            $this->AutoTask = $param["AutoTask"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            $this->RegionCode = $param["RegionCode"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("RegName1",$param) and $param["RegName1"] !== null) {
            $this->RegName1 = $param["RegName1"];
        }

        if (array_key_exists("RegName2",$param) and $param["RegName2"] !== null) {
            $this->RegName2 = $param["RegName2"];
        }
    }
}
