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
 * 列表虚拟组的账户分页数据集合
 *
 * @method integer getId() 获取<p>Id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置<p>Id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserId() 获取<p>用户账号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置<p>用户账号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取<p>用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置<p>用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAccountGroupId() 获取<p>账户分组Id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountGroupId(integer $AccountGroupId) 设置<p>账户分组Id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupName() 获取<p>账户组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置<p>账户组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAccountId() 获取<p>关联服务器名称(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountId(integer $AccountId) 设置<p>关联服务器名称(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSource() 获取<p>账户源(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSource(integer $Source) 设置<p>账户源(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取<p>状态(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置<p>状态(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamePath() 获取<p>账户namepath</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamePath(string $NamePath) 设置<p>账户namepath</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtraInfo() 获取<p>账户扩展信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraInfo(string $ExtraInfo) 设置<p>账户扩展信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getItime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItime(string $Itime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUtime() 获取<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUtime(string $Utime) 设置<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAccountGroups() 获取<p>多OU组信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountGroups(array $AccountGroups) 设置<p>多OU组信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPcBindNum() 获取<p>绑定PC端数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPcBindNum(integer $PcBindNum) 设置<p>绑定PC端数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMobileBindNum() 获取<p>绑定移动端数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMobileBindNum(integer $MobileBindNum) 设置<p>绑定移动端数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeVirtualAccountsData extends AbstractModel
{
    /**
     * @var integer <p>Id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string <p>用户账号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var string <p>用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var integer <p>账户分组Id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountGroupId;

    /**
     * @var string <p>账户组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var integer <p>关联服务器名称(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountId;

    /**
     * @var integer <p>账户源(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Source;

    /**
     * @var integer <p>状态(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>账户namepath</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamePath;

    /**
     * @var string <p>账户扩展信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraInfo;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Itime;

    /**
     * @var string <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Utime;

    /**
     * @var array <p>多OU组信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountGroups;

    /**
     * @var integer <p>绑定PC端数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PcBindNum;

    /**
     * @var integer <p>绑定移动端数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MobileBindNum;

    /**
     * @param integer $Id <p>Id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserId <p>用户账号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserName <p>用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AccountGroupId <p>账户分组Id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupName <p>账户组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AccountId <p>关联服务器名称(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Source <p>账户源(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status <p>状态(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NamePath <p>账户namepath</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExtraInfo <p>账户扩展信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Itime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Utime <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AccountGroups <p>多OU组信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PcBindNum <p>绑定PC端数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MobileBindNum <p>绑定移动端数量</p>
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

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("AccountGroupId",$param) and $param["AccountGroupId"] !== null) {
            $this->AccountGroupId = $param["AccountGroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("AccountId",$param) and $param["AccountId"] !== null) {
            $this->AccountId = $param["AccountId"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("NamePath",$param) and $param["NamePath"] !== null) {
            $this->NamePath = $param["NamePath"];
        }

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = $param["ExtraInfo"];
        }

        if (array_key_exists("Itime",$param) and $param["Itime"] !== null) {
            $this->Itime = $param["Itime"];
        }

        if (array_key_exists("Utime",$param) and $param["Utime"] !== null) {
            $this->Utime = $param["Utime"];
        }

        if (array_key_exists("AccountGroups",$param) and $param["AccountGroups"] !== null) {
            $this->AccountGroups = [];
            foreach ($param["AccountGroups"] as $key => $value){
                $obj = new DescribeAccountAccountGroupsData();
                $obj->deserialize($value);
                array_push($this->AccountGroups, $obj);
            }
        }

        if (array_key_exists("PcBindNum",$param) and $param["PcBindNum"] !== null) {
            $this->PcBindNum = $param["PcBindNum"];
        }

        if (array_key_exists("MobileBindNum",$param) and $param["MobileBindNum"] !== null) {
            $this->MobileBindNum = $param["MobileBindNum"];
        }
    }
}
