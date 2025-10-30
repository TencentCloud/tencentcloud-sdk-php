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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteLineage请求参数结构体
 *
 * @method array getRelations() 获取需要删除的血缘关系列表
 * @method void setRelations(array $Relations) 设置需要删除的血缘关系列表
 */
class DeleteLineageRequest extends AbstractModel
{
    /**
     * @var array 需要删除的血缘关系列表
     */
    public $Relations;

    /**
     * @param array $Relations 需要删除的血缘关系列表
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
        if (array_key_exists("Relations",$param) and $param["Relations"] !== null) {
            $this->Relations = [];
            foreach ($param["Relations"] as $key => $value){
                $obj = new LineagePair();
                $obj->deserialize($value);
                array_push($this->Relations, $obj);
            }
        }
    }
}
