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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 构件树节点信息
 *
 * @method ElementProfile getElementProfile() 获取构件概要信息
 * @method void setElementProfile(ElementProfile $ElementProfile) 设置构件概要信息
 * @method array getChildren() 获取子节点信息
 * @method void setChildren(array $Children) 设置子节点信息
 */
class ElementProfileTreeNode extends AbstractModel
{
    /**
     * @var ElementProfile 构件概要信息
     */
    public $ElementProfile;

    /**
     * @var array 子节点信息
     */
    public $Children;

    /**
     * @param ElementProfile $ElementProfile 构件概要信息
     * @param array $Children 子节点信息
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
        if (array_key_exists("ElementProfile",$param) and $param["ElementProfile"] !== null) {
            $this->ElementProfile = new ElementProfile();
            $this->ElementProfile->deserialize($param["ElementProfile"]);
        }

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new ElementProfileTreeNode();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }
    }
}
