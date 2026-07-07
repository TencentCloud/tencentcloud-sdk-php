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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BYOK的健康检查结果
 *
 * @method string getProviderKeyId() 获取<p>BYOK的KeyID</p>
 * @method void setProviderKeyId(string $ProviderKeyId) 设置<p>BYOK的KeyID</p>
 * @method string getModel() 获取<p>模型</p>
 * @method void setModel(string $Model) 设置<p>模型</p>
 * @method string getStatus() 获取<p>健康检查状态</p>
 * @method void setStatus(string $Status) 设置<p>健康检查状态</p>
 */
class ModelHealthCheckResults extends AbstractModel
{
    /**
     * @var string <p>BYOK的KeyID</p>
     */
    public $ProviderKeyId;

    /**
     * @var string <p>模型</p>
     */
    public $Model;

    /**
     * @var string <p>健康检查状态</p>
     */
    public $Status;

    /**
     * @param string $ProviderKeyId <p>BYOK的KeyID</p>
     * @param string $Model <p>模型</p>
     * @param string $Status <p>健康检查状态</p>
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
        if (array_key_exists("ProviderKeyId",$param) and $param["ProviderKeyId"] !== null) {
            $this->ProviderKeyId = $param["ProviderKeyId"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
