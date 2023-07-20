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
 * CreateBaseline请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getBaselineName() 获取基线名称
 * @method void setBaselineName(string $BaselineName) 设置基线名称
 * @method string getBaselineType() 获取D或者H；分别表示天基线和小时基线
 * @method void setBaselineType(string $BaselineType) 设置D或者H；分别表示天基线和小时基线
 * @method string getCreateUin() 获取创建人id
 * @method void setCreateUin(string $CreateUin) 设置创建人id
 * @method string getCreateName() 获取创建人名称
 * @method void setCreateName(string $CreateName) 设置创建人名称
 * @method string getInChargeUin() 获取基线负责人id
 * @method void setInChargeUin(string $InChargeUin) 设置基线负责人id
 * @method string getInChargeName() 获取基线负责人名称
 * @method void setInChargeName(string $InChargeName) 设置基线负责人名称
 * @method array getPromiseTasks() 获取保障任务
 * @method void setPromiseTasks(array $PromiseTasks) 设置保障任务
 * @method string getPromiseTime() 获取保障时间
 * @method void setPromiseTime(string $PromiseTime) 设置保障时间
 * @method integer getWarningMargin() 获取告警余量/分钟
 * @method void setWarningMargin(integer $WarningMargin) 设置告警余量/分钟
 * @method boolean getIsNewAlarm() 获取1
 * @method void setIsNewAlarm(boolean $IsNewAlarm) 设置1
 * @method AlarmRuleDto getAlarmRuleDto() 获取现有告警规则信息
 * @method void setAlarmRuleDto(AlarmRuleDto $AlarmRuleDto) 设置现有告警规则信息
 * @method CreateAlarmRuleRequest getBaselineCreateAlarmRuleRequest() 获取新增告警规则描述
 * @method void setBaselineCreateAlarmRuleRequest(CreateAlarmRuleRequest $BaselineCreateAlarmRuleRequest) 设置新增告警规则描述
 */
class CreateBaselineRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 基线名称
     */
    public $BaselineName;

    /**
     * @var string D或者H；分别表示天基线和小时基线
     */
    public $BaselineType;

    /**
     * @var string 创建人id
     */
    public $CreateUin;

    /**
     * @var string 创建人名称
     */
    public $CreateName;

    /**
     * @var string 基线负责人id
     */
    public $InChargeUin;

    /**
     * @var string 基线负责人名称
     */
    public $InChargeName;

    /**
     * @var array 保障任务
     */
    public $PromiseTasks;

    /**
     * @var string 保障时间
     */
    public $PromiseTime;

    /**
     * @var integer 告警余量/分钟
     */
    public $WarningMargin;

    /**
     * @var boolean 1
     */
    public $IsNewAlarm;

    /**
     * @var AlarmRuleDto 现有告警规则信息
     */
    public $AlarmRuleDto;

    /**
     * @var CreateAlarmRuleRequest 新增告警规则描述
     */
    public $BaselineCreateAlarmRuleRequest;

    /**
     * @param string $ProjectId 项目id
     * @param string $BaselineName 基线名称
     * @param string $BaselineType D或者H；分别表示天基线和小时基线
     * @param string $CreateUin 创建人id
     * @param string $CreateName 创建人名称
     * @param string $InChargeUin 基线负责人id
     * @param string $InChargeName 基线负责人名称
     * @param array $PromiseTasks 保障任务
     * @param string $PromiseTime 保障时间
     * @param integer $WarningMargin 告警余量/分钟
     * @param boolean $IsNewAlarm 1
     * @param AlarmRuleDto $AlarmRuleDto 现有告警规则信息
     * @param CreateAlarmRuleRequest $BaselineCreateAlarmRuleRequest 新增告警规则描述
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("BaselineName",$param) and $param["BaselineName"] !== null) {
            $this->BaselineName = $param["BaselineName"];
        }

        if (array_key_exists("BaselineType",$param) and $param["BaselineType"] !== null) {
            $this->BaselineType = $param["BaselineType"];
        }

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("CreateName",$param) and $param["CreateName"] !== null) {
            $this->CreateName = $param["CreateName"];
        }

        if (array_key_exists("InChargeUin",$param) and $param["InChargeUin"] !== null) {
            $this->InChargeUin = $param["InChargeUin"];
        }

        if (array_key_exists("InChargeName",$param) and $param["InChargeName"] !== null) {
            $this->InChargeName = $param["InChargeName"];
        }

        if (array_key_exists("PromiseTasks",$param) and $param["PromiseTasks"] !== null) {
            $this->PromiseTasks = [];
            foreach ($param["PromiseTasks"] as $key => $value){
                $obj = new BaselineTaskInfo();
                $obj->deserialize($value);
                array_push($this->PromiseTasks, $obj);
            }
        }

        if (array_key_exists("PromiseTime",$param) and $param["PromiseTime"] !== null) {
            $this->PromiseTime = $param["PromiseTime"];
        }

        if (array_key_exists("WarningMargin",$param) and $param["WarningMargin"] !== null) {
            $this->WarningMargin = $param["WarningMargin"];
        }

        if (array_key_exists("IsNewAlarm",$param) and $param["IsNewAlarm"] !== null) {
            $this->IsNewAlarm = $param["IsNewAlarm"];
        }

        if (array_key_exists("AlarmRuleDto",$param) and $param["AlarmRuleDto"] !== null) {
            $this->AlarmRuleDto = new AlarmRuleDto();
            $this->AlarmRuleDto->deserialize($param["AlarmRuleDto"]);
        }

        if (array_key_exists("BaselineCreateAlarmRuleRequest",$param) and $param["BaselineCreateAlarmRuleRequest"] !== null) {
            $this->BaselineCreateAlarmRuleRequest = new CreateAlarmRuleRequest();
            $this->BaselineCreateAlarmRuleRequest->deserialize($param["BaselineCreateAlarmRuleRequest"]);
        }
    }
}
