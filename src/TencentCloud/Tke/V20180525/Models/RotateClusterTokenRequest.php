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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RotateClusterToken请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method string getClusterType() 获取<p>集群类型，枚举类型：TKEServerless、TKE，为对应集群类型。默认TKE</p>
 * @method void setClusterType(string $ClusterType) 设置<p>集群类型，枚举类型：TKEServerless、TKE，为对应集群类型。默认TKE</p>
 * @method string getOperation() 获取<p>执行操作，枚举类型：CreateNewToken、RevokeOldToken、RecoverOldToken。<br>CreateNewToken：创建新的token并使之生效，注意默认最多有两个token同时生效，需要多个token生效，Force必须为true。<br>RevokeOldToken：删除老的token并使之失效，此时ClusterToken是必传。<br>RecoverOldToken：恢复老的token并使之生效，此时ClusterToken是必传，必须有对应的RevokeOldToken任务且任务成功才可以调用。</p>
 * @method void setOperation(string $Operation) 设置<p>执行操作，枚举类型：CreateNewToken、RevokeOldToken、RecoverOldToken。<br>CreateNewToken：创建新的token并使之生效，注意默认最多有两个token同时生效，需要多个token生效，Force必须为true。<br>RevokeOldToken：删除老的token并使之失效，此时ClusterToken是必传。<br>RecoverOldToken：恢复老的token并使之生效，此时ClusterToken是必传，必须有对应的RevokeOldToken任务且任务成功才可以调用。</p>
 * @method string getClusterToken() 获取<p>集群token，只有Operation为RevokeOldToken和RecoverOldToken时需要传入。</p>
 * @method void setClusterToken(string $ClusterToken) 设置<p>集群token，只有Operation为RevokeOldToken和RecoverOldToken时需要传入。</p>
 * @method boolean getForce() 获取<p>默认false，只有Operation为CreateNewToken时需要，设置为true时，才可以超过两个token。</p>
 * @method void setForce(boolean $Force) 设置<p>默认false，只有Operation为CreateNewToken时需要，设置为true时，才可以超过两个token。</p>
 */
class RotateClusterTokenRequest extends AbstractModel
{
    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>集群类型，枚举类型：TKEServerless、TKE，为对应集群类型。默认TKE</p>
     */
    public $ClusterType;

    /**
     * @var string <p>执行操作，枚举类型：CreateNewToken、RevokeOldToken、RecoverOldToken。<br>CreateNewToken：创建新的token并使之生效，注意默认最多有两个token同时生效，需要多个token生效，Force必须为true。<br>RevokeOldToken：删除老的token并使之失效，此时ClusterToken是必传。<br>RecoverOldToken：恢复老的token并使之生效，此时ClusterToken是必传，必须有对应的RevokeOldToken任务且任务成功才可以调用。</p>
     */
    public $Operation;

    /**
     * @var string <p>集群token，只有Operation为RevokeOldToken和RecoverOldToken时需要传入。</p>
     */
    public $ClusterToken;

    /**
     * @var boolean <p>默认false，只有Operation为CreateNewToken时需要，设置为true时，才可以超过两个token。</p>
     */
    public $Force;

    /**
     * @param string $ClusterId <p>集群ID</p>
     * @param string $ClusterType <p>集群类型，枚举类型：TKEServerless、TKE，为对应集群类型。默认TKE</p>
     * @param string $Operation <p>执行操作，枚举类型：CreateNewToken、RevokeOldToken、RecoverOldToken。<br>CreateNewToken：创建新的token并使之生效，注意默认最多有两个token同时生效，需要多个token生效，Force必须为true。<br>RevokeOldToken：删除老的token并使之失效，此时ClusterToken是必传。<br>RecoverOldToken：恢复老的token并使之生效，此时ClusterToken是必传，必须有对应的RevokeOldToken任务且任务成功才可以调用。</p>
     * @param string $ClusterToken <p>集群token，只有Operation为RevokeOldToken和RecoverOldToken时需要传入。</p>
     * @param boolean $Force <p>默认false，只有Operation为CreateNewToken时需要，设置为true时，才可以超过两个token。</p>
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

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("ClusterToken",$param) and $param["ClusterToken"] !== null) {
            $this->ClusterToken = $param["ClusterToken"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }
    }
}
