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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RemoveNodesFromDBCustomCluster请求参数结构体
 *
 * @method string getClusterId() 获取<p>DB Custom 集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>DB Custom 集群ID</p>
 * @method array getNodeIds() 获取<p>要下架的 DB Custom 节点ID列表</p>
 * @method void setNodeIds(array $NodeIds) 设置<p>要下架的 DB Custom 节点ID列表</p>
 * @method LoginSettings getLoginSettings() 获取<p>节点的登录参数</p>
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置<p>节点的登录参数</p>
 * @method boolean getForce() 获取<p>当节点中还有业务 Pod 在运行，默认会拦截从集群中移除节点的操作。如果该参数为 true，表示强制执行此操作。</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul><p>默认值：false</p>
 * @method void setForce(boolean $Force) 设置<p>当节点中还有业务 Pod 在运行，默认会拦截从集群中移除节点的操作。如果该参数为 true，表示强制执行此操作。</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul><p>默认值：false</p>
 */
class RemoveNodesFromDBCustomClusterRequest extends AbstractModel
{
    /**
     * @var string <p>DB Custom 集群ID</p>
     */
    public $ClusterId;

    /**
     * @var array <p>要下架的 DB Custom 节点ID列表</p>
     */
    public $NodeIds;

    /**
     * @var LoginSettings <p>节点的登录参数</p>
     */
    public $LoginSettings;

    /**
     * @var boolean <p>当节点中还有业务 Pod 在运行，默认会拦截从集群中移除节点的操作。如果该参数为 true，表示强制执行此操作。</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul><p>默认值：false</p>
     */
    public $Force;

    /**
     * @param string $ClusterId <p>DB Custom 集群ID</p>
     * @param array $NodeIds <p>要下架的 DB Custom 节点ID列表</p>
     * @param LoginSettings $LoginSettings <p>节点的登录参数</p>
     * @param boolean $Force <p>当节点中还有业务 Pod 在运行，默认会拦截从集群中移除节点的操作。如果该参数为 true，表示强制执行此操作。</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul><p>默认值：false</p>
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

        if (array_key_exists("NodeIds",$param) and $param["NodeIds"] !== null) {
            $this->NodeIds = $param["NodeIds"];
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }
    }
}
