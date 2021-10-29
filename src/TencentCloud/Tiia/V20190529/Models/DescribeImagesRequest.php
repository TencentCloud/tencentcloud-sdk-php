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
namespace TencentCloud\Tiia\V20190529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImages请求参数结构体
 *
 * @method string getGroupId() 获取图库名称。
 * @method void setGroupId(string $GroupId) 设置图库名称。
 * @method string getEntityId() 获取物品ID。
 * @method void setEntityId(string $EntityId) 设置物品ID。
 * @method string getPicName() 获取图片名称。
 * @method void setPicName(string $PicName) 设置图片名称。
 */
class DescribeImagesRequest extends AbstractModel
{
    /**
     * @var string 图库名称。
     */
    public $GroupId;

    /**
     * @var string 物品ID。
     */
    public $EntityId;

    /**
     * @var string 图片名称。
     */
    public $PicName;

    /**
     * @param string $GroupId 图库名称。
     * @param string $EntityId 物品ID。
     * @param string $PicName 图片名称。
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

        if (array_key_exists("EntityId",$param) and $param["EntityId"] !== null) {
            $this->EntityId = $param["EntityId"];
        }

        if (array_key_exists("PicName",$param) and $param["PicName"] !== null) {
            $this->PicName = $param["PicName"];
        }
    }
}
