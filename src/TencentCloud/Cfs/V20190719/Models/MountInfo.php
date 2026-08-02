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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 挂载点信息
 *
 * @method string getFileSystemId() 获取<p>文件系统 ID</p>
 * @method void setFileSystemId(string $FileSystemId) 设置<p>文件系统 ID</p>
 * @method string getMountTargetId() 获取<p>挂载点 ID</p>
 * @method void setMountTargetId(string $MountTargetId) 设置<p>挂载点 ID</p>
 * @method string getIpAddress() 获取<p>挂载点 IP</p>
 * @method void setIpAddress(string $IpAddress) 设置<p>挂载点 IP</p>
 * @method string getFSID() 获取<p>挂载根目录</p>
 * @method void setFSID(string $FSID) 设置<p>挂载根目录</p>
 * @method string getLifeCycleState() 获取<p>挂载点状态，包括creating：创建中；available：运行中；<br>deleting：删除中；<br>create_failed： 创建失败</p>
 * @method void setLifeCycleState(string $LifeCycleState) 设置<p>挂载点状态，包括creating：创建中；available：运行中；<br>deleting：删除中；<br>create_failed： 创建失败</p>
 * @method string getNetworkInterface() 获取<p>网络类型，包括VPC,CCN</p>
 * @method void setNetworkInterface(string $NetworkInterface) 设置<p>网络类型，包括VPC,CCN</p>
 * @method string getVpcId() 获取<p>私有网络 ID</p>
 * @method void setVpcId(string $VpcId) 设置<p>私有网络 ID</p>
 * @method string getVpcName() 获取<p>私有网络名称</p>
 * @method void setVpcName(string $VpcName) 设置<p>私有网络名称</p>
 * @method string getSubnetId() 获取<p>子网 Id</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网 Id</p>
 * @method string getSubnetName() 获取<p>子网名称</p>
 * @method void setSubnetName(string $SubnetName) 设置<p>子网名称</p>
 * @method string getCcnID() 获取<p>CFS Turbo使用的云联网ID</p>
 * @method void setCcnID(string $CcnID) 设置<p>CFS Turbo使用的云联网ID</p>
 * @method string getCidrBlock() 获取<p>云联网中CFS Turbo使用的网段</p>
 * @method void setCidrBlock(string $CidrBlock) 设置<p>云联网中CFS Turbo使用的网段</p>
 * @method array getServerList() 获取<p>占用用户ip列表</p>
 * @method void setServerList(array $ServerList) 设置<p>占用用户ip列表</p>
 * @method boolean getServerListTruncated() 获取<p>是否占用超过200个ip</p>
 * @method void setServerListTruncated(boolean $ServerListTruncated) 设置<p>是否占用超过200个ip</p>
 */
class MountInfo extends AbstractModel
{
    /**
     * @var string <p>文件系统 ID</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>挂载点 ID</p>
     */
    public $MountTargetId;

    /**
     * @var string <p>挂载点 IP</p>
     */
    public $IpAddress;

    /**
     * @var string <p>挂载根目录</p>
     */
    public $FSID;

    /**
     * @var string <p>挂载点状态，包括creating：创建中；available：运行中；<br>deleting：删除中；<br>create_failed： 创建失败</p>
     */
    public $LifeCycleState;

    /**
     * @var string <p>网络类型，包括VPC,CCN</p>
     */
    public $NetworkInterface;

    /**
     * @var string <p>私有网络 ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>私有网络名称</p>
     */
    public $VpcName;

    /**
     * @var string <p>子网 Id</p>
     */
    public $SubnetId;

    /**
     * @var string <p>子网名称</p>
     */
    public $SubnetName;

    /**
     * @var string <p>CFS Turbo使用的云联网ID</p>
     */
    public $CcnID;

    /**
     * @var string <p>云联网中CFS Turbo使用的网段</p>
     */
    public $CidrBlock;

    /**
     * @var array <p>占用用户ip列表</p>
     */
    public $ServerList;

    /**
     * @var boolean <p>是否占用超过200个ip</p>
     */
    public $ServerListTruncated;

    /**
     * @param string $FileSystemId <p>文件系统 ID</p>
     * @param string $MountTargetId <p>挂载点 ID</p>
     * @param string $IpAddress <p>挂载点 IP</p>
     * @param string $FSID <p>挂载根目录</p>
     * @param string $LifeCycleState <p>挂载点状态，包括creating：创建中；available：运行中；<br>deleting：删除中；<br>create_failed： 创建失败</p>
     * @param string $NetworkInterface <p>网络类型，包括VPC,CCN</p>
     * @param string $VpcId <p>私有网络 ID</p>
     * @param string $VpcName <p>私有网络名称</p>
     * @param string $SubnetId <p>子网 Id</p>
     * @param string $SubnetName <p>子网名称</p>
     * @param string $CcnID <p>CFS Turbo使用的云联网ID</p>
     * @param string $CidrBlock <p>云联网中CFS Turbo使用的网段</p>
     * @param array $ServerList <p>占用用户ip列表</p>
     * @param boolean $ServerListTruncated <p>是否占用超过200个ip</p>
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("MountTargetId",$param) and $param["MountTargetId"] !== null) {
            $this->MountTargetId = $param["MountTargetId"];
        }

        if (array_key_exists("IpAddress",$param) and $param["IpAddress"] !== null) {
            $this->IpAddress = $param["IpAddress"];
        }

        if (array_key_exists("FSID",$param) and $param["FSID"] !== null) {
            $this->FSID = $param["FSID"];
        }

        if (array_key_exists("LifeCycleState",$param) and $param["LifeCycleState"] !== null) {
            $this->LifeCycleState = $param["LifeCycleState"];
        }

        if (array_key_exists("NetworkInterface",$param) and $param["NetworkInterface"] !== null) {
            $this->NetworkInterface = $param["NetworkInterface"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("CcnID",$param) and $param["CcnID"] !== null) {
            $this->CcnID = $param["CcnID"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("ServerList",$param) and $param["ServerList"] !== null) {
            $this->ServerList = $param["ServerList"];
        }

        if (array_key_exists("ServerListTruncated",$param) and $param["ServerListTruncated"] !== null) {
            $this->ServerListTruncated = $param["ServerListTruncated"];
        }
    }
}
