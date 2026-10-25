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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 更新location的操作单元，通过 UpdateType 指定操作类型
 *
 * @method string getUpdateType() 获取更新类型，取值：modify_location_name、modify_location_comment、modify_location_properties
 * @method void setUpdateType(string $UpdateType) 设置更新类型，取值：modify_location_name、modify_location_comment、modify_location_properties
 * @method string getNewComment() 获取新的备注，可选，UpdateType 为 modify_location_comment 时使用
 * @method void setNewComment(string $NewComment) 设置新的备注，可选，UpdateType 为 modify_location_comment 时使用
 * @method array getSetProperties() 获取新增/修改的属性键值对列表，可选，UpdateType 为 modify_location_properties 时使用
 * @method void setSetProperties(array $SetProperties) 设置新增/修改的属性键值对列表，可选，UpdateType 为 modify_location_properties 时使用
 * @method array getRemoveProperties() 获取要移除的属性key列表，可选，UpdateType 为 modify_location_properties 时使用
 * @method void setRemoveProperties(array $RemoveProperties) 设置要移除的属性key列表，可选，UpdateType 为 modify_location_properties 时使用
 * @method string getNewName() 获取新的名称，可选，UpdateType 为 modify_location_name 时使用
 * @method void setNewName(string $NewName) 设置新的名称，可选，UpdateType 为 modify_location_name 时使用
 */
class LocationUpdate extends AbstractModel
{
    /**
     * @var string 更新类型，取值：modify_location_name、modify_location_comment、modify_location_properties
     */
    public $UpdateType;

    /**
     * @var string 新的备注，可选，UpdateType 为 modify_location_comment 时使用
     */
    public $NewComment;

    /**
     * @var array 新增/修改的属性键值对列表，可选，UpdateType 为 modify_location_properties 时使用
     */
    public $SetProperties;

    /**
     * @var array 要移除的属性key列表，可选，UpdateType 为 modify_location_properties 时使用
     */
    public $RemoveProperties;

    /**
     * @var string 新的名称，可选，UpdateType 为 modify_location_name 时使用
     */
    public $NewName;

    /**
     * @param string $UpdateType 更新类型，取值：modify_location_name、modify_location_comment、modify_location_properties
     * @param string $NewComment 新的备注，可选，UpdateType 为 modify_location_comment 时使用
     * @param array $SetProperties 新增/修改的属性键值对列表，可选，UpdateType 为 modify_location_properties 时使用
     * @param array $RemoveProperties 要移除的属性key列表，可选，UpdateType 为 modify_location_properties 时使用
     * @param string $NewName 新的名称，可选，UpdateType 为 modify_location_name 时使用
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
        if (array_key_exists("UpdateType",$param) and $param["UpdateType"] !== null) {
            $this->UpdateType = $param["UpdateType"];
        }

        if (array_key_exists("NewComment",$param) and $param["NewComment"] !== null) {
            $this->NewComment = $param["NewComment"];
        }

        if (array_key_exists("SetProperties",$param) and $param["SetProperties"] !== null) {
            $this->SetProperties = [];
            foreach ($param["SetProperties"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->SetProperties, $obj);
            }
        }

        if (array_key_exists("RemoveProperties",$param) and $param["RemoveProperties"] !== null) {
            $this->RemoveProperties = $param["RemoveProperties"];
        }

        if (array_key_exists("NewName",$param) and $param["NewName"] !== null) {
            $this->NewName = $param["NewName"];
        }
    }
}
