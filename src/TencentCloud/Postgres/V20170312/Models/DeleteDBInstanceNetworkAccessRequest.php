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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteDBInstanceNetworkAccess请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID，形如：postgres-6bwgamo3。
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID，形如：postgres-6bwgamo3。
 * @method string getVpcId() 获取私有网络统一 ID，若是基础网络则传"0"。
 * @method void setVpcId(string $VpcId) 设置私有网络统一 ID，若是基础网络则传"0"。
 * @method string getSubnetId() 获取子网ID，若是基础网络则传"0"。
 * @method void setSubnetId(string $SubnetId) 设置子网ID，若是基础网络则传"0"。
 * @method string getVip() 获取目标VIP地址。
 * @method void setVip(string $Vip) 设置目标VIP地址。
 */
class DeleteDBInstanceNetworkAccessRequest extends AbstractModel
{
    /**
     * @var string 实例ID，形如：postgres-6bwgamo3。
     */
    public $DBInstanceId;

    /**
     * @var string 私有网络统一 ID，若是基础网络则传"0"。
     */
    public $VpcId;

    /**
     * @var string 子网ID，若是基础网络则传"0"。
     */
    public $SubnetId;

    /**
     * @var string 目标VIP地址。
     */
    public $Vip;

    /**
     * @param string $DBInstanceId 实例ID，形如：postgres-6bwgamo3。
     * @param string $VpcId 私有网络统一 ID，若是基础网络则传"0"。
     * @param string $SubnetId 子网ID，若是基础网络则传"0"。
     * @param string $Vip 目标VIP地址。
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }
    }
}
