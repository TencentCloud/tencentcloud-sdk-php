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
 * @method string getUserName() 获取<p>账号名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置<p>账号名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComputerName() 获取<p>计算机名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComputerName(string $ComputerName) 设置<p>计算机名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountGroupIdPath() 获取<p>用户组IdPath</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountGroupIdPath(string $AccountGroupIdPath) 设置<p>用户组IdPath</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAccountGroupId() 获取<p>用户组id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountGroupId(integer $AccountGroupId) 设置<p>用户组id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupNamePath() 获取<p>终端组名path</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupNamePath(string $GroupNamePath) 设置<p>终端组名path</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIp() 获取<p>Ip地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIp(string $Ip) 设置<p>Ip地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountGroupName() 获取<p>用户组名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountGroupName(string $AccountGroupName) 设置<p>用户组名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupIdPath() 获取<p>终端组IdPath</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupIdPath(string $GroupIdPath) 设置<p>终端组IdPath</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMid() 获取<p>唯一标识Mid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMid(string $Mid) 设置<p>唯一标识Mid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIoaUserName() 获取<p>IOA账号名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIoaUserName(string $IoaUserName) 设置<p>IOA账号名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGroupId() 获取<p>所在分组Id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(integer $GroupId) 设置<p>所在分组Id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupName() 获取<p>所在分组Name</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置<p>所在分组Name</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMac() 获取<p>Mac地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMac(string $Mac) 设置<p>Mac地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取<p>软件版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置<p>软件版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountGroupNamePath() 获取<p>用户组名Path</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountGroupNamePath(string $AccountGroupNamePath) 设置<p>用户组名Path</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getId() 获取<p>列表Id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置<p>列表Id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeDeviceDetailListData extends AbstractModel
{
    /**
     * @var string <p>账号名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string <p>计算机名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComputerName;

    /**
     * @var string <p>名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>用户组IdPath</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountGroupIdPath;

    /**
     * @var integer <p>用户组id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountGroupId;

    /**
     * @var string <p>终端组名path</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupNamePath;

    /**
     * @var string <p>Ip地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ip;

    /**
     * @var string <p>用户组名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountGroupName;

    /**
     * @var string <p>终端组IdPath</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupIdPath;

    /**
     * @var string <p>唯一标识Mid</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mid;

    /**
     * @var string <p>IOA账号名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IoaUserName;

    /**
     * @var integer <p>所在分组Id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var string <p>所在分组Name</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var string <p>Mac地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mac;

    /**
     * @var string <p>软件版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var string <p>用户组名Path</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountGroupNamePath;

    /**
     * @var integer <p>列表Id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @param string $UserName <p>账号名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ComputerName <p>计算机名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountGroupIdPath <p>用户组IdPath</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AccountGroupId <p>用户组id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupNamePath <p>终端组名path</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ip <p>Ip地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountGroupName <p>用户组名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupIdPath <p>终端组IdPath</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Mid <p>唯一标识Mid</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IoaUserName <p>IOA账号名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GroupId <p>所在分组Id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupName <p>所在分组Name</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Mac <p>Mac地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version <p>软件版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountGroupNamePath <p>用户组名Path</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Id <p>列表Id(只支持32位)</p>
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
