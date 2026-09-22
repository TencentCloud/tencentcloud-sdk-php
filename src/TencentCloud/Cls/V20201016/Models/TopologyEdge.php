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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 拓扑边
 *
 * @method string getSrcEntityId() 获取<p>源实体 ID</p>
 * @method void setSrcEntityId(string $SrcEntityId) 设置<p>源实体 ID</p>
 * @method string getDstEntityId() 获取<p>目的实体 ID</p>
 * @method void setDstEntityId(string $DstEntityId) 设置<p>目的实体 ID</p>
 * @method string getRelationType() 获取<p>关系类型：contains / same_as / calls</p><p>枚举值：</p><ul><li>contains： 包含关系，A 包含 B</li><li>same_as： 等价关系，A 等价 B</li><li>calls： 调用关系， A 调用 B</li></ul><p>默认值：-</p>
 * @method void setRelationType(string $RelationType) 设置<p>关系类型：contains / same_as / calls</p><p>枚举值：</p><ul><li>contains： 包含关系，A 包含 B</li><li>same_as： 等价关系，A 等价 B</li><li>calls： 调用关系， A 调用 B</li></ul><p>默认值：-</p>
 */
class TopologyEdge extends AbstractModel
{
    /**
     * @var string <p>源实体 ID</p>
     */
    public $SrcEntityId;

    /**
     * @var string <p>目的实体 ID</p>
     */
    public $DstEntityId;

    /**
     * @var string <p>关系类型：contains / same_as / calls</p><p>枚举值：</p><ul><li>contains： 包含关系，A 包含 B</li><li>same_as： 等价关系，A 等价 B</li><li>calls： 调用关系， A 调用 B</li></ul><p>默认值：-</p>
     */
    public $RelationType;

    /**
     * @param string $SrcEntityId <p>源实体 ID</p>
     * @param string $DstEntityId <p>目的实体 ID</p>
     * @param string $RelationType <p>关系类型：contains / same_as / calls</p><p>枚举值：</p><ul><li>contains： 包含关系，A 包含 B</li><li>same_as： 等价关系，A 等价 B</li><li>calls： 调用关系， A 调用 B</li></ul><p>默认值：-</p>
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
        if (array_key_exists("SrcEntityId",$param) and $param["SrcEntityId"] !== null) {
            $this->SrcEntityId = $param["SrcEntityId"];
        }

        if (array_key_exists("DstEntityId",$param) and $param["DstEntityId"] !== null) {
            $this->DstEntityId = $param["DstEntityId"];
        }

        if (array_key_exists("RelationType",$param) and $param["RelationType"] !== null) {
            $this->RelationType = $param["RelationType"];
        }
    }
}
