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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeletePolicy请求参数结构体
 *
 * @method integer getPolicyId() 获取需要删除的策略ID。可以调用[ListPolicies](https://cloud.tencent.com/document/product/850/105311)获取

 * @method void setPolicyId(integer $PolicyId) 设置需要删除的策略ID。可以调用[ListPolicies](https://cloud.tencent.com/document/product/850/105311)获取

 * @method string getType() 获取策略类型。默认值SERVICE_CONTROL_POLICY，取值范围：SERVICE_CONTROL_POLICY-服务控制策略、TAG_POLICY-标签策略
 * @method void setType(string $Type) 设置策略类型。默认值SERVICE_CONTROL_POLICY，取值范围：SERVICE_CONTROL_POLICY-服务控制策略、TAG_POLICY-标签策略
 */
class DeletePolicyRequest extends AbstractModel
{
    /**
     * @var integer 需要删除的策略ID。可以调用[ListPolicies](https://cloud.tencent.com/document/product/850/105311)获取

     */
    public $PolicyId;

    /**
     * @var string 策略类型。默认值SERVICE_CONTROL_POLICY，取值范围：SERVICE_CONTROL_POLICY-服务控制策略、TAG_POLICY-标签策略
     */
    public $Type;

    /**
     * @param integer $PolicyId 需要删除的策略ID。可以调用[ListPolicies](https://cloud.tencent.com/document/product/850/105311)获取

     * @param string $Type 策略类型。默认值SERVICE_CONTROL_POLICY，取值范围：SERVICE_CONTROL_POLICY-服务控制策略、TAG_POLICY-标签策略
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
