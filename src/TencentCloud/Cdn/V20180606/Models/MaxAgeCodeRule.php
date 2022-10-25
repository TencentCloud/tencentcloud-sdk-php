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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MaxAge 状态码相关规则配置
 *
 * @method string getAction() 获取处理动作
clear：清除 cache-control 头部
 * @method void setAction(string $Action) 设置处理动作
clear：清除 cache-control 头部
 * @method array getStatusCodes() 获取指定HTTP状态码生效，当前仅支持填写"400-599"
 * @method void setStatusCodes(array $StatusCodes) 设置指定HTTP状态码生效，当前仅支持填写"400-599"
 */
class MaxAgeCodeRule extends AbstractModel
{
    /**
     * @var string 处理动作
clear：清除 cache-control 头部
     */
    public $Action;

    /**
     * @var array 指定HTTP状态码生效，当前仅支持填写"400-599"
     */
    public $StatusCodes;

    /**
     * @param string $Action 处理动作
clear：清除 cache-control 头部
     * @param array $StatusCodes 指定HTTP状态码生效，当前仅支持填写"400-599"
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("StatusCodes",$param) and $param["StatusCodes"] !== null) {
            $this->StatusCodes = $param["StatusCodes"];
        }
    }
}
