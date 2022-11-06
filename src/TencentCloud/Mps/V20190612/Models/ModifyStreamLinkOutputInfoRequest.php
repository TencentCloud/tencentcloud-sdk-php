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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyStreamLinkOutputInfo请求参数结构体
 *
 * @method string getFlowId() 获取流Id。
 * @method void setFlowId(string $FlowId) 设置流Id。
 * @method ModifyOutputInfo getOutput() 获取需要修改的Output配置。
 * @method void setOutput(ModifyOutputInfo $Output) 设置需要修改的Output配置。
 */
class ModifyStreamLinkOutputInfoRequest extends AbstractModel
{
    /**
     * @var string 流Id。
     */
    public $FlowId;

    /**
     * @var ModifyOutputInfo 需要修改的Output配置。
     */
    public $Output;

    /**
     * @param string $FlowId 流Id。
     * @param ModifyOutputInfo $Output 需要修改的Output配置。
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new ModifyOutputInfo();
            $this->Output->deserialize($param["Output"]);
        }
    }
}
