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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIgnoreRuleEffectHostList返回参数结构体
 *
 * @method array getIgnoreRuleEffectHostList() 获取忽略检测项影响主机列表
 * @method void setIgnoreRuleEffectHostList(array $IgnoreRuleEffectHostList) 设置忽略检测项影响主机列表
 * @method integer getTotalCount() 获取分页查询记录总数
 * @method void setTotalCount(integer $TotalCount) 设置分页查询记录总数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeIgnoreRuleEffectHostListResponse extends AbstractModel
{
    /**
     * @var array 忽略检测项影响主机列表
     */
    public $IgnoreRuleEffectHostList;

    /**
     * @var integer 分页查询记录总数
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $IgnoreRuleEffectHostList 忽略检测项影响主机列表
     * @param integer $TotalCount 分页查询记录总数
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("IgnoreRuleEffectHostList",$param) and $param["IgnoreRuleEffectHostList"] !== null) {
            $this->IgnoreRuleEffectHostList = [];
            foreach ($param["IgnoreRuleEffectHostList"] as $key => $value){
                $obj = new IgnoreRuleEffectHostInfo();
                $obj->deserialize($value);
                array_push($this->IgnoreRuleEffectHostList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
