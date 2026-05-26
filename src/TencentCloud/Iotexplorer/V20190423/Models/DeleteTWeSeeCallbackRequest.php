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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteTWeSeeCallback请求参数结构体
 *
 * @method string getCallbackId() 获取回调目标 ID，格式为 `callback-` + 8 位小写字母数字
 * @method void setCallbackId(string $CallbackId) 设置回调目标 ID，格式为 `callback-` + 8 位小写字母数字
 */
class DeleteTWeSeeCallbackRequest extends AbstractModel
{
    /**
     * @var string 回调目标 ID，格式为 `callback-` + 8 位小写字母数字
     */
    public $CallbackId;

    /**
     * @param string $CallbackId 回调目标 ID，格式为 `callback-` + 8 位小写字母数字
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
        if (array_key_exists("CallbackId",$param) and $param["CallbackId"] !== null) {
            $this->CallbackId = $param["CallbackId"];
        }
    }
}
