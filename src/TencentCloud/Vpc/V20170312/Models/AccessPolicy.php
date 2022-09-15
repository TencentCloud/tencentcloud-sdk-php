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
 * 策略信息
 *
 * @method string getTargetCidr() 获取目的CIDR
 * @method void setTargetCidr(string $TargetCidr) 设置目的CIDR
 * @method string getVpnGatewayIdSslAccessPolicyId() 获取策略ID
 * @method void setVpnGatewayIdSslAccessPolicyId(string $VpnGatewayIdSslAccessPolicyId) 设置策略ID
 * @method integer getForAllClient() 获取是否对所有用户都生效。1 生效 0不生效
 * @method void setForAllClient(integer $ForAllClient) 设置是否对所有用户都生效。1 生效 0不生效
 * @method array getUserGroupIds() 获取用户组ID
 * @method void setUserGroupIds(array $UserGroupIds) 设置用户组ID
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 */
class AccessPolicy extends AbstractModel
{
    /**
     * @var string 目的CIDR
     */
    public $TargetCidr;

    /**
     * @var string 策略ID
     */
    public $VpnGatewayIdSslAccessPolicyId;

    /**
     * @var integer 是否对所有用户都生效。1 生效 0不生效
     */
    public $ForAllClient;

    /**
     * @var array 用户组ID
     */
    public $UserGroupIds;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @param string $TargetCidr 目的CIDR
     * @param string $VpnGatewayIdSslAccessPolicyId 策略ID
     * @param integer $ForAllClient 是否对所有用户都生效。1 生效 0不生效
     * @param array $UserGroupIds 用户组ID
     * @param string $UpdateTime 更新时间
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
        if (array_key_exists("TargetCidr",$param) and $param["TargetCidr"] !== null) {
            $this->TargetCidr = $param["TargetCidr"];
        }

        if (array_key_exists("VpnGatewayIdSslAccessPolicyId",$param) and $param["VpnGatewayIdSslAccessPolicyId"] !== null) {
            $this->VpnGatewayIdSslAccessPolicyId = $param["VpnGatewayIdSslAccessPolicyId"];
        }

        if (array_key_exists("ForAllClient",$param) and $param["ForAllClient"] !== null) {
            $this->ForAllClient = $param["ForAllClient"];
        }

        if (array_key_exists("UserGroupIds",$param) and $param["UserGroupIds"] !== null) {
            $this->UserGroupIds = $param["UserGroupIds"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
