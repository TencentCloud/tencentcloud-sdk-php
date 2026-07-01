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
 * DescribeEDRRuleList返回参数结构体
 *
 * @method integer getTotalCount() 获取<p>总数</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>总数</p>
 * @method array getList() 获取<p>列表</p>
 * @method void setList(array $List) 设置<p>列表</p>
 * @method array getAttackStageCounts() 获取<p>攻击阶段对应的策略数量</p>
 * @method void setAttackStageCounts(array $AttackStageCounts) 设置<p>攻击阶段对应的策略数量</p>
 * @method array getDetectTypeCounts() 获取<p>检测方式对应的策略数量</p>
 * @method void setDetectTypeCounts(array $DetectTypeCounts) 设置<p>检测方式对应的策略数量</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeEDRRuleListResponse extends AbstractModel
{
    /**
     * @var integer <p>总数</p>
     */
    public $TotalCount;

    /**
     * @var array <p>列表</p>
     */
    public $List;

    /**
     * @var array <p>攻击阶段对应的策略数量</p>
     */
    public $AttackStageCounts;

    /**
     * @var array <p>检测方式对应的策略数量</p>
     */
    public $DetectTypeCounts;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount <p>总数</p>
     * @param array $List <p>列表</p>
     * @param array $AttackStageCounts <p>攻击阶段对应的策略数量</p>
     * @param array $DetectTypeCounts <p>检测方式对应的策略数量</p>
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new EDRRule();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }

        if (array_key_exists("AttackStageCounts",$param) and $param["AttackStageCounts"] !== null) {
            $this->AttackStageCounts = [];
            foreach ($param["AttackStageCounts"] as $key => $value){
                $obj = new AttackStageCount();
                $obj->deserialize($value);
                array_push($this->AttackStageCounts, $obj);
            }
        }

        if (array_key_exists("DetectTypeCounts",$param) and $param["DetectTypeCounts"] !== null) {
            $this->DetectTypeCounts = [];
            foreach ($param["DetectTypeCounts"] as $key => $value){
                $obj = new DetectTypeCount();
                $obj->deserialize($value);
                array_push($this->DetectTypeCounts, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
