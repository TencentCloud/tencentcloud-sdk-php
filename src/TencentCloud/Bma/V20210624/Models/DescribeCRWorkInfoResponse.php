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
 * @method string getWorkName() 获取作品名称
 * @method void setWorkName(string $WorkName) 设置作品名称
 * @method integer getMonitorStatus() 获取监测状态
 * @method void setMonitorStatus(integer $MonitorStatus) 设置监测状态
 * @method integer getAuthStatus() 获取授权文件状态
 * @method void setAuthStatus(integer $AuthStatus) 设置授权文件状态
 * @method integer getCommStatus() 获取委托书状态
 * @method void setCommStatus(integer $CommStatus) 设置委托书状态
 * @method integer getIsProducer() 获取是否著作权人
 * @method void setIsProducer(integer $IsProducer) 设置是否著作权人
 * @method integer getEvidenceStatus() 获取存证证书状态
 * @method void setEvidenceStatus(integer $EvidenceStatus) 设置存证证书状态
 * @method string getWorkCategory() 获取作品类型
 * @method void setWorkCategory(string $WorkCategory) 设置作品类型
 * @method string getIsOriginal() 获取是否原创
 * @method void setIsOriginal(string $IsOriginal) 设置是否原创
 * @method string getIsRelease() 获取是否已发表
 * @method void setIsRelease(string $IsRelease) 设置是否已发表
 * @method string getProducerName() 获取著作权人姓名
 * @method void setProducerName(string $ProducerName) 设置著作权人姓名
 * @method string getProduceTime() 获取发表时间
 * @method void setProduceTime(string $ProduceTime) 设置发表时间
 * @method array getWhiteLists() 获取白名单
 * @method void setWhiteLists(array $WhiteLists) 设置白名单
 * @method string getWorkDesc() 获取作品描述
 * @method void setWorkDesc(string $WorkDesc) 设置作品描述
 * @method string getAuthorization() 获取授权书
 * @method void setAuthorization(string $Authorization) 设置授权书
 * @method string getAuthorizationStartTime() 获取授权书生效日期
 * @method void setAuthorizationStartTime(string $AuthorizationStartTime) 设置授权书生效日期
 * @method string getAuthorizationEndTime() 获取授权书截止日期
 * @method void setAuthorizationEndTime(string $AuthorizationEndTime) 设置授权书截止日期
 * @method string getCommission() 获取委托书
 * @method void setCommission(string $Commission) 设置委托书
 * @method string getCommissionStartTime() 获取委托书生效日期
 * @method void setCommissionStartTime(string $CommissionStartTime) 设置委托书生效日期
 * @method string getCommissionEndTime() 获取委托书截止日期
 * @method void setCommissionEndTime(string $CommissionEndTime) 设置委托书截止日期
 * @method string getEvidenceUrl() 获取存证证书
 * @method void setEvidenceUrl(string $EvidenceUrl) 设置存证证书
 * @method string getEvidenceStartTime() 获取存证证书生效日期
 * @method void setEvidenceStartTime(string $EvidenceStartTime) 设置存证证书生效日期
 * @method string getEvidenceEndTime() 获取存证证书截止日期
 * @method void setEvidenceEndTime(string $EvidenceEndTime) 设置存证证书截止日期
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCRWorkInfoResponse extends AbstractModel
{
    /**
     * @var string 作品名称
     */
    public $WorkName;

    /**
     * @var integer 监测状态
     */
    public $MonitorStatus;

    /**
     * @var integer 授权文件状态
     */
    public $AuthStatus;

    /**
     * @var integer 委托书状态
     */
    public $CommStatus;

    /**
     * @var integer 是否著作权人
     */
    public $IsProducer;

    /**
     * @var integer 存证证书状态
     */
    public $EvidenceStatus;

    /**
     * @var string 作品类型
     */
    public $WorkCategory;

    /**
     * @var string 是否原创
     */
    public $IsOriginal;

    /**
     * @var string 是否已发表
     */
    public $IsRelease;

    /**
     * @var string 著作权人姓名
     */
    public $ProducerName;

    /**
     * @var string 发表时间
     */
    public $ProduceTime;

    /**
     * @var array 白名单
     */
    public $WhiteLists;

    /**
     * @var string 作品描述
     */
    public $WorkDesc;

    /**
     * @var string 授权书
     */
    public $Authorization;

    /**
     * @var string 授权书生效日期
     */
    public $AuthorizationStartTime;

    /**
     * @var string 授权书截止日期
     */
    public $AuthorizationEndTime;

    /**
     * @var string 委托书
     */
    public $Commission;

    /**
     * @var string 委托书生效日期
     */
    public $CommissionStartTime;

    /**
     * @var string 委托书截止日期
     */
    public $CommissionEndTime;

    /**
     * @var string 存证证书
     */
    public $EvidenceUrl;

    /**
     * @var string 存证证书生效日期
     */
    public $EvidenceStartTime;

    /**
     * @var string 存证证书截止日期
     */
    public $EvidenceEndTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $WorkName 作品名称
     * @param integer $MonitorStatus 监测状态
     * @param integer $AuthStatus 授权文件状态
     * @param integer $CommStatus 委托书状态
     * @param integer $IsProducer 是否著作权人
     * @param integer $EvidenceStatus 存证证书状态
     * @param string $WorkCategory 作品类型
     * @param string $IsOriginal 是否原创
     * @param string $IsRelease 是否已发表
     * @param string $ProducerName 著作权人姓名
     * @param string $ProduceTime 发表时间
     * @param array $WhiteLists 白名单
     * @param string $WorkDesc 作品描述
     * @param string $Authorization 授权书
     * @param string $AuthorizationStartTime 授权书生效日期
     * @param string $AuthorizationEndTime 授权书截止日期
     * @param string $Commission 委托书
     * @param string $CommissionStartTime 委托书生效日期
     * @param string $CommissionEndTime 委托书截止日期
     * @param string $EvidenceUrl 存证证书
     * @param string $EvidenceStartTime 存证证书生效日期
     * @param string $EvidenceEndTime 存证证书截止日期
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
