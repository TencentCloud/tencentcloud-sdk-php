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
 * @method string getZone() 获取<p>计算集群可用区。</p>
 * @method void setZone(string $Zone) 设置<p>计算集群可用区。</p>
 * @method string getType() 获取<p>计算集群类型，取值范围：</p><ul><li>KUBERNETES</li></ul>
 * @method void setType(string $Type) 设置<p>计算集群类型，取值范围：</p><ul><li>KUBERNETES</li></ul>
 * @method string getServiceCidr() 获取<p>计算集群Service CIDR，不能与VPC网段重合。</p>
 * @method void setServiceCidr(string $ServiceCidr) 设置<p>计算集群Service CIDR，不能与VPC网段重合。</p>
 * @method ResourceQuota getResourceQuota() 获取<p>资源配额。</p>
 * @method void setResourceQuota(ResourceQuota $ResourceQuota) 设置<p>资源配额。</p>
 * @method LimitRange getLimitRange() 获取<p>限制范围。</p>
 * @method void setLimitRange(LimitRange $LimitRange) 设置<p>限制范围。</p>
 * @method string getSystemNodeInstanceType() 获取<p>系统节点池实例规格。详情参见<a href="https://cloud.tencent.com/document/product/213/11518">实例规格</a>描述</p>
 * @method void setSystemNodeInstanceType(string $SystemNodeInstanceType) 设置<p>系统节点池实例规格。详情参见<a href="https://cloud.tencent.com/document/product/213/11518">实例规格</a>描述</p>
 * @method integer getSystemNodeCount() 获取<p>系统节点池实例数量。</p>
 * @method void setSystemNodeCount(integer $SystemNodeCount) 设置<p>系统节点池实例数量。</p>
 * @method boolean getAutoUpgradeClusterLevel() 获取<p>纳管环境自动升配</p>
 * @method void setAutoUpgradeClusterLevel(boolean $AutoUpgradeClusterLevel) 设置<p>纳管环境自动升配</p>
 */
class ClusterOption extends AbstractModel
{
    /**
     * @var string <p>计算集群可用区。</p>
     */
    public $Zone;

    /**
     * @var string <p>计算集群类型，取值范围：</p><ul><li>KUBERNETES</li></ul>
     */
    public $Type;

    /**
     * @var string <p>计算集群Service CIDR，不能与VPC网段重合。</p>
     */
    public $ServiceCidr;

    /**
     * @var ResourceQuota <p>资源配额。</p>
     */
    public $ResourceQuota;

    /**
     * @var LimitRange <p>限制范围。</p>
     */
    public $LimitRange;

    /**
     * @var string <p>系统节点池实例规格。详情参见<a href="https://cloud.tencent.com/document/product/213/11518">实例规格</a>描述</p>
     */
    public $SystemNodeInstanceType;

    /**
     * @var integer <p>系统节点池实例数量。</p>
     */
    public $SystemNodeCount;

    /**
     * @var boolean <p>纳管环境自动升配</p>
     */
    public $AutoUpgradeClusterLevel;

    /**
     * @param string $Zone <p>计算集群可用区。</p>
     * @param string $Type <p>计算集群类型，取值范围：</p><ul><li>KUBERNETES</li></ul>
     * @param string $ServiceCidr <p>计算集群Service CIDR，不能与VPC网段重合。</p>
     * @param ResourceQuota $ResourceQuota <p>资源配额。</p>
     * @param LimitRange $LimitRange <p>限制范围。</p>
     * @param string $SystemNodeInstanceType <p>系统节点池实例规格。详情参见<a href="https://cloud.tencent.com/document/product/213/11518">实例规格</a>描述</p>
     * @param integer $SystemNodeCount <p>系统节点池实例数量。</p>
     * @param boolean $AutoUpgradeClusterLevel <p>纳管环境自动升配</p>
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
