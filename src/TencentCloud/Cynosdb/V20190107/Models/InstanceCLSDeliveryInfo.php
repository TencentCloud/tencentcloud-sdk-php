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
 * 实例日志投递信息
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getInstanceName() 获取实例name

 * @method void setInstanceName(string $InstanceName) 设置实例name

 * @method string getTopicId() 获取日志主题id

 * @method void setTopicId(string $TopicId) 设置日志主题id

 * @method string getTopicName() 获取日志主题name
 * @method void setTopicName(string $TopicName) 设置日志主题name
 * @method string getGroupId() 获取日志集id

 * @method void setGroupId(string $GroupId) 设置日志集id

 * @method string getGroupName() 获取日志集name

 * @method void setGroupName(string $GroupName) 设置日志集name

 * @method string getRegion() 获取日志投递地域

 * @method void setRegion(string $Region) 设置日志投递地域

 * @method string getStatus() 获取投递状态creating,running,offlining,offlined

 * @method void setStatus(string $Status) 设置投递状态creating,running,offlining,offlined

 * @method string getLogType() 获取日志类型
 * @method void setLogType(string $LogType) 设置日志类型
 */
class InstanceCLSDeliveryInfo extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 实例name

     */
    public $InstanceName;

    /**
     * @var string 日志主题id

     */
    public $TopicId;

    /**
     * @var string 日志主题name
     */
    public $TopicName;

    /**
     * @var string 日志集id

     */
    public $GroupId;

    /**
     * @var string 日志集name

     */
    public $GroupName;

    /**
     * @var string 日志投递地域

     */
    public $Region;

    /**
     * @var string 投递状态creating,running,offlining,offlined

     */
    public $Status;

    /**
     * @var string 日志类型
     */
    public $LogType;

    /**
     * @param string $InstanceId 实例id
     * @param string $InstanceName 实例name

     * @param string $TopicId 日志主题id

     * @param string $TopicName 日志主题name
     * @param string $GroupId 日志集id

     * @param string $GroupName 日志集name

     * @param string $Region 日志投递地域

     * @param string $Status 投递状态creating,running,offlining,offlined

     * @param string $LogType 日志类型
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }
    }
}
