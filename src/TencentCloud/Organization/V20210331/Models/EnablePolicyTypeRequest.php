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
 * EnablePolicyType请求参数结构体
 *
 * @method integer getOrganizationId() 获取企业组织Id。可以调用[DescribeOrganization](https://cloud.tencent.com/document/product/850/67059)获取
 * @method void setOrganizationId(integer $OrganizationId) 设置企业组织Id。可以调用[DescribeOrganization](https://cloud.tencent.com/document/product/850/67059)获取
 * @method string getPolicyType() 获取策略类型。默认值SERVICE_CONTROL_POLICY，取值范围：SERVICE_CONTROL_POLICY-服务控制策略、TAG_POLICY-标签策略
 * @method void setPolicyType(string $PolicyType) 设置策略类型。默认值SERVICE_CONTROL_POLICY，取值范围：SERVICE_CONTROL_POLICY-服务控制策略、TAG_POLICY-标签策略
 */
class EnablePolicyTypeRequest extends AbstractModel
{
    /**
     * @var integer 企业组织Id。可以调用[DescribeOrganization](https://cloud.tencent.com/document/product/850/67059)获取
     */
    public $OrganizationId;

    /**
     * @var string 策略类型。默认值SERVICE_CONTROL_POLICY，取值范围：SERVICE_CONTROL_POLICY-服务控制策略、TAG_POLICY-标签策略
     */
    public $PolicyType;

    /**
     * @param integer $OrganizationId 企业组织Id。可以调用[DescribeOrganization](https://cloud.tencent.com/document/product/850/67059)获取
     * @param string $PolicyType 策略类型。默认值SERVICE_CONTROL_POLICY，取值范围：SERVICE_CONTROL_POLICY-服务控制策略、TAG_POLICY-标签策略
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
        if (array_key_exists("OrganizationId",$param) and $param["OrganizationId"] !== null) {
            $this->OrganizationId = $param["OrganizationId"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }
    }
}
