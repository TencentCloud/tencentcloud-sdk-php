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
 * 实时任务日志内容
 *
 * @method integer getTime() 获取日志时间戳，单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTime(integer $Time) 设置日志时间戳，单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPkgId() 获取日志包id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPkgId(string $PkgId) 设置日志包id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLog() 获取日志内容
 * @method void setLog(string $Log) 设置日志内容
 */
class LogContent extends AbstractModel
{
    /**
     * @var integer 日志时间戳，单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Time;

    /**
     * @var string 日志包id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PkgId;

    /**
     * @var string 日志内容
     */
    public $Log;

    /**
     * @param integer $Time 日志时间戳，单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PkgId 日志包id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Log 日志内容
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("Log",$param) and $param["Log"] !== null) {
            $this->Log = $param["Log"];
        }
    }
}
