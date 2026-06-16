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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DB Custom 节点信息。
 *
 * @method string getNodeId() 获取<p>节点ID</p>
 * @method void setNodeId(string $NodeId) 设置<p>节点ID</p>
 * @method string getNodeName() 获取<p>节点名称</p>
 * @method void setNodeName(string $NodeName) 设置<p>节点名称</p>
 * @method string getSSHEndpoint() 获取<p>访问此节点的SSH Endpoint，格式为IP:Port</p>
 * @method void setSSHEndpoint(string $SSHEndpoint) 设置<p>访问此节点的SSH Endpoint，格式为IP:Port</p>
 * @method string getLanIP() 获取<p>节点的内网通信IP地址</p>
 * @method void setLanIP(string $LanIP) 设置<p>节点的内网通信IP地址</p>
 * @method string getClusterId() 获取<p>节点所属的集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>节点所属的集群ID</p>
 * @method string getZone() 获取<p>节点所属的可用区</p>
 * @method void setZone(string $Zone) 设置<p>节点所属的可用区</p>
 * @method string getNodeType() 获取<p>节点类型</p><p>枚举值：</p><ul><li>DB.AT5.32XLARGE512： 高IO型服务器：128核心512GB内存，8*7180GB本地NvME SSDB。</li><li>DB.AT5.64XLARGE1152： 高IO型服务器：256核心1152GB内存，12*7180GB本地NvME SSDB。</li><li>DB.AT5.128XLARGE2304： 高IO型服务器：512核心2304GB内存，24*7180GB本地NvME SSDB。</li><li>DB.AT5.16XLARGE256： 高IO型服务器：64核心256GB内存，4*7180GB本地NvME SSDB。</li><li>DB.AT5.8XLARGE128： 高IO型服务器：32核心128GB内存，2*7180GB本地NvME SSDB。</li></ul>
 * @method void setNodeType(string $NodeType) 设置<p>节点类型</p><p>枚举值：</p><ul><li>DB.AT5.32XLARGE512： 高IO型服务器：128核心512GB内存，8*7180GB本地NvME SSDB。</li><li>DB.AT5.64XLARGE1152： 高IO型服务器：256核心1152GB内存，12*7180GB本地NvME SSDB。</li><li>DB.AT5.128XLARGE2304： 高IO型服务器：512核心2304GB内存，24*7180GB本地NvME SSDB。</li><li>DB.AT5.16XLARGE256： 高IO型服务器：64核心256GB内存，4*7180GB本地NvME SSDB。</li><li>DB.AT5.8XLARGE128： 高IO型服务器：32核心128GB内存，2*7180GB本地NvME SSDB。</li></ul>
 * @method integer getCPU() 获取<p>节点CPU大小</p><p>单位：核</p>
 * @method void setCPU(integer $CPU) 设置<p>节点CPU大小</p><p>单位：核</p>
 * @method integer getMemory() 获取<p>节点内存</p><p>单位：GiB</p>
 * @method void setMemory(integer $Memory) 设置<p>节点内存</p><p>单位：GiB</p>
 * @method SystemDisk getSystemDisk() 获取<p>系统盘信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSystemDisk(SystemDisk $SystemDisk) 设置<p>系统盘信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDataDisks() 获取<p>数据盘信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataDisks(array $DataDisks) 设置<p>数据盘信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOsName() 获取<p>节点的操作系统名称</p>
 * @method void setOsName(string $OsName) 设置<p>节点的操作系统名称</p>
 * @method string getImageId() 获取<p>节点的操作系统镜像ID</p>
 * @method void setImageId(string $ImageId) 设置<p>节点的操作系统镜像ID</p>
 * @method string getVpcId() 获取<p>节点SSH Endpoint 所属的VPC ID</p>
 * @method void setVpcId(string $VpcId) 设置<p>节点SSH Endpoint 所属的VPC ID</p>
 * @method string getSubnetId() 获取<p>节点SSH Endpoint 所属的VPC 子网ID</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>节点SSH Endpoint 所属的VPC 子网ID</p>
 * @method string getStatus() 获取<p>节点状态</p><p>枚举值：</p><ul><li>Creating： 创建中</li><li>Running： 运行中</li><li>Isolating： 隔离中</li><li>Isolated： 已隔离</li><li>Activating： 解除隔离中</li><li>Destroying： 销毁中</li></ul>
 * @method void setStatus(string $Status) 设置<p>节点状态</p><p>枚举值：</p><ul><li>Creating： 创建中</li><li>Running： 运行中</li><li>Isolating： 隔离中</li><li>Isolated： 已隔离</li><li>Activating： 解除隔离中</li><li>Destroying： 销毁中</li></ul>
 * @method string getChargeType() 获取<p>付费类型</p><p>枚举值：</p><ul><li>PREPAID： 包年包月</li></ul>
 * @method void setChargeType(string $ChargeType) 设置<p>付费类型</p><p>枚举值：</p><ul><li>PREPAID： 包年包月</li></ul>
 * @method string getExpireTime() 获取<p>节点到期时间</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>节点到期时间</p>
 * @method string getCreatedTime() 获取<p>节点创建时间</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>节点创建时间</p>
 * @method string getIsolatedTime() 获取<p>节点隔离时间</p>
 * @method void setIsolatedTime(string $IsolatedTime) 设置<p>节点隔离时间</p>
 * @method array getTags() 获取<p>节点标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>节点标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoRenew() 获取<p>节点是否自动续费标记</p><p>枚举值：</p><ul><li>1： 自动续费</li><li>0： 不自动续费</li></ul>
 * @method void setAutoRenew(integer $AutoRenew) 设置<p>节点是否自动续费标记</p><p>枚举值：</p><ul><li>1： 自动续费</li><li>0： 不自动续费</li></ul>
 * @method string getSwitchId() 获取<p>交换机ID（已加密）</p>
 * @method void setSwitchId(string $SwitchId) 设置<p>交换机ID（已加密）</p>
 * @method string getRackId() 获取<p>机架ID（已加密）</p>
 * @method void setRackId(string $RackId) 设置<p>机架ID（已加密）</p>
 * @method string getHostIp() 获取<p>底层物理机IP（已加密）</p>
 * @method void setHostIp(string $HostIp) 设置<p>底层物理机IP（已加密）</p>
 */
