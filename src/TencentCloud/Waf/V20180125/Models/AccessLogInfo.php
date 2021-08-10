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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单条日志数据描述
 *
 * @method integer getTime() 获取日志时间，单位ms
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTime(integer $Time) 设置日志时间，单位ms
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopicId() 获取日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicId(string $TopicId) 设置日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopicName() 获取日志主题名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicName(string $TopicName) 设置日志主题名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSource() 获取日志来源IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSource(string $Source) 设置日志来源IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileName() 获取日志文件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileName(string $FileName) 设置日志文件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPkgId() 获取日志上报请求包的ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPkgId(string $PkgId) 设置日志上报请求包的ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPkgLogId() 获取请求包内日志的ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPkgLogId(string $PkgLogId) 设置请求包内日志的ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogJson() 获取日志内容的Json序列化字符串
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogJson(string $LogJson) 设置日志内容的Json序列化字符串
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AccessLogInfo extends AbstractModel
{
    /**
     * @var integer 日志时间，单位ms
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Time;

    /**
     * @var string 日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicId;

    /**
     * @var string 日志主题名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicName;

    /**
     * @var string 日志来源IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Source;

    /**
     * @var string 日志文件名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileName;

    /**
     * @var string 日志上报请求包的ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PkgId;

    /**
     * @var string 请求包内日志的ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PkgLogId;

    /**
     * @var string 日志内容的Json序列化字符串
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogJson;

    /**
     * @param integer $Time 日志时间，单位ms
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopicId 日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopicName 日志主题名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Source 日志来源IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileName 日志文件名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PkgId 日志上报请求包的ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PkgLogId 请求包内日志的ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogJson 日志内容的Json序列化字符串
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("PkgLogId",$param) and $param["PkgLogId"] !== null) {
            $this->PkgLogId = $param["PkgLogId"];
        }

        if (array_key_exists("LogJson",$param) and $param["LogJson"] !== null) {
            $this->LogJson = $param["LogJson"];
        }
    }
}
