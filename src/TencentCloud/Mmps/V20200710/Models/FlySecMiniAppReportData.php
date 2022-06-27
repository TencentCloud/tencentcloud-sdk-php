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
namespace TencentCloud\Mmps\V20200710\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 翼扬诊断小程序报告数据
 *
 * @method string getTaskID() 获取任务id
 * @method void setTaskID(string $TaskID) 设置任务id
 * @method string getMiniAppID() 获取小程序appid
 * @method void setMiniAppID(string $MiniAppID) 设置小程序appid
 * @method string getMiniAppName() 获取小程序名称
 * @method void setMiniAppName(string $MiniAppName) 设置小程序名称
 * @method string getMiniAppVersion() 获取小程序版本
 * @method void setMiniAppVersion(string $MiniAppVersion) 设置小程序版本
 * @method integer getMode() 获取诊断模式 1:基础诊断，2:深度诊断
 * @method void setMode(integer $Mode) 设置诊断模式 1:基础诊断，2:深度诊断
 * @method integer getStatus() 获取诊断状态, 0:排队中, 1:成功, 2:失败, 3:进行中
 * @method void setStatus(integer $Status) 设置诊断状态, 0:排队中, 1:成功, 2:失败, 3:进行中
 * @method integer getCreateTime() 获取诊断时间
 * @method void setCreateTime(integer $CreateTime) 设置诊断时间
 * @method string getRiskScore() 获取诊断得分
 * @method void setRiskScore(string $RiskScore) 设置诊断得分
 * @method integer getRiskLevel() 获取诊断风险等级 1:高风险 2:中风险 3:低风险
 * @method void setRiskLevel(integer $RiskLevel) 设置诊断风险等级 1:高风险 2:中风险 3:低风险
 * @method FlySecMiniAppRiskItems getRiskItems() 获取诊断8大维度得分情况(每项总分100分)
 * @method void setRiskItems(FlySecMiniAppRiskItems $RiskItems) 设置诊断8大维度得分情况(每项总分100分)
 */
class FlySecMiniAppReportData extends AbstractModel
{
    /**
     * @var string 任务id
     */
    public $TaskID;

    /**
     * @var string 小程序appid
     */
    public $MiniAppID;

    /**
     * @var string 小程序名称
     */
    public $MiniAppName;

    /**
     * @var string 小程序版本
     */
    public $MiniAppVersion;

    /**
     * @var integer 诊断模式 1:基础诊断，2:深度诊断
     */
    public $Mode;

    /**
     * @var integer 诊断状态, 0:排队中, 1:成功, 2:失败, 3:进行中
     */
    public $Status;

    /**
     * @var integer 诊断时间
     */
    public $CreateTime;

    /**
     * @var string 诊断得分
     */
    public $RiskScore;

    /**
     * @var integer 诊断风险等级 1:高风险 2:中风险 3:低风险
     */
    public $RiskLevel;

    /**
     * @var FlySecMiniAppRiskItems 诊断8大维度得分情况(每项总分100分)
     */
    public $RiskItems;

    /**
     * @param string $TaskID 任务id
     * @param string $MiniAppID 小程序appid
     * @param string $MiniAppName 小程序名称
     * @param string $MiniAppVersion 小程序版本
     * @param integer $Mode 诊断模式 1:基础诊断，2:深度诊断
     * @param integer $Status 诊断状态, 0:排队中, 1:成功, 2:失败, 3:进行中
     * @param integer $CreateTime 诊断时间
     * @param string $RiskScore 诊断得分
     * @param integer $RiskLevel 诊断风险等级 1:高风险 2:中风险 3:低风险
     * @param FlySecMiniAppRiskItems $RiskItems 诊断8大维度得分情况(每项总分100分)
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
        if (array_key_exists("TaskID",$param) and $param["TaskID"] !== null) {
            $this->TaskID = $param["TaskID"];
        }

        if (array_key_exists("MiniAppID",$param) and $param["MiniAppID"] !== null) {
            $this->MiniAppID = $param["MiniAppID"];
        }

        if (array_key_exists("MiniAppName",$param) and $param["MiniAppName"] !== null) {
            $this->MiniAppName = $param["MiniAppName"];
        }

        if (array_key_exists("MiniAppVersion",$param) and $param["MiniAppVersion"] !== null) {
            $this->MiniAppVersion = $param["MiniAppVersion"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RiskScore",$param) and $param["RiskScore"] !== null) {
            $this->RiskScore = $param["RiskScore"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("RiskItems",$param) and $param["RiskItems"] !== null) {
            $this->RiskItems = new FlySecMiniAppRiskItems();
            $this->RiskItems->deserialize($param["RiskItems"]);
        }
    }
}
