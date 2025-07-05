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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BuildDataFlowAuthToken请求参数结构体
 *
 * @method string getResourceId() 获取资源ID
 * @method void setResourceId(string $ResourceId) 设置资源ID
 * @method string getResourceRegion() 获取资源地域
 * @method void setResourceRegion(string $ResourceRegion) 设置资源地域
 * @method string getResourceAccount() 获取资源用户名
 * @method void setResourceAccount(string $ResourceAccount) 设置资源用户名
 */
class BuildDataFlowAuthTokenRequest extends AbstractModel
{
    /**
     * @var string 资源ID
     */
    public $ResourceId;

    /**
     * @var string 资源地域
     */
    public $ResourceRegion;

    /**
     * @var string 资源用户名
     */
    public $ResourceAccount;

    /**
     * @param string $ResourceId 资源ID
     * @param string $ResourceRegion 资源地域
     * @param string $ResourceAccount 资源用户名
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("ResourceAccount",$param) and $param["ResourceAccount"] !== null) {
            $this->ResourceAccount = $param["ResourceAccount"];
        }
    }
}
