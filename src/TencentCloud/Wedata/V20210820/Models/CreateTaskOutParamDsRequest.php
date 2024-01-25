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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTaskOutParamDs请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getRequestFromSource() 获取请求来源，WEB 前端；CLIENT 客户端
 * @method void setRequestFromSource(string $RequestFromSource) 设置请求来源，WEB 前端；CLIENT 客户端
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method string getParamKey() 获取参数key
 * @method void setParamKey(string $ParamKey) 设置参数key
 * @method string getParamDesc() 获取参数描述
 * @method void setParamDesc(string $ParamDesc) 设置参数描述
 * @method string getParamDefine() 获取参数定义
 * @method void setParamDefine(string $ParamDefine) 设置参数定义
 */
class CreateTaskOutParamDsRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 请求来源，WEB 前端；CLIENT 客户端
     */
    public $RequestFromSource;

    /**
     * @var string 任务id
     */
    public $TaskId;

    /**
     * @var string 参数key
     */
    public $ParamKey;

    /**
     * @var string 参数描述
     */
    public $ParamDesc;

    /**
     * @var string 参数定义
     */
    public $ParamDefine;

    /**
     * @param string $ProjectId 项目ID
     * @param string $RequestFromSource 请求来源，WEB 前端；CLIENT 客户端
     * @param string $TaskId 任务id
     * @param string $ParamKey 参数key
     * @param string $ParamDesc 参数描述
     * @param string $ParamDefine 参数定义
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

        if (array_key_exists("RequestFromSource",$param) and $param["RequestFromSource"] !== null) {
            $this->RequestFromSource = $param["RequestFromSource"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ParamKey",$param) and $param["ParamKey"] !== null) {
            $this->ParamKey = $param["ParamKey"];
        }

        if (array_key_exists("ParamDesc",$param) and $param["ParamDesc"] !== null) {
            $this->ParamDesc = $param["ParamDesc"];
        }

        if (array_key_exists("ParamDefine",$param) and $param["ParamDefine"] !== null) {
            $this->ParamDefine = $param["ParamDefine"];
        }
    }
}
