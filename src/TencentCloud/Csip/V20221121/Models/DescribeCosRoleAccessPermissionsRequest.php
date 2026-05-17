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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCosRoleAccessPermissions请求参数结构体
 *
 * @method integer getRelAppId() 获取存储桶所属appid
 * @method void setRelAppId(integer $RelAppId) 设置存储桶所属appid
 * @method string getBucketName() 获取存储桶名
 * @method void setBucketName(string $BucketName) 设置存储桶名
 * @method Filter getFilter() 获取过滤条件
 * @method void setFilter(Filter $Filter) 设置过滤条件
 */
class DescribeCosRoleAccessPermissionsRequest extends AbstractModel
{
    /**
     * @var integer 存储桶所属appid
     */
    public $RelAppId;

    /**
     * @var string 存储桶名
     */
    public $BucketName;

    /**
     * @var Filter 过滤条件
     */
    public $Filter;

    /**
     * @param integer $RelAppId 存储桶所属appid
     * @param string $BucketName 存储桶名
     * @param Filter $Filter 过滤条件
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
        if (array_key_exists("RelAppId",$param) and $param["RelAppId"] !== null) {
            $this->RelAppId = $param["RelAppId"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }
    }
}
