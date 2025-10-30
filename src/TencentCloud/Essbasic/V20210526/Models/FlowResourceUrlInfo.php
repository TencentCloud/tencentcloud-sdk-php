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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 流程对应资源链接信息
 *
 * @method string getFlowId() 获取合同流程的ID
 * @method void setFlowId(string $FlowId) 设置合同流程的ID
 * @method array getResourceUrlInfos() 获取对应的合同流程的PDF下载链接
 * @method void setResourceUrlInfos(array $ResourceUrlInfos) 设置对应的合同流程的PDF下载链接
 */
class FlowResourceUrlInfo extends AbstractModel
{
    /**
     * @var string 合同流程的ID
     */
    public $FlowId;

    /**
     * @var array 对应的合同流程的PDF下载链接
     */
    public $ResourceUrlInfos;

    /**
     * @param string $FlowId 合同流程的ID
     * @param array $ResourceUrlInfos 对应的合同流程的PDF下载链接
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

        if (array_key_exists("ResourceUrlInfos",$param) and $param["ResourceUrlInfos"] !== null) {
            $this->ResourceUrlInfos = [];
            foreach ($param["ResourceUrlInfos"] as $key => $value){
                $obj = new ResourceUrlInfo();
                $obj->deserialize($value);
                array_push($this->ResourceUrlInfos, $obj);
            }
        }
    }
}
