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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InvokeLimitConfigDTO
 *
 * @method string getType() 获取Type类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置Type类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTokenBucketMaxNum() 获取令牌桶最大容量

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTokenBucketMaxNum(integer $TokenBucketMaxNum) 设置令牌桶最大容量

注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTokenBucketRate() 获取令牌生成速率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTokenBucketRate(integer $TokenBucketRate) 设置令牌生成速率
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFunnelMaxNum() 获取漏斗容量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFunnelMaxNum(integer $FunnelMaxNum) 设置漏斗容量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFunnelRate() 获取漏嘴流速
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFunnelRate(integer $FunnelRate) 设置漏嘴流速
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSlidingWindowMaxNum() 获取滑动窗口最大请求数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSlidingWindowMaxNum(integer $SlidingWindowMaxNum) 设置滑动窗口最大请求数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSlidingWindowSize() 获取滑动窗口长度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSlidingWindowSize(integer $SlidingWindowSize) 设置滑动窗口长度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeWindow() 获取时间窗口最大请求数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeWindow(integer $TimeWindow) 设置时间窗口最大请求数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeWindowInterval() 获取时间窗口长度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeWindowInterval(integer $TimeWindowInterval) 设置时间窗口长度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeout() 获取请求的超时时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeout(integer $Timeout) 设置请求的超时时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class InvokeLimitConfigDTO extends AbstractModel
{
    /**
     * @var string Type类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var integer 令牌桶最大容量

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TokenBucketMaxNum;

    /**
     * @var integer 令牌生成速率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TokenBucketRate;

    /**
     * @var integer 漏斗容量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FunnelMaxNum;

    /**
     * @var integer 漏嘴流速
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FunnelRate;

    /**
     * @var integer 滑动窗口最大请求数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SlidingWindowMaxNum;

    /**
     * @var integer 滑动窗口长度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SlidingWindowSize;

    /**
     * @var integer 时间窗口最大请求数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeWindow;

    /**
     * @var integer 时间窗口长度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeWindowInterval;

    /**
     * @var integer 请求的超时时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timeout;

    /**
     * @param string $Type Type类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TokenBucketMaxNum 令牌桶最大容量

注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TokenBucketRate 令牌生成速率
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FunnelMaxNum 漏斗容量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FunnelRate 漏嘴流速
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SlidingWindowMaxNum 滑动窗口最大请求数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SlidingWindowSize 滑动窗口长度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TimeWindow 时间窗口最大请求数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TimeWindowInterval 时间窗口长度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Timeout 请求的超时时间
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TokenBucketMaxNum",$param) and $param["TokenBucketMaxNum"] !== null) {
            $this->TokenBucketMaxNum = $param["TokenBucketMaxNum"];
        }

        if (array_key_exists("TokenBucketRate",$param) and $param["TokenBucketRate"] !== null) {
            $this->TokenBucketRate = $param["TokenBucketRate"];
        }

        if (array_key_exists("FunnelMaxNum",$param) and $param["FunnelMaxNum"] !== null) {
            $this->FunnelMaxNum = $param["FunnelMaxNum"];
        }

        if (array_key_exists("FunnelRate",$param) and $param["FunnelRate"] !== null) {
            $this->FunnelRate = $param["FunnelRate"];
        }

        if (array_key_exists("SlidingWindowMaxNum",$param) and $param["SlidingWindowMaxNum"] !== null) {
            $this->SlidingWindowMaxNum = $param["SlidingWindowMaxNum"];
        }

        if (array_key_exists("SlidingWindowSize",$param) and $param["SlidingWindowSize"] !== null) {
            $this->SlidingWindowSize = $param["SlidingWindowSize"];
        }

        if (array_key_exists("TimeWindow",$param) and $param["TimeWindow"] !== null) {
            $this->TimeWindow = $param["TimeWindow"];
        }

        if (array_key_exists("TimeWindowInterval",$param) and $param["TimeWindowInterval"] !== null) {
            $this->TimeWindowInterval = $param["TimeWindowInterval"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }
    }
}
