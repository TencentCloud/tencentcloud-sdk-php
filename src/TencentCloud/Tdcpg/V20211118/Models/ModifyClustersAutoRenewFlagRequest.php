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
namespace TencentCloud\Tdcpg\V20211118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClustersAutoRenewFlag请求参数结构体
 *
 * @method array getClusterIdSet() 获取集群ID列表
 * @method void setClusterIdSet(array $ClusterIdSet) 设置集群ID列表
 * @method integer getAutoRenewFlag() 获取是否自动续费，0-不 1-是。默认为0，只有当集群的PayMode为PREPAID时生效。
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置是否自动续费，0-不 1-是。默认为0，只有当集群的PayMode为PREPAID时生效。
 */
class ModifyClustersAutoRenewFlagRequest extends AbstractModel
{
    /**
     * @var array 集群ID列表
     */
    public $ClusterIdSet;

    /**
     * @var integer 是否自动续费，0-不 1-是。默认为0，只有当集群的PayMode为PREPAID时生效。
     */
    public $AutoRenewFlag;

    /**
     * @param array $ClusterIdSet 集群ID列表
     * @param integer $AutoRenewFlag 是否自动续费，0-不 1-是。默认为0，只有当集群的PayMode为PREPAID时生效。
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
        if (array_key_exists("ClusterIdSet",$param) and $param["ClusterIdSet"] !== null) {
            $this->ClusterIdSet = $param["ClusterIdSet"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }
    }
}
