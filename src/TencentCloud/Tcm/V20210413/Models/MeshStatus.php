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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Mesh当前状态
 *
 * @method integer getServiceCount() 获取服务数量
 * @method void setServiceCount(integer $ServiceCount) 设置服务数量
 * @method string getCanaryVersion() 获取灰度升级的版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCanaryVersion(string $CanaryVersion) 设置灰度升级的版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPrometheus() 获取已废弃
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrometheus(array $Prometheus) 设置已废弃
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStateMessage() 获取状态附带信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStateMessage(string $StateMessage) 设置状态附带信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getActiveOperationList() 获取正在执行的异步操作
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActiveOperationList(array $ActiveOperationList) 设置正在执行的异步操作
注意：此字段可能返回 null，表示取不到有效值。
 * @method PrometheusStatus getTPS() 获取获取TPS信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTPS(PrometheusStatus $TPS) 设置获取TPS信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class MeshStatus extends AbstractModel
{
    /**
     * @var integer 服务数量
     */
    public $ServiceCount;

    /**
     * @var string 灰度升级的版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CanaryVersion;

    /**
     * @var array 已废弃
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Prometheus;

    /**
     * @var string 状态附带信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StateMessage;

    /**
     * @var array 正在执行的异步操作
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActiveOperationList;

    /**
     * @var PrometheusStatus 获取TPS信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TPS;

    /**
     * @param integer $ServiceCount 服务数量
     * @param string $CanaryVersion 灰度升级的版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Prometheus 已废弃
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StateMessage 状态附带信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ActiveOperationList 正在执行的异步操作
注意：此字段可能返回 null，表示取不到有效值。
     * @param PrometheusStatus $TPS 获取TPS信息
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
        if (array_key_exists("ServiceCount",$param) and $param["ServiceCount"] !== null) {
            $this->ServiceCount = $param["ServiceCount"];
        }

        if (array_key_exists("CanaryVersion",$param) and $param["CanaryVersion"] !== null) {
            $this->CanaryVersion = $param["CanaryVersion"];
        }

        if (array_key_exists("Prometheus",$param) and $param["Prometheus"] !== null) {
            $this->Prometheus = [];
            foreach ($param["Prometheus"] as $key => $value){
                $obj = new PrometheusStatus();
                $obj->deserialize($value);
                array_push($this->Prometheus, $obj);
            }
        }

        if (array_key_exists("StateMessage",$param) and $param["StateMessage"] !== null) {
            $this->StateMessage = $param["StateMessage"];
        }

        if (array_key_exists("ActiveOperationList",$param) and $param["ActiveOperationList"] !== null) {
            $this->ActiveOperationList = [];
            foreach ($param["ActiveOperationList"] as $key => $value){
                $obj = new ActiveOperation();
                $obj->deserialize($value);
                array_push($this->ActiveOperationList, $obj);
            }
        }

        if (array_key_exists("TPS",$param) and $param["TPS"] !== null) {
            $this->TPS = new PrometheusStatus();
            $this->TPS->deserialize($param["TPS"]);
        }
    }
}
