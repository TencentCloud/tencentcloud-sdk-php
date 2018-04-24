<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getUniqVpcId() 获取私有网络ID
 * @method void setUniqVpcId(string $uniqVpcId) 设置私有网络ID
 * @method string getUniqSubnetId() 获取子网ID
 * @method void setUniqSubnetId(string $uniqSubnetId) 设置子网ID
 * @method string getVip() 获取IP地址
 * @method void setVip(string $vip) 设置IP地址
 */

/**
 *CheckIpInSubnet请求参数结构体
 */
class CheckIpInSubnetRequest extends AbstractModel
{
    /**
     * @var string 私有网络ID
     */
    public $uniqVpcId;

    /**
     * @var string 子网ID
     */
    public $uniqSubnetId;

    /**
     * @var string IP地址
     */
    public $vip;
    /**
     * @param string $uniqVpcId 私有网络ID
     * @param string $uniqSubnetId 子网ID
     * @param string $vip IP地址
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->uniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->uniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->vip = $param["Vip"];
        }
    }
}
