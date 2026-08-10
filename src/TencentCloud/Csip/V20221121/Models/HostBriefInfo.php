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
 * 主机简要信息
 *
 * @method string getInstanceID() 获取云主机实例 ID
参数格式：形如 ins-instance
 * @method void setInstanceID(string $InstanceID) 设置云主机实例 ID
参数格式：形如 ins-instance
 * @method string getQUUID() 获取主机 QUUID（CWP 内部唯一标识）
 * @method void setQUUID(string $QUUID) 设置主机 QUUID（CWP 内部唯一标识）
 * @method string getUUID() 获取主机 UUID
 * @method void setUUID(string $UUID) 设置主机 UUID
 * @method string getPublicIP() 获取公网 IP 地址
 * @method void setPublicIP(string $PublicIP) 设置公网 IP 地址
 * @method string getPrivateIP() 获取内网 IP 地址
 * @method void setPrivateIP(string $PrivateIP) 设置内网 IP 地址
 * @method string getAgentStatus() 获取CWP Agent 状态
枚举值：
ONLINE：在线
OFFLINE：离线
UNINSTALLED：未安装
 * @method void setAgentStatus(string $AgentStatus) 设置CWP Agent 状态
枚举值：
ONLINE：在线
OFFLINE：离线
UNINSTALLED：未安装
 * @method string getInstanceStatus() 获取云主机实例状态
枚举值：
RUNNING：运行中
STOPPED：已停止
UNKNOWN：未知
 * @method void setInstanceStatus(string $InstanceStatus) 设置云主机实例状态
枚举值：
RUNNING：运行中
STOPPED：已停止
UNKNOWN：未知
 * @method string getName() 获取主机名称
 * @method void setName(string $Name) 设置主机名称
 * @method AccountBriefInfo getAccount() 获取所属账号信息
 * @method void setAccount(AccountBriefInfo $Account) 设置所属账号信息
 * @method array getTagItem() 获取资产标签列表（CSIP 内部资产标签）
 * @method void setTagItem(array $TagItem) 设置资产标签列表（CSIP 内部资产标签）
 * @method array getCloudTag() 获取云上标签列表（云资产侧 Tag）
 * @method void setCloudTag(array $CloudTag) 设置云上标签列表（云资产侧 Tag）
 */
class HostBriefInfo extends AbstractModel
{
    /**
     * @var string 云主机实例 ID
参数格式：形如 ins-instance
     */
    public $InstanceID;

    /**
     * @var string 主机 QUUID（CWP 内部唯一标识）
     */
    public $QUUID;

    /**
     * @var string 主机 UUID
     */
    public $UUID;

    /**
     * @var string 公网 IP 地址
     */
    public $PublicIP;

    /**
     * @var string 内网 IP 地址
     */
    public $PrivateIP;

    /**
     * @var string CWP Agent 状态
枚举值：
ONLINE：在线
OFFLINE：离线
UNINSTALLED：未安装
     */
    public $AgentStatus;

    /**
     * @var string 云主机实例状态
枚举值：
RUNNING：运行中
STOPPED：已停止
UNKNOWN：未知
     */
    public $InstanceStatus;

    /**
     * @var string 主机名称
     */
    public $Name;

    /**
     * @var AccountBriefInfo 所属账号信息
     */
    public $Account;

    /**
     * @var array 资产标签列表（CSIP 内部资产标签）
     */
    public $TagItem;

    /**
     * @var array 云上标签列表（云资产侧 Tag）
     */
    public $CloudTag;

    /**
     * @param string $InstanceID 云主机实例 ID
参数格式：形如 ins-instance
     * @param string $QUUID 主机 QUUID（CWP 内部唯一标识）
     * @param string $UUID 主机 UUID
     * @param string $PublicIP 公网 IP 地址
     * @param string $PrivateIP 内网 IP 地址
     * @param string $AgentStatus CWP Agent 状态
枚举值：
ONLINE：在线
OFFLINE：离线
UNINSTALLED：未安装
     * @param string $InstanceStatus 云主机实例状态
枚举值：
RUNNING：运行中
STOPPED：已停止
UNKNOWN：未知
     * @param string $Name 主机名称
     * @param AccountBriefInfo $Account 所属账号信息
     * @param array $TagItem 资产标签列表（CSIP 内部资产标签）
     * @param array $CloudTag 云上标签列表（云资产侧 Tag）
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("QUUID",$param) and $param["QUUID"] !== null) {
            $this->QUUID = $param["QUUID"];
        }

        if (array_key_exists("UUID",$param) and $param["UUID"] !== null) {
            $this->UUID = $param["UUID"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("PrivateIP",$param) and $param["PrivateIP"] !== null) {
            $this->PrivateIP = $param["PrivateIP"];
        }

        if (array_key_exists("AgentStatus",$param) and $param["AgentStatus"] !== null) {
            $this->AgentStatus = $param["AgentStatus"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = new AccountBriefInfo();
            $this->Account->deserialize($param["Account"]);
        }

        if (array_key_exists("TagItem",$param) and $param["TagItem"] !== null) {
            $this->TagItem = [];
            foreach ($param["TagItem"] as $key => $value){
                $obj = new MiniTagItem();
                $obj->deserialize($value);
                array_push($this->TagItem, $obj);
            }
        }

        if (array_key_exists("CloudTag",$param) and $param["CloudTag"] !== null) {
            $this->CloudTag = [];
            foreach ($param["CloudTag"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->CloudTag, $obj);
            }
        }
    }
}
