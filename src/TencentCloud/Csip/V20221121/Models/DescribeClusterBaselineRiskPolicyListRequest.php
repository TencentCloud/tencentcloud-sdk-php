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
 * DescribeClusterBaselineRiskPolicyList请求参数结构体
 *
 * @method integer getClusterAppid() 获取<p>集群所属账号的 Appid，用于指定查询基线风险策略的账号。</p>
 * @method void setClusterAppid(integer $ClusterAppid) 设置<p>集群所属账号的 Appid，用于指定查询基线风险策略的账号。</p>
 * @method string getClusterCaMD5() 获取<p>集群CaMD5</p>
 * @method void setClusterCaMD5(string $ClusterCaMD5) 设置<p>集群CaMD5</p>
 * @method array getMemberId() 获取集团账号的成员 ID 列表。
 * @method void setMemberId(array $MemberId) 设置集团账号的成员 ID 列表。
 */
class DescribeClusterBaselineRiskPolicyListRequest extends AbstractModel
{
    /**
     * @var integer <p>集群所属账号的 Appid，用于指定查询基线风险策略的账号。</p>
     */
    public $ClusterAppid;

    /**
     * @var string <p>集群CaMD5</p>
     */
    public $ClusterCaMD5;

    /**
     * @var array 集团账号的成员 ID 列表。
     */
    public $MemberId;

    /**
     * @param integer $ClusterAppid <p>集群所属账号的 Appid，用于指定查询基线风险策略的账号。</p>
     * @param string $ClusterCaMD5 <p>集群CaMD5</p>
     * @param array $MemberId 集团账号的成员 ID 列表。
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
        if (array_key_exists("ClusterAppid",$param) and $param["ClusterAppid"] !== null) {
            $this->ClusterAppid = $param["ClusterAppid"];
        }

        if (array_key_exists("ClusterCaMD5",$param) and $param["ClusterCaMD5"] !== null) {
            $this->ClusterCaMD5 = $param["ClusterCaMD5"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
