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
 * DeleteAclRule请求参数结构体
 *
 * @method string getInstanceId() 获取实例id信息，可通过[DescribeInstances](https://cloud.tencent.com/document/product/597/40835)接口获取
 * @method void setInstanceId(string $InstanceId) 设置实例id信息，可通过[DescribeInstances](https://cloud.tencent.com/document/product/597/40835)接口获取
 * @method string getRuleName() 获取acl规则名称，可通过DescribeAclRule接口获取。
 * @method void setRuleName(string $RuleName) 设置acl规则名称，可通过DescribeAclRule接口获取。
 */
class DeleteAclRuleRequest extends AbstractModel
{
    /**
     * @var string 实例id信息，可通过[DescribeInstances](https://cloud.tencent.com/document/product/597/40835)接口获取
     */
    public $InstanceId;

    /**
     * @var string acl规则名称，可通过DescribeAclRule接口获取。
     */
    public $RuleName;

    /**
     * @param string $InstanceId 实例id信息，可通过[DescribeInstances](https://cloud.tencent.com/document/product/597/40835)接口获取
     * @param string $RuleName acl规则名称，可通过DescribeAclRule接口获取。
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

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }
    }
}
