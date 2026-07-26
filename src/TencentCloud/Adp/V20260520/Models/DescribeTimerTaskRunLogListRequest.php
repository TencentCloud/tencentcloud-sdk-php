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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTimerTaskRunLogList请求参数结构体
 *
 * @method string getSpaceId() 获取工作空间ID
 * @method void setSpaceId(string $SpaceId) 设置工作空间ID
 * @method string getTimerId() 获取定时任务ID，必须按任务维度查询
 * @method void setTimerId(string $TimerId) 设置定时任务ID，必须按任务维度查询
 * @method array getFilterList() 获取过滤条件，支持: Status(执行状态，值为枚举int); Unread(仅未读，值为"true"/"false")
 * @method void setFilterList(array $FilterList) 设置过滤条件，支持: Status(执行状态，值为枚举int); Unread(仅未读，值为"true"/"false")
 * @method string getLoginSubAccountUin() 获取<p>子用户Uin</p>
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) 设置<p>子用户Uin</p>
 * @method string getLoginUin() 获取<p>主用户Uin</p>
 * @method void setLoginUin(string $LoginUin) 设置<p>主用户Uin</p>
 * @method integer getPageNumber() 获取页码，从0开始
 * @method void setPageNumber(integer $PageNumber) 设置页码，从0开始
 * @method integer getPageSize() 获取每页数目，最大100
 * @method void setPageSize(integer $PageSize) 设置每页数目，最大100
 */
class DescribeTimerTaskRunLogListRequest extends AbstractModel
{
    /**
     * @var string 工作空间ID
     */
    public $SpaceId;

    /**
     * @var string 定时任务ID，必须按任务维度查询
     */
    public $TimerId;

    /**
     * @var array 过滤条件，支持: Status(执行状态，值为枚举int); Unread(仅未读，值为"true"/"false")
     */
    public $FilterList;

    /**
     * @var string <p>子用户Uin</p>
     */
    public $LoginSubAccountUin;

    /**
     * @var string <p>主用户Uin</p>
     */
    public $LoginUin;

    /**
     * @var integer 页码，从0开始
     */
    public $PageNumber;

    /**
     * @var integer 每页数目，最大100
     */
    public $PageSize;

    /**
     * @param string $SpaceId 工作空间ID
     * @param string $TimerId 定时任务ID，必须按任务维度查询
     * @param array $FilterList 过滤条件，支持: Status(执行状态，值为枚举int); Unread(仅未读，值为"true"/"false")
     * @param string $LoginSubAccountUin <p>子用户Uin</p>
     * @param string $LoginUin <p>主用户Uin</p>
     * @param integer $PageNumber 页码，从0开始
     * @param integer $PageSize 每页数目，最大100
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
        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("TimerId",$param) and $param["TimerId"] !== null) {
            $this->TimerId = $param["TimerId"];
        }

        if (array_key_exists("FilterList",$param) and $param["FilterList"] !== null) {
            $this->FilterList = [];
            foreach ($param["FilterList"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->FilterList, $obj);
            }
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
