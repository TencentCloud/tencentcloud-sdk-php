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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 根据合同对印章授权
 *
 * @method array getFlowIds() 获取<p>合同id列表，最大支持50个</p>
 * @method void setFlowIds(array $FlowIds) 设置<p>合同id列表，最大支持50个</p>
 * @method array getFlowGroupIds() 获取<p>合同组id列表， 最大支持10个<br>FlowGroupIds(合同组)与FlowIds(合同列表) 两个参数只能选择其中一个，两者同时传会提示参数错误。</p>
 * @method void setFlowGroupIds(array $FlowGroupIds) 设置<p>合同组id列表， 最大支持10个<br>FlowGroupIds(合同组)与FlowIds(合同列表) 两个参数只能选择其中一个，两者同时传会提示参数错误。</p>
 */
class SealPolicyAuthorizationFlows extends AbstractModel
{
    /**
     * @var array <p>合同id列表，最大支持50个</p>
     */
    public $FlowIds;

    /**
     * @var array <p>合同组id列表， 最大支持10个<br>FlowGroupIds(合同组)与FlowIds(合同列表) 两个参数只能选择其中一个，两者同时传会提示参数错误。</p>
     */
    public $FlowGroupIds;

    /**
     * @param array $FlowIds <p>合同id列表，最大支持50个</p>
     * @param array $FlowGroupIds <p>合同组id列表， 最大支持10个<br>FlowGroupIds(合同组)与FlowIds(合同列表) 两个参数只能选择其中一个，两者同时传会提示参数错误。</p>
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
        if (array_key_exists("FlowIds",$param) and $param["FlowIds"] !== null) {
            $this->FlowIds = $param["FlowIds"];
        }

        if (array_key_exists("FlowGroupIds",$param) and $param["FlowGroupIds"] !== null) {
            $this->FlowGroupIds = $param["FlowGroupIds"];
        }
    }
}
