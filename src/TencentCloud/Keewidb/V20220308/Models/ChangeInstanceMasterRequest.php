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
namespace TencentCloud\Keewidb\V20220308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChangeInstanceMaster请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID，如：kee-6ubh****。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID，如：kee-6ubh****。</p>
 * @method integer getGroupId() 获取<p>副本节点组 ID，请通过接口DescribeInstanceReplicas获取多 AZ备节点组的 ID 信息。</p>
 * @method void setGroupId(integer $GroupId) 设置<p>副本节点组 ID，请通过接口DescribeInstanceReplicas获取多 AZ备节点组的 ID 信息。</p>
 * @method string getNodeId() 获取<p>副本节点 ID。</p>
 * @method void setNodeId(string $NodeId) 设置<p>副本节点 ID。</p>
 */
class ChangeInstanceMasterRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID，如：kee-6ubh****。</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>副本节点组 ID，请通过接口DescribeInstanceReplicas获取多 AZ备节点组的 ID 信息。</p>
     */
    public $GroupId;

    /**
     * @var string <p>副本节点 ID。</p>
     */
    public $NodeId;

    /**
     * @param string $InstanceId <p>实例 ID，如：kee-6ubh****。</p>
     * @param integer $GroupId <p>副本节点组 ID，请通过接口DescribeInstanceReplicas获取多 AZ备节点组的 ID 信息。</p>
     * @param string $NodeId <p>副本节点 ID。</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }
    }
}
