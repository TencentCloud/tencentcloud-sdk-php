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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 采集配置信息
 *
 * @method integer getType() 获取采集类型，必填字段。
<li>0：元数据配置。</li>
<li>1：指定Pod Label。</li>
 * @method void setType(integer $Type) 设置采集类型，必填字段。
<li>0：元数据配置。</li>
<li>1：指定Pod Label。</li>
 * @method array getCollectConfigs() 获取指定采集类型的采集配置信息。
<li>当Type为0时，CollectConfigs不允许为空。</li>
<li>当Type为1时，CollectConfigs为空时，表示选择所有Pod Label；否则CollectConfigs为指定Pod Label。</li>
 * @method void setCollectConfigs(array $CollectConfigs) 设置指定采集类型的采集配置信息。
<li>当Type为0时，CollectConfigs不允许为空。</li>
<li>当Type为1时，CollectConfigs为空时，表示选择所有Pod Label；否则CollectConfigs为指定Pod Label。</li>
 */
class CollectInfo extends AbstractModel
{
    /**
     * @var integer 采集类型，必填字段。
<li>0：元数据配置。</li>
<li>1：指定Pod Label。</li>
     */
    public $Type;

    /**
     * @var array 指定采集类型的采集配置信息。
<li>当Type为0时，CollectConfigs不允许为空。</li>
<li>当Type为1时，CollectConfigs为空时，表示选择所有Pod Label；否则CollectConfigs为指定Pod Label。</li>
     */
    public $CollectConfigs;

    /**
     * @param integer $Type 采集类型，必填字段。
<li>0：元数据配置。</li>
<li>1：指定Pod Label。</li>
     * @param array $CollectConfigs 指定采集类型的采集配置信息。
<li>当Type为0时，CollectConfigs不允许为空。</li>
<li>当Type为1时，CollectConfigs为空时，表示选择所有Pod Label；否则CollectConfigs为指定Pod Label。</li>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CollectConfigs",$param) and $param["CollectConfigs"] !== null) {
            $this->CollectConfigs = [];
            foreach ($param["CollectConfigs"] as $key => $value){
                $obj = new CollectConfig();
                $obj->deserialize($value);
                array_push($this->CollectConfigs, $obj);
            }
        }
    }
}
