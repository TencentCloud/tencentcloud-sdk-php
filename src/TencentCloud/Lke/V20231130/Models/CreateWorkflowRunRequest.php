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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateWorkflowRun请求参数结构体
 *
 * @method string getAppBizId() 获取应用ID
 * @method void setAppBizId(string $AppBizId) 设置应用ID
 * @method integer getRunEnv() 获取运行环境。0: 测试环境； 1: 正式环境
 * @method void setRunEnv(integer $RunEnv) 设置运行环境。0: 测试环境； 1: 正式环境
 * @method string getQuery() 获取用户输入的内容
 * @method void setQuery(string $Query) 设置用户输入的内容
 * @method array getCustomVariables() 获取API参数配置
 * @method void setCustomVariables(array $CustomVariables) 设置API参数配置
 */
class CreateWorkflowRunRequest extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $AppBizId;

    /**
     * @var integer 运行环境。0: 测试环境； 1: 正式环境
     */
    public $RunEnv;

    /**
     * @var string 用户输入的内容
     */
    public $Query;

    /**
     * @var array API参数配置
     */
    public $CustomVariables;

    /**
     * @param string $AppBizId 应用ID
     * @param integer $RunEnv 运行环境。0: 测试环境； 1: 正式环境
     * @param string $Query 用户输入的内容
     * @param array $CustomVariables API参数配置
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
        if (array_key_exists("AppBizId",$param) and $param["AppBizId"] !== null) {
            $this->AppBizId = $param["AppBizId"];
        }

        if (array_key_exists("RunEnv",$param) and $param["RunEnv"] !== null) {
            $this->RunEnv = $param["RunEnv"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("CustomVariables",$param) and $param["CustomVariables"] !== null) {
            $this->CustomVariables = [];
            foreach ($param["CustomVariables"] as $key => $value){
                $obj = new CustomVariable();
                $obj->deserialize($value);
                array_push($this->CustomVariables, $obj);
            }
        }
    }
}
