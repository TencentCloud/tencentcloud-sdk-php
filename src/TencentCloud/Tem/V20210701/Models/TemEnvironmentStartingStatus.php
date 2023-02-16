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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 环境启动进程（只统计由环境启动操作触发的应用数量）
 *
 * @method integer getApplicationNumNeedToStart() 获取需要启动的应用数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationNumNeedToStart(integer $ApplicationNumNeedToStart) 设置需要启动的应用数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartedApplicationNum() 获取已经启动的应用数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartedApplicationNum(integer $StartedApplicationNum) 设置已经启动的应用数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartFailedApplicationNum() 获取启动失败的应用数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartFailedApplicationNum(integer $StartFailedApplicationNum) 设置启动失败的应用数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class TemEnvironmentStartingStatus extends AbstractModel
{
    /**
     * @var integer 需要启动的应用数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationNumNeedToStart;

    /**
     * @var integer 已经启动的应用数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartedApplicationNum;

    /**
     * @var integer 启动失败的应用数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartFailedApplicationNum;

    /**
     * @param integer $ApplicationNumNeedToStart 需要启动的应用数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartedApplicationNum 已经启动的应用数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartFailedApplicationNum 启动失败的应用数量
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
        if (array_key_exists("ApplicationNumNeedToStart",$param) and $param["ApplicationNumNeedToStart"] !== null) {
            $this->ApplicationNumNeedToStart = $param["ApplicationNumNeedToStart"];
        }

        if (array_key_exists("StartedApplicationNum",$param) and $param["StartedApplicationNum"] !== null) {
            $this->StartedApplicationNum = $param["StartedApplicationNum"];
        }

        if (array_key_exists("StartFailedApplicationNum",$param) and $param["StartFailedApplicationNum"] !== null) {
            $this->StartFailedApplicationNum = $param["StartFailedApplicationNum"];
        }
    }
}
