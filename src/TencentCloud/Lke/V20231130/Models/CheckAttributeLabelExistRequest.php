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
 * CheckAttributeLabelExist请求参数结构体
 *
 * @method string getBotBizId() 获取应用ID，获取方法参看如何获取[BotBizId](https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa)
 * @method void setBotBizId(string $BotBizId) 设置应用ID，获取方法参看如何获取[BotBizId](https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa)
 * @method string getLabelName() 获取标签名称
 * @method void setLabelName(string $LabelName) 设置标签名称
 * @method string getAttributeBizId() 获取标签ID
 * @method void setAttributeBizId(string $AttributeBizId) 设置标签ID
 * @method string getLoginUin() 获取登录用户主账号(集成商模式必填)
 * @method void setLoginUin(string $LoginUin) 设置登录用户主账号(集成商模式必填)
 * @method string getLoginSubAccountUin() 获取登录用户子账号(集成商模式必填)
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) 设置登录用户子账号(集成商模式必填)
 * @method string getLastLabelBizId() 获取最后一个标签ID。用于滚动加载：是一种分批、滚动式的存在性检查机制。客户端需要持续调用接口，并每次传入上一次返回的最后一个记录的ID，直到接口明确返回“存在”或“已检查全部数据且不存在”为止。
 * @method void setLastLabelBizId(string $LastLabelBizId) 设置最后一个标签ID。用于滚动加载：是一种分批、滚动式的存在性检查机制。客户端需要持续调用接口，并每次传入上一次返回的最后一个记录的ID，直到接口明确返回“存在”或“已检查全部数据且不存在”为止。
 */
class CheckAttributeLabelExistRequest extends AbstractModel
{
    /**
     * @var string 应用ID，获取方法参看如何获取[BotBizId](https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa)
     */
    public $BotBizId;

    /**
     * @var string 标签名称
     */
    public $LabelName;

    /**
     * @var string 标签ID
     */
    public $AttributeBizId;

    /**
     * @var string 登录用户主账号(集成商模式必填)
     */
    public $LoginUin;

    /**
     * @var string 登录用户子账号(集成商模式必填)
     */
    public $LoginSubAccountUin;

    /**
     * @var string 最后一个标签ID。用于滚动加载：是一种分批、滚动式的存在性检查机制。客户端需要持续调用接口，并每次传入上一次返回的最后一个记录的ID，直到接口明确返回“存在”或“已检查全部数据且不存在”为止。
     */
    public $LastLabelBizId;

    /**
     * @param string $BotBizId 应用ID，获取方法参看如何获取[BotBizId](https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa)
     * @param string $LabelName 标签名称
     * @param string $AttributeBizId 标签ID
     * @param string $LoginUin 登录用户主账号(集成商模式必填)
     * @param string $LoginSubAccountUin 登录用户子账号(集成商模式必填)
     * @param string $LastLabelBizId 最后一个标签ID。用于滚动加载：是一种分批、滚动式的存在性检查机制。客户端需要持续调用接口，并每次传入上一次返回的最后一个记录的ID，直到接口明确返回“存在”或“已检查全部数据且不存在”为止。
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

        if (array_key_exists("LabelName",$param) and $param["LabelName"] !== null) {
            $this->LabelName = $param["LabelName"];
        }

        if (array_key_exists("AttributeBizId",$param) and $param["AttributeBizId"] !== null) {
            $this->AttributeBizId = $param["AttributeBizId"];
        }

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }

        if (array_key_exists("LastLabelBizId",$param) and $param["LastLabelBizId"] !== null) {
            $this->LastLabelBizId = $param["LastLabelBizId"];
        }
    }
}
