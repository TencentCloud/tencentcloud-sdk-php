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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAccountInAccountGroup返回参数结构体
 *
 * @method array getAccountList() 获取查询返回的相关账号列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountList(array $AccountList) 设置查询返回的相关账号列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取返回查询账号的总数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置返回查询账号的总数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountGroupId() 获取账号组ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountGroupId(string $AccountGroupId) 设置账号组ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ListAccountInAccountGroupResponse extends AbstractModel
{
    /**
     * @var array 查询返回的相关账号列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountList;

    /**
     * @var integer 返回查询账号的总数量。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var string 账号组ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountGroupId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $AccountList 查询返回的相关账号列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 返回查询账号的总数量。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountGroupId 账号组ID。
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
        if (array_key_exists("AccountList",$param) and $param["AccountList"] !== null) {
            $this->AccountList = [];
            foreach ($param["AccountList"] as $key => $value){
                $obj = new AppAccountInfo();
                $obj->deserialize($value);
                array_push($this->AccountList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("AccountGroupId",$param) and $param["AccountGroupId"] !== null) {
            $this->AccountGroupId = $param["AccountGroupId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
