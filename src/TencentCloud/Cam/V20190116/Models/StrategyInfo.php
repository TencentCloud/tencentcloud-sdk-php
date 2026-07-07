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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 策略信息
 *
 * @method integer getPolicyId() 获取<p>策略ID。</p>
 * @method void setPolicyId(integer $PolicyId) 设置<p>策略ID。</p>
 * @method string getPolicyName() 获取<p>策略名称。</p>
 * @method void setPolicyName(string $PolicyName) 设置<p>策略名称。</p>
 * @method string getAddTime() 获取<p>策略创建时间。</p>
 * @method void setAddTime(string $AddTime) 设置<p>策略创建时间。</p>
 * @method integer getType() 获取<p>策略类型。1 表示自定义策略，2 表示预设策略。</p>
 * @method void setType(integer $Type) 设置<p>策略类型。1 表示自定义策略，2 表示预设策略。</p>
 * @method string getDescription() 获取<p>策略描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>策略描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateMode() 获取<p>创建来源，1 通过控制台创建, 2 通过策略语法创建。</p>
 * @method void setCreateMode(integer $CreateMode) 设置<p>创建来源，1 通过控制台创建, 2 通过策略语法创建。</p>
 * @method integer getAttachments() 获取<p>关联的用户数</p>
 * @method void setAttachments(integer $Attachments) 设置<p>关联的用户数</p>
 * @method string getServiceType() 获取<p>策略关联的产品</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceType(string $ServiceType) 设置<p>策略关联的产品</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsAttached() 获取<p>当需要查询标记实体是否已经关联策略时不为null。0表示未关联策略，1表示已关联策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAttached(integer $IsAttached) 设置<p>当需要查询标记实体是否已经关联策略时不为null。0表示未关联策略，1表示已关联策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDeactived() 获取<p>是否已下线</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeactived(integer $Deactived) 设置<p>是否已下线</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDeactivedDetail() 获取<p>已下线产品列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeactivedDetail(array $DeactivedDetail) 设置<p>已下线产品列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsServiceLinkedPolicy() 获取<p>是否是服务相关角色策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsServiceLinkedPolicy(integer $IsServiceLinkedPolicy) 设置<p>是否是服务相关角色策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAttachEntityCount() 获取<p>关联策略实体数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttachEntityCount(integer $AttachEntityCount) 设置<p>关联策略实体数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAttachEntityBoundaryCount() 获取<p>关联权限边界实体数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttachEntityBoundaryCount(integer $AttachEntityBoundaryCount) 设置<p>关联权限边界实体数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>最后编辑时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置<p>最后编辑时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取<p>标签列表</p>
 * @method void setTags(array $Tags) 设置<p>标签列表</p>
 * @method string getPermissionLevel() 获取<p>权限级别</p><p>枚举值：</p><ul><li>Global： 全局权限</li><li>Finance： 财务权限</li><li>CloudProduct： 云产品权限</li></ul>
 * @method void setPermissionLevel(string $PermissionLevel) 设置<p>权限级别</p><p>枚举值：</p><ul><li>Global： 全局权限</li><li>Finance： 财务权限</li><li>CloudProduct： 云产品权限</li></ul>
 */
class StrategyInfo extends AbstractModel
{
    /**
     * @var integer <p>策略ID。</p>
     */
    public $PolicyId;

    /**
     * @var string <p>策略名称。</p>
     */
    public $PolicyName;

    /**
     * @var string <p>策略创建时间。</p>
     */
    public $AddTime;

    /**
     * @var integer <p>策略类型。1 表示自定义策略，2 表示预设策略。</p>
     */
    public $Type;

    /**
     * @var string <p>策略描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer <p>创建来源，1 通过控制台创建, 2 通过策略语法创建。</p>
     */
    public $CreateMode;

    /**
     * @var integer <p>关联的用户数</p>
     */
    public $Attachments;

    /**
     * @var string <p>策略关联的产品</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceType;

    /**
     * @var integer <p>当需要查询标记实体是否已经关联策略时不为null。0表示未关联策略，1表示已关联策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAttached;

    /**
     * @var integer <p>是否已下线</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Deactived;

    /**
     * @var array <p>已下线产品列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeactivedDetail;

    /**
     * @var integer <p>是否是服务相关角色策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsServiceLinkedPolicy;

    /**
     * @var integer <p>关联策略实体数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttachEntityCount;

    /**
     * @var integer <p>关联权限边界实体数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttachEntityBoundaryCount;

    /**
     * @var string <p>最后编辑时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var array <p>标签列表</p>
     */
    public $Tags;

    /**
     * @var string <p>权限级别</p><p>枚举值：</p><ul><li>Global： 全局权限</li><li>Finance： 财务权限</li><li>CloudProduct： 云产品权限</li></ul>
     */
    public $PermissionLevel;

    /**
     * @param integer $PolicyId <p>策略ID。</p>
     * @param string $PolicyName <p>策略名称。</p>
     * @param string $AddTime <p>策略创建时间。</p>
     * @param integer $Type <p>策略类型。1 表示自定义策略，2 表示预设策略。</p>
     * @param string $Description <p>策略描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateMode <p>创建来源，1 通过控制台创建, 2 通过策略语法创建。</p>
     * @param integer $Attachments <p>关联的用户数</p>
     * @param string $ServiceType <p>策略关联的产品</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsAttached <p>当需要查询标记实体是否已经关联策略时不为null。0表示未关联策略，1表示已关联策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Deactived <p>是否已下线</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DeactivedDetail <p>已下线产品列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsServiceLinkedPolicy <p>是否是服务相关角色策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AttachEntityCount <p>关联策略实体数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AttachEntityBoundaryCount <p>关联权限边界实体数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>最后编辑时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags <p>标签列表</p>
     * @param string $PermissionLevel <p>权限级别</p><p>枚举值：</p><ul><li>Global： 全局权限</li><li>Finance： 财务权限</li><li>CloudProduct： 云产品权限</li></ul>
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateMode",$param) and $param["CreateMode"] !== null) {
            $this->CreateMode = $param["CreateMode"];
        }

        if (array_key_exists("Attachments",$param) and $param["Attachments"] !== null) {
            $this->Attachments = $param["Attachments"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("IsAttached",$param) and $param["IsAttached"] !== null) {
            $this->IsAttached = $param["IsAttached"];
        }

        if (array_key_exists("Deactived",$param) and $param["Deactived"] !== null) {
            $this->Deactived = $param["Deactived"];
        }

        if (array_key_exists("DeactivedDetail",$param) and $param["DeactivedDetail"] !== null) {
            $this->DeactivedDetail = $param["DeactivedDetail"];
        }

        if (array_key_exists("IsServiceLinkedPolicy",$param) and $param["IsServiceLinkedPolicy"] !== null) {
            $this->IsServiceLinkedPolicy = $param["IsServiceLinkedPolicy"];
        }

        if (array_key_exists("AttachEntityCount",$param) and $param["AttachEntityCount"] !== null) {
            $this->AttachEntityCount = $param["AttachEntityCount"];
        }

        if (array_key_exists("AttachEntityBoundaryCount",$param) and $param["AttachEntityBoundaryCount"] !== null) {
            $this->AttachEntityBoundaryCount = $param["AttachEntityBoundaryCount"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("PermissionLevel",$param) and $param["PermissionLevel"] !== null) {
            $this->PermissionLevel = $param["PermissionLevel"];
        }
    }
}
