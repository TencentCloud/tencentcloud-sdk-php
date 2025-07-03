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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteClusterVirtualNodePool请求参数结构体
 *
 * @method string getClusterId() 获取集群ID，通过DescribeClusters接口获取
 * @method void setClusterId(string $ClusterId) 设置集群ID，通过DescribeClusters接口获取
 * @method array getNodePoolIds() 获取节点池ID，通过DescribeNodePools接口获取
 * @method void setNodePoolIds(array $NodePoolIds) 设置节点池ID，通过DescribeNodePools接口获取
 * @method boolean getForce() 获取是否强制删除，在超级节点上有pod的情况下，如果选择非强制删除，则删除会失败
 * @method void setForce(boolean $Force) 设置是否强制删除，在超级节点上有pod的情况下，如果选择非强制删除，则删除会失败
 */
class DeleteClusterVirtualNodePoolRequest extends AbstractModel
{
    /**
     * @var string 集群ID，通过DescribeClusters接口获取
     */
    public $ClusterId;

    /**
     * @var array 节点池ID，通过DescribeNodePools接口获取
     */
    public $NodePoolIds;

    /**
     * @var boolean 是否强制删除，在超级节点上有pod的情况下，如果选择非强制删除，则删除会失败
     */
    public $Force;

    /**
     * @param string $ClusterId 集群ID，通过DescribeClusters接口获取
     * @param array $NodePoolIds 节点池ID，通过DescribeNodePools接口获取
     * @param boolean $Force 是否强制删除，在超级节点上有pod的情况下，如果选择非强制删除，则删除会失败
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("NodePoolIds",$param) and $param["NodePoolIds"] !== null) {
            $this->NodePoolIds = $param["NodePoolIds"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }
    }
}
