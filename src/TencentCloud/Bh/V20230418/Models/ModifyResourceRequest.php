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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyResource请求参数结构体
 *
 * @method string getResourceId() 获取需要开通服务的资源ID
 * @method void setResourceId(string $ResourceId) 设置需要开通服务的资源ID
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method string getResourceEdition() 获取实例版本
 * @method void setResourceEdition(string $ResourceEdition) 设置实例版本
 * @method integer getResourceNode() 获取资源节点数
 * @method void setResourceNode(integer $ResourceNode) 设置资源节点数
 * @method integer getAutoRenewFlag() 获取自动续费
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费
 * @method integer getPackageBandwidth() 获取带宽扩展包个数(4M)
 * @method void setPackageBandwidth(integer $PackageBandwidth) 设置带宽扩展包个数(4M)
 * @method integer getPackageNode() 获取授权点数扩展包个数(50点)
 * @method void setPackageNode(integer $PackageNode) 设置授权点数扩展包个数(50点)
 * @method integer getLogDelivery() 获取日志投递
 * @method void setLogDelivery(integer $LogDelivery) 设置日志投递
 */
class ModifyResourceRequest extends AbstractModel
{
    /**
     * @var string 需要开通服务的资源ID
     */
    public $ResourceId;

    /**
     * @var string 状态
     * @deprecated
     */
    public $Status;

    /**
     * @var string 实例版本
     */
    public $ResourceEdition;

    /**
     * @var integer 资源节点数
     */
    public $ResourceNode;

    /**
     * @var integer 自动续费
     */
    public $AutoRenewFlag;

    /**
     * @var integer 带宽扩展包个数(4M)
     */
    public $PackageBandwidth;

    /**
     * @var integer 授权点数扩展包个数(50点)
     */
    public $PackageNode;

    /**
     * @var integer 日志投递
     */
    public $LogDelivery;

    /**
     * @param string $ResourceId 需要开通服务的资源ID
     * @param string $Status 状态
     * @param string $ResourceEdition 实例版本
     * @param integer $ResourceNode 资源节点数
     * @param integer $AutoRenewFlag 自动续费
     * @param integer $PackageBandwidth 带宽扩展包个数(4M)
     * @param integer $PackageNode 授权点数扩展包个数(50点)
     * @param integer $LogDelivery 日志投递
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ResourceEdition",$param) and $param["ResourceEdition"] !== null) {
            $this->ResourceEdition = $param["ResourceEdition"];
        }

        if (array_key_exists("ResourceNode",$param) and $param["ResourceNode"] !== null) {
            $this->ResourceNode = $param["ResourceNode"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("PackageBandwidth",$param) and $param["PackageBandwidth"] !== null) {
            $this->PackageBandwidth = $param["PackageBandwidth"];
        }

        if (array_key_exists("PackageNode",$param) and $param["PackageNode"] !== null) {
            $this->PackageNode = $param["PackageNode"];
        }

        if (array_key_exists("LogDelivery",$param) and $param["LogDelivery"] !== null) {
            $this->LogDelivery = $param["LogDelivery"];
        }
    }
}
