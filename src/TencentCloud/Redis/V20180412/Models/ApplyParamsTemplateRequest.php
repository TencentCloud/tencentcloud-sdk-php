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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyParamsTemplate请求参数结构体
 *
 * @method array getInstanceIds() 获取实例 ID 列表，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
 * @method void setInstanceIds(array $InstanceIds) 设置实例 ID 列表，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
 * @method string getTemplateId() 获取应用的参数模板ID。
- 请通过接口 [DescribeParamTemplateInfo](https://cloud.tencent.com/document/product/239/58748) 的返回参数 **TemplateId** 获取参数模板 ID。
- 仅当参数模板版本与目标实例的架构版本一致时，操作才能成功执行。版本不匹配将触发执行错误。
 * @method void setTemplateId(string $TemplateId) 设置应用的参数模板ID。
- 请通过接口 [DescribeParamTemplateInfo](https://cloud.tencent.com/document/product/239/58748) 的返回参数 **TemplateId** 获取参数模板 ID。
- 仅当参数模板版本与目标实例的架构版本一致时，操作才能成功执行。版本不匹配将触发执行错误。
 */
class ApplyParamsTemplateRequest extends AbstractModel
{
    /**
     * @var array 实例 ID 列表，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
     */
    public $InstanceIds;

    /**
     * @var string 应用的参数模板ID。
- 请通过接口 [DescribeParamTemplateInfo](https://cloud.tencent.com/document/product/239/58748) 的返回参数 **TemplateId** 获取参数模板 ID。
- 仅当参数模板版本与目标实例的架构版本一致时，操作才能成功执行。版本不匹配将触发执行错误。
     */
    public $TemplateId;

    /**
     * @param array $InstanceIds 实例 ID 列表，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
     * @param string $TemplateId 应用的参数模板ID。
- 请通过接口 [DescribeParamTemplateInfo](https://cloud.tencent.com/document/product/239/58748) 的返回参数 **TemplateId** 获取参数模板 ID。
- 仅当参数模板版本与目标实例的架构版本一致时，操作才能成功执行。版本不匹配将触发执行错误。
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }
    }
}
