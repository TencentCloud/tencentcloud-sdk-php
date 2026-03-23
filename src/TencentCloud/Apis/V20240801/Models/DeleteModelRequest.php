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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteModel请求参数结构体
 *
 * @method string getInstanceID() 获取实例
 * @method void setInstanceID(string $InstanceID) 设置实例
 * @method array getIDs() 获取模型ID数组
 * @method void setIDs(array $IDs) 设置模型ID数组
 */
class DeleteModelRequest extends AbstractModel
{
    /**
     * @var string 实例
     */
    public $InstanceID;

    /**
     * @var array 模型ID数组
     */
    public $IDs;

    /**
     * @param string $InstanceID 实例
     * @param array $IDs 模型ID数组
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("IDs",$param) and $param["IDs"] !== null) {
            $this->IDs = $param["IDs"];
        }
    }
}
