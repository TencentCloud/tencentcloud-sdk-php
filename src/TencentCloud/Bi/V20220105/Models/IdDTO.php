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
 * 仅包含id的对象
 *
 * @method integer getId() 获取<p>请求id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置<p>请求id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccessKey() 获取<p>key</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessKey(string $AccessKey) 设置<p>key</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProjectId() 获取<p>id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(integer $ProjectId) 设置<p>id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTranId() 获取<p>事务id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranId(string $TranId) 设置<p>事务id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTranStatus() 获取<p>事务状态</p><p>枚举值：</p><ul><li>1： 处理中</li><li>2： 处理成功</li><li>3： 处理失败</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranStatus(integer $TranStatus) 设置<p>事务状态</p><p>枚举值：</p><ul><li>1： 处理中</li><li>2： 处理成功</li><li>3： 处理失败</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 */
class IdDTO extends AbstractModel
{
    /**
     * @var integer <p>请求id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string <p>key</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessKey;

    /**
     * @var integer <p>id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string <p>事务id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranId;

    /**
     * @var integer <p>事务状态</p><p>枚举值：</p><ul><li>1： 处理中</li><li>2： 处理成功</li><li>3： 处理失败</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranStatus;

    /**
     * @param integer $Id <p>请求id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccessKey <p>key</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProjectId <p>id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TranId <p>事务id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TranStatus <p>事务状态</p><p>枚举值：</p><ul><li>1： 处理中</li><li>2： 处理成功</li><li>3： 处理失败</li></ul>
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
