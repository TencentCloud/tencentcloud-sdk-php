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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主机列表
 *
 * @method string getMachineName() 获取<p>主机名称。</p>
 * @method void setMachineName(string $MachineName) 设置<p>主机名称。</p>
 * @method string getMachineOs() 获取<p>主机系统。</p>
 * @method void setMachineOs(string $MachineOs) 设置<p>主机系统。</p>
 * @method string getMachineStatus() 获取<p>主机状态。 <li>OFFLINE: 离线 </li> <li>ONLINE: 在线</li> <li>SHUTDOWN: 已关机</li> <li>UNINSTALLED: 未防护</li></p>
 * @method void setMachineStatus(string $MachineStatus) 设置<p>主机状态。 <li>OFFLINE: 离线 </li> <li>ONLINE: 在线</li> <li>SHUTDOWN: 已关机</li> <li>UNINSTALLED: 未防护</li></p>
 * @method string getAgentStatus() 获取<p>ONLINE 防护中; OFFLINE 已离线;UNINStALLED 未安装</p>
 * @method void setAgentStatus(string $AgentStatus) 设置<p>ONLINE 防护中; OFFLINE 已离线;UNINStALLED 未安装</p>
 * @method string getInstanceStatus() 获取<p>RUNNING 运行中; STOPED 已关机; EXPIRED 待回收</p>
 * @method void setInstanceStatus(string $InstanceStatus) 设置<p>RUNNING 运行中; STOPED 已关机; EXPIRED 待回收</p>
 * @method string getUuid() 获取<p>主机安全Uuid，若客户端长时间不在线将返回空字符。</p>
 * @method void setUuid(string $Uuid) 设置<p>主机安全Uuid，若客户端长时间不在线将返回空字符。</p>
 * @method string getQuuid() 获取<p>CVM或BM机器唯一Uuid。</p>
 * @method void setQuuid(string $Quuid) 设置<p>CVM或BM机器唯一Uuid。</p>
 * @method integer getVulNum() 获取<p>漏洞数。</p>
 * @method void setVulNum(integer $VulNum) 设置<p>漏洞数。</p>
 * @method string getMachineIp() 获取<p>主机IP。</p>
 * @method void setMachineIp(string $MachineIp) 设置<p>主机IP。</p>
 * @method boolean getIsProVersion() 获取<p>是否是专业版。</p><li>true： 是</li><li>false：否</li>
 * @method void setIsProVersion(boolean $IsProVersion) 设置<p>是否是专业版。</p><li>true： 是</li><li>false：否</li>
 * @method string getMachineWanIp() 获取<p>主机外网IP。</p>
 * @method void setMachineWanIp(string $MachineWanIp) 设置<p>主机外网IP。</p>
 * @method string getPayMode() 获取<p>主机状态。</p><li>POSTPAY: 表示后付费，即按量计费  </li><li>PREPAY: 表示预付费，即包年包月</li>
 * @method void setPayMode(string $PayMode) 设置<p>主机状态。</p><li>POSTPAY: 表示后付费，即按量计费  </li><li>PREPAY: 表示预付费，即包年包月</li>
 * @method integer getMalwareNum() 获取<p>木马数。</p>
 * @method void setMalwareNum(integer $MalwareNum) 设置<p>木马数。</p>
 * @method array getTag() 获取<p>标签信息</p>
 * @method void setTag(array $Tag) 设置<p>标签信息</p>
 * @method integer getBaselineNum() 获取<p>基线风险数。</p>
 * @method void setBaselineNum(integer $BaselineNum) 设置<p>基线风险数。</p>
 * @method integer getCyberAttackNum() 获取<p>网络风险数。</p>
 * @method void setCyberAttackNum(integer $CyberAttackNum) 设置<p>网络风险数。</p>
 * @method string getSecurityStatus() 获取<p>风险状态。</p><li>SAFE：安全</li><li>RISK：风险</li><li>UNKNOWN：未知</li>
 * @method void setSecurityStatus(string $SecurityStatus) 设置<p>风险状态。</p><li>SAFE：安全</li><li>RISK：风险</li><li>UNKNOWN：未知</li>
 * @method integer getInvasionNum() 获取<p>入侵事件数</p>
 * @method void setInvasionNum(integer $InvasionNum) 设置<p>入侵事件数</p>
 * @method RegionInfo getRegionInfo() 获取<p>地域信息</p>
 * @method void setRegionInfo(RegionInfo $RegionInfo) 设置<p>地域信息</p>
 * @method string getInstanceState() 获取<p>实例状态 TERMINATED_PRO_VERSION 已销毁</p>
 * @method void setInstanceState(string $InstanceState) 设置<p>实例状态 TERMINATED_PRO_VERSION 已销毁</p>
 * @method integer getLicenseStatus() 获取<p>防篡改 授权状态 1 授权 0 未授权</p>
 * @method void setLicenseStatus(integer $LicenseStatus) 设置<p>防篡改 授权状态 1 授权 0 未授权</p>
 * @method integer getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目ID</p>
 * @method integer getHasAssetScan() 获取<p>是否有资产扫描接口，0无，1有</p>
 * @method void setHasAssetScan(integer $HasAssetScan) 设置<p>是否有资产扫描接口，0无，1有</p>
 * @method string getMachineType() 获取<p>机器所属专区类型 CVM 云服务器, BM 黑石, ECM 边缘计算, LH 轻量应用服务器 ,Other 混合云专区</p>
 * @method void setMachineType(string $MachineType) 设置<p>机器所属专区类型 CVM 云服务器, BM 黑石, ECM 边缘计算, LH 轻量应用服务器 ,Other 混合云专区</p>
 * @method string getKernelVersion() 获取<p>内核版本</p>
 * @method void setKernelVersion(string $KernelVersion) 设置<p>内核版本</p>
 * @method string getProtectType() 获取<p>防护版本：BASIC_VERSION 基础版， PRO_VERSION 专业版，Flagship 旗舰版，GENERAL_DISCOUNT 轻量版</p>
 * @method void setProtectType(string $ProtectType) 设置<p>防护版本：BASIC_VERSION 基础版， PRO_VERSION 专业版，Flagship 旗舰版，GENERAL_DISCOUNT 轻量版</p>
 * @method array getCloudTags() 获取<p>云标签信息</p>
 * @method void setCloudTags(array $CloudTags) 设置<p>云标签信息</p>
 * @method integer getIsAddedOnTheFifteen() 获取<p>是否15天内新增的主机 0：非15天内新增的主机，1：15天内增加的主机</p>
 * @method void setIsAddedOnTheFifteen(integer $IsAddedOnTheFifteen) 设置<p>是否15天内新增的主机 0：非15天内新增的主机，1：15天内增加的主机</p>
 * @method string getIpList() 获取<p>主机ip列表</p>
 * @method void setIpList(string $IpList) 设置<p>主机ip列表</p>
 * @method string getVpcId() 获取<p>所属网络</p>
 * @method void setVpcId(string $VpcId) 设置<p>所属网络</p>
 * @method MachineExtraInfo getMachineExtraInfo() 获取<p>附加信息</p>
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置<p>附加信息</p>
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getRemark() 获取<p>备注信息</p>
 * @method void setRemark(string $Remark) 设置<p>备注信息</p>
 * @method string getAgentVersion() 获取<p>主机安全agent版本</p>
 * @method void setAgentVersion(string $AgentVersion) 设置<p>主机安全agent版本</p>
 * @method integer getAppId() 获取<p>机器对应APPID</p>
 * @method void setAppId(integer $AppId) 设置<p>机器对应APPID</p>
 * @method string getCSIPProtectType() 获取<p>安全中心付费版本</p>
 * @method void setCSIPProtectType(string $CSIPProtectType) 设置<p>安全中心付费版本</p>
 */
