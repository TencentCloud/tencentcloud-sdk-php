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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 站点查询过滤条件
 *
 * @method string getName() 获取过滤字段名，支持的列表如下：
<li> name：站点名；</li>
<li> status：站点状态；</li>
<li> tagKey：标签键；</li>
<li> tagValue: 标签值。</li>
 * @method void setName(string $Name) 设置过滤字段名，支持的列表如下：
<li> name：站点名；</li>
<li> status：站点状态；</li>
<li> tagKey：标签键；</li>
<li> tagValue: 标签值。</li>
 * @method array getValues() 获取过滤字段值。
 * @method void setValues(array $Values) 设置过滤字段值。
 * @method boolean getFuzzy() 获取是否启用模糊查询，仅支持过滤字段名为name。模糊查询时，Values长度最大为1。默认为false。
 * @method void setFuzzy(boolean $Fuzzy) 设置是否启用模糊查询，仅支持过滤字段名为name。模糊查询时，Values长度最大为1。默认为false。
 */
class ZoneFilter extends AbstractModel
{
    /**
     * @var string 过滤字段名，支持的列表如下：
<li> name：站点名；</li>
<li> status：站点状态；</li>
<li> tagKey：标签键；</li>
<li> tagValue: 标签值。</li>
     */
    public $Name;

    /**
     * @var array 过滤字段值。
     */
    public $Values;

    /**
     * @var boolean 是否启用模糊查询，仅支持过滤字段名为name。模糊查询时，Values长度最大为1。默认为false。
     */
    public $Fuzzy;

    /**
     * @param string $Name 过滤字段名，支持的列表如下：
<li> name：站点名；</li>
<li> status：站点状态；</li>
<li> tagKey：标签键；</li>
<li> tagValue: 标签值。</li>
     * @param array $Values 过滤字段值。
     * @param boolean $Fuzzy 是否启用模糊查询，仅支持过滤字段名为name。模糊查询时，Values长度最大为1。默认为false。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("Fuzzy",$param) and $param["Fuzzy"] !== null) {
            $this->Fuzzy = $param["Fuzzy"];
        }
    }
}
