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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 仅包含id的对象
 *
 * @method integer getId() 获取请求id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置请求id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccessKey() 获取key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessKey(string $AccessKey) 设置key
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProjectId() 获取id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(integer $ProjectId) 设置id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTranId() 获取事务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranId(string $TranId) 设置事务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTranStatus() 获取事务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranStatus(integer $TranStatus) 设置事务状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class IdDTO extends AbstractModel
{
    /**
     * @var integer 请求id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessKey;

    /**
     * @var integer id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

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
     * @param integer $Id 请求id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccessKey key
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProjectId id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TranId 事务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TranStatus 事务状态
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TranId",$param) and $param["TranId"] !== null) {
            $this->TranId = $param["TranId"];
        }

        if (array_key_exists("TranStatus",$param) and $param["TranStatus"] !== null) {
            $this->TranStatus = $param["TranStatus"];
        }
    }
}
