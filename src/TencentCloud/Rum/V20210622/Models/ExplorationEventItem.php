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
 * 探索事件列表项
 *
 * @method string getEventId() 获取<p>事件 ID</p>
 * @method void setEventId(string $EventId) 设置<p>事件 ID</p>
 * @method string getEventType() 获取<p>事件类型</p>
 * @method void setEventType(string $EventType) 设置<p>事件类型</p>
 * @method string getEventName() 获取<p>事件名</p>
 * @method void setEventName(string $EventName) 设置<p>事件名</p>
 * @method string getEventCategory() 获取<p>事件分类</p>
 * @method void setEventCategory(string $EventCategory) 设置<p>事件分类</p>
 * @method integer getTimestamp() 获取<p>时间戳 Unix 毫秒</p>
 * @method void setTimestamp(integer $Timestamp) 设置<p>时间戳 Unix 毫秒</p>
 * @method string getSessionId() 获取<p>会话 ID</p>
 * @method void setSessionId(string $SessionId) 设置<p>会话 ID</p>
 * @method string getViewId() 获取<p>视图 ID</p>
 * @method void setViewId(string $ViewId) 设置<p>视图 ID</p>
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
 * @method string getPlatform() 获取<p>平台</p>
 * @method void setPlatform(string $Platform) 设置<p>平台</p>
 * @method string getAppVersion() 获取<p>应用版本</p>
 * @method void setAppVersion(string $AppVersion) 设置<p>应用版本</p>
 * @method string getOs() 获取<p>操作系统</p>
 * @method void setOs(string $Os) 设置<p>操作系统</p>
 * @method string getBrowser() 获取<p>浏览器</p>
 * @method void setBrowser(string $Browser) 设置<p>浏览器</p>
 * @method string getDeviceType() 获取<p>设备类型</p>
 * @method void setDeviceType(string $DeviceType) 设置<p>设备类型</p>
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
 * @method string getIp() 获取<p>IP</p>
 * @method void setIp(string $Ip) 设置<p>IP</p>
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
 * @method string getIssueId() 获取<p>问题单 ID</p>
 * @method void setIssueId(string $IssueId) 设置<p>问题单 ID</p>
 * @method integer getIsSourceMapped() 获取<p>是否已符号化 0/1</p>
 * @method void setIsSourceMapped(integer $IsSourceMapped) 设置<p>是否已符号化 0/1</p>
 * @method array getMeasurements() 获取<p>测量值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMeasurements(array $Measurements) 设置<p>测量值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEventProperties() 获取<p>事件属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventProperties(array $EventProperties) 设置<p>事件属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExceptionStacks() 获取<p>异常栈摘要</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExceptionStacks(array $ExceptionStacks) 设置<p>异常栈摘要</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取<p>事件标签列表。APM 全链路时包含 Key=trace_id，Value 为 32 位 hex TraceId（不是整段 traceparent）。无标签时省略或空数组。</p>
 * @method void setTags(array $Tags) 设置<p>事件标签列表。APM 全链路时包含 Key=trace_id，Value 为 32 位 hex TraceId（不是整段 traceparent）。无标签时省略或空数组。</p>
 */
class ExplorationEventItem extends AbstractModel
{
    /**
     * @var string <p>事件 ID</p>
     */
    public $EventId;

    /**
     * @var string <p>事件类型</p>
     */
    public $EventType;

    /**
     * @var string <p>事件名</p>
     */
    public $EventName;

    /**
     * @var string <p>事件分类</p>
     */
    public $EventCategory;

    /**
     * @var integer <p>时间戳 Unix 毫秒</p>
     */
    public $Timestamp;

    /**
     * @var string <p>会话 ID</p>
     */
    public $SessionId;

    /**
     * @var string <p>视图 ID</p>
     */
    public $ViewId;

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
     * @var string <p>平台</p>
     */
    public $Platform;

    /**
     * @var string <p>应用版本</p>
     */
    public $AppVersion;

    /**
     * @var string <p>操作系统</p>
     */
    public $Os;

    /**
     * @var string <p>浏览器</p>
     */
    public $Browser;

