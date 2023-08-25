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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDSPACOSDiscoveryTask请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例ID
 * @method void setDspaId(string $DspaId) 设置DSPA实例ID
 * @method integer getTaskId() 获取任务ID
 * @method void setTaskId(integer $TaskId) 设置任务ID
 * @method string getName() 获取任务名称，1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字，Name不可重复
 * @method void setName(string $Name) 设置任务名称，1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字，Name不可重复
 * @method string getDescription() 获取任务描述，最大长度为1024个字符
 * @method void setDescription(string $Description) 设置任务描述，最大长度为1024个字符
 * @method integer getEnable() 获取任务开关，0 关闭，1 启用
 * @method void setEnable(integer $Enable) 设置任务开关，0 关闭，1 启用
 * @method integer getGeneralRuleSetEnable() 获取通用规则集开关；0 关闭，1 启用
 * @method void setGeneralRuleSetEnable(integer $GeneralRuleSetEnable) 设置通用规则集开关；0 关闭，1 启用
 * @method array getComplianceGroupIds() 获取合规组ID列表，最多支持添加5个
 * @method void setComplianceGroupIds(array $ComplianceGroupIds) 设置合规组ID列表，最多支持添加5个
 * @method integer getPlan() 获取执行计划； 0立即 1定时，选择“立即”时，扫描周期只能选择单次
 * @method void setPlan(integer $Plan) 设置执行计划； 0立即 1定时，选择“立即”时，扫描周期只能选择单次
 * @method integer getPeriod() 获取扫描周期；0单次 1每天 2每周 3每月
 * @method void setPeriod(integer $Period) 设置扫描周期；0单次 1每天 2每周 3每月
 * @method string getTimingStartTime() 获取任务定时启动时间，格式：2006-01-02 15:04:05
当执行计划（Plan字段）为”立即“时，定时启动时间不会生效，此场景下给该字段传值不会被保存。
 * @method void setTimingStartTime(string $TimingStartTime) 设置任务定时启动时间，格式：2006-01-02 15:04:05
当执行计划（Plan字段）为”立即“时，定时启动时间不会生效，此场景下给该字段传值不会被保存。
 * @method array getFileTypes() 获取待扫描文件类型，用逗号隔开，格式如：[".txt", ".csv", ".log", ".xml",".html", ".json"]。
 * @method void setFileTypes(array $FileTypes) 设置待扫描文件类型，用逗号隔开，格式如：[".txt", ".csv", ".log", ".xml",".html", ".json"]。
 * @method integer getFileSizeLimit() 获取文件大小上限，单位为KB，如1000, 目前单个文件最大只支持100MB（102400KB）
 * @method void setFileSizeLimit(integer $FileSizeLimit) 设置文件大小上限，单位为KB，如1000, 目前单个文件最大只支持100MB（102400KB）
 * @method string getResourceRegion() 获取资源所在地域
 * @method void setResourceRegion(string $ResourceRegion) 设置资源所在地域
 */
class ModifyDSPACOSDiscoveryTaskRequest extends AbstractModel
{
    /**
     * @var string DSPA实例ID
     */
    public $DspaId;

    /**
     * @var integer 任务ID
     */
    public $TaskId;

    /**
     * @var string 任务名称，1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字，Name不可重复
     */
    public $Name;

    /**
     * @var string 任务描述，最大长度为1024个字符
     */
    public $Description;

    /**
     * @var integer 任务开关，0 关闭，1 启用
     */
    public $Enable;

    /**
     * @var integer 通用规则集开关；0 关闭，1 启用
     */
    public $GeneralRuleSetEnable;

    /**
     * @var array 合规组ID列表，最多支持添加5个
     */
    public $ComplianceGroupIds;

    /**
     * @var integer 执行计划； 0立即 1定时，选择“立即”时，扫描周期只能选择单次
     */
    public $Plan;

    /**
     * @var integer 扫描周期；0单次 1每天 2每周 3每月
     */
    public $Period;

    /**
     * @var string 任务定时启动时间，格式：2006-01-02 15:04:05
当执行计划（Plan字段）为”立即“时，定时启动时间不会生效，此场景下给该字段传值不会被保存。
     */
    public $TimingStartTime;

    /**
     * @var array 待扫描文件类型，用逗号隔开，格式如：[".txt", ".csv", ".log", ".xml",".html", ".json"]。
     */
    public $FileTypes;

    /**
     * @var integer 文件大小上限，单位为KB，如1000, 目前单个文件最大只支持100MB（102400KB）
     */
    public $FileSizeLimit;

    /**
     * @var string 资源所在地域
     */
    public $ResourceRegion;

    /**
     * @param string $DspaId DSPA实例ID
     * @param integer $TaskId 任务ID
     * @param string $Name 任务名称，1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字，Name不可重复
     * @param string $Description 任务描述，最大长度为1024个字符
     * @param integer $Enable 任务开关，0 关闭，1 启用
     * @param integer $GeneralRuleSetEnable 通用规则集开关；0 关闭，1 启用
     * @param array $ComplianceGroupIds 合规组ID列表，最多支持添加5个
     * @param integer $Plan 执行计划； 0立即 1定时，选择“立即”时，扫描周期只能选择单次
     * @param integer $Period 扫描周期；0单次 1每天 2每周 3每月
     * @param string $TimingStartTime 任务定时启动时间，格式：2006-01-02 15:04:05
当执行计划（Plan字段）为”立即“时，定时启动时间不会生效，此场景下给该字段传值不会被保存。
     * @param array $FileTypes 待扫描文件类型，用逗号隔开，格式如：[".txt", ".csv", ".log", ".xml",".html", ".json"]。
     * @param integer $FileSizeLimit 文件大小上限，单位为KB，如1000, 目前单个文件最大只支持100MB（102400KB）
     * @param string $ResourceRegion 资源所在地域
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("GeneralRuleSetEnable",$param) and $param["GeneralRuleSetEnable"] !== null) {
            $this->GeneralRuleSetEnable = $param["GeneralRuleSetEnable"];
        }

        if (array_key_exists("ComplianceGroupIds",$param) and $param["ComplianceGroupIds"] !== null) {
            $this->ComplianceGroupIds = $param["ComplianceGroupIds"];
        }

        if (array_key_exists("Plan",$param) and $param["Plan"] !== null) {
            $this->Plan = $param["Plan"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("TimingStartTime",$param) and $param["TimingStartTime"] !== null) {
            $this->TimingStartTime = $param["TimingStartTime"];
        }

        if (array_key_exists("FileTypes",$param) and $param["FileTypes"] !== null) {
            $this->FileTypes = $param["FileTypes"];
        }

        if (array_key_exists("FileSizeLimit",$param) and $param["FileSizeLimit"] !== null) {
            $this->FileSizeLimit = $param["FileSizeLimit"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }
    }
}
