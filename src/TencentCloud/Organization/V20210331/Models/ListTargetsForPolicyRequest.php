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
 * ListTargetsForPolicy请求参数结构体
 *
 * @method integer getPolicyId() 获取<p>策略Id。</p>
 * @method void setPolicyId(integer $PolicyId) 设置<p>策略Id。</p>
 * @method integer getRp() 获取<p>每页数量。默认值是 20，必须大于 0 且小于或等于 200</p>
 * @method void setRp(integer $Rp) 设置<p>每页数量。默认值是 20，必须大于 0 且小于或等于 200</p>
 * @method integer getPage() 获取<p>页码。默认值是 1，从 1开始，不能大于 200</p>
 * @method void setPage(integer $Page) 设置<p>页码。默认值是 1，从 1开始，不能大于 200</p>
 * @method string getTargetType() 获取<p>策略类型。取值范围：All-全部、User-用户、Node-节点</p>
 * @method void setTargetType(string $TargetType) 设置<p>策略类型。取值范围：All-全部、User-用户、Node-节点</p>
 * @method string getPolicyType() 获取<p>策略类型。默认值SERVICE_CONTROL_POLICY，取值范围：SERVICE_CONTROL_POLICY-服务控制策略、TAG_POLICY-标签策略</p>
 * @method void setPolicyType(string $PolicyType) 设置<p>策略类型。默认值SERVICE_CONTROL_POLICY，取值范围：SERVICE_CONTROL_POLICY-服务控制策略、TAG_POLICY-标签策略</p>
 * @method string getKeyword() 获取<p>按照多个策略id搜索，空格隔开。</p>
 * @method void setKeyword(string $Keyword) 设置<p>按照多个策略id搜索，空格隔开。</p>
 */
class ListTargetsForPolicyRequest extends AbstractModel
{
    /**
     * @var integer <p>策略Id。</p>
     */
    public $PolicyId;

    /**
     * @var integer <p>每页数量。默认值是 20，必须大于 0 且小于或等于 200</p>
     */
    public $Rp;

    /**
     * @var integer <p>页码。默认值是 1，从 1开始，不能大于 200</p>
     */
    public $Page;

    /**
     * @var string <p>策略类型。取值范围：All-全部、User-用户、Node-节点</p>
     */
    public $TargetType;

    /**
     * @var string <p>策略类型。默认值SERVICE_CONTROL_POLICY，取值范围：SERVICE_CONTROL_POLICY-服务控制策略、TAG_POLICY-标签策略</p>
     */
    public $PolicyType;

    /**
     * @var string <p>按照多个策略id搜索，空格隔开。</p>
     */
    public $Keyword;

    /**
     * @param integer $PolicyId <p>策略Id。</p>
     * @param integer $Rp <p>每页数量。默认值是 20，必须大于 0 且小于或等于 200</p>
     * @param integer $Page <p>页码。默认值是 1，从 1开始，不能大于 200</p>
     * @param string $TargetType <p>策略类型。取值范围：All-全部、User-用户、Node-节点</p>
     * @param string $PolicyType <p>策略类型。默认值SERVICE_CONTROL_POLICY，取值范围：SERVICE_CONTROL_POLICY-服务控制策略、TAG_POLICY-标签策略</p>
     * @param string $Keyword <p>按照多个策略id搜索，空格隔开。</p>
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

        if (array_key_exists("Rp",$param) and $param["Rp"] !== null) {
            $this->Rp = $param["Rp"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
