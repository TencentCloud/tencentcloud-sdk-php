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
namespace TencentCloud\Gwlb\V20240906\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssociateTargetGroups请求参数结构体
 *
 * @method array getAssociations() 获取绑定的关系数组。一次请求最多支持20个。
 * @method void setAssociations(array $Associations) 设置绑定的关系数组。一次请求最多支持20个。
 */
class AssociateTargetGroupsRequest extends AbstractModel
{
    /**
     * @var array 绑定的关系数组。一次请求最多支持20个。
     */
    public $Associations;

    /**
     * @param array $Associations 绑定的关系数组。一次请求最多支持20个。
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
        if (array_key_exists("Associations",$param) and $param["Associations"] !== null) {
            $this->Associations = [];
            foreach ($param["Associations"] as $key => $value){
                $obj = new TargetGroupAssociation();
                $obj->deserialize($value);
                array_push($this->Associations, $obj);
            }
        }
    }
}
