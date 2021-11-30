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
 * 查询关联账号VPC列表出参
 *
 * @method string getVpcId() 获取VpcId： vpc-xadsafsdasd
 * @method void setVpcId(string $VpcId) 设置VpcId： vpc-xadsafsdasd
 * @method string getRegion() 获取Vpc所属地区: ap-guangzhou, ap-shanghai
 * @method void setRegion(string $Region) 设置Vpc所属地区: ap-guangzhou, ap-shanghai
 * @method string getUin() 获取Vpc所属账号: 123456789
 * @method void setUin(string $Uin) 设置Vpc所属账号: 123456789
 * @method string getVpcName() 获取vpc资源名称：testname
 * @method void setVpcName(string $VpcName) 设置vpc资源名称：testname
 */
class AccountVpcInfoOut extends AbstractModel
{
    /**
     * @var string VpcId： vpc-xadsafsdasd
     */
    public $VpcId;

    /**
     * @var string Vpc所属地区: ap-guangzhou, ap-shanghai
     */
    public $Region;

    /**
     * @var string Vpc所属账号: 123456789
     */
    public $Uin;

    /**
     * @var string vpc资源名称：testname
     */
    public $VpcName;

    /**
     * @param string $VpcId VpcId： vpc-xadsafsdasd
     * @param string $Region Vpc所属地区: ap-guangzhou, ap-shanghai
     * @param string $Uin Vpc所属账号: 123456789
     * @param string $VpcName vpc资源名称：testname
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }
    }
}
