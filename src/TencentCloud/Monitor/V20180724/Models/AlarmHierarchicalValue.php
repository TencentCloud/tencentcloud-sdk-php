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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警分级阈值配置
 *
 * @method string getRemind() 获取提醒等级阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemind(string $Remind) 设置提醒等级阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWarn() 获取警告等级阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarn(string $Warn) 设置警告等级阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSerious() 获取严重等级阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSerious(string $Serious) 设置严重等级阈值
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlarmHierarchicalValue extends AbstractModel
{
    /**
     * @var string 提醒等级阈值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remind;

    /**
     * @var string 警告等级阈值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Warn;

    /**
     * @var string 严重等级阈值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Serious;

    /**
     * @param string $Remind 提醒等级阈值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Warn 警告等级阈值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Serious 严重等级阈值
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
        if (array_key_exists("Remind",$param) and $param["Remind"] !== null) {
            $this->Remind = $param["Remind"];
        }

        if (array_key_exists("Warn",$param) and $param["Warn"] !== null) {
            $this->Warn = $param["Warn"];
        }

        if (array_key_exists("Serious",$param) and $param["Serious"] !== null) {
            $this->Serious = $param["Serious"];
        }
    }
}
