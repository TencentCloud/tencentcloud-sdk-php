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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchCreateAcl请求参数结构体
 *
 * @method string getInstanceId() 获取ckafka集群实例Id，可通过DescribeInstances接口获取。
 * @method void setInstanceId(string $InstanceId) 设置ckafka集群实例Id，可通过DescribeInstances接口获取。
 * @method integer getResourceType() 获取Acl资源类型，(2:TOPIC）
 * @method void setResourceType(integer $ResourceType) 设置Acl资源类型，(2:TOPIC）
 * @method array getResourceNames() 获取资源列表数组，可通过DescribeTopic接口获取。
 * @method void setResourceNames(array $ResourceNames) 设置资源列表数组，可通过DescribeTopic接口获取。
 * @method array getRuleList() 获取设置的ACL规则列表，可通过DescribeAclRule接口获取。
 * @method void setRuleList(array $RuleList) 设置设置的ACL规则列表，可通过DescribeAclRule接口获取。
 */
class BatchCreateAclRequest extends AbstractModel
{
    /**
     * @var string ckafka集群实例Id，可通过DescribeInstances接口获取。
     */
    public $InstanceId;

    /**
     * @var integer Acl资源类型，(2:TOPIC）
     */
    public $ResourceType;

    /**
     * @var array 资源列表数组，可通过DescribeTopic接口获取。
     */
    public $ResourceNames;

    /**
     * @var array 设置的ACL规则列表，可通过DescribeAclRule接口获取。
     */
    public $RuleList;

    /**
     * @param string $InstanceId ckafka集群实例Id，可通过DescribeInstances接口获取。
     * @param integer $ResourceType Acl资源类型，(2:TOPIC）
     * @param array $ResourceNames 资源列表数组，可通过DescribeTopic接口获取。
     * @param array $RuleList 设置的ACL规则列表，可通过DescribeAclRule接口获取。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceNames",$param) and $param["ResourceNames"] !== null) {
            $this->ResourceNames = $param["ResourceNames"];
        }

        if (array_key_exists("RuleList",$param) and $param["RuleList"] !== null) {
            $this->RuleList = [];
            foreach ($param["RuleList"] as $key => $value){
                $obj = new AclRuleInfo();
                $obj->deserialize($value);
                array_push($this->RuleList, $obj);
            }
        }
    }
}