class Machine extends AbstractModel
{
    /**
     * @var string <p>主机名称。</p>
     */
    public $MachineName;

    /**
     * @var string <p>主机系统。</p>
     */
    public $MachineOs;

    /**
     * @var string <p>主机状态。 <li>OFFLINE: 离线 </li> <li>ONLINE: 在线</li> <li>SHUTDOWN: 已关机</li> <li>UNINSTALLED: 未防护</li></p>
     */
    public $MachineStatus;

    /**
     * @var string <p>ONLINE 防护中; OFFLINE 已离线;UNINStALLED 未安装</p>
     */
    public $AgentStatus;

    /**
     * @var string <p>RUNNING 运行中; STOPED 已关机; EXPIRED 待回收</p>
     */
    public $InstanceStatus;

    /**
     * @var string <p>主机安全Uuid，若客户端长时间不在线将返回空字符。</p>
     */
    public $Uuid;

    /**
     * @var string <p>CVM或BM机器唯一Uuid。</p>
     */
    public $Quuid;

    /**
     * @var integer <p>漏洞数。</p>
     */
    public $VulNum;

    /**
     * @var string <p>主机IP。</p>
     */
    public $MachineIp;

    /**
     * @var boolean <p>是否是专业版。</p><li>true： 是</li><li>false：否</li>
     */
    public $IsProVersion;

