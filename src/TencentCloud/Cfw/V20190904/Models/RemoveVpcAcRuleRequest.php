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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RemoveVpcAcRule请求参数结构体
 *
 * @method array getRuleUuids() 获取规则的uuid列表，可通过查询规则列表获取，注意：如果传入的是[-1]将删除所有规则
 * @method void setRuleUuids(array $RuleUuids) 设置规则的uuid列表，可通过查询规则列表获取，注意：如果传入的是[-1]将删除所有规则
 * @method integer getIpVersion() 获取仅当RuleUuids为-1时有效；0：删除Ipv4规则，1：删除Ipv6规则；默认为Ipv4类型规则
 * @method void setIpVersion(integer $IpVersion) 设置仅当RuleUuids为-1时有效；0：删除Ipv4规则，1：删除Ipv6规则；默认为Ipv4类型规则
 */
class RemoveVpcAcRuleRequest extends AbstractModel
{
    /**
     * @var array 规则的uuid列表，可通过查询规则列表获取，注意：如果传入的是[-1]将删除所有规则
     */
    public $RuleUuids;

    /**
     * @var integer 仅当RuleUuids为-1时有效；0：删除Ipv4规则，1：删除Ipv6规则；默认为Ipv4类型规则
     */
    public $IpVersion;

    /**
     * @param array $RuleUuids 规则的uuid列表，可通过查询规则列表获取，注意：如果传入的是[-1]将删除所有规则
     * @param integer $IpVersion 仅当RuleUuids为-1时有效；0：删除Ipv4规则，1：删除Ipv6规则；默认为Ipv4类型规则
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
        if (array_key_exists("RuleUuids",$param) and $param["RuleUuids"] !== null) {
            $this->RuleUuids = $param["RuleUuids"];
        }

        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
        }
    }
}
