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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ClearEmbedToken请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getUserCorpId() 获取主账号id
 * @method void setUserCorpId(string $UserCorpId) 设置主账号id
 * @method string getScope() 获取panel , page
 * @method void setScope(string $Scope) 设置panel , page
 * @method string getPageId() 获取page id
 * @method void setPageId(string $PageId) 设置page id
 */
class ClearEmbedTokenRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 主账号id
     */
    public $UserCorpId;

    /**
     * @var string panel , page
     */
    public $Scope;

    /**
     * @var string page id
     */
    public $PageId;

    /**
     * @param string $ProjectId 项目id
     * @param string $UserCorpId 主账号id
     * @param string $Scope panel , page
     * @param string $PageId page id
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("UserCorpId",$param) and $param["UserCorpId"] !== null) {
            $this->UserCorpId = $param["UserCorpId"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("PageId",$param) and $param["PageId"] !== null) {
            $this->PageId = $param["PageId"];
        }
    }
}
