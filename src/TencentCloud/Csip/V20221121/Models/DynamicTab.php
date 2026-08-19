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
 * 资产详情动态tab配置
 *
 * @method string getTabKey() 获取<p>key</p>
 * @method void setTabKey(string $TabKey) 设置<p>key</p>
 * @method integer getCount() 获取<p>数量</p>
 * @method void setCount(integer $Count) 设置<p>数量</p>
 * @method array getAssetType() 获取<p>关联资产配置</p>
 * @method void setAssetType(array $AssetType) 设置<p>关联资产配置</p>
 */
class DynamicTab extends AbstractModel
{
    /**
     * @var string <p>key</p>
     */
    public $TabKey;

    /**
     * @var integer <p>数量</p>
     */
    public $Count;

    /**
     * @var array <p>关联资产配置</p>
     */
    public $AssetType;

    /**
     * @param string $TabKey <p>key</p>
     * @param integer $Count <p>数量</p>
     * @param array $AssetType <p>关联资产配置</p>
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
        if (array_key_exists("TabKey",$param) and $param["TabKey"] !== null) {
            $this->TabKey = $param["TabKey"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = [];
            foreach ($param["AssetType"] as $key => $value){
                $obj = new AssetTypeCount();
                $obj->deserialize($value);
                array_push($this->AssetType, $obj);
            }
        }
    }
}
