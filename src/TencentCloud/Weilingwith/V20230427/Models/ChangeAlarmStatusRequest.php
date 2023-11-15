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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChangeAlarmStatus请求参数结构体
 *
 * @method string getId() 获取告警的id，返回的列表中的id
 * @method void setId(string $Id) 设置告警的id，返回的列表中的id
 * @method string getStatus() 获取告警状态 processed unprocessed processing misreport shield
 * @method void setStatus(string $Status) 设置告警状态 processed unprocessed processing misreport shield
 * @method integer getProcessTime() 获取告警处理时间
 * @method void setProcessTime(integer $ProcessTime) 设置告警处理时间
 * @method string getProcessType() 获取处理类型
 * @method void setProcessType(string $ProcessType) 设置处理类型
 * @method integer getWorkspaceId() 获取工作空间id
 * @method void setWorkspaceId(integer $WorkspaceId) 设置工作空间id
 * @method string getUserId() 获取当前操作用户id
 * @method void setUserId(string $UserId) 设置当前操作用户id
 * @method string getUserName() 获取当前操作用户名称
 * @method void setUserName(string $UserName) 设置当前操作用户名称
 * @method string getApplicationToken() 获取应用token
 * @method void setApplicationToken(string $ApplicationToken) 设置应用token
 * @method string getProcessor() 获取平台告警处理人
 * @method void setProcessor(string $Processor) 设置平台告警处理人
 * @method string getProcessDescription() 获取告警处理的描述信息
 * @method void setProcessDescription(string $ProcessDescription) 设置告警处理的描述信息
 * @method string getProcessExtend() 获取告警处理的扩展信息，可以为JSON字符串
 * @method void setProcessExtend(string $ProcessExtend) 设置告警处理的扩展信息，可以为JSON字符串
 * @method string getExtendOne() 获取扩展字段1，目前存的应用告警处理人
 * @method void setExtendOne(string $ExtendOne) 设置扩展字段1，目前存的应用告警处理人
 * @method integer getApplicationId() 获取应用id
 * @method void setApplicationId(integer $ApplicationId) 设置应用id
 */
class ChangeAlarmStatusRequest extends AbstractModel
{
    /**
     * @var string 告警的id，返回的列表中的id
     */
    public $Id;

    /**
     * @var string 告警状态 processed unprocessed processing misreport shield
     */
    public $Status;

    /**
     * @var integer 告警处理时间
     */
    public $ProcessTime;

    /**
     * @var string 处理类型
     */
    public $ProcessType;

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
     * @var string 平台告警处理人
     */
    public $Processor;

    /**
     * @var string 告警处理的描述信息
     */
    public $ProcessDescription;

    /**
     * @var string 告警处理的扩展信息，可以为JSON字符串
     */
    public $ProcessExtend;

    /**
     * @var string 扩展字段1，目前存的应用告警处理人
     */
    public $ExtendOne;

    /**
     * @var integer 应用id
     */
    public $ApplicationId;

    /**
     * @param string $Id 告警的id，返回的列表中的id
     * @param string $Status 告警状态 processed unprocessed processing misreport shield
     * @param integer $ProcessTime 告警处理时间
     * @param string $ProcessType 处理类型
     * @param integer $WorkspaceId 工作空间id
     * @param string $UserId 当前操作用户id
     * @param string $UserName 当前操作用户名称
     * @param string $ApplicationToken 应用token
     * @param string $Processor 平台告警处理人
     * @param string $ProcessDescription 告警处理的描述信息
     * @param string $ProcessExtend 告警处理的扩展信息，可以为JSON字符串
     * @param string $ExtendOne 扩展字段1，目前存的应用告警处理人
     * @param integer $ApplicationId 应用id
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ProcessTime",$param) and $param["ProcessTime"] !== null) {
            $this->ProcessTime = $param["ProcessTime"];
        }

        if (array_key_exists("ProcessType",$param) and $param["ProcessType"] !== null) {
            $this->ProcessType = $param["ProcessType"];
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

        if (array_key_exists("Processor",$param) and $param["Processor"] !== null) {
            $this->Processor = $param["Processor"];
        }

        if (array_key_exists("ProcessDescription",$param) and $param["ProcessDescription"] !== null) {
            $this->ProcessDescription = $param["ProcessDescription"];
        }

        if (array_key_exists("ProcessExtend",$param) and $param["ProcessExtend"] !== null) {
            $this->ProcessExtend = $param["ProcessExtend"];
        }

        if (array_key_exists("ExtendOne",$param) and $param["ExtendOne"] !== null) {
            $this->ExtendOne = $param["ExtendOne"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }
    }
}
