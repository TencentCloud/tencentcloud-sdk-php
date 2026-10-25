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
 * 事件排行。Kind=error 填指纹字段；URL 排行填 URL/Fail/Duration。
 *
 * @method string getFingerprint() 获取<p>错误指纹</p>
 * @method void setFingerprint(string $Fingerprint) 设置<p>错误指纹</p>
 * @method string getEventType() 获取<p>事件类型</p>
 * @method void setEventType(string $EventType) 设置<p>事件类型</p>
 * @method string getCrashType() 获取<p>崩溃类型</p>
 * @method void setCrashType(string $CrashType) 设置<p>崩溃类型</p>
 * @method string getErrorType() 获取<p>错误类型</p>
 * @method void setErrorType(string $ErrorType) 设置<p>错误类型</p>
 * @method string getErrorValue() 获取<p>错误值</p>
 * @method void setErrorValue(string $ErrorValue) 设置<p>错误值</p>
 * @method string getIssueId() 获取<p>问题单 ID</p>
 * @method void setIssueId(string $IssueId) 设置<p>问题单 ID</p>
 * @method string getStatus() 获取<p>问题单状态</p>
 * @method void setStatus(string $Status) 设置<p>问题单状态</p>
 * @method string getURL() 获取<p>API 或资源 URL</p>
 * @method void setURL(string $URL) 设置<p>API 或资源 URL</p>
 * @method integer getCount() 获取<p>次数</p>
 * @method void setCount(integer $Count) 设置<p>次数</p>
 * @method integer getAffectedUser() 获取<p>影响用户数</p>
 * @method void setAffectedUser(integer $AffectedUser) 设置<p>影响用户数</p>
 * @method integer getFail() 获取<p>失败次数</p>
 * @method void setFail(integer $Fail) 设置<p>失败次数</p>
 * @method float getDuration() 获取<p>耗时</p>
 * @method void setDuration(float $Duration) 设置<p>耗时</p>
 * @method float getConnectTime() 获取<p>连接时长</p>
 * @method void setConnectTime(float $ConnectTime) 设置<p>连接时长</p>
 * @method float getDomainLookupTime() 获取<p>DNS 时长</p>
 * @method void setDomainLookupTime(float $DomainLookupTime) 设置<p>DNS 时长</p>
 * @method array getSeries() 获取<p>时序</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeries(array $Series) 设置<p>时序</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class EventRankItem extends AbstractModel
{
    /**
     * @var string <p>错误指纹</p>
     */
    public $Fingerprint;

    /**
     * @var string <p>事件类型</p>
     */
    public $EventType;

    /**
     * @var string <p>崩溃类型</p>
     */
    public $CrashType;

    /**
     * @var string <p>错误类型</p>
     */
    public $ErrorType;

    /**
     * @var string <p>错误值</p>
     */
    public $ErrorValue;

    /**
     * @var string <p>问题单 ID</p>
     */
    public $IssueId;

    /**
     * @var string <p>问题单状态</p>
     */
    public $Status;

    /**
     * @var string <p>API 或资源 URL</p>
     */
    public $URL;

    /**
     * @var integer <p>次数</p>
     */
    public $Count;

    /**
     * @var integer <p>影响用户数</p>
     */
    public $AffectedUser;

    /**
     * @var integer <p>失败次数</p>
     */
    public $Fail;

    /**
     * @var float <p>耗时</p>
     */
    public $Duration;

    /**
     * @var float <p>连接时长</p>
     */
    public $ConnectTime;

    /**
     * @var float <p>DNS 时长</p>
     */
    public $DomainLookupTime;

    /**
     * @var array <p>时序</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Series;

    /**
     * @param string $Fingerprint <p>错误指纹</p>
     * @param string $EventType <p>事件类型</p>
     * @param string $CrashType <p>崩溃类型</p>
     * @param string $ErrorType <p>错误类型</p>
     * @param string $ErrorValue <p>错误值</p>
     * @param string $IssueId <p>问题单 ID</p>
     * @param string $Status <p>问题单状态</p>
     * @param string $URL <p>API 或资源 URL</p>
     * @param integer $Count <p>次数</p>
     * @param integer $AffectedUser <p>影响用户数</p>
     * @param integer $Fail <p>失败次数</p>
     * @param float $Duration <p>耗时</p>
     * @param float $ConnectTime <p>连接时长</p>
     * @param float $DomainLookupTime <p>DNS 时长</p>
     * @param array $Series <p>时序</p>
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
        if (array_key_exists("Fingerprint",$param) and $param["Fingerprint"] !== null) {
            $this->Fingerprint = $param["Fingerprint"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("CrashType",$param) and $param["CrashType"] !== null) {
            $this->CrashType = $param["CrashType"];
        }

        if (array_key_exists("ErrorType",$param) and $param["ErrorType"] !== null) {
            $this->ErrorType = $param["ErrorType"];
        }

        if (array_key_exists("ErrorValue",$param) and $param["ErrorValue"] !== null) {
            $this->ErrorValue = $param["ErrorValue"];
        }

        if (array_key_exists("IssueId",$param) and $param["IssueId"] !== null) {
            $this->IssueId = $param["IssueId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("AffectedUser",$param) and $param["AffectedUser"] !== null) {
            $this->AffectedUser = $param["AffectedUser"];
        }

        if (array_key_exists("Fail",$param) and $param["Fail"] !== null) {
            $this->Fail = $param["Fail"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("ConnectTime",$param) and $param["ConnectTime"] !== null) {
            $this->ConnectTime = $param["ConnectTime"];
        }

        if (array_key_exists("DomainLookupTime",$param) and $param["DomainLookupTime"] !== null) {
            $this->DomainLookupTime = $param["DomainLookupTime"];
        }

        if (array_key_exists("Series",$param) and $param["Series"] !== null) {
            $this->Series = [];
            foreach ($param["Series"] as $key => $value){
                $obj = new EventRankPoint();
                $obj->deserialize($value);
                array_push($this->Series, $obj);
            }
        }
    }
}
