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
 * DescribeAlarmList请求参数结构体
 *
 * @method integer getBeginTime() 获取告警开始时间，必填,时间戳秒
 * @method void setBeginTime(integer $BeginTime) 设置告警开始时间，必填,时间戳秒
 * @method integer getEndTime() 获取告警结束时间，必填，时间戳秒
 * @method void setEndTime(integer $EndTime) 设置告警结束时间，必填，时间戳秒
 * @method integer getPageNumber() 获取分页查询，第几页
 * @method void setPageNumber(integer $PageNumber) 设置分页查询，第几页
 * @method integer getPageSize() 获取每页条数
 * @method void setPageSize(integer $PageSize) 设置每页条数
 * @method integer getWorkspaceId() 获取工作空间id
 * @method void setWorkspaceId(integer $WorkspaceId) 设置工作空间id
 * @method string getApplicationToken() 获取应用token
 * @method void setApplicationToken(string $ApplicationToken) 设置应用token
 * @method array getStatuses() 获取告警状态
 * @method void setStatuses(array $Statuses) 设置告警状态
 * @method array getAlarmTypeSet() 获取告警类型
 * @method void setAlarmTypeSet(array $AlarmTypeSet) 设置告警类型
 * @method array getLevelSet() 获取告警级别id
 * @method void setLevelSet(array $LevelSet) 设置告警级别id
 * @method array getIdSet() 获取告警id
 * @method void setIdSet(array $IdSet) 设置告警id
 * @method array getAppIdSet() 获取应用id
 * @method void setAppIdSet(array $AppIdSet) 设置应用id
 * @method array getWIDSet() 获取设备id
 * @method void setWIDSet(array $WIDSet) 设置设备id
 * @method array getSpaceCodeSet() 获取空间层级
 * @method void setSpaceCodeSet(array $SpaceCodeSet) 设置空间层级
 * @method array getExtendOne() 获取应用扩展字段1
 * @method void setExtendOne(array $ExtendOne) 设置应用扩展字段1
 * @method array getExtendTwo() 获取应用扩展字段2
 * @method void setExtendTwo(array $ExtendTwo) 设置应用扩展字段2
 * @method array getProcessorSet() 获取当前告警处理人，填孪生中台的用户id
 * @method void setProcessorSet(array $ProcessorSet) 设置当前告警处理人，填孪生中台的用户id
 * @method array getGroupIdSet() 获取分组id
 * @method void setGroupIdSet(array $GroupIdSet) 设置分组id
 */
class DescribeAlarmListRequest extends AbstractModel
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
     * @var integer 分页查询，第几页
     */
    public $PageNumber;

    /**
     * @var integer 每页条数
     */
    public $PageSize;

    /**
     * @var integer 工作空间id
     */
    public $WorkspaceId;

    /**
     * @var string 应用token
     */
    public $ApplicationToken;

    /**
     * @var array 告警状态
     */
    public $Statuses;

    /**
     * @var array 告警类型
     */
    public $AlarmTypeSet;

    /**
     * @var array 告警级别id
     */
    public $LevelSet;

    /**
     * @var array 告警id
     */
    public $IdSet;

    /**
     * @var array 应用id
     */
    public $AppIdSet;

    /**
     * @var array 设备id
     */
    public $WIDSet;

    /**
     * @var array 空间层级
     */
    public $SpaceCodeSet;

    /**
     * @var array 应用扩展字段1
     */
    public $ExtendOne;

    /**
     * @var array 应用扩展字段2
     */
    public $ExtendTwo;

    /**
     * @var array 当前告警处理人，填孪生中台的用户id
     */
    public $ProcessorSet;

    /**
     * @var array 分组id
     */
    public $GroupIdSet;

    /**
     * @param integer $BeginTime 告警开始时间，必填,时间戳秒
     * @param integer $EndTime 告警结束时间，必填，时间戳秒
     * @param integer $PageNumber 分页查询，第几页
     * @param integer $PageSize 每页条数
     * @param integer $WorkspaceId 工作空间id
     * @param string $ApplicationToken 应用token
     * @param array $Statuses 告警状态
     * @param array $AlarmTypeSet 告警类型
     * @param array $LevelSet 告警级别id
     * @param array $IdSet 告警id
     * @param array $AppIdSet 应用id
     * @param array $WIDSet 设备id
     * @param array $SpaceCodeSet 空间层级
     * @param array $ExtendOne 应用扩展字段1
     * @param array $ExtendTwo 应用扩展字段2
     * @param array $ProcessorSet 当前告警处理人，填孪生中台的用户id
     * @param array $GroupIdSet 分组id
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

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("ApplicationToken",$param) and $param["ApplicationToken"] !== null) {
            $this->ApplicationToken = $param["ApplicationToken"];
        }

        if (array_key_exists("Statuses",$param) and $param["Statuses"] !== null) {
            $this->Statuses = $param["Statuses"];
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

        if (array_key_exists("IdSet",$param) and $param["IdSet"] !== null) {
            $this->IdSet = $param["IdSet"];
        }

        if (array_key_exists("AppIdSet",$param) and $param["AppIdSet"] !== null) {
            $this->AppIdSet = $param["AppIdSet"];
        }

        if (array_key_exists("WIDSet",$param) and $param["WIDSet"] !== null) {
            $this->WIDSet = $param["WIDSet"];
        }

        if (array_key_exists("SpaceCodeSet",$param) and $param["SpaceCodeSet"] !== null) {
            $this->SpaceCodeSet = $param["SpaceCodeSet"];
        }

        if (array_key_exists("ExtendOne",$param) and $param["ExtendOne"] !== null) {
            $this->ExtendOne = $param["ExtendOne"];
        }

        if (array_key_exists("ExtendTwo",$param) and $param["ExtendTwo"] !== null) {
            $this->ExtendTwo = $param["ExtendTwo"];
        }

        if (array_key_exists("ProcessorSet",$param) and $param["ProcessorSet"] !== null) {
            $this->ProcessorSet = $param["ProcessorSet"];
        }

        if (array_key_exists("GroupIdSet",$param) and $param["GroupIdSet"] !== null) {
            $this->GroupIdSet = $param["GroupIdSet"];
        }
    }
}
