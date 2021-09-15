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
 * CreateFlowByFiles请求参数结构体
 *
 * @method Caller getCaller() 获取调用方信息
 * @method void setCaller(Caller $Caller) 设置调用方信息
 * @method FlowInfo getFlowInfo() 获取流程创建信息
 * @method void setFlowInfo(FlowInfo $FlowInfo) 设置流程创建信息
 * @method array getFileIds() 获取文件资源列表 (支持多文件)
 * @method void setFileIds(array $FileIds) 设置文件资源列表 (支持多文件)
 * @method string getCustomId() 获取自定义流程id
 * @method void setCustomId(string $CustomId) 设置自定义流程id
 */
class CreateFlowByFilesRequest extends AbstractModel
{
    /**
     * @var Caller 调用方信息
     */
    public $Caller;

    /**
     * @var FlowInfo 流程创建信息
     */
    public $FlowInfo;

    /**
     * @var array 文件资源列表 (支持多文件)
     */
    public $FileIds;

    /**
     * @var string 自定义流程id
     */
    public $CustomId;

    /**
     * @param Caller $Caller 调用方信息
     * @param FlowInfo $FlowInfo 流程创建信息
     * @param array $FileIds 文件资源列表 (支持多文件)
     * @param string $CustomId 自定义流程id
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

        if (array_key_exists("FlowInfo",$param) and $param["FlowInfo"] !== null) {
            $this->FlowInfo = new FlowInfo();
            $this->FlowInfo->deserialize($param["FlowInfo"]);
        }

        if (array_key_exists("FileIds",$param) and $param["FileIds"] !== null) {
            $this->FileIds = $param["FileIds"];
        }

        if (array_key_exists("CustomId",$param) and $param["CustomId"] !== null) {
            $this->CustomId = $param["CustomId"];
        }
    }
}
