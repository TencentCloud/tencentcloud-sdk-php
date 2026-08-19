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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群节点列表项
 *
 * @method string getAssetId() 获取<p>资产 ID</p>
 * @method void setAssetId(string $AssetId) 设置<p>资产 ID</p>
 * @method integer getAppID() 获取<p>appid</p>
 * @method void setAppID(integer $AppID) 设置<p>appid</p>
 * @method string getNodeId() 获取<p>节点id</p>
 * @method void setNodeId(string $NodeId) 设置<p>节点id</p>
 * @method string getNodeName() 获取<p>节点名称</p>
 * @method void setNodeName(string $NodeName) 设置<p>节点名称</p>
 * @method string getPublicIP() 获取<p>公网ip</p>
 * @method void setPublicIP(string $PublicIP) 设置<p>公网ip</p>
 * @method string getInternalIP() 获取<p>内网ip</p>
 * @method void setInternalIP(string $InternalIP) 设置<p>内网ip</p>
 * @method string getNodeType() 获取<p>节点类型</p>
 * @method void setNodeType(string $NodeType) 设置<p>节点类型</p>
 * @method integer getCoresCount() 获取<p>核数</p>
 * @method void setCoresCount(integer $CoresCount) 设置<p>核数</p>
 * @method array getTags() 获取<p>标签</p>
 * @method void setTags(array $Tags) 设置<p>标签</p>
 * @method string getRunStatus() 获取<p>运行状态</p>
 * @method void setRunStatus(string $RunStatus) 设置<p>运行状态</p>
 * @method boolean getIsNew() 获取<p>是否为新资产</p>
 * @method void setIsNew(boolean $IsNew) 设置<p>是否为新资产</p>
 * @method string getUniqueID() 获取<p>节点唯一 ID</p>
 * @method void setUniqueID(string $UniqueID) 设置<p>节点唯一 ID</p>
 * @method string getClientStatus() 获取<p>客户端状态</p><p>枚举值：</p><ul><li>ONLINE： 在线</li><li>OFFLINE： 离线</li><li>UNINSTALL： 未安装</li></ul>
 * @method void setClientStatus(string $ClientStatus) 设置<p>客户端状态</p><p>枚举值：</p><ul><li>ONLINE： 在线</li><li>OFFLINE： 离线</li><li>UNINSTALL： 未安装</li></ul>
 * @method string getInstanceId() 获取<p>节点实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>节点实例ID</p>
 */
class ClusterNodeListItem extends AbstractModel
{
    /**
     * @var string <p>资产 ID</p>
     * @deprecated
     */
    public $AssetId;

    /**
     * @var integer <p>appid</p>
     */
    public $AppID;

    /**
     * @var string <p>节点id</p>
     */
    public $NodeId;

    /**
     * @var string <p>节点名称</p>
     */
    public $NodeName;

    /**
     * @var string <p>公网ip</p>
     */
    public $PublicIP;

    /**
     * @var string <p>内网ip</p>
     */
    public $InternalIP;

    /**
     * @var string <p>节点类型</p>
     */
    public $NodeType;

    /**
     * @var integer <p>核数</p>
     */
    public $CoresCount;

    /**
     * @var array <p>标签</p>
     */
    public $Tags;

    /**
     * @var string <p>运行状态</p>
     */
    public $RunStatus;

    /**
     * @var boolean <p>是否为新资产</p>
     */
    public $IsNew;

    /**
     * @var string <p>节点唯一 ID</p>
     */
    public $UniqueID;

    /**
     * @var string <p>客户端状态</p><p>枚举值：</p><ul><li>ONLINE： 在线</li><li>OFFLINE： 离线</li><li>UNINSTALL： 未安装</li></ul>
     */
    public $ClientStatus;

    /**
     * @var string <p>节点实例ID</p>
     */
    public $InstanceId;

    /**
     * @param string $AssetId <p>资产 ID</p>
     * @param integer $AppID <p>appid</p>
     * @param string $NodeId <p>节点id</p>
     * @param string $NodeName <p>节点名称</p>
     * @param string $PublicIP <p>公网ip</p>
     * @param string $InternalIP <p>内网ip</p>
     * @param string $NodeType <p>节点类型</p>
     * @param integer $CoresCount <p>核数</p>
     * @param array $Tags <p>标签</p>
     * @param string $RunStatus <p>运行状态</p>
     * @param boolean $IsNew <p>是否为新资产</p>
     * @param string $UniqueID <p>节点唯一 ID</p>
     * @param string $ClientStatus <p>客户端状态</p><p>枚举值：</p><ul><li>ONLINE： 在线</li><li>OFFLINE： 离线</li><li>UNINSTALL： 未安装</li></ul>
     * @param string $InstanceId <p>节点实例ID</p>
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("InternalIP",$param) and $param["InternalIP"] !== null) {
            $this->InternalIP = $param["InternalIP"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("CoresCount",$param) and $param["CoresCount"] !== null) {
            $this->CoresCount = $param["CoresCount"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("RunStatus",$param) and $param["RunStatus"] !== null) {
            $this->RunStatus = $param["RunStatus"];
        }

        if (array_key_exists("IsNew",$param) and $param["IsNew"] !== null) {
            $this->IsNew = $param["IsNew"];
        }

        if (array_key_exists("UniqueID",$param) and $param["UniqueID"] !== null) {
            $this->UniqueID = $param["UniqueID"];
        }

        if (array_key_exists("ClientStatus",$param) and $param["ClientStatus"] !== null) {
            $this->ClientStatus = $param["ClientStatus"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
