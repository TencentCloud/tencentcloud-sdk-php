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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 加速域名
 *
 * @method OriginDetail getOriginDetail() 获取源站信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginDetail(OriginDetail $OriginDetail) 设置源站信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedOn() 获取创建时间。
 * @method void setCreatedOn(string $CreatedOn) 设置创建时间。
 * @method string getDomainName() 获取加速域名名称。
 * @method void setDomainName(string $DomainName) 设置加速域名名称。
 * @method string getModifiedOn() 获取修改时间。
 * @method void setModifiedOn(string $ModifiedOn) 设置修改时间。
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getDomainStatus() 获取加速域名状态，取值有：
<li>online：已生效；</li>
<li>process：部署中；</li>
<li>offline：已停用；</li>
<li>forbidden：已封禁；</li>
<li>init：未生效，待激活站点；</li>
 * @method void setDomainStatus(string $DomainStatus) 设置加速域名状态，取值有：
<li>online：已生效；</li>
<li>process：部署中；</li>
<li>offline：已停用；</li>
<li>forbidden：已封禁；</li>
<li>init：未生效，待激活站点；</li>
 * @method string getCname() 获取CNAME 地址。
 * @method void setCname(string $Cname) 设置CNAME 地址。
 * @method string getIdentificationStatus() 获取加速域名归属权验证状态，取值有： <li>pending：待验证；</li> <li>finished：已完成验证。</li>	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdentificationStatus(string $IdentificationStatus) 设置加速域名归属权验证状态，取值有： <li>pending：待验证；</li> <li>finished：已完成验证。</li>	
注意：此字段可能返回 null，表示取不到有效值。
 */
class AccelerationDomain extends AbstractModel
{
    /**
     * @var OriginDetail 源站信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginDetail;

    /**
     * @var string 创建时间。
     */
    public $CreatedOn;

    /**
     * @var string 加速域名名称。
     */
    public $DomainName;

    /**
     * @var string 修改时间。
     */
    public $ModifiedOn;

    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 加速域名状态，取值有：
<li>online：已生效；</li>
<li>process：部署中；</li>
<li>offline：已停用；</li>
<li>forbidden：已封禁；</li>
<li>init：未生效，待激活站点；</li>
     */
    public $DomainStatus;

    /**
     * @var string CNAME 地址。
     */
    public $Cname;

    /**
     * @var string 加速域名归属权验证状态，取值有： <li>pending：待验证；</li> <li>finished：已完成验证。</li>	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdentificationStatus;

    /**
     * @param OriginDetail $OriginDetail 源站信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedOn 创建时间。
     * @param string $DomainName 加速域名名称。
     * @param string $ModifiedOn 修改时间。
     * @param string $ZoneId 站点 ID。
     * @param string $DomainStatus 加速域名状态，取值有：
<li>online：已生效；</li>
<li>process：部署中；</li>
<li>offline：已停用；</li>
<li>forbidden：已封禁；</li>
<li>init：未生效，待激活站点；</li>
     * @param string $Cname CNAME 地址。
     * @param string $IdentificationStatus 加速域名归属权验证状态，取值有： <li>pending：待验证；</li> <li>finished：已完成验证。</li>	
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
        if (array_key_exists("OriginDetail",$param) and $param["OriginDetail"] !== null) {
            $this->OriginDetail = new OriginDetail();
            $this->OriginDetail->deserialize($param["OriginDetail"]);
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("DomainStatus",$param) and $param["DomainStatus"] !== null) {
            $this->DomainStatus = $param["DomainStatus"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("IdentificationStatus",$param) and $param["IdentificationStatus"] !== null) {
            $this->IdentificationStatus = $param["IdentificationStatus"];
        }
    }
}
