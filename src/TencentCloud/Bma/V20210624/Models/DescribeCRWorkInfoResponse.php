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
namespace TencentCloud\Bma\V20210624\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCRWorkInfo返回参数结构体
 *
 * @method string getWorkName() 获取x
 * @method void setWorkName(string $WorkName) 设置x
 * @method integer getMonitorStatus() 获取x
 * @method void setMonitorStatus(integer $MonitorStatus) 设置x
 * @method integer getAuthStatus() 获取x
 * @method void setAuthStatus(integer $AuthStatus) 设置x
 * @method integer getCommStatus() 获取x
 * @method void setCommStatus(integer $CommStatus) 设置x
 * @method integer getIsProducer() 获取x
 * @method void setIsProducer(integer $IsProducer) 设置x
 * @method integer getEvidenceStatus() 获取xxx
 * @method void setEvidenceStatus(integer $EvidenceStatus) 设置xxx
 * @method string getWorkCategory() 获取xxx
 * @method void setWorkCategory(string $WorkCategory) 设置xxx
 * @method string getIsOriginal() 获取xxx
 * @method void setIsOriginal(string $IsOriginal) 设置xxx
 * @method string getIsRelease() 获取xxx
 * @method void setIsRelease(string $IsRelease) 设置xxx
 * @method string getProducerName() 获取xxx
 * @method void setProducerName(string $ProducerName) 设置xxx
 * @method string getProduceTime() 获取xxx
 * @method void setProduceTime(string $ProduceTime) 设置xxx
 * @method array getWhiteLists() 获取xxx
 * @method void setWhiteLists(array $WhiteLists) 设置xxx
 * @method string getWorkDesc() 获取xxx
 * @method void setWorkDesc(string $WorkDesc) 设置xxx
 * @method string getAuthorization() 获取xxx
 * @method void setAuthorization(string $Authorization) 设置xxx
 * @method string getAuthorizationStartTime() 获取xxx
 * @method void setAuthorizationStartTime(string $AuthorizationStartTime) 设置xxx
 * @method string getAuthorizationEndTime() 获取xxx
 * @method void setAuthorizationEndTime(string $AuthorizationEndTime) 设置xxx
 * @method string getCommission() 获取xxx
 * @method void setCommission(string $Commission) 设置xxx
 * @method string getCommissionStartTime() 获取xxx
 * @method void setCommissionStartTime(string $CommissionStartTime) 设置xxx
 * @method string getCommissionEndTime() 获取xxx
 * @method void setCommissionEndTime(string $CommissionEndTime) 设置xxx
 * @method string getEvidenceUrl() 获取xxx
 * @method void setEvidenceUrl(string $EvidenceUrl) 设置xxx
 * @method string getEvidenceStartTime() 获取xxx
 * @method void setEvidenceStartTime(string $EvidenceStartTime) 设置xxx
 * @method string getEvidenceEndTime() 获取xxx
 * @method void setEvidenceEndTime(string $EvidenceEndTime) 设置xxx
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCRWorkInfoResponse extends AbstractModel
{
    /**
     * @var string x
     */
    public $WorkName;

    /**
     * @var integer x
     */
    public $MonitorStatus;

    /**
     * @var integer x
     */
    public $AuthStatus;

    /**
     * @var integer x
     */
    public $CommStatus;

    /**
     * @var integer x
     */
    public $IsProducer;

    /**
     * @var integer xxx
     */
    public $EvidenceStatus;

    /**
     * @var string xxx
     */
    public $WorkCategory;

    /**
     * @var string xxx
     */
    public $IsOriginal;

    /**
     * @var string xxx
     */
    public $IsRelease;

    /**
     * @var string xxx
     */
    public $ProducerName;

    /**
     * @var string xxx
     */
    public $ProduceTime;

    /**
     * @var array xxx
     */
    public $WhiteLists;

    /**
     * @var string xxx
     */
    public $WorkDesc;

    /**
     * @var string xxx
     */
    public $Authorization;

    /**
     * @var string xxx
     */
    public $AuthorizationStartTime;

    /**
     * @var string xxx
     */
    public $AuthorizationEndTime;

    /**
     * @var string xxx
     */
    public $Commission;

    /**
     * @var string xxx
     */
    public $CommissionStartTime;

    /**
     * @var string xxx
     */
    public $CommissionEndTime;

    /**
     * @var string xxx
     */
    public $EvidenceUrl;

    /**
     * @var string xxx
     */
    public $EvidenceStartTime;

    /**
     * @var string xxx
     */
    public $EvidenceEndTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $WorkName x
     * @param integer $MonitorStatus x
     * @param integer $AuthStatus x
     * @param integer $CommStatus x
     * @param integer $IsProducer x
     * @param integer $EvidenceStatus xxx
     * @param string $WorkCategory xxx
     * @param string $IsOriginal xxx
     * @param string $IsRelease xxx
     * @param string $ProducerName xxx
     * @param string $ProduceTime xxx
     * @param array $WhiteLists xxx
     * @param string $WorkDesc xxx
     * @param string $Authorization xxx
     * @param string $AuthorizationStartTime xxx
     * @param string $AuthorizationEndTime xxx
     * @param string $Commission xxx
     * @param string $CommissionStartTime xxx
     * @param string $CommissionEndTime xxx
     * @param string $EvidenceUrl xxx
     * @param string $EvidenceStartTime xxx
     * @param string $EvidenceEndTime xxx
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
        if (array_key_exists("WorkName",$param) and $param["WorkName"] !== null) {
            $this->WorkName = $param["WorkName"];
        }

        if (array_key_exists("MonitorStatus",$param) and $param["MonitorStatus"] !== null) {
            $this->MonitorStatus = $param["MonitorStatus"];
        }

        if (array_key_exists("AuthStatus",$param) and $param["AuthStatus"] !== null) {
            $this->AuthStatus = $param["AuthStatus"];
        }

        if (array_key_exists("CommStatus",$param) and $param["CommStatus"] !== null) {
            $this->CommStatus = $param["CommStatus"];
        }

        if (array_key_exists("IsProducer",$param) and $param["IsProducer"] !== null) {
            $this->IsProducer = $param["IsProducer"];
        }

        if (array_key_exists("EvidenceStatus",$param) and $param["EvidenceStatus"] !== null) {
            $this->EvidenceStatus = $param["EvidenceStatus"];
        }

        if (array_key_exists("WorkCategory",$param) and $param["WorkCategory"] !== null) {
            $this->WorkCategory = $param["WorkCategory"];
        }

        if (array_key_exists("IsOriginal",$param) and $param["IsOriginal"] !== null) {
            $this->IsOriginal = $param["IsOriginal"];
        }

        if (array_key_exists("IsRelease",$param) and $param["IsRelease"] !== null) {
            $this->IsRelease = $param["IsRelease"];
        }

        if (array_key_exists("ProducerName",$param) and $param["ProducerName"] !== null) {
            $this->ProducerName = $param["ProducerName"];
        }

        if (array_key_exists("ProduceTime",$param) and $param["ProduceTime"] !== null) {
            $this->ProduceTime = $param["ProduceTime"];
        }

        if (array_key_exists("WhiteLists",$param) and $param["WhiteLists"] !== null) {
            $this->WhiteLists = $param["WhiteLists"];
        }

        if (array_key_exists("WorkDesc",$param) and $param["WorkDesc"] !== null) {
            $this->WorkDesc = $param["WorkDesc"];
        }

        if (array_key_exists("Authorization",$param) and $param["Authorization"] !== null) {
            $this->Authorization = $param["Authorization"];
        }

        if (array_key_exists("AuthorizationStartTime",$param) and $param["AuthorizationStartTime"] !== null) {
            $this->AuthorizationStartTime = $param["AuthorizationStartTime"];
        }

        if (array_key_exists("AuthorizationEndTime",$param) and $param["AuthorizationEndTime"] !== null) {
            $this->AuthorizationEndTime = $param["AuthorizationEndTime"];
        }

        if (array_key_exists("Commission",$param) and $param["Commission"] !== null) {
            $this->Commission = $param["Commission"];
        }

        if (array_key_exists("CommissionStartTime",$param) and $param["CommissionStartTime"] !== null) {
            $this->CommissionStartTime = $param["CommissionStartTime"];
        }

        if (array_key_exists("CommissionEndTime",$param) and $param["CommissionEndTime"] !== null) {
            $this->CommissionEndTime = $param["CommissionEndTime"];
        }

        if (array_key_exists("EvidenceUrl",$param) and $param["EvidenceUrl"] !== null) {
            $this->EvidenceUrl = $param["EvidenceUrl"];
        }

        if (array_key_exists("EvidenceStartTime",$param) and $param["EvidenceStartTime"] !== null) {
            $this->EvidenceStartTime = $param["EvidenceStartTime"];
        }

        if (array_key_exists("EvidenceEndTime",$param) and $param["EvidenceEndTime"] !== null) {
            $this->EvidenceEndTime = $param["EvidenceEndTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
