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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AttachPolicy请求参数结构体
 *
 * @method integer getTargetId() 获取<p>绑定策略目标ID。成员Uin或部门ID</p>
 * @method void setTargetId(integer $TargetId) 设置<p>绑定策略目标ID。成员Uin或部门ID</p>
 * @method string getTargetType() 获取<p>目标类型。取值范围：NODE-部门、MEMBER-成员</p>
 * @method void setTargetType(string $TargetType) 设置<p>目标类型。取值范围：NODE-部门、MEMBER-成员</p>
 * @method integer getPolicyId() 获取<p>策略Id。可以调用<a href="https://cloud.tencent.com/document/product/850/105311">ListPolicies</a>获取</p>
 * @method void setPolicyId(integer $PolicyId) 设置<p>策略Id。可以调用<a href="https://cloud.tencent.com/document/product/850/105311">ListPolicies</a>获取</p>
 * @method string getType() 获取<p>策略类型。默认值SERVICE_CONTROL_POLICY，取值范围：SERVICE_CONTROL_POLICY-服务控制策略、TAG_POLICY-标签策略</p>
 * @method void setType(string $Type) 设置<p>策略类型。默认值SERVICE_CONTROL_POLICY，取值范围：SERVICE_CONTROL_POLICY-服务控制策略、TAG_POLICY-标签策略</p>
 */
class AttachPolicyRequest extends AbstractModel
{
    /**
     * @var integer <p>绑定策略目标ID。成员Uin或部门ID</p>
     */
    public $TargetId;

    /**
     * @var string <p>目标类型。取值范围：NODE-部门、MEMBER-成员</p>
     */
    public $TargetType;

    /**
     * @var integer <p>策略Id。可以调用<a href="https://cloud.tencent.com/document/product/850/105311">ListPolicies</a>获取</p>
     */
    public $PolicyId;

    /**
     * @var string <p>策略类型。默认值SERVICE_CONTROL_POLICY，取值范围：SERVICE_CONTROL_POLICY-服务控制策略、TAG_POLICY-标签策略</p>
     */
    public $Type;

    /**
     * @param integer $TargetId <p>绑定策略目标ID。成员Uin或部门ID</p>
     * @param string $TargetType <p>目标类型。取值范围：NODE-部门、MEMBER-成员</p>
     * @param integer $PolicyId <p>策略Id。可以调用<a href="https://cloud.tencent.com/document/product/850/105311">ListPolicies</a>获取</p>
     * @param string $Type <p>策略类型。默认值SERVICE_CONTROL_POLICY，取值范围：SERVICE_CONTROL_POLICY-服务控制策略、TAG_POLICY-标签策略</p>
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
        if (array_key_exists("TargetId",$param) and $param["TargetId"] !== null) {
            $this->TargetId = $param["TargetId"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
