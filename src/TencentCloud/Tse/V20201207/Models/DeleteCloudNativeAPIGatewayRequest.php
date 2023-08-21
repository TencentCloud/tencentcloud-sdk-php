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
 * DeleteCloudNativeAPIGateway请求参数结构体
 *
 * @method string getGatewayId() 获取云原生API网关实例ID。
 * @method void setGatewayId(string $GatewayId) 设置云原生API网关实例ID。
 * @method boolean getDeleteClsTopic() 获取是否删除实例关联的 CLS 日志主题。
 * @method void setDeleteClsTopic(boolean $DeleteClsTopic) 设置是否删除实例关联的 CLS 日志主题。
 */
class DeleteCloudNativeAPIGatewayRequest extends AbstractModel
{
    /**
     * @var string 云原生API网关实例ID。
     */
    public $GatewayId;

    /**
     * @var boolean 是否删除实例关联的 CLS 日志主题。
     */
    public $DeleteClsTopic;

    /**
     * @param string $GatewayId 云原生API网关实例ID。
     * @param boolean $DeleteClsTopic 是否删除实例关联的 CLS 日志主题。
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("DeleteClsTopic",$param) and $param["DeleteClsTopic"] !== null) {
            $this->DeleteClsTopic = $param["DeleteClsTopic"];
        }
    }
}
