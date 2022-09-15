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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIndexList返回参数结构体
 *
 * @method array getIndexMetaFields() 获取索引元数据字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexMetaFields(array $IndexMetaFields) 设置索引元数据字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取查询总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置查询总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeIndexListResponse extends AbstractModel
{
    /**
     * @var array 索引元数据字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexMetaFields;

    /**
     * @var integer 查询总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $IndexMetaFields 索引元数据字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 查询总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("IndexMetaFields",$param) and $param["IndexMetaFields"] !== null) {
            $this->IndexMetaFields = [];
            foreach ($param["IndexMetaFields"] as $key => $value){
                $obj = new IndexMetaField();
                $obj->deserialize($value);
                array_push($this->IndexMetaFields, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
