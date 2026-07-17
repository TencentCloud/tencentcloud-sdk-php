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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 推理 API Token 信息。
 *
 * @method string getTokenId() 获取推理 API Token ID。
 * @method void setTokenId(string $TokenId) 设置推理 API Token ID。
 * @method string getName() 获取推理 API Token 名称。
 * @method void setName(string $Name) 设置推理 API Token 名称。
 * @method string getContent() 获取推理 API Token 内容。
 * @method void setContent(string $Content) 设置推理 API Token 内容。
 * @method string getCreateTime() 获取创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setCreateTime(string $CreateTime) 设置创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 */
class InferenceAPIToken extends AbstractModel
{
    /**
     * @var string 推理 API Token ID。
     */
    public $TokenId;

    /**
     * @var string 推理 API Token 名称。
     */
    public $Name;

    /**
     * @var string 推理 API Token 内容。
     */
    public $Content;

    /**
     * @var string 创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $CreateTime;

    /**
     * @param string $TokenId 推理 API Token ID。
     * @param string $Name 推理 API Token 名称。
     * @param string $Content 推理 API Token 内容。
     * @param string $CreateTime 创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
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
        if (array_key_exists("TokenId",$param) and $param["TokenId"] !== null) {
            $this->TokenId = $param["TokenId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
