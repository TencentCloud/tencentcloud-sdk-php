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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询国标设备地址列表
 *
 * @method array getRemoteAddrs() 获取设备地址列表
 * @method void setRemoteAddrs(array $RemoteAddrs) 设置设备地址列表
 */
class DescribeDeviceAddrList extends AbstractModel
{
    /**
     * @var array 设备地址列表
     */
    public $RemoteAddrs;

    /**
     * @param array $RemoteAddrs 设备地址列表
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
        if (array_key_exists("RemoteAddrs",$param) and $param["RemoteAddrs"] !== null) {
            $this->RemoteAddrs = [];
            foreach ($param["RemoteAddrs"] as $key => $value){
                $obj = new RemoteAddrInfo();
                $obj->deserialize($value);
                array_push($this->RemoteAddrs, $obj);
            }
        }
    }
}
