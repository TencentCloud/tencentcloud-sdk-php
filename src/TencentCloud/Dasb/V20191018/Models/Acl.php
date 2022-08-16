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
namespace TencentCloud\Dasb\V20191018\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 访问权限
 *
 * @method integer getId() 获取访问权限ID
 * @method void setId(integer $Id) 设置访问权限ID
 * @method string getName() 获取访问权限名称
 * @method void setName(string $Name) 设置访问权限名称
 * @method boolean getAllowDiskRedirect() 获取是否开启磁盘映射
 * @method void setAllowDiskRedirect(boolean $AllowDiskRedirect) 设置是否开启磁盘映射
 * @method boolean getAllowClipFileUp() 获取是否开启剪贴板文件上行
 * @method void setAllowClipFileUp(boolean $AllowClipFileUp) 设置是否开启剪贴板文件上行
 * @method boolean getAllowClipFileDown() 获取是否开启剪贴板文件下行
 * @method void setAllowClipFileDown(boolean $AllowClipFileDown) 设置是否开启剪贴板文件下行
 * @method boolean getAllowClipTextUp() 获取是否开启剪贴板文本（目前含图片）上行
 * @method void setAllowClipTextUp(boolean $AllowClipTextUp) 设置是否开启剪贴板文本（目前含图片）上行
 * @method boolean getAllowClipTextDown() 获取是否开启剪贴板文本（目前含图片）下行
 * @method void setAllowClipTextDown(boolean $AllowClipTextDown) 设置是否开启剪贴板文本（目前含图片）下行
 * @method boolean getAllowFileUp() 获取是否开启文件传输上传
 * @method void setAllowFileUp(boolean $AllowFileUp) 设置是否开启文件传输上传
 * @method integer getMaxFileUpSize() 获取文件传输上传大小限制（预留参数，暂未启用）
 * @method void setMaxFileUpSize(integer $MaxFileUpSize) 设置文件传输上传大小限制（预留参数，暂未启用）
 * @method boolean getAllowFileDown() 获取是否开启文件传输下载
 * @method void setAllowFileDown(boolean $AllowFileDown) 设置是否开启文件传输下载
 * @method integer getMaxFileDownSize() 获取文件传输下载大小限制（预留参数，暂未启用）
 * @method void setMaxFileDownSize(integer $MaxFileDownSize) 设置文件传输下载大小限制（预留参数，暂未启用）
 * @method boolean getAllowAnyAccount() 获取是否允许任意账号登录
 * @method void setAllowAnyAccount(boolean $AllowAnyAccount) 设置是否允许任意账号登录
 * @method array getUserSet() 获取关联的用户列表
 * @method void setUserSet(array $UserSet) 设置关联的用户列表
 * @method array getUserGroupSet() 获取关联的用户组列表
 * @method void setUserGroupSet(array $UserGroupSet) 设置关联的用户组列表
 * @method array getDeviceSet() 获取关联的资产列表
 * @method void setDeviceSet(array $DeviceSet) 设置关联的资产列表
 * @method array getDeviceGroupSet() 获取关联的资产组列表
 * @method void setDeviceGroupSet(array $DeviceGroupSet) 设置关联的资产组列表
 * @method array getAccountSet() 获取关联的账号列表
 * @method void setAccountSet(array $AccountSet) 设置关联的账号列表
 * @method array getCmdTemplateSet() 获取关联的高危命令模板列表
 * @method void setCmdTemplateSet(array $CmdTemplateSet) 设置关联的高危命令模板列表
 * @method boolean getAllowDiskFileUp() 获取是否开启 RDP 磁盘映射文件上传
 * @method void setAllowDiskFileUp(boolean $AllowDiskFileUp) 设置是否开启 RDP 磁盘映射文件上传
 * @method boolean getAllowDiskFileDown() 获取是否开启 RDP 磁盘映射文件下载
 * @method void setAllowDiskFileDown(boolean $AllowDiskFileDown) 设置是否开启 RDP 磁盘映射文件下载
 * @method boolean getAllowShellFileUp() 获取是否开启 rz sz 文件上传
 * @method void setAllowShellFileUp(boolean $AllowShellFileUp) 设置是否开启 rz sz 文件上传
 * @method boolean getAllowShellFileDown() 获取是否开启 rz sz 文件下载
 * @method void setAllowShellFileDown(boolean $AllowShellFileDown) 设置是否开启 rz sz 文件下载
 * @method boolean getAllowFileDel() 获取是否开启 SFTP 文件删除
 * @method void setAllowFileDel(boolean $AllowFileDel) 设置是否开启 SFTP 文件删除
 * @method string getValidateFrom() 获取访问权限生效时间，如:"2021-09-22T00:00:00+00:00"
