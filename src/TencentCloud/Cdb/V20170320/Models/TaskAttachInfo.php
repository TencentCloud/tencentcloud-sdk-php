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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务列表中的部分任务支持特定的附加信息
 *
 * @method string getAttachKey() 获取升级任务：
”FastUpgradeStatus“：表示升级类型。1-原地升级；0-普通升级。
 * @method void setAttachKey(string $AttachKey) 设置升级任务：
”FastUpgradeStatus“：表示升级类型。1-原地升级；0-普通升级。
 * @method string getAttachValue() 获取升级任务：
”FastUpgradeStatus“：表示升级类型。1-原地升级；0-普通升级。
 * @method void setAttachValue(string $AttachValue) 设置升级任务：
”FastUpgradeStatus“：表示升级类型。1-原地升级；0-普通升级。
 */
class TaskAttachInfo extends AbstractModel
{
    /**
     * @var string 升级任务：
”FastUpgradeStatus“：表示升级类型。1-原地升级；0-普通升级。
     */
    public $AttachKey;

    /**
     * @var string 升级任务：
”FastUpgradeStatus“：表示升级类型。1-原地升级；0-普通升级。
     */
    public $AttachValue;

    /**
     * @param string $AttachKey 升级任务：
”FastUpgradeStatus“：表示升级类型。1-原地升级；0-普通升级。
     * @param string $AttachValue 升级任务：
”FastUpgradeStatus“：表示升级类型。1-原地升级；0-普通升级。
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
        if (array_key_exists("AttachKey",$param) and $param["AttachKey"] !== null) {
            $this->AttachKey = $param["AttachKey"];
        }

        if (array_key_exists("AttachValue",$param) and $param["AttachValue"] !== null) {
            $this->AttachValue = $param["AttachValue"];
        }
    }
}
