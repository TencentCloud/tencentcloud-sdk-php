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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateClusterGroup返回参数结构体
 *
 * @method string getId() 获取<p>集群组 ID</p>
 * @method void setId(string $Id) 设置<p>集群组 ID</p>
 * @method string getName() 获取<p>集群组名称</p>
 * @method void setName(string $Name) 设置<p>集群组名称</p>
 * @method string getDescription() 获取<p>集群组描述</p>
 * @method void setDescription(string $Description) 设置<p>集群组描述</p>
 * @method string getConfig() 获取<p>集群组配置</p>
 * @method void setConfig(string $Config) 设置<p>集群组配置</p>
 * @method integer getAppId() 获取<p>应用 ID（多租户）</p>
 * @method void setAppId(integer $AppId) 设置<p>应用 ID（多租户）</p>
 * @method string getUin() 获取<p>创建者主账号 UIN</p>
 * @method void setUin(string $Uin) 设置<p>创建者主账号 UIN</p>
 * @method string getSubAccountUin() 获取<p>创建者子账号 UIN</p>
 * @method void setSubAccountUin(string $SubAccountUin) 设置<p>创建者子账号 UIN</p>
 * @method integer getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间</p>
 * @method integer getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间</p>
 * @method boolean getDeleted() 获取<p>是否已软删除</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeleted(boolean $Deleted) 设置<p>是否已软删除</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDeleteTime() 获取<p>删除时间（软删时写入，活跃记录为 null）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeleteTime(integer $DeleteTime) 设置<p>删除时间（软删时写入，活跃记录为 null）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class UpdateClusterGroupResponse extends AbstractModel
{
    /**
     * @var string <p>集群组 ID</p>
     */
    public $Id;

    /**
     * @var string <p>集群组名称</p>
     */
    public $Name;

    /**
     * @var string <p>集群组描述</p>
     */
    public $Description;

    /**
     * @var string <p>集群组配置</p>
     */
    public $Config;

    /**
     * @var integer <p>应用 ID（多租户）</p>
     */
    public $AppId;

    /**
     * @var string <p>创建者主账号 UIN</p>
     */
    public $Uin;

    /**
     * @var string <p>创建者子账号 UIN</p>
     */
    public $SubAccountUin;

    /**
     * @var integer <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var boolean <p>是否已软删除</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Deleted;

    /**
     * @var integer <p>删除时间（软删时写入，活跃记录为 null）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeleteTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Id <p>集群组 ID</p>
     * @param string $Name <p>集群组名称</p>
     * @param string $Description <p>集群组描述</p>
     * @param string $Config <p>集群组配置</p>
     * @param integer $AppId <p>应用 ID（多租户）</p>
     * @param string $Uin <p>创建者主账号 UIN</p>
     * @param string $SubAccountUin <p>创建者子账号 UIN</p>
     * @param integer $CreateTime <p>创建时间</p>
     * @param integer $UpdateTime <p>更新时间</p>
     * @param boolean $Deleted <p>是否已软删除</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DeleteTime <p>删除时间（软删时写入，活跃记录为 null）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Deleted",$param) and $param["Deleted"] !== null) {
            $this->Deleted = $param["Deleted"];
        }

        if (array_key_exists("DeleteTime",$param) and $param["DeleteTime"] !== null) {
            $this->DeleteTime = $param["DeleteTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
