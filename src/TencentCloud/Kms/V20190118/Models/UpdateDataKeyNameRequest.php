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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateDataKeyName请求参数结构体
 *
 * @method string getDataKeyId() 获取数据密钥的唯一标志符
 * @method void setDataKeyId(string $DataKeyId) 设置数据密钥的唯一标志符
 * @method string getDataKeyName() 获取数据密钥的名称
 * @method void setDataKeyName(string $DataKeyName) 设置数据密钥的名称
 */
class UpdateDataKeyNameRequest extends AbstractModel
{
    /**
     * @var string 数据密钥的唯一标志符
     */
    public $DataKeyId;

    /**
     * @var string 数据密钥的名称
     */
    public $DataKeyName;

    /**
     * @param string $DataKeyId 数据密钥的唯一标志符
     * @param string $DataKeyName 数据密钥的名称
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
        if (array_key_exists("DataKeyId",$param) and $param["DataKeyId"] !== null) {
            $this->DataKeyId = $param["DataKeyId"];
        }

        if (array_key_exists("DataKeyName",$param) and $param["DataKeyName"] !== null) {
            $this->DataKeyName = $param["DataKeyName"];
        }
    }
}
