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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 终端详情响应对象集合
 *
 * @method string getUserName() 获取账号名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置账号名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComputerName() 获取计算机名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComputerName(string $ComputerName) 设置计算机名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountGroupIdPath() 获取用户组IdPath
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountGroupIdPath(string $AccountGroupIdPath) 设置用户组IdPath
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAccountGroupId() 获取用户组id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountGroupId(integer $AccountGroupId) 设置用户组id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupNamePath() 获取终端组名path
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupNamePath(string $GroupNamePath) 设置终端组名path
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIp() 获取Ip地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIp(string $Ip) 设置Ip地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountGroupName() 获取用户组名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountGroupName(string $AccountGroupName) 设置用户组名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupIdPath() 获取终端组IdPath
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupIdPath(string $GroupIdPath) 设置终端组IdPath
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMid() 获取唯一标识Mid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMid(string $Mid) 设置唯一标识Mid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIoaUserName() 获取IOA账号名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIoaUserName(string $IoaUserName) 设置IOA账号名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGroupId() 获取所在分组Id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(integer $GroupId) 设置所在分组Id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupName() 获取所在分组Name
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置所在分组Name
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMac() 获取Mac地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMac(string $Mac) 设置Mac地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取软件版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置软件版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountGroupNamePath() 获取用户组名Path
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountGroupNamePath(string $AccountGroupNamePath) 设置用户组名Path
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getId() 获取列表Id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置列表Id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeDeviceDetailListData extends AbstractModel
{
    /**
     * @var string 账号名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string 计算机名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComputerName;

    /**
     * @var string 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 用户组IdPath
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountGroupIdPath;

    /**
     * @var integer 用户组id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountGroupId;

    /**
     * @var string 终端组名path
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupNamePath;

    /**
     * @var string Ip地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ip;

    /**
     * @var string 用户组名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountGroupName;

    /**
     * @var string 终端组IdPath
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupIdPath;

    /**
     * @var string 唯一标识Mid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mid;

    /**
     * @var string IOA账号名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IoaUserName;

    /**
     * @var integer 所在分组Id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var string 所在分组Name
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var string Mac地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mac;

    /**
     * @var string 软件版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var string 用户组名Path
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountGroupNamePath;

    /**
     * @var integer 列表Id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @param string $UserName 账号名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ComputerName 计算机名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountGroupIdPath 用户组IdPath
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AccountGroupId 用户组id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupNamePath 终端组名path
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ip Ip地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountGroupName 用户组名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupIdPath 终端组IdPath
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Mid 唯一标识Mid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IoaUserName IOA账号名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GroupId 所在分组Id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupName 所在分组Name
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Mac Mac地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version 软件版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountGroupNamePath 用户组名Path
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Id 列表Id(只支持32位)
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("ComputerName",$param) and $param["ComputerName"] !== null) {
            $this->ComputerName = $param["ComputerName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AccountGroupIdPath",$param) and $param["AccountGroupIdPath"] !== null) {
            $this->AccountGroupIdPath = $param["AccountGroupIdPath"];
        }

        if (array_key_exists("AccountGroupId",$param) and $param["AccountGroupId"] !== null) {
            $this->AccountGroupId = $param["AccountGroupId"];
        }

        if (array_key_exists("GroupNamePath",$param) and $param["GroupNamePath"] !== null) {
            $this->GroupNamePath = $param["GroupNamePath"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("AccountGroupName",$param) and $param["AccountGroupName"] !== null) {
            $this->AccountGroupName = $param["AccountGroupName"];
        }

        if (array_key_exists("GroupIdPath",$param) and $param["GroupIdPath"] !== null) {
            $this->GroupIdPath = $param["GroupIdPath"];
        }

        if (array_key_exists("Mid",$param) and $param["Mid"] !== null) {
            $this->Mid = $param["Mid"];
        }

        if (array_key_exists("IoaUserName",$param) and $param["IoaUserName"] !== null) {
            $this->IoaUserName = $param["IoaUserName"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Mac",$param) and $param["Mac"] !== null) {
            $this->Mac = $param["Mac"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("AccountGroupNamePath",$param) and $param["AccountGroupNamePath"] !== null) {
            $this->AccountGroupNamePath = $param["AccountGroupNamePath"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
