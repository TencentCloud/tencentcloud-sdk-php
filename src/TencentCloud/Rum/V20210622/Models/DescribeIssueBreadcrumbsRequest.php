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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIssueBreadcrumbs请求参数结构体
 *
 * @method string getAppId() 获取<p>应用 ID</p>
 * @method void setAppId(string $AppId) 设置<p>应用 ID</p>
 * @method string getIssueId() 获取<p>Issue ID</p>
 * @method void setIssueId(string $IssueId) 设置<p>Issue ID</p>
 * @method string getEventId() 获取<p>事件 ID；为空时默认回退到最新事件</p>
 * @method void setEventId(string $EventId) 设置<p>事件 ID；为空时默认回退到最新事件</p>
 * @method integer getBefore() 获取<p>向前回溯秒数，默认 60，最大 300</p>
 * @method void setBefore(integer $Before) 设置<p>向前回溯秒数，默认 60，最大 300</p>
 * @method integer getLimit() 获取<p>返回条数上限，默认 50，最大 100</p>
 * @method void setLimit(integer $Limit) 设置<p>返回条数上限，默认 50，最大 100</p>
 */
class DescribeIssueBreadcrumbsRequest extends AbstractModel
{
    /**
     * @var string <p>应用 ID</p>
     */
    public $AppId;

    /**
     * @var string <p>Issue ID</p>
     */
    public $IssueId;

    /**
     * @var string <p>事件 ID；为空时默认回退到最新事件</p>
     */
    public $EventId;

    /**
     * @var integer <p>向前回溯秒数，默认 60，最大 300</p>
     */
    public $Before;

    /**
     * @var integer <p>返回条数上限，默认 50，最大 100</p>
     */
    public $Limit;

    /**
     * @param string $AppId <p>应用 ID</p>
     * @param string $IssueId <p>Issue ID</p>
     * @param string $EventId <p>事件 ID；为空时默认回退到最新事件</p>
     * @param integer $Before <p>向前回溯秒数，默认 60，最大 300</p>
     * @param integer $Limit <p>返回条数上限，默认 50，最大 100</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("IssueId",$param) and $param["IssueId"] !== null) {
            $this->IssueId = $param["IssueId"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("Before",$param) and $param["Before"] !== null) {
            $this->Before = $param["Before"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
