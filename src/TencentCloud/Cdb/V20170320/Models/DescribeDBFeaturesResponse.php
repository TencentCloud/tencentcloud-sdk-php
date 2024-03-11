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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBFeatures返回参数结构体
 *
 * @method boolean getIsSupportAudit() 获取是否支持数据库审计功能。
 * @method void setIsSupportAudit(boolean $IsSupportAudit) 设置是否支持数据库审计功能。
 * @method boolean getAuditNeedUpgrade() 获取开启审计是否需要升级内核版本。
 * @method void setAuditNeedUpgrade(boolean $AuditNeedUpgrade) 设置开启审计是否需要升级内核版本。
 * @method boolean getIsSupportEncryption() 获取是否支持数据库加密功能。
 * @method void setIsSupportEncryption(boolean $IsSupportEncryption) 设置是否支持数据库加密功能。
 * @method boolean getEncryptionNeedUpgrade() 获取开启加密是否需要升级内核版本。
 * @method void setEncryptionNeedUpgrade(boolean $EncryptionNeedUpgrade) 设置开启加密是否需要升级内核版本。
 * @method boolean getIsRemoteRo() 获取是否为异地只读实例。
 * @method void setIsRemoteRo(boolean $IsRemoteRo) 设置是否为异地只读实例。
 * @method string getMasterRegion() 获取主实例所在地域。
 * @method void setMasterRegion(string $MasterRegion) 设置主实例所在地域。
 * @method boolean getIsSupportUpdateSubVersion() 获取是否支持小版本升级。
 * @method void setIsSupportUpdateSubVersion(boolean $IsSupportUpdateSubVersion) 设置是否支持小版本升级。
 * @method string getCurrentSubVersion() 获取当前内核版本。
 * @method void setCurrentSubVersion(string $CurrentSubVersion) 设置当前内核版本。
 * @method string getTargetSubVersion() 获取可供升级的内核版本。
 * @method void setTargetSubVersion(string $TargetSubVersion) 设置可供升级的内核版本。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBFeaturesResponse extends AbstractModel
{
    /**
     * @var boolean 是否支持数据库审计功能。
     */
    public $IsSupportAudit;

    /**
     * @var boolean 开启审计是否需要升级内核版本。
     */
    public $AuditNeedUpgrade;

    /**
     * @var boolean 是否支持数据库加密功能。
     */
    public $IsSupportEncryption;

    /**
     * @var boolean 开启加密是否需要升级内核版本。
     */
    public $EncryptionNeedUpgrade;

    /**
     * @var boolean 是否为异地只读实例。
     */
    public $IsRemoteRo;

    /**
     * @var string 主实例所在地域。
     */
    public $MasterRegion;

    /**
     * @var boolean 是否支持小版本升级。
     */
    public $IsSupportUpdateSubVersion;

    /**
     * @var string 当前内核版本。
     */
    public $CurrentSubVersion;

    /**
     * @var string 可供升级的内核版本。
     */
    public $TargetSubVersion;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $IsSupportAudit 是否支持数据库审计功能。
     * @param boolean $AuditNeedUpgrade 开启审计是否需要升级内核版本。
     * @param boolean $IsSupportEncryption 是否支持数据库加密功能。
     * @param boolean $EncryptionNeedUpgrade 开启加密是否需要升级内核版本。
     * @param boolean $IsRemoteRo 是否为异地只读实例。
     * @param string $MasterRegion 主实例所在地域。
     * @param boolean $IsSupportUpdateSubVersion 是否支持小版本升级。
     * @param string $CurrentSubVersion 当前内核版本。
     * @param string $TargetSubVersion 可供升级的内核版本。
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
        if (array_key_exists("IsSupportAudit",$param) and $param["IsSupportAudit"] !== null) {
            $this->IsSupportAudit = $param["IsSupportAudit"];
        }

        if (array_key_exists("AuditNeedUpgrade",$param) and $param["AuditNeedUpgrade"] !== null) {
            $this->AuditNeedUpgrade = $param["AuditNeedUpgrade"];
        }

        if (array_key_exists("IsSupportEncryption",$param) and $param["IsSupportEncryption"] !== null) {
            $this->IsSupportEncryption = $param["IsSupportEncryption"];
        }

        if (array_key_exists("EncryptionNeedUpgrade",$param) and $param["EncryptionNeedUpgrade"] !== null) {
            $this->EncryptionNeedUpgrade = $param["EncryptionNeedUpgrade"];
        }

        if (array_key_exists("IsRemoteRo",$param) and $param["IsRemoteRo"] !== null) {
            $this->IsRemoteRo = $param["IsRemoteRo"];
        }

        if (array_key_exists("MasterRegion",$param) and $param["MasterRegion"] !== null) {
            $this->MasterRegion = $param["MasterRegion"];
        }

        if (array_key_exists("IsSupportUpdateSubVersion",$param) and $param["IsSupportUpdateSubVersion"] !== null) {
            $this->IsSupportUpdateSubVersion = $param["IsSupportUpdateSubVersion"];
        }

        if (array_key_exists("CurrentSubVersion",$param) and $param["CurrentSubVersion"] !== null) {
            $this->CurrentSubVersion = $param["CurrentSubVersion"];
        }

        if (array_key_exists("TargetSubVersion",$param) and $param["TargetSubVersion"] !== null) {
            $this->TargetSubVersion = $param["TargetSubVersion"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
