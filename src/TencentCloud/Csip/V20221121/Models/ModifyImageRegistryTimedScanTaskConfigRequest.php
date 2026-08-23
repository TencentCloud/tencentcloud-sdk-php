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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyImageRegistryTimedScanTaskConfig请求参数结构体
 *
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method integer getId() 获取<p>任务id</p>
 * @method void setId(integer $Id) 设置<p>任务id</p>
 * @method string getName() 获取<p>任务名</p>
 * @method void setName(string $Name) 设置<p>任务名</p>
 * @method boolean getEnable() 获取<p>是否启用</p>
 * @method void setEnable(boolean $Enable) 设置<p>是否启用</p>
 * @method array getScanType() 获取<p>扫描类别</p><p>枚举值：</p><ul><li>CVE： 漏洞</li><li>RISK： 风险</li><li>VIRUS： 木马</li></ul>
 * @method void setScanType(array $ScanType) 设置<p>扫描类别</p><p>枚举值：</p><ul><li>CVE： 漏洞</li><li>RISK： 风险</li><li>VIRUS： 木马</li></ul>
 * @method ImageScanScheduleConfig getSchedule() 获取<p>定时任务调度配置</p>
 * @method void setSchedule(ImageScanScheduleConfig $Schedule) 设置<p>定时任务调度配置</p>
 * @method ImageScanAssetTarget getTarget() 获取<p>扫描目标镜像过滤配置</p>
 * @method void setTarget(ImageScanAssetTarget $Target) 设置<p>扫描目标镜像过滤配置</p>
 * @method ImageScanRegistryFilter getFilter() 获取<p>镜像过滤配置</p>
 * @method void setFilter(ImageScanRegistryFilter $Filter) 设置<p>镜像过滤配置</p>
 * @method integer getTimeout() 获取<p>超时时间，单位秒</p>
 * @method void setTimeout(integer $Timeout) 设置<p>超时时间，单位秒</p>
 */
class ModifyImageRegistryTimedScanTaskConfigRequest extends AbstractModel
{
    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>任务id</p>
     */
    public $Id;

    /**
     * @var string <p>任务名</p>
     */
    public $Name;

    /**
     * @var boolean <p>是否启用</p>
     */
    public $Enable;

    /**
     * @var array <p>扫描类别</p><p>枚举值：</p><ul><li>CVE： 漏洞</li><li>RISK： 风险</li><li>VIRUS： 木马</li></ul>
     */
    public $ScanType;

    /**
     * @var ImageScanScheduleConfig <p>定时任务调度配置</p>
     */
    public $Schedule;

    /**
     * @var ImageScanAssetTarget <p>扫描目标镜像过滤配置</p>
     */
    public $Target;

    /**
     * @var ImageScanRegistryFilter <p>镜像过滤配置</p>
     */
    public $Filter;

    /**
     * @var integer <p>超时时间，单位秒</p>
     */
    public $Timeout;

    /**
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param integer $Id <p>任务id</p>
     * @param string $Name <p>任务名</p>
     * @param boolean $Enable <p>是否启用</p>
     * @param array $ScanType <p>扫描类别</p><p>枚举值：</p><ul><li>CVE： 漏洞</li><li>RISK： 风险</li><li>VIRUS： 木马</li></ul>
     * @param ImageScanScheduleConfig $Schedule <p>定时任务调度配置</p>
     * @param ImageScanAssetTarget $Target <p>扫描目标镜像过滤配置</p>
     * @param ImageScanRegistryFilter $Filter <p>镜像过滤配置</p>
     * @param integer $Timeout <p>超时时间，单位秒</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("ScanType",$param) and $param["ScanType"] !== null) {
            $this->ScanType = $param["ScanType"];
        }

        if (array_key_exists("Schedule",$param) and $param["Schedule"] !== null) {
            $this->Schedule = new ImageScanScheduleConfig();
            $this->Schedule->deserialize($param["Schedule"]);
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = new ImageScanAssetTarget();
            $this->Target->deserialize($param["Target"]);
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new ImageScanRegistryFilter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }
    }
}
