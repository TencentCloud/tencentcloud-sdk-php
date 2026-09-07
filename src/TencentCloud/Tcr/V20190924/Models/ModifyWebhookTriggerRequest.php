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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyWebhookTrigger请求参数结构体
 *
 * @method string getRegistryId() 获取<p>实例Id</p>
 * @method void setRegistryId(string $RegistryId) 设置<p>实例Id</p>
 * @method WebhookTrigger getTrigger() 获取<p>触发器参数</p>
 * @method void setTrigger(WebhookTrigger $Trigger) 设置<p>触发器参数</p>
 * @method string getNamespace() 获取<p>命名空间</p>
 * @method void setNamespace(string $Namespace) 设置<p>命名空间</p>
 */
class ModifyWebhookTriggerRequest extends AbstractModel
{
    /**
     * @var string <p>实例Id</p>
     */
    public $RegistryId;

    /**
     * @var WebhookTrigger <p>触发器参数</p>
     */
    public $Trigger;

    /**
     * @var string <p>命名空间</p>
     */
    public $Namespace;

    /**
     * @param string $RegistryId <p>实例Id</p>
     * @param WebhookTrigger $Trigger <p>触发器参数</p>
     * @param string $Namespace <p>命名空间</p>
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

        if (array_key_exists("Trigger",$param) and $param["Trigger"] !== null) {
            $this->Trigger = new WebhookTrigger();
            $this->Trigger->deserialize($param["Trigger"]);
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }
    }
}
