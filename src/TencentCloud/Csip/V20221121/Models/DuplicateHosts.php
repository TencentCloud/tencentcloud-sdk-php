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
 * 批量添加白名单：重复情况重复列表实体
 *
 * @method string getQuuid() 获取<p>Quuid 参数</p>
 * @method void setQuuid(string $Quuid) 设置<p>Quuid 参数</p>
 * @method string getUuid() 获取<p>Uuid 参数</p>
 * @method void setUuid(string $Uuid) 设置<p>Uuid 参数</p>
 * @method integer getId() 获取<p>Id 参数</p>
 * @method void setId(integer $Id) 设置<p>Id 参数</p>
 */
class DuplicateHosts extends AbstractModel
{
    /**
     * @var string <p>Quuid 参数</p>
     */
    public $Quuid;

    /**
     * @var string <p>Uuid 参数</p>
     */
    public $Uuid;

    /**
     * @var integer <p>Id 参数</p>
     */
    public $Id;

    /**
     * @param string $Quuid <p>Quuid 参数</p>
     * @param string $Uuid <p>Uuid 参数</p>
     * @param integer $Id <p>Id 参数</p>
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
