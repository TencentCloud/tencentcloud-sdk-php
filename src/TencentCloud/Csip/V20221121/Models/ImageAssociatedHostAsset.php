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
 * 镜像关联主机资产
 *
 * @method string getUuid() 获取<p>主机uuid</p>
 * @method void setUuid(string $Uuid) 设置<p>主机uuid</p>
 * @method string getQUuid() 获取<p>主机quuid</p>
 * @method void setQUuid(string $QUuid) 设置<p>主机quuid</p>
 * @method string getHostName() 获取<p>主机名</p>
 * @method void setHostName(string $HostName) 设置<p>主机名</p>
 * @method string getOwnerAccountName() 获取<p>主机所属账号名</p>
 * @method void setOwnerAccountName(string $OwnerAccountName) 设置<p>主机所属账号名</p>
 * @method integer getOwnerAppId() 获取<p>主机所属账号appid</p>
 * @method void setOwnerAppId(integer $OwnerAppId) 设置<p>主机所属账号appid</p>
 * @method string getOwnerUin() 获取<p>主机所属账号uin</p>
 * @method void setOwnerUin(string $OwnerUin) 设置<p>主机所属账号uin</p>
 * @method string getInnerIp() 获取<p>主机内网地址</p>
 * @method void setInnerIp(string $InnerIp) 设置<p>主机内网地址</p>
 * @method string getPublicIp() 获取<p>主机公网地址</p>
 * @method void setPublicIp(string $PublicIp) 设置<p>主机公网地址</p>
 * @method string getAgentStatus() 获取<p>主机上agent状态</p><p>枚举值：</p><ul><li>ONLINE： 在线</li><li>OFFLINE： 离线</li><li>UNINSTALL： 已卸载</li></ul>
 * @method void setAgentStatus(string $AgentStatus) 设置<p>主机上agent状态</p><p>枚举值：</p><ul><li>ONLINE： 在线</li><li>OFFLINE： 离线</li><li>UNINSTALL： 已卸载</li></ul>
 * @method string getInstanceID() 获取<p>主机实例id</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>主机实例id</p>
 * @method string getInstanceState() 获取<p>主机状态</p>
 * @method void setInstanceState(string $InstanceState) 设置<p>主机状态</p>
 */
class ImageAssociatedHostAsset extends AbstractModel
{
    /**
     * @var string <p>主机uuid</p>
     */
    public $Uuid;

    /**
     * @var string <p>主机quuid</p>
     */
    public $QUuid;

    /**
     * @var string <p>主机名</p>
     */
    public $HostName;

    /**
     * @var string <p>主机所属账号名</p>
     */
    public $OwnerAccountName;

    /**
     * @var integer <p>主机所属账号appid</p>
     */
    public $OwnerAppId;

    /**
     * @var string <p>主机所属账号uin</p>
     */
    public $OwnerUin;

    /**
     * @var string <p>主机内网地址</p>
     */
    public $InnerIp;

    /**
     * @var string <p>主机公网地址</p>
     */
    public $PublicIp;

    /**
     * @var string <p>主机上agent状态</p><p>枚举值：</p><ul><li>ONLINE： 在线</li><li>OFFLINE： 离线</li><li>UNINSTALL： 已卸载</li></ul>
     */
    public $AgentStatus;

    /**
     * @var string <p>主机实例id</p>
     */
    public $InstanceID;

    /**
     * @var string <p>主机状态</p>
     */
    public $InstanceState;

    /**
     * @param string $Uuid <p>主机uuid</p>
     * @param string $QUuid <p>主机quuid</p>
     * @param string $HostName <p>主机名</p>
     * @param string $OwnerAccountName <p>主机所属账号名</p>
     * @param integer $OwnerAppId <p>主机所属账号appid</p>
     * @param string $OwnerUin <p>主机所属账号uin</p>
     * @param string $InnerIp <p>主机内网地址</p>
     * @param string $PublicIp <p>主机公网地址</p>
     * @param string $AgentStatus <p>主机上agent状态</p><p>枚举值：</p><ul><li>ONLINE： 在线</li><li>OFFLINE： 离线</li><li>UNINSTALL： 已卸载</li></ul>
     * @param string $InstanceID <p>主机实例id</p>
     * @param string $InstanceState <p>主机状态</p>
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
        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("QUuid",$param) and $param["QUuid"] !== null) {
            $this->QUuid = $param["QUuid"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("OwnerAccountName",$param) and $param["OwnerAccountName"] !== null) {
            $this->OwnerAccountName = $param["OwnerAccountName"];
        }

        if (array_key_exists("OwnerAppId",$param) and $param["OwnerAppId"] !== null) {
            $this->OwnerAppId = $param["OwnerAppId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("InnerIp",$param) and $param["InnerIp"] !== null) {
            $this->InnerIp = $param["InnerIp"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("AgentStatus",$param) and $param["AgentStatus"] !== null) {
            $this->AgentStatus = $param["AgentStatus"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }
    }
}
