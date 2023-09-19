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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPublicNetworkAccessPoint请求参数结构体
 *
 * @method string getClusterId() 获取集群名字
 * @method void setClusterId(string $ClusterId) 设置集群名字
 * @method boolean getPublicNetworkAccessPointStatus() 获取是否开启
 * @method void setPublicNetworkAccessPointStatus(boolean $PublicNetworkAccessPointStatus) 设置是否开启
 * @method string getSwitchOwner() 获取必填，公网控制台的开关/Vpc控制台的开关，示例值，Public/Vpc
 * @method void setSwitchOwner(string $SwitchOwner) 设置必填，公网控制台的开关/Vpc控制台的开关，示例值，Public/Vpc
 * @method string getVpcId() 获取Vpc
 * @method void setVpcId(string $VpcId) 设置Vpc
 * @method string getSubnetId() 获取子网
 * @method void setSubnetId(string $SubnetId) 设置子网
 * @method string getSelectIp() 获取子网下面指定ip作为vpc接入点
 * @method void setSelectIp(string $SelectIp) 设置子网下面指定ip作为vpc接入点
 */
class ModifyPublicNetworkAccessPointRequest extends AbstractModel
{
    /**
     * @var string 集群名字
     */
    public $ClusterId;

    /**
     * @var boolean 是否开启
     */
    public $PublicNetworkAccessPointStatus;

    /**
     * @var string 必填，公网控制台的开关/Vpc控制台的开关，示例值，Public/Vpc
     */
    public $SwitchOwner;

    /**
     * @var string Vpc
     */
    public $VpcId;

    /**
     * @var string 子网
     */
    public $SubnetId;

    /**
     * @var string 子网下面指定ip作为vpc接入点
     */
    public $SelectIp;

    /**
     * @param string $ClusterId 集群名字
     * @param boolean $PublicNetworkAccessPointStatus 是否开启
     * @param string $SwitchOwner 必填，公网控制台的开关/Vpc控制台的开关，示例值，Public/Vpc
     * @param string $VpcId Vpc
     * @param string $SubnetId 子网
     * @param string $SelectIp 子网下面指定ip作为vpc接入点
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("PublicNetworkAccessPointStatus",$param) and $param["PublicNetworkAccessPointStatus"] !== null) {
            $this->PublicNetworkAccessPointStatus = $param["PublicNetworkAccessPointStatus"];
        }

        if (array_key_exists("SwitchOwner",$param) and $param["SwitchOwner"] !== null) {
            $this->SwitchOwner = $param["SwitchOwner"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SelectIp",$param) and $param["SelectIp"] !== null) {
            $this->SelectIp = $param["SelectIp"];
        }
    }
}
