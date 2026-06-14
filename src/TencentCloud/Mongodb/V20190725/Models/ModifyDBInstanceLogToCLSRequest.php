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
 * ModifyDBInstanceLogToCLS请求参数结构体
 *
 * @method string getInstanceId() 获取<p>指定实例ID。例如：cmgo-p8vn****。请登录 MongoDB 控制台在实例列表复制实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>指定实例ID。例如：cmgo-p8vn****。请登录 MongoDB 控制台在实例列表复制实例 ID。</p>
 * @method string getLogType() 获取<p>日志类型。MongoDB-ErrorLog：错误日志，MongoDB-SlowLog：慢日志，MongoDB-OperationLog：操作日志</p>
 * @method void setLogType(string $LogType) 设置<p>日志类型。MongoDB-ErrorLog：错误日志，MongoDB-SlowLog：慢日志，MongoDB-OperationLog：操作日志</p>
 * @method string getStatus() 获取<p>投递状态。ON：开启，OFF：关闭。</p>
 * @method void setStatus(string $Status) 设置<p>投递状态。ON：开启，OFF：关闭。</p>
 * @method boolean getCreateLogset() 获取<p>是否需要创建日志集。默认为 false。</p>
 * @method void setCreateLogset(boolean $CreateLogset) 设置<p>是否需要创建日志集。默认为 false。</p>
 * @method string getLogset() 获取<p>需要创建日志集时为日志集名称；选择已有日志集时，为日志集 ID。默认为空。 说明：1. 当参数 Status 的值为 ON 时，Logset 和 LogTopic 参数必须填一个。2.  当参数 CreateLogset 的值为 true 时，Logset 填日志集命名，例如 my_test，否则需要填日志集 id，例如 6adsaw-****。</p>
 * @method void setLogset(string $Logset) 设置<p>需要创建日志集时为日志集名称；选择已有日志集时，为日志集 ID。默认为空。 说明：1. 当参数 Status 的值为 ON 时，Logset 和 LogTopic 参数必须填一个。2.  当参数 CreateLogset 的值为 true 时，Logset 填日志集命名，例如 my_test，否则需要填日志集 id，例如 6adsaw-****。</p>
 * @method boolean getCreateLogTopic() 获取<p>是否需要创建日志主题。默认为 false。</p>
 * @method void setCreateLogTopic(boolean $CreateLogTopic) 设置<p>是否需要创建日志主题。默认为 false。</p>
 * @method string getLogTopic() 获取<p>需要创建日志主题时为日志主题名称；选择已有日志主题时，为日志主题 ID。默认为空。 说明：1. 当参数 Status 的值为 ON 时，Logset 和 LogTopic 参数必须填一个。2. 2.  当参数 CreateLogTopic 的值为 true 时，LogTopic 填日志主题命名，例如 my_test，否则需要填日志主题id，例如 6adsaw-****。</p>
 * @method void setLogTopic(string $LogTopic) 设置<p>需要创建日志主题时为日志主题名称；选择已有日志主题时，为日志主题 ID。默认为空。 说明：1. 当参数 Status 的值为 ON 时，Logset 和 LogTopic 参数必须填一个。2. 2.  当参数 CreateLogTopic 的值为 true 时，LogTopic 填日志主题命名，例如 my_test，否则需要填日志主题id，例如 6adsaw-****。</p>
 * @method string getCLSRegion() 获取<p>CLS 所在地域，不填则默认为 Region 的参数值。</p>
 * @method void setCLSRegion(string $CLSRegion) 设置<p>CLS 所在地域，不填则默认为 Region 的参数值。</p>
 */
class ModifyDBInstanceLogToCLSRequest extends AbstractModel
{
    /**
     * @var string <p>指定实例ID。例如：cmgo-p8vn****。请登录 MongoDB 控制台在实例列表复制实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>日志类型。MongoDB-ErrorLog：错误日志，MongoDB-SlowLog：慢日志，MongoDB-OperationLog：操作日志</p>
     */
    public $LogType;

    /**
     * @var string <p>投递状态。ON：开启，OFF：关闭。</p>
     */
    public $Status;

    /**
     * @var boolean <p>是否需要创建日志集。默认为 false。</p>
     */
    public $CreateLogset;

    /**
     * @var string <p>需要创建日志集时为日志集名称；选择已有日志集时，为日志集 ID。默认为空。 说明：1. 当参数 Status 的值为 ON 时，Logset 和 LogTopic 参数必须填一个。2.  当参数 CreateLogset 的值为 true 时，Logset 填日志集命名，例如 my_test，否则需要填日志集 id，例如 6adsaw-****。</p>
     */
    public $Logset;

    /**
     * @var boolean <p>是否需要创建日志主题。默认为 false。</p>
     */
    public $CreateLogTopic;

    /**
     * @var string <p>需要创建日志主题时为日志主题名称；选择已有日志主题时，为日志主题 ID。默认为空。 说明：1. 当参数 Status 的值为 ON 时，Logset 和 LogTopic 参数必须填一个。2. 2.  当参数 CreateLogTopic 的值为 true 时，LogTopic 填日志主题命名，例如 my_test，否则需要填日志主题id，例如 6adsaw-****。</p>
     */
    public $LogTopic;

    /**
     * @var string <p>CLS 所在地域，不填则默认为 Region 的参数值。</p>
     */
    public $CLSRegion;

    /**
     * @param string $InstanceId <p>指定实例ID。例如：cmgo-p8vn****。请登录 MongoDB 控制台在实例列表复制实例 ID。</p>
     * @param string $LogType <p>日志类型。MongoDB-ErrorLog：错误日志，MongoDB-SlowLog：慢日志，MongoDB-OperationLog：操作日志</p>
     * @param string $Status <p>投递状态。ON：开启，OFF：关闭。</p>
     * @param boolean $CreateLogset <p>是否需要创建日志集。默认为 false。</p>
     * @param string $Logset <p>需要创建日志集时为日志集名称；选择已有日志集时，为日志集 ID。默认为空。 说明：1. 当参数 Status 的值为 ON 时，Logset 和 LogTopic 参数必须填一个。2.  当参数 CreateLogset 的值为 true 时，Logset 填日志集命名，例如 my_test，否则需要填日志集 id，例如 6adsaw-****。</p>
     * @param boolean $CreateLogTopic <p>是否需要创建日志主题。默认为 false。</p>
     * @param string $LogTopic <p>需要创建日志主题时为日志主题名称；选择已有日志主题时，为日志主题 ID。默认为空。 说明：1. 当参数 Status 的值为 ON 时，Logset 和 LogTopic 参数必须填一个。2. 2.  当参数 CreateLogTopic 的值为 true 时，LogTopic 填日志主题命名，例如 my_test，否则需要填日志主题id，例如 6adsaw-****。</p>
     * @param string $CLSRegion <p>CLS 所在地域，不填则默认为 Region 的参数值。</p>
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

        if (array_key_exists("CLSRegion",$param) and $param["CLSRegion"] !== null) {
            $this->CLSRegion = $param["CLSRegion"];
        }
    }
}
