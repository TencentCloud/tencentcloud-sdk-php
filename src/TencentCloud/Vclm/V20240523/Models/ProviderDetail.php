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
namespace TencentCloud\Vclm\V20240523\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ProviderDetail
 *
 * @method string getProvider() 获取<p>供应商详情</p>
 * @method void setProvider(string $Provider) 设置<p>供应商详情</p>
 * @method string getStatus() 获取<p>状态</p>
 * @method void setStatus(string $Status) 设置<p>状态</p>
 * @method string getErrorMessage() 获取<p>错误信息</p>
 * @method void setErrorMessage(string $ErrorMessage) 设置<p>错误信息</p>
 */
class ProviderDetail extends AbstractModel
{
    /**
     * @var string <p>供应商详情</p>
     */
    public $Provider;

    /**
     * @var string <p>状态</p>
     */
    public $Status;

    /**
     * @var string <p>错误信息</p>
     */
    public $ErrorMessage;

    /**
     * @param string $Provider <p>供应商详情</p>
     * @param string $Status <p>状态</p>
     * @param string $ErrorMessage <p>错误信息</p>
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
        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }
    }
}
