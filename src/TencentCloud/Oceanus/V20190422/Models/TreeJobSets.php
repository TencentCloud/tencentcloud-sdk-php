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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义树结构出参作业列表
 *
 * @method string getJobId() 获取<p>作业Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobId(string $JobId) 设置<p>作业Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>作业名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>作业名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getJobType() 获取<p>作业类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobType(integer $JobType) 设置<p>作业类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRunningCu() 获取<p>作业占用资源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunningCu(float $RunningCu) 设置<p>作业占用资源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取<p>作业状态 启动或者停止或者暂停</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置<p>作业状态 启动或者停止或者暂停</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScalingType() 获取<p>0:代表没开启调优任务，1:开启智能调优，2:代表定时调优</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScalingType(integer $ScalingType) 设置<p>0:代表没开启调优任务，1:开启智能调优，2:代表定时调优</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRunningCpu() 获取<p>RunningCpu</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunningCpu(float $RunningCpu) 设置<p>RunningCpu</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRunningMem() 获取<p>RunningMem</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunningMem(float $RunningMem) 设置<p>RunningMem</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDecodeSqlCode() 获取<p>sql</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDecodeSqlCode(string $DecodeSqlCode) 设置<p>sql</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPublishedJobConfigId() 获取<p>发布版本配置id</p>
 * @method void setPublishedJobConfigId(integer $PublishedJobConfigId) 设置<p>发布版本配置id</p>
 * @method string getFolderPath() 获取<p>完整的文件夹路径，仅在平铺模式下返回</p>
 * @method void setFolderPath(string $FolderPath) 设置<p>完整的文件夹路径，仅在平铺模式下返回</p>
 */
class TreeJobSets extends AbstractModel
{
    /**
     * @var string <p>作业Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobId;

    /**
     * @var string <p>作业名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer <p>作业类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobType;

    /**
     * @var float <p>作业占用资源</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunningCu;

    /**
     * @var integer <p>作业状态 启动或者停止或者暂停</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer <p>0:代表没开启调优任务，1:开启智能调优，2:代表定时调优</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScalingType;

    /**
     * @var float <p>RunningCpu</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunningCpu;

    /**
     * @var float <p>RunningMem</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunningMem;

    /**
     * @var string <p>sql</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DecodeSqlCode;

    /**
     * @var integer <p>发布版本配置id</p>
     */
    public $PublishedJobConfigId;

    /**
     * @var string <p>完整的文件夹路径，仅在平铺模式下返回</p>
     */
    public $FolderPath;

    /**
     * @param string $JobId <p>作业Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>作业名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $JobType <p>作业类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $RunningCu <p>作业占用资源</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status <p>作业状态 启动或者停止或者暂停</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScalingType <p>0:代表没开启调优任务，1:开启智能调优，2:代表定时调优</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $RunningCpu <p>RunningCpu</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $RunningMem <p>RunningMem</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DecodeSqlCode <p>sql</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PublishedJobConfigId <p>发布版本配置id</p>
     * @param string $FolderPath <p>完整的文件夹路径，仅在平铺模式下返回</p>
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("RunningCu",$param) and $param["RunningCu"] !== null) {
            $this->RunningCu = $param["RunningCu"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ScalingType",$param) and $param["ScalingType"] !== null) {
            $this->ScalingType = $param["ScalingType"];
        }

        if (array_key_exists("RunningCpu",$param) and $param["RunningCpu"] !== null) {
            $this->RunningCpu = $param["RunningCpu"];
        }

        if (array_key_exists("RunningMem",$param) and $param["RunningMem"] !== null) {
            $this->RunningMem = $param["RunningMem"];
        }

        if (array_key_exists("DecodeSqlCode",$param) and $param["DecodeSqlCode"] !== null) {
            $this->DecodeSqlCode = $param["DecodeSqlCode"];
        }

        if (array_key_exists("PublishedJobConfigId",$param) and $param["PublishedJobConfigId"] !== null) {
            $this->PublishedJobConfigId = $param["PublishedJobConfigId"];
        }

        if (array_key_exists("FolderPath",$param) and $param["FolderPath"] !== null) {
            $this->FolderPath = $param["FolderPath"];
        }
    }
}
