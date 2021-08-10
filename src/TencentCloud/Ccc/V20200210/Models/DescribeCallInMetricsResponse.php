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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCallInMetrics返回参数结构体
 *
 * @method integer getTimestamp() 获取时间戳
 * @method void setTimestamp(integer $Timestamp) 设置时间戳
 * @method CallInMetrics getTotalMetrics() 获取总体指标
 * @method void setTotalMetrics(CallInMetrics $TotalMetrics) 设置总体指标
 * @method array getNumberMetrics() 获取线路维度指标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumberMetrics(array $NumberMetrics) 设置线路维度指标
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSkillGroupMetrics() 获取技能组维度指标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSkillGroupMetrics(array $SkillGroupMetrics) 设置技能组维度指标
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCallInMetricsResponse extends AbstractModel
{
    /**
     * @var integer 时间戳
     */
    public $Timestamp;

    /**
     * @var CallInMetrics 总体指标
     */
    public $TotalMetrics;

    /**
     * @var array 线路维度指标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NumberMetrics;

    /**
     * @var array 技能组维度指标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SkillGroupMetrics;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Timestamp 时间戳
     * @param CallInMetrics $TotalMetrics 总体指标
     * @param array $NumberMetrics 线路维度指标
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SkillGroupMetrics 技能组维度指标
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("TotalMetrics",$param) and $param["TotalMetrics"] !== null) {
            $this->TotalMetrics = new CallInMetrics();
            $this->TotalMetrics->deserialize($param["TotalMetrics"]);
        }

        if (array_key_exists("NumberMetrics",$param) and $param["NumberMetrics"] !== null) {
            $this->NumberMetrics = [];
            foreach ($param["NumberMetrics"] as $key => $value){
                $obj = new CallInNumberMetrics();
                $obj->deserialize($value);
                array_push($this->NumberMetrics, $obj);
            }
        }

        if (array_key_exists("SkillGroupMetrics",$param) and $param["SkillGroupMetrics"] !== null) {
            $this->SkillGroupMetrics = [];
            foreach ($param["SkillGroupMetrics"] as $key => $value){
                $obj = new CallInSkillGroupMetrics();
                $obj->deserialize($value);
                array_push($this->SkillGroupMetrics, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
