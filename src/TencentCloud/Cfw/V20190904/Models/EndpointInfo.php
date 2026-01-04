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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 私有连接端点信息
 *
 * @method string getEndpointId() 获取引流私有连接端点id
 * @method void setEndpointId(string $EndpointId) 设置引流私有连接端点id
 * @method string getVpcId() 获取引流VpcId
 * @method void setVpcId(string $VpcId) 设置引流VpcId
 * @method string getRegion() 获取所属地域
 * @method void setRegion(string $Region) 设置所属地域
 * @method string getVpcCidr() 获取引流Vpc的Cidr
 * @method void setVpcCidr(string $VpcCidr) 设置引流Vpc的Cidr
 */
class EndpointInfo extends AbstractModel
{
    /**
     * @var string 引流私有连接端点id
     */
    public $EndpointId;

    /**
     * @var string 引流VpcId
     */
    public $VpcId;

    /**
     * @var string 所属地域
     */
    public $Region;

    /**
     * @var string 引流Vpc的Cidr
     */
    public $VpcCidr;

    /**
     * @param string $EndpointId 引流私有连接端点id
     * @param string $VpcId 引流VpcId
     * @param string $Region 所属地域
     * @param string $VpcCidr 引流Vpc的Cidr
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
        if (array_key_exists("EndpointId",$param) and $param["EndpointId"] !== null) {
            $this->EndpointId = $param["EndpointId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VpcCidr",$param) and $param["VpcCidr"] !== null) {
            $this->VpcCidr = $param["VpcCidr"];
        }
    }
}
