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
 * InstallClusterAgent请求参数结构体
 *
 * @method array getClusterCaMD5List() 获取<p>集群CA证书MD5列表（单/批量统一）<br>用途：指定需要安装容器安全Agent（平行容器方式）的集群<br>取值参考：通过 DescribeClusterListV2 接口返回项中的 ClusterCaMD5 字段获取<br>说明：capi 层不对该字段做存在性/类型校验，按 cluster_ca_md5 透传到接入侧 ClusterInstall RPC</p>
 * @method void setClusterCaMD5List(array $ClusterCaMD5List) 设置<p>集群CA证书MD5列表（单/批量统一）<br>用途：指定需要安装容器安全Agent（平行容器方式）的集群<br>取值参考：通过 DescribeClusterListV2 接口返回项中的 ClusterCaMD5 字段获取<br>说明：capi 层不对该字段做存在性/类型校验，按 cluster_ca_md5 透传到接入侧 ClusterInstall RPC</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 */
class InstallClusterAgentRequest extends AbstractModel
{
    /**
     * @var array <p>集群CA证书MD5列表（单/批量统一）<br>用途：指定需要安装容器安全Agent（平行容器方式）的集群<br>取值参考：通过 DescribeClusterListV2 接口返回项中的 ClusterCaMD5 字段获取<br>说明：capi 层不对该字段做存在性/类型校验，按 cluster_ca_md5 透传到接入侧 ClusterInstall RPC</p>
     */
    public $ClusterCaMD5List;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @param array $ClusterCaMD5List <p>集群CA证书MD5列表（单/批量统一）<br>用途：指定需要安装容器安全Agent（平行容器方式）的集群<br>取值参考：通过 DescribeClusterListV2 接口返回项中的 ClusterCaMD5 字段获取<br>说明：capi 层不对该字段做存在性/类型校验，按 cluster_ca_md5 透传到接入侧 ClusterInstall RPC</p>
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
        if (array_key_exists("ClusterCaMD5List",$param) and $param["ClusterCaMD5List"] !== null) {
            $this->ClusterCaMD5List = $param["ClusterCaMD5List"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
