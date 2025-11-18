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
 * CreatePrivateNatGateway请求参数结构体
 *
 * @method string getNatGatewayName() 获取私网网关名称，限制60个字符
 * @method void setNatGatewayName(string $NatGatewayName) 设置私网网关名称，限制60个字符
 * @method string getVpcId() 获取私有网络实例ID。当创建VPC类型私网NAT网关或者专线网关类型私网NAT网关时，此参数必填。
 * @method void setVpcId(string $VpcId) 设置私有网络实例ID。当创建VPC类型私网NAT网关或者专线网关类型私网NAT网关时，此参数必填。
 * @method boolean getCrossDomain() 获取跨域参数。仅当取值为True时，才会支持跨域绑定VPC。
 * @method void setCrossDomain(boolean $CrossDomain) 设置跨域参数。仅当取值为True时，才会支持跨域绑定VPC。
 * @method array getTags() 获取实例标签
 * @method void setTags(array $Tags) 设置实例标签
 * @method boolean getVpcType() 获取VPC类型私网NAT网关。仅当取值为True时，才会创建VPC类型私网NAT网关。
 * @method void setVpcType(boolean $VpcType) 设置VPC类型私网NAT网关。仅当取值为True时，才会创建VPC类型私网NAT网关。
 * @method string getCcnId() 获取云联网类型私网NAT网关需要绑定的云联网实例ID。
 * @method void setCcnId(string $CcnId) 设置云联网类型私网NAT网关需要绑定的云联网实例ID。
 * @method boolean getDeletionProtectionEnabled() 获取私网NAT实例是否开启删除保护
 * @method void setDeletionProtectionEnabled(boolean $DeletionProtectionEnabled) 设置私网NAT实例是否开启删除保护
 */
class CreatePrivateNatGatewayRequest extends AbstractModel
{
    /**
     * @var string 私网网关名称，限制60个字符
     */
    public $NatGatewayName;

    /**
     * @var string 私有网络实例ID。当创建VPC类型私网NAT网关或者专线网关类型私网NAT网关时，此参数必填。
     */
    public $VpcId;

    /**
     * @var boolean 跨域参数。仅当取值为True时，才会支持跨域绑定VPC。
     */
    public $CrossDomain;

    /**
     * @var array 实例标签
     */
    public $Tags;

    /**
     * @var boolean VPC类型私网NAT网关。仅当取值为True时，才会创建VPC类型私网NAT网关。
     */
    public $VpcType;

    /**
     * @var string 云联网类型私网NAT网关需要绑定的云联网实例ID。
     */
    public $CcnId;

    /**
     * @var boolean 私网NAT实例是否开启删除保护
     */
    public $DeletionProtectionEnabled;

    /**
     * @param string $NatGatewayName 私网网关名称，限制60个字符
     * @param string $VpcId 私有网络实例ID。当创建VPC类型私网NAT网关或者专线网关类型私网NAT网关时，此参数必填。
     * @param boolean $CrossDomain 跨域参数。仅当取值为True时，才会支持跨域绑定VPC。
     * @param array $Tags 实例标签
     * @param boolean $VpcType VPC类型私网NAT网关。仅当取值为True时，才会创建VPC类型私网NAT网关。
     * @param string $CcnId 云联网类型私网NAT网关需要绑定的云联网实例ID。
     * @param boolean $DeletionProtectionEnabled 私网NAT实例是否开启删除保护
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
        if (array_key_exists("NatGatewayName",$param) and $param["NatGatewayName"] !== null) {
            $this->NatGatewayName = $param["NatGatewayName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("CrossDomain",$param) and $param["CrossDomain"] !== null) {
            $this->CrossDomain = $param["CrossDomain"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
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
