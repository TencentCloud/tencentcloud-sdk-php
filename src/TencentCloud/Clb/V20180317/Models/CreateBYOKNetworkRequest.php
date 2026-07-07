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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBYOKNetwork请求参数结构体
 *
 * @method string getSubnetId() 获取<p>子网 ID</p><p>参数格式：subnet-xxxxxxxx</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网 ID</p><p>参数格式：subnet-xxxxxxxx</p>
 * @method string getVpcId() 获取<p>VPC 实例 ID</p><p>参数格式：vpc-xxxxxxxx</p>
 * @method void setVpcId(string $VpcId) 设置<p>VPC 实例 ID</p><p>参数格式：vpc-xxxxxxxx</p>
 * @method string getServiceProviderName() 获取<p>BYOK 的自定义名字</p><p>入参限制：1～256个字符，可选</p>
 * @method void setServiceProviderName(string $ServiceProviderName) 设置<p>BYOK 的自定义名字</p><p>入参限制：1～256个字符，可选</p>
 * @method array getTags() 获取<p>标签</p>
 * @method void setTags(array $Tags) 设置<p>标签</p>
 */
class CreateBYOKNetworkRequest extends AbstractModel
{
    /**
     * @var string <p>子网 ID</p><p>参数格式：subnet-xxxxxxxx</p>
     */
    public $SubnetId;

    /**
     * @var string <p>VPC 实例 ID</p><p>参数格式：vpc-xxxxxxxx</p>
     */
    public $VpcId;

    /**
     * @var string <p>BYOK 的自定义名字</p><p>入参限制：1～256个字符，可选</p>
     */
    public $ServiceProviderName;

    /**
     * @var array <p>标签</p>
     */
    public $Tags;

    /**
     * @param string $SubnetId <p>子网 ID</p><p>参数格式：subnet-xxxxxxxx</p>
     * @param string $VpcId <p>VPC 实例 ID</p><p>参数格式：vpc-xxxxxxxx</p>
     * @param string $ServiceProviderName <p>BYOK 的自定义名字</p><p>入参限制：1～256个字符，可选</p>
     * @param array $Tags <p>标签</p>
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
        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("ServiceProviderName",$param) and $param["ServiceProviderName"] !== null) {
            $this->ServiceProviderName = $param["ServiceProviderName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
