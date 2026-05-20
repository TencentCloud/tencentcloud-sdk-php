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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型服务模型名称路由策略
 *
 * @method string getModelServiceId() 获取模型服务id
 * @method void setModelServiceId(string $ModelServiceId) 设置模型服务id
 * @method string getMatchModelName() 获取匹配模型服务
 * @method void setMatchModelName(string $MatchModelName) 设置匹配模型服务
 * @method string getRewriteModelName() 获取重写模型
 * @method void setRewriteModelName(string $RewriteModelName) 设置重写模型
 */
class CloudNativeAPIGatewayLLMModelServiceRouteModelNameStrategy extends AbstractModel
{
    /**
     * @var string 模型服务id
     */
    public $ModelServiceId;

    /**
     * @var string 匹配模型服务
     */
    public $MatchModelName;

    /**
     * @var string 重写模型
     */
    public $RewriteModelName;

    /**
     * @param string $ModelServiceId 模型服务id
     * @param string $MatchModelName 匹配模型服务
     * @param string $RewriteModelName 重写模型
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
