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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志查询的每行日志信息
 *
 * @method string getLog() 获取日志内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLog(string $Log) 设置日志内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTime() 获取毫秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTime(integer $Time) 设置毫秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPkgId() 获取日志组Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPkgId(string $PkgId) 设置日志组Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPkgLogId() 获取日志Id，在日志组范围里唯一
 * @method void setPkgLogId(integer $PkgLogId) 设置日志Id，在日志组范围里唯一
 * @method string getContainerName() 获取日志所属的容器名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerName(string $ContainerName) 设置日志所属的容器名
注意：此字段可能返回 null，表示取不到有效值。
 */
class LogContent extends AbstractModel
{
    /**
     * @var string 日志内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Log;

    /**
     * @var integer 毫秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Time;

    /**
     * @var string 日志组Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PkgId;

    /**
     * @var integer 日志Id，在日志组范围里唯一
     */
    public $PkgLogId;

    /**
     * @var string 日志所属的容器名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerName;

    /**
     * @param string $Log 日志内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Time 毫秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PkgId 日志组Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PkgLogId 日志Id，在日志组范围里唯一
     * @param string $ContainerName 日志所属的容器名
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
        if (array_key_exists("Log",$param) and $param["Log"] !== null) {
            $this->Log = $param["Log"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("PkgLogId",$param) and $param["PkgLogId"] !== null) {
            $this->PkgLogId = $param["PkgLogId"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }
    }
}
