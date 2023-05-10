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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 复制作业单条明细结果
 *
 * @method string getJobId() 获取原作业id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobId(string $JobId) 设置原作业id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobName() 获取原作业名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobName(string $JobName) 设置原作业名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetJobName() 获取新作业名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetJobName(string $TargetJobName) 设置新作业名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetJobId() 获取新作业id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetJobId(string $TargetJobId) 设置新作业id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取失败时候的信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置失败时候的信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResult() 获取0 成功  -1 失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResult(integer $Result) 设置0 成功  -1 失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取目标集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置目标集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取目标集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置目标集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getJobType() 获取作业类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobType(integer $JobType) 设置作业类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class CopyJobResult extends AbstractModel
{
    /**
     * @var string 原作业id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobId;

    /**
     * @var string 原作业名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobName;

    /**
     * @var string 新作业名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetJobName;

    /**
     * @var string 新作业id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetJobId;

    /**
     * @var string 失败时候的信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var integer 0 成功  -1 失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Result;

    /**
     * @var string 目标集群名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterName;

    /**
     * @var string 目标集群id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var integer 作业类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobType;

    /**
     * @param string $JobId 原作业id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobName 原作业名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetJobName 新作业名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetJobId 新作业id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 失败时候的信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Result 0 成功  -1 失败
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName 目标集群名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 目标集群id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $JobType 作业类型
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("TargetJobName",$param) and $param["TargetJobName"] !== null) {
            $this->TargetJobName = $param["TargetJobName"];
        }

        if (array_key_exists("TargetJobId",$param) and $param["TargetJobId"] !== null) {
            $this->TargetJobId = $param["TargetJobId"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }
    }
}
