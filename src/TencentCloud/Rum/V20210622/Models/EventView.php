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
 * 事件详情主表视图。空字符串省略。
 *
 * @method string getAppId() 获取<p>应用 ID</p>
 * @method void setAppId(string $AppId) 设置<p>应用 ID</p>
 * @method string getEventId() 获取<p>事件 ID</p>
 * @method void setEventId(string $EventId) 设置<p>事件 ID</p>
 * @method string getViewId() 获取<p>视图 ID</p>
 * @method void setViewId(string $ViewId) 设置<p>视图 ID</p>
 * @method string getEventType() 获取<p>事件类型</p>
 * @method void setEventType(string $EventType) 设置<p>事件类型</p>
 * @method string getEventCategory() 获取<p>事件分类</p>
 * @method void setEventCategory(string $EventCategory) 设置<p>事件分类</p>
 * @method string getEventName() 获取<p>事件名</p>
 * @method void setEventName(string $EventName) 设置<p>事件名</p>
 * @method string getTimestamp() 获取<p>时间 RFC3339</p>
 * @method void setTimestamp(string $Timestamp) 设置<p>时间 RFC3339</p>
 * @method string getDate() 获取<p>分区日期 YYYY-MM-DD</p>
 * @method void setDate(string $Date) 设置<p>分区日期 YYYY-MM-DD</p>
 * @method string getPlatform() 获取<p>平台</p>
 * @method void setPlatform(string $Platform) 设置<p>平台</p>
 * @method string getAppVersion() 获取<p>应用版本</p>
 * @method void setAppVersion(string $AppVersion) 设置<p>应用版本</p>
 * @method string getSdkVersion() 获取<p>SDK 版本</p>
 * @method void setSdkVersion(string $SdkVersion) 设置<p>SDK 版本</p>
 * @method string getIssueId() 获取<p>问题单 ID</p>
 * @method void setIssueId(string $IssueId) 设置<p>问题单 ID</p>
 * @method string getFingerprint() 获取<p>错误指纹</p>
 * @method void setFingerprint(string $Fingerprint) 设置<p>错误指纹</p>
 * @method integer getIsSourceMapped() 获取<p>是否已符号化 0/1</p>
 * @method void setIsSourceMapped(integer $IsSourceMapped) 设置<p>是否已符号化 0/1</p>
 * @method array getExceptionStacks() 获取<p>异常栈</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExceptionStacks(array $ExceptionStacks) 设置<p>异常栈</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExceptionFrames() 获取<p>原始堆栈帧</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExceptionFrames(array $ExceptionFrames) 设置<p>原始堆栈帧</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEventProperties() 获取<p>事件属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventProperties(array $EventProperties) 设置<p>事件属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSessionId() 获取<p>会话 ID</p>
 * @method void setSessionId(string $SessionId) 设置<p>会话 ID</p>
 * @method string getUserId() 获取<p>业务用户 ID</p>
 * @method void setUserId(string $UserId) 设置<p>业务用户 ID</p>
 * @method string getDeviceId() 获取<p>设备 ID</p>
 * @method void setDeviceId(string $DeviceId) 设置<p>设备 ID</p>
 * @method string getPageUrl() 获取<p>页面 URL</p>
 * @method void setPageUrl(string $PageUrl) 设置<p>页面 URL</p>
 * @method string getNormalizedPageUrl() 获取<p>归一化页面 URL</p>
 * @method void setNormalizedPageUrl(string $NormalizedPageUrl) 设置<p>归一化页面 URL</p>
 * @method string getPageTitle() 获取<p>页面标题</p>
 * @method void setPageTitle(string $PageTitle) 设置<p>页面标题</p>
 * @method string getResourceUrl() 获取<p>资源 URL</p>
 * @method void setResourceUrl(string $ResourceUrl) 设置<p>资源 URL</p>
 * @method string getResourceType() 获取<p>资源类型</p>
 * @method void setResourceType(string $ResourceType) 设置<p>资源类型</p>
 * @method string getTargetElement() 获取<p>目标元素</p>
 * @method void setTargetElement(string $TargetElement) 设置<p>目标元素</p>
 * @method string getTargetText() 获取<p>目标文本</p>
 * @method void setTargetText(string $TargetText) 设置<p>目标文本</p>
 * @method string getLogLevel() 获取<p>日志级别</p>
 * @method void setLogLevel(string $LogLevel) 设置<p>日志级别</p>
 * @method string getIp() 获取<p>IP</p>
 * @method void setIp(string $Ip) 设置<p>IP</p>
 * @method string getCountry() 获取<p>国家</p>
 * @method void setCountry(string $Country) 设置<p>国家</p>
 * @method string getProvince() 获取<p>省份</p>
 * @method void setProvince(string $Province) 设置<p>省份</p>
 * @method string getCity() 获取<p>城市</p>
 * @method void setCity(string $City) 设置<p>城市</p>
 * @method string getIsp() 获取<p>运营商</p>
 * @method void setIsp(string $Isp) 设置<p>运营商</p>
 * @method string getNetworkType() 获取<p>网络类型</p>
 * @method void setNetworkType(string $NetworkType) 设置<p>网络类型</p>
 * @method string getDeviceType() 获取<p>设备类型</p>
 * @method void setDeviceType(string $DeviceType) 设置<p>设备类型</p>
 * @method string getOs() 获取<p>操作系统</p>
 * @method void setOs(string $Os) 设置<p>操作系统</p>
 * @method string getBrowser() 获取<p>浏览器</p>
 * @method void setBrowser(string $Browser) 设置<p>浏览器</p>
 * @method string getEnvironment() 获取<p>环境</p>
 * @method void setEnvironment(string $Environment) 设置<p>环境</p>
 * @method array getMeasurements() 获取<p>测量值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMeasurements(array $Measurements) 设置<p>测量值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取<p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class EventView extends AbstractModel
{
    /**
     * @var string <p>应用 ID</p>
     */
    public $AppId;

    /**
     * @var string <p>事件 ID</p>
     */
    public $EventId;

    /**
     * @var string <p>视图 ID</p>
     */
    public $ViewId;

    /**
     * @var string <p>事件类型</p>
     */
    public $EventType;

    /**
     * @var string <p>事件分类</p>
     */
    public $EventCategory;

    /**
     * @var string <p>事件名</p>
     */
    public $EventName;

    /**
     * @var string <p>时间 RFC3339</p>
     */
    public $Timestamp;

    /**
     * @var string <p>分区日期 YYYY-MM-DD</p>
     */
    public $Date;

    /**
     * @var string <p>平台</p>
     */
    public $Platform;

    /**
     * @var string <p>应用版本</p>
     */
    public $AppVersion;

    /**
     * @var string <p>SDK 版本</p>
     */
    public $SdkVersion;

    /**
     * @var string <p>问题单 ID</p>
     */
    public $IssueId;

    /**
     * @var string <p>错误指纹</p>
     */
    public $Fingerprint;

    /**
     * @var integer <p>是否已符号化 0/1</p>
     */
    public $IsSourceMapped;

    /**
     * @var array <p>异常栈</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExceptionStacks;

    /**
     * @var array <p>原始堆栈帧</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExceptionFrames;

    /**
     * @var array <p>事件属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventProperties;

    /**
     * @var string <p>会话 ID</p>
     */
    public $SessionId;

    /**
     * @var string <p>业务用户 ID</p>
     */
    public $UserId;

    /**
     * @var string <p>设备 ID</p>
     */
    public $DeviceId;

    /**
     * @var string <p>页面 URL</p>
     */
    public $PageUrl;

    /**
     * @var string <p>归一化页面 URL</p>
     */
    public $NormalizedPageUrl;

    /**
     * @var string <p>页面标题</p>
     */
    public $PageTitle;

    /**
     * @var string <p>资源 URL</p>
     */
    public $ResourceUrl;

    /**
     * @var string <p>资源类型</p>
     */
    public $ResourceType;

    /**
     * @var string <p>目标元素</p>
     */
    public $TargetElement;

    /**
     * @var string <p>目标文本</p>
     */
    public $TargetText;

    /**
     * @var string <p>日志级别</p>
     */
    public $LogLevel;

    /**
     * @var string <p>IP</p>
     */
    public $Ip;

    /**
     * @var string <p>国家</p>
     */
    public $Country;

    /**
     * @var string <p>省份</p>
     */
    public $Province;

    /**
     * @var string <p>城市</p>
     */
    public $City;

    /**
     * @var string <p>运营商</p>
     */
    public $Isp;

    /**
     * @var string <p>网络类型</p>
     */
    public $NetworkType;

    /**
     * @var string <p>设备类型</p>
     */
    public $DeviceType;

    /**
     * @var string <p>操作系统</p>
     */
    public $Os;

    /**
     * @var string <p>浏览器</p>
     */
    public $Browser;

    /**
     * @var string <p>环境</p>
     */
    public $Environment;

    /**
     * @var array <p>测量值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Measurements;

    /**
     * @var array <p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @param string $AppId <p>应用 ID</p>
     * @param string $EventId <p>事件 ID</p>
     * @param string $ViewId <p>视图 ID</p>
     * @param string $EventType <p>事件类型</p>
     * @param string $EventCategory <p>事件分类</p>
     * @param string $EventName <p>事件名</p>
     * @param string $Timestamp <p>时间 RFC3339</p>
     * @param string $Date <p>分区日期 YYYY-MM-DD</p>
     * @param string $Platform <p>平台</p>
     * @param string $AppVersion <p>应用版本</p>
     * @param string $SdkVersion <p>SDK 版本</p>
     * @param string $IssueId <p>问题单 ID</p>
     * @param string $Fingerprint <p>错误指纹</p>
     * @param integer $IsSourceMapped <p>是否已符号化 0/1</p>
     * @param array $ExceptionStacks <p>异常栈</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExceptionFrames <p>原始堆栈帧</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EventProperties <p>事件属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SessionId <p>会话 ID</p>
     * @param string $UserId <p>业务用户 ID</p>
     * @param string $DeviceId <p>设备 ID</p>
     * @param string $PageUrl <p>页面 URL</p>
     * @param string $NormalizedPageUrl <p>归一化页面 URL</p>
     * @param string $PageTitle <p>页面标题</p>
     * @param string $ResourceUrl <p>资源 URL</p>
     * @param string $ResourceType <p>资源类型</p>
     * @param string $TargetElement <p>目标元素</p>
     * @param string $TargetText <p>目标文本</p>
     * @param string $LogLevel <p>日志级别</p>
     * @param string $Ip <p>IP</p>
     * @param string $Country <p>国家</p>
     * @param string $Province <p>省份</p>
     * @param string $City <p>城市</p>
     * @param string $Isp <p>运营商</p>
     * @param string $NetworkType <p>网络类型</p>
     * @param string $DeviceType <p>设备类型</p>
     * @param string $Os <p>操作系统</p>
     * @param string $Browser <p>浏览器</p>
     * @param string $Environment <p>环境</p>
     * @param array $Measurements <p>测量值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags <p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("ViewId",$param) and $param["ViewId"] !== null) {
            $this->ViewId = $param["ViewId"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("EventCategory",$param) and $param["EventCategory"] !== null) {
            $this->EventCategory = $param["EventCategory"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("AppVersion",$param) and $param["AppVersion"] !== null) {
            $this->AppVersion = $param["AppVersion"];
        }

        if (array_key_exists("SdkVersion",$param) and $param["SdkVersion"] !== null) {
            $this->SdkVersion = $param["SdkVersion"];
        }

        if (array_key_exists("IssueId",$param) and $param["IssueId"] !== null) {
            $this->IssueId = $param["IssueId"];
        }

        if (array_key_exists("Fingerprint",$param) and $param["Fingerprint"] !== null) {
            $this->Fingerprint = $param["Fingerprint"];
        }

        if (array_key_exists("IsSourceMapped",$param) and $param["IsSourceMapped"] !== null) {
            $this->IsSourceMapped = $param["IsSourceMapped"];
        }

        if (array_key_exists("ExceptionStacks",$param) and $param["ExceptionStacks"] !== null) {
            $this->ExceptionStacks = [];
            foreach ($param["ExceptionStacks"] as $key => $value){
                $obj = new EventStack();
                $obj->deserialize($value);
                array_push($this->ExceptionStacks, $obj);
            }
        }

        if (array_key_exists("ExceptionFrames",$param) and $param["ExceptionFrames"] !== null) {
            $this->ExceptionFrames = [];
            foreach ($param["ExceptionFrames"] as $key => $value){
                $obj = new EventFrame();
                $obj->deserialize($value);
                array_push($this->ExceptionFrames, $obj);
            }
        }

        if (array_key_exists("EventProperties",$param) and $param["EventProperties"] !== null) {
            $this->EventProperties = [];
            foreach ($param["EventProperties"] as $key => $value){
                $obj = new StringKeyValue();
                $obj->deserialize($value);
                array_push($this->EventProperties, $obj);
            }
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("PageUrl",$param) and $param["PageUrl"] !== null) {
            $this->PageUrl = $param["PageUrl"];
        }

        if (array_key_exists("NormalizedPageUrl",$param) and $param["NormalizedPageUrl"] !== null) {
            $this->NormalizedPageUrl = $param["NormalizedPageUrl"];
        }

        if (array_key_exists("PageTitle",$param) and $param["PageTitle"] !== null) {
            $this->PageTitle = $param["PageTitle"];
        }

        if (array_key_exists("ResourceUrl",$param) and $param["ResourceUrl"] !== null) {
            $this->ResourceUrl = $param["ResourceUrl"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("TargetElement",$param) and $param["TargetElement"] !== null) {
            $this->TargetElement = $param["TargetElement"];
        }

        if (array_key_exists("TargetText",$param) and $param["TargetText"] !== null) {
            $this->TargetText = $param["TargetText"];
        }

        if (array_key_exists("LogLevel",$param) and $param["LogLevel"] !== null) {
            $this->LogLevel = $param["LogLevel"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("Os",$param) and $param["Os"] !== null) {
            $this->Os = $param["Os"];
        }

        if (array_key_exists("Browser",$param) and $param["Browser"] !== null) {
            $this->Browser = $param["Browser"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }

        if (array_key_exists("Measurements",$param) and $param["Measurements"] !== null) {
            $this->Measurements = [];
            foreach ($param["Measurements"] as $key => $value){
                $obj = new FloatKeyValue();
                $obj->deserialize($value);
                array_push($this->Measurements, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new StringKeyValue();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
