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
 * 批量执行结果
 *
 * @method integer getSuccess() 获取成功数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccess(integer $Success) 设置成功数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFailed() 获取失败数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailed(integer $Failed) 设置失败数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取总计
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置总计
注意：此字段可能返回 null，表示取不到有效值。
 */
class BatchResultDs extends AbstractModel
{
    /**
     * @var integer 成功数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Success;

    /**
     * @var integer 失败数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Failed;

    /**
     * @var integer 总计
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @param integer $Success 成功数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Failed 失败数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total 总计
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
        if (array_key_exists("Success",$param) and $param["Success"] !== null) {
            $this->Success = $param["Success"];
        }

        if (array_key_exists("Failed",$param) and $param["Failed"] !== null) {
            $this->Failed = $param["Failed"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
    }
}
