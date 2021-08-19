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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 私有网络信息
 *
 * @method string getVpcId() 获取Vpc Id
 * @method void setVpcId(string $VpcId) 设置Vpc Id
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method string getIntranetAddress() 获取内网访问地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntranetAddress(string $IntranetAddress) 设置内网访问地址
注意：此字段可能返回 null，表示取不到有效值。
 */
class VpcInfo extends AbstractModel
{
    /**
     * @var string Vpc Id
     */
    public $VpcId;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var string 内网访问地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntranetAddress;

    /**
     * @param string $VpcId Vpc Id
     * @param string $SubnetId 子网ID
     * @param string $IntranetAddress 内网访问地址
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("IntranetAddress",$param) and $param["IntranetAddress"] !== null) {
            $this->IntranetAddress = $param["IntranetAddress"];
        }
    }
}
