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
 * DescribeTCRInstanceList请求参数结构体
 *
 * @method string getAccessKey() 获取<p>访问密钥Id</p>
 * @method void setAccessKey(string $AccessKey) 设置<p>访问密钥Id</p>
 * @method string getSecretKey() 获取<p>访问密钥Key</p>
 * @method void setSecretKey(string $SecretKey) 设置<p>访问密钥Key</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getRegistryRegion() 获取<p>镜像仓库所在region</p>
 * @method void setRegistryRegion(array $RegistryRegion) 设置<p>镜像仓库所在region</p>
 * @method string getRegistryId() 获取<p>镜像仓库id</p>
 * @method void setRegistryId(string $RegistryId) 设置<p>镜像仓库id</p>
 * @method Filter getFilter() 获取<p>筛选项</p>
 * @method void setFilter(Filter $Filter) 设置<p>筛选项</p>
 */
class DescribeTCRInstanceListRequest extends AbstractModel
{
    /**
     * @var string <p>访问密钥Id</p>
     */
    public $AccessKey;

    /**
     * @var string <p>访问密钥Key</p>
     */
    public $SecretKey;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array <p>镜像仓库所在region</p>
     */
    public $RegistryRegion;

    /**
     * @var string <p>镜像仓库id</p>
     */
    public $RegistryId;

    /**
     * @var Filter <p>筛选项</p>
     */
    public $Filter;

    /**
     * @param string $AccessKey <p>访问密钥Id</p>
     * @param string $SecretKey <p>访问密钥Key</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $RegistryRegion <p>镜像仓库所在region</p>
     * @param string $RegistryId <p>镜像仓库id</p>
     * @param Filter $Filter <p>筛选项</p>
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
        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("RegistryRegion",$param) and $param["RegistryRegion"] !== null) {
            $this->RegistryRegion = $param["RegistryRegion"];
        }

        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }
    }
}
