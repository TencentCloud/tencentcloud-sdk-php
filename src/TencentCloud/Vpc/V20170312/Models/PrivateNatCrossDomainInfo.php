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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 私网NAT网关跨域信息
 *
 * @method string getCcnId() 获取跨域私网NAT关联的云联网ID
 * @method void setCcnId(string $CcnId) 设置跨域私网NAT关联的云联网ID
 * @method string getLocalVpcId() 获取跨域私网NAT本端Vpc
 * @method void setLocalVpcId(string $LocalVpcId) 设置跨域私网NAT本端Vpc
 * @method string getPeerVpcId() 获取跨域私网NAT对端Vpc
 * @method void setPeerVpcId(string $PeerVpcId) 设置跨域私网NAT对端Vpc
 */
class PrivateNatCrossDomainInfo extends AbstractModel
{
    /**
     * @var string 跨域私网NAT关联的云联网ID
     */
    public $CcnId;

    /**
     * @var string 跨域私网NAT本端Vpc
     */
    public $LocalVpcId;

    /**
     * @var string 跨域私网NAT对端Vpc
     */
    public $PeerVpcId;

    /**
     * @param string $CcnId 跨域私网NAT关联的云联网ID
     * @param string $LocalVpcId 跨域私网NAT本端Vpc
     * @param string $PeerVpcId 跨域私网NAT对端Vpc
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("LocalVpcId",$param) and $param["LocalVpcId"] !== null) {
            $this->LocalVpcId = $param["LocalVpcId"];
        }

        if (array_key_exists("PeerVpcId",$param) and $param["PeerVpcId"] !== null) {
            $this->PeerVpcId = $param["PeerVpcId"];
        }
    }
}
