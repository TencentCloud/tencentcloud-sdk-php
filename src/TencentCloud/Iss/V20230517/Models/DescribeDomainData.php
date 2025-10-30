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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询域名详情数据
 *
 * @method string getId() 获取域名ID
 * @method void setId(string $Id) 设置域名ID
 * @method string getPlayDomain() 获取播放域名
 * @method void setPlayDomain(string $PlayDomain) 设置播放域名
 * @method string getInternalDomain() 获取CNAME 记录值
 * @method void setInternalDomain(string $InternalDomain) 设置CNAME 记录值
 * @method integer getHaveCert() 获取是否上传证书（0：否，1：是）
 * @method void setHaveCert(integer $HaveCert) 设置是否上传证书（0：否，1：是）
 * @method string getClusterId() 获取服务节点 ID
 * @method void setClusterId(string $ClusterId) 设置服务节点 ID
 * @method string getClusterName() 获取服务节点名称
 * @method void setClusterName(string $ClusterName) 设置服务节点名称
 * @method integer getAppId() 获取用户ID
 * @method void setAppId(integer $AppId) 设置用户ID
 * @method string getCertId() 获取证书ID
 * @method void setCertId(string $CertId) 设置证书ID
 * @method integer getDomainType() 获取域名类型 0:拉流域名 1:推流域名
 * @method void setDomainType(integer $DomainType) 设置域名类型 0:拉流域名 1:推流域名
 */
class DescribeDomainData extends AbstractModel
{
    /**
     * @var string 域名ID
     */
    public $Id;

    /**
     * @var string 播放域名
     */
    public $PlayDomain;

    /**
     * @var string CNAME 记录值
     */
    public $InternalDomain;

    /**
     * @var integer 是否上传证书（0：否，1：是）
     */
    public $HaveCert;

    /**
     * @var string 服务节点 ID
     */
    public $ClusterId;

    /**
     * @var string 服务节点名称
     */
    public $ClusterName;

    /**
     * @var integer 用户ID
     */
    public $AppId;

    /**
     * @var string 证书ID
     */
    public $CertId;

    /**
     * @var integer 域名类型 0:拉流域名 1:推流域名
     */
    public $DomainType;

    /**
     * @param string $Id 域名ID
     * @param string $PlayDomain 播放域名
     * @param string $InternalDomain CNAME 记录值
     * @param integer $HaveCert 是否上传证书（0：否，1：是）
     * @param string $ClusterId 服务节点 ID
     * @param string $ClusterName 服务节点名称
     * @param integer $AppId 用户ID
     * @param string $CertId 证书ID
     * @param integer $DomainType 域名类型 0:拉流域名 1:推流域名
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("PlayDomain",$param) and $param["PlayDomain"] !== null) {
            $this->PlayDomain = $param["PlayDomain"];
        }

        if (array_key_exists("InternalDomain",$param) and $param["InternalDomain"] !== null) {
            $this->InternalDomain = $param["InternalDomain"];
        }

        if (array_key_exists("HaveCert",$param) and $param["HaveCert"] !== null) {
            $this->HaveCert = $param["HaveCert"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("DomainType",$param) and $param["DomainType"] !== null) {
            $this->DomainType = $param["DomainType"];
        }
    }
}
