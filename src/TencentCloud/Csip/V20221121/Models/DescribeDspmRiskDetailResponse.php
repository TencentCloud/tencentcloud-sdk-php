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
 * DescribeDspmRiskDetail返回参数结构体
 *
 * @method string getRiskLevel() 获取风险等级
 * @method void setRiskLevel(string $RiskLevel) 设置风险等级
 * @method string getDetectTime() 获取风险检出时间
 * @method void setDetectTime(string $DetectTime) 设置风险检出时间
 * @method string getAssetId() 获取资产实例Id
 * @method void setAssetId(string $AssetId) 设置资产实例Id
 * @method string getAssetName() 获取资产名
 * @method void setAssetName(string $AssetName) 设置资产名
 * @method string getAssetType() 获取资产类型
 * @method void setAssetType(string $AssetType) 设置资产类型
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getPublicIp() 获取公网访问地址
 * @method void setPublicIp(string $PublicIp) 设置公网访问地址
 * @method string getPrivateIp() 获取内网访问地址
 * @method void setPrivateIp(string $PrivateIp) 设置内网访问地址
 * @method string getAccount() 获取账号
 * @method void setAccount(string $Account) 设置账号
 * @method string getHost() 获取主机地址
 * @method void setHost(string $Host) 设置主机地址
 * @method string getIdentifyId() 获取身份id
 * @method void setIdentifyId(string $IdentifyId) 设置身份id
 * @method DspmUinUser getOwnerUin() 获取所属云账号uin用户
 * @method void setOwnerUin(DspmUinUser $OwnerUin) 设置所属云账号uin用户
 * @method DspmPersonUser getPerson() 获取所属个人用户信息
 * @method void setPerson(DspmPersonUser $Person) 设置所属个人用户信息
 * @method string getRiskName() 获取风险名称
 * @method void setRiskName(string $RiskName) 设置风险名称
 * @method string getRiskNameEn() 获取风险英文名称
 * @method void setRiskNameEn(string $RiskNameEn) 设置风险英文名称
 * @method string getRiskData() 获取风险数据
 * @method void setRiskData(string $RiskData) 设置风险数据
 * @method string getBaselineData() 获取基线数据
 * @method void setBaselineData(string $BaselineData) 设置基线数据
 * @method string getRiskId() 获取风险id
 * @method void setRiskId(string $RiskId) 设置风险id
 * @method string getStrategyType() 获取策略类型
 * @method void setStrategyType(string $StrategyType) 设置策略类型
 * @method string getStrategyCategory() 获取策略类别
 * @method void setStrategyCategory(string $StrategyCategory) 设置策略类别
 * @method integer getAccountType() 获取账号类型
 * @method void setAccountType(integer $AccountType) 设置账号类型
 * @method integer getStatus() 获取风险状态
 * @method void setStatus(integer $Status) 设置风险状态
 * @method integer getIsAssetManager() 获取是否资产管理员
 * @method void setIsAssetManager(integer $IsAssetManager) 设置是否资产管理员
 * @method string getDataBeginTime() 获取数据起始时间
 * @method void setDataBeginTime(string $DataBeginTime) 设置数据起始时间
 * @method string getDataEndTime() 获取数据结束时间
 * @method void setDataEndTime(string $DataEndTime) 设置数据结束时间
 * @method string getRiskType() 获取风险类型。risk-风险；alarm-告警。
 * @method void setRiskType(string $RiskType) 设置风险类型。risk-风险；alarm-告警。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDspmRiskDetailResponse extends AbstractModel
{
    /**
     * @var string 风险等级
     */
    public $RiskLevel;

    /**
     * @var string 风险检出时间
     */
    public $DetectTime;

    /**
     * @var string 资产实例Id
     */
    public $AssetId;

    /**
     * @var string 资产名
     */
    public $AssetName;

    /**
     * @var string 资产类型
     */
    public $AssetType;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 公网访问地址
     */
    public $PublicIp;

    /**
     * @var string 内网访问地址
     */
    public $PrivateIp;

    /**
     * @var string 账号
     */
    public $Account;

    /**
     * @var string 主机地址
     */
    public $Host;

    /**
     * @var string 身份id
     */
    public $IdentifyId;

    /**
     * @var DspmUinUser 所属云账号uin用户
     */
    public $OwnerUin;

    /**
     * @var DspmPersonUser 所属个人用户信息
     */
    public $Person;

    /**
     * @var string 风险名称
     */
    public $RiskName;

    /**
     * @var string 风险英文名称
     */
    public $RiskNameEn;

    /**
     * @var string 风险数据
     */
    public $RiskData;

    /**
     * @var string 基线数据
     */
    public $BaselineData;

    /**
     * @var string 风险id
     */
    public $RiskId;

    /**
     * @var string 策略类型
     */
    public $StrategyType;

    /**
     * @var string 策略类别
     */
    public $StrategyCategory;

    /**
     * @var integer 账号类型
     */
    public $AccountType;

    /**
     * @var integer 风险状态
     */
    public $Status;

    /**
     * @var integer 是否资产管理员
     */
    public $IsAssetManager;

    /**
     * @var string 数据起始时间
     */
    public $DataBeginTime;

    /**
     * @var string 数据结束时间
     */
    public $DataEndTime;

    /**
     * @var string 风险类型。risk-风险；alarm-告警。
     */
    public $RiskType;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $RiskLevel 风险等级
     * @param string $DetectTime 风险检出时间
     * @param string $AssetId 资产实例Id
     * @param string $AssetName 资产名
     * @param string $AssetType 资产类型
     * @param string $Region 地域
     * @param string $PublicIp 公网访问地址
     * @param string $PrivateIp 内网访问地址
     * @param string $Account 账号
     * @param string $Host 主机地址
     * @param string $IdentifyId 身份id
     * @param DspmUinUser $OwnerUin 所属云账号uin用户
     * @param DspmPersonUser $Person 所属个人用户信息
     * @param string $RiskName 风险名称
     * @param string $RiskNameEn 风险英文名称
     * @param string $RiskData 风险数据
     * @param string $BaselineData 基线数据
     * @param string $RiskId 风险id
     * @param string $StrategyType 策略类型
     * @param string $StrategyCategory 策略类别
     * @param integer $AccountType 账号类型
     * @param integer $Status 风险状态
     * @param integer $IsAssetManager 是否资产管理员
     * @param string $DataBeginTime 数据起始时间
     * @param string $DataEndTime 数据结束时间
     * @param string $RiskType 风险类型。risk-风险；alarm-告警。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("DetectTime",$param) and $param["DetectTime"] !== null) {
            $this->DetectTime = $param["DetectTime"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("IdentifyId",$param) and $param["IdentifyId"] !== null) {
            $this->IdentifyId = $param["IdentifyId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = new DspmUinUser();
            $this->OwnerUin->deserialize($param["OwnerUin"]);
        }

        if (array_key_exists("Person",$param) and $param["Person"] !== null) {
            $this->Person = new DspmPersonUser();
            $this->Person->deserialize($param["Person"]);
        }

        if (array_key_exists("RiskName",$param) and $param["RiskName"] !== null) {
            $this->RiskName = $param["RiskName"];
        }

        if (array_key_exists("RiskNameEn",$param) and $param["RiskNameEn"] !== null) {
            $this->RiskNameEn = $param["RiskNameEn"];
        }

        if (array_key_exists("RiskData",$param) and $param["RiskData"] !== null) {
            $this->RiskData = $param["RiskData"];
        }

        if (array_key_exists("BaselineData",$param) and $param["BaselineData"] !== null) {
            $this->BaselineData = $param["BaselineData"];
        }

        if (array_key_exists("RiskId",$param) and $param["RiskId"] !== null) {
            $this->RiskId = $param["RiskId"];
        }

        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("StrategyCategory",$param) and $param["StrategyCategory"] !== null) {
            $this->StrategyCategory = $param["StrategyCategory"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsAssetManager",$param) and $param["IsAssetManager"] !== null) {
            $this->IsAssetManager = $param["IsAssetManager"];
        }

        if (array_key_exists("DataBeginTime",$param) and $param["DataBeginTime"] !== null) {
            $this->DataBeginTime = $param["DataBeginTime"];
        }

        if (array_key_exists("DataEndTime",$param) and $param["DataEndTime"] !== null) {
            $this->DataEndTime = $param["DataEndTime"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
