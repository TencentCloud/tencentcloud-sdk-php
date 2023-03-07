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
 * DescribeScanVulSetting返回参数结构体
 *
 * @method string getVulCategories() 获取漏洞类型：1: web-cms漏洞 2:应用漏洞  4: Linux软件漏洞 5: Windows系统漏洞
 * @method void setVulCategories(string $VulCategories) 设置漏洞类型：1: web-cms漏洞 2:应用漏洞  4: Linux软件漏洞 5: Windows系统漏洞
 * @method string getVulLevels() 获取危害等级：1-低危；2-中危；3-高危；4-严重 (多选英文逗号分隔)
 * @method void setVulLevels(string $VulLevels) 设置危害等级：1-低危；2-中危；3-高危；4-严重 (多选英文逗号分隔)
 * @method integer getTimerInterval() 获取定期检测间隔时间（天）
 * @method void setTimerInterval(integer $TimerInterval) 设置定期检测间隔时间（天）
 * @method string getTimerTime() 获取定期检测时间，如：00:00
 * @method void setTimerTime(string $TimerTime) 设置定期检测时间，如：00:00
 * @method integer getVulEmergency() 获取是否紧急漏洞：0-否 1-是
 * @method void setVulEmergency(integer $VulEmergency) 设置是否紧急漏洞：0-否 1-是
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method integer getEnableScan() 获取是否开启
 * @method void setEnableScan(integer $EnableScan) 设置是否开启
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method integer getClickTimeout() 获取一键扫描超时时长，如：1800秒（s）
 * @method void setClickTimeout(integer $ClickTimeout) 设置一键扫描超时时长，如：1800秒（s）
 * @method array getUuids() 获取为空默认扫描全部专业版、旗舰版、普惠版主机，不为空只扫描选中主机
 * @method void setUuids(array $Uuids) 设置为空默认扫描全部专业版、旗舰版、普惠版主机，不为空只扫描选中主机
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeScanVulSettingResponse extends AbstractModel
{
    /**
     * @var string 漏洞类型：1: web-cms漏洞 2:应用漏洞  4: Linux软件漏洞 5: Windows系统漏洞
     */
    public $VulCategories;

    /**
     * @var string 危害等级：1-低危；2-中危；3-高危；4-严重 (多选英文逗号分隔)
     */
    public $VulLevels;

    /**
     * @var integer 定期检测间隔时间（天）
     */
    public $TimerInterval;

    /**
     * @var string 定期检测时间，如：00:00
     */
    public $TimerTime;

    /**
     * @var integer 是否紧急漏洞：0-否 1-是
     */
    public $VulEmergency;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var integer 是否开启
     */
    public $EnableScan;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var integer 一键扫描超时时长，如：1800秒（s）
     */
    public $ClickTimeout;

    /**
     * @var array 为空默认扫描全部专业版、旗舰版、普惠版主机，不为空只扫描选中主机
     */
    public $Uuids;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $VulCategories 漏洞类型：1: web-cms漏洞 2:应用漏洞  4: Linux软件漏洞 5: Windows系统漏洞
     * @param string $VulLevels 危害等级：1-低危；2-中危；3-高危；4-严重 (多选英文逗号分隔)
     * @param integer $TimerInterval 定期检测间隔时间（天）
     * @param string $TimerTime 定期检测时间，如：00:00
     * @param integer $VulEmergency 是否紧急漏洞：0-否 1-是
     * @param string $StartTime 开始时间
     * @param integer $EnableScan 是否开启
     * @param string $EndTime 结束时间
     * @param integer $ClickTimeout 一键扫描超时时长，如：1800秒（s）
     * @param array $Uuids 为空默认扫描全部专业版、旗舰版、普惠版主机，不为空只扫描选中主机
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("VulCategories",$param) and $param["VulCategories"] !== null) {
            $this->VulCategories = $param["VulCategories"];
        }

        if (array_key_exists("VulLevels",$param) and $param["VulLevels"] !== null) {
            $this->VulLevels = $param["VulLevels"];
        }

        if (array_key_exists("TimerInterval",$param) and $param["TimerInterval"] !== null) {
            $this->TimerInterval = $param["TimerInterval"];
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

        if (array_key_exists("EnableScan",$param) and $param["EnableScan"] !== null) {
            $this->EnableScan = $param["EnableScan"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ClickTimeout",$param) and $param["ClickTimeout"] !== null) {
            $this->ClickTimeout = $param["ClickTimeout"];
        }

        if (array_key_exists("Uuids",$param) and $param["Uuids"] !== null) {
            $this->Uuids = $param["Uuids"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
