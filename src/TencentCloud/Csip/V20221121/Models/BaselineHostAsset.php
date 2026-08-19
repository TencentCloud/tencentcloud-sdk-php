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
 * 基线主机资产，承载子任务/风险记录关联的主机详情。
 *
 * @method string getInstanceID() 获取<p>云主机实例 ID，格式形如 ins-instanceid。</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>云主机实例 ID，格式形如 ins-instanceid。</p>
 * @method string getQUUID() 获取<p>CWP（云镜）侧主机唯一标识 QUUID。</p>
 * @method void setQUUID(string $QUUID) 设置<p>CWP（云镜）侧主机唯一标识 QUUID。</p>
 * @method string getUUID() 获取<p>主机 Agent 上报的 UUID。</p>
 * @method void setUUID(string $UUID) 设置<p>主机 Agent 上报的 UUID。</p>
 * @method string getPublicIP() 获取<p>主机公网 IP。</p>
 * @method void setPublicIP(string $PublicIP) 设置<p>主机公网 IP。</p>
 * @method string getPrivateIP() 获取<p>主机内网 IP。</p>
 * @method void setPrivateIP(string $PrivateIP) 设置<p>主机内网 IP。</p>
 * @method string getAgentStatus() 获取<p>CWP Agent 状态。取值：</p><ul><li>ONLINE：在线</li><li>OFFLINE：离线</li><li>UNINSTALLED：未安装</li></ul>
 * @method void setAgentStatus(string $AgentStatus) 设置<p>CWP Agent 状态。取值：</p><ul><li>ONLINE：在线</li><li>OFFLINE：离线</li><li>UNINSTALLED：未安装</li></ul>
 * @method string getInstanceStatus() 获取<p>云主机实例运行状态。取值：</p><ul><li>RUNNING：运行中</li><li>STOPPED：已停止</li><li>UNKNOWN：未知</li></ul>
 * @method void setInstanceStatus(string $InstanceStatus) 设置<p>云主机实例运行状态。取值：</p><ul><li>RUNNING：运行中</li><li>STOPPED：已停止</li><li>UNKNOWN：未知</li></ul>
 * @method string getName() 获取<p>主机名称。</p>
 * @method void setName(string $Name) 设置<p>主机名称。</p>
 * @method integer getAppid() 获取<p>主机所属租户 Appid。</p>
 * @method void setAppid(integer $Appid) 设置<p>主机所属租户 Appid。</p>
 * @method array getTagItem() 获取<p>CSIP 内部资产标签列表。</p>
 * @method void setTagItem(array $TagItem) 设置<p>CSIP 内部资产标签列表。</p>
 * @method array getCloudTag() 获取<p>云上原生资产标签（Tag）列表。</p>
 * @method void setCloudTag(array $CloudTag) 设置<p>云上原生资产标签（Tag）列表。</p>
 * @method RegionInfo getRegionInfo() 获取<p>主机所在地域信息。</p>
 * @method void setRegionInfo(RegionInfo $RegionInfo) 设置<p>主机所在地域信息。</p>
 * @method string getOsInfo() 获取<p>主机操作系统信息（含发行版与版本号）。</p>
 * @method void setOsInfo(string $OsInfo) 设置<p>主机操作系统信息（含发行版与版本号）。</p>
 * @method string getProtectVersion() 获取<p>主机防护版本。取值：NONE（未防护）、BASIC（基础版）、PRO（专业版）、ULTIMATE（旗舰版）、PRO_LH（轻量版）。</p>
 * @method void setProtectVersion(string $ProtectVersion) 设置<p>主机防护版本。取值：NONE（未防护）、BASIC（基础版）、PRO（专业版）、ULTIMATE（旗舰版）、PRO_LH（轻量版）。</p>
 */
class BaselineHostAsset extends AbstractModel
{
    /**
     * @var string <p>云主机实例 ID，格式形如 ins-instanceid。</p>
     */
    public $InstanceID;

