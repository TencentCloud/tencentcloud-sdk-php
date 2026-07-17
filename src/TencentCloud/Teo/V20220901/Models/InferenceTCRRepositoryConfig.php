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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 推理的 TCR 镜像仓库配置。
 *
 * @method string getTCRType() 获取<p>TCR 服务类型。取值有：<li>Personal：个人版；</li><li>Enterprise：企业版。</li></p>
 * @method void setTCRType(string $TCRType) 设置<p>TCR 服务类型。取值有：<li>Personal：个人版；</li><li>Enterprise：企业版。</li></p>
 * @method string getImage() 获取<p>镜像地址。</p>
 * @method void setImage(string $Image) 设置<p>镜像地址。</p>
 * @method string getRegistryId() 获取<p>镜像仓库实例 ID。当 TCRType = Enterprise 时必填。</p>
 * @method void setRegistryId(string $RegistryId) 设置<p>镜像仓库实例 ID。当 TCRType = Enterprise 时必填。</p>
 * @method string getRegionName() 获取<p>地域名称。</p>
 * @method void setRegionName(string $RegionName) 设置<p>地域名称。</p>
 */
class InferenceTCRRepositoryConfig extends AbstractModel
{
    /**
     * @var string <p>TCR 服务类型。取值有：<li>Personal：个人版；</li><li>Enterprise：企业版。</li></p>
     */
    public $TCRType;

    /**
     * @var string <p>镜像地址。</p>
     */
    public $Image;

    /**
     * @var string <p>镜像仓库实例 ID。当 TCRType = Enterprise 时必填。</p>
     */
    public $RegistryId;

    /**
     * @var string <p>地域名称。</p>
     */
    public $RegionName;

    /**
     * @param string $TCRType <p>TCR 服务类型。取值有：<li>Personal：个人版；</li><li>Enterprise：企业版。</li></p>
     * @param string $Image <p>镜像地址。</p>
     * @param string $RegistryId <p>镜像仓库实例 ID。当 TCRType = Enterprise 时必填。</p>
     * @param string $RegionName <p>地域名称。</p>
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
        if (array_key_exists("TCRType",$param) and $param["TCRType"] !== null) {
            $this->TCRType = $param["TCRType"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }
    }
}
