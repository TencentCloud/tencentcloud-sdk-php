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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 微服务
 *
 * @method string getMicroserviceId() 获取<p>微服务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMicroserviceId(string $MicroserviceId) 设置<p>微服务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMicroserviceName() 获取<p>微服务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMicroserviceName(string $MicroserviceName) 设置<p>微服务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMicroserviceDesc() 获取<p>微服务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMicroserviceDesc(string $MicroserviceDesc) 设置<p>微服务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespaceId() 获取<p>命名空间ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceId(string $NamespaceId) 设置<p>命名空间ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRunInstanceCount() 获取<p>微服务的运行实例数目</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunInstanceCount(integer $RunInstanceCount) 设置<p>微服务的运行实例数目</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCriticalInstanceCount() 获取<p>微服务的离线实例数目</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCriticalInstanceCount(integer $CriticalInstanceCount) 设置<p>微服务的离线实例数目</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDeleteDisabled() 获取<p>是否禁用删除按钮，true：是；false：否。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeleteDisabled(boolean $DeleteDisabled) 设置<p>是否禁用删除按钮，true：是；false：否。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeleteDisabledReason() 获取<p>禁用删除原因。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeleteDisabledReason(string $DeleteDisabledReason) 设置<p>禁用删除原因。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class Microservice extends AbstractModel
{
    /**
     * @var string <p>微服务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MicroserviceId;

    /**
     * @var string <p>微服务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MicroserviceName;

    /**
     * @var string <p>微服务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MicroserviceDesc;

    /**
     * @var integer <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string <p>命名空间ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceId;

    /**
     * @var integer <p>微服务的运行实例数目</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunInstanceCount;

    /**
     * @var integer <p>微服务的离线实例数目</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CriticalInstanceCount;

    /**
     * @var boolean <p>是否禁用删除按钮，true：是；false：否。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeleteDisabled;

    /**
     * @var string <p>禁用删除原因。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeleteDisabledReason;

    /**
     * @param string $MicroserviceId <p>微服务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MicroserviceName <p>微服务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MicroserviceDesc <p>微服务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NamespaceId <p>命名空间ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunInstanceCount <p>微服务的运行实例数目</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CriticalInstanceCount <p>微服务的离线实例数目</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DeleteDisabled <p>是否禁用删除按钮，true：是；false：否。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeleteDisabledReason <p>禁用删除原因。</p>
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
        if (array_key_exists("MicroserviceId",$param) and $param["MicroserviceId"] !== null) {
            $this->MicroserviceId = $param["MicroserviceId"];
        }

        if (array_key_exists("MicroserviceName",$param) and $param["MicroserviceName"] !== null) {
            $this->MicroserviceName = $param["MicroserviceName"];
        }

        if (array_key_exists("MicroserviceDesc",$param) and $param["MicroserviceDesc"] !== null) {
            $this->MicroserviceDesc = $param["MicroserviceDesc"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("RunInstanceCount",$param) and $param["RunInstanceCount"] !== null) {
            $this->RunInstanceCount = $param["RunInstanceCount"];
        }

        if (array_key_exists("CriticalInstanceCount",$param) and $param["CriticalInstanceCount"] !== null) {
            $this->CriticalInstanceCount = $param["CriticalInstanceCount"];
        }

        if (array_key_exists("DeleteDisabled",$param) and $param["DeleteDisabled"] !== null) {
            $this->DeleteDisabled = $param["DeleteDisabled"];
        }

        if (array_key_exists("DeleteDisabledReason",$param) and $param["DeleteDisabledReason"] !== null) {
            $this->DeleteDisabledReason = $param["DeleteDisabledReason"];
        }
    }
}
