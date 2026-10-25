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
 * DescribeTDEMFunnelStepSessionList请求参数结构体
 *
 * @method string getAppId() 获取<p>应用id</p>
 * @method void setAppId(string $AppId) 设置<p>应用id</p>
 * @method string getFunnelId() 获取<p>漏斗id</p>
 * @method void setFunnelId(string $FunnelId) 设置<p>漏斗id</p>
 * @method integer getStartTime() 获取<p>开始时间</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间</p>
 * @method integer getEndTime() 获取<p>结束时间</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间</p>
 * @method integer getStepIndex() 获取<p>步骤索引</p>
 * @method void setStepIndex(integer $StepIndex) 设置<p>步骤索引</p>
 * @method string getSteps() 获取<p>漏斗步骤</p>
 * @method void setSteps(string $Steps) 设置<p>漏斗步骤</p>
 * @method string getDrillType() 获取<p>下钻类型</p>
 * @method void setDrillType(string $DrillType) 设置<p>下钻类型</p>
 * @method integer getPage() 获取<p>页面号</p>
 * @method void setPage(integer $Page) 设置<p>页面号</p>
 * @method integer getPageSize() 获取<p>每页大小</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页大小</p>
 * @method string getPlatform() 获取<p>平台</p>
 * @method void setPlatform(string $Platform) 设置<p>平台</p>
 * @method string getAppVersion() 获取<p>应用版本</p>
 * @method void setAppVersion(string $AppVersion) 设置<p>应用版本</p>
 * @method string getDeviceType() 获取<p>设备类型</p>
 * @method void setDeviceType(string $DeviceType) 设置<p>设备类型</p>
 * @method string getBrowser() 获取<p>浏览器</p>
 * @method void setBrowser(string $Browser) 设置<p>浏览器</p>
 * @method string getOS() 获取<p>操作系统</p>
 * @method void setOS(string $OS) 设置<p>操作系统</p>
 * @method string getCountry() 获取<p>国家</p>
 * @method void setCountry(string $Country) 设置<p>国家</p>
 * @method string getReferrer() 获取<p>页面来源</p>
 * @method void setReferrer(string $Referrer) 设置<p>页面来源</p>
 * @method string getEnvironment() 获取<p>环境</p>
 * @method void setEnvironment(string $Environment) 设置<p>环境</p>
 */
class DescribeTDEMFunnelStepSessionListRequest extends AbstractModel
{
    /**
     * @var string <p>应用id</p>
     */
    public $AppId;

    /**
     * @var string <p>漏斗id</p>
     */
    public $FunnelId;

    /**
     * @var integer <p>开始时间</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束时间</p>
     */
    public $EndTime;

    /**
     * @var integer <p>步骤索引</p>
     */
    public $StepIndex;

    /**
     * @var string <p>漏斗步骤</p>
     */
    public $Steps;

    /**
     * @var string <p>下钻类型</p>
     */
    public $DrillType;

    /**
     * @var integer <p>页面号</p>
     */
    public $Page;

    /**
     * @var integer <p>每页大小</p>
     */
    public $PageSize;

    /**
     * @var string <p>平台</p>
     */
    public $Platform;

    /**
     * @var string <p>应用版本</p>
     */
    public $AppVersion;

    /**
     * @var string <p>设备类型</p>
     */
    public $DeviceType;

    /**
     * @var string <p>浏览器</p>
     */
    public $Browser;

    /**
     * @var string <p>操作系统</p>
     */
    public $OS;

    /**
     * @var string <p>国家</p>
     */
    public $Country;

    /**
     * @var string <p>页面来源</p>
     */
    public $Referrer;

    /**
     * @var string <p>环境</p>
     */
    public $Environment;

    /**
     * @param string $AppId <p>应用id</p>
     * @param string $FunnelId <p>漏斗id</p>
     * @param integer $StartTime <p>开始时间</p>
     * @param integer $EndTime <p>结束时间</p>
     * @param integer $StepIndex <p>步骤索引</p>
     * @param string $Steps <p>漏斗步骤</p>
     * @param string $DrillType <p>下钻类型</p>
     * @param integer $Page <p>页面号</p>
     * @param integer $PageSize <p>每页大小</p>
     * @param string $Platform <p>平台</p>
     * @param string $AppVersion <p>应用版本</p>
     * @param string $DeviceType <p>设备类型</p>
     * @param string $Browser <p>浏览器</p>
     * @param string $OS <p>操作系统</p>
     * @param string $Country <p>国家</p>
     * @param string $Referrer <p>页面来源</p>
     * @param string $Environment <p>环境</p>
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

        if (array_key_exists("FunnelId",$param) and $param["FunnelId"] !== null) {
            $this->FunnelId = $param["FunnelId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StepIndex",$param) and $param["StepIndex"] !== null) {
            $this->StepIndex = $param["StepIndex"];
        }

        if (array_key_exists("Steps",$param) and $param["Steps"] !== null) {
            $this->Steps = $param["Steps"];
        }

        if (array_key_exists("DrillType",$param) and $param["DrillType"] !== null) {
            $this->DrillType = $param["DrillType"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
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
