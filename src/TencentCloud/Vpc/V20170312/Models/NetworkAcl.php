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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网络ACL
 *
 * @method string getVpcId() 获取<p><code>VPC</code>实例<code>ID</code>。</p>
 * @method void setVpcId(string $VpcId) 设置<p><code>VPC</code>实例<code>ID</code>。</p>
 * @method string getNetworkAclId() 获取<p>网络ACL实例<code>ID</code>。</p>
 * @method void setNetworkAclId(string $NetworkAclId) 设置<p>网络ACL实例<code>ID</code>。</p>
 * @method string getNetworkAclName() 获取<p>网络ACL名称，最大长度为60。</p>
 * @method void setNetworkAclName(string $NetworkAclName) 设置<p>网络ACL名称，最大长度为60。</p>
 * @method string getCreatedTime() 获取<p>创建时间。</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间。</p>
 * @method array getSubnetSet() 获取<p>网络ACL关联的子网数组。</p>
 * @method void setSubnetSet(array $SubnetSet) 设置<p>网络ACL关联的子网数组。</p>
 * @method array getIngressEntries() 获取<p>该参数仅对三元组ACL有效，网络ACl入站规则。</p>
 * @method void setIngressEntries(array $IngressEntries) 设置<p>该参数仅对三元组ACL有效，网络ACl入站规则。</p>
 * @method array getEgressEntries() 获取<p>该参数仅对三元组ACL有效，网络ACL出站规则。</p>
 * @method void setEgressEntries(array $EgressEntries) 设置<p>该参数仅对三元组ACL有效，网络ACL出站规则。</p>
 * @method string getNetworkAclType() 获取<p>网络ACL类型。三元组：&#39;TRIPLE&#39;   五元组：&#39;QUINTUPLE&#39;</p>
 * @method void setNetworkAclType(string $NetworkAclType) 设置<p>网络ACL类型。三元组：&#39;TRIPLE&#39;   五元组：&#39;QUINTUPLE&#39;</p>
 * @method array getTagSet() 获取<p>标签键值对</p>
 * @method void setTagSet(array $TagSet) 设置<p>标签键值对</p>
 */
class NetworkAcl extends AbstractModel
{
    /**
     * @var string <p><code>VPC</code>实例<code>ID</code>。</p>
     */
    public $VpcId;

    /**
     * @var string <p>网络ACL实例<code>ID</code>。</p>
     */
    public $NetworkAclId;

    /**
     * @var string <p>网络ACL名称，最大长度为60。</p>
     */
    public $NetworkAclName;

    /**
     * @var string <p>创建时间。</p>
     */
    public $CreatedTime;

    /**
     * @var array <p>网络ACL关联的子网数组。</p>
     */
    public $SubnetSet;

    /**
     * @var array <p>该参数仅对三元组ACL有效，网络ACl入站规则。</p>
     */
    public $IngressEntries;

    /**
     * @var array <p>该参数仅对三元组ACL有效，网络ACL出站规则。</p>
     */
    public $EgressEntries;

    /**
     * @var string <p>网络ACL类型。三元组：&#39;TRIPLE&#39;   五元组：&#39;QUINTUPLE&#39;</p>
     */
    public $NetworkAclType;

    /**
     * @var array <p>标签键值对</p>
     */
    public $TagSet;

    /**
     * @param string $VpcId <p><code>VPC</code>实例<code>ID</code>。</p>
     * @param string $NetworkAclId <p>网络ACL实例<code>ID</code>。</p>
     * @param string $NetworkAclName <p>网络ACL名称，最大长度为60。</p>
     * @param string $CreatedTime <p>创建时间。</p>
     * @param array $SubnetSet <p>网络ACL关联的子网数组。</p>
     * @param array $IngressEntries <p>该参数仅对三元组ACL有效，网络ACl入站规则。</p>
     * @param array $EgressEntries <p>该参数仅对三元组ACL有效，网络ACL出站规则。</p>
     * @param string $NetworkAclType <p>网络ACL类型。三元组：&#39;TRIPLE&#39;   五元组：&#39;QUINTUPLE&#39;</p>
     * @param array $TagSet <p>标签键值对</p>
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

        if (array_key_exists("NetworkAclId",$param) and $param["NetworkAclId"] !== null) {
            $this->NetworkAclId = $param["NetworkAclId"];
        }

        if (array_key_exists("NetworkAclName",$param) and $param["NetworkAclName"] !== null) {
            $this->NetworkAclName = $param["NetworkAclName"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("SubnetSet",$param) and $param["SubnetSet"] !== null) {
            $this->SubnetSet = [];
            foreach ($param["SubnetSet"] as $key => $value){
                $obj = new Subnet();
                $obj->deserialize($value);
                array_push($this->SubnetSet, $obj);
            }
        }

        if (array_key_exists("IngressEntries",$param) and $param["IngressEntries"] !== null) {
            $this->IngressEntries = [];
            foreach ($param["IngressEntries"] as $key => $value){
                $obj = new NetworkAclEntry();
                $obj->deserialize($value);
                array_push($this->IngressEntries, $obj);
            }
        }

        if (array_key_exists("EgressEntries",$param) and $param["EgressEntries"] !== null) {
            $this->EgressEntries = [];
            foreach ($param["EgressEntries"] as $key => $value){
                $obj = new NetworkAclEntry();
                $obj->deserialize($value);
                array_push($this->EgressEntries, $obj);
            }
        }

        if (array_key_exists("NetworkAclType",$param) and $param["NetworkAclType"] !== null) {
            $this->NetworkAclType = $param["NetworkAclType"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }
    }
}
