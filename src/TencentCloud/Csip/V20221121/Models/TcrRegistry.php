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
 * tcr仓库实例
 *
 * @method string getRegistryId() 获取<p>仓库实例id</p>
 * @method void setRegistryId(string $RegistryId) 设置<p>仓库实例id</p>
 * @method string getRegistryName() 获取<p>仓库名</p>
 * @method void setRegistryName(string $RegistryName) 设置<p>仓库名</p>
 * @method string getPublicDomain() 获取<p>仓库域名</p>
 * @method void setPublicDomain(string $PublicDomain) 设置<p>仓库域名</p>
 * @method string getRegistryRegion() 获取<p>仓库所在region</p>
 * @method void setRegistryRegion(string $RegistryRegion) 设置<p>仓库所在region</p>
 * @method integer getRegistryRegionId() 获取<p>仓库id</p>
 * @method void setRegistryRegionId(integer $RegistryRegionId) 设置<p>仓库id</p>
 */
class TcrRegistry extends AbstractModel
{
    /**
     * @var string <p>仓库实例id</p>
     */
    public $RegistryId;

    /**
     * @var string <p>仓库名</p>
     */
    public $RegistryName;

    /**
     * @var string <p>仓库域名</p>
     */
    public $PublicDomain;

    /**
     * @var string <p>仓库所在region</p>
     */
    public $RegistryRegion;

    /**
     * @var integer <p>仓库id</p>
     */
    public $RegistryRegionId;

    /**
     * @param string $RegistryId <p>仓库实例id</p>
     * @param string $RegistryName <p>仓库名</p>
     * @param string $PublicDomain <p>仓库域名</p>
     * @param string $RegistryRegion <p>仓库所在region</p>
     * @param integer $RegistryRegionId <p>仓库id</p>
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("RegistryName",$param) and $param["RegistryName"] !== null) {
            $this->RegistryName = $param["RegistryName"];
        }

        if (array_key_exists("PublicDomain",$param) and $param["PublicDomain"] !== null) {
            $this->PublicDomain = $param["PublicDomain"];
        }

        if (array_key_exists("RegistryRegion",$param) and $param["RegistryRegion"] !== null) {
            $this->RegistryRegion = $param["RegistryRegion"];
        }

        if (array_key_exists("RegistryRegionId",$param) and $param["RegistryRegionId"] !== null) {
            $this->RegistryRegionId = $param["RegistryRegionId"];
        }
    }
}
