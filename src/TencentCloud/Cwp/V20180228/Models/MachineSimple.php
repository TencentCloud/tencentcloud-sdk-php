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
 * 主机列表穿梭框
 *
 * @method string getMachineName() 获取主机名称。
 * @method void setMachineName(string $MachineName) 设置主机名称。
 * @method string getMachineOs() 获取主机系统。
 * @method void setMachineOs(string $MachineOs) 设置主机系统。
 * @method string getUuid() 获取主机安全uuid，若客户端长时间不在线将返回空字符。
 * @method void setUuid(string $Uuid) 设置主机安全uuid，若客户端长时间不在线将返回空字符。
 * @method string getQuuid() 获取CVM或BM机器唯一Uuid。
 * @method void setQuuid(string $Quuid) 设置CVM或BM机器唯一Uuid。
 * @method string getMachineIp() 获取主机IP。
 * @method void setMachineIp(string $MachineIp) 设置主机IP。
 * @method boolean getIsProVersion() 获取是否是专业版。
<li>true： 是</li>
<li>false：否</li>
 * @method void setIsProVersion(boolean $IsProVersion) 设置是否是专业版。
<li>true： 是</li>
<li>false：否</li>
 * @method string getMachineWanIp() 获取主机外网IP。
 * @method void setMachineWanIp(string $MachineWanIp) 设置主机外网IP。
 * @method string getPayMode() 获取主机状态。
<li>POSTPAY: 表示后付费，即按量计费  </li>
<li>PREPAY: 表示预付费，即包年包月</li>
 * @method void setPayMode(string $PayMode) 设置主机状态。
<li>POSTPAY: 表示后付费，即按量计费  </li>
<li>PREPAY: 表示预付费，即包年包月</li>
 * @method array getTag() 获取标签信息
 * @method void setTag(array $Tag) 设置标签信息
 * @method RegionInfo getRegionInfo() 获取地域信息
 * @method void setRegionInfo(RegionInfo $RegionInfo) 设置地域信息
 * @method string getInstanceState() 获取实例状态请参考CVM实例列表InstanceState值
https://cloud.tencent.com/document/api/213/15753#Instance
 * @method void setInstanceState(string $InstanceState) 设置实例状态请参考CVM实例列表InstanceState值
https://cloud.tencent.com/document/api/213/15753#Instance
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method string getMachineType() 获取机器所属专区类型 CVM 云服务器, BM 黑石, ECM 边缘计算, LH 轻量应用服务器 ,Other 混合云专区
 * @method void setMachineType(string $MachineType) 设置机器所属专区类型 CVM 云服务器, BM 黑石, ECM 边缘计算, LH 轻量应用服务器 ,Other 混合云专区
 * @method string getKernelVersion() 获取内核版本
 * @method void setKernelVersion(string $KernelVersion) 设置内核版本
 * @method string getProtectType() 获取防护版本 BASIC_VERSION 基础版， PRO_VERSION 专业版，Flagship 旗舰版，GENERAL_DISCOUNT 轻量版.
 * @method void setProtectType(string $ProtectType) 设置防护版本 BASIC_VERSION 基础版， PRO_VERSION 专业版，Flagship 旗舰版，GENERAL_DISCOUNT 轻量版.
 * @method LicenseOrder getLicenseOrder() 获取授权订单对象
 * @method void setLicenseOrder(LicenseOrder $LicenseOrder) 设置授权订单对象
 * @method array getCloudTags() 获取云标签信息
 * @method void setCloudTags(array $CloudTags) 设置云标签信息
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 */
class MachineSimple extends AbstractModel
{
    /**
     * @var string 主机名称。
     */
    public $MachineName;

    /**
     * @var string 主机系统。
     */
    public $MachineOs;

    /**
     * @var string 主机安全uuid，若客户端长时间不在线将返回空字符。
     */
    public $Uuid;

    /**
     * @var string CVM或BM机器唯一Uuid。
     */
    public $Quuid;

    /**
     * @var string 主机IP。
     */
    public $MachineIp;

    /**
     * @var boolean 是否是专业版。
<li>true： 是</li>
<li>false：否</li>
     */
    public $IsProVersion;

    /**
     * @var string 主机外网IP。
     */
    public $MachineWanIp;

    /**
     * @var string 主机状态。
<li>POSTPAY: 表示后付费，即按量计费  </li>
<li>PREPAY: 表示预付费，即包年包月</li>
     */
    public $PayMode;

    /**
     * @var array 标签信息
     */
    public $Tag;

    /**
     * @var RegionInfo 地域信息
     */
    public $RegionInfo;

    /**
     * @var string 实例状态请参考CVM实例列表InstanceState值
https://cloud.tencent.com/document/api/213/15753#Instance
     */
    public $InstanceState;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var string 机器所属专区类型 CVM 云服务器, BM 黑石, ECM 边缘计算, LH 轻量应用服务器 ,Other 混合云专区
     */
    public $MachineType;

    /**
     * @var string 内核版本
     */
    public $KernelVersion;

    /**
     * @var string 防护版本 BASIC_VERSION 基础版， PRO_VERSION 专业版，Flagship 旗舰版，GENERAL_DISCOUNT 轻量版.
     */
    public $ProtectType;

    /**
     * @var LicenseOrder 授权订单对象
     */
    public $LicenseOrder;

    /**
     * @var array 云标签信息
     */
    public $CloudTags;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @param string $MachineName 主机名称。
     * @param string $MachineOs 主机系统。
     * @param string $Uuid 主机安全uuid，若客户端长时间不在线将返回空字符。
     * @param string $Quuid CVM或BM机器唯一Uuid。
     * @param string $MachineIp 主机IP。
     * @param boolean $IsProVersion 是否是专业版。
<li>true： 是</li>
<li>false：否</li>
     * @param string $MachineWanIp 主机外网IP。
     * @param string $PayMode 主机状态。
<li>POSTPAY: 表示后付费，即按量计费  </li>
<li>PREPAY: 表示预付费，即包年包月</li>
     * @param array $Tag 标签信息
     * @param RegionInfo $RegionInfo 地域信息
     * @param string $InstanceState 实例状态请参考CVM实例列表InstanceState值
https://cloud.tencent.com/document/api/213/15753#Instance
     * @param integer $ProjectId 项目ID
     * @param string $MachineType 机器所属专区类型 CVM 云服务器, BM 黑石, ECM 边缘计算, LH 轻量应用服务器 ,Other 混合云专区
     * @param string $KernelVersion 内核版本
     * @param string $ProtectType 防护版本 BASIC_VERSION 基础版， PRO_VERSION 专业版，Flagship 旗舰版，GENERAL_DISCOUNT 轻量版.
     * @param LicenseOrder $LicenseOrder 授权订单对象
     * @param array $CloudTags 云标签信息
     * @param string $InstanceId 实例ID
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

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
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

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new MachineTag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("RegionInfo",$param) and $param["RegionInfo"] !== null) {
            $this->RegionInfo = new RegionInfo();
            $this->RegionInfo->deserialize($param["RegionInfo"]);
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
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

        if (array_key_exists("LicenseOrder",$param) and $param["LicenseOrder"] !== null) {
            $this->LicenseOrder = new LicenseOrder();
            $this->LicenseOrder->deserialize($param["LicenseOrder"]);
        }

        if (array_key_exists("CloudTags",$param) and $param["CloudTags"] !== null) {
            $this->CloudTags = [];
            foreach ($param["CloudTags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->CloudTags, $obj);
            }
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
