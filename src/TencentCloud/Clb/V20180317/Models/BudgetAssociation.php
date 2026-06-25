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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Budget关联资源信息
 *
 * @method string getBudgetId() 获取<p>Budget ID。</p>
 * @method void setBudgetId(string $BudgetId) 设置<p>Budget ID。</p>
 * @method string getCreatedTime() 获取<p>关联创建时间。</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>关联创建时间。</p>
 * @method string getKeyId() 获取<p>Key ID。仅当Type为Key时返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyId(string $KeyId) 设置<p>Key ID。仅当Type为Key时返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelRouterId() 获取<p>模型路由实例ID。</p><p>当Type为ModelRouter时表示关联资源本身；当Type为Key时表示Key所属实例。</p>
 * @method void setModelRouterId(string $ModelRouterId) 设置<p>模型路由实例ID。</p><p>当Type为ModelRouter时表示关联资源本身；当Type为Key时表示Key所属实例。</p>
 * @method string getType() 获取<p>关联资源类型。</p><p>枚举值：</p><ul><li>ModelRouter：模型路由实例</li><li>Key：模型路由Key</li></ul>
 * @method void setType(string $Type) 设置<p>关联资源类型。</p><p>枚举值：</p><ul><li>ModelRouter：模型路由实例</li><li>Key：模型路由Key</li></ul>
 * @method string getStatus() 获取<p>关联关系的状态</p><p>枚举值：</p><ul><li>Active： 已生效</li><li>Configuring： 配置中</li><li>ConfigureFailed： 配置失败</li></ul>
 * @method void setStatus(string $Status) 设置<p>关联关系的状态</p><p>枚举值：</p><ul><li>Active： 已生效</li><li>Configuring： 配置中</li><li>ConfigureFailed： 配置失败</li></ul>
 */
class BudgetAssociation extends AbstractModel
{
    /**
     * @var string <p>Budget ID。</p>
     */
    public $BudgetId;

    /**
     * @var string <p>关联创建时间。</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>Key ID。仅当Type为Key时返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyId;

    /**
     * @var string <p>模型路由实例ID。</p><p>当Type为ModelRouter时表示关联资源本身；当Type为Key时表示Key所属实例。</p>
     */
    public $ModelRouterId;

    /**
     * @var string <p>关联资源类型。</p><p>枚举值：</p><ul><li>ModelRouter：模型路由实例</li><li>Key：模型路由Key</li></ul>
     */
    public $Type;

    /**
     * @var string <p>关联关系的状态</p><p>枚举值：</p><ul><li>Active： 已生效</li><li>Configuring： 配置中</li><li>ConfigureFailed： 配置失败</li></ul>
     */
    public $Status;

    /**
     * @param string $BudgetId <p>Budget ID。</p>
     * @param string $CreatedTime <p>关联创建时间。</p>
     * @param string $KeyId <p>Key ID。仅当Type为Key时返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelRouterId <p>模型路由实例ID。</p><p>当Type为ModelRouter时表示关联资源本身；当Type为Key时表示Key所属实例。</p>
     * @param string $Type <p>关联资源类型。</p><p>枚举值：</p><ul><li>ModelRouter：模型路由实例</li><li>Key：模型路由Key</li></ul>
     * @param string $Status <p>关联关系的状态</p><p>枚举值：</p><ul><li>Active： 已生效</li><li>Configuring： 配置中</li><li>ConfigureFailed： 配置失败</li></ul>
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
        if (array_key_exists("BudgetId",$param) and $param["BudgetId"] !== null) {
            $this->BudgetId = $param["BudgetId"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("ModelRouterId",$param) and $param["ModelRouterId"] !== null) {
            $this->ModelRouterId = $param["ModelRouterId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
