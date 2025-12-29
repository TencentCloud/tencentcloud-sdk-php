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
 * 文件收集信息
 *
 * @method integer getMaxFileCount() 获取最大上传文件的数量
 * @method void setMaxFileCount(integer $MaxFileCount) 设置最大上传文件的数量
 * @method array getSupportedFileTypes() 获取支持的上传文件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportedFileTypes(array $SupportedFileTypes) 设置支持的上传文件类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class FileCollection extends AbstractModel
{
    /**
     * @var integer 最大上传文件的数量
     */
    public $MaxFileCount;

    /**
     * @var array 支持的上传文件类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportedFileTypes;

    /**
     * @param integer $MaxFileCount 最大上传文件的数量
     * @param array $SupportedFileTypes 支持的上传文件类型
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
        if (array_key_exists("MaxFileCount",$param) and $param["MaxFileCount"] !== null) {
            $this->MaxFileCount = $param["MaxFileCount"];
        }

        if (array_key_exists("SupportedFileTypes",$param) and $param["SupportedFileTypes"] !== null) {
            $this->SupportedFileTypes = $param["SupportedFileTypes"];
        }
    }
}
