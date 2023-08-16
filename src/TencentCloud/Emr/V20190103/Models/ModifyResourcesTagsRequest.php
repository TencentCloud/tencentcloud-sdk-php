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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyResourcesTags请求参数结构体
 *
 * @method string getModifyType() 获取标签类型，取值Cluster或者Node
 * @method void setModifyType(string $ModifyType) 设置标签类型，取值Cluster或者Node
 * @method array getModifyResourceTagsInfoList() 获取标签信息
 * @method void setModifyResourceTagsInfoList(array $ModifyResourceTagsInfoList) 设置标签信息
 */
class ModifyResourcesTagsRequest extends AbstractModel
{
    /**
     * @var string 标签类型，取值Cluster或者Node
     */
    public $ModifyType;

    /**
     * @var array 标签信息
     */
    public $ModifyResourceTagsInfoList;

    /**
     * @param string $ModifyType 标签类型，取值Cluster或者Node
     * @param array $ModifyResourceTagsInfoList 标签信息
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
        if (array_key_exists("ModifyType",$param) and $param["ModifyType"] !== null) {
            $this->ModifyType = $param["ModifyType"];
        }

        if (array_key_exists("ModifyResourceTagsInfoList",$param) and $param["ModifyResourceTagsInfoList"] !== null) {
            $this->ModifyResourceTagsInfoList = [];
            foreach ($param["ModifyResourceTagsInfoList"] as $key => $value){
                $obj = new ModifyResourceTags();
                $obj->deserialize($value);
                array_push($this->ModifyResourceTagsInfoList, $obj);
            }
        }
    }
}
