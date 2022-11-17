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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetAuthoritiesList请求参数结构体
 *
 * @method integer getPageNumber() 获取页码，从1开始
 * @method void setPageNumber(integer $PageNumber) 设置页码，从1开始
 * @method integer getPageSize() 获取每页大小
 * @method void setPageSize(integer $PageSize) 设置每页大小
 * @method string getDid() 获取Did信息
 * @method void setDid(string $Did) 设置Did信息
 * @method integer getStatus() 获取权威认证 1:已认证，2:未认证
 * @method void setStatus(integer $Status) 设置权威认证 1:已认证，2:未认证
 */
class GetAuthoritiesListRequest extends AbstractModel
{
    /**
     * @var integer 页码，从1开始
     */
    public $PageNumber;

    /**
     * @var integer 每页大小
     */
    public $PageSize;

    /**
     * @var string Did信息
     */
    public $Did;

    /**
     * @var integer 权威认证 1:已认证，2:未认证
     */
    public $Status;

    /**
     * @param integer $PageNumber 页码，从1开始
     * @param integer $PageSize 每页大小
     * @param string $Did Did信息
     * @param integer $Status 权威认证 1:已认证，2:未认证
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Did",$param) and $param["Did"] !== null) {
            $this->Did = $param["Did"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
