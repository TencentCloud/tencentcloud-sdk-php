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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 私有网络配置。
 *
 * @method string getVPCId() 获取<p>私有网络ID（VPCId和VPCCIDRBlock必选其一。若使用VPCId，则使用现用私有网络；若使用VPCCIDRBlock，则创建新的私有网络）</p>
 * @method void setVPCId(string $VPCId) 设置<p>私有网络ID（VPCId和VPCCIDRBlock必选其一。若使用VPCId，则使用现用私有网络；若使用VPCCIDRBlock，则创建新的私有网络）</p>
 * @method string getSubnetId() 获取<p>子网ID（SubnetId和SubnetZone&amp;SubnetCIDRBlock必选其一。若使用SubnetId，则使用现用子网；若使用SubnetZone&amp;SubnetCIDRBlock，则创建新的子网）</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网ID（SubnetId和SubnetZone&amp;SubnetCIDRBlock必选其一。若使用SubnetId，则使用现用子网；若使用SubnetZone&amp;SubnetCIDRBlock，则创建新的子网）</p>
 * @method string getSubnetZone() 获取<p>子网可用区。</p>
 * @method void setSubnetZone(string $SubnetZone) 设置<p>子网可用区。</p>
 * @method string getVPCCIDRBlock() 获取<p>私有网络CIDR。</p>
 * @method void setVPCCIDRBlock(string $VPCCIDRBlock) 设置<p>私有网络CIDR。</p>
 * @method string getSubnetCIDRBlock() 获取<p>子网CIDR。</p>
 * @method void setSubnetCIDRBlock(string $SubnetCIDRBlock) 设置<p>子网CIDR。</p>
 */
class VPCOption extends AbstractModel
{
    /**
     * @var string <p>私有网络ID（VPCId和VPCCIDRBlock必选其一。若使用VPCId，则使用现用私有网络；若使用VPCCIDRBlock，则创建新的私有网络）</p>
     */
    public $VPCId;

    /**
     * @var string <p>子网ID（SubnetId和SubnetZone&amp;SubnetCIDRBlock必选其一。若使用SubnetId，则使用现用子网；若使用SubnetZone&amp;SubnetCIDRBlock，则创建新的子网）</p>
     */
    public $SubnetId;

    /**
     * @var string <p>子网可用区。</p>
     */
    public $SubnetZone;

    /**
     * @var string <p>私有网络CIDR。</p>
     */
    public $VPCCIDRBlock;

    /**
     * @var string <p>子网CIDR。</p>
     */
    public $SubnetCIDRBlock;

    /**
     * @param string $VPCId <p>私有网络ID（VPCId和VPCCIDRBlock必选其一。若使用VPCId，则使用现用私有网络；若使用VPCCIDRBlock，则创建新的私有网络）</p>
     * @param string $SubnetId <p>子网ID（SubnetId和SubnetZone&amp;SubnetCIDRBlock必选其一。若使用SubnetId，则使用现用子网；若使用SubnetZone&amp;SubnetCIDRBlock，则创建新的子网）</p>
     * @param string $SubnetZone <p>子网可用区。</p>
     * @param string $VPCCIDRBlock <p>私有网络CIDR。</p>
     * @param string $SubnetCIDRBlock <p>子网CIDR。</p>
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
        if (array_key_exists("VPCId",$param) and $param["VPCId"] !== null) {
            $this->VPCId = $param["VPCId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetZone",$param) and $param["SubnetZone"] !== null) {
            $this->SubnetZone = $param["SubnetZone"];
        }

        if (array_key_exists("VPCCIDRBlock",$param) and $param["VPCCIDRBlock"] !== null) {
            $this->VPCCIDRBlock = $param["VPCCIDRBlock"];
        }

        if (array_key_exists("SubnetCIDRBlock",$param) and $param["SubnetCIDRBlock"] !== null) {
            $this->SubnetCIDRBlock = $param["SubnetCIDRBlock"];
        }
    }
}
