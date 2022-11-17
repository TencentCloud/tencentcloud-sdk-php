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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * bcos网络信息
 *
 * @method integer getChainId() 获取网络索引id
 * @method void setChainId(integer $ChainId) 设置网络索引id
 * @method string getChainName() 获取网络名称
 * @method void setChainName(string $ChainName) 设置网络名称
 * @method integer getAgencyCount() 获取机构数量
 * @method void setAgencyCount(integer $AgencyCount) 设置机构数量
 * @method integer getConsortiumId() 获取联盟id
 * @method void setConsortiumId(integer $ConsortiumId) 设置联盟id
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getExpireTime() 获取过期时间
 * @method void setExpireTime(string $ExpireTime) 设置过期时间
 * @method integer getChainStatus() 获取网络状态
 * @method void setChainStatus(integer $ChainStatus) 设置网络状态
 * @method string getResourceId() 获取资源 id
 * @method void setResourceId(string $ResourceId) 设置资源 id
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method string getConsortiumName() 获取组织名称
 * @method void setConsortiumName(string $ConsortiumName) 设置组织名称
 * @method integer getAgencyId() 获取机构id
 * @method void setAgencyId(integer $AgencyId) 设置机构id
 * @method integer getAutoRenewFlag() 获取续费状态
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置续费状态
 * @method integer getTotalNetworkNode() 获取网络模式
 * @method void setTotalNetworkNode(integer $TotalNetworkNode) 设置网络模式
 * @method integer getTotalCreateNode() 获取创建节点数
 * @method void setTotalCreateNode(integer $TotalCreateNode) 设置创建节点数
 * @method integer getTotalGroups() 获取总群组数量
 * @method void setTotalGroups(integer $TotalGroups) 设置总群组数量
 */
class BcosClusterItem extends AbstractModel
{
    /**
     * @var integer 网络索引id
     */
    public $ChainId;

    /**
     * @var string 网络名称
     */
    public $ChainName;

    /**
     * @var integer 机构数量
     */
    public $AgencyCount;

    /**
     * @var integer 联盟id
     */
    public $ConsortiumId;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 过期时间
     */
    public $ExpireTime;

    /**
     * @var integer 网络状态
     */
    public $ChainStatus;

    /**
     * @var string 资源 id
     */
    public $ResourceId;

    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var string 组织名称
     */
    public $ConsortiumName;

    /**
     * @var integer 机构id
     */
    public $AgencyId;

    /**
     * @var integer 续费状态
     */
    public $AutoRenewFlag;

    /**
     * @var integer 网络模式
     */
    public $TotalNetworkNode;

    /**
     * @var integer 创建节点数
     */
    public $TotalCreateNode;

    /**
     * @var integer 总群组数量
     */
    public $TotalGroups;

    /**
     * @param integer $ChainId 网络索引id
     * @param string $ChainName 网络名称
     * @param integer $AgencyCount 机构数量
     * @param integer $ConsortiumId 联盟id
     * @param string $CreateTime 创建时间
     * @param string $ExpireTime 过期时间
     * @param integer $ChainStatus 网络状态
     * @param string $ResourceId 资源 id
     * @param string $ClusterId 集群id
     * @param string $ConsortiumName 组织名称
     * @param integer $AgencyId 机构id
     * @param integer $AutoRenewFlag 续费状态
     * @param integer $TotalNetworkNode 网络模式
     * @param integer $TotalCreateNode 创建节点数
     * @param integer $TotalGroups 总群组数量
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
        if (array_key_exists("ChainId",$param) and $param["ChainId"] !== null) {
            $this->ChainId = $param["ChainId"];
        }

        if (array_key_exists("ChainName",$param) and $param["ChainName"] !== null) {
            $this->ChainName = $param["ChainName"];
        }

        if (array_key_exists("AgencyCount",$param) and $param["AgencyCount"] !== null) {
            $this->AgencyCount = $param["AgencyCount"];
        }

        if (array_key_exists("ConsortiumId",$param) and $param["ConsortiumId"] !== null) {
            $this->ConsortiumId = $param["ConsortiumId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ChainStatus",$param) and $param["ChainStatus"] !== null) {
            $this->ChainStatus = $param["ChainStatus"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ConsortiumName",$param) and $param["ConsortiumName"] !== null) {
            $this->ConsortiumName = $param["ConsortiumName"];
        }

        if (array_key_exists("AgencyId",$param) and $param["AgencyId"] !== null) {
            $this->AgencyId = $param["AgencyId"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("TotalNetworkNode",$param) and $param["TotalNetworkNode"] !== null) {
            $this->TotalNetworkNode = $param["TotalNetworkNode"];
        }

        if (array_key_exists("TotalCreateNode",$param) and $param["TotalCreateNode"] !== null) {
            $this->TotalCreateNode = $param["TotalCreateNode"];
        }

        if (array_key_exists("TotalGroups",$param) and $param["TotalGroups"] !== null) {
            $this->TotalGroups = $param["TotalGroups"];
        }
    }
}
