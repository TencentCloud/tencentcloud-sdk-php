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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBFeatures返回参数结构体
 *
 * @method boolean getIsSupportAudit() 获取<p>是否支持数据库审计功能。</p>
 * @method void setIsSupportAudit(boolean $IsSupportAudit) 设置<p>是否支持数据库审计功能。</p>
 * @method boolean getAuditNeedUpgrade() 获取<p>开启审计是否需要升级内核版本。</p>
 * @method void setAuditNeedUpgrade(boolean $AuditNeedUpgrade) 设置<p>开启审计是否需要升级内核版本。</p>
 * @method boolean getIsSupportEncryption() 获取<p>是否支持数据库加密功能。</p>
 * @method void setIsSupportEncryption(boolean $IsSupportEncryption) 设置<p>是否支持数据库加密功能。</p>
 * @method boolean getEncryptionNeedUpgrade() 获取<p>开启加密是否需要升级内核版本。</p>
 * @method void setEncryptionNeedUpgrade(boolean $EncryptionNeedUpgrade) 设置<p>开启加密是否需要升级内核版本。</p>
 * @method boolean getIsRemoteRo() 获取<p>是否为异地只读实例。</p>
 * @method void setIsRemoteRo(boolean $IsRemoteRo) 设置<p>是否为异地只读实例。</p>
 * @method string getMasterRegion() 获取<p>主实例所在地域。<br>说明：此参数可能返回空值，您可忽略此出参返回值。如需获取实例所在地域详情，您可调用 <a href="https://cloud.tencent.com/document/product/236/15872">查询实例列表</a> 接口查询。</p>
 * @method void setMasterRegion(string $MasterRegion) 设置<p>主实例所在地域。<br>说明：此参数可能返回空值，您可忽略此出参返回值。如需获取实例所在地域详情，您可调用 <a href="https://cloud.tencent.com/document/product/236/15872">查询实例列表</a> 接口查询。</p>
 * @method boolean getIsSupportUpdateSubVersion() 获取<p>是否支持小版本升级。</p>
 * @method void setIsSupportUpdateSubVersion(boolean $IsSupportUpdateSubVersion) 设置<p>是否支持小版本升级。</p>
 * @method string getCurrentSubVersion() 获取<p>当前内核版本。</p>
 * @method void setCurrentSubVersion(string $CurrentSubVersion) 设置<p>当前内核版本。</p>
 * @method string getTargetSubVersion() 获取<p>可供升级的内核版本。</p>
 * @method void setTargetSubVersion(string $TargetSubVersion) 设置<p>可供升级的内核版本。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBFeaturesResponse extends AbstractModel
{
    /**
     * @var boolean <p>是否支持数据库审计功能。</p>
     */
    public $IsSupportAudit;

    /**
     * @var boolean <p>开启审计是否需要升级内核版本。</p>
     */
    public $AuditNeedUpgrade;

    /**
     * @var boolean <p>是否支持数据库加密功能。</p>
     */
    public $IsSupportEncryption;

    /**
     * @var boolean <p>开启加密是否需要升级内核版本。</p>
     */
    public $EncryptionNeedUpgrade;

    /**
     * @var boolean <p>是否为异地只读实例。</p>
     */
    public $IsRemoteRo;

    /**
     * @var string <p>主实例所在地域。<br>说明：此参数可能返回空值，您可忽略此出参返回值。如需获取实例所在地域详情，您可调用 <a href="https://cloud.tencent.com/document/product/236/15872">查询实例列表</a> 接口查询。</p>
     */
    public $MasterRegion;

    /**
     * @var boolean <p>是否支持小版本升级。</p>
     */
    public $IsSupportUpdateSubVersion;

    /**
     * @var string <p>当前内核版本。</p>
     */
    public $CurrentSubVersion;

    /**
     * @var string <p>可供升级的内核版本。</p>
     */
    public $TargetSubVersion;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $IsSupportAudit <p>是否支持数据库审计功能。</p>
     * @param boolean $AuditNeedUpgrade <p>开启审计是否需要升级内核版本。</p>
     * @param boolean $IsSupportEncryption <p>是否支持数据库加密功能。</p>
     * @param boolean $EncryptionNeedUpgrade <p>开启加密是否需要升级内核版本。</p>
     * @param boolean $IsRemoteRo <p>是否为异地只读实例。</p>
     * @param string $MasterRegion <p>主实例所在地域。<br>说明：此参数可能返回空值，您可忽略此出参返回值。如需获取实例所在地域详情，您可调用 <a href="https://cloud.tencent.com/document/product/236/15872">查询实例列表</a> 接口查询。</p>
     * @param boolean $IsSupportUpdateSubVersion <p>是否支持小版本升级。</p>
     * @param string $CurrentSubVersion <p>当前内核版本。</p>
     * @param string $TargetSubVersion <p>可供升级的内核版本。</p>
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
