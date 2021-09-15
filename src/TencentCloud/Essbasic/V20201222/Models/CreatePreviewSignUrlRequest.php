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
namespace TencentCloud\Essbasic\V20201222\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePreviewSignUrl请求参数结构体
 *
 * @method Caller getCaller() 获取调用方信息
 * @method void setCaller(Caller $Caller) 设置调用方信息
 * @method integer getDeadline() 获取URL过期时间戳
 * @method void setDeadline(integer $Deadline) 设置URL过期时间戳
 * @method string getCatalogId() 获取目录ID。当 SignUrlType 为 CATALOG 时必填
 * @method void setCatalogId(string $CatalogId) 设置目录ID。当 SignUrlType 为 CATALOG 时必填
 * @method string getFlowId() 获取流程ID。当 SignUrlType 为 FLOW 时必填
 * @method void setFlowId(string $FlowId) 设置流程ID。当 SignUrlType 为 FLOW 时必填
 * @method string getSignUrlType() 获取签署链接类型：
1. FLOW - 单流程签署 (默认) 
2. CATALOG - 目录签署
 * @method void setSignUrlType(string $SignUrlType) 设置签署链接类型：
1. FLOW - 单流程签署 (默认) 
2. CATALOG - 目录签署
 */
class CreatePreviewSignUrlRequest extends AbstractModel
{
    /**
     * @var Caller 调用方信息
     */
    public $Caller;

    /**
     * @var integer URL过期时间戳
     */
    public $Deadline;

    /**
     * @var string 目录ID。当 SignUrlType 为 CATALOG 时必填
     */
    public $CatalogId;

    /**
     * @var string 流程ID。当 SignUrlType 为 FLOW 时必填
     */
    public $FlowId;

    /**
     * @var string 签署链接类型：
1. FLOW - 单流程签署 (默认) 
2. CATALOG - 目录签署
     */
    public $SignUrlType;

    /**
     * @param Caller $Caller 调用方信息
     * @param integer $Deadline URL过期时间戳
     * @param string $CatalogId 目录ID。当 SignUrlType 为 CATALOG 时必填
     * @param string $FlowId 流程ID。当 SignUrlType 为 FLOW 时必填
     * @param string $SignUrlType 签署链接类型：
1. FLOW - 单流程签署 (默认) 
2. CATALOG - 目录签署
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
        if (array_key_exists("Caller",$param) and $param["Caller"] !== null) {
            $this->Caller = new Caller();
            $this->Caller->deserialize($param["Caller"]);
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("CatalogId",$param) and $param["CatalogId"] !== null) {
            $this->CatalogId = $param["CatalogId"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("SignUrlType",$param) and $param["SignUrlType"] !== null) {
            $this->SignUrlType = $param["SignUrlType"];
        }
    }
}
