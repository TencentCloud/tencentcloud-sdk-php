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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * KV配置
 *
 * @method string getConfKey() 获取<p>key</p>
 * @method void setConfKey(string $ConfKey) 设置<p>key</p>
 * @method string getConfValue() 获取<p>value</p>
 * @method void setConfValue(string $ConfValue) 设置<p>value</p>
 * @method string getModifyType() 获取<p>add/delete/update</p>
 * @method void setModifyType(string $ModifyType) 设置<p>add/delete/update</p>
 * @method boolean getNeedRestart() 获取<p>是否需要重启</p>
 * @method void setNeedRestart(boolean $NeedRestart) 设置<p>是否需要重启</p>
 * @method string getOriginalConfValue() 获取<p>修改前的值</p>
 * @method void setOriginalConfValue(string $OriginalConfValue) 设置<p>修改前的值</p>
 */
class InstanceConfigItem extends AbstractModel
{
    /**
     * @var string <p>key</p>
     */
    public $ConfKey;

    /**
     * @var string <p>value</p>
     */
    public $ConfValue;

    /**
     * @var string <p>add/delete/update</p>
     */
    public $ModifyType;

    /**
     * @var boolean <p>是否需要重启</p>
     */
    public $NeedRestart;

    /**
     * @var string <p>修改前的值</p>
     */
    public $OriginalConfValue;

    /**
     * @param string $ConfKey <p>key</p>
     * @param string $ConfValue <p>value</p>
     * @param string $ModifyType <p>add/delete/update</p>
     * @param boolean $NeedRestart <p>是否需要重启</p>
     * @param string $OriginalConfValue <p>修改前的值</p>
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
        if (array_key_exists("ConfKey",$param) and $param["ConfKey"] !== null) {
            $this->ConfKey = $param["ConfKey"];
        }

        if (array_key_exists("ConfValue",$param) and $param["ConfValue"] !== null) {
            $this->ConfValue = $param["ConfValue"];
        }

        if (array_key_exists("ModifyType",$param) and $param["ModifyType"] !== null) {
            $this->ModifyType = $param["ModifyType"];
        }

        if (array_key_exists("NeedRestart",$param) and $param["NeedRestart"] !== null) {
            $this->NeedRestart = $param["NeedRestart"];
        }

        if (array_key_exists("OriginalConfValue",$param) and $param["OriginalConfValue"] !== null) {
            $this->OriginalConfValue = $param["OriginalConfValue"];
        }
    }
}
