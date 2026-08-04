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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源配额
 *
 * @method ResourceSpec getResourceSpec() 获取<p>可售卖资源规格</p>
 * @method void setResourceSpec(ResourceSpec $ResourceSpec) 设置<p>可售卖资源规格</p>
 * @method integer getQuota() 获取<p>配额数量</p>
 * @method void setQuota(integer $Quota) 设置<p>配额数量</p>
 */
class ResourceQuota extends AbstractModel
{
    /**
     * @var ResourceSpec <p>可售卖资源规格</p>
     */
    public $ResourceSpec;

    /**
     * @var integer <p>配额数量</p>
     */
    public $Quota;

    /**
     * @param ResourceSpec $ResourceSpec <p>可售卖资源规格</p>
     * @param integer $Quota <p>配额数量</p>
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
        if (array_key_exists("ResourceSpec",$param) and $param["ResourceSpec"] !== null) {
            $this->ResourceSpec = new ResourceSpec();
            $this->ResourceSpec->deserialize($param["ResourceSpec"]);
        }

        if (array_key_exists("Quota",$param) and $param["Quota"] !== null) {
            $this->Quota = $param["Quota"];
        }
    }
}
