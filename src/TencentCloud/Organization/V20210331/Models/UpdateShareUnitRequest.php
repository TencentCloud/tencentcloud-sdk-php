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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateShareUnit请求参数结构体
 *
 * @method string getUnitId() 获取共享单元ID。
 * @method void setUnitId(string $UnitId) 设置共享单元ID。
 * @method string getName() 获取共享单元名称。仅支持大小写字母、数字、-、以及_的组合，3-128个字符。
 * @method void setName(string $Name) 设置共享单元名称。仅支持大小写字母、数字、-、以及_的组合，3-128个字符。
 * @method string getDescription() 获取共享单元描述。最大128个字符。
 * @method void setDescription(string $Description) 设置共享单元描述。最大128个字符。
 */
class UpdateShareUnitRequest extends AbstractModel
{
    /**
     * @var string 共享单元ID。
     */
    public $UnitId;

    /**
     * @var string 共享单元名称。仅支持大小写字母、数字、-、以及_的组合，3-128个字符。
     */
    public $Name;

    /**
     * @var string 共享单元描述。最大128个字符。
     */
    public $Description;

    /**
     * @param string $UnitId 共享单元ID。
     * @param string $Name 共享单元名称。仅支持大小写字母、数字、-、以及_的组合，3-128个字符。
     * @param string $Description 共享单元描述。最大128个字符。
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
        if (array_key_exists("UnitId",$param) and $param["UnitId"] !== null) {
            $this->UnitId = $param["UnitId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
