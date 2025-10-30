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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReplayInstanceAuditLog请求参数结构体
 *
 * @method string getSourceClusterId() 获取源集群id
 * @method void setSourceClusterId(string $SourceClusterId) 设置源集群id
 * @method string getSourceInstanceId() 获取源实例id
 * @method void setSourceInstanceId(string $SourceInstanceId) 设置源实例id
 * @method string getTargetClusterId() 获取目标集群id
目标集群必须为原始集群三天内克隆出的集群。
 * @method void setTargetClusterId(string $TargetClusterId) 设置目标集群id
目标集群必须为原始集群三天内克隆出的集群。
 * @method string getTargetInstanceId() 获取目标实例id
 * @method void setTargetInstanceId(string $TargetInstanceId) 设置目标实例id
 * @method string getTargetUserName() 获取用户名.需要host为%的用户名
 * @method void setTargetUserName(string $TargetUserName) 设置用户名.需要host为%的用户名
 * @method string getTargetPassword() 获取密码
 * @method void setTargetPassword(string $TargetPassword) 设置密码
 * @method string getStartTime() 获取开始时间。时间格式为：yyyy-DD-mm hh:mm:ss
 * @method void setStartTime(string $StartTime) 设置开始时间。时间格式为：yyyy-DD-mm hh:mm:ss
 * @method string getEndTime() 获取结束时间。时间格式为：yyyy-DD-mm hh:mm:ss
 * @method void setEndTime(string $EndTime) 设置结束时间。时间格式为：yyyy-DD-mm hh:mm:ss
 */
class ReplayInstanceAuditLogRequest extends AbstractModel
{
    /**
     * @var string 源集群id
     */
    public $SourceClusterId;

    /**
     * @var string 源实例id
     */
    public $SourceInstanceId;

    /**
     * @var string 目标集群id
目标集群必须为原始集群三天内克隆出的集群。
     */
    public $TargetClusterId;

    /**
     * @var string 目标实例id
     */
    public $TargetInstanceId;

    /**
     * @var string 用户名.需要host为%的用户名
     */
    public $TargetUserName;

    /**
     * @var string 密码
     */
    public $TargetPassword;

    /**
     * @var string 开始时间。时间格式为：yyyy-DD-mm hh:mm:ss
     */
    public $StartTime;

    /**
     * @var string 结束时间。时间格式为：yyyy-DD-mm hh:mm:ss
     */
    public $EndTime;

    /**
     * @param string $SourceClusterId 源集群id
     * @param string $SourceInstanceId 源实例id
     * @param string $TargetClusterId 目标集群id
目标集群必须为原始集群三天内克隆出的集群。
     * @param string $TargetInstanceId 目标实例id
     * @param string $TargetUserName 用户名.需要host为%的用户名
     * @param string $TargetPassword 密码
     * @param string $StartTime 开始时间。时间格式为：yyyy-DD-mm hh:mm:ss
     * @param string $EndTime 结束时间。时间格式为：yyyy-DD-mm hh:mm:ss
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
        if (array_key_exists("SourceClusterId",$param) and $param["SourceClusterId"] !== null) {
            $this->SourceClusterId = $param["SourceClusterId"];
        }

        if (array_key_exists("SourceInstanceId",$param) and $param["SourceInstanceId"] !== null) {
            $this->SourceInstanceId = $param["SourceInstanceId"];
        }

        if (array_key_exists("TargetClusterId",$param) and $param["TargetClusterId"] !== null) {
            $this->TargetClusterId = $param["TargetClusterId"];
        }

        if (array_key_exists("TargetInstanceId",$param) and $param["TargetInstanceId"] !== null) {
            $this->TargetInstanceId = $param["TargetInstanceId"];
        }

        if (array_key_exists("TargetUserName",$param) and $param["TargetUserName"] !== null) {
            $this->TargetUserName = $param["TargetUserName"];
        }

        if (array_key_exists("TargetPassword",$param) and $param["TargetPassword"] !== null) {
            $this->TargetPassword = $param["TargetPassword"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
