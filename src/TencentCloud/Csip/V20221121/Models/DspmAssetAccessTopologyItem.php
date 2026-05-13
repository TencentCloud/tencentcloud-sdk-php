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
 * Dspm资产访问拓扑
 *
 * @method string getAssetId() 获取资产id
 * @method void setAssetId(string $AssetId) 设置资产id
 * @method string getAssetType() 获取资产类型
 * @method void setAssetType(string $AssetType) 设置资产类型
 * @method string getAssetName() 获取资产名
 * @method void setAssetName(string $AssetName) 设置资产名
 * @method string getAssetAccount() 获取资产账号
 * @method void setAssetAccount(string $AssetAccount) 设置资产账号
 * @method string getHost() 获取主机地址
 * @method void setHost(string $Host) 设置主机地址
 * @method integer getAccountType() 获取账号类型
 * @method void setAccountType(integer $AccountType) 设置账号类型
 * @method string getAssetIp() 获取资产地址
 * @method void setAssetIp(string $AssetIp) 设置资产地址
 * @method string getSourceIp() 获取访问来源ip地址
 * @method void setSourceIp(string $SourceIp) 设置访问来源ip地址
 * @method string getSourceIpType() 获取访问来源ip类型
 * @method void setSourceIpType(string $SourceIpType) 设置访问来源ip类型
 * @method DspmFrequency getAccessFrequency() 获取访问频率。次/天
 * @method void setAccessFrequency(DspmFrequency $AccessFrequency) 设置访问频率。次/天
 * @method DspmFrequency getExecSQLFrequency() 获取执行SQL频率。条/小时。
 * @method void setExecSQLFrequency(DspmFrequency $ExecSQLFrequency) 设置执行SQL频率。条/小时。
 * @method string getAccessBeginTime() 获取访问起始时间
 * @method void setAccessBeginTime(string $AccessBeginTime) 设置访问起始时间
 * @method string getAccessEndTime() 获取访问结束时间
 * @method void setAccessEndTime(string $AccessEndTime) 设置访问结束时间
 * @method integer getAccountRisk() 获取账号风险数
 * @method void setAccountRisk(integer $AccountRisk) 设置账号风险数
 * @method integer getAssetRisk() 获取资产风险数
 * @method void setAssetRisk(integer $AssetRisk) 设置资产风险数
 * @method string getRegion() 获取所属地域
 * @method void setRegion(string $Region) 设置所属地域
 * @method integer getIdentifyType() 获取身份类型。非身份账号为null。0-未定义 2-长期身份 3-临时身份
 * @method void setIdentifyType(integer $IdentifyType) 设置身份类型。非身份账号为null。0-未定义 2-长期身份 3-临时身份
 * @method DspmUinUser getOwnerUin() 获取所属云账号uin用户。
 * @method void setOwnerUin(DspmUinUser $OwnerUin) 设置所属云账号uin用户。
 * @method DspmPersonUser getPerson() 获取所属个人用户信息。
 * @method void setPerson(DspmPersonUser $Person) 设置所属个人用户信息。
 * @method integer getAccountAlarm() 获取账号告警数
 * @method void setAccountAlarm(integer $AccountAlarm) 设置账号告警数
 * @method integer getAssetAlarm() 获取资产告警数
 * @method void setAssetAlarm(integer $AssetAlarm) 设置资产告警数
 */
class DspmAssetAccessTopologyItem extends AbstractModel
{
    /**
     * @var string 资产id
     */
    public $AssetId;

    /**
     * @var string 资产类型
     */
    public $AssetType;

    /**
     * @var string 资产名
     */
    public $AssetName;

    /**
     * @var string 资产账号
     */
    public $AssetAccount;

    /**
     * @var string 主机地址
     */
    public $Host;

    /**
     * @var integer 账号类型
     */
    public $AccountType;

    /**
     * @var string 资产地址
     */
    public $AssetIp;

    /**
     * @var string 访问来源ip地址
     */
    public $SourceIp;

    /**
     * @var string 访问来源ip类型
     */
    public $SourceIpType;

    /**
     * @var DspmFrequency 访问频率。次/天
     */
    public $AccessFrequency;

    /**
     * @var DspmFrequency 执行SQL频率。条/小时。
     */
    public $ExecSQLFrequency;

    /**
     * @var string 访问起始时间
     */
    public $AccessBeginTime;

    /**
     * @var string 访问结束时间
     */
    public $AccessEndTime;

