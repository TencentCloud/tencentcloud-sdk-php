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
 * 私有域解析账号Vpc信息
 *
 * @method string getUniqVpcId() 获取VpcId： vpc-xadsafsdasd
 * @method void setUniqVpcId(string $UniqVpcId) 设置VpcId： vpc-xadsafsdasd
 * @method string getRegion() 获取Vpc所属地区: ap-guangzhou, ap-shanghai
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置Vpc所属地区: ap-guangzhou, ap-shanghai
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取Vpc所属账号: 123456789
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置Vpc所属账号: 123456789
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcName() 获取vpc资源名称：testname
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcName(string $VpcName) 设置vpc资源名称：testname
注意：此字段可能返回 null，表示取不到有效值。
 */
class AccountVpcInfo extends AbstractModel
{
    /**
     * @var string VpcId： vpc-xadsafsdasd
     */
    public $UniqVpcId;

    /**
     * @var string Vpc所属地区: ap-guangzhou, ap-shanghai
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string Vpc所属账号: 123456789
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var string vpc资源名称：testname
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcName;

    /**
     * @param string $UniqVpcId VpcId： vpc-xadsafsdasd
     * @param string $Region Vpc所属地区: ap-guangzhou, ap-shanghai
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin Vpc所属账号: 123456789
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcName vpc资源名称：testname
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
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
