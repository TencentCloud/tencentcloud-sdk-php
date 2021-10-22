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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 流程对应资源链接信息
 *
 * @method string getFlowId() 获取流程对应Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowId(string $FlowId) 设置流程对应Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResourceUrlInfos() 获取流程对应资源链接信息数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceUrlInfos(array $ResourceUrlInfos) 设置流程对应资源链接信息数组
注意：此字段可能返回 null，表示取不到有效值。
 */
class FlowResourceUrlInfo extends AbstractModel
{
    /**
     * @var string 流程对应Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowId;

    /**
     * @var array 流程对应资源链接信息数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceUrlInfos;

    /**
     * @param string $FlowId 流程对应Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResourceUrlInfos 流程对应资源链接信息数组
注意：此字段可能返回 null，表示取不到有效值。
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
