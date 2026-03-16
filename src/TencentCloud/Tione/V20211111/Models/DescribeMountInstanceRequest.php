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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMountInstance请求参数结构体
 *
 * @method string getType() 获取数据源类型英文名
 * @method void setType(string $Type) 设置数据源类型英文名
 * @method string getStorageId() 获取存储实例ID
 * @method void setStorageId(string $StorageId) 设置存储实例ID
 */
class DescribeMountInstanceRequest extends AbstractModel
{
    /**
     * @var string 数据源类型英文名
     */
    public $Type;

    /**
     * @var string 存储实例ID
     */
    public $StorageId;

    /**
     * @param string $Type 数据源类型英文名
     * @param string $StorageId 存储实例ID
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("StorageId",$param) and $param["StorageId"] !== null) {
            $this->StorageId = $param["StorageId"];
        }
    }
}
