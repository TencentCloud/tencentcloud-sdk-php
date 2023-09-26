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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 边界防火墙公网IP开关列表
 *
 * @method string getPublicIp() 获取公网IP
 * @method void setPublicIp(string $PublicIp) 设置公网IP
 * @method integer getPublicIpType() 获取公网 IP 类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicIpType(integer $PublicIpType) 设置公网 IP 类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取实例名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置实例名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIntranetIp() 获取内网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntranetIp(string $IntranetIp) 设置内网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetType() 获取资产类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetType(string $AssetType) 设置资产类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPortRiskCount() 获取风险端口数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPortRiskCount(integer $PortRiskCount) 设置风险端口数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastScanTime() 获取最近扫描时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastScanTime(string $LastScanTime) 设置最近扫描时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsRegionEip() 获取是否为region eip
0 不为region eip，不能选择串行
1 为region eip 可以选择串行
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsRegionEip(integer $IsRegionEip) 设置是否为region eip
0 不为region eip，不能选择串行
1 为region eip 可以选择串行
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取EIP 所关联的VPC
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置EIP 所关联的VPC
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsSerialRegion() 获取0: 该地域暂未支持串行
1: 该用户未在该地域配置串行带宽
2: 该用户已在该地域配置串行带宽，可以开启串行开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsSerialRegion(integer $IsSerialRegion) 设置0: 该地域暂未支持串行
1: 该用户未在该地域配置串行带宽
2: 该用户已在该地域配置串行带宽，可以开启串行开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsPublicClb() 获取0: 不是公网CLB 可以开启串行开关
1: 是公网CLB 不可以开启串行开关

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsPublicClb(integer $IsPublicClb) 设置0: 不是公网CLB 可以开启串行开关
1: 是公网CLB 不可以开启串行开关

注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEndpointBindEipNum() 获取0: 开启开关时提示要创建私有连接。
1: 关闭该开关是提示删除私有连接。
如果大于 1: 关闭开关 、开启开关不需提示创建删除私有连接。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndpointBindEipNum(integer $EndpointBindEipNum) 设置0: 开启开关时提示要创建私有连接。
1: 关闭该开关是提示删除私有连接。
如果大于 1: 关闭开关 、开启开关不需提示创建删除私有连接。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScanMode() 获取扫描深度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanMode(string $ScanMode) 设置扫描深度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScanStatus() 获取扫描状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanStatus(integer $ScanStatus) 设置扫描状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取开关状态
0 : 关闭
1 : 开启
2 : 开启中
3 : 关闭中
4 : 异常
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置开关状态
0 : 关闭
1 : 开启
2 : 开启中
3 : 关闭中
4 : 异常
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndpointId() 获取私有连接ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndpointId(string $EndpointId) 设置私有连接ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndpointIp() 获取私有连接IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndpointIp(string $EndpointIp) 设置私有连接IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSwitchMode() 获取0 : 旁路
1 : 串行
2 : 正在模式切换
 * @method void setSwitchMode(integer $SwitchMode) 设置0 : 旁路
1 : 串行
2 : 正在模式切换
 * @method integer getSwitchWeight() 获取开关权重
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitchWeight(integer $SwitchWeight) 设置开关权重
注意：此字段可能返回 null，表示取不到有效值。
 */
class EdgeIpInfo extends AbstractModel
{
    /**
     * @var string 公网IP
     */
    public $PublicIp;

