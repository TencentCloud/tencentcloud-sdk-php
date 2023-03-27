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
 * DescribeWhiteboardApplicationConfig请求参数结构体
 *
 * @method integer getSdkAppId() 获取客户的SdkAppId
 * @method void setSdkAppId(integer $SdkAppId) 设置客户的SdkAppId
 * @method array getTaskTypes() 获取需要查询的任务类型
recording: 实时录制
transcode: 文档转码
 * @method void setTaskTypes(array $TaskTypes) 设置需要查询的任务类型
recording: 实时录制
transcode: 文档转码
 * @method array getSdkAppIds() 获取需要查询配置的SdkAppId列表
 * @method void setSdkAppIds(array $SdkAppIds) 设置需要查询配置的SdkAppId列表
 */
class DescribeWhiteboardApplicationConfigRequest extends AbstractModel
{
    /**
     * @var integer 客户的SdkAppId
     */
    public $SdkAppId;

    /**
     * @var array 需要查询的任务类型
recording: 实时录制
transcode: 文档转码
     */
    public $TaskTypes;

    /**
     * @var array 需要查询配置的SdkAppId列表
     */
    public $SdkAppIds;

    /**
     * @param integer $SdkAppId 客户的SdkAppId
     * @param array $TaskTypes 需要查询的任务类型
recording: 实时录制
transcode: 文档转码
     * @param array $SdkAppIds 需要查询配置的SdkAppId列表
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

        if (array_key_exists("TaskTypes",$param) and $param["TaskTypes"] !== null) {
            $this->TaskTypes = $param["TaskTypes"];
        }

        if (array_key_exists("SdkAppIds",$param) and $param["SdkAppIds"] !== null) {
            $this->SdkAppIds = $param["SdkAppIds"];
        }
    }
}
