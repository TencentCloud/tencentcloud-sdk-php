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
namespace TencentCloud\Yinsuda\V20220527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标签信息。
 *
 * @method string getTagId() 获取标签 Id。
 * @method void setTagId(string $TagId) 设置标签 Id。
 * @method string getName() 获取标签名称。
 * @method void setName(string $Name) 设置标签名称。
 */
class KTVTagInfo extends AbstractModel
{
    /**
     * @var string 标签 Id。
     */
    public $TagId;

    /**
     * @var string 标签名称。
     */
    public $Name;

    /**
     * @param string $TagId 标签 Id。
     * @param string $Name 标签名称。
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
        if (array_key_exists("TagId",$param) and $param["TagId"] !== null) {
            $this->TagId = $param["TagId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
