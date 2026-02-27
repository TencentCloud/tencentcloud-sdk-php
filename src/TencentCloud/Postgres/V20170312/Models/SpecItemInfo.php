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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述一种规格的信息
 *
 * @method string getSpecCode() 获取<p>规格ID</p>
 * @method void setSpecCode(string $SpecCode) 设置<p>规格ID</p>
 * @method string getVersion() 获取<p>PostgreSQL的版本编号</p>
 * @method void setVersion(string $Version) 设置<p>PostgreSQL的版本编号</p>
 * @method string getVersionName() 获取<p>内核编号对应的完整版本名称</p>
 * @method void setVersionName(string $VersionName) 设置<p>内核编号对应的完整版本名称</p>
 * @method integer getCpu() 获取<p>CPU核数</p>
 * @method void setCpu(integer $Cpu) 设置<p>CPU核数</p>
 * @method integer getMemory() 获取<p>内存大小，单位：MB</p>
 * @method void setMemory(integer $Memory) 设置<p>内存大小，单位：MB</p>
 * @method integer getMaxStorage() 获取<p>该规格所支持最大存储容量，单位：GB</p>
 * @method void setMaxStorage(integer $MaxStorage) 设置<p>该规格所支持最大存储容量，单位：GB</p>
 * @method integer getMinStorage() 获取<p>该规格所支持最小存储容量，单位：GB</p>
 * @method void setMinStorage(integer $MinStorage) 设置<p>该规格所支持最小存储容量，单位：GB</p>
 * @method integer getQps() 获取<p>该规格的预估QPS</p>
 * @method void setQps(integer $Qps) 设置<p>该规格的预估QPS</p>
 * @method integer getPid() 获取<p>【该字段废弃】</p>
 * @method void setPid(integer $Pid) 设置<p>【该字段废弃】</p>
 * @method string getType() 获取<p>机器类型</p>
 * @method void setType(string $Type) 设置<p>机器类型</p>
 * @method string getMajorVersion() 获取<p>PostgreSQL的主要版本编号</p>
 * @method void setMajorVersion(string $MajorVersion) 设置<p>PostgreSQL的主要版本编号</p>
 * @method string getKernelVersion() 获取<p>PostgreSQL的内核版本编号</p>
 * @method void setKernelVersion(string $KernelVersion) 设置<p>PostgreSQL的内核版本编号</p>
 * @method integer getIsSupportTDE() 获取<p>是否支持TDE数据加密功能，0-不支持，1-支持</p>
 * @method void setIsSupportTDE(integer $IsSupportTDE) 设置<p>是否支持TDE数据加密功能，0-不支持，1-支持</p>
 */
class SpecItemInfo extends AbstractModel
{
    /**
     * @var string <p>规格ID</p>
     */
    public $SpecCode;

    /**
     * @var string <p>PostgreSQL的版本编号</p>
     */
    public $Version;

    /**
     * @var string <p>内核编号对应的完整版本名称</p>
     */
    public $VersionName;

    /**
     * @var integer <p>CPU核数</p>
     */
    public $Cpu;

    /**
     * @var integer <p>内存大小，单位：MB</p>
     */
    public $Memory;

    /**
     * @var integer <p>该规格所支持最大存储容量，单位：GB</p>
     */
    public $MaxStorage;

    /**
     * @var integer <p>该规格所支持最小存储容量，单位：GB</p>
     */
    public $MinStorage;

    /**
     * @var integer <p>该规格的预估QPS</p>
     */
    public $Qps;

    /**
     * @var integer <p>【该字段废弃】</p>
     */
    public $Pid;

    /**
     * @var string <p>机器类型</p>
     */
    public $Type;

    /**
     * @var string <p>PostgreSQL的主要版本编号</p>
     */
    public $MajorVersion;

    /**
     * @var string <p>PostgreSQL的内核版本编号</p>
     */
    public $KernelVersion;

    /**
     * @var integer <p>是否支持TDE数据加密功能，0-不支持，1-支持</p>
     */
    public $IsSupportTDE;

    /**
     * @param string $SpecCode <p>规格ID</p>
     * @param string $Version <p>PostgreSQL的版本编号</p>
     * @param string $VersionName <p>内核编号对应的完整版本名称</p>
     * @param integer $Cpu <p>CPU核数</p>
     * @param integer $Memory <p>内存大小，单位：MB</p>
     * @param integer $MaxStorage <p>该规格所支持最大存储容量，单位：GB</p>
     * @param integer $MinStorage <p>该规格所支持最小存储容量，单位：GB</p>
     * @param integer $Qps <p>该规格的预估QPS</p>
     * @param integer $Pid <p>【该字段废弃】</p>
     * @param string $Type <p>机器类型</p>
     * @param string $MajorVersion <p>PostgreSQL的主要版本编号</p>
     * @param string $KernelVersion <p>PostgreSQL的内核版本编号</p>
     * @param integer $IsSupportTDE <p>是否支持TDE数据加密功能，0-不支持，1-支持</p>
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
        if (array_key_exists("SpecCode",$param) and $param["SpecCode"] !== null) {
            $this->SpecCode = $param["SpecCode"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("MaxStorage",$param) and $param["MaxStorage"] !== null) {
            $this->MaxStorage = $param["MaxStorage"];
        }

        if (array_key_exists("MinStorage",$param) and $param["MinStorage"] !== null) {
            $this->MinStorage = $param["MinStorage"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("MajorVersion",$param) and $param["MajorVersion"] !== null) {
            $this->MajorVersion = $param["MajorVersion"];
        }

        if (array_key_exists("KernelVersion",$param) and $param["KernelVersion"] !== null) {
            $this->KernelVersion = $param["KernelVersion"];
        }

        if (array_key_exists("IsSupportTDE",$param) and $param["IsSupportTDE"] !== null) {
            $this->IsSupportTDE = $param["IsSupportTDE"];
        }
    }
}
