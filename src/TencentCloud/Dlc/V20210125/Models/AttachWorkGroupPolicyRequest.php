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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AttachWorkGroupPolicy请求参数结构体
 *
 * @method integer getWorkGroupId() 获取<p>工作组Id</p>
 * @method void setWorkGroupId(integer $WorkGroupId) 设置<p>工作组Id</p>
 * @method array getPolicySet() 获取<p>要绑定的策略集合</p>
 * @method void setPolicySet(array $PolicySet) 设置<p>要绑定的策略集合</p>
 */
class AttachWorkGroupPolicyRequest extends AbstractModel
{
    /**
     * @var integer <p>工作组Id</p>
     */
    public $WorkGroupId;

    /**
     * @var array <p>要绑定的策略集合</p>
     */
    public $PolicySet;

    /**
     * @param integer $WorkGroupId <p>工作组Id</p>
     * @param array $PolicySet <p>要绑定的策略集合</p>
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
        if (array_key_exists("WorkGroupId",$param) and $param["WorkGroupId"] !== null) {
            $this->WorkGroupId = $param["WorkGroupId"];
        }

        if (array_key_exists("PolicySet",$param) and $param["PolicySet"] !== null) {
            $this->PolicySet = [];
            foreach ($param["PolicySet"] as $key => $value){
                $obj = new Policy();
                $obj->deserialize($value);
                array_push($this->PolicySet, $obj);
            }
        }
    }
}
