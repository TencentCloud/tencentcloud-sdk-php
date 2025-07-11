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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateRowFilter请求参数结构体
 *
 * @method integer getPolicyId() 获取行过滤策略的id，此值可以通过DescribeUserInfo或者DescribeWorkGroupInfo接口获取
 * @method void setPolicyId(integer $PolicyId) 设置行过滤策略的id，此值可以通过DescribeUserInfo或者DescribeWorkGroupInfo接口获取
 * @method Policy getPolicy() 获取新的过滤策略。
 * @method void setPolicy(Policy $Policy) 设置新的过滤策略。
 */
class UpdateRowFilterRequest extends AbstractModel
{
    /**
     * @var integer 行过滤策略的id，此值可以通过DescribeUserInfo或者DescribeWorkGroupInfo接口获取
     */
    public $PolicyId;

    /**
     * @var Policy 新的过滤策略。
     */
    public $Policy;

    /**
     * @param integer $PolicyId 行过滤策略的id，此值可以通过DescribeUserInfo或者DescribeWorkGroupInfo接口获取
     * @param Policy $Policy 新的过滤策略。
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = new Policy();
            $this->Policy->deserialize($param["Policy"]);
        }
    }
}
