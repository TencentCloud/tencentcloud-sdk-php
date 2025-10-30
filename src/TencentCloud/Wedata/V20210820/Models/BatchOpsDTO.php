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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量操作结果，带失败原因
 *
 * @method integer getTotalCount() 获取总数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置总数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSuccessCount() 获取成功数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessCount(integer $SuccessCount) 设置成功数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFailCount() 获取失败数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailCount(integer $FailCount) 设置失败数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFailMessageList() 获取失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailMessageList(array $FailMessageList) 设置失败原因
注意：此字段可能返回 null，表示取不到有效值。
 */
class BatchOpsDTO extends AbstractModel
{
    /**
     * @var integer 总数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var integer 成功数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessCount;

    /**
     * @var integer 失败数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailCount;

    /**
     * @var array 失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailMessageList;

    /**
     * @param integer $TotalCount 总数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SuccessCount 成功数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FailCount 失败数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FailMessageList 失败原因
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("FailCount",$param) and $param["FailCount"] !== null) {
            $this->FailCount = $param["FailCount"];
        }

        if (array_key_exists("FailMessageList",$param) and $param["FailMessageList"] !== null) {
            $this->FailMessageList = [];
            foreach ($param["FailMessageList"] as $key => $value){
                $obj = new FailMessage();
                $obj->deserialize($value);
                array_push($this->FailMessageList, $obj);
            }
        }
    }
}