    /**
     * @var string <p>主机外网IP。</p>
     */
    public $MachineWanIp;

    /**
     * @var string <p>主机状态。</p><li>POSTPAY: 表示后付费，即按量计费  </li><li>PREPAY: 表示预付费，即包年包月</li>
     */
    public $PayMode;

    /**
     * @var integer <p>木马数。</p>
     */
    public $MalwareNum;

    /**
     * @var array <p>标签信息</p>
     */
    public $Tag;

    /**
     * @var integer <p>基线风险数。</p>
     */
    public $BaselineNum;

    /**
     * @var integer <p>网络风险数。</p>
     */
    public $CyberAttackNum;

    /**
     * @var string <p>风险状态。</p><li>SAFE：安全</li><li>RISK：风险</li><li>UNKNOWN：未知</li>
     */
    public $SecurityStatus;

    /**
     * @var integer <p>入侵事件数</p>
     */
    public $InvasionNum;

    /**
     * @var RegionInfo <p>地域信息</p>
     */
    public $RegionInfo;

    /**
     * @var string <p>实例状态 TERMINATED_PRO_VERSION 已销毁</p>
     */
    public $InstanceState;

    /**
     * @var integer <p>防篡改 授权状态 1 授权 0 未授权</p>
     */
    public $LicenseStatus;

    /**
     * @var integer <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>是否有资产扫描接口，0无，1有</p>
     */
    public $HasAssetScan;

    /**
     * @var string <p>机器所属专区类型 CVM 云服务器, BM 黑石, ECM 边缘计算, LH 轻量应用服务器 ,Other 混合云专区</p>
     */
    public $MachineType;

    /**
     * @var string <p>内核版本</p>
     */
    public $KernelVersion;

    /**
     * @var string <p>防护版本：BASIC_VERSION 基础版， PRO_VERSION 专业版，Flagship 旗舰版，GENERAL_DISCOUNT 轻量版</p>
     */
    public $ProtectType;

    /**
     * @var array <p>云标签信息</p>
     */
    public $CloudTags;

    /**
     * @var integer <p>是否15天内新增的主机 0：非15天内新增的主机，1：15天内增加的主机</p>
     */
    public $IsAddedOnTheFifteen;

    /**
     * @var string <p>主机ip列表</p>
     */
    public $IpList;

    /**
     * @var string <p>所属网络</p>
     */
    public $VpcId;

    /**
     * @var MachineExtraInfo <p>附加信息</p>
     */
    public $MachineExtraInfo;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>备注信息</p>
     */
    public $Remark;

    /**
     * @var string <p>主机安全agent版本</p>
     */
    public $AgentVersion;

    /**
     * @var integer <p>机器对应APPID</p>
     */
    public $AppId;

    /**
     * @var string <p>安全中心付费版本</p>
     */
    public $CSIPProtectType;

