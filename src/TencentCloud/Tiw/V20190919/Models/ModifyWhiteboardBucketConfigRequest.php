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
 * ModifyWhiteboardBucketConfig请求参数结构体
 *
 * @method integer getSdkAppId() 获取客户的SdkAppId
 * @method void setSdkAppId(integer $SdkAppId) 设置客户的SdkAppId
 * @method string getTaskType() 获取需要查询的任务类型
recording: 实时录制
transcode: 文档转码
 * @method void setTaskType(string $TaskType) 设置需要查询的任务类型
recording: 实时录制
transcode: 文档转码
 * @method string getBucketName() 获取COS存储桶名字
 * @method void setBucketName(string $BucketName) 设置COS存储桶名字
 * @method string getBucketLocation() 获取COS存储桶地域
 * @method void setBucketLocation(string $BucketLocation) 设置COS存储桶地域
 * @method string getBucketPrefix() 获取存储桶里资源前缀
 * @method void setBucketPrefix(string $BucketPrefix) 设置存储桶里资源前缀
 * @method string getResultDomain() 获取返回Url域名
 * @method void setResultDomain(string $ResultDomain) 设置返回Url域名
 */
class ModifyWhiteboardBucketConfigRequest extends AbstractModel
{
    /**
     * @var integer 客户的SdkAppId
     */
    public $SdkAppId;

    /**
     * @var string 需要查询的任务类型
recording: 实时录制
transcode: 文档转码
     */
    public $TaskType;

    /**
     * @var string COS存储桶名字
     */
    public $BucketName;

    /**
     * @var string COS存储桶地域
     */
    public $BucketLocation;

    /**
     * @var string 存储桶里资源前缀
     */
    public $BucketPrefix;

    /**
     * @var string 返回Url域名
     */
    public $ResultDomain;

    /**
     * @param integer $SdkAppId 客户的SdkAppId
     * @param string $TaskType 需要查询的任务类型
recording: 实时录制
transcode: 文档转码
     * @param string $BucketName COS存储桶名字
     * @param string $BucketLocation COS存储桶地域
     * @param string $BucketPrefix 存储桶里资源前缀
     * @param string $ResultDomain 返回Url域名
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
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
    }
}
