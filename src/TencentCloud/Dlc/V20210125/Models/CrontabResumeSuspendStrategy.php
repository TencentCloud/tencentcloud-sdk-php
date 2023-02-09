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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 定时启停策略信息
 *
 * @method string getResumeTime() 获取定时拉起时间：如：周一8点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResumeTime(string $ResumeTime) 设置定时拉起时间：如：周一8点
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSuspendTime() 获取定时挂起时间：如：周一20点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuspendTime(string $SuspendTime) 设置定时挂起时间：如：周一20点
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSuspendStrategy() 获取挂起配置：0（默认）：等待任务结束后挂起、1：强制挂起
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuspendStrategy(integer $SuspendStrategy) 设置挂起配置：0（默认）：等待任务结束后挂起、1：强制挂起
注意：此字段可能返回 null，表示取不到有效值。
 */
class CrontabResumeSuspendStrategy extends AbstractModel
{
    /**
     * @var string 定时拉起时间：如：周一8点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResumeTime;

    /**
     * @var string 定时挂起时间：如：周一20点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuspendTime;

    /**
     * @var integer 挂起配置：0（默认）：等待任务结束后挂起、1：强制挂起
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuspendStrategy;

    /**
     * @param string $ResumeTime 定时拉起时间：如：周一8点
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SuspendTime 定时挂起时间：如：周一20点
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SuspendStrategy 挂起配置：0（默认）：等待任务结束后挂起、1：强制挂起
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
        if (array_key_exists("ResumeTime",$param) and $param["ResumeTime"] !== null) {
            $this->ResumeTime = $param["ResumeTime"];
        }

        if (array_key_exists("SuspendTime",$param) and $param["SuspendTime"] !== null) {
            $this->SuspendTime = $param["SuspendTime"];
        }

        if (array_key_exists("SuspendStrategy",$param) and $param["SuspendStrategy"] !== null) {
            $this->SuspendStrategy = $param["SuspendStrategy"];
        }
    }
}
