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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能运维诊断项结果
 *
 * @method string getJobName() 获取诊断项名
 * @method void setJobName(string $JobName) 设置诊断项名
 * @method integer getStatus() 获取诊断项状态：-2失败，-1待重试，0运行中，1成功
 * @method void setStatus(integer $Status) 设置诊断项状态：-2失败，-1待重试，0运行中，1成功
 * @method integer getScore() 获取诊断项得分
 * @method void setScore(integer $Score) 设置诊断项得分
 * @method string getSummary() 获取诊断摘要
 * @method void setSummary(string $Summary) 设置诊断摘要
 * @method string getAdvise() 获取诊断建议
 * @method void setAdvise(string $Advise) 设置诊断建议
 * @method string getDetail() 获取诊断详情
 * @method void setDetail(string $Detail) 设置诊断详情
 * @method array getMetricDetails() 获取诊断指标详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricDetails(array $MetricDetails) 设置诊断指标详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLogDetails() 获取诊断日志详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogDetails(array $LogDetails) 设置诊断日志详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSettingDetails() 获取诊断配置详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSettingDetails(array $SettingDetails) 设置诊断配置详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class DiagnoseJobResult extends AbstractModel
{
    /**
     * @var string 诊断项名
     */
    public $JobName;

    /**
     * @var integer 诊断项状态：-2失败，-1待重试，0运行中，1成功
     */
    public $Status;

    /**
     * @var integer 诊断项得分
     */
    public $Score;

    /**
     * @var string 诊断摘要
     */
    public $Summary;

    /**
     * @var string 诊断建议
     */
    public $Advise;

    /**
     * @var string 诊断详情
     */
    public $Detail;

    /**
     * @var array 诊断指标详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricDetails;

    /**
     * @var array 诊断日志详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogDetails;

    /**
     * @var array 诊断配置详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SettingDetails;

    /**
     * @param string $JobName 诊断项名
     * @param integer $Status 诊断项状态：-2失败，-1待重试，0运行中，1成功
     * @param integer $Score 诊断项得分
     * @param string $Summary 诊断摘要
     * @param string $Advise 诊断建议
     * @param string $Detail 诊断详情
     * @param array $MetricDetails 诊断指标详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LogDetails 诊断日志详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SettingDetails 诊断配置详情
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
        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = $param["Summary"];
        }

        if (array_key_exists("Advise",$param) and $param["Advise"] !== null) {
            $this->Advise = $param["Advise"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("MetricDetails",$param) and $param["MetricDetails"] !== null) {
            $this->MetricDetails = [];
            foreach ($param["MetricDetails"] as $key => $value){
                $obj = new MetricDetail();
                $obj->deserialize($value);
                array_push($this->MetricDetails, $obj);
            }
        }

        if (array_key_exists("LogDetails",$param) and $param["LogDetails"] !== null) {
            $this->LogDetails = [];
            foreach ($param["LogDetails"] as $key => $value){
                $obj = new LogDetail();
                $obj->deserialize($value);
                array_push($this->LogDetails, $obj);
            }
        }

        if (array_key_exists("SettingDetails",$param) and $param["SettingDetails"] !== null) {
            $this->SettingDetails = [];
            foreach ($param["SettingDetails"] as $key => $value){
                $obj = new SettingDetail();
                $obj->deserialize($value);
                array_push($this->SettingDetails, $obj);
            }
        }
    }
}
