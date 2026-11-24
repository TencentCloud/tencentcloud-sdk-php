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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApproveTicket请求参数结构体
 *
 * @method integer getId() 获取工单唯一id，数据库索引id
 * @method void setId(integer $Id) 设置工单唯一id，数据库索引id
 * @method integer getStatus() 获取2-审批通过，4-审批驳回
 * @method void setStatus(integer $Status) 设置2-审批通过，4-审批驳回
 * @method string getApproveDesc() 获取审批意见
 * @method void setApproveDesc(string $ApproveDesc) 设置审批意见
 * @method integer getApplyTimeVersion() 获取申请时间戳，单位微妙
 * @method void setApplyTimeVersion(integer $ApplyTimeVersion) 设置申请时间戳，单位微妙
 * @method string getStartTime() 获取审批权限工单时，设置的有效期开始时间，默认为当前时间
 * @method void setStartTime(string $StartTime) 设置审批权限工单时，设置的有效期开始时间，默认为当前时间
 * @method string getEndTime() 获取审批权限工单时，设置的有效期的结束时间，默认有限期为1天
 * @method void setEndTime(string $EndTime) 设置审批权限工单时，设置的有效期的结束时间，默认有限期为1天
 * @method boolean getAllowDiskRedirect() 获取是否开启磁盘映射
 * @method void setAllowDiskRedirect(boolean $AllowDiskRedirect) 设置是否开启磁盘映射
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
 * @method boolean getAllowAccessCredential() 获取是否允许使用访问串，默认允许
 * @method void setAllowAccessCredential(boolean $AllowAccessCredential) 设置是否允许使用访问串，默认允许
 * @method array getCmdTemplateIdSet() 获取关联的高危命令模板ID
 * @method void setCmdTemplateIdSet(array $CmdTemplateIdSet) 设置关联的高危命令模板ID
 * @method array getACTemplateIdSet() 获取关联高危DB模板ID
 * @method void setACTemplateIdSet(array $ACTemplateIdSet) 设置关联高危DB模板ID
 * @method string getDepartmentId() 获取部门id
 * @method void setDepartmentId(string $DepartmentId) 设置部门id
 * @method boolean getAllowKeyboardLogger() 获取是否允许键盘记录
 * @method void setAllowKeyboardLogger(boolean $AllowKeyboardLogger) 设置是否允许键盘记录
 */
class ApproveTicketRequest extends AbstractModel
{
    /**
     * @var integer 工单唯一id，数据库索引id
     */
    public $Id;

    /**
     * @var integer 2-审批通过，4-审批驳回
     */
    public $Status;

    /**
     * @var string 审批意见
     */
    public $ApproveDesc;

    /**
     * @var integer 申请时间戳，单位微妙
     */
    public $ApplyTimeVersion;

    /**
     * @var string 审批权限工单时，设置的有效期开始时间，默认为当前时间
     */
    public $StartTime;

    /**
     * @var string 审批权限工单时，设置的有效期的结束时间，默认有限期为1天
     */
    public $EndTime;

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
     * @var boolean 是否允许使用访问串，默认允许
     */
    public $AllowAccessCredential;

    /**
     * @var array 关联的高危命令模板ID
     */
    public $CmdTemplateIdSet;

    /**
     * @var array 关联高危DB模板ID
     */
    public $ACTemplateIdSet;

    /**
     * @var string 部门id
     */
    public $DepartmentId;

    /**
     * @var boolean 是否允许键盘记录
     */
    public $AllowKeyboardLogger;

    /**
     * @param integer $Id 工单唯一id，数据库索引id
     * @param integer $Status 2-审批通过，4-审批驳回
     * @param string $ApproveDesc 审批意见
     * @param integer $ApplyTimeVersion 申请时间戳，单位微妙
     * @param string $StartTime 审批权限工单时，设置的有效期开始时间，默认为当前时间
     * @param string $EndTime 审批权限工单时，设置的有效期的结束时间，默认有限期为1天
     * @param boolean $AllowDiskRedirect 是否开启磁盘映射
     * @param boolean $AllowClipFileUp 是否开启剪贴板文件上行
     * @param boolean $AllowClipFileDown 是否开启剪贴板文件下行
     * @param boolean $AllowClipTextUp 是否开启剪贴板文本（含图片）上行
     * @param boolean $AllowClipTextDown 是否开启剪贴板文本（含图片）下行
     * @param boolean $AllowFileUp 是否开启 SFTP 文件上传
     * @param integer $MaxFileUpSize 文件传输上传大小限制（预留参数，目前暂未使用）
     * @param boolean $AllowFileDown 是否开启 SFTP 文件下载
     * @param integer $MaxFileDownSize 文件传输下载大小限制（预留参数，目前暂未使用）
     * @param boolean $AllowDiskFileUp 是否开启rdp磁盘映射文件上传
     * @param boolean $AllowDiskFileDown 是否开启rdp磁盘映射文件下载
     * @param boolean $AllowShellFileUp 是否开启rz sz文件上传
     * @param boolean $AllowShellFileDown 是否开启rz sz文件下载
     * @param boolean $AllowFileDel 是否开启 SFTP 文件删除
     * @param boolean $AllowAccessCredential 是否允许使用访问串，默认允许
     * @param array $CmdTemplateIdSet 关联的高危命令模板ID
     * @param array $ACTemplateIdSet 关联高危DB模板ID
     * @param string $DepartmentId 部门id
     * @param boolean $AllowKeyboardLogger 是否允许键盘记录
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ApproveDesc",$param) and $param["ApproveDesc"] !== null) {
            $this->ApproveDesc = $param["ApproveDesc"];
        }

        if (array_key_exists("ApplyTimeVersion",$param) and $param["ApplyTimeVersion"] !== null) {
            $this->ApplyTimeVersion = $param["ApplyTimeVersion"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
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

        if (array_key_exists("AllowAccessCredential",$param) and $param["AllowAccessCredential"] !== null) {
            $this->AllowAccessCredential = $param["AllowAccessCredential"];
        }

        if (array_key_exists("CmdTemplateIdSet",$param) and $param["CmdTemplateIdSet"] !== null) {
            $this->CmdTemplateIdSet = $param["CmdTemplateIdSet"];
        }

        if (array_key_exists("ACTemplateIdSet",$param) and $param["ACTemplateIdSet"] !== null) {
            $this->ACTemplateIdSet = $param["ACTemplateIdSet"];
        }

        if (array_key_exists("DepartmentId",$param) and $param["DepartmentId"] !== null) {
            $this->DepartmentId = $param["DepartmentId"];
        }

        if (array_key_exists("AllowKeyboardLogger",$param) and $param["AllowKeyboardLogger"] !== null) {
            $this->AllowKeyboardLogger = $param["AllowKeyboardLogger"];
        }
    }
}
