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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EnableIntranetAccess请求参数结构体
 *
 * @method string getResourceId() 获取堡垒机实例id
 * @method void setResourceId(string $ResourceId) 设置堡垒机实例id
 * @method string getVpcId() 获取开通内网访问的vpc id
 * @method void setVpcId(string $VpcId) 设置开通内网访问的vpc id
 * @method string getVpcCidrBlock() 获取vpc的网段
 * @method void setVpcCidrBlock(string $VpcCidrBlock) 设置vpc的网段
 * @method string getSubnetId() 获取开通内网访问的subnet id
 * @method void setSubnetId(string $SubnetId) 设置开通内网访问的subnet id
 * @method string getDomainName() 获取内网ip的自定义域名，可为空
 * @method void setDomainName(string $DomainName) 设置内网ip的自定义域名，可为空
 */
class EnableIntranetAccessRequest extends AbstractModel
{
    /**
     * @var string 堡垒机实例id
     */
    public $ResourceId;

    /**
     * @var string 开通内网访问的vpc id
     */
    public $VpcId;

    /**
     * @var string vpc的网段
     */
    public $VpcCidrBlock;

    /**
     * @var string 开通内网访问的subnet id
     */
    public $SubnetId;

    /**
     * @var string 内网ip的自定义域名，可为空
     */
    public $DomainName;

    /**
     * @param string $ResourceId 堡垒机实例id
     * @param string $VpcId 开通内网访问的vpc id
     * @param string $VpcCidrBlock vpc的网段
     * @param string $SubnetId 开通内网访问的subnet id
     * @param string $DomainName 内网ip的自定义域名，可为空
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

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcCidrBlock",$param) and $param["VpcCidrBlock"] !== null) {
            $this->VpcCidrBlock = $param["VpcCidrBlock"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }
    }
}
