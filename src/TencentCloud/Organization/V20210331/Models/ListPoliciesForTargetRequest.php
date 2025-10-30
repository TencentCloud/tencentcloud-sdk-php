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
 * ListPoliciesForTarget请求参数结构体
 *
 * @method integer getTargetId() 获取账号uin或者节点id。
 * @method void setTargetId(integer $TargetId) 设置账号uin或者节点id。
 * @method integer getRp() 获取每页数量。默认值是 20，必须大于 0 且小于或等于 200
 * @method void setRp(integer $Rp) 设置每页数量。默认值是 20，必须大于 0 且小于或等于 200
 * @method integer getPage() 获取页码。默认值是 1，从 1开始，不能大于 200
 * @method void setPage(integer $Page) 设置页码。默认值是 1，从 1开始，不能大于 200
 * @method string getPolicyType() 获取策略类型。默认值SERVICE_CONTROL_POLICY，取值范围：SERVICE_CONTROL_POLICY-服务控制策略、TAG_POLICY-标签策略
 * @method void setPolicyType(string $PolicyType) 设置策略类型。默认值SERVICE_CONTROL_POLICY，取值范围：SERVICE_CONTROL_POLICY-服务控制策略、TAG_POLICY-标签策略
 * @method string getKeyword() 获取搜索关键字。按照策略名称搜索
 * @method void setKeyword(string $Keyword) 设置搜索关键字。按照策略名称搜索
 */
class ListPoliciesForTargetRequest extends AbstractModel
{
    /**
     * @var integer 账号uin或者节点id。
     */
    public $TargetId;

    /**
     * @var integer 每页数量。默认值是 20，必须大于 0 且小于或等于 200
     */
    public $Rp;

    /**
     * @var integer 页码。默认值是 1，从 1开始，不能大于 200
     */
    public $Page;

    /**
     * @var string 策略类型。默认值SERVICE_CONTROL_POLICY，取值范围：SERVICE_CONTROL_POLICY-服务控制策略、TAG_POLICY-标签策略
     */
    public $PolicyType;

    /**
     * @var string 搜索关键字。按照策略名称搜索
     */
    public $Keyword;

    /**
     * @param integer $TargetId 账号uin或者节点id。
     * @param integer $Rp 每页数量。默认值是 20，必须大于 0 且小于或等于 200
     * @param integer $Page 页码。默认值是 1，从 1开始，不能大于 200
     * @param string $PolicyType 策略类型。默认值SERVICE_CONTROL_POLICY，取值范围：SERVICE_CONTROL_POLICY-服务控制策略、TAG_POLICY-标签策略
     * @param string $Keyword 搜索关键字。按照策略名称搜索
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

        if (array_key_exists("Rp",$param) and $param["Rp"] !== null) {
            $this->Rp = $param["Rp"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
