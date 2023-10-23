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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceLogToCLS请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getLogType() 获取日志类型：errorLog/slowLog
 * @method void setLogType(string $LogType) 设置日志类型：errorLog/slowLog
 * @method string getStatus() 获取投递状态：ON/OFF
 * @method void setStatus(string $Status) 设置投递状态：ON/OFF
 * @method boolean getCreateLogset() 获取是否需要创建日志集
 * @method void setCreateLogset(boolean $CreateLogset) 设置是否需要创建日志集
 * @method string getLogset() 获取需要创建日志集时为日志集名称；选择已有日志集时，为日志集ID
 * @method void setLogset(string $Logset) 设置需要创建日志集时为日志集名称；选择已有日志集时，为日志集ID
 * @method boolean getCreateLogTopic() 获取是否需要创建日志主题
 * @method void setCreateLogTopic(boolean $CreateLogTopic) 设置是否需要创建日志主题
 * @method string getLogTopic() 获取需要创建日志主题时为日志主题名称；选择已有日志主题时，为日志主题ID
 * @method void setLogTopic(string $LogTopic) 设置需要创建日志主题时为日志主题名称；选择已有日志主题时，为日志主题ID
 * @method integer getPeriod() 获取日志主题有效期，不填写时，默认30天
 * @method void setPeriod(integer $Period) 设置日志主题有效期，不填写时，默认30天
 * @method boolean getCreateIndex() 获取创建日志主题时，是否创建索引
 * @method void setCreateIndex(boolean $CreateIndex) 设置创建日志主题时，是否创建索引
 */
class ModifyDBInstanceLogToCLSRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 日志类型：errorLog/slowLog
     */
    public $LogType;

    /**
     * @var string 投递状态：ON/OFF
     */
    public $Status;

    /**
     * @var boolean 是否需要创建日志集
     */
    public $CreateLogset;

    /**
     * @var string 需要创建日志集时为日志集名称；选择已有日志集时，为日志集ID
     */
    public $Logset;

    /**
     * @var boolean 是否需要创建日志主题
     */
    public $CreateLogTopic;

    /**
     * @var string 需要创建日志主题时为日志主题名称；选择已有日志主题时，为日志主题ID
     */
    public $LogTopic;

    /**
     * @var integer 日志主题有效期，不填写时，默认30天
     */
    public $Period;

    /**
     * @var boolean 创建日志主题时，是否创建索引
     */
    public $CreateIndex;

    /**
     * @param string $InstanceId 实例ID
     * @param string $LogType 日志类型：errorLog/slowLog
     * @param string $Status 投递状态：ON/OFF
     * @param boolean $CreateLogset 是否需要创建日志集
     * @param string $Logset 需要创建日志集时为日志集名称；选择已有日志集时，为日志集ID
     * @param boolean $CreateLogTopic 是否需要创建日志主题
     * @param string $LogTopic 需要创建日志主题时为日志主题名称；选择已有日志主题时，为日志主题ID
     * @param integer $Period 日志主题有效期，不填写时，默认30天
     * @param boolean $CreateIndex 创建日志主题时，是否创建索引
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateLogset",$param) and $param["CreateLogset"] !== null) {
            $this->CreateLogset = $param["CreateLogset"];
        }

        if (array_key_exists("Logset",$param) and $param["Logset"] !== null) {
            $this->Logset = $param["Logset"];
        }

        if (array_key_exists("CreateLogTopic",$param) and $param["CreateLogTopic"] !== null) {
            $this->CreateLogTopic = $param["CreateLogTopic"];
        }

        if (array_key_exists("LogTopic",$param) and $param["LogTopic"] !== null) {
            $this->LogTopic = $param["LogTopic"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("CreateIndex",$param) and $param["CreateIndex"] !== null) {
            $this->CreateIndex = $param["CreateIndex"];
        }
    }
}
