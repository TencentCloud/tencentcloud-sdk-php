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
 * ModifyIssueStatus请求参数结构体
 *
 * @method string getAppId() 获取<p>应用 ID</p>
 * @method void setAppId(string $AppId) 设置<p>应用 ID</p>
 * @method string getIssueId() 获取<p>Issue ID</p>
 * @method void setIssueId(string $IssueId) 设置<p>Issue ID</p>
 * @method string getIssueAction() 获取<p>状态动作，可选值：resolve、ignore、reopen</p>
 * @method void setIssueAction(string $IssueAction) 设置<p>状态动作，可选值：resolve、ignore、reopen</p>
 * @method string getResolvedRelease() 获取<p>解决版本；当 IssueAction=resolve 时可传，不传则默认使用 latest_release</p>
 * @method void setResolvedRelease(string $ResolvedRelease) 设置<p>解决版本；当 IssueAction=resolve 时可传，不传则默认使用 latest_release</p>
 */
class ModifyIssueStatusRequest extends AbstractModel
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
     * @var string <p>状态动作，可选值：resolve、ignore、reopen</p>
     */
    public $IssueAction;

    /**
     * @var string <p>解决版本；当 IssueAction=resolve 时可传，不传则默认使用 latest_release</p>
     */
    public $ResolvedRelease;

    /**
     * @param string $AppId <p>应用 ID</p>
     * @param string $IssueId <p>Issue ID</p>
     * @param string $IssueAction <p>状态动作，可选值：resolve、ignore、reopen</p>
     * @param string $ResolvedRelease <p>解决版本；当 IssueAction=resolve 时可传，不传则默认使用 latest_release</p>
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

        if (array_key_exists("IssueAction",$param) and $param["IssueAction"] !== null) {
            $this->IssueAction = $param["IssueAction"];
        }

        if (array_key_exists("ResolvedRelease",$param) and $param["ResolvedRelease"] !== null) {
            $this->ResolvedRelease = $param["ResolvedRelease"];
        }
    }
}
