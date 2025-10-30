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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAttackStatistics返回参数结构体
 *
 * @method integer getPendingAttackCount() 获取总攻击次数
 * @method void setPendingAttackCount(integer $PendingAttackCount) 设置总攻击次数
 * @method integer getPendingTryAttackCount() 获取总尝试攻击次数
 * @method void setPendingTryAttackCount(integer $PendingTryAttackCount) 设置总尝试攻击次数
 * @method integer getPendingSuccAttackCount() 获取总攻击成功次数
 * @method void setPendingSuccAttackCount(integer $PendingSuccAttackCount) 设置总攻击成功次数
 * @method integer getPendingNewAttackCount() 获取今日新增攻击次数
 * @method void setPendingNewAttackCount(integer $PendingNewAttackCount) 设置今日新增攻击次数
 * @method integer getAttackedAssetCount() 获取总受攻击资产数量
 * @method void setAttackedAssetCount(integer $AttackedAssetCount) 设置总受攻击资产数量
 * @method integer getNewAttackedAssetCount() 获取今日新增受攻击资产数量
 * @method void setNewAttackedAssetCount(integer $NewAttackedAssetCount) 设置今日新增受攻击资产数量
 * @method integer getAttackedPortCount() 获取总受攻击端口数量
 * @method void setAttackedPortCount(integer $AttackedPortCount) 设置总受攻击端口数量
 * @method integer getNewAttackedPortCount() 获取今日新增受攻击端口数量
 * @method void setNewAttackedPortCount(integer $NewAttackedPortCount) 设置今日新增受攻击端口数量
 * @method integer getAttackSrcIpCount() 获取总攻击来源ip数量
 * @method void setAttackSrcIpCount(integer $AttackSrcIpCount) 设置总攻击来源ip数量
 * @method integer getNewAttackSrcIpCount() 获取今日新增攻击来源ip数量
 * @method void setNewAttackSrcIpCount(integer $NewAttackSrcIpCount) 设置今日新增攻击来源ip数量
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAttackStatisticsResponse extends AbstractModel
{
    /**
     * @var integer 总攻击次数
     */
    public $PendingAttackCount;

    /**
     * @var integer 总尝试攻击次数
     */
    public $PendingTryAttackCount;

    /**
     * @var integer 总攻击成功次数
     */
    public $PendingSuccAttackCount;

    /**
     * @var integer 今日新增攻击次数
     */
    public $PendingNewAttackCount;

    /**
     * @var integer 总受攻击资产数量
     */
    public $AttackedAssetCount;

    /**
     * @var integer 今日新增受攻击资产数量
     */
    public $NewAttackedAssetCount;

    /**
     * @var integer 总受攻击端口数量
     */
    public $AttackedPortCount;

    /**
     * @var integer 今日新增受攻击端口数量
     */
    public $NewAttackedPortCount;

    /**
     * @var integer 总攻击来源ip数量
     */
    public $AttackSrcIpCount;

    /**
     * @var integer 今日新增攻击来源ip数量
     */
    public $NewAttackSrcIpCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $PendingAttackCount 总攻击次数
     * @param integer $PendingTryAttackCount 总尝试攻击次数
     * @param integer $PendingSuccAttackCount 总攻击成功次数
     * @param integer $PendingNewAttackCount 今日新增攻击次数
     * @param integer $AttackedAssetCount 总受攻击资产数量
     * @param integer $NewAttackedAssetCount 今日新增受攻击资产数量
     * @param integer $AttackedPortCount 总受攻击端口数量
     * @param integer $NewAttackedPortCount 今日新增受攻击端口数量
     * @param integer $AttackSrcIpCount 总攻击来源ip数量
     * @param integer $NewAttackSrcIpCount 今日新增攻击来源ip数量
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
        if (array_key_exists("PendingAttackCount",$param) and $param["PendingAttackCount"] !== null) {
            $this->PendingAttackCount = $param["PendingAttackCount"];
        }

        if (array_key_exists("PendingTryAttackCount",$param) and $param["PendingTryAttackCount"] !== null) {
            $this->PendingTryAttackCount = $param["PendingTryAttackCount"];
        }

        if (array_key_exists("PendingSuccAttackCount",$param) and $param["PendingSuccAttackCount"] !== null) {
            $this->PendingSuccAttackCount = $param["PendingSuccAttackCount"];
        }

        if (array_key_exists("PendingNewAttackCount",$param) and $param["PendingNewAttackCount"] !== null) {
            $this->PendingNewAttackCount = $param["PendingNewAttackCount"];
        }

        if (array_key_exists("AttackedAssetCount",$param) and $param["AttackedAssetCount"] !== null) {
            $this->AttackedAssetCount = $param["AttackedAssetCount"];
        }

        if (array_key_exists("NewAttackedAssetCount",$param) and $param["NewAttackedAssetCount"] !== null) {
            $this->NewAttackedAssetCount = $param["NewAttackedAssetCount"];
        }

        if (array_key_exists("AttackedPortCount",$param) and $param["AttackedPortCount"] !== null) {
            $this->AttackedPortCount = $param["AttackedPortCount"];
        }

        if (array_key_exists("NewAttackedPortCount",$param) and $param["NewAttackedPortCount"] !== null) {
            $this->NewAttackedPortCount = $param["NewAttackedPortCount"];
        }

        if (array_key_exists("AttackSrcIpCount",$param) and $param["AttackSrcIpCount"] !== null) {
            $this->AttackSrcIpCount = $param["AttackSrcIpCount"];
        }

        if (array_key_exists("NewAttackSrcIpCount",$param) and $param["NewAttackSrcIpCount"] !== null) {
            $this->NewAttackSrcIpCount = $param["NewAttackSrcIpCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
