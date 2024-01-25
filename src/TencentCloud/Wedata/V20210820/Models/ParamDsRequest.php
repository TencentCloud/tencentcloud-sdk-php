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
 * 参数请求结构
 *
 * @method string getParamKey() 获取参数key
 * @method void setParamKey(string $ParamKey) 设置参数key
 * @method string getParamType() 获取参数类型
 * @method void setParamType(string $ParamType) 设置参数类型
 * @method string getParamDefine() 获取参数周期运行值
 * @method void setParamDefine(string $ParamDefine) 设置参数周期运行值
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getOperatorName() 获取操作者名
 * @method void setOperatorName(string $OperatorName) 设置操作者名
 * @method string getWorkflowId() 获取工作流id
 * @method void setWorkflowId(string $WorkflowId) 设置工作流id
 * @method string getSqlContent() 获取sql内容
 * @method void setSqlContent(string $SqlContent) 设置sql内容
 * @method string getCurRunDate() 获取数据时间
 * @method void setCurRunDate(string $CurRunDate) 设置数据时间
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method string getKeyWords() 获取关键字
 * @method void setKeyWords(string $KeyWords) 设置关键字
 * @method integer getMyVersion() 获取版本号
 * @method void setMyVersion(integer $MyVersion) 设置版本号
 * @method boolean getUpstream() 获取上游
 * @method void setUpstream(boolean $Upstream) 设置上游
 * @method string getParamDescription() 获取参数描述
 * @method void setParamDescription(string $ParamDescription) 设置参数描述
 * @method string getParamDefineTest() 获取参数调试运行值
 * @method void setParamDefineTest(string $ParamDefineTest) 设置参数调试运行值
 * @method boolean getUpdateFlag() 获取是否为更新，true表示更新，false表示新建
 * @method void setUpdateFlag(boolean $UpdateFlag) 设置是否为更新，true表示更新，false表示新建
 */
class ParamDsRequest extends AbstractModel
{
    /**
     * @var string 参数key
     */
    public $ParamKey;

    /**
     * @var string 参数类型
     */
    public $ParamType;

    /**
     * @var string 参数周期运行值
     */
    public $ParamDefine;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 操作者名
     */
    public $OperatorName;

    /**
     * @var string 工作流id
     */
    public $WorkflowId;

    /**
     * @var string sql内容
     */
    public $SqlContent;

    /**
     * @var string 数据时间
     */
    public $CurRunDate;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 任务id
     */
    public $TaskId;

    /**
     * @var string 关键字
     */
    public $KeyWords;

    /**
     * @var integer 版本号
     */
    public $MyVersion;

    /**
     * @var boolean 上游
     */
    public $Upstream;

    /**
     * @var string 参数描述
     */
    public $ParamDescription;

    /**
     * @var string 参数调试运行值
     */
    public $ParamDefineTest;

    /**
     * @var boolean 是否为更新，true表示更新，false表示新建
     */
    public $UpdateFlag;

    /**
     * @param string $ParamKey 参数key
     * @param string $ParamType 参数类型
     * @param string $ParamDefine 参数周期运行值
     * @param string $ProjectId 项目id
     * @param string $OperatorName 操作者名
     * @param string $WorkflowId 工作流id
     * @param string $SqlContent sql内容
     * @param string $CurRunDate 数据时间
     * @param string $StartTime 开始时间
     * @param string $TaskId 任务id
     * @param string $KeyWords 关键字
     * @param integer $MyVersion 版本号
     * @param boolean $Upstream 上游
     * @param string $ParamDescription 参数描述
     * @param string $ParamDefineTest 参数调试运行值
     * @param boolean $UpdateFlag 是否为更新，true表示更新，false表示新建
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
        if (array_key_exists("ParamKey",$param) and $param["ParamKey"] !== null) {
            $this->ParamKey = $param["ParamKey"];
        }

        if (array_key_exists("ParamType",$param) and $param["ParamType"] !== null) {
            $this->ParamType = $param["ParamType"];
        }

        if (array_key_exists("ParamDefine",$param) and $param["ParamDefine"] !== null) {
            $this->ParamDefine = $param["ParamDefine"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("OperatorName",$param) and $param["OperatorName"] !== null) {
            $this->OperatorName = $param["OperatorName"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("SqlContent",$param) and $param["SqlContent"] !== null) {
            $this->SqlContent = $param["SqlContent"];
        }

        if (array_key_exists("CurRunDate",$param) and $param["CurRunDate"] !== null) {
            $this->CurRunDate = $param["CurRunDate"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("KeyWords",$param) and $param["KeyWords"] !== null) {
            $this->KeyWords = $param["KeyWords"];
        }

        if (array_key_exists("MyVersion",$param) and $param["MyVersion"] !== null) {
            $this->MyVersion = $param["MyVersion"];
        }

        if (array_key_exists("Upstream",$param) and $param["Upstream"] !== null) {
            $this->Upstream = $param["Upstream"];
        }

        if (array_key_exists("ParamDescription",$param) and $param["ParamDescription"] !== null) {
            $this->ParamDescription = $param["ParamDescription"];
        }

        if (array_key_exists("ParamDefineTest",$param) and $param["ParamDefineTest"] !== null) {
            $this->ParamDefineTest = $param["ParamDefineTest"];
        }

        if (array_key_exists("UpdateFlag",$param) and $param["UpdateFlag"] !== null) {
            $this->UpdateFlag = $param["UpdateFlag"];
        }
    }
}
