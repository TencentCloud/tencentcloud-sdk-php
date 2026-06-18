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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 同步标签数据出参
 *
 * @method string getTranId() 获取事务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranId(string $TranId) 设置事务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTranStatus() 获取事务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranStatus(integer $TranStatus) 设置事务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getId() 获取标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置标签信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class EditTagVO extends AbstractModel
{
    /**
     * @var string 事务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranId;

    /**
     * @var integer 事务状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranStatus;

    /**
     * @var integer 标签信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @param string $TranId 事务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TranStatus 事务状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Id 标签信息
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
        if (array_key_exists("TranId",$param) and $param["TranId"] !== null) {
            $this->TranId = $param["TranId"];
        }

        if (array_key_exists("TranStatus",$param) and $param["TranStatus"] !== null) {
            $this->TranStatus = $param["TranStatus"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
