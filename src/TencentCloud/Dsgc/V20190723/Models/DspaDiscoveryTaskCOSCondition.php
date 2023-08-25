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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述对象存储类敏感识别扫描人元数据条件。
 *
 * @method string getBucket() 获取数据桶名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucket(string $Bucket) 设置数据桶名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFileTypes() 获取文件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileTypes(array $FileTypes) 设置文件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFileSizeLimit() 获取文件大小上限，单位为KB，如1000, 目前单个文件最大只支持1GB（1048576KB）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileSizeLimit(integer $FileSizeLimit) 设置文件大小上限，单位为KB，如1000, 目前单个文件最大只支持1GB（1048576KB）
注意：此字段可能返回 null，表示取不到有效值。
 */
class DspaDiscoveryTaskCOSCondition extends AbstractModel
{
    /**
     * @var string 数据桶名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Bucket;

    /**
     * @var array 文件类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileTypes;

    /**
     * @var integer 文件大小上限，单位为KB，如1000, 目前单个文件最大只支持1GB（1048576KB）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileSizeLimit;

    /**
     * @param string $Bucket 数据桶名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FileTypes 文件类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FileSizeLimit 文件大小上限，单位为KB，如1000, 目前单个文件最大只支持1GB（1048576KB）
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
        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("FileTypes",$param) and $param["FileTypes"] !== null) {
            $this->FileTypes = $param["FileTypes"];
        }

        if (array_key_exists("FileSizeLimit",$param) and $param["FileSizeLimit"] !== null) {
            $this->FileSizeLimit = $param["FileSizeLimit"];
        }
    }
}
