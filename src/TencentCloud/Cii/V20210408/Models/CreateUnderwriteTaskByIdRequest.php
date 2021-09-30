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
namespace TencentCloud\Cii\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUnderwriteTaskById请求参数结构体
 *
 * @method array getMainTaskIds() 获取主任务ID数组，
 * @method void setMainTaskIds(array $MainTaskIds) 设置主任务ID数组，
 * @method string getCallbackUrl() 获取回调地址，可不传（提供轮询机制）。
 * @method void setCallbackUrl(string $CallbackUrl) 设置回调地址，可不传（提供轮询机制）。
 */
class CreateUnderwriteTaskByIdRequest extends AbstractModel
{
    /**
     * @var array 主任务ID数组，
     */
    public $MainTaskIds;

    /**
     * @var string 回调地址，可不传（提供轮询机制）。
     */
    public $CallbackUrl;

    /**
     * @param array $MainTaskIds 主任务ID数组，
     * @param string $CallbackUrl 回调地址，可不传（提供轮询机制）。
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
        if (array_key_exists("MainTaskIds",$param) and $param["MainTaskIds"] !== null) {
            $this->MainTaskIds = $param["MainTaskIds"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }
    }
}
