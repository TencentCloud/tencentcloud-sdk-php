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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取数据目录名称列表响应
 *
 * @method array getItems() 获取数据目录名列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItems(array $Items) 设置数据目录名列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNextPageToken() 获取下页分页token信息(base64编码，包含offset、snapshotId等)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNextPageToken(string $NextPageToken) 设置下页分页token信息(base64编码，包含offset、snapshotId等)
注意：此字段可能返回 null，表示取不到有效值。
 */
class ListCatalogNamesRsp extends AbstractModel
{
    /**
     * @var array 数据目录名列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Items;

    /**
     * @var string 下页分页token信息(base64编码，包含offset、snapshotId等)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NextPageToken;

    /**
     * @param array $Items 数据目录名列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NextPageToken 下页分页token信息(base64编码，包含offset、snapshotId等)
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
        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new NameIdentifier();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("NextPageToken",$param) and $param["NextPageToken"] !== null) {
            $this->NextPageToken = $param["NextPageToken"];
        }
    }
}
