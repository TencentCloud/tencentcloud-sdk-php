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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetRoutePolicyEntries请求参数结构体
 *
 * @method string getRoutePolicyId() 获取路由接收策略实例ID，例如：rrp-azd4dt1c。
 * @method void setRoutePolicyId(string $RoutePolicyId) 设置路由接收策略实例ID，例如：rrp-azd4dt1c。
 * @method array getRoutePolicyEntrySet() 获取路由接收策略条目列表。需要指定路由策略条目ID（RoutePolicyEntryId）。
 * @method void setRoutePolicyEntrySet(array $RoutePolicyEntrySet) 设置路由接收策略条目列表。需要指定路由策略条目ID（RoutePolicyEntryId）。
 * @method string getRoutePolicyDescription() 获取路由接收策略描述。
 * @method void setRoutePolicyDescription(string $RoutePolicyDescription) 设置路由接收策略描述。
 * @method string getRoutePolicyName() 获取路由接收策略名字。
 * @method void setRoutePolicyName(string $RoutePolicyName) 设置路由接收策略名字。
 */
class ResetRoutePolicyEntriesRequest extends AbstractModel
{
    /**
     * @var string 路由接收策略实例ID，例如：rrp-azd4dt1c。
     */
    public $RoutePolicyId;

    /**
     * @var array 路由接收策略条目列表。需要指定路由策略条目ID（RoutePolicyEntryId）。
     */
    public $RoutePolicyEntrySet;

    /**
     * @var string 路由接收策略描述。
     */
    public $RoutePolicyDescription;

    /**
     * @var string 路由接收策略名字。
     */
    public $RoutePolicyName;

    /**
     * @param string $RoutePolicyId 路由接收策略实例ID，例如：rrp-azd4dt1c。
     * @param array $RoutePolicyEntrySet 路由接收策略条目列表。需要指定路由策略条目ID（RoutePolicyEntryId）。
     * @param string $RoutePolicyDescription 路由接收策略描述。
     * @param string $RoutePolicyName 路由接收策略名字。
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
        if (array_key_exists("RoutePolicyId",$param) and $param["RoutePolicyId"] !== null) {
            $this->RoutePolicyId = $param["RoutePolicyId"];
        }

        if (array_key_exists("RoutePolicyEntrySet",$param) and $param["RoutePolicyEntrySet"] !== null) {
            $this->RoutePolicyEntrySet = [];
            foreach ($param["RoutePolicyEntrySet"] as $key => $value){
                $obj = new RoutePolicyEntry();
                $obj->deserialize($value);
                array_push($this->RoutePolicyEntrySet, $obj);
            }
        }

        if (array_key_exists("RoutePolicyDescription",$param) and $param["RoutePolicyDescription"] !== null) {
            $this->RoutePolicyDescription = $param["RoutePolicyDescription"];
        }

        if (array_key_exists("RoutePolicyName",$param) and $param["RoutePolicyName"] !== null) {
            $this->RoutePolicyName = $param["RoutePolicyName"];
        }
    }
}
