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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务参数
 *
 * @method string getCosPath() 获取下载地址,需要通过cos桶临时密钥去下载
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosPath(string $CosPath) 设置下载地址,需要通过cos桶临时密钥去下载
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskParams extends AbstractModel
{
    /**
     * @var string 下载地址,需要通过cos桶临时密钥去下载
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosPath;

    /**
     * @param string $CosPath 下载地址,需要通过cos桶临时密钥去下载
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("CosPath",$param) and $param["CosPath"] !== null) {
            $this->CosPath = $param["CosPath"];
        }
    }
}
