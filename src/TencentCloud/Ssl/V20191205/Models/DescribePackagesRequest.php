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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePackages请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，默认0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认0。
 * @method integer getLimit() 获取限制数目，默认20。
 * @method void setLimit(integer $Limit) 设置限制数目，默认20。
 * @method string getStatus() 获取按状态筛选。
 * @method void setStatus(string $Status) 设置按状态筛选。
 * @method string getExpireTime() 获取按过期时间升序或降序排列。
 * @method void setExpireTime(string $ExpireTime) 设置按过期时间升序或降序排列。
 * @method string getPackageId() 获取按权益包ID搜索。
 * @method void setPackageId(string $PackageId) 设置按权益包ID搜索。
 * @method string getType() 获取按权益包类型搜索。
 * @method void setType(string $Type) 设置按权益包类型搜索。
 * @method integer getPid() 获取子产品编号
 * @method void setPid(integer $Pid) 设置子产品编号
 */
class DescribePackagesRequest extends AbstractModel
{
    /**
     * @var integer 偏移量，默认0。
     */
    public $Offset;

    /**
     * @var integer 限制数目，默认20。
     */
    public $Limit;

    /**
     * @var string 按状态筛选。
     */
    public $Status;

    /**
     * @var string 按过期时间升序或降序排列。
     */
    public $ExpireTime;

    /**
     * @var string 按权益包ID搜索。
     */
    public $PackageId;

    /**
     * @var string 按权益包类型搜索。
     */
    public $Type;

    /**
     * @var integer 子产品编号
     */
    public $Pid;

    /**
     * @param integer $Offset 偏移量，默认0。
     * @param integer $Limit 限制数目，默认20。
     * @param string $Status 按状态筛选。
     * @param string $ExpireTime 按过期时间升序或降序排列。
     * @param string $PackageId 按权益包ID搜索。
     * @param string $Type 按权益包类型搜索。
     * @param integer $Pid 子产品编号
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }
    }
}
