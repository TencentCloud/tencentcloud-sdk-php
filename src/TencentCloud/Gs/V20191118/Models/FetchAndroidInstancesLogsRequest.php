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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * FetchAndroidInstancesLogs请求参数结构体
 *
 * @method array getAndroidInstanceIds() 获取安卓实例 ID 列表
 * @method void setAndroidInstanceIds(array $AndroidInstanceIds) 设置安卓实例 ID 列表
 * @method string getBucketName() 获取cos 桶名称
 * @method void setBucketName(string $BucketName) 设置cos 桶名称
 * @method string getBucketRegion() 获取cos 桶区域
 * @method void setBucketRegion(string $BucketRegion) 设置cos 桶区域
 * @method string getBucketDirectory() 获取cos 桶目录，默认为 /log/
 * @method void setBucketDirectory(string $BucketDirectory) 设置cos 桶目录，默认为 /log/
 * @method integer getRecentDays() 获取下载最近几天的日志，默认值为 1
 * @method void setRecentDays(integer $RecentDays) 设置下载最近几天的日志，默认值为 1
 */
class FetchAndroidInstancesLogsRequest extends AbstractModel
{
    /**
     * @var array 安卓实例 ID 列表
     */
    public $AndroidInstanceIds;

    /**
     * @var string cos 桶名称
     */
    public $BucketName;

    /**
     * @var string cos 桶区域
     */
    public $BucketRegion;

    /**
     * @var string cos 桶目录，默认为 /log/
     */
    public $BucketDirectory;

    /**
     * @var integer 下载最近几天的日志，默认值为 1
     */
    public $RecentDays;

    /**
     * @param array $AndroidInstanceIds 安卓实例 ID 列表
     * @param string $BucketName cos 桶名称
     * @param string $BucketRegion cos 桶区域
     * @param string $BucketDirectory cos 桶目录，默认为 /log/
     * @param integer $RecentDays 下载最近几天的日志，默认值为 1
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
        if (array_key_exists("AndroidInstanceIds",$param) and $param["AndroidInstanceIds"] !== null) {
            $this->AndroidInstanceIds = $param["AndroidInstanceIds"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("BucketRegion",$param) and $param["BucketRegion"] !== null) {
            $this->BucketRegion = $param["BucketRegion"];
        }

        if (array_key_exists("BucketDirectory",$param) and $param["BucketDirectory"] !== null) {
            $this->BucketDirectory = $param["BucketDirectory"];
        }

        if (array_key_exists("RecentDays",$param) and $param["RecentDays"] !== null) {
            $this->RecentDays = $param["RecentDays"];
        }
    }
}