    /**
     * @var string <p>设备类型</p>
     */
    public $DeviceType;

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
     * @var string <p>IP</p>
     */
    public $Ip;

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
     * @var string <p>问题单 ID</p>
     */
    public $IssueId;

    /**
     * @var integer <p>是否已符号化 0/1</p>
     */
    public $IsSourceMapped;

    /**
     * @var array <p>测量值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Measurements;

    /**
     * @var array <p>事件属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventProperties;

    /**
     * @var array <p>异常栈摘要</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExceptionStacks;

    /**
     * @var array <p>事件标签列表。APM 全链路时包含 Key=trace_id，Value 为 32 位 hex TraceId（不是整段 traceparent）。无标签时省略或空数组。</p>
     */
    public $Tags;

    /**
     * @param string $EventId <p>事件 ID</p>
     * @param string $EventType <p>事件类型</p>
     * @param string $EventName <p>事件名</p>
     * @param string $EventCategory <p>事件分类</p>
     * @param integer $Timestamp <p>时间戳 Unix 毫秒</p>
     * @param string $SessionId <p>会话 ID</p>
     * @param string $ViewId <p>视图 ID</p>
     * @param string $UserId <p>业务用户 ID</p>
     * @param string $DeviceId <p>设备 ID</p>
     * @param string $PageUrl <p>页面 URL</p>
     * @param string $NormalizedPageUrl <p>归一化页面 URL</p>
     * @param string $PageTitle <p>页面标题</p>
     * @param string $Platform <p>平台</p>
     * @param string $AppVersion <p>应用版本</p>
     * @param string $Os <p>操作系统</p>
     * @param string $Browser <p>浏览器</p>
     * @param string $DeviceType <p>设备类型</p>
     * @param string $Country <p>国家</p>
     * @param string $Province <p>省份</p>
     * @param string $City <p>城市</p>
     * @param string $Isp <p>运营商</p>
     * @param string $NetworkType <p>网络类型</p>
     * @param string $Ip <p>IP</p>
     * @param string $ResourceUrl <p>资源 URL</p>
     * @param string $ResourceType <p>资源类型</p>
     * @param string $TargetElement <p>目标元素</p>
     * @param string $TargetText <p>目标文本</p>
     * @param string $LogLevel <p>日志级别</p>
     * @param string $IssueId <p>问题单 ID</p>
     * @param integer $IsSourceMapped <p>是否已符号化 0/1</p>
     * @param array $Measurements <p>测量值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EventProperties <p>事件属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExceptionStacks <p>异常栈摘要</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags <p>事件标签列表。APM 全链路时包含 Key=trace_id，Value 为 32 位 hex TraceId（不是整段 traceparent）。无标签时省略或空数组。</p>
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("EventCategory",$param) and $param["EventCategory"] !== null) {
            $this->EventCategory = $param["EventCategory"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("ViewId",$param) and $param["ViewId"] !== null) {
            $this->ViewId = $param["ViewId"];
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

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("AppVersion",$param) and $param["AppVersion"] !== null) {
            $this->AppVersion = $param["AppVersion"];
        }

        if (array_key_exists("Os",$param) and $param["Os"] !== null) {
            $this->Os = $param["Os"];
        }

        if (array_key_exists("Browser",$param) and $param["Browser"] !== null) {
            $this->Browser = $param["Browser"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
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

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
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

        if (array_key_exists("IssueId",$param) and $param["IssueId"] !== null) {
            $this->IssueId = $param["IssueId"];
        }

        if (array_key_exists("IsSourceMapped",$param) and $param["IsSourceMapped"] !== null) {
            $this->IsSourceMapped = $param["IsSourceMapped"];
        }

        if (array_key_exists("Measurements",$param) and $param["Measurements"] !== null) {
            $this->Measurements = [];
            foreach ($param["Measurements"] as $key => $value){
                $obj = new FloatKeyValue();
                $obj->deserialize($value);
                array_push($this->Measurements, $obj);
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

        if (array_key_exists("ExceptionStacks",$param) and $param["ExceptionStacks"] !== null) {
            $this->ExceptionStacks = [];
            foreach ($param["ExceptionStacks"] as $key => $value){
                $obj = new ExplorationExceptionStack();
                $obj->deserialize($value);
                array_push($this->ExceptionStacks, $obj);
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
