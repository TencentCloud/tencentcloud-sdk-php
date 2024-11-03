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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Tiga引擎中Mainclass的TypeID和防护模式
 *
 * @method string getTypeID() 获取MainclassID
 * @method void setTypeID(string $TypeID) 设置MainclassID
 * @method integer getMode() 获取防护模式，0表示观察，1表示拦截
 * @method void setMode(integer $Mode) 设置防护模式，0表示观察，1表示拦截
 */
class TigaMainClassMode extends AbstractModel
{
    /**
     * @var string MainclassID
     */
    public $TypeID;

    /**
     * @var integer 防护模式，0表示观察，1表示拦截
     */
    public $Mode;

    /**
     * @param string $TypeID MainclassID
     * @param integer $Mode 防护模式，0表示观察，1表示拦截
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
        if (array_key_exists("TypeID",$param) and $param["TypeID"] !== null) {
            $this->TypeID = $param["TypeID"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }
    }
}
