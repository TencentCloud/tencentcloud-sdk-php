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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分批发布详情
 *
 * @method DeployStrategyConf getDeployStrategyConf() 获取分批发布策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeployStrategyConf(DeployStrategyConf $DeployStrategyConf) 设置分批发布策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取当前状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置当前状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method DeployServiceBatchDetail getBetaBatchDetail() 获取beta分批详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBetaBatchDetail(DeployServiceBatchDetail $BetaBatchDetail) 设置beta分批详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOtherBatchDetail() 获取其他分批详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOtherBatchDetail(array $OtherBatchDetail) 设置其他分批详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribeRunPodPage getOldVersionPodList() 获取老版本pod列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOldVersionPodList(DescribeRunPodPage $OldVersionPodList) 设置老版本pod列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCurrentBatchIndex() 获取当前批次id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrentBatchIndex(integer $CurrentBatchIndex) 设置当前批次id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorMessage() 获取错误原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMessage(string $ErrorMessage) 设置错误原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCurrentBatchStatus() 获取当前批次状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrentBatchStatus(string $CurrentBatchStatus) 设置当前批次状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNewDeployVersion() 获取新版本version
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNewDeployVersion(string $NewDeployVersion) 设置新版本version
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOldDeployVersion() 获取旧版本version
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOldDeployVersion(string $OldDeployVersion) 设置旧版本version
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNewVersionPackageInfo() 获取包名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNewVersionPackageInfo(string $NewVersionPackageInfo) 设置包名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNextBatchStartTime() 获取下一批次开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNextBatchStartTime(integer $NextBatchStartTime) 设置下一批次开始时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class TemDeployApplicationDetailInfo extends AbstractModel
{
    /**
     * @var DeployStrategyConf 分批发布策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeployStrategyConf;

    /**
     * @var string 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 当前状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var DeployServiceBatchDetail beta分批详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BetaBatchDetail;

    /**
     * @var array 其他分批详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OtherBatchDetail;

    /**
     * @var DescribeRunPodPage 老版本pod列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OldVersionPodList;

    /**
     * @var integer 当前批次id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurrentBatchIndex;

    /**
     * @var string 错误原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMessage;

    /**
     * @var string 当前批次状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurrentBatchStatus;

    /**
     * @var string 新版本version
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NewDeployVersion;

    /**
     * @var string 旧版本version
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OldDeployVersion;

    /**
     * @var string 包名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NewVersionPackageInfo;

    /**
     * @var integer 下一批次开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NextBatchStartTime;

    /**
     * @param DeployStrategyConf $DeployStrategyConf 分批发布策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 当前状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param DeployServiceBatchDetail $BetaBatchDetail beta分批详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OtherBatchDetail 其他分批详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribeRunPodPage $OldVersionPodList 老版本pod列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CurrentBatchIndex 当前批次id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorMessage 错误原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CurrentBatchStatus 当前批次状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NewDeployVersion 新版本version
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OldDeployVersion 旧版本version
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NewVersionPackageInfo 包名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NextBatchStartTime 下一批次开始时间
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
        if (array_key_exists("DeployStrategyConf",$param) and $param["DeployStrategyConf"] !== null) {
            $this->DeployStrategyConf = new DeployStrategyConf();
            $this->DeployStrategyConf->deserialize($param["DeployStrategyConf"]);
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BetaBatchDetail",$param) and $param["BetaBatchDetail"] !== null) {
            $this->BetaBatchDetail = new DeployServiceBatchDetail();
            $this->BetaBatchDetail->deserialize($param["BetaBatchDetail"]);
        }

        if (array_key_exists("OtherBatchDetail",$param) and $param["OtherBatchDetail"] !== null) {
            $this->OtherBatchDetail = [];
            foreach ($param["OtherBatchDetail"] as $key => $value){
                $obj = new DeployServiceBatchDetail();
                $obj->deserialize($value);
                array_push($this->OtherBatchDetail, $obj);
            }
        }

        if (array_key_exists("OldVersionPodList",$param) and $param["OldVersionPodList"] !== null) {
            $this->OldVersionPodList = new DescribeRunPodPage();
            $this->OldVersionPodList->deserialize($param["OldVersionPodList"]);
        }

        if (array_key_exists("CurrentBatchIndex",$param) and $param["CurrentBatchIndex"] !== null) {
            $this->CurrentBatchIndex = $param["CurrentBatchIndex"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("CurrentBatchStatus",$param) and $param["CurrentBatchStatus"] !== null) {
            $this->CurrentBatchStatus = $param["CurrentBatchStatus"];
        }

        if (array_key_exists("NewDeployVersion",$param) and $param["NewDeployVersion"] !== null) {
            $this->NewDeployVersion = $param["NewDeployVersion"];
        }

        if (array_key_exists("OldDeployVersion",$param) and $param["OldDeployVersion"] !== null) {
            $this->OldDeployVersion = $param["OldDeployVersion"];
        }

        if (array_key_exists("NewVersionPackageInfo",$param) and $param["NewVersionPackageInfo"] !== null) {
            $this->NewVersionPackageInfo = $param["NewVersionPackageInfo"];
        }

        if (array_key_exists("NextBatchStartTime",$param) and $param["NextBatchStartTime"] !== null) {
            $this->NextBatchStartTime = $param["NextBatchStartTime"];
        }
    }
}
