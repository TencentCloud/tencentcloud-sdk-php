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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskResultSummary返回参数结构体
 *
 * @method array getSeriousRiskNodeCount() 获取严重风险影响的节点数量,返回7天数据
 * @method void setSeriousRiskNodeCount(array $SeriousRiskNodeCount) 设置严重风险影响的节点数量,返回7天数据
 * @method array getHighRiskNodeCount() 获取高风险影响的节点的数量,返回7天数据
 * @method void setHighRiskNodeCount(array $HighRiskNodeCount) 设置高风险影响的节点的数量,返回7天数据
 * @method array getMiddleRiskNodeCount() 获取中风险检查项的节点数量,返回7天数据
 * @method void setMiddleRiskNodeCount(array $MiddleRiskNodeCount) 设置中风险检查项的节点数量,返回7天数据
 * @method array getHintRiskNodeCount() 获取提示风险检查项的节点数量,返回7天数据
 * @method void setHintRiskNodeCount(array $HintRiskNodeCount) 设置提示风险检查项的节点数量,返回7天数据
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTaskResultSummaryResponse extends AbstractModel
{
    /**
     * @var array 严重风险影响的节点数量,返回7天数据
     */
    public $SeriousRiskNodeCount;

    /**
     * @var array 高风险影响的节点的数量,返回7天数据
     */
    public $HighRiskNodeCount;

    /**
     * @var array 中风险检查项的节点数量,返回7天数据
     */
    public $MiddleRiskNodeCount;

    /**
     * @var array 提示风险检查项的节点数量,返回7天数据
     */
    public $HintRiskNodeCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $SeriousRiskNodeCount 严重风险影响的节点数量,返回7天数据
     * @param array $HighRiskNodeCount 高风险影响的节点的数量,返回7天数据
     * @param array $MiddleRiskNodeCount 中风险检查项的节点数量,返回7天数据
     * @param array $HintRiskNodeCount 提示风险检查项的节点数量,返回7天数据
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("SeriousRiskNodeCount",$param) and $param["SeriousRiskNodeCount"] !== null) {
            $this->SeriousRiskNodeCount = $param["SeriousRiskNodeCount"];
        }

        if (array_key_exists("HighRiskNodeCount",$param) and $param["HighRiskNodeCount"] !== null) {
            $this->HighRiskNodeCount = $param["HighRiskNodeCount"];
        }

        if (array_key_exists("MiddleRiskNodeCount",$param) and $param["MiddleRiskNodeCount"] !== null) {
            $this->MiddleRiskNodeCount = $param["MiddleRiskNodeCount"];
        }

        if (array_key_exists("HintRiskNodeCount",$param) and $param["HintRiskNodeCount"] !== null) {
            $this->HintRiskNodeCount = $param["HintRiskNodeCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
