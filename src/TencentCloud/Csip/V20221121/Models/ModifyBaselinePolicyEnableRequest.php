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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBaselinePolicyEnable请求参数结构体
 *
 * @method array getPolicyIDList() 获取<p>待修改的基线策略 ID 列表，不可为空且元素不可为 0。</p>
 * @method void setPolicyIDList(array $PolicyIDList) 设置<p>待修改的基线策略 ID 列表，不可为空且元素不可为 0。</p>
 * @method string getPolicyType() 获取<p>基线策略类型。取值：</p><ul><li>SYSTEM：系统策略（CSIP 内置）</li><li>SELF：用户自定义策略</li></ul>
 * @method void setPolicyType(string $PolicyType) 设置<p>基线策略类型。取值：</p><ul><li>SYSTEM：系统策略（CSIP 内置）</li><li>SELF：用户自定义策略</li></ul>
 * @method integer getEnable() 获取<p>目标启用状态。0 停用，1 启用。</p>
 * @method void setEnable(integer $Enable) 设置<p>目标启用状态。0 停用，1 启用。</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 */
class ModifyBaselinePolicyEnableRequest extends AbstractModel
{
    /**
     * @var array <p>待修改的基线策略 ID 列表，不可为空且元素不可为 0。</p>
     */
    public $PolicyIDList;

    /**
     * @var string <p>基线策略类型。取值：</p><ul><li>SYSTEM：系统策略（CSIP 内置）</li><li>SELF：用户自定义策略</li></ul>
     */
    public $PolicyType;

    /**
     * @var integer <p>目标启用状态。0 停用，1 启用。</p>
     */
    public $Enable;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @param array $PolicyIDList <p>待修改的基线策略 ID 列表，不可为空且元素不可为 0。</p>
     * @param string $PolicyType <p>基线策略类型。取值：</p><ul><li>SYSTEM：系统策略（CSIP 内置）</li><li>SELF：用户自定义策略</li></ul>
     * @param integer $Enable <p>目标启用状态。0 停用，1 启用。</p>
     * @param array $MemberId <p>集团账号的成员id</p>
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
        if (array_key_exists("PolicyIDList",$param) and $param["PolicyIDList"] !== null) {
            $this->PolicyIDList = $param["PolicyIDList"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
