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
 * @method string getUserName() 获取终端用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置终端用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMacAddr() 获取mac地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMacAddr(string $MacAddr) 设置mac地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取终端计算机名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置终端计算机名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupNamePath() 获取终端组路径名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupNamePath(string $GroupNamePath) 设置终端组路径名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIp() 获取IP地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIp(string $Ip) 设置IP地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMid() 获取唯一标识Mid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMid(string $Mid) 设置唯一标识Mid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIoaUserName() 获取企业账户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIoaUserName(string $IoaUserName) 设置企业账户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGroupId() 获取终端分组Id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(integer $GroupId) 设置终端分组Id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupName() 获取终端组名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置终端组名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getId() 获取终端列表Id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置终端列表Id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSoftNum() 获取软件数量(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSoftNum(integer $SoftNum) 设置软件数量(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPiracyRisk() 获取盗版风险（1=风险;2=未知）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPiracyRisk(integer $PiracyRisk) 设置盗版风险（1=风险;2=未知）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemarkName() 获取终端备注名
 * @method void setRemarkName(string $RemarkName) 设置终端备注名
 */
class DescribeSoftCensusListByDeviceData extends AbstractModel
{
    /**
     * @var string 终端用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string mac地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MacAddr;

    /**
     * @var string 终端计算机名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 终端组路径名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupNamePath;

    /**
     * @var string IP地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ip;

    /**
     * @var string 唯一标识Mid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mid;

    /**
     * @var string 企业账户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IoaUserName;

    /**
     * @var integer 终端分组Id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var string 终端组名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var integer 终端列表Id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var integer 软件数量(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SoftNum;

    /**
     * @var integer 盗版风险（1=风险;2=未知）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PiracyRisk;

    /**
     * @var string 终端备注名
     */
    public $RemarkName;

    /**
     * @param string $UserName 终端用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MacAddr mac地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 终端计算机名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupNamePath 终端组路径名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ip IP地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Mid 唯一标识Mid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IoaUserName 企业账户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GroupId 终端分组Id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupName 终端组名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Id 终端列表Id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SoftNum 软件数量(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PiracyRisk 盗版风险（1=风险;2=未知）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RemarkName 终端备注名
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