    /**
     * @var integer 公网 IP 类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicIpType;

    /**
     * @var string 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 实例名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string 内网IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntranetIp;

    /**
     * @var string 资产类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetType;

    /**
     * @var string 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var integer 风险端口数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PortRiskCount;

    /**
     * @var string 最近扫描时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastScanTime;

    /**
     * @var integer 是否为region eip
0 不为region eip，不能选择串行
1 为region eip 可以选择串行
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsRegionEip;

    /**
     * @var string EIP 所关联的VPC
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var integer 0: 该地域暂未支持串行
1: 该用户未在该地域配置串行带宽
2: 该用户已在该地域配置串行带宽，可以开启串行开关
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsSerialRegion;

    /**
     * @var integer 0: 不是公网CLB 可以开启串行开关
1: 是公网CLB 不可以开启串行开关

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsPublicClb;

    /**
     * @var integer 0: 开启开关时提示要创建私有连接。
1: 关闭该开关是提示删除私有连接。
如果大于 1: 关闭开关 、开启开关不需提示创建删除私有连接。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndpointBindEipNum;

    /**
     * @var string 扫描深度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanMode;

    /**
     * @var integer 扫描状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanStatus;

    /**
     * @var integer 开关状态
0 : 关闭
1 : 开启
2 : 开启中
3 : 关闭中
4 : 异常
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 私有连接ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndpointId;

    /**
     * @var string 私有连接IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndpointIp;

    /**
     * @var integer 0 : 旁路
1 : 串行
2 : 正在模式切换
     */
    public $SwitchMode;

    /**
     * @var integer 开关权重
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SwitchWeight;

    /**
     * @param string $PublicIp 公网IP
     * @param integer $PublicIpType 公网 IP 类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName 实例名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IntranetIp 内网IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetType 资产类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PortRiskCount 风险端口数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastScanTime 最近扫描时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsRegionEip 是否为region eip
0 不为region eip，不能选择串行
1 为region eip 可以选择串行
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId EIP 所关联的VPC
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsSerialRegion 0: 该地域暂未支持串行
1: 该用户未在该地域配置串行带宽
2: 该用户已在该地域配置串行带宽，可以开启串行开关
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsPublicClb 0: 不是公网CLB 可以开启串行开关
1: 是公网CLB 不可以开启串行开关

注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EndpointBindEipNum 0: 开启开关时提示要创建私有连接。
1: 关闭该开关是提示删除私有连接。
如果大于 1: 关闭开关 、开启开关不需提示创建删除私有连接。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScanMode 扫描深度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScanStatus 扫描状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 开关状态
0 : 关闭
1 : 开启
2 : 开启中
3 : 关闭中
4 : 异常
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndpointId 私有连接ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndpointIp 私有连接IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SwitchMode 0 : 旁路
1 : 串行
2 : 正在模式切换
     * @param integer $SwitchWeight 开关权重
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PublicIpType",$param) and $param["PublicIpType"] !== null) {
            $this->PublicIpType = $param["PublicIpType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("IntranetIp",$param) and $param["IntranetIp"] !== null) {
            $this->IntranetIp = $param["IntranetIp"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("PortRiskCount",$param) and $param["PortRiskCount"] !== null) {
            $this->PortRiskCount = $param["PortRiskCount"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("IsRegionEip",$param) and $param["IsRegionEip"] !== null) {
            $this->IsRegionEip = $param["IsRegionEip"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("IsSerialRegion",$param) and $param["IsSerialRegion"] !== null) {
            $this->IsSerialRegion = $param["IsSerialRegion"];
        }

        if (array_key_exists("IsPublicClb",$param) and $param["IsPublicClb"] !== null) {
            $this->IsPublicClb = $param["IsPublicClb"];
        }

        if (array_key_exists("EndpointBindEipNum",$param) and $param["EndpointBindEipNum"] !== null) {
            $this->EndpointBindEipNum = $param["EndpointBindEipNum"];
        }

        if (array_key_exists("ScanMode",$param) and $param["ScanMode"] !== null) {
            $this->ScanMode = $param["ScanMode"];
        }

        if (array_key_exists("ScanStatus",$param) and $param["ScanStatus"] !== null) {
            $this->ScanStatus = $param["ScanStatus"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EndpointId",$param) and $param["EndpointId"] !== null) {
            $this->EndpointId = $param["EndpointId"];
        }

        if (array_key_exists("EndpointIp",$param) and $param["EndpointIp"] !== null) {
            $this->EndpointIp = $param["EndpointIp"];
        }

        if (array_key_exists("SwitchMode",$param) and $param["SwitchMode"] !== null) {
            $this->SwitchMode = $param["SwitchMode"];
        }

        if (array_key_exists("SwitchWeight",$param) and $param["SwitchWeight"] !== null) {
            $this->SwitchWeight = $param["SwitchWeight"];
        }
    }
}
