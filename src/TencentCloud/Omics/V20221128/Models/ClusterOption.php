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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 计算集群配置。
 *
 * @method string getZone() 获取计算集群可用区。
 * @method void setZone(string $Zone) 设置计算集群可用区。
 * @method string getType() 获取计算集群类型，取值范围：
- KUBERNETES
 * @method void setType(string $Type) 设置计算集群类型，取值范围：
- KUBERNETES
 * @method string getServiceCidr() 获取计算集群Service CIDR，不能与VPC网段重合。
 * @method void setServiceCidr(string $ServiceCidr) 设置计算集群Service CIDR，不能与VPC网段重合。
 * @method ResourceQuota getResourceQuota() 获取资源配额。
 * @method void setResourceQuota(ResourceQuota $ResourceQuota) 设置资源配额。
 * @method LimitRange getLimitRange() 获取限制范围。
 * @method void setLimitRange(LimitRange $LimitRange) 设置限制范围。
 * @method string getSystemNodeInstanceType() 获取系统节点池实例规格。
 * @method void setSystemNodeInstanceType(string $SystemNodeInstanceType) 设置系统节点池实例规格。
 * @method integer getSystemNodeCount() 获取系统节点池实例数量。
 * @method void setSystemNodeCount(integer $SystemNodeCount) 设置系统节点池实例数量。
 * @method boolean getAutoUpgradeClusterLevel() 获取纳管环境自动升配
 * @method void setAutoUpgradeClusterLevel(boolean $AutoUpgradeClusterLevel) 设置纳管环境自动升配
 */
class ClusterOption extends AbstractModel
{
    /**
     * @var string 计算集群可用区。
     */
    public $Zone;

    /**
     * @var string 计算集群类型，取值范围：
- KUBERNETES
     */
    public $Type;

    /**
     * @var string 计算集群Service CIDR，不能与VPC网段重合。
     */
    public $ServiceCidr;

    /**
     * @var ResourceQuota 资源配额。
     */
    public $ResourceQuota;

    /**
     * @var LimitRange 限制范围。
     */
    public $LimitRange;

    /**
     * @var string 系统节点池实例规格。
     */
    public $SystemNodeInstanceType;

    /**
     * @var integer 系统节点池实例数量。
     */
    public $SystemNodeCount;

    /**
     * @var boolean 纳管环境自动升配
     */
    public $AutoUpgradeClusterLevel;

    /**
     * @param string $Zone 计算集群可用区。
     * @param string $Type 计算集群类型，取值范围：
- KUBERNETES
     * @param string $ServiceCidr 计算集群Service CIDR，不能与VPC网段重合。
     * @param ResourceQuota $ResourceQuota 资源配额。
     * @param LimitRange $LimitRange 限制范围。
     * @param string $SystemNodeInstanceType 系统节点池实例规格。
     * @param integer $SystemNodeCount 系统节点池实例数量。
     * @param boolean $AutoUpgradeClusterLevel 纳管环境自动升配
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ServiceCidr",$param) and $param["ServiceCidr"] !== null) {
            $this->ServiceCidr = $param["ServiceCidr"];
        }

        if (array_key_exists("ResourceQuota",$param) and $param["ResourceQuota"] !== null) {
            $this->ResourceQuota = new ResourceQuota();
            $this->ResourceQuota->deserialize($param["ResourceQuota"]);
        }

        if (array_key_exists("LimitRange",$param) and $param["LimitRange"] !== null) {
            $this->LimitRange = new LimitRange();
            $this->LimitRange->deserialize($param["LimitRange"]);
        }

        if (array_key_exists("SystemNodeInstanceType",$param) and $param["SystemNodeInstanceType"] !== null) {
            $this->SystemNodeInstanceType = $param["SystemNodeInstanceType"];
        }

        if (array_key_exists("SystemNodeCount",$param) and $param["SystemNodeCount"] !== null) {
            $this->SystemNodeCount = $param["SystemNodeCount"];
        }

        if (array_key_exists("AutoUpgradeClusterLevel",$param) and $param["AutoUpgradeClusterLevel"] !== null) {
            $this->AutoUpgradeClusterLevel = $param["AutoUpgradeClusterLevel"];
        }
    }
}
