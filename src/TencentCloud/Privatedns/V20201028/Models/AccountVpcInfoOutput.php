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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 关联的VPC出参
 *
 * @method string getUin() 获取关联账户的uin
 * @method void setUin(string $Uin) 设置关联账户的uin
 * @method string getUniqVpcId() 获取vpcid
 * @method void setUniqVpcId(string $UniqVpcId) 设置vpcid
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 */
class AccountVpcInfoOutput extends AbstractModel
{
    /**
     * @var string 关联账户的uin
     */
    public $Uin;

    /**
     * @var string vpcid
     */
    public $UniqVpcId;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @param string $Uin 关联账户的uin
     * @param string $UniqVpcId vpcid
     * @param string $Region 地域
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
