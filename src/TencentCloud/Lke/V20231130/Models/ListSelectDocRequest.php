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
 * ListSelectDoc请求参数结构体
 *
 * @method string getBotBizId() 获取应用ID,获取方法参看如何获取[BotBizId](https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa)
 * @method void setBotBizId(string $BotBizId) 设置应用ID,获取方法参看如何获取[BotBizId](https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa)
 * @method string getFileName() 获取文档名称。可通过文档名称检索支持生成问答的文档，不支持xlsx、xls、csv格式
 * @method void setFileName(string $FileName) 设置文档名称。可通过文档名称检索支持生成问答的文档，不支持xlsx、xls、csv格式
 * @method array getStatus() 获取文档状态筛选。文档状态对应码为7 审核中、8 审核失败、10 待发布、11 发布中、12 已发布、13 学习中、14 学习失败 20 已过期。其中仅状态为10 待发布、12 已发布的文档支持生成问答（未填写时默认值为空数组）
 * @method void setStatus(array $Status) 设置文档状态筛选。文档状态对应码为7 审核中、8 审核失败、10 待发布、11 发布中、12 已发布、13 学习中、14 学习失败 20 已过期。其中仅状态为10 待发布、12 已发布的文档支持生成问答（未填写时默认值为空数组）
 */
class ListSelectDocRequest extends AbstractModel
{
    /**
     * @var string 应用ID,获取方法参看如何获取[BotBizId](https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa)
     */
    public $BotBizId;

    /**
     * @var string 文档名称。可通过文档名称检索支持生成问答的文档，不支持xlsx、xls、csv格式
     */
    public $FileName;

    /**
     * @var array 文档状态筛选。文档状态对应码为7 审核中、8 审核失败、10 待发布、11 发布中、12 已发布、13 学习中、14 学习失败 20 已过期。其中仅状态为10 待发布、12 已发布的文档支持生成问答（未填写时默认值为空数组）
     */
    public $Status;

    /**
     * @param string $BotBizId 应用ID,获取方法参看如何获取[BotBizId](https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa)
     * @param string $FileName 文档名称。可通过文档名称检索支持生成问答的文档，不支持xlsx、xls、csv格式
     * @param array $Status 文档状态筛选。文档状态对应码为7 审核中、8 审核失败、10 待发布、11 发布中、12 已发布、13 学习中、14 学习失败 20 已过期。其中仅状态为10 待发布、12 已发布的文档支持生成问答（未填写时默认值为空数组）
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
        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
