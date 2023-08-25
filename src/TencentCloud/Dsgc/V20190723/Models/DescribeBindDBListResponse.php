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
 * DescribeBindDBList返回参数结构体
 *
 * @method array getBindDBList() 获取绑定的DB列表（已废弃）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBindDBList(array $BindDBList) 设置绑定的DB列表（已废弃）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBindList() 获取绑定信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBindList(array $BindList) 设置绑定信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBindDBListResponse extends AbstractModel
{
    /**
     * @var array 绑定的DB列表（已废弃）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BindDBList;

    /**
     * @var array 绑定信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BindList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $BindDBList 绑定的DB列表（已废弃）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BindList 绑定信息
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
        if (array_key_exists("BindDBList",$param) and $param["BindDBList"] !== null) {
            $this->BindDBList = $param["BindDBList"];
        }

        if (array_key_exists("BindList",$param) and $param["BindList"] !== null) {
            $this->BindList = [];
            foreach ($param["BindList"] as $key => $value){
                $obj = new DBInstanceInfo();
                $obj->deserialize($value);
                array_push($this->BindList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
