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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型服务模型名称路由策略
 *
 * @method string getModelServiceId() 获取<p>模型服务id</p>
 * @method void setModelServiceId(string $ModelServiceId) 设置<p>模型服务id</p>
 * @method string getMatchModelName() 获取<p>匹配模型服务</p>
 * @method void setMatchModelName(string $MatchModelName) 设置<p>匹配模型服务</p>
 * @method string getRewriteModelName() 获取<p>重写模型</p>
 * @method void setRewriteModelName(string $RewriteModelName) 设置<p>重写模型</p>
 */
class CloudNativeAPIGatewayLLMModelServiceRouteModelNameStrategy extends AbstractModel
{
    /**
     * @var string <p>模型服务id</p>
     */
    public $ModelServiceId;

    /**
     * @var string <p>匹配模型服务</p>
     */
    public $MatchModelName;

    /**
     * @var string <p>重写模型</p>
     */
    public $RewriteModelName;

    /**
     * @param string $ModelServiceId <p>模型服务id</p>
     * @param string $MatchModelName <p>匹配模型服务</p>
     * @param string $RewriteModelName <p>重写模型</p>
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
        if (array_key_exists("ModelServiceId",$param) and $param["ModelServiceId"] !== null) {
            $this->ModelServiceId = $param["ModelServiceId"];
        }

        if (array_key_exists("MatchModelName",$param) and $param["MatchModelName"] !== null) {
            $this->MatchModelName = $param["MatchModelName"];
        }

        if (array_key_exists("RewriteModelName",$param) and $param["RewriteModelName"] !== null) {
            $this->RewriteModelName = $param["RewriteModelName"];
        }
    }
}
