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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 边缘节点信息
 *
 * @method integer getId() 获取自增id，数据库中唯一
 * @method void setId(integer $Id) 设置自增id，数据库中唯一
 * @method string getGroupId() 获取节点分组唯一id
 * @method void setGroupId(string $GroupId) 设置节点分组唯一id
 * @method string getEdgeNodeId() 获取节点id
 * @method void setEdgeNodeId(string $EdgeNodeId) 设置节点id
 * @method string getEdgeNodeName() 获取节点名称
 * @method void setEdgeNodeName(string $EdgeNodeName) 设置节点名称
 * @method boolean getIsActive() 获取是否活跃/连通
 * @method void setIsActive(boolean $IsActive) 设置是否活跃/连通
 * @method string getGroupName() 获取节点分组名称
 * @method void setGroupName(string $GroupName) 设置节点分组名称
 * @method string getIp() 获取节点IP
 * @method void setIp(string $Ip) 设置节点IP
 * @method string getVersion() 获取节点版本
 * @method void setVersion(string $Version) 设置节点版本
 * @method boolean getIsUpgradeEnable() 获取是否支持升级连接器
 * @method void setIsUpgradeEnable(boolean $IsUpgradeEnable) 设置是否支持升级连接器
 * @method integer getUpgradeStatus() 获取升级状态: 0(升级中) , 1(升级失败) 或 2(升级成功)
 * @method void setUpgradeStatus(integer $UpgradeStatus) 设置升级状态: 0(升级中) , 1(升级失败) 或 2(升级成功)
 * @method string getUpgradeDescription() 获取升级状态描述
 * @method void setUpgradeDescription(string $UpgradeDescription) 设置升级状态描述
 * @method string getRuleVersion() 获取规则版本
 * @method void setRuleVersion(string $RuleVersion) 设置规则版本
 */
class DescribeDLPEdgeNodesRspItem extends AbstractModel
{
    /**
     * @var integer 自增id，数据库中唯一
     */
    public $Id;

    /**
     * @var string 节点分组唯一id
     */
    public $GroupId;

    /**
     * @var string 节点id
     */
    public $EdgeNodeId;

    /**
     * @var string 节点名称
     */
    public $EdgeNodeName;

    /**
     * @var boolean 是否活跃/连通
     */
    public $IsActive;

    /**
     * @var string 节点分组名称
     */
    public $GroupName;

    /**
     * @var string 节点IP
     */
    public $Ip;

    /**
     * @var string 节点版本
     */
    public $Version;

    /**
     * @var boolean 是否支持升级连接器
     */
    public $IsUpgradeEnable;

    /**
     * @var integer 升级状态: 0(升级中) , 1(升级失败) 或 2(升级成功)
     */
    public $UpgradeStatus;

    /**
     * @var string 升级状态描述
     */
    public $UpgradeDescription;

    /**
     * @var string 规则版本
     */
    public $RuleVersion;

    /**
     * @param integer $Id 自增id，数据库中唯一
     * @param string $GroupId 节点分组唯一id
     * @param string $EdgeNodeId 节点id
     * @param string $EdgeNodeName 节点名称
     * @param boolean $IsActive 是否活跃/连通
     * @param string $GroupName 节点分组名称
     * @param string $Ip 节点IP
     * @param string $Version 节点版本
     * @param boolean $IsUpgradeEnable 是否支持升级连接器
     * @param integer $UpgradeStatus 升级状态: 0(升级中) , 1(升级失败) 或 2(升级成功)
     * @param string $UpgradeDescription 升级状态描述
     * @param string $RuleVersion 规则版本
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("EdgeNodeId",$param) and $param["EdgeNodeId"] !== null) {
            $this->EdgeNodeId = $param["EdgeNodeId"];
        }

        if (array_key_exists("EdgeNodeName",$param) and $param["EdgeNodeName"] !== null) {
            $this->EdgeNodeName = $param["EdgeNodeName"];
        }

        if (array_key_exists("IsActive",$param) and $param["IsActive"] !== null) {
            $this->IsActive = $param["IsActive"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("IsUpgradeEnable",$param) and $param["IsUpgradeEnable"] !== null) {
            $this->IsUpgradeEnable = $param["IsUpgradeEnable"];
        }

        if (array_key_exists("UpgradeStatus",$param) and $param["UpgradeStatus"] !== null) {
            $this->UpgradeStatus = $param["UpgradeStatus"];
        }

        if (array_key_exists("UpgradeDescription",$param) and $param["UpgradeDescription"] !== null) {
            $this->UpgradeDescription = $param["UpgradeDescription"];
        }

        if (array_key_exists("RuleVersion",$param) and $param["RuleVersion"] !== null) {
            $this->RuleVersion = $param["RuleVersion"];
        }
    }
}
