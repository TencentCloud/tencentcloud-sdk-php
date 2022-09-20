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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 拨测结果信息
 *
 * @method integer getStatusCode() 获取任务状态，取值有：
<li> 200：任务完成;</li>
<li> 100：任务进行中；</li>
<li> 503: 任务失败。</li>
 * @method void setStatusCode(integer $StatusCode) 设置任务状态，取值有：
<li> 200：任务完成;</li>
<li> 100：任务进行中；</li>
<li> 503: 任务失败。</li>
 * @method string getTestId() 获取拨测任务 ID。
 * @method void setTestId(string $TestId) 设置拨测任务 ID。
 * @method SpeedTestingConfig getSpeedTestingConfig() 获取拨测任务配置。
 * @method void setSpeedTestingConfig(SpeedTestingConfig $SpeedTestingConfig) 设置拨测任务配置。
 * @method SpeedTestingStatistics getSpeedTestingStatistics() 获取拨测任务统计结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpeedTestingStatistics(SpeedTestingStatistics $SpeedTestingStatistics) 设置拨测任务统计结果。
注意：此字段可能返回 null，表示取不到有效值。
 */
class SpeedTestingInfo extends AbstractModel
{
    /**
     * @var integer 任务状态，取值有：
<li> 200：任务完成;</li>
<li> 100：任务进行中；</li>
<li> 503: 任务失败。</li>
     */
    public $StatusCode;

    /**
     * @var string 拨测任务 ID。
     */
    public $TestId;

    /**
     * @var SpeedTestingConfig 拨测任务配置。
     */
    public $SpeedTestingConfig;

    /**
     * @var SpeedTestingStatistics 拨测任务统计结果。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpeedTestingStatistics;

    /**
     * @param integer $StatusCode 任务状态，取值有：
<li> 200：任务完成;</li>
<li> 100：任务进行中；</li>
<li> 503: 任务失败。</li>
     * @param string $TestId 拨测任务 ID。
     * @param SpeedTestingConfig $SpeedTestingConfig 拨测任务配置。
     * @param SpeedTestingStatistics $SpeedTestingStatistics 拨测任务统计结果。
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
        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("TestId",$param) and $param["TestId"] !== null) {
            $this->TestId = $param["TestId"];
        }

        if (array_key_exists("SpeedTestingConfig",$param) and $param["SpeedTestingConfig"] !== null) {
            $this->SpeedTestingConfig = new SpeedTestingConfig();
            $this->SpeedTestingConfig->deserialize($param["SpeedTestingConfig"]);
        }

        if (array_key_exists("SpeedTestingStatistics",$param) and $param["SpeedTestingStatistics"] !== null) {
            $this->SpeedTestingStatistics = new SpeedTestingStatistics();
            $this->SpeedTestingStatistics->deserialize($param["SpeedTestingStatistics"]);
        }
    }
}
