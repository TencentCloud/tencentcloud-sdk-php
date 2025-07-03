<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * DeleteNativeGatewayServiceSource请求参数结构体
 *
 * @method string getGatewayID() 获取网关实例 ID
 * @method void setGatewayID(string $GatewayID) 设置网关实例 ID
 * @method string getSourceID() 获取服务来源实例 ID
 * @method void setSourceID(string $SourceID) 设置服务来源实例 ID
 */
class DeleteNativeGatewayServiceSourceRequest extends AbstractModel
{
    /**
     * @var string 网关实例 ID
     */
    public $GatewayID;

    /**
     * @var string 服务来源实例 ID
     */
    public $SourceID;

    /**
     * @param string $GatewayID 网关实例 ID
     * @param string $SourceID 服务来源实例 ID
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
        if (array_key_exists("GatewayID",$param) and $param["GatewayID"] !== null) {
            $this->GatewayID = $param["GatewayID"];
        }

        if (array_key_exists("SourceID",$param) and $param["SourceID"] !== null) {
            $this->SourceID = $param["SourceID"];
        }
    }
}
