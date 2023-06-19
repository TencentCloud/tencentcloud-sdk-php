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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作空间详情
 *
 * @method string getSerialId() 获取工作空间 SerialId
 * @method void setSerialId(string $SerialId) 设置工作空间 SerialId
 * @method integer getAppId() 获取用户 APPID
 * @method void setAppId(integer $AppId) 设置用户 APPID
 * @method string getOwnerUin() 获取主账号 UIN
 * @method void setOwnerUin(string $OwnerUin) 设置主账号 UIN
 * @method string getCreatorUin() 获取创建者 UIN
 * @method void setCreatorUin(string $CreatorUin) 设置创建者 UIN
 * @method string getWorkSpaceName() 获取工作空间名称
 * @method void setWorkSpaceName(string $WorkSpaceName) 设置工作空间名称
 * @method string getRegion() 获取区域
 * @method void setRegion(string $Region) 设置区域
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method integer getStatus() 获取1 未初始化 2 可用  -1 已删除
 * @method void setStatus(integer $Status) 设置1 未初始化 2 可用  -1 已删除
 * @method string getDescription() 获取工作空间描述
 * @method void setDescription(string $Description) 设置工作空间描述
 * @method array getClusterGroupSetItem() 获取工作空间包含集群信息
 * @method void setClusterGroupSetItem(array $ClusterGroupSetItem) 设置工作空间包含集群信息
 * @method array getRoleAuth() 获取工作空间角色的信息
 * @method void setRoleAuth(array $RoleAuth) 设置工作空间角色的信息
 * @method integer getRoleAuthCount() 获取工作空间成员数量
 * @method void setRoleAuthCount(integer $RoleAuthCount) 设置工作空间成员数量
 * @method string getWorkSpaceId() 获取工作空间 SerialId
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置工作空间 SerialId
 * @method integer getJobsCount() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobsCount(integer $JobsCount) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkSpaceSetItem extends AbstractModel
{
    /**
     * @var string 工作空间 SerialId
     */
    public $SerialId;

    /**
     * @var integer 用户 APPID
     */
    public $AppId;

    /**
     * @var string 主账号 UIN
     */
    public $OwnerUin;

    /**
     * @var string 创建者 UIN
     */
    public $CreatorUin;

    /**
     * @var string 工作空间名称
     */
    public $WorkSpaceName;

    /**
     * @var string 区域
     */
    public $Region;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var integer 1 未初始化 2 可用  -1 已删除
     */
    public $Status;

    /**
     * @var string 工作空间描述
     */
    public $Description;

    /**
     * @var array 工作空间包含集群信息
     */
    public $ClusterGroupSetItem;

    /**
     * @var array 工作空间角色的信息
     */
    public $RoleAuth;

    /**
     * @var integer 工作空间成员数量
     */
    public $RoleAuthCount;

    /**
     * @var string 工作空间 SerialId
     */
    public $WorkSpaceId;

    /**
     * @var integer 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobsCount;

    /**
     * @param string $SerialId 工作空间 SerialId
     * @param integer $AppId 用户 APPID
     * @param string $OwnerUin 主账号 UIN
     * @param string $CreatorUin 创建者 UIN
     * @param string $WorkSpaceName 工作空间名称
     * @param string $Region 区域
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param integer $Status 1 未初始化 2 可用  -1 已删除
     * @param string $Description 工作空间描述
     * @param array $ClusterGroupSetItem 工作空间包含集群信息
     * @param array $RoleAuth 工作空间角色的信息
     * @param integer $RoleAuthCount 工作空间成员数量
     * @param string $WorkSpaceId 工作空间 SerialId
     * @param integer $JobsCount 1
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
        if (array_key_exists("SerialId",$param) and $param["SerialId"] !== null) {
            $this->SerialId = $param["SerialId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }

        if (array_key_exists("WorkSpaceName",$param) and $param["WorkSpaceName"] !== null) {
            $this->WorkSpaceName = $param["WorkSpaceName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ClusterGroupSetItem",$param) and $param["ClusterGroupSetItem"] !== null) {
            $this->ClusterGroupSetItem = [];
            foreach ($param["ClusterGroupSetItem"] as $key => $value){
                $obj = new ClusterGroupSetItem();
                $obj->deserialize($value);
                array_push($this->ClusterGroupSetItem, $obj);
            }
        }

        if (array_key_exists("RoleAuth",$param) and $param["RoleAuth"] !== null) {
            $this->RoleAuth = [];
            foreach ($param["RoleAuth"] as $key => $value){
                $obj = new RoleAuth();
                $obj->deserialize($value);
                array_push($this->RoleAuth, $obj);
            }
        }

        if (array_key_exists("RoleAuthCount",$param) and $param["RoleAuthCount"] !== null) {
            $this->RoleAuthCount = $param["RoleAuthCount"];
        }

        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }

        if (array_key_exists("JobsCount",$param) and $param["JobsCount"] !== null) {
            $this->JobsCount = $param["JobsCount"];
        }
    }
}
