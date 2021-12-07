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
 * DescribeAffectedClusterCount返回参数结构体
 *
 * @method integer getSeriousRiskClusterCount() 获取严重风险的集群数量
 * @method void setSeriousRiskClusterCount(integer $SeriousRiskClusterCount) 设置严重风险的集群数量
 * @method integer getHighRiskClusterCount() 获取高危风险的集群数量
 * @method void setHighRiskClusterCount(integer $HighRiskClusterCount) 设置高危风险的集群数量
 * @method integer getMiddleRiskClusterCount() 获取中危风险的集群数量
 * @method void setMiddleRiskClusterCount(integer $MiddleRiskClusterCount) 设置中危风险的集群数量
 * @method integer getHintRiskClusterCount() 获取低危风险的集群数量
 * @method void setHintRiskClusterCount(integer $HintRiskClusterCount) 设置低危风险的集群数量
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAffectedClusterCountResponse extends AbstractModel
{
    /**
     * @var integer 严重风险的集群数量
     */
    public $SeriousRiskClusterCount;

    /**
     * @var integer 高危风险的集群数量
     */
    public $HighRiskClusterCount;

    /**
     * @var integer 中危风险的集群数量
     */
    public $MiddleRiskClusterCount;

    /**
     * @var integer 低危风险的集群数量
     */
    public $HintRiskClusterCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $SeriousRiskClusterCount 严重风险的集群数量
     * @param integer $HighRiskClusterCount 高危风险的集群数量
     * @param integer $MiddleRiskClusterCount 中危风险的集群数量
     * @param integer $HintRiskClusterCount 低危风险的集群数量
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
        if (array_key_exists("SeriousRiskClusterCount",$param) and $param["SeriousRiskClusterCount"] !== null) {
            $this->SeriousRiskClusterCount = $param["SeriousRiskClusterCount"];
        }

        if (array_key_exists("HighRiskClusterCount",$param) and $param["HighRiskClusterCount"] !== null) {
            $this->HighRiskClusterCount = $param["HighRiskClusterCount"];
        }

        if (array_key_exists("MiddleRiskClusterCount",$param) and $param["MiddleRiskClusterCount"] !== null) {
            $this->MiddleRiskClusterCount = $param["MiddleRiskClusterCount"];
        }

        if (array_key_exists("HintRiskClusterCount",$param) and $param["HintRiskClusterCount"] !== null) {
            $this->HintRiskClusterCount = $param["HintRiskClusterCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
