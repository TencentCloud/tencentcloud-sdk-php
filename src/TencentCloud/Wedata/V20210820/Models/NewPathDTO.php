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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资管管理-路径返回键值对
 *
 * @method string getName() 获取名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsLeaf() 获取是否为叶子节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsLeaf(boolean $IsLeaf) 设置是否为叶子节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceId() 获取资源 id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceId(string $ResourceId) 设置资源 id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLocalPath() 获取本地路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocalPath(string $LocalPath) 设置本地路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemotePath() 获取远程路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemotePath(string $RemotePath) 设置远程路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileExtensionType() 获取文件扩展名类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileExtensionType(string $FileExtensionType) 设置文件扩展名类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSize() 获取文件大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSize(integer $Size) 设置文件大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMD5Value() 获取MD5值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMD5Value(string $MD5Value) 设置MD5值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerName() 获取所有者名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerName(string $OwnerName) 设置所有者名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateUser() 获取更新用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateUser(string $UpdateUser) 设置更新用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateUserId() 获取更新用户 id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateUserId(string $UpdateUserId) 设置更新用户 id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取创建日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置创建日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取更新日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置更新日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBucket() 获取cos 桶名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucket(string $Bucket) 设置cos 桶名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取cos 地区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置cos 地区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtraInfo() 获取额外信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraInfo(string $ExtraInfo) 设置额外信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getChildren() 获取子节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChildren(array $Children) 设置子节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFullPath() 获取cos 全路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFullPath(string $FullPath) 设置cos 全路径
注意：此字段可能返回 null，表示取不到有效值。
 */
class NewPathDTO extends AbstractModel
{
    /**
     * @var string 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var boolean 是否为叶子节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsLeaf;

    /**
     * @var string 资源 id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceId;

    /**
     * @var string 本地路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocalPath;

    /**
     * @var string 远程路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemotePath;

    /**
     * @var string 文件扩展名类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileExtensionType;

    /**
     * @var integer 文件大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Size;

    /**
     * @var string MD5值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MD5Value;

    /**
     * @var string 所有者名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerName;

    /**
     * @var string 更新用户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateUser;

    /**
     * @var string 更新用户 id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateUserId;

    /**
     * @var integer 创建日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 更新日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string cos 桶名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Bucket;

    /**
     * @var string cos 地区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 额外信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraInfo;

    /**
     * @var array 子节点信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Children;

    /**
     * @var string cos 全路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FullPath;

    /**
     * @param string $Name 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsLeaf 是否为叶子节点
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceId 资源 id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LocalPath 本地路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RemotePath 远程路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileExtensionType 文件扩展名类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Size 文件大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MD5Value MD5值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerName 所有者名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateUser 更新用户
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateUserId 更新用户 id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 创建日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime 更新日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Bucket cos 桶名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region cos 地区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExtraInfo 额外信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Children 子节点信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FullPath cos 全路径
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IsLeaf",$param) and $param["IsLeaf"] !== null) {
            $this->IsLeaf = $param["IsLeaf"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("LocalPath",$param) and $param["LocalPath"] !== null) {
            $this->LocalPath = $param["LocalPath"];
        }

        if (array_key_exists("RemotePath",$param) and $param["RemotePath"] !== null) {
            $this->RemotePath = $param["RemotePath"];
        }

        if (array_key_exists("FileExtensionType",$param) and $param["FileExtensionType"] !== null) {
            $this->FileExtensionType = $param["FileExtensionType"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("MD5Value",$param) and $param["MD5Value"] !== null) {
            $this->MD5Value = $param["MD5Value"];
        }

        if (array_key_exists("OwnerName",$param) and $param["OwnerName"] !== null) {
            $this->OwnerName = $param["OwnerName"];
        }

        if (array_key_exists("UpdateUser",$param) and $param["UpdateUser"] !== null) {
            $this->UpdateUser = $param["UpdateUser"];
        }

        if (array_key_exists("UpdateUserId",$param) and $param["UpdateUserId"] !== null) {
            $this->UpdateUserId = $param["UpdateUserId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = $param["ExtraInfo"];
        }

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new NewPathDTO();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }

        if (array_key_exists("FullPath",$param) and $param["FullPath"] !== null) {
            $this->FullPath = $param["FullPath"];
        }
    }
}
