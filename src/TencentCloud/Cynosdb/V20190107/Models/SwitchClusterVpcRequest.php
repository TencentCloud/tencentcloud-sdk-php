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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SwitchClusterVpc请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getUniqVpcId() 获取字符串vpc id
 * @method void setUniqVpcId(string $UniqVpcId) 设置字符串vpc id
 * @method string getUniqSubnetId() 获取字符串子网id
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置字符串子网id
 * @method integer getOldIpReserveHours() 获取旧地址回收时间
 * @method void setOldIpReserveHours(integer $OldIpReserveHours) 设置旧地址回收时间
 */
class SwitchClusterVpcRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 字符串vpc id
     */
    public $UniqVpcId;

    /**
     * @var string 字符串子网id
     */
    public $UniqSubnetId;

    /**
     * @var integer 旧地址回收时间
     */
    public $OldIpReserveHours;

    /**
     * @param string $ClusterId 集群ID
     * @param string $UniqVpcId 字符串vpc id
     * @param string $UniqSubnetId 字符串子网id
     * @param integer $OldIpReserveHours 旧地址回收时间
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("OldIpReserveHours",$param) and $param["OldIpReserveHours"] !== null) {
            $this->OldIpReserveHours = $param["OldIpReserveHours"];
        }
    }
}