class DBCustomNode extends AbstractModel
{
    /**
     * @var string <p>节点ID</p>
     */
    public $NodeId;

    /**
     * @var string <p>节点名称</p>
     */
    public $NodeName;

    /**
     * @var string <p>访问此节点的SSH Endpoint，格式为IP:Port</p>
     */
    public $SSHEndpoint;

    /**
     * @var string <p>节点的内网通信IP地址</p>
     */
    public $LanIP;

    /**
     * @var string <p>节点所属的集群ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>节点所属的可用区</p>
     */
    public $Zone;

    /**
     * @var string <p>节点类型</p><p>枚举值：</p><ul><li>DB.AT5.32XLARGE512： 高IO型服务器：128核心512GB内存，8*7180GB本地NvME SSDB。</li><li>DB.AT5.64XLARGE1152： 高IO型服务器：256核心1152GB内存，12*7180GB本地NvME SSDB。</li><li>DB.AT5.128XLARGE2304： 高IO型服务器：512核心2304GB内存，24*7180GB本地NvME SSDB。</li><li>DB.AT5.16XLARGE256： 高IO型服务器：64核心256GB内存，4*7180GB本地NvME SSDB。</li><li>DB.AT5.8XLARGE128： 高IO型服务器：32核心128GB内存，2*7180GB本地NvME SSDB。</li></ul>
     */
    public $NodeType;

    /**
     * @var integer <p>节点CPU大小</p><p>单位：核</p>
     */
    public $CPU;

    /**
     * @var integer <p>节点内存</p><p>单位：GiB</p>
     */
    public $Memory;

    /**
     * @var SystemDisk <p>系统盘信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SystemDisk;

    /**
     * @var array <p>数据盘信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataDisks;

    /**
     * @var string <p>节点的操作系统名称</p>
     */
    public $OsName;

    /**
     * @var string <p>节点的操作系统镜像ID</p>
     */
    public $ImageId;

    /**
     * @var string <p>节点SSH Endpoint 所属的VPC ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>节点SSH Endpoint 所属的VPC 子网ID</p>
     */
    public $SubnetId;

    /**
     * @var string <p>节点状态</p><p>枚举值：</p><ul><li>Creating： 创建中</li><li>Running： 运行中</li><li>Isolating： 隔离中</li><li>Isolated： 已隔离</li><li>Activating： 解除隔离中</li><li>Destroying： 销毁中</li></ul>
     */
    public $Status;

