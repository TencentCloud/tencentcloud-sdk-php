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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePagedLogConfigList请求参数结构体
 *
 * @method string getEnvironmentId() 获取环境 ID
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境 ID
 * @method string getApplicationId() 获取应用 ID
 * @method void setApplicationId(string $ApplicationId) 设置应用 ID
 * @method string getApplicationName() 获取应用名
 * @method void setApplicationName(string $ApplicationName) 设置应用名
 * @method string getName() 获取规则名
 * @method void setName(string $Name) 设置规则名
 * @method integer getLimit() 获取分页大小，默认 20
 * @method void setLimit(integer $Limit) 设置分页大小，默认 20
 * @method string getContinueToken() 获取翻页游标
 * @method void setContinueToken(string $ContinueToken) 设置翻页游标
 */
class DescribePagedLogConfigListRequest extends AbstractModel
{
    /**
     * @var string 环境 ID
     */
    public $EnvironmentId;

    /**
     * @var string 应用 ID
     */
    public $ApplicationId;

    /**
     * @var string 应用名
     */
    public $ApplicationName;

    /**
     * @var string 规则名
     */
    public $Name;

    /**
     * @var integer 分页大小，默认 20
     */
    public $Limit;

    /**
     * @var string 翻页游标
     */
    public $ContinueToken;

    /**
     * @param string $EnvironmentId 环境 ID
     * @param string $ApplicationId 应用 ID
     * @param string $ApplicationName 应用名
     * @param string $Name 规则名
     * @param integer $Limit 分页大小，默认 20
     * @param string $ContinueToken 翻页游标
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ContinueToken",$param) and $param["ContinueToken"] !== null) {
            $this->ContinueToken = $param["ContinueToken"];
        }
    }
}
