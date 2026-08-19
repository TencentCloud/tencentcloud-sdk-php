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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterSuperNodeInfo请求参数结构体
 *
 * @method string getNodeUniqueID() 获取<p>超级节点唯一 ID（对应集群节点表 unique_id）。<br>取值参考：通过 DescribeClusterNodeList 接口返回的 UniqueID 字段获取（节点类型为 SUPER 的节点）</p>
 * @method void setNodeUniqueID(string $NodeUniqueID) 设置<p>超级节点唯一 ID（对应集群节点表 unique_id）。<br>取值参考：通过 DescribeClusterNodeList 接口返回的 UniqueID 字段获取（节点类型为 SUPER 的节点）</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 */
class DescribeClusterSuperNodeInfoRequest extends AbstractModel
{
    /**
     * @var string <p>超级节点唯一 ID（对应集群节点表 unique_id）。<br>取值参考：通过 DescribeClusterNodeList 接口返回的 UniqueID 字段获取（节点类型为 SUPER 的节点）</p>
     */
    public $NodeUniqueID;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @param string $NodeUniqueID <p>超级节点唯一 ID（对应集群节点表 unique_id）。<br>取值参考：通过 DescribeClusterNodeList 接口返回的 UniqueID 字段获取（节点类型为 SUPER 的节点）</p>
     * @param array $MemberId <p>集团账号的成员id</p>
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
        if (array_key_exists("NodeUniqueID",$param) and $param["NodeUniqueID"] !== null) {
            $this->NodeUniqueID = $param["NodeUniqueID"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
