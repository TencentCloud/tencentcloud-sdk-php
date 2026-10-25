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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PreviewTDEMFunnelReport请求参数结构体
 *
 * @method string getAppId() 获取<p>应用id</p>
 * @method void setAppId(string $AppId) 设置<p>应用id</p>
 * @method string getStartTime() 获取<p>开始时间戳（毫秒）</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间戳（毫秒）</p>
 * @method string getEndTime() 获取<p>结束时间戳（毫秒）</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间戳（毫秒）</p>
 * @method string getSteps() 获取<p>漏斗步骤配置JSON字符串（2~20步），格式：[{"StepName":"首页","PagePattern":"/","PageMatchMode":"exact","Selector":"","ActionType":"page_view","VisualName":""}]</p>
 * @method void setSteps(string $Steps) 设置<p>漏斗步骤配置JSON字符串（2~20步），格式：[{"StepName":"首页","PagePattern":"/","PageMatchMode":"exact","Selector":"","ActionType":"page_view","VisualName":""}]</p>
 * @method string getPlatform() 获取<p>平台筛选</p>
 * @method void setPlatform(string $Platform) 设置<p>平台筛选</p>
 * @method string getAppVersion() 获取<p>应用版本筛选</p>
 * @method void setAppVersion(string $AppVersion) 设置<p>应用版本筛选</p>
 * @method string getDeviceType() 获取<p>设备类型筛选</p>
 * @method void setDeviceType(string $DeviceType) 设置<p>设备类型筛选</p>
 * @method string getBrowser() 获取<p>浏览器筛选</p>
 * @method void setBrowser(string $Browser) 设置<p>浏览器筛选</p>
 * @method string getOS() 获取<p>操作系统筛选</p>
 * @method void setOS(string $OS) 设置<p>操作系统筛选</p>
 * @method string getCountry() 获取<p>国家/地区筛选</p>
 * @method void setCountry(string $Country) 设置<p>国家/地区筛选</p>
 * @method string getReferrer() 获取<p>来源筛选</p>
 * @method void setReferrer(string $Referrer) 设置<p>来源筛选</p>
 * @method string getEnvironment() 获取<p>环境选择</p>
 * @method void setEnvironment(string $Environment) 设置<p>环境选择</p>
 */
class PreviewTDEMFunnelReportRequest extends AbstractModel
{
    /**
     * @var string <p>应用id</p>
     */
    public $AppId;

    /**
     * @var string <p>开始时间戳（毫秒）</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间戳（毫秒）</p>
     */
    public $EndTime;

    /**
     * @var string <p>漏斗步骤配置JSON字符串（2~20步），格式：[{"StepName":"首页","PagePattern":"/","PageMatchMode":"exact","Selector":"","ActionType":"page_view","VisualName":""}]</p>
     */
    public $Steps;

    /**
     * @var string <p>平台筛选</p>
     */
    public $Platform;

    /**
     * @var string <p>应用版本筛选</p>
     */
    public $AppVersion;

    /**
     * @var string <p>设备类型筛选</p>
     */
    public $DeviceType;

    /**
     * @var string <p>浏览器筛选</p>
     */
    public $Browser;

    /**
     * @var string <p>操作系统筛选</p>
     */
    public $OS;

    /**
     * @var string <p>国家/地区筛选</p>
     */
    public $Country;

    /**
     * @var string <p>来源筛选</p>
     */
    public $Referrer;

    /**
     * @var string <p>环境选择</p>
     */
    public $Environment;

    /**
     * @param string $AppId <p>应用id</p>
     * @param string $StartTime <p>开始时间戳（毫秒）</p>
     * @param string $EndTime <p>结束时间戳（毫秒）</p>
     * @param string $Steps <p>漏斗步骤配置JSON字符串（2~20步），格式：[{"StepName":"首页","PagePattern":"/","PageMatchMode":"exact","Selector":"","ActionType":"page_view","VisualName":""}]</p>
     * @param string $Platform <p>平台筛选</p>
     * @param string $AppVersion <p>应用版本筛选</p>
     * @param string $DeviceType <p>设备类型筛选</p>
     * @param string $Browser <p>浏览器筛选</p>
     * @param string $OS <p>操作系统筛选</p>
     * @param string $Country <p>国家/地区筛选</p>
     * @param string $Referrer <p>来源筛选</p>
     * @param string $Environment <p>环境选择</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Steps",$param) and $param["Steps"] !== null) {
            $this->Steps = $param["Steps"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("AppVersion",$param) and $param["AppVersion"] !== null) {
            $this->AppVersion = $param["AppVersion"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("Browser",$param) and $param["Browser"] !== null) {
            $this->Browser = $param["Browser"];
        }

        if (array_key_exists("OS",$param) and $param["OS"] !== null) {
            $this->OS = $param["OS"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Referrer",$param) and $param["Referrer"] !== null) {
            $this->Referrer = $param["Referrer"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
