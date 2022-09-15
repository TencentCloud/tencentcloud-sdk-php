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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 商业智能服务文件类型
 *
 * @method string getFileName() 获取文件名称
 * @method void setFileName(string $FileName) 设置文件名称
 * @method string getFileType() 获取文件类型
 * @method void setFileType(string $FileType) 设置文件类型
 * @method string getFileURL() 获取文件的COS_URL
 * @method void setFileURL(string $FileURL) 设置文件的COS_URL
 * @method string getFilePath() 获取文件在服务器上的路径
 * @method void setFilePath(string $FilePath) 设置文件在服务器上的路径
 * @method integer getFileSize() 获取文件大小，单位时Byte
 * @method void setFileSize(integer $FileSize) 设置文件大小，单位时Byte
 * @method string getFileMd5() 获取文件md5值
 * @method void setFileMd5(string $FileMd5) 设置文件md5值
 * @method integer getStatus() 获取部署文件状态 1-初始化待部署 2-部署中 3-部署成功 4-部署失败
 * @method void setStatus(integer $Status) 设置部署文件状态 1-初始化待部署 2-部署中 3-部署成功 4-部署失败
 * @method string getRemark() 获取备注信息
 * @method void setRemark(string $Remark) 设置备注信息
 * @method string getCreateTime() 获取文件创建时间
 * @method void setCreateTime(string $CreateTime) 设置文件创建时间
 * @method string getStartTime() 获取文件部署开始时间
 * @method void setStartTime(string $StartTime) 设置文件部署开始时间
 * @method string getEndTime() 获取文件部署结束时间
 * @method void setEndTime(string $EndTime) 设置文件部署结束时间
 * @method string getMessage() 获取报错信息返回
 * @method void setMessage(string $Message) 设置报错信息返回
 * @method string getInstanceId() 获取商业智能实例ID
 * @method void setInstanceId(string $InstanceId) 设置商业智能实例ID
 * @method FileAction getAction() 获取动作相关信息
 * @method void setAction(FileAction $Action) 设置动作相关信息
 */
class BusinessIntelligenceFile extends AbstractModel
{
    /**
     * @var string 文件名称
     */
    public $FileName;

    /**
     * @var string 文件类型
     */
    public $FileType;

    /**
     * @var string 文件的COS_URL
     */
    public $FileURL;

    /**
     * @var string 文件在服务器上的路径
     */
    public $FilePath;

    /**
     * @var integer 文件大小，单位时Byte
     */
    public $FileSize;

    /**
     * @var string 文件md5值
     */
    public $FileMd5;

    /**
     * @var integer 部署文件状态 1-初始化待部署 2-部署中 3-部署成功 4-部署失败
     */
    public $Status;

    /**
     * @var string 备注信息
     */
    public $Remark;

    /**
     * @var string 文件创建时间
     */
    public $CreateTime;

    /**
     * @var string 文件部署开始时间
     */
    public $StartTime;

    /**
     * @var string 文件部署结束时间
     */
    public $EndTime;

    /**
     * @var string 报错信息返回
     */
    public $Message;

    /**
     * @var string 商业智能实例ID
     */
    public $InstanceId;

    /**
     * @var FileAction 动作相关信息
     */
    public $Action;

    /**
     * @param string $FileName 文件名称
     * @param string $FileType 文件类型
     * @param string $FileURL 文件的COS_URL
     * @param string $FilePath 文件在服务器上的路径
     * @param integer $FileSize 文件大小，单位时Byte
     * @param string $FileMd5 文件md5值
     * @param integer $Status 部署文件状态 1-初始化待部署 2-部署中 3-部署成功 4-部署失败
     * @param string $Remark 备注信息
     * @param string $CreateTime 文件创建时间
     * @param string $StartTime 文件部署开始时间
     * @param string $EndTime 文件部署结束时间
     * @param string $Message 报错信息返回
     * @param string $InstanceId 商业智能实例ID
     * @param FileAction $Action 动作相关信息
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("FileURL",$param) and $param["FileURL"] !== null) {
            $this->FileURL = $param["FileURL"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("FileMd5",$param) and $param["FileMd5"] !== null) {
            $this->FileMd5 = $param["FileMd5"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = new FileAction();
            $this->Action->deserialize($param["Action"]);
        }
    }
}
