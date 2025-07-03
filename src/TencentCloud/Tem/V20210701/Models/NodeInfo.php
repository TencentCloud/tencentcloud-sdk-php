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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * node信息
 *
 * @method string getName() 获取node名字
 * @method void setName(string $Name) 设置node名字
 * @method string getZone() 获取node可用区
 * @method void setZone(string $Zone) 设置node可用区
 * @method string getSubnetId() 获取node子网ID
 * @method void setSubnetId(string $SubnetId) 设置node子网ID
 * @method string getAvailableIpCount() 获取可用IP数
 * @method void setAvailableIpCount(string $AvailableIpCount) 设置可用IP数
 * @method string getCidr() 获取cidr块
 * @method void setCidr(string $Cidr) 设置cidr块
 */
class NodeInfo extends AbstractModel
{
    /**
     * @var string node名字
     */
    public $Name;

    /**
     * @var string node可用区
     */
    public $Zone;

    /**
     * @var string node子网ID
     */
    public $SubnetId;

    /**
     * @var string 可用IP数
     */
    public $AvailableIpCount;

    /**
     * @var string cidr块
     */
    public $Cidr;

    /**
     * @param string $Name node名字
     * @param string $Zone node可用区
     * @param string $SubnetId node子网ID
     * @param string $AvailableIpCount 可用IP数
     * @param string $Cidr cidr块
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("AvailableIpCount",$param) and $param["AvailableIpCount"] !== null) {
            $this->AvailableIpCount = $param["AvailableIpCount"];
        }

        if (array_key_exists("Cidr",$param) and $param["Cidr"] !== null) {
            $this->Cidr = $param["Cidr"];
        }
    }
}
