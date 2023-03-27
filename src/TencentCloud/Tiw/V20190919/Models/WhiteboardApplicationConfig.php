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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 白板应用配置，包括资源存储桶，域名，回调地址，回调密钥等
 *
 * @method string getTaskType() 获取任务类型

recording: 实时录制
transcode: 文档转码
 * @method void setTaskType(string $TaskType) 设置任务类型

recording: 实时录制
transcode: 文档转码
 * @method string getBucketName() 获取存储桶名字
 * @method void setBucketName(string $BucketName) 设置存储桶名字
 * @method string getBucketLocation() 获取存储桶地域
 * @method void setBucketLocation(string $BucketLocation) 设置存储桶地域
 * @method string getBucketPrefix() 获取资源在存储桶中的前缀
 * @method void setBucketPrefix(string $BucketPrefix) 设置资源在存储桶中的前缀
 * @method string getResultDomain() 获取目标CDN域名
 * @method void setResultDomain(string $ResultDomain) 设置目标CDN域名
 * @method string getCallback() 获取回调地址
 * @method void setCallback(string $Callback) 设置回调地址
 * @method string getCallbackKey() 获取回调鉴权密钥
 * @method void setCallbackKey(string $CallbackKey) 设置回调鉴权密钥
 * @method integer getSdkAppId() 获取配置的应用SdkAppId
 * @method void setSdkAppId(integer $SdkAppId) 设置配置的应用SdkAppId
 * @method string getAdminUserId() 获取IM管理员UserId
 * @method void setAdminUserId(string $AdminUserId) 设置IM管理员UserId
 * @method string getAdminUserSig() 获取IM管理员UserSig
 * @method void setAdminUserSig(string $AdminUserSig) 设置IM管理员UserSig
 */
class WhiteboardApplicationConfig extends AbstractModel
{
    /**
     * @var string 任务类型

recording: 实时录制
transcode: 文档转码
     */
    public $TaskType;

    /**
     * @var string 存储桶名字
     */
    public $BucketName;

    /**
     * @var string 存储桶地域
     */
    public $BucketLocation;

    /**
     * @var string 资源在存储桶中的前缀
     */
    public $BucketPrefix;

    /**
     * @var string 目标CDN域名
     */
    public $ResultDomain;

    /**
     * @var string 回调地址
     */
    public $Callback;

    /**
     * @var string 回调鉴权密钥
     */
    public $CallbackKey;

    /**
     * @var integer 配置的应用SdkAppId
     */
    public $SdkAppId;

    /**
     * @var string IM管理员UserId
     */
    public $AdminUserId;

    /**
     * @var string IM管理员UserSig
     */
    public $AdminUserSig;

    /**
     * @param string $TaskType 任务类型

recording: 实时录制
transcode: 文档转码
     * @param string $BucketName 存储桶名字
     * @param string $BucketLocation 存储桶地域
     * @param string $BucketPrefix 资源在存储桶中的前缀
     * @param string $ResultDomain 目标CDN域名
     * @param string $Callback 回调地址
     * @param string $CallbackKey 回调鉴权密钥
     * @param integer $SdkAppId 配置的应用SdkAppId
     * @param string $AdminUserId IM管理员UserId
     * @param string $AdminUserSig IM管理员UserSig
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("BucketLocation",$param) and $param["BucketLocation"] !== null) {
            $this->BucketLocation = $param["BucketLocation"];
        }

        if (array_key_exists("BucketPrefix",$param) and $param["BucketPrefix"] !== null) {
            $this->BucketPrefix = $param["BucketPrefix"];
        }

        if (array_key_exists("ResultDomain",$param) and $param["ResultDomain"] !== null) {
            $this->ResultDomain = $param["ResultDomain"];
        }

        if (array_key_exists("Callback",$param) and $param["Callback"] !== null) {
            $this->Callback = $param["Callback"];
        }

        if (array_key_exists("CallbackKey",$param) and $param["CallbackKey"] !== null) {
            $this->CallbackKey = $param["CallbackKey"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("AdminUserId",$param) and $param["AdminUserId"] !== null) {
            $this->AdminUserId = $param["AdminUserId"];
        }

        if (array_key_exists("AdminUserSig",$param) and $param["AdminUserSig"] !== null) {
            $this->AdminUserSig = $param["AdminUserSig"];
        }
    }
}
