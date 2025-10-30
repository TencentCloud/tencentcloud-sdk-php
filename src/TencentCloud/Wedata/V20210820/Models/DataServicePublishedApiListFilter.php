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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取数据服务API的发布态信息列表过滤条件
 *
 * @method string getPathUrl() 获取请求路径关键词筛选
 * @method void setPathUrl(string $PathUrl) 设置请求路径关键词筛选
 * @method string getKeyword() 获取Api名称关键词筛选
 * @method void setKeyword(string $Keyword) 设置Api名称关键词筛选
 * @method array getAuthTypes() 获取Api认证方式筛选 0:免认证 1:应用认证
 * @method void setAuthTypes(array $AuthTypes) 设置Api认证方式筛选 0:免认证 1:应用认证
 * @method array getApiStatus() 获取服务Api状态 1:已上线  3:已下线
 * @method void setApiStatus(array $ApiStatus) 设置服务Api状态 1:已上线  3:已下线
 * @method array getConfigTypes() 获取API配置方式 0:向导、1、脚本、2、注册Api
 * @method void setConfigTypes(array $ConfigTypes) 设置API配置方式 0:向导、1、脚本、2、注册Api
 */
class DataServicePublishedApiListFilter extends AbstractModel
{
    /**
     * @var string 请求路径关键词筛选
     */
    public $PathUrl;

    /**
     * @var string Api名称关键词筛选
     */
    public $Keyword;

    /**
     * @var array Api认证方式筛选 0:免认证 1:应用认证
     */
    public $AuthTypes;

    /**
     * @var array 服务Api状态 1:已上线  3:已下线
     */
    public $ApiStatus;

    /**
     * @var array API配置方式 0:向导、1、脚本、2、注册Api
     */
    public $ConfigTypes;

    /**
     * @param string $PathUrl 请求路径关键词筛选
     * @param string $Keyword Api名称关键词筛选
     * @param array $AuthTypes Api认证方式筛选 0:免认证 1:应用认证
     * @param array $ApiStatus 服务Api状态 1:已上线  3:已下线
     * @param array $ConfigTypes API配置方式 0:向导、1、脚本、2、注册Api
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
        if (array_key_exists("PathUrl",$param) and $param["PathUrl"] !== null) {
            $this->PathUrl = $param["PathUrl"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("AuthTypes",$param) and $param["AuthTypes"] !== null) {
            $this->AuthTypes = $param["AuthTypes"];
        }

        if (array_key_exists("ApiStatus",$param) and $param["ApiStatus"] !== null) {
            $this->ApiStatus = $param["ApiStatus"];
        }

        if (array_key_exists("ConfigTypes",$param) and $param["ConfigTypes"] !== null) {
            $this->ConfigTypes = $param["ConfigTypes"];
        }
    }
}