    /**
     * @var integer 账号风险数
     */
    public $AccountRisk;

    /**
     * @var integer 资产风险数
     */
    public $AssetRisk;

    /**
     * @var string 所属地域
     */
    public $Region;

    /**
     * @var integer 身份类型。非身份账号为null。0-未定义 2-长期身份 3-临时身份
     */
    public $IdentifyType;

    /**
     * @var DspmUinUser 所属云账号uin用户。
     */
    public $OwnerUin;

    /**
     * @var DspmPersonUser 所属个人用户信息。
     */
    public $Person;

    /**
     * @var integer 账号告警数
     */
    public $AccountAlarm;

    /**
     * @var integer 资产告警数
     */
    public $AssetAlarm;

    /**
     * @param string $AssetId 资产id
     * @param string $AssetType 资产类型
     * @param string $AssetName 资产名
     * @param string $AssetAccount 资产账号
     * @param string $Host 主机地址
     * @param integer $AccountType 账号类型
     * @param string $AssetIp 资产地址
     * @param string $SourceIp 访问来源ip地址
     * @param string $SourceIpType 访问来源ip类型
     * @param DspmFrequency $AccessFrequency 访问频率。次/天
     * @param DspmFrequency $ExecSQLFrequency 执行SQL频率。条/小时。
     * @param string $AccessBeginTime 访问起始时间
     * @param string $AccessEndTime 访问结束时间
     * @param integer $AccountRisk 账号风险数
     * @param integer $AssetRisk 资产风险数
     * @param string $Region 所属地域
     * @param integer $IdentifyType 身份类型。非身份账号为null。0-未定义 2-长期身份 3-临时身份
     * @param DspmUinUser $OwnerUin 所属云账号uin用户。
     * @param DspmPersonUser $Person 所属个人用户信息。
     * @param integer $AccountAlarm 账号告警数
     * @param integer $AssetAlarm 资产告警数
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("AssetAccount",$param) and $param["AssetAccount"] !== null) {
            $this->AssetAccount = $param["AssetAccount"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("AssetIp",$param) and $param["AssetIp"] !== null) {
            $this->AssetIp = $param["AssetIp"];
        }

        if (array_key_exists("SourceIp",$param) and $param["SourceIp"] !== null) {
            $this->SourceIp = $param["SourceIp"];
        }

        if (array_key_exists("SourceIpType",$param) and $param["SourceIpType"] !== null) {
            $this->SourceIpType = $param["SourceIpType"];
        }

        if (array_key_exists("AccessFrequency",$param) and $param["AccessFrequency"] !== null) {
            $this->AccessFrequency = new DspmFrequency();
            $this->AccessFrequency->deserialize($param["AccessFrequency"]);
        }

        if (array_key_exists("ExecSQLFrequency",$param) and $param["ExecSQLFrequency"] !== null) {
            $this->ExecSQLFrequency = new DspmFrequency();
            $this->ExecSQLFrequency->deserialize($param["ExecSQLFrequency"]);
        }

        if (array_key_exists("AccessBeginTime",$param) and $param["AccessBeginTime"] !== null) {
            $this->AccessBeginTime = $param["AccessBeginTime"];
        }

        if (array_key_exists("AccessEndTime",$param) and $param["AccessEndTime"] !== null) {
            $this->AccessEndTime = $param["AccessEndTime"];
        }

        if (array_key_exists("AccountRisk",$param) and $param["AccountRisk"] !== null) {
            $this->AccountRisk = $param["AccountRisk"];
        }

        if (array_key_exists("AssetRisk",$param) and $param["AssetRisk"] !== null) {
            $this->AssetRisk = $param["AssetRisk"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("IdentifyType",$param) and $param["IdentifyType"] !== null) {
            $this->IdentifyType = $param["IdentifyType"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = new DspmUinUser();
            $this->OwnerUin->deserialize($param["OwnerUin"]);
        }

        if (array_key_exists("Person",$param) and $param["Person"] !== null) {
            $this->Person = new DspmPersonUser();
            $this->Person->deserialize($param["Person"]);
        }

        if (array_key_exists("AccountAlarm",$param) and $param["AccountAlarm"] !== null) {
            $this->AccountAlarm = $param["AccountAlarm"];
        }

        if (array_key_exists("AssetAlarm",$param) and $param["AssetAlarm"] !== null) {
            $this->AssetAlarm = $param["AssetAlarm"];
        }
    }
}
