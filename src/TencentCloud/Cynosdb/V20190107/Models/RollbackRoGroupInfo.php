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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 回档RO组信息
 *
 * @method string getInstanceGroupId() 获取实例组ID
 * @method void setInstanceGroupId(string $InstanceGroupId) 设置实例组ID
 * @method string getUniqVpcId() 获取vpc信息
 * @method void setUniqVpcId(string $UniqVpcId) 设置vpc信息
 * @method string getUniqSubnetId() 获取子网信息
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置子网信息
 * @method string getVip() 获取vip信息
 * @method void setVip(string $Vip) 设置vip信息
 * @method integer getVport() 获取vport信息
 * @method void setVport(integer $Vport) 设置vport信息
 */
class RollbackRoGroupInfo extends AbstractModel
{
    /**
     * @var string 实例组ID
     */
    public $InstanceGroupId;

    /**
     * @var string vpc信息
     */
    public $UniqVpcId;

    /**
     * @var string 子网信息
     */
    public $UniqSubnetId;

    /**
     * @var string vip信息
     */
    public $Vip;

    /**
     * @var integer vport信息
     */
    public $Vport;

    /**
     * @param string $InstanceGroupId 实例组ID
     * @param string $UniqVpcId vpc信息
     * @param string $UniqSubnetId 子网信息
     * @param string $Vip vip信息
     * @param integer $Vport vport信息
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
        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }
    }
}
