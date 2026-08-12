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
 * @method string getResourceId() 获取<p>堡垒机实例id</p>
 * @method void setResourceId(string $ResourceId) 设置<p>堡垒机实例id</p>
 * @method string getVpcId() 获取<p>开通内网访问的vpc id</p>
 * @method void setVpcId(string $VpcId) 设置<p>开通内网访问的vpc id</p>
 * @method string getVpcName() 获取<p>vpc名称</p>
 * @method void setVpcName(string $VpcName) 设置<p>vpc名称</p>
 * @method string getVpcRegion() 获取<p>vpc地域</p>
 * @method void setVpcRegion(string $VpcRegion) 设置<p>vpc地域</p>
 * @method string getVpcCidrBlock() 获取<p>vpc的网段</p>
 * @method void setVpcCidrBlock(string $VpcCidrBlock) 设置<p>vpc的网段</p>
 * @method string getSubnetId() 获取<p>开通内网访问的subnet id</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>开通内网访问的subnet id</p>
 * @method string getDomainName() 获取<p>内网ip的自定义域名，可为空</p>
 * @method void setDomainName(string $DomainName) 设置<p>内网ip的自定义域名，可为空</p>
 * @method array getIntranetSubnets() 获取<p>开通内网的子网信息</p>
 * @method void setIntranetSubnets(array $IntranetSubnets) 设置<p>开通内网的子网信息</p>
 */
class EnableIntranetAccessRequest extends AbstractModel
{
    /**
     * @var string <p>堡垒机实例id</p>
     */
    public $ResourceId;

    /**
     * @var string <p>开通内网访问的vpc id</p>
     */
    public $VpcId;

    /**
     * @var string <p>vpc名称</p>
     */
    public $VpcName;

    /**
     * @var string <p>vpc地域</p>
     */
    public $VpcRegion;

    /**
     * @var string <p>vpc的网段</p>
     */
    public $VpcCidrBlock;

    /**
     * @var string <p>开通内网访问的subnet id</p>
     * @deprecated
     */
    public $SubnetId;

    /**
     * @var string <p>内网ip的自定义域名，可为空</p>
     */
    public $DomainName;

    /**
     * @var array <p>开通内网的子网信息</p>
     */
    public $IntranetSubnets;

    /**
     * @param string $ResourceId <p>堡垒机实例id</p>
     * @param string $VpcId <p>开通内网访问的vpc id</p>
     * @param string $VpcName <p>vpc名称</p>
     * @param string $VpcRegion <p>vpc地域</p>
     * @param string $VpcCidrBlock <p>vpc的网段</p>
     * @param string $SubnetId <p>开通内网访问的subnet id</p>
     * @param string $DomainName <p>内网ip的自定义域名，可为空</p>
     * @param array $IntranetSubnets <p>开通内网的子网信息</p>
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

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("VpcRegion",$param) and $param["VpcRegion"] !== null) {
            $this->VpcRegion = $param["VpcRegion"];
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

        if (array_key_exists("IntranetSubnets",$param) and $param["IntranetSubnets"] !== null) {
            $this->IntranetSubnets = [];
            foreach ($param["IntranetSubnets"] as $key => $value){
                $obj = new ParamInitResourceSubnet();
                $obj->deserialize($value);
                array_push($this->IntranetSubnets, $obj);
            }
        }
    }
}