    /**
     * @var string <p>CWP（云镜）侧主机唯一标识 QUUID。</p>
     */
    public $QUUID;

    /**
     * @var string <p>主机 Agent 上报的 UUID。</p>
     */
    public $UUID;

    /**
     * @var string <p>主机公网 IP。</p>
     */
    public $PublicIP;

    /**
     * @var string <p>主机内网 IP。</p>
     */
    public $PrivateIP;

    /**
     * @var string <p>CWP Agent 状态。取值：</p><ul><li>ONLINE：在线</li><li>OFFLINE：离线</li><li>UNINSTALLED：未安装</li></ul>
     */
    public $AgentStatus;

    /**
     * @var string <p>云主机实例运行状态。取值：</p><ul><li>RUNNING：运行中</li><li>STOPPED：已停止</li><li>UNKNOWN：未知</li></ul>
     */
    public $InstanceStatus;

    /**
     * @var string <p>主机名称。</p>
     */
    public $Name;

    /**
     * @var integer <p>主机所属租户 Appid。</p>
     */
    public $Appid;

    /**
     * @var array <p>CSIP 内部资产标签列表。</p>
     */
    public $TagItem;

    /**
     * @var array <p>云上原生资产标签（Tag）列表。</p>
     */
    public $CloudTag;

    /**
     * @var RegionInfo <p>主机所在地域信息。</p>
     */
    public $RegionInfo;

    /**
     * @var string <p>主机操作系统信息（含发行版与版本号）。</p>
     */
    public $OsInfo;

    /**
     * @var string <p>主机防护版本。取值：NONE（未防护）、BASIC（基础版）、PRO（专业版）、ULTIMATE（旗舰版）、PRO_LH（轻量版）。</p>
     */
    public $ProtectVersion;

    /**
     * @param string $InstanceID <p>云主机实例 ID，格式形如 ins-instanceid。</p>
     * @param string $QUUID <p>CWP（云镜）侧主机唯一标识 QUUID。</p>
     * @param string $UUID <p>主机 Agent 上报的 UUID。</p>
     * @param string $PublicIP <p>主机公网 IP。</p>
     * @param string $PrivateIP <p>主机内网 IP。</p>
     * @param string $AgentStatus <p>CWP Agent 状态。取值：</p><ul><li>ONLINE：在线</li><li>OFFLINE：离线</li><li>UNINSTALLED：未安装</li></ul>
     * @param string $InstanceStatus <p>云主机实例运行状态。取值：</p><ul><li>RUNNING：运行中</li><li>STOPPED：已停止</li><li>UNKNOWN：未知</li></ul>
     * @param string $Name <p>主机名称。</p>
     * @param integer $Appid <p>主机所属租户 Appid。</p>
     * @param array $TagItem <p>CSIP 内部资产标签列表。</p>
     * @param array $CloudTag <p>云上原生资产标签（Tag）列表。</p>
     * @param RegionInfo $RegionInfo <p>主机所在地域信息。</p>
     * @param string $OsInfo <p>主机操作系统信息（含发行版与版本号）。</p>
     * @param string $ProtectVersion <p>主机防护版本。取值：NONE（未防护）、BASIC（基础版）、PRO（专业版）、ULTIMATE（旗舰版）、PRO_LH（轻量版）。</p>
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

        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
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

        if (array_key_exists("RegionInfo",$param) and $param["RegionInfo"] !== null) {
            $this->RegionInfo = new RegionInfo();
            $this->RegionInfo->deserialize($param["RegionInfo"]);
        }

        if (array_key_exists("OsInfo",$param) and $param["OsInfo"] !== null) {
            $this->OsInfo = $param["OsInfo"];
        }

        if (array_key_exists("ProtectVersion",$param) and $param["ProtectVersion"] !== null) {
            $this->ProtectVersion = $param["ProtectVersion"];
        }
    }
}
