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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cos的路径信息
 *
 * @method string getBucket() 获取存储桶
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucket(string $Bucket) 设置存储桶
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取所在地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置所在地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPaths() 获取路径列表，目前只支持单个
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaths(array $Paths) 设置路径列表，目前只支持单个
注意：此字段可能返回 null，表示取不到有效值。
 */
class CosPathInfo extends AbstractModel
{
    /**
     * @var string 存储桶
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Bucket;

    /**
     * @var string 所在地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var array 路径列表，目前只支持单个
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Paths;

    /**
     * @param string $Bucket 存储桶
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 所在地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Paths 路径列表，目前只支持单个
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Paths",$param) and $param["Paths"] !== null) {
            $this->Paths = $param["Paths"];
        }
    }
}
