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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteTaskTemplates请求参数结构体
 *
 * @method array getTaskTemplateIds() 获取用于删除任务模板信息，最大数量上限100，环境模版ID通过调用接口 [DescribeTaskTemplates](https://cloud.tencent.com/document/api/599/15902)获取。
 * @method void setTaskTemplateIds(array $TaskTemplateIds) 设置用于删除任务模板信息，最大数量上限100，环境模版ID通过调用接口 [DescribeTaskTemplates](https://cloud.tencent.com/document/api/599/15902)获取。
 */
class DeleteTaskTemplatesRequest extends AbstractModel
{
    /**
     * @var array 用于删除任务模板信息，最大数量上限100，环境模版ID通过调用接口 [DescribeTaskTemplates](https://cloud.tencent.com/document/api/599/15902)获取。
     */
    public $TaskTemplateIds;

    /**
     * @param array $TaskTemplateIds 用于删除任务模板信息，最大数量上限100，环境模版ID通过调用接口 [DescribeTaskTemplates](https://cloud.tencent.com/document/api/599/15902)获取。
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
        if (array_key_exists("TaskTemplateIds",$param) and $param["TaskTemplateIds"] !== null) {
            $this->TaskTemplateIds = $param["TaskTemplateIds"];
        }
    }
}
