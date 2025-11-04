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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 私网网关对象
 *
 * @method string getNatGatewayId() 获取私网网关`ID`。
 * @method void setNatGatewayId(string $NatGatewayId) 设置私网网关`ID`。
 * @method string getNatGatewayName() 获取私网网关名称。
 * @method void setNatGatewayName(string $NatGatewayName) 设置私网网关名称。
 * @method string getVpcId() 获取私网网关关联`VPC`实例`ID`。
 * @method void setVpcId(string $VpcId) 设置私网网关关联`VPC`实例`ID`。
 * @method string getStatus() 获取私网网关当前状态。
 * @method void setStatus(string $Status) 设置私网网关当前状态。
 * @method boolean getCrossDomain() 获取私网网关跨域标志。
 * @method void setCrossDomain(boolean $CrossDomain) 设置私网网关跨域标志。
 * @method string getCreatedTime() 获取创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
 * @method array getTagSet() 获取标签键值对。
 * @method void setTagSet(array $TagSet) 设置标签键值对。
 * @method array getDirectConnectGatewayIds() 获取专线网关唯一`ID`
 * @method void setDirectConnectGatewayIds(array $DirectConnectGatewayIds) 设置专线网关唯一`ID`
 * @method string getNatType() 获取私网网关类型。可选类型："DCG","VPC","CCN"，分别对应专线网关、私有网络、云联网。
 * @method void setNatType(string $NatType) 设置私网网关类型。可选类型："DCG","VPC","CCN"，分别对应专线网关、私有网络、云联网。
 * @method PrivateNatCrossDomainInfo getCrossDomainInfo() 获取私网NAT跨域信息
 * @method void setCrossDomainInfo(PrivateNatCrossDomainInfo $CrossDomainInfo) 设置私网NAT跨域信息
 * @method boolean getVpcType() 获取是否VPC型私网网关
 * @method void setVpcType(boolean $VpcType) 设置是否VPC型私网网关
 * @method string getCcnId() 获取跨域私网NAT关联的云联网ID	
 * @method void setCcnId(string $CcnId) 设置跨域私网NAT关联的云联网ID	
 * @method boolean getDeletionProtectionEnabled() 获取私网NAT是否开启删除保护
 * @method void setDeletionProtectionEnabled(boolean $DeletionProtectionEnabled) 设置私网NAT是否开启删除保护
 */
class PrivateNatGateway extends AbstractModel
{
    /**
     * @var string 私网网关`ID`。
     */
    public $NatGatewayId;

    /**
     * @var string 私网网关名称。
     */
    public $NatGatewayName;

    /**
     * @var string 私网网关关联`VPC`实例`ID`。
     */
    public $VpcId;

    /**
     * @var string 私网网关当前状态。
     */
    public $Status;

    /**
     * @var boolean 私网网关跨域标志。
     */
    public $CrossDomain;

    /**
     * @var string 创建时间
     */
    public $CreatedTime;

    /**
     * @var array 标签键值对。
     */
    public $TagSet;

    /**
     * @var array 专线网关唯一`ID`
     */
    public $DirectConnectGatewayIds;

    /**
     * @var string 私网网关类型。可选类型："DCG","VPC","CCN"，分别对应专线网关、私有网络、云联网。
     */
    public $NatType;

    /**
     * @var PrivateNatCrossDomainInfo 私网NAT跨域信息
     */
    public $CrossDomainInfo;

    /**
     * @var boolean 是否VPC型私网网关
     */
    public $VpcType;

    /**
     * @var string 跨域私网NAT关联的云联网ID	
     */
    public $CcnId;

    /**
     * @var boolean 私网NAT是否开启删除保护
     */
    public $DeletionProtectionEnabled;

    /**
     * @param string $NatGatewayId 私网网关`ID`。
     * @param string $NatGatewayName 私网网关名称。
     * @param string $VpcId 私网网关关联`VPC`实例`ID`。
     * @param string $Status 私网网关当前状态。
     * @param boolean $CrossDomain 私网网关跨域标志。
     * @param string $CreatedTime 创建时间
     * @param array $TagSet 标签键值对。
     * @param array $DirectConnectGatewayIds 专线网关唯一`ID`
     * @param string $NatType 私网网关类型。可选类型："DCG","VPC","CCN"，分别对应专线网关、私有网络、云联网。
     * @param PrivateNatCrossDomainInfo $CrossDomainInfo 私网NAT跨域信息
     * @param boolean $VpcType 是否VPC型私网网关
     * @param string $CcnId 跨域私网NAT关联的云联网ID	
     * @param boolean $DeletionProtectionEnabled 私网NAT是否开启删除保护
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
        if (array_key_exists("NatGatewayId",$param) and $param["NatGatewayId"] !== null) {
            $this->NatGatewayId = $param["NatGatewayId"];
        }

        if (array_key_exists("NatGatewayName",$param) and $param["NatGatewayName"] !== null) {
            $this->NatGatewayName = $param["NatGatewayName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CrossDomain",$param) and $param["CrossDomain"] !== null) {
            $this->CrossDomain = $param["CrossDomain"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("DirectConnectGatewayIds",$param) and $param["DirectConnectGatewayIds"] !== null) {
            $this->DirectConnectGatewayIds = $param["DirectConnectGatewayIds"];
        }

        if (array_key_exists("NatType",$param) and $param["NatType"] !== null) {
            $this->NatType = $param["NatType"];
        }

        if (array_key_exists("CrossDomainInfo",$param) and $param["CrossDomainInfo"] !== null) {
            $this->CrossDomainInfo = new PrivateNatCrossDomainInfo();
            $this->CrossDomainInfo->deserialize($param["CrossDomainInfo"]);
        }

        if (array_key_exists("VpcType",$param) and $param["VpcType"] !== null) {
            $this->VpcType = $param["VpcType"];
        }

        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("DeletionProtectionEnabled",$param) and $param["DeletionProtectionEnabled"] !== null) {
            $this->DeletionProtectionEnabled = $param["DeletionProtectionEnabled"];
        }
    }
}
