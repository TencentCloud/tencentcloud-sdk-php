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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFileVersion请求参数结构体
 *
 * @method string getResourceId() 获取脚本资源id
 * @method void setResourceId(string $ResourceId) 设置脚本资源id
 * @method string getCreateTime() 获取版本创建时间，ISO8601格式
 * @method void setCreateTime(string $CreateTime) 设置版本创建时间，ISO8601格式
 * @method string getUserName() 获取版本创建人姓名
 * @method void setUserName(string $UserName) 设置版本创建人姓名
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getRemotePath() 获取文件远程存储路径
 * @method void setRemotePath(string $RemotePath) 设置文件远程存储路径
 * @method string getObjectRegion() 获取文件在对象存储的地域
 * @method void setObjectRegion(string $ObjectRegion) 设置文件在对象存储的地域
 * @method string getObjectBucketName() 获取文件在对象存储的桶名
 * @method void setObjectBucketName(string $ObjectBucketName) 设置文件在对象存储的桶名
 * @method string getRequestFromSource() 获取请求来源，WEB 前端；CLIENT 客户端
 * @method void setRequestFromSource(string $RequestFromSource) 设置请求来源，WEB 前端；CLIENT 客户端
 * @method string getDescription() 获取版本变更描述
 * @method void setDescription(string $Description) 设置版本变更描述
 * @method string getTaskId() 获取编排空间提交版本的任务id
 * @method void setTaskId(string $TaskId) 设置编排空间提交版本的任务id
 * @method string getTaskVersionNum() 获取编排空间提交版本的任务版本累加号
 * @method void setTaskVersionNum(string $TaskVersionNum) 设置编排空间提交版本的任务版本累加号
 * @method string getTaskVersionId() 获取编排空间提交版本的任务版本id,格式yyyyMMddHHmmssSSS
 * @method void setTaskVersionId(string $TaskVersionId) 设置编排空间提交版本的任务版本id,格式yyyyMMddHHmmssSSS
 */
class CreateFileVersionRequest extends AbstractModel
{
    /**
     * @var string 脚本资源id
     */
    public $ResourceId;

    /**
     * @var string 版本创建时间，ISO8601格式
     */
    public $CreateTime;

    /**
     * @var string 版本创建人姓名
     */
    public $UserName;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 文件远程存储路径
     */
    public $RemotePath;

    /**
     * @var string 文件在对象存储的地域
     */
    public $ObjectRegion;

    /**
     * @var string 文件在对象存储的桶名
     */
    public $ObjectBucketName;

    /**
     * @var string 请求来源，WEB 前端；CLIENT 客户端
     */
    public $RequestFromSource;

    /**
     * @var string 版本变更描述
     */
    public $Description;

    /**
     * @var string 编排空间提交版本的任务id
     */
    public $TaskId;

    /**
     * @var string 编排空间提交版本的任务版本累加号
     */
    public $TaskVersionNum;

    /**
     * @var string 编排空间提交版本的任务版本id,格式yyyyMMddHHmmssSSS
     */
    public $TaskVersionId;

    /**
     * @param string $ResourceId 脚本资源id
     * @param string $CreateTime 版本创建时间，ISO8601格式
     * @param string $UserName 版本创建人姓名
     * @param string $ProjectId 项目id
     * @param string $RemotePath 文件远程存储路径
     * @param string $ObjectRegion 文件在对象存储的地域
     * @param string $ObjectBucketName 文件在对象存储的桶名
     * @param string $RequestFromSource 请求来源，WEB 前端；CLIENT 客户端
     * @param string $Description 版本变更描述
     * @param string $TaskId 编排空间提交版本的任务id
     * @param string $TaskVersionNum 编排空间提交版本的任务版本累加号
     * @param string $TaskVersionId 编排空间提交版本的任务版本id,格式yyyyMMddHHmmssSSS
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RemotePath",$param) and $param["RemotePath"] !== null) {
            $this->RemotePath = $param["RemotePath"];
        }

        if (array_key_exists("ObjectRegion",$param) and $param["ObjectRegion"] !== null) {
            $this->ObjectRegion = $param["ObjectRegion"];
        }

        if (array_key_exists("ObjectBucketName",$param) and $param["ObjectBucketName"] !== null) {
            $this->ObjectBucketName = $param["ObjectBucketName"];
        }

        if (array_key_exists("RequestFromSource",$param) and $param["RequestFromSource"] !== null) {
            $this->RequestFromSource = $param["RequestFromSource"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskVersionNum",$param) and $param["TaskVersionNum"] !== null) {
            $this->TaskVersionNum = $param["TaskVersionNum"];
        }

        if (array_key_exists("TaskVersionId",$param) and $param["TaskVersionId"] !== null) {
            $this->TaskVersionId = $param["TaskVersionId"];
        }
    }
}
