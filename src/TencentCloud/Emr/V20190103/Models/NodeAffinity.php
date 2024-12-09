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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点亲和性设置
 *
 * @method NodeSelector getRequiredDuringSchedulingIgnoredDuringExecution() 获取节点亲和性-强制调度设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequiredDuringSchedulingIgnoredDuringExecution(NodeSelector $RequiredDuringSchedulingIgnoredDuringExecution) 设置节点亲和性-强制调度设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPreferredDuringSchedulingIgnoredDuringExecution() 获取节点亲和性-容忍调度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPreferredDuringSchedulingIgnoredDuringExecution(array $PreferredDuringSchedulingIgnoredDuringExecution) 设置节点亲和性-容忍调度
注意：此字段可能返回 null，表示取不到有效值。
 */
class NodeAffinity extends AbstractModel
{
    /**
     * @var NodeSelector 节点亲和性-强制调度设置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequiredDuringSchedulingIgnoredDuringExecution;

    /**
     * @var array 节点亲和性-容忍调度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PreferredDuringSchedulingIgnoredDuringExecution;

    /**
     * @param NodeSelector $RequiredDuringSchedulingIgnoredDuringExecution 节点亲和性-强制调度设置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PreferredDuringSchedulingIgnoredDuringExecution 节点亲和性-容忍调度
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
        if (array_key_exists("RequiredDuringSchedulingIgnoredDuringExecution",$param) and $param["RequiredDuringSchedulingIgnoredDuringExecution"] !== null) {
            $this->RequiredDuringSchedulingIgnoredDuringExecution = new NodeSelector();
            $this->RequiredDuringSchedulingIgnoredDuringExecution->deserialize($param["RequiredDuringSchedulingIgnoredDuringExecution"]);
        }

        if (array_key_exists("PreferredDuringSchedulingIgnoredDuringExecution",$param) and $param["PreferredDuringSchedulingIgnoredDuringExecution"] !== null) {
            $this->PreferredDuringSchedulingIgnoredDuringExecution = [];
            foreach ($param["PreferredDuringSchedulingIgnoredDuringExecution"] as $key => $value){
                $obj = new PreferredSchedulingTerm();
                $obj->deserialize($value);
                array_push($this->PreferredDuringSchedulingIgnoredDuringExecution, $obj);
            }
        }
    }
}
