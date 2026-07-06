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
namespace TencentCloud\Fwm\V20250611\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyVpcAclRuleSequence请求参数结构体
 *
 * @method string getGroupId() 获取规则组ID
 * @method void setGroupId(string $GroupId) 设置规则组ID
 * @method array getSequences() 获取序号调整列表
 * @method void setSequences(array $Sequences) 设置序号调整列表
 */
class ModifyVpcAclRuleSequenceRequest extends AbstractModel
{
    /**
     * @var string 规则组ID
     */
    public $GroupId;

    /**
     * @var array 序号调整列表
     */
    public $Sequences;

    /**
     * @param string $GroupId 规则组ID
     * @param array $Sequences 序号调整列表
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Sequences",$param) and $param["Sequences"] !== null) {
            $this->Sequences = [];
            foreach ($param["Sequences"] as $key => $value){
                $obj = new SequenceIndex();
                $obj->deserialize($value);
                array_push($this->Sequences, $obj);
            }
        }
    }
}
