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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScanVulSetting请求参数结构体
 *
 * @method integer getTimerInterval() 获取定期检测间隔时间（天）
 * @method void setTimerInterval(integer $TimerInterval) 设置定期检测间隔时间（天）
 * @method array getVulCategories() 获取漏洞类型：1: web-cms漏洞 2:应用漏洞  4: Linux软件漏洞 5: Windows系统漏洞, 以数组方式传参[1,2]
 * @method void setVulCategories(array $VulCategories) 设置漏洞类型：1: web-cms漏洞 2:应用漏洞  4: Linux软件漏洞 5: Windows系统漏洞, 以数组方式传参[1,2]
 * @method array getVulLevels() 获取危害等级：1-低危；2-中危；3-高危；4-严重,以数组方式传参[1,2,3]
 * @method void setVulLevels(array $VulLevels) 设置危害等级：1-低危；2-中危；3-高危；4-严重,以数组方式传参[1,2,3]
 * @method string getTimerTime() 获取定期检测时间，如：02:10:50
 * @method void setTimerTime(string $TimerTime) 设置定期检测时间，如：02:10:50
 * @method integer getVulEmergency() 获取是否是应急漏洞 0 否 1 是
 * @method void setVulEmergency(integer $VulEmergency) 设置是否是应急漏洞 0 否 1 是
 * @method string getStartTime() 获取扫描开始时间，如：00:00
 * @method void setStartTime(string $StartTime) 设置扫描开始时间，如：00:00
 * @method string getEndTime() 获取扫描结束时间，如：08:00
 * @method void setEndTime(string $EndTime) 设置扫描结束时间，如：08:00
 * @method integer getEnableScan() 获取是否开启扫描 1开启 0不开启
 * @method void setEnableScan(integer $EnableScan) 设置是否开启扫描 1开启 0不开启
 */
class ScanVulSettingRequest extends AbstractModel
{
    /**
     * @var integer 定期检测间隔时间（天）
     */
    public $TimerInterval;

    /**
     * @var array 漏洞类型：1: web-cms漏洞 2:应用漏洞  4: Linux软件漏洞 5: Windows系统漏洞, 以数组方式传参[1,2]
     */
    public $VulCategories;

    /**
     * @var array 危害等级：1-低危；2-中危；3-高危；4-严重,以数组方式传参[1,2,3]
     */
    public $VulLevels;

    /**
     * @var string 定期检测时间，如：02:10:50
     */
    public $TimerTime;

    /**
     * @var integer 是否是应急漏洞 0 否 1 是
     */
    public $VulEmergency;

    /**
     * @var string 扫描开始时间，如：00:00
     */
    public $StartTime;

    /**
     * @var string 扫描结束时间，如：08:00
     */
    public $EndTime;

    /**
     * @var integer 是否开启扫描 1开启 0不开启
     */
    public $EnableScan;

    /**
     * @param integer $TimerInterval 定期检测间隔时间（天）
     * @param array $VulCategories 漏洞类型：1: web-cms漏洞 2:应用漏洞  4: Linux软件漏洞 5: Windows系统漏洞, 以数组方式传参[1,2]
     * @param array $VulLevels 危害等级：1-低危；2-中危；3-高危；4-严重,以数组方式传参[1,2,3]
     * @param string $TimerTime 定期检测时间，如：02:10:50
     * @param integer $VulEmergency 是否是应急漏洞 0 否 1 是
     * @param string $StartTime 扫描开始时间，如：00:00
     * @param string $EndTime 扫描结束时间，如：08:00
     * @param integer $EnableScan 是否开启扫描 1开启 0不开启
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
        if (array_key_exists("TimerInterval",$param) and $param["TimerInterval"] !== null) {
            $this->TimerInterval = $param["TimerInterval"];
        }

        if (array_key_exists("VulCategories",$param) and $param["VulCategories"] !== null) {
            $this->VulCategories = $param["VulCategories"];
        }

        if (array_key_exists("VulLevels",$param) and $param["VulLevels"] !== null) {
            $this->VulLevels = $param["VulLevels"];
        }

        if (array_key_exists("TimerTime",$param) and $param["TimerTime"] !== null) {
            $this->TimerTime = $param["TimerTime"];
        }

        if (array_key_exists("VulEmergency",$param) and $param["VulEmergency"] !== null) {
            $this->VulEmergency = $param["VulEmergency"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("EnableScan",$param) and $param["EnableScan"] !== null) {
            $this->EnableScan = $param["EnableScan"];
        }
    }
}
