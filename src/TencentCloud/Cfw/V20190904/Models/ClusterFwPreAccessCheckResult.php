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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预接入检查结果，序列化后写入 cfw_gwlb_lead_switch.check_result 列
 *
 * @method integer getStatus() 获取检查状态，0：进行中，1：通过，2：失败
 * @method void setStatus(integer $Status) 设置检查状态，0：进行中，1：通过，2：失败
 * @method string getCurrentStage() 获取当前/最后所处检查项。Status=1（通过）时为 done，Status=2（失败）时为失败的检查项 key，Status=0（进行中）时为正在执行的检查项 key
 * @method void setCurrentStage(string $CurrentStage) 设置当前/最后所处检查项。Status=1（通过）时为 done，Status=2（失败）时为失败的检查项 key，Status=0（进行中）时为正在执行的检查项 key
 * @method array getStages() 获取逐条检查项结果列表，按执行顺序追加
 * @method void setStages(array $Stages) 设置逐条检查项结果列表，按执行顺序追加
 * @method PolicyRoutePreCheckReport getPolicyRouteReport() 获取策略路由配额核算报告，仅在 Status=1（通过）时非空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyRouteReport(PolicyRoutePreCheckReport $PolicyRouteReport) 设置策略路由配额核算报告，仅在 Status=1（通过）时非空
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取最近一次更新时间，格式：YYYY-MM-DD HH:MM:SS
 * @method void setUpdateTime(string $UpdateTime) 设置最近一次更新时间，格式：YYYY-MM-DD HH:MM:SS
 */
class ClusterFwPreAccessCheckResult extends AbstractModel
{
    /**
     * @var integer 检查状态，0：进行中，1：通过，2：失败
     */
    public $Status;

    /**
     * @var string 当前/最后所处检查项。Status=1（通过）时为 done，Status=2（失败）时为失败的检查项 key，Status=0（进行中）时为正在执行的检查项 key
     */
    public $CurrentStage;

    /**
     * @var array 逐条检查项结果列表，按执行顺序追加
     */
    public $Stages;

    /**
     * @var PolicyRoutePreCheckReport 策略路由配额核算报告，仅在 Status=1（通过）时非空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyRouteReport;

    /**
     * @var string 最近一次更新时间，格式：YYYY-MM-DD HH:MM:SS
     */
    public $UpdateTime;

    /**
     * @param integer $Status 检查状态，0：进行中，1：通过，2：失败
     * @param string $CurrentStage 当前/最后所处检查项。Status=1（通过）时为 done，Status=2（失败）时为失败的检查项 key，Status=0（进行中）时为正在执行的检查项 key
     * @param array $Stages 逐条检查项结果列表，按执行顺序追加
     * @param PolicyRoutePreCheckReport $PolicyRouteReport 策略路由配额核算报告，仅在 Status=1（通过）时非空
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 最近一次更新时间，格式：YYYY-MM-DD HH:MM:SS
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CurrentStage",$param) and $param["CurrentStage"] !== null) {
            $this->CurrentStage = $param["CurrentStage"];
        }

        if (array_key_exists("Stages",$param) and $param["Stages"] !== null) {
            $this->Stages = [];
            foreach ($param["Stages"] as $key => $value){
                $obj = new ClusterFwPreAccessCheckStage();
                $obj->deserialize($value);
                array_push($this->Stages, $obj);
            }
        }

        if (array_key_exists("PolicyRouteReport",$param) and $param["PolicyRouteReport"] !== null) {
            $this->PolicyRouteReport = new PolicyRoutePreCheckReport();
            $this->PolicyRouteReport->deserialize($param["PolicyRouteReport"]);
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
