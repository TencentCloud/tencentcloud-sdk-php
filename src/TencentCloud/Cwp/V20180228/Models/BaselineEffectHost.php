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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 基线影响主机信息
 *
 * @method integer getPassCount() 获取通过项
 * @method void setPassCount(integer $PassCount) 设置通过项
 * @method integer getFailCount() 获取风险项
 * @method void setFailCount(integer $FailCount) 设置风险项
 * @method string getFirstScanTime() 获取首次检测事件
 * @method void setFirstScanTime(string $FirstScanTime) 设置首次检测事件
 * @method string getLastScanTime() 获取最后检测时间
 * @method void setLastScanTime(string $LastScanTime) 设置最后检测时间
 * @method integer getStatus() 获取风险项处理状态状态：0-未通过，1-通过
 * @method void setStatus(integer $Status) 设置风险项处理状态状态：0-未通过，1-通过
 * @method string getQuuid() 获取主机Quuid
 * @method void setQuuid(string $Quuid) 设置主机Quuid
 * @method string getHostIp() 获取主机IP
 * @method void setHostIp(string $HostIp) 设置主机IP
 * @method string getAliasName() 获取主机别名
 * @method void setAliasName(string $AliasName) 设置主机别名
 * @method string getUuid() 获取主机Uuid
 * @method void setUuid(string $Uuid) 设置主机Uuid
 * @method integer getMaxStatus() 获取检测中状态
 * @method void setMaxStatus(integer $MaxStatus) 设置检测中状态
 */
class BaselineEffectHost extends AbstractModel
{
    /**
     * @var integer 通过项
     */
    public $PassCount;

    /**
     * @var integer 风险项
     */
    public $FailCount;

    /**
     * @var string 首次检测事件
     */
    public $FirstScanTime;

    /**
     * @var string 最后检测时间
     */
    public $LastScanTime;

    /**
     * @var integer 风险项处理状态状态：0-未通过，1-通过
     */
    public $Status;

    /**
     * @var string 主机Quuid
     */
    public $Quuid;

    /**
     * @var string 主机IP
     */
    public $HostIp;

    /**
     * @var string 主机别名
     */
    public $AliasName;

    /**
     * @var string 主机Uuid
     */
    public $Uuid;

    /**
     * @var integer 检测中状态
     */
    public $MaxStatus;

    /**
     * @param integer $PassCount 通过项
     * @param integer $FailCount 风险项
     * @param string $FirstScanTime 首次检测事件
     * @param string $LastScanTime 最后检测时间
     * @param integer $Status 风险项处理状态状态：0-未通过，1-通过
     * @param string $Quuid 主机Quuid
     * @param string $HostIp 主机IP
     * @param string $AliasName 主机别名
     * @param string $Uuid 主机Uuid
     * @param integer $MaxStatus 检测中状态
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
        if (array_key_exists("PassCount",$param) and $param["PassCount"] !== null) {
            $this->PassCount = $param["PassCount"];
        }

        if (array_key_exists("FailCount",$param) and $param["FailCount"] !== null) {
            $this->FailCount = $param["FailCount"];
        }

        if (array_key_exists("FirstScanTime",$param) and $param["FirstScanTime"] !== null) {
            $this->FirstScanTime = $param["FirstScanTime"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("MaxStatus",$param) and $param["MaxStatus"] !== null) {
            $this->MaxStatus = $param["MaxStatus"];
        }
    }
}
