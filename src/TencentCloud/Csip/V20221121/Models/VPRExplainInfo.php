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
 * VPR评级解释卡片
 *
 * @method array getVulIntel() 获取<p>漏洞情报</p>
 * @method void setVulIntel(array $VulIntel) 设置<p>漏洞情报</p>
 * @method array getAssetContext() 获取<p>资产上下文</p>
 * @method void setAssetContext(array $AssetContext) 设置<p>资产上下文</p>
 */
class VPRExplainInfo extends AbstractModel
{
    /**
     * @var array <p>漏洞情报</p>
     */
    public $VulIntel;

    /**
     * @var array <p>资产上下文</p>
     */
    public $AssetContext;

    /**
     * @param array $VulIntel <p>漏洞情报</p>
     * @param array $AssetContext <p>资产上下文</p>
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
        if (array_key_exists("VulIntel",$param) and $param["VulIntel"] !== null) {
            $this->VulIntel = [];
            foreach ($param["VulIntel"] as $key => $value){
                $obj = new VPRExplainDimension();
                $obj->deserialize($value);
                array_push($this->VulIntel, $obj);
            }
        }

        if (array_key_exists("AssetContext",$param) and $param["AssetContext"] !== null) {
            $this->AssetContext = [];
            foreach ($param["AssetContext"] as $key => $value){
                $obj = new VPRExplainDimension();
                $obj->deserialize($value);
                array_push($this->AssetContext, $obj);
            }
        }
    }
}
