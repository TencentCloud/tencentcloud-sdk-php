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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLocation请求参数结构体
 *
 * @method CosEventSubscription getFileEventSubscription() 获取COS 文件事件订阅配置，可选；不设置时不订阅（仅 COS 类型 Location 生效）。设置时先订阅 COS 桶事件投递到 CKafka 再创建 Location，创建失败自动回滚退订
 * @method void setFileEventSubscription(CosEventSubscription $FileEventSubscription) 设置COS 文件事件订阅配置，可选；不设置时不订阅（仅 COS 类型 Location 生效）。设置时先订阅 COS 桶事件投递到 CKafka 再创建 Location，创建失败自动回滚退订
 */
class CreateLocationRequest extends AbstractModel
{
    /**
     * @var CosEventSubscription COS 文件事件订阅配置，可选；不设置时不订阅（仅 COS 类型 Location 生效）。设置时先订阅 COS 桶事件投递到 CKafka 再创建 Location，创建失败自动回滚退订
     */
    public $FileEventSubscription;

    /**
     * @param CosEventSubscription $FileEventSubscription COS 文件事件订阅配置，可选；不设置时不订阅（仅 COS 类型 Location 生效）。设置时先订阅 COS 桶事件投递到 CKafka 再创建 Location，创建失败自动回滚退订
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
        if (array_key_exists("FileEventSubscription",$param) and $param["FileEventSubscription"] !== null) {
            $this->FileEventSubscription = new CosEventSubscription();
            $this->FileEventSubscription->deserialize($param["FileEventSubscription"]);
        }
    }
}
