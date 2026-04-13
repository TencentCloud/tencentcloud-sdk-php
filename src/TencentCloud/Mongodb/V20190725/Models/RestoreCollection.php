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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 待回档collection
 *
 * @method string getOldCollection() 获取待回档的原collection
 * @method void setOldCollection(string $OldCollection) 设置待回档的原collection
 * @method string getNewCollection() 获取回档后的collection
 * @method void setNewCollection(string $NewCollection) 设置回档后的collection
 */
class RestoreCollection extends AbstractModel
{
    /**
     * @var string 待回档的原collection
     */
    public $OldCollection;

    /**
     * @var string 回档后的collection
     */
    public $NewCollection;

    /**
     * @param string $OldCollection 待回档的原collection
     * @param string $NewCollection 回档后的collection
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
        if (array_key_exists("OldCollection",$param) and $param["OldCollection"] !== null) {
            $this->OldCollection = $param["OldCollection"];
        }

        if (array_key_exists("NewCollection",$param) and $param["NewCollection"] !== null) {
            $this->NewCollection = $param["NewCollection"];
        }
    }
}
