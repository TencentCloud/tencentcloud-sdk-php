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
 * BatchModifyImageRegistryTimedScanTaskConfig请求参数结构体
 *
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getId() 获取<p>任务id</p>
 * @method void setId(array $Id) 设置<p>任务id</p>
 * @method boolean getEnable() 获取<p>是否启用</p>
 * @method void setEnable(boolean $Enable) 设置<p>是否启用</p>
 * @method array getScanType() 获取<p>扫描类别</p><p>枚举值：</p><ul><li>CVE： 漏洞</li><li>RISK： 风险</li><li>VIRUS： 木马</li></ul>
 * @method void setScanType(array $ScanType) 设置<p>扫描类别</p><p>枚举值：</p><ul><li>CVE： 漏洞</li><li>RISK： 风险</li><li>VIRUS： 木马</li></ul>
 * @method ImageScanScheduleConfig getSchedule() 获取<p>定时任务调度配置</p>
 * @method void setSchedule(ImageScanScheduleConfig $Schedule) 设置<p>定时任务调度配置</p>
 * @method integer getTimeout() 获取<p>超时时间，单位秒</p>
 * @method void setTimeout(integer $Timeout) 设置<p>超时时间，单位秒</p>
 */
class BatchModifyImageRegistryTimedScanTaskConfigRequest extends AbstractModel
{
    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array <p>任务id</p>
     */
    public $Id;

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
     * @var integer <p>超时时间，单位秒</p>
     */
    public $Timeout;

    /**
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $Id <p>任务id</p>
     * @param boolean $Enable <p>是否启用</p>
     * @param array $ScanType <p>扫描类别</p><p>枚举值：</p><ul><li>CVE： 漏洞</li><li>RISK： 风险</li><li>VIRUS： 木马</li></ul>
     * @param ImageScanScheduleConfig $Schedule <p>定时任务调度配置</p>
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

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }
    }
}
