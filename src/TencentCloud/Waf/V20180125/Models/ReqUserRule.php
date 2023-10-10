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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户规则更新输出规则子项
 *
 * @method string getId() 获取特征序号
 * @method void setId(string $Id) 设置特征序号
 * @method integer getStatus() 获取规则开关
0：关
1：开
2：只告警
 * @method void setStatus(integer $Status) 设置规则开关
0：关
1：开
2：只告警
 * @method integer getReason() 获取修改原因
0：无(兼容记录为空)
1：业务自身特性误报避免
2：规则误报上报
3：核心业务规则灰度
4：其它
 * @method void setReason(integer $Reason) 设置修改原因
0：无(兼容记录为空)
1：业务自身特性误报避免
2：规则误报上报
3：核心业务规则灰度
4：其它
 */
class ReqUserRule extends AbstractModel
{
    /**
     * @var string 特征序号
     */
    public $Id;

    /**
     * @var integer 规则开关
0：关
1：开
2：只告警
     */
    public $Status;

    /**
     * @var integer 修改原因
0：无(兼容记录为空)
1：业务自身特性误报避免
2：规则误报上报
3：核心业务规则灰度
4：其它
     */
    public $Reason;

    /**
     * @param string $Id 特征序号
     * @param integer $Status 规则开关
0：关
1：开
2：只告警
     * @param integer $Reason 修改原因
0：无(兼容记录为空)
1：业务自身特性误报避免
2：规则误报上报
3：核心业务规则灰度
4：其它
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