生效、失效时间不填则访问权限长期有效
 * @method void setValidateFrom(string $ValidateFrom) 设置访问权限生效时间，如:"2021-09-22T00:00:00+00:00"
生效、失效时间不填则访问权限长期有效
 * @method string getValidateTo() 获取访问权限失效时间，如:"2021-09-23T00:00:00+00:00"
生效、失效时间不填则访问权限长期有效
 * @method void setValidateTo(string $ValidateTo) 设置访问权限失效时间，如:"2021-09-23T00:00:00+00:00"
生效、失效时间不填则访问权限长期有效
 * @method integer getStatus() 获取访问权限状态，1 - 已生效，2 - 未生效，3 - 已过期
 * @method void setStatus(integer $Status) 设置访问权限状态，1 - 已生效，2 - 未生效，3 - 已过期
 * @method Department getDepartment() 获取所属部门的信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDepartment(Department $Department) 设置所属部门的信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class Acl extends AbstractModel
{
    /**
     * @var integer 访问权限ID
     */
    public $Id;

    /**
     * @var string 访问权限名称
     */
    public $Name;

    /**
     * @var boolean 是否开启磁盘映射
     */
    public $AllowDiskRedirect;

    /**
     * @var boolean 是否开启剪贴板文件上行
     */
    public $AllowClipFileUp;

    /**
     * @var boolean 是否开启剪贴板文件下行
     */
    public $AllowClipFileDown;

    /**
     * @var boolean 是否开启剪贴板文本（目前含图片）上行
     */
    public $AllowClipTextUp;

    /**
     * @var boolean 是否开启剪贴板文本（目前含图片）下行
     */
    public $AllowClipTextDown;

    /**
     * @var boolean 是否开启文件传输上传
     */
    public $AllowFileUp;

    /**
     * @var integer 文件传输上传大小限制（预留参数，暂未启用）
     */
    public $MaxFileUpSize;

    /**
     * @var boolean 是否开启文件传输下载
     */
    public $AllowFileDown;

    /**
     * @var integer 文件传输下载大小限制（预留参数，暂未启用）
     */
    public $MaxFileDownSize;

    /**
     * @var boolean 是否允许任意账号登录
     */
    public $AllowAnyAccount;

    /**
     * @var array 关联的用户列表
     */
    public $UserSet;

    /**
     * @var array 关联的用户组列表
     */
    public $UserGroupSet;

    /**
     * @var array 关联的资产列表
     */
    public $DeviceSet;

    /**
     * @var array 关联的资产组列表
     */
    public $DeviceGroupSet;

    /**
     * @var array 关联的账号列表
     */
    public $AccountSet;

    /**
     * @var array 关联的高危命令模板列表
     */
    public $CmdTemplateSet;

    /**
     * @var boolean 是否开启 RDP 磁盘映射文件上传
     */
    public $AllowDiskFileUp;

    /**
     * @var boolean 是否开启 RDP 磁盘映射文件下载
     */
    public $AllowDiskFileDown;

    /**
     * @var boolean 是否开启 rz sz 文件上传
     */
    public $AllowShellFileUp;

    /**
     * @var boolean 是否开启 rz sz 文件下载
     */
    public $AllowShellFileDown;

    /**
     * @var boolean 是否开启 SFTP 文件删除
     */
    public $AllowFileDel;

    /**
     * @var string 访问权限生效时间，如:"2021-09-22T00:00:00+00:00"
生效、失效时间不填则访问权限长期有效
     */
    public $ValidateFrom;

    /**
     * @var string 访问权限失效时间，如:"2021-09-23T00:00:00+00:00"
生效、失效时间不填则访问权限长期有效
     */
    public $ValidateTo;

    /**
     * @var integer 访问权限状态，1 - 已生效，2 - 未生效，3 - 已过期
     */
    public $Status;

    /**
     * @var Department 所属部门的信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Department;

    /**
     * @param integer $Id 访问权限ID
     * @param string $Name 访问权限名称
     * @param boolean $AllowDiskRedirect 是否开启磁盘映射
     * @param boolean $AllowClipFileUp 是否开启剪贴板文件上行
     * @param boolean $AllowClipFileDown 是否开启剪贴板文件下行
     * @param boolean $AllowClipTextUp 是否开启剪贴板文本（目前含图片）上行
     * @param boolean $AllowClipTextDown 是否开启剪贴板文本（目前含图片）下行
     * @param boolean $AllowFileUp 是否开启文件传输上传
     * @param integer $MaxFileUpSize 文件传输上传大小限制（预留参数，暂未启用）
     * @param boolean $AllowFileDown 是否开启文件传输下载
     * @param integer $MaxFileDownSize 文件传输下载大小限制（预留参数，暂未启用）
     * @param boolean $AllowAnyAccount 是否允许任意账号登录
     * @param array $UserSet 关联的用户列表
     * @param array $UserGroupSet 关联的用户组列表
     * @param array $DeviceSet 关联的资产列表
     * @param array $DeviceGroupSet 关联的资产组列表
     * @param array $AccountSet 关联的账号列表
     * @param array $CmdTemplateSet 关联的高危命令模板列表
     * @param boolean $AllowDiskFileUp 是否开启 RDP 磁盘映射文件上传
     * @param boolean $AllowDiskFileDown 是否开启 RDP 磁盘映射文件下载
     * @param boolean $AllowShellFileUp 是否开启 rz sz 文件上传
     * @param boolean $AllowShellFileDown 是否开启 rz sz 文件下载
     * @param boolean $AllowFileDel 是否开启 SFTP 文件删除
     * @param string $ValidateFrom 访问权限生效时间，如:"2021-09-22T00:00:00+00:00"
生效、失效时间不填则访问权限长期有效
     * @param string $ValidateTo 访问权限失效时间，如:"2021-09-23T00:00:00+00:00"
生效、失效时间不填则访问权限长期有效
     * @param integer $Status 访问权限状态，1 - 已生效，2 - 未生效，3 - 已过期
     * @param Department $Department 所属部门的信息
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AllowDiskRedirect",$param) and $param["AllowDiskRedirect"] !== null) {
            $this->AllowDiskRedirect = $param["AllowDiskRedirect"];
        }

        if (array_key_exists("AllowClipFileUp",$param) and $param["AllowClipFileUp"] !== null) {
            $this->AllowClipFileUp = $param["AllowClipFileUp"];
        }

        if (array_key_exists("AllowClipFileDown",$param) and $param["AllowClipFileDown"] !== null) {
            $this->AllowClipFileDown = $param["AllowClipFileDown"];
        }

        if (array_key_exists("AllowClipTextUp",$param) and $param["AllowClipTextUp"] !== null) {
            $this->AllowClipTextUp = $param["AllowClipTextUp"];
        }

        if (array_key_exists("AllowClipTextDown",$param) and $param["AllowClipTextDown"] !== null) {
            $this->AllowClipTextDown = $param["AllowClipTextDown"];
        }

        if (array_key_exists("AllowFileUp",$param) and $param["AllowFileUp"] !== null) {
            $this->AllowFileUp = $param["AllowFileUp"];
        }

        if (array_key_exists("MaxFileUpSize",$param) and $param["MaxFileUpSize"] !== null) {
            $this->MaxFileUpSize = $param["MaxFileUpSize"];
        }

        if (array_key_exists("AllowFileDown",$param) and $param["AllowFileDown"] !== null) {
            $this->AllowFileDown = $param["AllowFileDown"];
        }

        if (array_key_exists("MaxFileDownSize",$param) and $param["MaxFileDownSize"] !== null) {
            $this->MaxFileDownSize = $param["MaxFileDownSize"];
        }

        if (array_key_exists("AllowAnyAccount",$param) and $param["AllowAnyAccount"] !== null) {
            $this->AllowAnyAccount = $param["AllowAnyAccount"];
        }

        if (array_key_exists("UserSet",$param) and $param["UserSet"] !== null) {
            $this->UserSet = [];
            foreach ($param["UserSet"] as $key => $value){
                $obj = new User();
                $obj->deserialize($value);
                array_push($this->UserSet, $obj);
            }
        }

        if (array_key_exists("UserGroupSet",$param) and $param["UserGroupSet"] !== null) {
            $this->UserGroupSet = [];
            foreach ($param["UserGroupSet"] as $key => $value){
                $obj = new Group();
                $obj->deserialize($value);
                array_push($this->UserGroupSet, $obj);
            }
        }

        if (array_key_exists("DeviceSet",$param) and $param["DeviceSet"] !== null) {
            $this->DeviceSet = [];
            foreach ($param["DeviceSet"] as $key => $value){
                $obj = new Device();
                $obj->deserialize($value);
                array_push($this->DeviceSet, $obj);
            }
        }

        if (array_key_exists("DeviceGroupSet",$param) and $param["DeviceGroupSet"] !== null) {
            $this->DeviceGroupSet = [];
            foreach ($param["DeviceGroupSet"] as $key => $value){
                $obj = new Group();
                $obj->deserialize($value);
                array_push($this->DeviceGroupSet, $obj);
            }
        }

        if (array_key_exists("AccountSet",$param) and $param["AccountSet"] !== null) {
            $this->AccountSet = $param["AccountSet"];
        }

        if (array_key_exists("CmdTemplateSet",$param) and $param["CmdTemplateSet"] !== null) {
            $this->CmdTemplateSet = [];
            foreach ($param["CmdTemplateSet"] as $key => $value){
                $obj = new CmdTemplate();
                $obj->deserialize($value);
                array_push($this->CmdTemplateSet, $obj);
            }
        }

        if (array_key_exists("AllowDiskFileUp",$param) and $param["AllowDiskFileUp"] !== null) {
            $this->AllowDiskFileUp = $param["AllowDiskFileUp"];
        }

        if (array_key_exists("AllowDiskFileDown",$param) and $param["AllowDiskFileDown"] !== null) {
            $this->AllowDiskFileDown = $param["AllowDiskFileDown"];
        }

        if (array_key_exists("AllowShellFileUp",$param) and $param["AllowShellFileUp"] !== null) {
            $this->AllowShellFileUp = $param["AllowShellFileUp"];
        }

        if (array_key_exists("AllowShellFileDown",$param) and $param["AllowShellFileDown"] !== null) {
            $this->AllowShellFileDown = $param["AllowShellFileDown"];
        }

        if (array_key_exists("AllowFileDel",$param) and $param["AllowFileDel"] !== null) {
            $this->AllowFileDel = $param["AllowFileDel"];
        }

        if (array_key_exists("ValidateFrom",$param) and $param["ValidateFrom"] !== null) {
            $this->ValidateFrom = $param["ValidateFrom"];
        }

        if (array_key_exists("ValidateTo",$param) and $param["ValidateTo"] !== null) {
            $this->ValidateTo = $param["ValidateTo"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Department",$param) and $param["Department"] !== null) {
            $this->Department = new Department();
            $this->Department->deserialize($param["Department"]);
        }
    }
}
