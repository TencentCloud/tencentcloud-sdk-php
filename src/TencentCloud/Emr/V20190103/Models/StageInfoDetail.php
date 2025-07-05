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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务步骤详情
 *
 * @method string getStage() 获取步骤
 * @method void setStage(string $Stage) 设置步骤
 * @method string getName() 获取步骤名
 * @method void setName(string $Name) 设置步骤名
 * @method boolean getIsShow() 获取是否展示
 * @method void setIsShow(boolean $IsShow) 设置是否展示
 * @method boolean getIsSubFlow() 获取是否子流程
 * @method void setIsSubFlow(boolean $IsSubFlow) 设置是否子流程
 * @method string getSubFlowFlag() 获取子流程标签
 * @method void setSubFlowFlag(string $SubFlowFlag) 设置子流程标签
 * @method integer getStatus() 获取步骤运行状态：0:未开始 1:进行中 2:已完成 3:部分完成  -1:失败
 * @method void setStatus(integer $Status) 设置步骤运行状态：0:未开始 1:进行中 2:已完成 3:部分完成  -1:失败
 * @method string getDesc() 获取步骤运行状态描述
 * @method void setDesc(string $Desc) 设置步骤运行状态描述
 * @method float getProgress() 获取运行进度
 * @method void setProgress(float $Progress) 设置运行进度
 * @method string getStarttime() 获取开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStarttime(string $Starttime) 设置开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndtime() 获取结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndtime(string $Endtime) 设置结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHadWoodDetail() 获取是否有详情信息
 * @method void setHadWoodDetail(boolean $HadWoodDetail) 设置是否有详情信息
 * @method integer getWoodJobId() 获取Wood子流程Id
 * @method void setWoodJobId(integer $WoodJobId) 设置Wood子流程Id
 * @method string getLanguageKey() 获取多语言版本Key
 * @method void setLanguageKey(string $LanguageKey) 设置多语言版本Key
 * @method string getFailedReason() 获取如果stage失败，失败原因
 * @method void setFailedReason(string $FailedReason) 设置如果stage失败，失败原因
 * @method string getTimeConsuming() 获取步骤耗时
 * @method void setTimeConsuming(string $TimeConsuming) 设置步骤耗时
 */
class StageInfoDetail extends AbstractModel
{
    /**
     * @var string 步骤
     */
    public $Stage;

    /**
     * @var string 步骤名
     */
    public $Name;

    /**
     * @var boolean 是否展示
     */
    public $IsShow;

    /**
     * @var boolean 是否子流程
     */
    public $IsSubFlow;

    /**
     * @var string 子流程标签
     */
    public $SubFlowFlag;

    /**
     * @var integer 步骤运行状态：0:未开始 1:进行中 2:已完成 3:部分完成  -1:失败
     */
    public $Status;

    /**
     * @var string 步骤运行状态描述
     */
    public $Desc;

    /**
     * @var float 运行进度
     */
    public $Progress;

    /**
     * @var string 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Starttime;

    /**
     * @var string 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Endtime;

    /**
     * @var boolean 是否有详情信息
     */
    public $HadWoodDetail;

    /**
     * @var integer Wood子流程Id
     */
    public $WoodJobId;

    /**
     * @var string 多语言版本Key
     */
    public $LanguageKey;

    /**
     * @var string 如果stage失败，失败原因
     */
    public $FailedReason;

    /**
     * @var string 步骤耗时
     */
    public $TimeConsuming;

    /**
     * @param string $Stage 步骤
     * @param string $Name 步骤名
     * @param boolean $IsShow 是否展示
     * @param boolean $IsSubFlow 是否子流程
     * @param string $SubFlowFlag 子流程标签
     * @param integer $Status 步骤运行状态：0:未开始 1:进行中 2:已完成 3:部分完成  -1:失败
     * @param string $Desc 步骤运行状态描述
     * @param float $Progress 运行进度
     * @param string $Starttime 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Endtime 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HadWoodDetail 是否有详情信息
     * @param integer $WoodJobId Wood子流程Id
     * @param string $LanguageKey 多语言版本Key
     * @param string $FailedReason 如果stage失败，失败原因
     * @param string $TimeConsuming 步骤耗时
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
        if (array_key_exists("Stage",$param) and $param["Stage"] !== null) {
            $this->Stage = $param["Stage"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IsShow",$param) and $param["IsShow"] !== null) {
            $this->IsShow = $param["IsShow"];
        }

        if (array_key_exists("IsSubFlow",$param) and $param["IsSubFlow"] !== null) {
            $this->IsSubFlow = $param["IsSubFlow"];
        }

        if (array_key_exists("SubFlowFlag",$param) and $param["SubFlowFlag"] !== null) {
            $this->SubFlowFlag = $param["SubFlowFlag"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("Starttime",$param) and $param["Starttime"] !== null) {
            $this->Starttime = $param["Starttime"];
        }

        if (array_key_exists("Endtime",$param) and $param["Endtime"] !== null) {
            $this->Endtime = $param["Endtime"];
        }

        if (array_key_exists("HadWoodDetail",$param) and $param["HadWoodDetail"] !== null) {
            $this->HadWoodDetail = $param["HadWoodDetail"];
        }

        if (array_key_exists("WoodJobId",$param) and $param["WoodJobId"] !== null) {
            $this->WoodJobId = $param["WoodJobId"];
        }

        if (array_key_exists("LanguageKey",$param) and $param["LanguageKey"] !== null) {
            $this->LanguageKey = $param["LanguageKey"];
        }

        if (array_key_exists("FailedReason",$param) and $param["FailedReason"] !== null) {
            $this->FailedReason = $param["FailedReason"];
        }

        if (array_key_exists("TimeConsuming",$param) and $param["TimeConsuming"] !== null) {
            $this->TimeConsuming = $param["TimeConsuming"];
        }
    }
}
