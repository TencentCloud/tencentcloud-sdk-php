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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteCosRecharge请求参数结构体
 *
 * @method string getId() 获取COS导入配置Id。
- 通过[获取投递任务列表](https://cloud.tencent.com/document/api/614/58745)获取COS导入配置Id。
 * @method void setId(string $Id) 设置COS导入配置Id。
- 通过[获取投递任务列表](https://cloud.tencent.com/document/api/614/58745)获取COS导入配置Id。
 * @method string getTopicId() 获取日志主题Id。
-  通过[获取日志主题列表](https://cloud.tencent.com/document/api/614/56454)获取日志主题Id。
 * @method void setTopicId(string $TopicId) 设置日志主题Id。
-  通过[获取日志主题列表](https://cloud.tencent.com/document/api/614/56454)获取日志主题Id。
 */
class DeleteCosRechargeRequest extends AbstractModel
{
    /**
     * @var string COS导入配置Id。
- 通过[获取投递任务列表](https://cloud.tencent.com/document/api/614/58745)获取COS导入配置Id。
     */
    public $Id;

    /**
     * @var string 日志主题Id。
-  通过[获取日志主题列表](https://cloud.tencent.com/document/api/614/56454)获取日志主题Id。
     */
    public $TopicId;

    /**
     * @param string $Id COS导入配置Id。
- 通过[获取投递任务列表](https://cloud.tencent.com/document/api/614/58745)获取COS导入配置Id。
     * @param string $TopicId 日志主题Id。
-  通过[获取日志主题列表](https://cloud.tencent.com/document/api/614/56454)获取日志主题Id。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }
    }
}
