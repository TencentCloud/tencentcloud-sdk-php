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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多项选择数据
 *
 * @method string getValueCh() 获取<p>中文值</p>
 * @method void setValueCh(string $ValueCh) 设置<p>中文值</p>
 * @method string getValueEn() 获取<p>英文值</p>
 * @method void setValueEn(string $ValueEn) 设置<p>英文值</p>
 * @method integer getOptionKey() 获取<p>每一项的Key值</p>
 * @method void setOptionKey(integer $OptionKey) 设置<p>每一项的Key值</p>
 */
class OptionsItem extends AbstractModel
{
    /**
     * @var string <p>中文值</p>
     */
    public $ValueCh;

    /**
     * @var string <p>英文值</p>
     */
    public $ValueEn;

    /**
     * @var integer <p>每一项的Key值</p>
     */
    public $OptionKey;

    /**
     * @param string $ValueCh <p>中文值</p>
     * @param string $ValueEn <p>英文值</p>
     * @param integer $OptionKey <p>每一项的Key值</p>
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
        if (array_key_exists("ValueCh",$param) and $param["ValueCh"] !== null) {
            $this->ValueCh = $param["ValueCh"];
        }

        if (array_key_exists("ValueEn",$param) and $param["ValueEn"] !== null) {
            $this->ValueEn = $param["ValueEn"];
        }

        if (array_key_exists("OptionKey",$param) and $param["OptionKey"] !== null) {
            $this->OptionKey = $param["OptionKey"];
        }
    }
}
