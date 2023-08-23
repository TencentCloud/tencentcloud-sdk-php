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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云上资源元数据
 *
 * @method string getResourceId() 获取用户资源ID。
 * @method void setResourceId(string $ResourceId) 设置用户资源ID。
 * @method string getResourceName() 获取资源名称。
 * @method void setResourceName(string $ResourceName) 设置资源名称。
 * @method string getResourceVip() 获取资源VIP。
 * @method void setResourceVip(string $ResourceVip) 设置资源VIP。
 * @method integer getResourceVPort() 获取资源端口。
 * @method void setResourceVPort(integer $ResourceVPort) 设置资源端口。
 * @method string getResourceCreateTime() 获取资源被创建时间。
 * @method void setResourceCreateTime(string $ResourceCreateTime) 设置资源被创建时间。
 * @method string getResourceUniqueVpcId() 获取用户资源VPC ID 字符串。
 * @method void setResourceUniqueVpcId(string $ResourceUniqueVpcId) 设置用户资源VPC ID 字符串。
 * @method string getResourceUniqueSubnetId() 获取用户资源Subnet ID 字符串。
 * @method void setResourceUniqueSubnetId(string $ResourceUniqueSubnetId) 设置用户资源Subnet ID 字符串。
 */
class DspaCloudResourceMeta extends AbstractModel
{
    /**
     * @var string 用户资源ID。
     */
    public $ResourceId;

    /**
     * @var string 资源名称。
     */
    public $ResourceName;

    /**
     * @var string 资源VIP。
     */
    public $ResourceVip;

    /**
     * @var integer 资源端口。
     */
    public $ResourceVPort;

    /**
     * @var string 资源被创建时间。
     */
    public $ResourceCreateTime;

    /**
     * @var string 用户资源VPC ID 字符串。
     */
    public $ResourceUniqueVpcId;

    /**
     * @var string 用户资源Subnet ID 字符串。
     */
    public $ResourceUniqueSubnetId;

    /**
     * @param string $ResourceId 用户资源ID。
     * @param string $ResourceName 资源名称。
     * @param string $ResourceVip 资源VIP。
     * @param integer $ResourceVPort 资源端口。
     * @param string $ResourceCreateTime 资源被创建时间。
     * @param string $ResourceUniqueVpcId 用户资源VPC ID 字符串。
     * @param string $ResourceUniqueSubnetId 用户资源Subnet ID 字符串。
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ResourceVip",$param) and $param["ResourceVip"] !== null) {
            $this->ResourceVip = $param["ResourceVip"];
        }

        if (array_key_exists("ResourceVPort",$param) and $param["ResourceVPort"] !== null) {
            $this->ResourceVPort = $param["ResourceVPort"];
        }

        if (array_key_exists("ResourceCreateTime",$param) and $param["ResourceCreateTime"] !== null) {
            $this->ResourceCreateTime = $param["ResourceCreateTime"];
        }

        if (array_key_exists("ResourceUniqueVpcId",$param) and $param["ResourceUniqueVpcId"] !== null) {
            $this->ResourceUniqueVpcId = $param["ResourceUniqueVpcId"];
        }

        if (array_key_exists("ResourceUniqueSubnetId",$param) and $param["ResourceUniqueSubnetId"] !== null) {
            $this->ResourceUniqueSubnetId = $param["ResourceUniqueSubnetId"];
        }
    }
}
