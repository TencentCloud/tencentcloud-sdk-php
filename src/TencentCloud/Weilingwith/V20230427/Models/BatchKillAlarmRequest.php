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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchKillAlarm请求参数结构体
 *
 * @method integer getBeginTime() 获取告警开始时间，必填,时间戳秒
 * @method void setBeginTime(integer $BeginTime) 设置告警开始时间，必填,时间戳秒
 * @method integer getEndTime() 获取告警结束时间，必填，时间戳秒
 * @method void setEndTime(integer $EndTime) 设置告警结束时间，必填，时间戳秒
 * @method array getStatusSet() 获取告警状态: unprocessed processing

 * @method void setStatusSet(array $StatusSet) 设置告警状态: unprocessed processing

 * @method integer getWorkspaceId() 获取工作空间id
 * @method void setWorkspaceId(integer $WorkspaceId) 设置工作空间id
 * @method string getUserId() 获取当前操作用户id
 * @method void setUserId(string $UserId) 设置当前操作用户id
 * @method string getUserName() 获取当前操作用户名称
 * @method void setUserName(string $UserName) 设置当前操作用户名称
 * @method string getApplicationToken() 获取应用token
 * @method void setApplicationToken(string $ApplicationToken) 设置应用token
 * @method string getProcessorId() 获取当前告警处理人，填孪生中台用户id,多个用逗号分隔

 * @method void setProcessorId(string $ProcessorId) 设置当前告警处理人，填孪生中台用户id,多个用逗号分隔

 * @method array getAlarmTypeSet() 获取告警子类型(如果传告警子类型，则必传父类型)

 * @method void setAlarmTypeSet(array $AlarmTypeSet) 设置告警子类型(如果传告警子类型，则必传父类型)

 * @method array getLevelSet() 获取告警级别,包括1~5
 * @method void setLevelSet(array $LevelSet) 设置告警级别,包括1~5
 * @method array getWIDSet() 获取设备id
 * @method void setWIDSet(array $WIDSet) 设置设备id
 * @method array getIdSet() 获取告警id
 * @method void setIdSet(array $IdSet) 设置告警id
 * @method string getDesc() 获取告警处理的说明
 * @method void setDesc(string $Desc) 设置告警处理的说明
 */
class BatchKillAlarmRequest extends AbstractModel
{
    /**
     * @var integer 告警开始时间，必填,时间戳秒
     */
    public $BeginTime;

    /**
     * @var integer 告警结束时间，必填，时间戳秒
     */
    public $EndTime;

    /**
     * @var array 告警状态: unprocessed processing

     */
    public $StatusSet;

    /**
     * @var integer 工作空间id
     */
    public $WorkspaceId;

    /**
     * @var string 当前操作用户id
     */
    public $UserId;

    /**
     * @var string 当前操作用户名称
     */
    public $UserName;

    /**
     * @var string 应用token
     */
    public $ApplicationToken;

    /**
     * @var string 当前告警处理人，填孪生中台用户id,多个用逗号分隔

     */
    public $ProcessorId;

    /**
     * @var array 告警子类型(如果传告警子类型，则必传父类型)

     */
    public $AlarmTypeSet;

    /**
     * @var array 告警级别,包括1~5
     */
    public $LevelSet;

    /**
     * @var array 设备id
     */
    public $WIDSet;

    /**
     * @var array 告警id
     */
    public $IdSet;

    /**
     * @var string 告警处理的说明
     */
    public $Desc;

    /**
     * @param integer $BeginTime 告警开始时间，必填,时间戳秒
     * @param integer $EndTime 告警结束时间，必填，时间戳秒
     * @param array $StatusSet 告警状态: unprocessed processing

     * @param integer $WorkspaceId 工作空间id
     * @param string $UserId 当前操作用户id
     * @param string $UserName 当前操作用户名称
     * @param string $ApplicationToken 应用token
     * @param string $ProcessorId 当前告警处理人，填孪生中台用户id,多个用逗号分隔

     * @param array $AlarmTypeSet 告警子类型(如果传告警子类型，则必传父类型)

     * @param array $LevelSet 告警级别,包括1~5
     * @param array $WIDSet 设备id
     * @param array $IdSet 告警id
     * @param string $Desc 告警处理的说明
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
        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StatusSet",$param) and $param["StatusSet"] !== null) {
            $this->StatusSet = $param["StatusSet"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("ApplicationToken",$param) and $param["ApplicationToken"] !== null) {
            $this->ApplicationToken = $param["ApplicationToken"];
        }

        if (array_key_exists("ProcessorId",$param) and $param["ProcessorId"] !== null) {
            $this->ProcessorId = $param["ProcessorId"];
        }

        if (array_key_exists("AlarmTypeSet",$param) and $param["AlarmTypeSet"] !== null) {
            $this->AlarmTypeSet = [];
            foreach ($param["AlarmTypeSet"] as $key => $value){
                $obj = new AlarmTypeInfo();
                $obj->deserialize($value);
                array_push($this->AlarmTypeSet, $obj);
            }
        }

        if (array_key_exists("LevelSet",$param) and $param["LevelSet"] !== null) {
            $this->LevelSet = $param["LevelSet"];
        }

        if (array_key_exists("WIDSet",$param) and $param["WIDSet"] !== null) {
            $this->WIDSet = $param["WIDSet"];
        }

        if (array_key_exists("IdSet",$param) and $param["IdSet"] !== null) {
            $this->IdSet = $param["IdSet"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
