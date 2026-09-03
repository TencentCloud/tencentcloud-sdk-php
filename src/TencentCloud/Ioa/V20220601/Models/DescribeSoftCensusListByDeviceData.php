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
 * 软件统计响应对象集合
 *
 * @method string getUserName() 获取<p>终端用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置<p>终端用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMacAddr() 获取<p>mac地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMacAddr(string $MacAddr) 设置<p>mac地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>终端计算机名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>终端计算机名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupNamePath() 获取<p>终端组路径名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupNamePath(string $GroupNamePath) 设置<p>终端组路径名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIp() 获取<p>IP地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIp(string $Ip) 设置<p>IP地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMid() 获取<p>唯一标识Mid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMid(string $Mid) 设置<p>唯一标识Mid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIoaUserName() 获取<p>企业账户名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIoaUserName(string $IoaUserName) 设置<p>企业账户名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGroupId() 获取<p>终端分组Id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(integer $GroupId) 设置<p>终端分组Id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupName() 获取<p>终端组名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置<p>终端组名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getId() 获取<p>终端列表Id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置<p>终端列表Id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSoftNum() 获取<p>软件数量(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSoftNum(integer $SoftNum) 设置<p>软件数量(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPiracyRisk() 获取<p>盗版风险（1=风险;2=未知）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPiracyRisk(integer $PiracyRisk) 设置<p>盗版风险（1=风险;2=未知）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemarkName() 获取<p>终端备注名</p>
 * @method void setRemarkName(string $RemarkName) 设置<p>终端备注名</p>
 */
class DescribeSoftCensusListByDeviceData extends AbstractModel
{
    /**
     * @var string <p>终端用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string <p>mac地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MacAddr;

    /**
     * @var string <p>终端计算机名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>终端组路径名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupNamePath;

    /**
     * @var string <p>IP地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ip;

    /**
     * @var string <p>唯一标识Mid</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mid;

    /**
     * @var string <p>企业账户名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IoaUserName;

    /**
     * @var integer <p>终端分组Id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var string <p>终端组名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var integer <p>终端列表Id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var integer <p>软件数量(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SoftNum;

    /**
     * @var integer <p>盗版风险（1=风险;2=未知）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PiracyRisk;

    /**
     * @var string <p>终端备注名</p>
     */
    public $RemarkName;

    /**
     * @param string $UserName <p>终端用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MacAddr <p>mac地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>终端计算机名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupNamePath <p>终端组路径名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ip <p>IP地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Mid <p>唯一标识Mid</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IoaUserName <p>企业账户名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GroupId <p>终端分组Id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupName <p>终端组名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Id <p>终端列表Id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SoftNum <p>软件数量(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PiracyRisk <p>盗版风险（1=风险;2=未知）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RemarkName <p>终端备注名</p>
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

        if (array_key_exists("MacAddr",$param) and $param["MacAddr"] !== null) {
            $this->MacAddr = $param["MacAddr"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("GroupNamePath",$param) and $param["GroupNamePath"] !== null) {
            $this->GroupNamePath = $param["GroupNamePath"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("SoftNum",$param) and $param["SoftNum"] !== null) {
            $this->SoftNum = $param["SoftNum"];
        }

        if (array_key_exists("PiracyRisk",$param) and $param["PiracyRisk"] !== null) {
            $this->PiracyRisk = $param["PiracyRisk"];
        }

        if (array_key_exists("RemarkName",$param) and $param["RemarkName"] !== null) {
            $this->RemarkName = $param["RemarkName"];
        }
    }
}
