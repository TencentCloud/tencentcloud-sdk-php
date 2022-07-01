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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListLogMessageByCondition请求参数结构体
 *
 * @method string getUserStoreId() 获取用户池ID
 * @method void setUserStoreId(string $UserStoreId) 设置用户池ID
 * @method Pageable getPageable() 获取分页数据
 * @method void setPageable(Pageable $Pageable) 设置分页数据
 * @method integer getStartTime() 获取开始时间，时间戳精确到毫秒
 * @method void setStartTime(integer $StartTime) 设置开始时间，时间戳精确到毫秒
 * @method array getFilters() 获取Key可选值为events

<li> **events** </li>	Values为["SIGNUP", "USER_UPDATE", "USER_DELETE", "USER_CREATE", "ACCOUNT_LINKING"] 中的一个或多个
 * @method void setFilters(array $Filters) 设置Key可选值为events

<li> **events** </li>	Values为["SIGNUP", "USER_UPDATE", "USER_DELETE", "USER_CREATE", "ACCOUNT_LINKING"] 中的一个或多个
 */
class ListLogMessageByConditionRequest extends AbstractModel
{
    /**
     * @var string 用户池ID
     */
    public $UserStoreId;

    /**
     * @var Pageable 分页数据
     */
    public $Pageable;

    /**
     * @var integer 开始时间，时间戳精确到毫秒
     */
    public $StartTime;

    /**
     * @var array Key可选值为events

<li> **events** </li>	Values为["SIGNUP", "USER_UPDATE", "USER_DELETE", "USER_CREATE", "ACCOUNT_LINKING"] 中的一个或多个
     */
    public $Filters;

    /**
     * @param string $UserStoreId 用户池ID
     * @param Pageable $Pageable 分页数据
     * @param integer $StartTime 开始时间，时间戳精确到毫秒
     * @param array $Filters Key可选值为events

<li> **events** </li>	Values为["SIGNUP", "USER_UPDATE", "USER_DELETE", "USER_CREATE", "ACCOUNT_LINKING"] 中的一个或多个
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
        if (array_key_exists("UserStoreId",$param) and $param["UserStoreId"] !== null) {
            $this->UserStoreId = $param["UserStoreId"];
        }

        if (array_key_exists("Pageable",$param) and $param["Pageable"] !== null) {
            $this->Pageable = new Pageable();
            $this->Pageable->deserialize($param["Pageable"]);
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