    /**
     * @param string $MachineName <p>主机名称。</p>
     * @param string $MachineOs <p>主机系统。</p>
     * @param string $MachineStatus <p>主机状态。 <li>OFFLINE: 离线 </li> <li>ONLINE: 在线</li> <li>SHUTDOWN: 已关机</li> <li>UNINSTALLED: 未防护</li></p>
     * @param string $AgentStatus <p>ONLINE 防护中; OFFLINE 已离线;UNINStALLED 未安装</p>
     * @param string $InstanceStatus <p>RUNNING 运行中; STOPED 已关机; EXPIRED 待回收</p>
     * @param string $Uuid <p>主机安全Uuid，若客户端长时间不在线将返回空字符。</p>
     * @param string $Quuid <p>CVM或BM机器唯一Uuid。</p>
     * @param integer $VulNum <p>漏洞数。</p>
     * @param string $MachineIp <p>主机IP。</p>
     * @param boolean $IsProVersion <p>是否是专业版。</p><li>true： 是</li><li>false：否</li>
     * @param string $MachineWanIp <p>主机外网IP。</p>
     * @param string $PayMode <p>主机状态。</p><li>POSTPAY: 表示后付费，即按量计费  </li><li>PREPAY: 表示预付费，即包年包月</li>
     * @param integer $MalwareNum <p>木马数。</p>
     * @param array $Tag <p>标签信息</p>
     * @param integer $BaselineNum <p>基线风险数。</p>
     * @param integer $CyberAttackNum <p>网络风险数。</p>
     * @param string $SecurityStatus <p>风险状态。</p><li>SAFE：安全</li><li>RISK：风险</li><li>UNKNOWN：未知</li>
     * @param integer $InvasionNum <p>入侵事件数</p>
     * @param RegionInfo $RegionInfo <p>地域信息</p>
     * @param string $InstanceState <p>实例状态 TERMINATED_PRO_VERSION 已销毁</p>
     * @param integer $LicenseStatus <p>防篡改 授权状态 1 授权 0 未授权</p>
     * @param integer $ProjectId <p>项目ID</p>
     * @param integer $HasAssetScan <p>是否有资产扫描接口，0无，1有</p>
     * @param string $MachineType <p>机器所属专区类型 CVM 云服务器, BM 黑石, ECM 边缘计算, LH 轻量应用服务器 ,Other 混合云专区</p>
     * @param string $KernelVersion <p>内核版本</p>
     * @param string $ProtectType <p>防护版本：BASIC_VERSION 基础版， PRO_VERSION 专业版，Flagship 旗舰版，GENERAL_DISCOUNT 轻量版</p>
     * @param array $CloudTags <p>云标签信息</p>
     * @param integer $IsAddedOnTheFifteen <p>是否15天内新增的主机 0：非15天内新增的主机，1：15天内增加的主机</p>
     * @param string $IpList <p>主机ip列表</p>
     * @param string $VpcId <p>所属网络</p>
     * @param MachineExtraInfo $MachineExtraInfo <p>附加信息</p>
     * @param string $InstanceId <p>实例ID</p>
     * @param string $Remark <p>备注信息</p>
     * @param string $AgentVersion <p>主机安全agent版本</p>
     * @param integer $AppId <p>机器对应APPID</p>
     * @param string $CSIPProtectType <p>安全中心付费版本</p>
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
        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("MachineOs",$param) and $param["MachineOs"] !== null) {
            $this->MachineOs = $param["MachineOs"];
        }

        if (array_key_exists("MachineStatus",$param) and $param["MachineStatus"] !== null) {
            $this->MachineStatus = $param["MachineStatus"];
        }

        if (array_key_exists("AgentStatus",$param) and $param["AgentStatus"] !== null) {
            $this->AgentStatus = $param["AgentStatus"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("VulNum",$param) and $param["VulNum"] !== null) {
            $this->VulNum = $param["VulNum"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("IsProVersion",$param) and $param["IsProVersion"] !== null) {
            $this->IsProVersion = $param["IsProVersion"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("MalwareNum",$param) and $param["MalwareNum"] !== null) {
            $this->MalwareNum = $param["MalwareNum"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new MachineTag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("BaselineNum",$param) and $param["BaselineNum"] !== null) {
            $this->BaselineNum = $param["BaselineNum"];
        }

        if (array_key_exists("CyberAttackNum",$param) and $param["CyberAttackNum"] !== null) {
            $this->CyberAttackNum = $param["CyberAttackNum"];
        }

        if (array_key_exists("SecurityStatus",$param) and $param["SecurityStatus"] !== null) {
            $this->SecurityStatus = $param["SecurityStatus"];
        }

        if (array_key_exists("InvasionNum",$param) and $param["InvasionNum"] !== null) {
            $this->InvasionNum = $param["InvasionNum"];
        }

        if (array_key_exists("RegionInfo",$param) and $param["RegionInfo"] !== null) {
            $this->RegionInfo = new RegionInfo();
            $this->RegionInfo->deserialize($param["RegionInfo"]);
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("LicenseStatus",$param) and $param["LicenseStatus"] !== null) {
            $this->LicenseStatus = $param["LicenseStatus"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("HasAssetScan",$param) and $param["HasAssetScan"] !== null) {
            $this->HasAssetScan = $param["HasAssetScan"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("KernelVersion",$param) and $param["KernelVersion"] !== null) {
            $this->KernelVersion = $param["KernelVersion"];
        }

        if (array_key_exists("ProtectType",$param) and $param["ProtectType"] !== null) {
            $this->ProtectType = $param["ProtectType"];
        }

        if (array_key_exists("CloudTags",$param) and $param["CloudTags"] !== null) {
            $this->CloudTags = [];
            foreach ($param["CloudTags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->CloudTags, $obj);
            }
        }

        if (array_key_exists("IsAddedOnTheFifteen",$param) and $param["IsAddedOnTheFifteen"] !== null) {
            $this->IsAddedOnTheFifteen = $param["IsAddedOnTheFifteen"];
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("AgentVersion",$param) and $param["AgentVersion"] !== null) {
            $this->AgentVersion = $param["AgentVersion"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("CSIPProtectType",$param) and $param["CSIPProtectType"] !== null) {
            $this->CSIPProtectType = $param["CSIPProtectType"];
        }
    }
}