    /**
     * @var string <p>付费类型</p><p>枚举值：</p><ul><li>PREPAID： 包年包月</li></ul>
     */
    public $ChargeType;

    /**
     * @var string <p>节点到期时间</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>节点创建时间</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>节点隔离时间</p>
     */
    public $IsolatedTime;

    /**
     * @var array <p>节点标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var integer <p>节点是否自动续费标记</p><p>枚举值：</p><ul><li>1： 自动续费</li><li>0： 不自动续费</li></ul>
     */
    public $AutoRenew;

    /**
     * @var string <p>交换机ID（已加密）</p>
     */
    public $SwitchId;

    /**
     * @var string <p>机架ID（已加密）</p>
     */
    public $RackId;

    /**
     * @var string <p>底层物理机IP（已加密）</p>
     */
    public $HostIp;

    /**
     * @param string $NodeId <p>节点ID</p>
     * @param string $NodeName <p>节点名称</p>
     * @param string $SSHEndpoint <p>访问此节点的SSH Endpoint，格式为IP:Port</p>
     * @param string $LanIP <p>节点的内网通信IP地址</p>
     * @param string $ClusterId <p>节点所属的集群ID</p>
     * @param string $Zone <p>节点所属的可用区</p>
     * @param string $NodeType <p>节点类型</p><p>枚举值：</p><ul><li>DB.AT5.32XLARGE512： 高IO型服务器：128核心512GB内存，8*7180GB本地NvME SSDB。</li><li>DB.AT5.64XLARGE1152： 高IO型服务器：256核心1152GB内存，12*7180GB本地NvME SSDB。</li><li>DB.AT5.128XLARGE2304： 高IO型服务器：512核心2304GB内存，24*7180GB本地NvME SSDB。</li><li>DB.AT5.16XLARGE256： 高IO型服务器：64核心256GB内存，4*7180GB本地NvME SSDB。</li><li>DB.AT5.8XLARGE128： 高IO型服务器：32核心128GB内存，2*7180GB本地NvME SSDB。</li></ul>
     * @param integer $CPU <p>节点CPU大小</p><p>单位：核</p>
     * @param integer $Memory <p>节点内存</p><p>单位：GiB</p>
     * @param SystemDisk $SystemDisk <p>系统盘信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DataDisks <p>数据盘信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OsName <p>节点的操作系统名称</p>
     * @param string $ImageId <p>节点的操作系统镜像ID</p>
     * @param string $VpcId <p>节点SSH Endpoint 所属的VPC ID</p>
     * @param string $SubnetId <p>节点SSH Endpoint 所属的VPC 子网ID</p>
     * @param string $Status <p>节点状态</p><p>枚举值：</p><ul><li>Creating： 创建中</li><li>Running： 运行中</li><li>Isolating： 隔离中</li><li>Isolated： 已隔离</li><li>Activating： 解除隔离中</li><li>Destroying： 销毁中</li></ul>
     * @param string $ChargeType <p>付费类型</p><p>枚举值：</p><ul><li>PREPAID： 包年包月</li></ul>
     * @param string $ExpireTime <p>节点到期时间</p>
     * @param string $CreatedTime <p>节点创建时间</p>
     * @param string $IsolatedTime <p>节点隔离时间</p>
     * @param array $Tags <p>节点标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoRenew <p>节点是否自动续费标记</p><p>枚举值：</p><ul><li>1： 自动续费</li><li>0： 不自动续费</li></ul>
     * @param string $SwitchId <p>交换机ID（已加密）</p>
     * @param string $RackId <p>机架ID（已加密）</p>
     * @param string $HostIp <p>底层物理机IP（已加密）</p>
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
        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("SSHEndpoint",$param) and $param["SSHEndpoint"] !== null) {
            $this->SSHEndpoint = $param["SSHEndpoint"];
        }

        if (array_key_exists("LanIP",$param) and $param["LanIP"] !== null) {
            $this->LanIP = $param["LanIP"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new SystemDisk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("IsolatedTime",$param) and $param["IsolatedTime"] !== null) {
            $this->IsolatedTime = $param["IsolatedTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("SwitchId",$param) and $param["SwitchId"] !== null) {
            $this->SwitchId = $param["SwitchId"];
        }

        if (array_key_exists("RackId",$param) and $param["RackId"] !== null) {
            $this->RackId = $param["RackId"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }
    }
}
