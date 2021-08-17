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
 * 分批发布单批次详情
 *
 * @method DeployServicePodDetail getOldPodList() 获取旧实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOldPodList(DeployServicePodDetail $OldPodList) 设置旧实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method DeployServicePodDetail getNewPodList() 获取新实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNewPodList(DeployServicePodDetail $NewPodList) 设置新实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBatchStatus() 获取当前批次状态："WaitForTimeExceed", "WaitForResume", "Deploying", "Finish", "NotStart"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBatchStatus(string $BatchStatus) 设置当前批次状态："WaitForTimeExceed", "WaitForResume", "Deploying", "Finish", "NotStart"
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPodNum() 获取该批次预计旧实例数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodNum(integer $PodNum) 设置该批次预计旧实例数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBatchIndex() 获取批次id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBatchIndex(integer $BatchIndex) 设置批次id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOldPods() 获取旧实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOldPods(array $OldPods) 设置旧实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNewPods() 获取新实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNewPods(array $NewPods) 设置新实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNextBatchStartTime() 获取=0：手动确认批次；>0：下一批次开始时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNextBatchStartTime(integer $NextBatchStartTime) 设置=0：手动确认批次；>0：下一批次开始时间戳
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeployServiceBatchDetail extends AbstractModel
{
    /**
     * @var DeployServicePodDetail 旧实例列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OldPodList;

    /**
     * @var DeployServicePodDetail 新实例列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NewPodList;

    /**
     * @var string 当前批次状态："WaitForTimeExceed", "WaitForResume", "Deploying", "Finish", "NotStart"
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BatchStatus;

    /**
     * @var integer 该批次预计旧实例数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodNum;

    /**
     * @var integer 批次id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BatchIndex;

    /**
     * @var array 旧实例列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OldPods;

    /**
     * @var array 新实例列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NewPods;

    /**
     * @var integer =0：手动确认批次；>0：下一批次开始时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NextBatchStartTime;

    /**
     * @param DeployServicePodDetail $OldPodList 旧实例列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param DeployServicePodDetail $NewPodList 新实例列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BatchStatus 当前批次状态："WaitForTimeExceed", "WaitForResume", "Deploying", "Finish", "NotStart"
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PodNum 该批次预计旧实例数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BatchIndex 批次id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OldPods 旧实例列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NewPods 新实例列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NextBatchStartTime =0：手动确认批次；>0：下一批次开始时间戳
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
        if (array_key_exists("OldPodList",$param) and $param["OldPodList"] !== null) {
            $this->OldPodList = new DeployServicePodDetail();
            $this->OldPodList->deserialize($param["OldPodList"]);
        }

        if (array_key_exists("NewPodList",$param) and $param["NewPodList"] !== null) {
            $this->NewPodList = new DeployServicePodDetail();
            $this->NewPodList->deserialize($param["NewPodList"]);
        }

        if (array_key_exists("BatchStatus",$param) and $param["BatchStatus"] !== null) {
            $this->BatchStatus = $param["BatchStatus"];
        }

        if (array_key_exists("PodNum",$param) and $param["PodNum"] !== null) {
            $this->PodNum = $param["PodNum"];
        }

        if (array_key_exists("BatchIndex",$param) and $param["BatchIndex"] !== null) {
            $this->BatchIndex = $param["BatchIndex"];
        }

        if (array_key_exists("OldPods",$param) and $param["OldPods"] !== null) {
            $this->OldPods = [];
            foreach ($param["OldPods"] as $key => $value){
                $obj = new DeployServicePodDetail();
                $obj->deserialize($value);
                array_push($this->OldPods, $obj);
            }
        }

        if (array_key_exists("NewPods",$param) and $param["NewPods"] !== null) {
            $this->NewPods = [];
            foreach ($param["NewPods"] as $key => $value){
                $obj = new DeployServicePodDetail();
                $obj->deserialize($value);
                array_push($this->NewPods, $obj);
            }
        }

        if (array_key_exists("NextBatchStartTime",$param) and $param["NextBatchStartTime"] !== null) {
            $this->NextBatchStartTime = $param["NextBatchStartTime"];
        }
    }
}
