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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务器标签信息
 *
 * @method integer getRid() 获取<p>关联标签ID</p>
 * @method void setRid(integer $Rid) 设置<p>关联标签ID</p>
 * @method string getName() 获取<p>标签名</p>
 * @method void setName(string $Name) 设置<p>标签名</p>
 * @method integer getTagId() 获取<p>标签ID</p>
 * @method void setTagId(integer $TagId) 设置<p>标签ID</p>
 */
class MachineTag extends AbstractModel
{
    /**
     * @var integer <p>关联标签ID</p>
     */
    public $Rid;

    /**
     * @var string <p>标签名</p>
     */
    public $Name;

    /**
     * @var integer <p>标签ID</p>
     */
    public $TagId;

    /**
     * @param integer $Rid <p>关联标签ID</p>
     * @param string $Name <p>标签名</p>
     * @param integer $TagId <p>标签ID</p>
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
        if (array_key_exists("Rid",$param) and $param["Rid"] !== null) {
            $this->Rid = $param["Rid"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TagId",$param) and $param["TagId"] !== null) {
            $this->TagId = $param["TagId"];
        }
    }
}
