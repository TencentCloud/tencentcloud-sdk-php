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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 第三方节点池信息
 *
 * @method RuntimeConfig getRuntimeConfig() 获取第三方节点Runtime配置
 * @method void setRuntimeConfig(RuntimeConfig $RuntimeConfig) 设置第三方节点Runtime配置
 * @method integer getNodesNum() 获取节点数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodesNum(integer $NodesNum) 设置节点数
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExternalNodePoolInfo extends AbstractModel
{
    /**
     * @var RuntimeConfig 第三方节点Runtime配置
     */
    public $RuntimeConfig;

    /**
     * @var integer 节点数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodesNum;

    /**
     * @param RuntimeConfig $RuntimeConfig 第三方节点Runtime配置
     * @param integer $NodesNum 节点数
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
        if (array_key_exists("RuntimeConfig",$param) and $param["RuntimeConfig"] !== null) {
            $this->RuntimeConfig = new RuntimeConfig();
            $this->RuntimeConfig->deserialize($param["RuntimeConfig"]);
        }

        if (array_key_exists("NodesNum",$param) and $param["NodesNum"] !== null) {
            $this->NodesNum = $param["NodesNum"];
        }
    }
}
