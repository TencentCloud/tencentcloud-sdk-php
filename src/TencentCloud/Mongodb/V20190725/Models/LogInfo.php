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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志详情
 *
 * @method string getLogComponent() 获取日志类别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogComponent(string $LogComponent) 设置日志类别
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogLevel() 获取日志级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogLevel(string $LogLevel) 设置日志级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogTime() 获取日志产生时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogTime(string $LogTime) 设置日志产生时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogDetail() 获取日志详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogDetail(string $LogDetail) 设置日志详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogConnection() 获取日志连接信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogConnection(string $LogConnection) 设置日志连接信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogId() 获取日志id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogId(string $LogId) 设置日志id
注意：此字段可能返回 null，表示取不到有效值。
 */
class LogInfo extends AbstractModel
{
    /**
     * @var string 日志类别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogComponent;

    /**
     * @var string 日志级别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogLevel;

    /**
     * @var string 日志产生时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogTime;

    /**
     * @var string 日志详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogDetail;

    /**
     * @var string 日志连接信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogConnection;

    /**
     * @var string 日志id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogId;

    /**
     * @param string $LogComponent 日志类别
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogLevel 日志级别
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogTime 日志产生时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogDetail 日志详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogConnection 日志连接信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogId 日志id
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
        if (array_key_exists("LogComponent",$param) and $param["LogComponent"] !== null) {
            $this->LogComponent = $param["LogComponent"];
        }

        if (array_key_exists("LogLevel",$param) and $param["LogLevel"] !== null) {
            $this->LogLevel = $param["LogLevel"];
        }

        if (array_key_exists("LogTime",$param) and $param["LogTime"] !== null) {
            $this->LogTime = $param["LogTime"];
        }

        if (array_key_exists("LogDetail",$param) and $param["LogDetail"] !== null) {
            $this->LogDetail = $param["LogDetail"];
        }

        if (array_key_exists("LogConnection",$param) and $param["LogConnection"] !== null) {
            $this->LogConnection = $param["LogConnection"];
        }

        if (array_key_exists("LogId",$param) and $param["LogId"] !== null) {
            $this->LogId = $param["LogId"];
        }
    }
}
