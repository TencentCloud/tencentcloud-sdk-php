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
 * DeleteApp请求参数结构体
 *
 * @method string getAppBizId() 获取应用ID，获取方法参看如何获取   [BotBizId](https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa)。
 * @method void setAppBizId(string $AppBizId) 设置应用ID，获取方法参看如何获取   [BotBizId](https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa)。
 * @method string getAppType() 获取应用类型；`"knowledge_qa"` 知识问答应用（包含标准模式 单工作流 Multi-Agent 等模式）
 * @method void setAppType(string $AppType) 设置应用类型；`"knowledge_qa"` 知识问答应用（包含标准模式 单工作流 Multi-Agent 等模式）
 */
class DeleteAppRequest extends AbstractModel
{
    /**
     * @var string 应用ID，获取方法参看如何获取   [BotBizId](https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa)。
     */
    public $AppBizId;

    /**
     * @var string 应用类型；`"knowledge_qa"` 知识问答应用（包含标准模式 单工作流 Multi-Agent 等模式）
     */
    public $AppType;

    /**
     * @param string $AppBizId 应用ID，获取方法参看如何获取   [BotBizId](https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa)。
     * @param string $AppType 应用类型；`"knowledge_qa"` 知识问答应用（包含标准模式 单工作流 Multi-Agent 等模式）
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

        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }
    }
}
