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
 * BindClusterOwner请求参数结构体
 *
 * @method array getClusterAssetIds() 获取<p>集群资产id</p>
 * @method void setClusterAssetIds(array $ClusterAssetIds) 设置<p>集群资产id</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method string getOwnerName() 获取<p>负责人名称</p>
 * @method void setOwnerName(string $OwnerName) 设置<p>负责人名称</p>
 * @method array getClusterCaMD5List() 获取<p>集群CAMD5值</p>
 * @method void setClusterCaMD5List(array $ClusterCaMD5List) 设置<p>集群CAMD5值</p>
 */
class BindClusterOwnerRequest extends AbstractModel
{
    /**
     * @var array <p>集群资产id</p>
     */
    public $ClusterAssetIds;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var string <p>负责人名称</p>
     */
    public $OwnerName;

    /**
     * @var array <p>集群CAMD5值</p>
     */
    public $ClusterCaMD5List;

    /**
     * @param array $ClusterAssetIds <p>集群资产id</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param string $OwnerName <p>负责人名称</p>
     * @param array $ClusterCaMD5List <p>集群CAMD5值</p>
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
        if (array_key_exists("ClusterAssetIds",$param) and $param["ClusterAssetIds"] !== null) {
            $this->ClusterAssetIds = $param["ClusterAssetIds"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("OwnerName",$param) and $param["OwnerName"] !== null) {
            $this->OwnerName = $param["OwnerName"];
        }

        if (array_key_exists("ClusterCaMD5List",$param) and $param["ClusterCaMD5List"] !== null) {
            $this->ClusterCaMD5List = $param["ClusterCaMD5List"];
        }
    }
}
