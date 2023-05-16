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
 * CreateAcl请求参数结构体
 *
 * @method string getName() 获取权限名称，最大32字符，不能包含空白字符
 * @method void setName(string $Name) 设置权限名称，最大32字符，不能包含空白字符
 * @method boolean getAllowDiskRedirect() 获取是否开启磁盘映射
 * @method void setAllowDiskRedirect(boolean $AllowDiskRedirect) 设置是否开启磁盘映射
 * @method boolean getAllowAnyAccount() 获取是否允许任意账号登录
 * @method void setAllowAnyAccount(boolean $AllowAnyAccount) 设置是否允许任意账号登录
 * @method boolean getAllowClipFileUp() 获取是否开启剪贴板文件上行
 * @method void setAllowClipFileUp(boolean $AllowClipFileUp) 设置是否开启剪贴板文件上行
 * @method boolean getAllowClipFileDown() 获取是否开启剪贴板文件下行
 * @method void setAllowClipFileDown(boolean $AllowClipFileDown) 设置是否开启剪贴板文件下行
 * @method boolean getAllowClipTextUp() 获取是否开启剪贴板文本（含图片）上行
 * @method void setAllowClipTextUp(boolean $AllowClipTextUp) 设置是否开启剪贴板文本（含图片）上行
 * @method boolean getAllowClipTextDown() 获取是否开启剪贴板文本（含图片）下行
 * @method void setAllowClipTextDown(boolean $AllowClipTextDown) 设置是否开启剪贴板文本（含图片）下行
 * @method boolean getAllowFileUp() 获取是否开启 SFTP 文件上传
 * @method void setAllowFileUp(boolean $AllowFileUp) 设置是否开启 SFTP 文件上传
 * @method integer getMaxFileUpSize() 获取文件传输上传大小限制（预留参数，目前暂未使用）
 * @method void setMaxFileUpSize(integer $MaxFileUpSize) 设置文件传输上传大小限制（预留参数，目前暂未使用）
 * @method boolean getAllowFileDown() 获取是否开启 SFTP 文件下载
 * @method void setAllowFileDown(boolean $AllowFileDown) 设置是否开启 SFTP 文件下载
 * @method integer getMaxFileDownSize() 获取文件传输下载大小限制（预留参数，目前暂未使用）
 * @method void setMaxFileDownSize(integer $MaxFileDownSize) 设置文件传输下载大小限制（预留参数，目前暂未使用）
 * @method array getUserIdSet() 获取关联的用户ID集合
 * @method void setUserIdSet(array $UserIdSet) 设置关联的用户ID集合
 * @method array getUserGroupIdSet() 获取关联的用户组ID
 * @method void setUserGroupIdSet(array $UserGroupIdSet) 设置关联的用户组ID
 * @method array getDeviceIdSet() 获取关联的资产ID集合
 * @method void setDeviceIdSet(array $DeviceIdSet) 设置关联的资产ID集合
 * @method array getDeviceGroupIdSet() 获取关联的资产组ID
 * @method void setDeviceGroupIdSet(array $DeviceGroupIdSet) 设置关联的资产组ID
 * @method array getAccountSet() 获取关联的账号
 * @method void setAccountSet(array $AccountSet) 设置关联的账号
 * @method array getCmdTemplateIdSet() 获取关联的高危命令模板ID
 * @method void setCmdTemplateIdSet(array $CmdTemplateIdSet) 设置关联的高危命令模板ID
 * @method array getACTemplateIdSet() 获取关联高危DB模板ID
 * @method void setACTemplateIdSet(array $ACTemplateIdSet) 设置关联高危DB模板ID
 * @method boolean getAllowDiskFileUp() 获取是否开启rdp磁盘映射文件上传
 * @method void setAllowDiskFileUp(boolean $AllowDiskFileUp) 设置是否开启rdp磁盘映射文件上传
 * @method boolean getAllowDiskFileDown() 获取是否开启rdp磁盘映射文件下载
 * @method void setAllowDiskFileDown(boolean $AllowDiskFileDown) 设置是否开启rdp磁盘映射文件下载
 * @method boolean getAllowShellFileUp() 获取是否开启rz sz文件上传
 * @method void setAllowShellFileUp(boolean $AllowShellFileUp) 设置是否开启rz sz文件上传
 * @method boolean getAllowShellFileDown() 获取是否开启rz sz文件下载
 * @method void setAllowShellFileDown(boolean $AllowShellFileDown) 设置是否开启rz sz文件下载
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
 * @method string getDepartmentId() 获取访问权限所属部门的ID
 * @method void setDepartmentId(string $DepartmentId) 设置访问权限所属部门的ID
 */
class CreateAclRequest extends AbstractModel
{
    /**
     * @var string 权限名称，最大32字符，不能包含空白字符
     */
    public $Name;

    /**
     * @var boolean 是否开启磁盘映射
     */
    public $AllowDiskRedirect;

    /**
     * @var boolean 是否允许任意账号登录
     */
    public $AllowAnyAccount;

    /**
     * @var boolean 是否开启剪贴板文件上行
     */
    public $AllowClipFileUp;

    /**
     * @var boolean 是否开启剪贴板文件下行
     */
    public $AllowClipFileDown;

    /**
     * @var boolean 是否开启剪贴板文本（含图片）上行
     */
    public $AllowClipTextUp;

    /**
     * @var boolean 是否开启剪贴板文本（含图片）下行
     */
    public $AllowClipTextDown;

    /**
     * @var boolean 是否开启 SFTP 文件上传
     */
    public $AllowFileUp;

