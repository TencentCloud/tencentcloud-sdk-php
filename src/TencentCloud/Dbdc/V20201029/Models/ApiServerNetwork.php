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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 连通 DB Custom 集群 API Server 的网络配置。
 *
 * @method string getVpcId() 获取<p>API Server的访问私有网络ID</p>
 * @method void setVpcId(string $VpcId) 设置<p>API Server的访问私有网络ID</p>
 * @method string getSubnetId() 获取<p>API Server的访问私有网络子网ID</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>API Server的访问私有网络子网ID</p>
 */
class ApiServerNetwork extends AbstractModel
{
    /**
     * @var string <p>API Server的访问私有网络ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>API Server的访问私有网络子网ID</p>
     */
    public $SubnetId;

    /**
     * @param string $VpcId <p>API Server的访问私有网络ID</p>
     * @param string $SubnetId <p>API Server的访问私有网络子网ID</p>
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
    }
}
