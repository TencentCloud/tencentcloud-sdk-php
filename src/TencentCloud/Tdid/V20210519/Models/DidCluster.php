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
 * did区块链网络信息
 *
 * @method integer getChainId() 获取链ID
 * @method void setChainId(integer $ChainId) 设置链ID
 * @method string getChainName() 获取链名称
 * @method void setChainName(string $ChainName) 设置链名称
 * @method integer getAgencyCount() 获取组织数量
 * @method void setAgencyCount(integer $AgencyCount) 设置组织数量
 * @method integer getConsortiumId() 获取联盟ID
 * @method void setConsortiumId(integer $ConsortiumId) 设置联盟ID
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getExpireTime() 获取过期时间
 * @method void setExpireTime(string $ExpireTime) 设置过期时间
 * @method integer getChainStatus() 获取网络状态
 * @method void setChainStatus(integer $ChainStatus) 设置网络状态
 * @method string getResourceId() 获取资源ID
 * @method void setResourceId(string $ResourceId) 设置资源ID
 * @method string getClusterId() 获取网络ID
 * @method void setClusterId(string $ClusterId) 设置网络ID
 * @method string getConsortiumName() 获取联盟名称
 * @method void setConsortiumName(string $ConsortiumName) 设置联盟名称
 * @method integer getAgencyId() 获取组织ID
 * @method void setAgencyId(integer $AgencyId) 设置组织ID
 * @method integer getAutoRenewFlag() 获取自动续费
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费
 * @method integer getTotalNetworkNode() 获取网络节点总数
 * @method void setTotalNetworkNode(integer $TotalNetworkNode) 设置网络节点总数
 * @method integer getTotalCreateNode() 获取本机构节点数
 * @method void setTotalCreateNode(integer $TotalCreateNode) 设置本机构节点数
 * @method integer getTotalGroups() 获取总群组数
 * @method void setTotalGroups(integer $TotalGroups) 设置总群组数
 * @method integer getDidCount() 获取DID总数
 * @method void setDidCount(integer $DidCount) 设置DID总数
 */
class DidCluster extends AbstractModel
{
    /**
     * @var integer 链ID
     */
    public $ChainId;

    /**
     * @var string 链名称
     */
    public $ChainName;

    /**
     * @var integer 组织数量
     */
    public $AgencyCount;

    /**
     * @var integer 联盟ID
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
     * @var string 资源ID
     */
    public $ResourceId;

    /**
     * @var string 网络ID
     */
    public $ClusterId;

    /**
     * @var string 联盟名称
     */
    public $ConsortiumName;

    /**
     * @var integer 组织ID
     */
    public $AgencyId;

    /**
     * @var integer 自动续费
     */
    public $AutoRenewFlag;

    /**
     * @var integer 网络节点总数
     */
    public $TotalNetworkNode;

    /**
     * @var integer 本机构节点数
     */
    public $TotalCreateNode;

    /**
     * @var integer 总群组数
     */
    public $TotalGroups;

    /**
     * @var integer DID总数
     */
    public $DidCount;

    /**
     * @param integer $ChainId 链ID
     * @param string $ChainName 链名称
     * @param integer $AgencyCount 组织数量
     * @param integer $ConsortiumId 联盟ID
     * @param string $CreateTime 创建时间
     * @param string $ExpireTime 过期时间
     * @param integer $ChainStatus 网络状态
     * @param string $ResourceId 资源ID
     * @param string $ClusterId 网络ID
     * @param string $ConsortiumName 联盟名称
     * @param integer $AgencyId 组织ID
     * @param integer $AutoRenewFlag 自动续费
     * @param integer $TotalNetworkNode 网络节点总数
     * @param integer $TotalCreateNode 本机构节点数
     * @param integer $TotalGroups 总群组数
     * @param integer $DidCount DID总数
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

        if (array_key_exists("DidCount",$param) and $param["DidCount"] !== null) {
            $this->DidCount = $param["DidCount"];
        }
    }
}
