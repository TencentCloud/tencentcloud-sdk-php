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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListUser返回参数结构体
 *
 * @method integer getTotal() 获取总条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置总条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method Pageable getPageable() 获取分页对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageable(Pageable $Pageable) 设置分页对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getContent() 获取用户列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(array $Content) 设置用户列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ListUserResponse extends AbstractModel
{
    /**
     * @var integer 总条数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var Pageable 分页对象
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Pageable;

    /**
     * @var array 用户列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Total 总条数
注意：此字段可能返回 null，表示取不到有效值。
     * @param Pageable $Pageable 分页对象
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Content 用户列表
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Pageable",$param) and $param["Pageable"] !== null) {
            $this->Pageable = new Pageable();
            $this->Pageable->deserialize($param["Pageable"]);
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = [];
            foreach ($param["Content"] as $key => $value){
                $obj = new User();
                $obj->deserialize($value);
                array_push($this->Content, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
