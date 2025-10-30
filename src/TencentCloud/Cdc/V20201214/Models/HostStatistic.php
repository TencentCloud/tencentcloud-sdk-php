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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CDC集群内宿主机的统计信息
 *
 * @method string getHostType() 获取宿主机规格
 * @method void setHostType(string $HostType) 设置宿主机规格
 * @method string getHostFamily() 获取宿主机机型系列
 * @method void setHostFamily(string $HostFamily) 设置宿主机机型系列
 * @method integer getCpu() 获取宿主机的CPU核数，单位：核
 * @method void setCpu(integer $Cpu) 设置宿主机的CPU核数，单位：核
 * @method integer getMemory() 获取宿主机内存大小，单位：GB
 * @method void setMemory(integer $Memory) 设置宿主机内存大小，单位：GB
 * @method integer getCount() 获取该规格宿主机的数量
 * @method void setCount(integer $Count) 设置该规格宿主机的数量
 * @method float getCpuAverage() 获取平均cpu负载百分比
 * @method void setCpuAverage(float $CpuAverage) 设置平均cpu负载百分比
 * @method float getMemAverage() 获取平均内存使用率百分比
 * @method void setMemAverage(float $MemAverage) 设置平均内存使用率百分比
 * @method float getNetAverage() 获取平均网络流量
 * @method void setNetAverage(float $NetAverage) 设置平均网络流量
 * @method DetailData getCpuDetailData() 获取cpu详细监控数据
 * @method void setCpuDetailData(DetailData $CpuDetailData) 设置cpu详细监控数据
 * @method DetailData getMemDetailData() 获取内存详细数据
 * @method void setMemDetailData(DetailData $MemDetailData) 设置内存详细数据
 * @method DetailData getNetRateDetailData() 获取网络速率详细数据
 * @method void setNetRateDetailData(DetailData $NetRateDetailData) 设置网络速率详细数据
 * @method DetailData getNetPacketDetailData() 获取网速包详细数据
 * @method void setNetPacketDetailData(DetailData $NetPacketDetailData) 设置网速包详细数据
 */
class HostStatistic extends AbstractModel
{
    /**
     * @var string 宿主机规格
     */
    public $HostType;

    /**
     * @var string 宿主机机型系列
     */
    public $HostFamily;

    /**
     * @var integer 宿主机的CPU核数，单位：核
     */
    public $Cpu;

    /**
     * @var integer 宿主机内存大小，单位：GB
     */
    public $Memory;

    /**
     * @var integer 该规格宿主机的数量
     */
    public $Count;

    /**
     * @var float 平均cpu负载百分比
     */
    public $CpuAverage;

    /**
     * @var float 平均内存使用率百分比
     */
    public $MemAverage;

    /**
     * @var float 平均网络流量
     */
    public $NetAverage;

    /**
     * @var DetailData cpu详细监控数据
     */
    public $CpuDetailData;

    /**
     * @var DetailData 内存详细数据
     */
    public $MemDetailData;

    /**
     * @var DetailData 网络速率详细数据
     */
    public $NetRateDetailData;

    /**
     * @var DetailData 网速包详细数据
     */
    public $NetPacketDetailData;

    /**
     * @param string $HostType 宿主机规格
     * @param string $HostFamily 宿主机机型系列
     * @param integer $Cpu 宿主机的CPU核数，单位：核
     * @param integer $Memory 宿主机内存大小，单位：GB
     * @param integer $Count 该规格宿主机的数量
     * @param float $CpuAverage 平均cpu负载百分比
     * @param float $MemAverage 平均内存使用率百分比
     * @param float $NetAverage 平均网络流量
     * @param DetailData $CpuDetailData cpu详细监控数据
     * @param DetailData $MemDetailData 内存详细数据
     * @param DetailData $NetRateDetailData 网络速率详细数据
     * @param DetailData $NetPacketDetailData 网速包详细数据
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
        if (array_key_exists("HostType",$param) and $param["HostType"] !== null) {
            $this->HostType = $param["HostType"];
        }

        if (array_key_exists("HostFamily",$param) and $param["HostFamily"] !== null) {
            $this->HostFamily = $param["HostFamily"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("CpuAverage",$param) and $param["CpuAverage"] !== null) {
            $this->CpuAverage = $param["CpuAverage"];
        }

        if (array_key_exists("MemAverage",$param) and $param["MemAverage"] !== null) {
            $this->MemAverage = $param["MemAverage"];
        }

        if (array_key_exists("NetAverage",$param) and $param["NetAverage"] !== null) {
            $this->NetAverage = $param["NetAverage"];
        }

        if (array_key_exists("CpuDetailData",$param) and $param["CpuDetailData"] !== null) {
            $this->CpuDetailData = new DetailData();
            $this->CpuDetailData->deserialize($param["CpuDetailData"]);
        }

        if (array_key_exists("MemDetailData",$param) and $param["MemDetailData"] !== null) {
            $this->MemDetailData = new DetailData();
            $this->MemDetailData->deserialize($param["MemDetailData"]);
        }

        if (array_key_exists("NetRateDetailData",$param) and $param["NetRateDetailData"] !== null) {
            $this->NetRateDetailData = new DetailData();
            $this->NetRateDetailData->deserialize($param["NetRateDetailData"]);
        }

        if (array_key_exists("NetPacketDetailData",$param) and $param["NetPacketDetailData"] !== null) {
            $this->NetPacketDetailData = new DetailData();
            $this->NetPacketDetailData->deserialize($param["NetPacketDetailData"]);
        }
    }
}
