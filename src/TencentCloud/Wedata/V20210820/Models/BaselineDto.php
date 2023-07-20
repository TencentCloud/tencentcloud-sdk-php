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
 * 基线实例
 *
 * @method integer getId() 获取基线id
 * @method void setId(integer $Id) 设置基线id
 * @method string getBaselineName() 获取基线名称
 * @method void setBaselineName(string $BaselineName) 设置基线名称
 * @method string getBaselineType() 获取天基线/小时基线
 * @method void setBaselineType(string $BaselineType) 设置天基线/小时基线
 * @method string getCreateTime() 获取基线创建时间
 * @method void setCreateTime(string $CreateTime) 设置基线创建时间
 * @method array getPromiseTasks() 获取保障任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPromiseTasks(array $PromiseTasks) 设置保障任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method AlarmRuleDto getAlarmRule() 获取告警规则
 * @method void setAlarmRule(AlarmRuleDto $AlarmRule) 设置告警规则
 * @method string getBaselineStatus() 获取基线状态，待提交, 运行中，停止
 * @method void setBaselineStatus(string $BaselineStatus) 设置基线状态，待提交, 运行中，停止
 * @method string getLatestBaselineInstanceStatus() 获取最新基线实例运行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestBaselineInstanceStatus(string $LatestBaselineInstanceStatus) 设置最新基线实例运行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWarningMargin() 获取预警余量/单位分钟
 * @method void setWarningMargin(integer $WarningMargin) 设置预警余量/单位分钟
 * @method string getPromiseTime() 获取承诺时间
 * @method void setPromiseTime(string $PromiseTime) 设置承诺时间
 * @method string getInChargeUin() 获取责任人uin
 * @method void setInChargeUin(string $InChargeUin) 设置责任人uin
 * @method string getInChargeName() 获取责任人名称
 * @method void setInChargeName(string $InChargeName) 设置责任人名称
 * @method string getUserUin() 获取当前用户uin
 * @method void setUserUin(string $UserUin) 设置当前用户uin
 * @method string getUserName() 获取当前用户名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置当前用户名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUin() 获取主账号uin
 * @method void setOwnerUin(string $OwnerUin) 设置主账号uin
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getAppId() 获取租户id
 * @method void setAppId(string $AppId) 设置租户id
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class BaselineDto extends AbstractModel
{
    /**
     * @var integer 基线id
     */
    public $Id;

    /**
     * @var string 基线名称
     */
    public $BaselineName;

    /**
     * @var string 天基线/小时基线
     */
    public $BaselineType;

    /**
     * @var string 基线创建时间
     */
    public $CreateTime;

    /**
     * @var array 保障任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PromiseTasks;

    /**
     * @var AlarmRuleDto 告警规则
     */
    public $AlarmRule;

    /**
     * @var string 基线状态，待提交, 运行中，停止
     */
    public $BaselineStatus;

    /**
     * @var string 最新基线实例运行状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestBaselineInstanceStatus;

    /**
     * @var integer 预警余量/单位分钟
     */
    public $WarningMargin;

    /**
     * @var string 承诺时间
     */
    public $PromiseTime;

    /**
     * @var string 责任人uin
     */
    public $InChargeUin;

    /**
     * @var string 责任人名称
     */
    public $InChargeName;

    /**
     * @var string 当前用户uin
     */
    public $UserUin;

    /**
     * @var string 当前用户名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string 主账号uin
     */
    public $OwnerUin;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 租户id
     */
    public $AppId;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param integer $Id 基线id
     * @param string $BaselineName 基线名称
     * @param string $BaselineType 天基线/小时基线
     * @param string $CreateTime 基线创建时间
     * @param array $PromiseTasks 保障任务
注意：此字段可能返回 null，表示取不到有效值。
     * @param AlarmRuleDto $AlarmRule 告警规则
     * @param string $BaselineStatus 基线状态，待提交, 运行中，停止
     * @param string $LatestBaselineInstanceStatus 最新基线实例运行状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WarningMargin 预警余量/单位分钟
     * @param string $PromiseTime 承诺时间
     * @param string $InChargeUin 责任人uin
     * @param string $InChargeName 责任人名称
     * @param string $UserUin 当前用户uin
     * @param string $UserName 当前用户名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUin 主账号uin
     * @param string $ProjectId 项目id
     * @param string $AppId 租户id
     * @param string $UpdateTime 更新时间
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("BaselineName",$param) and $param["BaselineName"] !== null) {
            $this->BaselineName = $param["BaselineName"];
        }

        if (array_key_exists("BaselineType",$param) and $param["BaselineType"] !== null) {
            $this->BaselineType = $param["BaselineType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("PromiseTasks",$param) and $param["PromiseTasks"] !== null) {
            $this->PromiseTasks = [];
            foreach ($param["PromiseTasks"] as $key => $value){
                $obj = new BaselineTaskDto();
                $obj->deserialize($value);
                array_push($this->PromiseTasks, $obj);
            }
        }

        if (array_key_exists("AlarmRule",$param) and $param["AlarmRule"] !== null) {
            $this->AlarmRule = new AlarmRuleDto();
            $this->AlarmRule->deserialize($param["AlarmRule"]);
        }

        if (array_key_exists("BaselineStatus",$param) and $param["BaselineStatus"] !== null) {
            $this->BaselineStatus = $param["BaselineStatus"];
        }

        if (array_key_exists("LatestBaselineInstanceStatus",$param) and $param["LatestBaselineInstanceStatus"] !== null) {
            $this->LatestBaselineInstanceStatus = $param["LatestBaselineInstanceStatus"];
        }

        if (array_key_exists("WarningMargin",$param) and $param["WarningMargin"] !== null) {
            $this->WarningMargin = $param["WarningMargin"];
        }

        if (array_key_exists("PromiseTime",$param) and $param["PromiseTime"] !== null) {
            $this->PromiseTime = $param["PromiseTime"];
        }

        if (array_key_exists("InChargeUin",$param) and $param["InChargeUin"] !== null) {
            $this->InChargeUin = $param["InChargeUin"];
        }

        if (array_key_exists("InChargeName",$param) and $param["InChargeName"] !== null) {
            $this->InChargeName = $param["InChargeName"];
        }

        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
