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
 * DescribeCosRoleAccessPermission请求参数结构体
 *
 * @method integer getRelAppId() 获取关联的appid
 * @method void setRelAppId(integer $RelAppId) 设置关联的appid
 * @method string getRelRoleId() 获取需要查看的角色id
 * @method void setRelRoleId(string $RelRoleId) 设置需要查看的角色id
 * @method string getBucketName() 获取桶名
 * @method void setBucketName(string $BucketName) 设置桶名
 * @method Filter getFilter() 获取过滤器
 * @method void setFilter(Filter $Filter) 设置过滤器
 */
class DescribeCosRoleAccessPermissionRequest extends AbstractModel
{
    /**
     * @var integer 关联的appid
     */
    public $RelAppId;

    /**
     * @var string 需要查看的角色id
     */
    public $RelRoleId;

    /**
     * @var string 桶名
     */
    public $BucketName;

    /**
     * @var Filter 过滤器
     */
    public $Filter;

    /**
     * @param integer $RelAppId 关联的appid
     * @param string $RelRoleId 需要查看的角色id
     * @param string $BucketName 桶名
     * @param Filter $Filter 过滤器
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

        if (array_key_exists("RelRoleId",$param) and $param["RelRoleId"] !== null) {
            $this->RelRoleId = $param["RelRoleId"];
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