    /**
     * @var integer 文件传输上传大小限制（预留参数，目前暂未使用）
     */
    public $MaxFileUpSize;

    /**
     * @var boolean 是否开启 SFTP 文件下载
     */
    public $AllowFileDown;

    /**
     * @var integer 文件传输下载大小限制（预留参数，目前暂未使用）
     */
    public $MaxFileDownSize;

    /**
     * @var array 关联的用户ID集合
     */
    public $UserIdSet;

    /**
     * @var array 关联的用户组ID
     */
    public $UserGroupIdSet;

    /**
     * @var array 关联的资产ID集合
     */
    public $DeviceIdSet;

    /**
     * @var array 关联的资产组ID
     */
    public $DeviceGroupIdSet;

    /**
     * @var array 关联的账号
     */
    public $AccountSet;

    /**
     * @var array 关联的高危命令模板ID
     */
    public $CmdTemplateIdSet;

    /**
     * @var array 关联高危DB模板ID
     */
    public $ACTemplateIdSet;

    /**
     * @var boolean 是否开启rdp磁盘映射文件上传
     */
    public $AllowDiskFileUp;

    /**
     * @var boolean 是否开启rdp磁盘映射文件下载
     */
    public $AllowDiskFileDown;

    /**
     * @var boolean 是否开启rz sz文件上传
     */
    public $AllowShellFileUp;

    /**
     * @var boolean 是否开启rz sz文件下载
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
     * @var string 访问权限所属部门的ID
     */
    public $DepartmentId;

    /**
     * @param string $Name 权限名称，最大32字符，不能包含空白字符
     * @param boolean $AllowDiskRedirect 是否开启磁盘映射
     * @param boolean $AllowAnyAccount 是否允许任意账号登录
     * @param boolean $AllowClipFileUp 是否开启剪贴板文件上行
     * @param boolean $AllowClipFileDown 是否开启剪贴板文件下行
     * @param boolean $AllowClipTextUp 是否开启剪贴板文本（含图片）上行
     * @param boolean $AllowClipTextDown 是否开启剪贴板文本（含图片）下行
     * @param boolean $AllowFileUp 是否开启 SFTP 文件上传
     * @param integer $MaxFileUpSize 文件传输上传大小限制（预留参数，目前暂未使用）
     * @param boolean $AllowFileDown 是否开启 SFTP 文件下载
     * @param integer $MaxFileDownSize 文件传输下载大小限制（预留参数，目前暂未使用）
     * @param array $UserIdSet 关联的用户ID集合
     * @param array $UserGroupIdSet 关联的用户组ID
     * @param array $DeviceIdSet 关联的资产ID集合
     * @param array $DeviceGroupIdSet 关联的资产组ID
     * @param array $AccountSet 关联的账号
     * @param array $CmdTemplateIdSet 关联的高危命令模板ID
     * @param array $ACTemplateIdSet 关联高危DB模板ID
     * @param boolean $AllowDiskFileUp 是否开启rdp磁盘映射文件上传
     * @param boolean $AllowDiskFileDown 是否开启rdp磁盘映射文件下载
     * @param boolean $AllowShellFileUp 是否开启rz sz文件上传
     * @param boolean $AllowShellFileDown 是否开启rz sz文件下载
     * @param boolean $AllowFileDel 是否开启 SFTP 文件删除
     * @param string $ValidateFrom 访问权限生效时间，如:"2021-09-22T00:00:00+00:00"
生效、失效时间不填则访问权限长期有效
     * @param string $ValidateTo 访问权限失效时间，如:"2021-09-23T00:00:00+00:00"
生效、失效时间不填则访问权限长期有效
     * @param string $DepartmentId 访问权限所属部门的ID
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

        if (array_key_exists("AllowDiskRedirect",$param) and $param["AllowDiskRedirect"] !== null) {
            $this->AllowDiskRedirect = $param["AllowDiskRedirect"];
        }

        if (array_key_exists("AllowAnyAccount",$param) and $param["AllowAnyAccount"] !== null) {
            $this->AllowAnyAccount = $param["AllowAnyAccount"];
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

        if (array_key_exists("UserIdSet",$param) and $param["UserIdSet"] !== null) {
            $this->UserIdSet = $param["UserIdSet"];
        }

        if (array_key_exists("UserGroupIdSet",$param) and $param["UserGroupIdSet"] !== null) {
            $this->UserGroupIdSet = $param["UserGroupIdSet"];
        }

        if (array_key_exists("DeviceIdSet",$param) and $param["DeviceIdSet"] !== null) {
            $this->DeviceIdSet = $param["DeviceIdSet"];
        }

        if (array_key_exists("DeviceGroupIdSet",$param) and $param["DeviceGroupIdSet"] !== null) {
            $this->DeviceGroupIdSet = $param["DeviceGroupIdSet"];
        }

        if (array_key_exists("AccountSet",$param) and $param["AccountSet"] !== null) {
            $this->AccountSet = $param["AccountSet"];
        }

        if (array_key_exists("CmdTemplateIdSet",$param) and $param["CmdTemplateIdSet"] !== null) {
            $this->CmdTemplateIdSet = $param["CmdTemplateIdSet"];
        }

        if (array_key_exists("ACTemplateIdSet",$param) and $param["ACTemplateIdSet"] !== null) {
            $this->ACTemplateIdSet = $param["ACTemplateIdSet"];
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

        if (array_key_exists("DepartmentId",$param) and $param["DepartmentId"] !== null) {
            $this->DepartmentId = $param["DepartmentId"];
        }
    }
}
