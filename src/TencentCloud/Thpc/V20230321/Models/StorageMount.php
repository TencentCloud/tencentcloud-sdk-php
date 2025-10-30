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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 存储目录挂载配置。
 *
 * @method string getSource() 获取挂载源
 * @method void setSource(string $Source) 设置挂载源
 * @method string getTarget() 获取目标挂载位置
 * @method void setTarget(string $Target) 设置目标挂载位置
 * @method string getStorageType() 获取挂载的存储类型，目前仅支持：local
 * @method void setStorageType(string $StorageType) 设置挂载的存储类型，目前仅支持：local
 */
class StorageMount extends AbstractModel
{
    /**
     * @var string 挂载源
     */
    public $Source;

    /**
     * @var string 目标挂载位置
     */
    public $Target;

    /**
     * @var string 挂载的存储类型，目前仅支持：local
     */
    public $StorageType;

    /**
     * @param string $Source 挂载源
     * @param string $Target 目标挂载位置
     * @param string $StorageType 挂载的存储类型，目前仅支持：local
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }
    }
}
