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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Grid部署应用信息
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method integer getReplicas() 获取期望副本数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplicas(integer $Replicas) 设置期望副本数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAvailableReplicas() 获取可用副本数
 * @method void setAvailableReplicas(integer $AvailableReplicas) 设置可用副本数
 * @method string getStartTime() 获取启动时间
 * @method void setStartTime(string $StartTime) 设置启动时间
 * @method string getWorkloadKind() 获取工作负载类型
 * @method void setWorkloadKind(string $WorkloadKind) 设置工作负载类型
 */
class GridItemInfo extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var integer 期望副本数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Replicas;

    /**
     * @var integer 可用副本数
     */
    public $AvailableReplicas;

    /**
     * @var string 启动时间
     */
    public $StartTime;

    /**
     * @var string 工作负载类型
     */
    public $WorkloadKind;

    /**
     * @param string $Name 名称
     * @param integer $Replicas 期望副本数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AvailableReplicas 可用副本数
     * @param string $StartTime 启动时间
     * @param string $WorkloadKind 工作负载类型
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }

        if (array_key_exists("AvailableReplicas",$param) and $param["AvailableReplicas"] !== null) {
            $this->AvailableReplicas = $param["AvailableReplicas"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("WorkloadKind",$param) and $param["WorkloadKind"] !== null) {
            $this->WorkloadKind = $param["WorkloadKind"];
        }
    }
}
