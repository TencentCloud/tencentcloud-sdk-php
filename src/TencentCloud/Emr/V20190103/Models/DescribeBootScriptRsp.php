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
 * 引导脚本回包
 *
 * @method array getResourceAfter() 获取资源初始化结束自定义脚本文件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceAfter(array $ResourceAfter) 设置资源初始化结束自定义脚本文件
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getClusterBefore() 获取集群启动前自定义脚本文件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterBefore(array $ClusterBefore) 设置集群启动前自定义脚本文件
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getClusterAfter() 获取集群启动后自定义脚本文件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterAfter(array $ClusterAfter) 设置集群启动后自定义脚本文件
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getServiceBefore() 获取服务下线前自定义脚本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceBefore(array $ServiceBefore) 设置服务下线前自定义脚本
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeBootScriptRsp extends AbstractModel
{
    /**
     * @var array 资源初始化结束自定义脚本文件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceAfter;

    /**
     * @var array 集群启动前自定义脚本文件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterBefore;

    /**
     * @var array 集群启动后自定义脚本文件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterAfter;

    /**
     * @var array 服务下线前自定义脚本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceBefore;

    /**
     * @param array $ResourceAfter 资源初始化结束自定义脚本文件
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ClusterBefore 集群启动前自定义脚本文件
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ClusterAfter 集群启动后自定义脚本文件
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ServiceBefore 服务下线前自定义脚本
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
        if (array_key_exists("ResourceAfter",$param) and $param["ResourceAfter"] !== null) {
            $this->ResourceAfter = [];
            foreach ($param["ResourceAfter"] as $key => $value){
                $obj = new PreExecuteFileSetting();
                $obj->deserialize($value);
                array_push($this->ResourceAfter, $obj);
            }
        }

        if (array_key_exists("ClusterBefore",$param) and $param["ClusterBefore"] !== null) {
            $this->ClusterBefore = [];
            foreach ($param["ClusterBefore"] as $key => $value){
                $obj = new PreExecuteFileSetting();
                $obj->deserialize($value);
                array_push($this->ClusterBefore, $obj);
            }
        }

        if (array_key_exists("ClusterAfter",$param) and $param["ClusterAfter"] !== null) {
            $this->ClusterAfter = [];
            foreach ($param["ClusterAfter"] as $key => $value){
                $obj = new PreExecuteFileSetting();
                $obj->deserialize($value);
                array_push($this->ClusterAfter, $obj);
            }
        }

        if (array_key_exists("ServiceBefore",$param) and $param["ServiceBefore"] !== null) {
            $this->ServiceBefore = [];
            foreach ($param["ServiceBefore"] as $key => $value){
                $obj = new PreExecuteFileSetting();
                $obj->deserialize($value);
                array_push($this->ServiceBefore, $obj);
            }
        }
    }
}
