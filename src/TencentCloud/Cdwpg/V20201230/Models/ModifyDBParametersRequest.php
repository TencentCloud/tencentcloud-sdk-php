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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBParameters请求参数结构体
 *
 * @method string getInstanceId() 获取Instance 名字
 * @method void setInstanceId(string $InstanceId) 设置Instance 名字
 * @method array getNodeConfigParams() 获取node参数
 * @method void setNodeConfigParams(array $NodeConfigParams) 设置node参数
 */
class ModifyDBParametersRequest extends AbstractModel
{
    /**
     * @var string Instance 名字
     */
    public $InstanceId;

    /**
     * @var array node参数
     */
    public $NodeConfigParams;

    /**
     * @param string $InstanceId Instance 名字
     * @param array $NodeConfigParams node参数
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("NodeConfigParams",$param) and $param["NodeConfigParams"] !== null) {
            $this->NodeConfigParams = [];
            foreach ($param["NodeConfigParams"] as $key => $value){
                $obj = new NodeConfigParams();
                $obj->deserialize($value);
                array_push($this->NodeConfigParams, $obj);
            }
        }
    }
}
