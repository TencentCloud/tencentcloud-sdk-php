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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dspa实例信息
 *
 * @method string getDspaId() 获取DSPA实例ID。
 * @method void setDspaId(string $DspaId) 设置DSPA实例ID。
 * @method string getDspaName() 获取DSPA实例名称。
 * @method void setDspaName(string $DspaName) 设置DSPA实例名称。
 * @method string getDspaDescription() 获取DSPA实例描述信息。
 * @method void setDspaDescription(string $DspaDescription) 设置DSPA实例描述信息。
 * @method integer getDBAuthCount() 获取DSPA实例已授权的数据库实例数量。
 * @method void setDBAuthCount(integer $DBAuthCount) 设置DSPA实例已授权的数据库实例数量。
 * @method integer getCosBindCount() 获取DSPA实例已绑定的cos桶数量。
 * @method void setCosBindCount(integer $CosBindCount) 设置DSPA实例已绑定的cos桶数量。
 * @method string getInstanceVersion() 获取DSPA实例版本。
 * @method void setInstanceVersion(string $InstanceVersion) 设置DSPA实例版本。
 * @method string getStatus() 获取DSPA实例状态。
 * @method void setStatus(string $Status) 设置DSPA实例状态。
 * @method integer getExpiredAt() 获取实例过期时间戳。
 * @method void setExpiredAt(integer $ExpiredAt) 设置实例过期时间戳。
 * @method integer getAppId() 获取账户APPID。
 * @method void setAppId(integer $AppId) 设置账户APPID。
 * @method string getTrialVersion() 获取体验版本信息。
 * @method void setTrialVersion(string $TrialVersion) 设置体验版本信息。
 * @method integer getTrialEndAt() 获取体验版本过期时间戳。
 * @method void setTrialEndAt(integer $TrialEndAt) 设置体验版本过期时间戳。
 * @method integer getDbTotalQuota() 获取DB已购配额。
 * @method void setDbTotalQuota(integer $DbTotalQuota) 设置DB已购配额。
 * @method integer getCosTotalQuota() 获取COS已购配额。
 * @method void setCosTotalQuota(integer $CosTotalQuota) 设置COS已购配额。
 * @method string getCosQuotaUnit() 获取COS配额单位，比如TB。
 * @method void setCosQuotaUnit(string $CosQuotaUnit) 设置COS配额单位，比如TB。
 * @method integer getRenewFlag() 获取0: 默认状态(用户未设置)
1: 开启自动续费
2: 明确不自动续费
 * @method void setRenewFlag(integer $RenewFlag) 设置0: 默认状态(用户未设置)
1: 开启自动续费
2: 明确不自动续费
 */
class DspaInstance extends AbstractModel
{
    /**
     * @var string DSPA实例ID。
     */
    public $DspaId;

    /**
     * @var string DSPA实例名称。
     */
    public $DspaName;

    /**
     * @var string DSPA实例描述信息。
     */
    public $DspaDescription;

    /**
     * @var integer DSPA实例已授权的数据库实例数量。
     */
    public $DBAuthCount;

    /**
     * @var integer DSPA实例已绑定的cos桶数量。
     */
    public $CosBindCount;

    /**
     * @var string DSPA实例版本。
     */
    public $InstanceVersion;

    /**
     * @var string DSPA实例状态。
     */
    public $Status;

    /**
     * @var integer 实例过期时间戳。
     */
    public $ExpiredAt;

    /**
     * @var integer 账户APPID。
     */
    public $AppId;

    /**
     * @var string 体验版本信息。
     */
    public $TrialVersion;

    /**
     * @var integer 体验版本过期时间戳。
     */
    public $TrialEndAt;

    /**
     * @var integer DB已购配额。
     */
    public $DbTotalQuota;

    /**
     * @var integer COS已购配额。
     */
    public $CosTotalQuota;

    /**
     * @var string COS配额单位，比如TB。
     */
    public $CosQuotaUnit;

    /**
     * @var integer 0: 默认状态(用户未设置)
1: 开启自动续费
2: 明确不自动续费
     */
    public $RenewFlag;

    /**
     * @param string $DspaId DSPA实例ID。
     * @param string $DspaName DSPA实例名称。
     * @param string $DspaDescription DSPA实例描述信息。
     * @param integer $DBAuthCount DSPA实例已授权的数据库实例数量。
     * @param integer $CosBindCount DSPA实例已绑定的cos桶数量。
     * @param string $InstanceVersion DSPA实例版本。
     * @param string $Status DSPA实例状态。
     * @param integer $ExpiredAt 实例过期时间戳。
     * @param integer $AppId 账户APPID。
     * @param string $TrialVersion 体验版本信息。
     * @param integer $TrialEndAt 体验版本过期时间戳。
     * @param integer $DbTotalQuota DB已购配额。
     * @param integer $CosTotalQuota COS已购配额。
     * @param string $CosQuotaUnit COS配额单位，比如TB。
     * @param integer $RenewFlag 0: 默认状态(用户未设置)
1: 开启自动续费
2: 明确不自动续费
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("DspaName",$param) and $param["DspaName"] !== null) {
            $this->DspaName = $param["DspaName"];
        }

        if (array_key_exists("DspaDescription",$param) and $param["DspaDescription"] !== null) {
            $this->DspaDescription = $param["DspaDescription"];
        }

        if (array_key_exists("DBAuthCount",$param) and $param["DBAuthCount"] !== null) {
            $this->DBAuthCount = $param["DBAuthCount"];
        }

        if (array_key_exists("CosBindCount",$param) and $param["CosBindCount"] !== null) {
            $this->CosBindCount = $param["CosBindCount"];
        }

        if (array_key_exists("InstanceVersion",$param) and $param["InstanceVersion"] !== null) {
            $this->InstanceVersion = $param["InstanceVersion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ExpiredAt",$param) and $param["ExpiredAt"] !== null) {
            $this->ExpiredAt = $param["ExpiredAt"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("TrialVersion",$param) and $param["TrialVersion"] !== null) {
            $this->TrialVersion = $param["TrialVersion"];
        }

        if (array_key_exists("TrialEndAt",$param) and $param["TrialEndAt"] !== null) {
            $this->TrialEndAt = $param["TrialEndAt"];
        }

        if (array_key_exists("DbTotalQuota",$param) and $param["DbTotalQuota"] !== null) {
            $this->DbTotalQuota = $param["DbTotalQuota"];
        }

        if (array_key_exists("CosTotalQuota",$param) and $param["CosTotalQuota"] !== null) {
            $this->CosTotalQuota = $param["CosTotalQuota"];
        }

        if (array_key_exists("CosQuotaUnit",$param) and $param["CosQuotaUnit"] !== null) {
            $this->CosQuotaUnit = $param["CosQuotaUnit"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }
    }
}
