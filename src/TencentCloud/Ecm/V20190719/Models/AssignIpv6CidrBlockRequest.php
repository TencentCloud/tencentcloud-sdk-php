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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssignIpv6CidrBlock请求参数结构体
 *
 * @method string getVpcId() 获取`VPC`实例`ID`，形如：`vpc-f49l6u0z`。	
 * @method void setVpcId(string $VpcId) 设置`VPC`实例`ID`，形如：`vpc-f49l6u0z`。	
 * @method string getISPType() 获取网络运营商类型 'CMCC'-中国移动, 'CTCC'-中国电信, 'CUCC'-中国联调	
 * @method void setISPType(string $ISPType) 设置网络运营商类型 'CMCC'-中国移动, 'CTCC'-中国电信, 'CUCC'-中国联调	
 * @method string getEcmRegion() 获取ECM地域。
 * @method void setEcmRegion(string $EcmRegion) 设置ECM地域。
 */
class AssignIpv6CidrBlockRequest extends AbstractModel
{
    /**
     * @var string `VPC`实例`ID`，形如：`vpc-f49l6u0z`。	
     */
    public $VpcId;

    /**
     * @var string 网络运营商类型 'CMCC'-中国移动, 'CTCC'-中国电信, 'CUCC'-中国联调	
     */
    public $ISPType;

    /**
     * @var string ECM地域。
     */
    public $EcmRegion;

    /**
     * @param string $VpcId `VPC`实例`ID`，形如：`vpc-f49l6u0z`。	
     * @param string $ISPType 网络运营商类型 'CMCC'-中国移动, 'CTCC'-中国电信, 'CUCC'-中国联调	
     * @param string $EcmRegion ECM地域。
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("ISPType",$param) and $param["ISPType"] !== null) {
            $this->ISPType = $param["ISPType"];
        }

        if (array_key_exists("EcmRegion",$param) and $param["EcmRegion"] !== null) {
            $this->EcmRegion = $param["EcmRegion"];
        }
    }
}
