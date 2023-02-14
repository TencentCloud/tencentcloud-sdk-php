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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateNetworkAcl请求参数结构体
 *
 * @method string getVpcId() 获取VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。
 * @method void setVpcId(string $VpcId) 设置VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。
 * @method string getNetworkAclName() 获取网络ACL名称，最大长度不能超过60个字节。
 * @method void setNetworkAclName(string $NetworkAclName) 设置网络ACL名称，最大长度不能超过60个字节。
 * @method string getNetworkAclType() 获取网络ACL类型，三元组(TRIPLE)或五元组(QUINTUPLE)。
 * @method void setNetworkAclType(string $NetworkAclType) 设置网络ACL类型，三元组(TRIPLE)或五元组(QUINTUPLE)。
 * @method array getTags() 获取指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]。
 * @method void setTags(array $Tags) 设置指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]。
 */
class CreateNetworkAclRequest extends AbstractModel
{
    /**
     * @var string VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。
     */
    public $VpcId;

    /**
     * @var string 网络ACL名称，最大长度不能超过60个字节。
     */
    public $NetworkAclName;

    /**
     * @var string 网络ACL类型，三元组(TRIPLE)或五元组(QUINTUPLE)。
     */
    public $NetworkAclType;

    /**
     * @var array 指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]。
     */
    public $Tags;

    /**
     * @param string $VpcId VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。
     * @param string $NetworkAclName 网络ACL名称，最大长度不能超过60个字节。
     * @param string $NetworkAclType 网络ACL类型，三元组(TRIPLE)或五元组(QUINTUPLE)。
     * @param array $Tags 指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]。
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("NetworkAclName",$param) and $param["NetworkAclName"] !== null) {
            $this->NetworkAclName = $param["NetworkAclName"];
        }

        if (array_key_exists("NetworkAclType",$param) and $param["NetworkAclType"] !== null) {
            $this->NetworkAclType = $param["NetworkAclType"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
