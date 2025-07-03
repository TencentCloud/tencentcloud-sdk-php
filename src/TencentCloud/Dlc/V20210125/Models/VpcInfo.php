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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * vpc信息
 *
 * @method string getVpcId() 获取vpc Id
 * @method void setVpcId(string $VpcId) 设置vpc Id
 * @method string getVpcCidrBlock() 获取vpc子网
 * @method void setVpcCidrBlock(string $VpcCidrBlock) 设置vpc子网
 * @method integer getRuleId() 获取规则Id
 * @method void setRuleId(integer $RuleId) 设置规则Id
 * @method string getAccessGroupId() 获取权限组Id
 * @method void setAccessGroupId(string $AccessGroupId) 设置权限组Id
 */
class VpcInfo extends AbstractModel
{
    /**
     * @var string vpc Id
     */
    public $VpcId;

    /**
     * @var string vpc子网
     */
    public $VpcCidrBlock;

    /**
     * @var integer 规则Id
     */
    public $RuleId;

    /**
     * @var string 权限组Id
     */
    public $AccessGroupId;

    /**
     * @param string $VpcId vpc Id
     * @param string $VpcCidrBlock vpc子网
     * @param integer $RuleId 规则Id
     * @param string $AccessGroupId 权限组Id
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

        if (array_key_exists("VpcCidrBlock",$param) and $param["VpcCidrBlock"] !== null) {
            $this->VpcCidrBlock = $param["VpcCidrBlock"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("AccessGroupId",$param) and $param["AccessGroupId"] !== null) {
            $this->AccessGroupId = $param["AccessGroupId"];
        }
    }
}
