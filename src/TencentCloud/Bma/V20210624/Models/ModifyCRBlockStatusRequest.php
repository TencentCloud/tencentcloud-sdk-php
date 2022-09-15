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
namespace TencentCloud\Bma\V20210624\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCRBlockStatus请求参数结构体
 *
 * @method integer getTortId() 获取侵权ID
 * @method void setTortId(integer $TortId) 设置侵权ID
 * @method string getBlockUrl() 获取拦截结果回调地址
 * @method void setBlockUrl(string $BlockUrl) 设置拦截结果回调地址
 */
class ModifyCRBlockStatusRequest extends AbstractModel
{
    /**
     * @var integer 侵权ID
     */
    public $TortId;

    /**
     * @var string 拦截结果回调地址
     */
    public $BlockUrl;

    /**
     * @param integer $TortId 侵权ID
     * @param string $BlockUrl 拦截结果回调地址
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
        if (array_key_exists("TortId",$param) and $param["TortId"] !== null) {
            $this->TortId = $param["TortId"];
        }

        if (array_key_exists("BlockUrl",$param) and $param["BlockUrl"] !== null) {
            $this->BlockUrl = $param["BlockUrl"];
        }
    }
}
