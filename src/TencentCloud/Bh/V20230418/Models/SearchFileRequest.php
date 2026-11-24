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
 * SearchFile请求参数结构体
 *
 * @method string getStartTime() 获取<p>查询开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>查询开始时间</p>
 * @method string getEndTime() 获取<p>查询结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>查询结束时间</p>
 * @method string getUserName() 获取<p>用户名</p>
 * @method void setUserName(string $UserName) 设置<p>用户名</p>
 * @method string getRealName() 获取<p>姓名</p>
 * @method void setRealName(string $RealName) 设置<p>姓名</p>
 * @method string getInstanceId() 获取<p>资产ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>资产ID</p>
 * @method string getDeviceName() 获取<p>资产名称</p>
 * @method void setDeviceName(string $DeviceName) 设置<p>资产名称</p>
 * @method string getPublicIp() 获取<p>资产公网IP</p>
 * @method void setPublicIp(string $PublicIp) 设置<p>资产公网IP</p>
 * @method string getPrivateIp() 获取<p>资产内网IP</p>
 * @method void setPrivateIp(string $PrivateIp) 设置<p>资产内网IP</p>
 * @method array getMethod() 获取<p>操作类型：1 - 文件上传，2 - 文件下载，3 - 文件删除，4 - 文件(夹)移动，5 - 文件(夹)重命名，6 - 新建文件夹，9 - 删除文件夹</p>
 * @method void setMethod(array $Method) 设置<p>操作类型：1 - 文件上传，2 - 文件下载，3 - 文件删除，4 - 文件(夹)移动，5 - 文件(夹)重命名，6 - 新建文件夹，9 - 删除文件夹</p>
 * @method string getFileName() 获取<p>可填写路径名或文件（夹）名</p>
 * @method void setFileName(string $FileName) 设置<p>可填写路径名或文件（夹）名</p>
 * @method array getAuditAction() 获取<p>1-已放行，  2-已阻断</p>
 * @method void setAuditAction(array $AuditAction) 设置<p>1-已放行，  2-已阻断</p>
 * @method integer getLimit() 获取<p>分页的页内记录数，默认为20，最大200</p>
 * @method void setLimit(integer $Limit) 设置<p>分页的页内记录数，默认为20，最大200</p>
 * @method integer getOffset() 获取<p>分页偏移位置，默认值为0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移位置，默认值为0</p>
 */
class SearchFileRequest extends AbstractModel
{
    /**
     * @var string <p>查询开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>查询结束时间</p>
     */
    public $EndTime;

    /**
     * @var string <p>用户名</p>
     */
    public $UserName;

    /**
     * @var string <p>姓名</p>
     */
    public $RealName;

    /**
     * @var string <p>资产ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>资产名称</p>
     */
    public $DeviceName;

    /**
     * @var string <p>资产公网IP</p>
     */
    public $PublicIp;

    /**
     * @var string <p>资产内网IP</p>
     */
    public $PrivateIp;

    /**
     * @var array <p>操作类型：1 - 文件上传，2 - 文件下载，3 - 文件删除，4 - 文件(夹)移动，5 - 文件(夹)重命名，6 - 新建文件夹，9 - 删除文件夹</p>
     */
    public $Method;

    /**
     * @var string <p>可填写路径名或文件（夹）名</p>
     */
    public $FileName;

    /**
     * @var array <p>1-已放行，  2-已阻断</p>
     */
    public $AuditAction;

    /**
     * @var integer <p>分页的页内记录数，默认为20，最大200</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页偏移位置，默认值为0</p>
     */
    public $Offset;

    /**
     * @param string $StartTime <p>查询开始时间</p>
     * @param string $EndTime <p>查询结束时间</p>
     * @param string $UserName <p>用户名</p>
     * @param string $RealName <p>姓名</p>
     * @param string $InstanceId <p>资产ID</p>
     * @param string $DeviceName <p>资产名称</p>
     * @param string $PublicIp <p>资产公网IP</p>
     * @param string $PrivateIp <p>资产内网IP</p>
     * @param array $Method <p>操作类型：1 - 文件上传，2 - 文件下载，3 - 文件删除，4 - 文件(夹)移动，5 - 文件(夹)重命名，6 - 新建文件夹，9 - 删除文件夹</p>
     * @param string $FileName <p>可填写路径名或文件（夹）名</p>
     * @param array $AuditAction <p>1-已放行，  2-已阻断</p>
     * @param integer $Limit <p>分页的页内记录数，默认为20，最大200</p>
     * @param integer $Offset <p>分页偏移位置，默认值为0</p>
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("RealName",$param) and $param["RealName"] !== null) {
            $this->RealName = $param["RealName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("AuditAction",$param) and $param["AuditAction"] !== null) {
            $this->AuditAction = $param["AuditAction"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
