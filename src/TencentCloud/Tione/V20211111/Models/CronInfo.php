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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 跑批任务周期描述
 *
 * @method string getCronConfig() 获取cron配置
 * @method void setCronConfig(string $CronConfig) 设置cron配置
 * @method string getStartTime() 获取周期开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置周期开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取周期结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置周期结束时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class CronInfo extends AbstractModel
{
    /**
     * @var string cron配置
     */
    public $CronConfig;

    /**
     * @var string 周期开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 周期结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @param string $CronConfig cron配置
     * @param string $StartTime 周期开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 周期结束时间
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
        if (array_key_exists("CronConfig",$param) and $param["CronConfig"] !== null) {
            $this->CronConfig = $param["CronConfig"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
