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
namespace TencentCloud\Bmvpc\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeregisterIps请求参数结构体
 *
 * @method string getVpcId() 获取私有网络ID
 * @method void setVpcId(string $VpcId) 设置私有网络ID
 * @method array getIpSet() 获取注销指定IP的列表
 * @method void setIpSet(array $IpSet) 设置注销指定IP的列表
 * @method string getSubnetId() 获取私有网络子网ID
 * @method void setSubnetId(string $SubnetId) 设置私有网络子网ID
 */
class DeregisterIpsRequest extends AbstractModel
{
    /**
     * @var string 私有网络ID
     */
    public $VpcId;

    /**
     * @var array 注销指定IP的列表
     */
    public $IpSet;

    /**
     * @var string 私有网络子网ID
     */
    public $SubnetId;

    /**
     * @param string $VpcId 私有网络ID
     * @param array $IpSet 注销指定IP的列表
     * @param string $SubnetId 私有网络子网ID
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
        if (array_key_exists('VpcId',$param) and $param['VpcId'] !== null) {
            $this->VpcId = $param['VpcId'];
        }

        if (array_key_exists('IpSet',$param) and $param['IpSet'] !== null) {
            $this->IpSet = $param['IpSet'];
        }

        if (array_key_exists('SubnetId',$param) and $param['SubnetId'] !== null) {
            $this->SubnetId = $param['SubnetId'];
        }
    }
}
