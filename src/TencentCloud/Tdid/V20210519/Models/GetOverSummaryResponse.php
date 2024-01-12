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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetOverSummary返回参数结构体
 *
 * @method ResourceCounterData getAppCounter() 获取用户参与应用的统计指标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppCounter(ResourceCounterData $AppCounter) 设置用户参与应用的统计指标
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResourceCounterData getUserCounter() 获取用户部署应用的统计指标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserCounter(ResourceCounterData $UserCounter) 设置用户部署应用的统计指标
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppCnt() 获取用户参与的应用总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppCnt(integer $AppCnt) 设置用户参与的应用总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDeployCnt() 获取用户部署的应用总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeployCnt(integer $DeployCnt) 设置用户部署的应用总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getChainCnt() 获取部署网络子链总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChainCnt(integer $ChainCnt) 设置部署网络子链总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetOverSummaryResponse extends AbstractModel
{
    /**
     * @var ResourceCounterData 用户参与应用的统计指标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppCounter;

    /**
     * @var ResourceCounterData 用户部署应用的统计指标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserCounter;

    /**
     * @var integer 用户参与的应用总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppCnt;

    /**
     * @var integer 用户部署的应用总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeployCnt;

    /**
     * @var integer 部署网络子链总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChainCnt;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param ResourceCounterData $AppCounter 用户参与应用的统计指标
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResourceCounterData $UserCounter 用户部署应用的统计指标
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppCnt 用户参与的应用总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DeployCnt 用户部署的应用总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ChainCnt 部署网络子链总数
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("AppCounter",$param) and $param["AppCounter"] !== null) {
            $this->AppCounter = new ResourceCounterData();
            $this->AppCounter->deserialize($param["AppCounter"]);
        }

        if (array_key_exists("UserCounter",$param) and $param["UserCounter"] !== null) {
            $this->UserCounter = new ResourceCounterData();
            $this->UserCounter->deserialize($param["UserCounter"]);
        }

        if (array_key_exists("AppCnt",$param) and $param["AppCnt"] !== null) {
            $this->AppCnt = $param["AppCnt"];
        }

        if (array_key_exists("DeployCnt",$param) and $param["DeployCnt"] !== null) {
            $this->DeployCnt = $param["DeployCnt"];
        }

        if (array_key_exists("ChainCnt",$param) and $param["ChainCnt"] !== null) {
            $this->ChainCnt = $param["ChainCnt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
