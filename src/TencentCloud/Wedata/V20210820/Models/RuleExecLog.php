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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则执行日志
 *
 * @method boolean getFinished() 获取是否完成
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinished(boolean $Finished) 设置是否完成
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLog() 获取内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLog(string $Log) 设置内容
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleExecLog extends AbstractModel
{
    /**
     * @var boolean 是否完成
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Finished;

    /**
     * @var string 内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Log;

    /**
     * @param boolean $Finished 是否完成
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Log 内容
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
        if (array_key_exists("Finished",$param) and $param["Finished"] !== null) {
            $this->Finished = $param["Finished"];
        }

        if (array_key_exists("Log",$param) and $param["Log"] !== null) {
            $this->Log = $param["Log"];
        }
    }
}
