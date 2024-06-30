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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryForbidPlayChannelList请求参数结构体
 *
 * @method string getUserId() 获取子用户uin，也可以是主用户的uin
 * @method void setUserId(string $UserId) 设置子用户uin，也可以是主用户的uin
 * @method integer getPageSize() 获取每页最大数量，最大为200，超过按照200返回
 * @method void setPageSize(integer $PageSize) 设置每页最大数量，最大为200，超过按照200返回
 * @method integer getPageNumber() 获取第几页
 * @method void setPageNumber(integer $PageNumber) 设置第几页
 */
class QueryForbidPlayChannelListRequest extends AbstractModel
{
    /**
     * @var string 子用户uin，也可以是主用户的uin
     */
    public $UserId;

    /**
     * @var integer 每页最大数量，最大为200，超过按照200返回
     */
    public $PageSize;

    /**
     * @var integer 第几页
     */
    public $PageNumber;

    /**
     * @param string $UserId 子用户uin，也可以是主用户的uin
     * @param integer $PageSize 每页最大数量，最大为200，超过按照200返回
     * @param integer $PageNumber 第几页
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }
    }
}
